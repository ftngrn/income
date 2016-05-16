<?php
namespace App\Controller;

use App\Controller\AppController;

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
		$customers['id'] = '123';
		$this->set('customers', $customers);
		$this->set('_serialize', ['customers']);
	}
}
