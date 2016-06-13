<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Filesystem\File;

/**
 * Photos Controller
 *
 * @property \App\Model\Table\PhotosTable $Photos
 */
class PhotosController extends AppController
{

	/**
	 * Initialize
	 *
	 */
	public function initialize()
	{
		parent::initialize();
		$this->loadComponent('RequestHandler');
	}

	/**
	 * View method
	 *
	 * @param string|null $id Photo id.
	 * @return \Cake\Network\Response|null
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function view($id = null)
	{
		$cache_days = 15; //キャッシュする日数
		$this->autoRender = false;
		$photo = $this->Photos->get($id, [
			'contain' => []
		]);
		$body = stream_get_contents($photo->body);
		$this->response->cache('-1 minute', sprintf("+%d days", $cache_days));
		$this->response->type($photo->mime);
		$this->response->length(strlen($body));
		$this->response->body($body);
	}

	/**
	 * Thumbnail method
	 *
	 * @param string|null $id Photo id.
	 * @return \Cake\Network\Response|null
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function thumbnail($id = null)
	{
		$cache_days = 15; //キャッシュする日数
		$this->autoRender = false;
		$photo = $this->Photos->get($id, [
			'contain' => []
		]);
		$cropped = $this->crop(stream_get_contents($photo->body), $id);
		$this->response->cache('-1 minute', sprintf("+%d days", $cache_days));
		$this->response->type($photo->mime);
		$this->response->length(strlen($cropped));
		$this->response->body($cropped);
	}

	/**
	 * Crop method
	 *
	 * @param stream $body Photo binary.
	 * @param string|null $id Photo id for cache.
	 * @return stream cropped photo stream.
	 */
	private function crop($body, $id_for_cache = null) {
		$thumb_pct = 0.1;	//元画像に対するサムネイルの比率
		$center_pct = 0.45; //左右中央切り出しの中央率
		$middle_pct = 0.7;	//上下中央切り出しの中央率
		$cropped = null;

		$im = imagecreatefromstring($body);
		if ($im !== false) {
			$size = getimagesizefromstring($body);
			$w = $size[0];
			$h = $size[1];
			$tw = intval($w * $thumb_pct);
			$th = intval($h * $thumb_pct);
			$nw = intval($tw * $center_pct);
			$nh = intval($th * $middle_pct);
			$nw_offset = intval(abs($tw - $nw) / 2);
			$nh_offset = intval(abs($th - $nh) / 4);

			$imt = imagecreatetruecolor($tw, $th);
			$imn = imagecreatetruecolor($nw, $nh);
			imagecopyresampled($imt, $im, 0, 0, 0, 0, $tw, $th, $w, $h);
			imagecopy($imn, $imt, 0, 0, $nw_offset, $nh_offset*1, $nw, $nh + $nh_offset*3);
			//$img_dataに変換した画像を格納するため標準出力から受け取る
			ob_start();
			imagejpeg($imn, null, 100);
			$cropped = ob_get_contents();
			ob_end_clean();
			imagedestroy($im);
			imagedestroy($imt);
			imagedestroy($imn);

			//静的ファイルがなければ作成、あってもしばらくたっていれば更新
			if ($id_for_cache) {
				$cache_path = sprintf(WWW_ROOT.'caches'.DS.'%s_%d.jpg', $this->request->action, $id_for_cache);
				$file = new File($cache_path);
				if ($file->exists() === false || (time() - $file->lastChange()) > 60*15) {
					file_put_contents($cache_path, $cropped);
				}
				$this->log(sprintf("Create cache:%s", $cache_path), LOG_DEBUG);
			}
		}
		return $cropped;
	}
}
