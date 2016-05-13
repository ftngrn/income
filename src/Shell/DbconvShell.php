<?php
namespace App\Shell;

use Cake\Console\Shell;
use Cake\I18n\Date;
use Cake\ORM\TableRegistry;

/**
 * Dbconv shell command.
 */
class DbconvShell extends Shell
{
    /**
     * Manage the available sub-commands along with their arguments and help
     *
     * @see http://book.cakephp.org/3.0/en/console-and-shells.html#configuring-options-and-generating-help
     *
     * @return \Cake\Console\ConsoleOptionParser
     */
    public function getOptionParser()
    {
        $parser = parent::getOptionParser();

        return $parser;
    }

    /**
     * main() method.
     *
     * @return bool|int Success or error code.
     */
    public function main() 
    {
        $this->out($this->OptionParser->help());
		}


	public function children() {
		require_once('tmp/children.php');
		$this->out(sprintf("Loaded children: %d", count($children)));

		$C = TableRegistry::get('Children');
		$G = TableRegistry::get('Guardians');

		foreach ($children as $i => $data) {
			//Guardiansスキーマが異なる部分は手作業で代入
			$gua = $data;
			$gua['mother_name'] = $data['name']." 母";
			$gua['mother_kana'] = $data['kana']." 母";
			if (preg_match("/^札幌市/", $data['addr'])) {
				$gua['pref'] = '北海道';
			}
			$gua['tels'] = $data['tel1'];
			if (strlen($data['tel2']) > 0) {
				$gua['tels'] .= "\n".$data['tel2'];
			}
			unset($gua['memo']);
			$gua['modified'] = $data['updated'];
			//保存してIDを取得する
			$guardian = $G->newEntity($gua);
			if ($G->save($guardian)) {
				$this->out(sprintf("%4d %s#:%d", $i, $guardian->mother_name, $guardian->id));

				//Childrenスキーマが異なる部分は手作業で代入
				$chi = $data;
				$chi['guardian_id'] = $guardian->id;
				$chi['room'] = $data['class'];
				$chi['grade'] = $this->gradeByRoom($chi['room']);
				$chi['birthed'] = $data['birthday'];
				$chi['modified'] = $data['updated'];
				//保存してIDを取得する
				$child = $C->newEntity($chi);
				if ($C->save($child)) {
					$this->out(sprintf("%4d %s#:%d (guardian#%d)", $i, $child->name, $child->id, $child->guardian_id));
				}
			}
		}
	}

	private function dateFromFinished($finished) {
		//卒園日の記録は平成しかない（笹久保さんが入力してくれた部分のみなので）
		if (!is_null($finished) && preg_match('/^平成(\d+)年(\d+)月(\d+)日$/', $finished, $m)) {
			return new Date(sprintf("%4d-%02d-%02d", intVal($m[1])+1988, $m[2], $m[3]));
		}
		return null;
	}

	private function parseSpan($span_str) {
		$span = [];
		if (preg_match('/^(\d+)(\D+)((\d+)(\D+))?/', $span_str, $m)) {
			$monthByYear = 0;
			$span['source'] = $m[0];
			//年がある場合は続いて月数も書かれている場合があるため
			if ($m[2] === "年") {
				$span['year'] = intVal($m[1]);
				$span['month'] = 0;
				if (count($m) == 6) {
					$span['month'] = intVal($m[4]);
				}
				$monthByYear = intVal($span['year']) * 12;
			}
			//それ以外は月数しか書かれていない
			else {
				$span['month'] = intVal($m[1]);
			}
			//最終的には月数で保存するので
			$span['month_by_span'] = $monthByYear + $span['month'];
			return $span;
		}
		return null;
	}

	private function ymdFromJDate($jdate) {
		if (preg_match('/^(\D+)(\d+)(\D+)(\d+)(\D+)(\d+)(\D+)/', $jdate, $mc)) {
			$g = $mc[1];
			$y = intVal($mc[2]);
			$m = intVal($mc[4]);
			$d = intVal($mc[6]);
			if ($g === '平成') $y += 1988;
			elseif ($g === '昭和') $y += 1925;
			elseif ($g === '大正') $y += 1911;
			elseif ($g === '明治') $y += 1868;
			return sprintf("%d-%02d-%02d", $y, $m, $d);
		}
		return null;
	}

	public function allchildren() {
		require_once('tmp/allchildren.php');
		$this->out(sprintf("Loaded allchildren: %d", count($allchildren)));

		$C = TableRegistry::get('Children');
		$G = TableRegistry::get('Guardians');

		foreach ($allchildren as $i => $data) {
			$season = intVal($data['season']);
			$finishedBySeason = null;
			if ($season > 0) {
				$finishedBySeason = new Date(sprintf("%4d-03-16", $season+1965));
			}
			$finished = $this->dateFromFinished($data['finished']);
			$span = $this->parseSpan($data['span']);
			//TODO: seasonとspanから入園日・卒園日を算出
			//そしてjoined,finishedに入れる
			//もしfinishedが入ってればそちらを優先する

			$data['birthed'] = $this->ymdFromJDate($data['birthday']);
			//データの空白はNULLにしちゃう
			if (empty($data['classname'])) {
				$data['classname'] = null;
			}
			if (empty($data['school'])) {
				unset($data['school']);
			}
			if (empty($data['tel'])) {
				unset($data['tel']);
			}
			if (empty($data['mobile'])) {
				unset($data['mobile']);
			}
			//Guardiansスキーマが異なる部分は手作業で代入
			$gua = $data;
			if (isset($data['parent_name'])) {
				$gua['mother_name'] = $gua['father_name'] = $data['parent_name'];
			}
			else {
				$gua['mother_name'] = $data['name']." 母";
				$gua['mother_kana'] = $data['kana']." 母";
			}
			if (preg_match("/^札幌市/", $data['addr'])) {
				$gua['pref'] = '北海道';
			}
			unset($gua['memo'], $gua['school']);
			$gua['modified'] = $data['updated'];
			//保存してIDを取得する
			$guardian = $G->newEntity($gua);
			if ($G->save($guardian)) {
				$this->out(sprintf("%4d %s#:%d", $i, $guardian->mother_name, $guardian->id));

				//Childrenスキーマが異なる部分は手作業で代入
				$chi = $data;
				$chi['school'] = '真駒内幼稚園';
				$chi['guardian_id'] = $guardian->id;
				$chi['room'] = $data['classname'];
				$chi['newschool'] = $data['school'];
				$chi['newzip'] = $data['zip'];
				$chi['newpref'] = $data['pref'];
				$chi['newaddr'] = $data['addr'];
				$chi['newaddr2'] = $data['addr2'];
				$chi['modified'] = $data['updated'];
				//保存してIDを取得する
				$child = $C->newEntity($chi);
				if ($C->save($child)) {
					$this->out(sprintf("%4d %s#:%d (guardian#%d)", $i, $child->name, $child->id, $child->guardian_id));
				} else {
					$this->out("error:".print_r($child, true));

				}
			}
			if ($i > 2) break;
		}
	}

	private function gradeByRoom($room) {
		$grade = null;
		if (in_array($room, ['うめ','もも','たんぽぽ'])) {
			$grade = '年少';
		} else
		if (in_array($room, ['さくら','ひまわり','ちゅうりっぷ'])) {
			$grade = '年中';
		} else
		if (in_array($room, ['ゆり','ばら','すみれ'])) {
			$grade = '年長';
		}
		return $grade;
	}
}
