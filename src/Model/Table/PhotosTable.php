<?php
namespace App\Model\Table;

use App\Model\Entity\Photo;
use ArrayObject;
use Cake\Event\Event;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Photos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Models
 */
class PhotosTable extends Table
{

	/**
	 * Initialize method
	 *
	 * @param array $config The configuration for the Table.
	 * @return void
	 */
	public function initialize(array $config)
	{
		parent::initialize($config);

		$this->table('photos');
		$this->displayField('name');
		$this->primaryKey('id');

		$this->addBehavior('Timestamp');
	}

	/**
	 * Default validation rules.
	 *
	 * @param \Cake\Validation\Validator $validator Validator instance.
	 * @return \Cake\Validation\Validator
	 */
	public function validationDefault(Validator $validator)
	{
		$validator
			->integer('id')
			->allowEmpty('id', 'create');

		$validator
			->requirePresence('model', 'create')
			->notEmpty('model');

		$validator
			->integer('seq')
			->allowEmpty('seq');

		$validator
			->allowEmpty('body');

		$validator
			->integer('size')
			->requirePresence('size', 'create')
			->notEmpty('size');

		$validator
			->allowEmpty('mime');

		$validator
			->allowEmpty('name');

		return $validator;
	}

	/**
	 * Returns a rules checker object that will be used for validating
	 * application integrity.
	 *
	 * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
	 * @return \Cake\ORM\RulesChecker
	 */
	public function buildRules(RulesChecker $rules)
	{
		return $rules;
	}

	// WithoutBody finder
	public function findWithoutBody(Query $query, array $options) {
		//body以外を取得する
		return $query->select(['id', 'model_id', 'seq', 'size', 'mime', 'name', 'modified', 'created'])
			->order(['seq' => 'desc']);
	}

	public function beforeMarshal(Event $event, ArrayObject $data, ArrayObject $options)
	{
		$source = $options['association']->source();
		if ($source) {
			$data['model'] = $source->table();
		}
		if ($data['file']['error'] === UPLOAD_ERR_OK) {
			$data['body'] = file_get_contents($data['file']['tmp_name']);
			$data['size'] = $data['file']['size'];
			$data['mime'] = $data['file']['type'];
			$data['name'] = $data['file']['name'];
		} else {
			unset($data);
		}
	}

}
