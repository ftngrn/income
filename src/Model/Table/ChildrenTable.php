<?php
namespace App\Model\Table;

use App\Model\Entity\Child;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Children Model
 *
 * @property \Cake\ORM\Association\HasMany $ChildHealths
 * @property \Cake\ORM\Association\HasMany $ChildMedications
 * @property \Cake\ORM\Association\HasMany $Incomes
 * @property \Cake\ORM\Association\HasMany $Ptas
 */
class ChildrenTable extends Table
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

        $this->table('children');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('ChildHealths', [
            'foreignKey' => 'child_id'
        ]);
        $this->hasMany('ChildMedications', [
            'foreignKey' => 'child_id'
        ]);
        $this->hasMany('Incomes', [
            'foreignKey' => 'child_id'
        ]);
        $this->hasMany('Ptas', [
            'foreignKey' => 'child_id'
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
            ->allowEmpty('school');

        $validator
            ->allowEmpty('room');

        $validator
            ->allowEmpty('grade');

        $validator
            ->allowEmpty('bus');

        $validator
            ->allowEmpty('course');

        $validator
            ->allowEmpty('name');

        $validator
            ->allowEmpty('kana');

        $validator
            ->allowEmpty('sex');

        $validator
            ->date('birthed')
            ->allowEmpty('birthed');

        $validator
            ->allowEmpty('memo');

        return $validator;
    }
}
