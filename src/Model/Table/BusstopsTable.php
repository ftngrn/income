<?php
namespace App\Model\Table;

use App\Model\Entity\Busstop;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Busstops Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Guardians
 */
class BusstopsTable extends Table
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

        $this->table('busstops');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Guardians', [
            'foreignKey' => 'busstop_id',
            'targetForeignKey' => 'guardian_id',
            'joinTable' => 'busstops_guardians'
        ]);
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
            ->requirePresence('bus', 'create')
            ->notEmpty('bus');

        $validator
            ->requirePresence('course', 'create')
            ->notEmpty('course');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->allowEmpty('address');

        $validator
            ->numeric('lat')
            ->allowEmpty('lat');

        $validator
            ->numeric('lng')
            ->allowEmpty('lng');

        $validator
            ->time('pickup')
            ->allowEmpty('pickup');

        $validator
            ->time('dropoff_am')
            ->allowEmpty('dropoff_am');

        $validator
            ->time('dropoff_pm')
            ->allowEmpty('dropoff_pm');

        $validator
            ->time('w_pickup')
            ->allowEmpty('w_pickup');

        $validator
            ->time('w_dropoff_am')
            ->allowEmpty('w_dropoff_am');

        $validator
            ->time('w_dropoff_pm')
            ->allowEmpty('w_dropoff_pm');

        return $validator;
    }
}
