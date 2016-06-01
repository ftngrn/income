<?php
namespace App\Shell;

use Cake\Console\Shell;
use Cake\Datasource\ConnectionManager;
use Cake\I18n\Date;
use Cake\ORM\TableRegistry;

/**
 * Photoconv shell command.
 */
class PhotoconvShell extends Shell
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


	public function fromfile() {
		$conn = ConnectionManager::get('default');
		$C = TableRegistry::get('Children');
		$P = TableRegistry::get('Photos');

		$dir = '/tmp/images';
		$ext = '.jpg';

		$children = $C->find('all')
			->where(['joined >' => '2013-04-01'])
			->contain([])
			->order(['id']);
		$conn->begin();
		foreach ($children as $child) {
			$kana = preg_replace('/ /', '-', $child->kana);
			$pat = $kana;
			if ($child->joined) {
				$pat .= '_' . $child->joined->format("Y-m-d");
			}
			if ($child->birthed) {
				$pat .= '_' . $child->birthed->format("Y-m-d");
			}
			$files = glob($dir.DS.$pat.'*'.$ext);
			if (empty($files)) {
				$this->out(sprintf("Image not found: %s", $child->kana));
				continue;
			}
			$path = $files[0];
			$basename = basename($path, $ext);
			$info = $this->parse($basename);
			$this->out(sprintf("Parsed image file: %s", $path));
			$item = [
				'model' => 'children',
				'model_id' => $child->id,
				'mime' => 'image/jpeg',
				'name' => $info['name'],
				'size' => filesize($path),
				'body' => file_get_contents($path),
				'modified' => $info['modified'],
				'created' => $info['modified']
			];
			$this->out('Set item');
			$photo = $P->newEntity($item);
			if (!$P->save($photo)) {
				$this->out(sprintf("Failed to save! Child#%d", $child->id));
				debug($photo->errors());
				continue;
			}
			$this->out(sprintf("Success to save! Photo#%d <- Child#%d", $photo->id, $child->id));
		}
		$conn->commit();
	}

	private function parse($path) {
		list($kana,$joined,$birthed,$name,$modified) = explode('_', $path);
		$kanas = explode('-', $kana);
		return [
			'kana' => implode(' ', $kanas),
			'joined' => $joined,
			'birthed' => $birthed,
			'name' => $name,
			'modified' => $modified
		];
	}

}

