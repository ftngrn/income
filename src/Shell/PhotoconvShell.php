<?php
namespace App\Shell;

use Cake\Console\Shell;
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
		$C = TableRegistry::get('Children');
		$P = TableRegistry::get('Photos');

		$path = '/tmp/images';
		$ext = '.jpg';
		foreach (glob($path.'/*'.$ext) as $path) {
			$basename = basename($path, $ext);
			$info = $this->parse($basename);
			$this->out(sprintf("Parsed image file: %s", $path));
			$child = $C->find('all')
				->where([
					'kana' => $info['kana'],
					'joined' => $info['joined'],
					'birthed' => $info['birthed'],
				])
				->first();
			if (is_null($child)) {
				$this->out(sprintf("Child not found! (%s birthed:%s)", $info['kana'], $info['birthed']));
				continue;
			}
			$this->out(sprintf("Found! Child#%d", $child->id));
			$item = [
				'model' => 'children',
				'model_id' => $child->id,
				'mime' => 'image/jpeg',
				'name' => basename($path),
				'size' => filesize($path),
				'body' => file_get_contents($path),
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
	}

	private function parse($path) {
		list($kana,$joined,$birthed) = explode('_', $path);
		$kanas = explode('-', $kana);
		return [
			'kana' => implode(' ', $kanas),
			'joined' => $joined,
			'birthed' => $birthed
		];
	}

}

