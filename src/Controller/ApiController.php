<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Collection\Collection;
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
			->contain(['Incomes'])
			->order('kana')
			->all();
		//結果をもとにサマリを作成
		$query->each(function ($src, $i) {
			$d = [];
			$d []= $src->kana;
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
}
