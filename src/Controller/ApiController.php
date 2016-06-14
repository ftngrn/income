<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Collection\Collection;
use Cake\Network\Exception\BadRequestException;
use Cake\ORM\TableRegistry;

/**
 * Api Controller
 *
 * @property \App\Model\Table\ApiTable $Api
 */
class ApiController extends AppController
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
	 * Children method
	 *
	 */
	public function children()
	{
		$C = TableRegistry::get('Children');
		$query = $C->find('all')
			->where(['finished IS NULL'])
			->contain(['Incomes','Photos'])
			->order('kana')
			->all();
		//結果をもとにサマリを作成
		$query->each(function ($src, $i) {
			list($sei,$mei) = explode(' ', $src->kana);
			$seion = $this->seion($src->kana);
			$d = [];
			$d []= $seion['sei'];
			$d []= 'SFN'.$seion['mei'];	//Seion FirstName
			$d []= 'LN'.$sei;	//LastName
			$d []= 'FN'.$mei;	//FirstName
			$d []= 'CR'.$src->room;	//ClassRoom
			$d []= 'BC'.$src->course;	//BusCourse
			$d []= 'SC'.$src->school;	//SChool
			$d []= 'SE'.$src->sex;	//SEx
			$d []= 'BD'.$src->birthed->format('m');	//month of BirthedDay
			$summary = implode(' ', $d);
			$src->summary = $summary;
		});
		//サマリをキーにしてEntityを値にする
		$children = (new Collection($query))->combine(
			'summary',
			function ($entity) { return $entity; }
		);
		//レスポンス用にする
		$this->set('children', $children);
		$this->set('_serialize', 'children');
		$this->set('_jsonOptions', JSON_UNESCAPED_UNICODE);
	}

	private function seion($srcKana) {
		$kana = mb_convert_kana($srcKana, 'hk');	//半角カタカナにする
		$kana = mb_ereg_replace('ﾞ|ﾟ', '', $kana);	//半角カタカナにすると濁点や半濁点が一時になるので消去
		$kana = mb_convert_kana($kana, 'H');	//全角ひらがなする
		list($sei,$mei) = explode(' ', $kana);	//半角スペース区切りで分ける
		return ['kana' => $kana, 'sei' => $sei, 'mei' => $mei];
	}

	/**
	 * Incomes method
	 *
	 */
	public function incomes() {
		if (!isset($this->request->data['child'])) {
			throw new BadRequestException('Child is required');
		}
		if (!isset($this->request->data['income'])) {
			throw new BadRequestException('Income is required');
		}
		//Data作成
		$data = $this->request->data['income'];
		$data['end'] = $data['start'];
		$data['child_id'] = $this->request->data['child']['id'];
		//レスポンス（JSON用）作成
		$response = [
			'code' => 200,
			'error' => null,
			'data' => $data,
		];
		//save
		$I = TableRegistry::get('Incomes');
		$income = $I->newEntity($data);
		if ($income->errors()) {
			$msgs = [];
			foreach ($income->errors() as $col => $val) {
				$msgs[] = sprintf("%s => [%s]", implode("/", $val), $col);
			}
			throw new BadRequestException(implode("\n", $msgs));
		}
		$I->save($income);
		//JSON出力
		$json = json_encode($response, JSON_UNESCAPED_UNICODE);
		$this->autoRender = false;
		$this->response->type('application/json');
		$this->response->charset('UTF-8');
		$this->response->length(strlen($json));
		$this->response->body($json);
	}
}
