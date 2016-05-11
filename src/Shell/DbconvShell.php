<?php
namespace App\Shell;

use Cake\Console\Shell;
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
				if (in_array($chi['room'], ['うめ','もも','たんぽぽ'])) {
					$chi['grade'] = '年少';
				} else
				if (in_array($chi['room'], ['さくら','ひまわり','ちゅうりっぷ'])) {
					$chi['grade'] = '年中';
				} else
				if (in_array($chi['room'], ['ゆり','ばら','すみれ'])) {
					$chi['grade'] = '年長';
				}
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

}
