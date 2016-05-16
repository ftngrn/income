<?php
namespace App\Model\Table;

use App\Model\Entity\ChildParent;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ChildParents Model
 *
 * @property \Cake\ORM\Association\HasMany $ChildHealths
 * @property \Cake\ORM\Association\HasMany $ChildMedications
 * @property \Cake\ORM\Association\HasMany $Incomes
 * @property \Cake\ORM\Association\HasMany $Journals
 * @property \Cake\ORM\Association\HasMany $Ptas
 * @property \Cake\ORM\Association\BelongsToMany $Busstops
 */
class ChildParentsTable extends Table
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

        $this->table('child_parents');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('ChildHealths', [
            'foreignKey' => 'child_parent_id'
        ]);
        $this->hasMany('ChildMedications', [
            'foreignKey' => 'child_parent_id'
        ]);
        $this->hasMany('Incomes', [
            'foreignKey' => 'child_parent_id'
        ]);
        $this->hasMany('Journals', [
            'foreignKey' => 'child_parent_id'
        ]);
        $this->hasMany('Ptas', [
            'foreignKey' => 'child_parent_id'
        ]);
        $this->belongsToMany('Busstops', [
            'foreignKey' => 'child_parent_id',
            'targetForeignKey' => 'busstop_id',
            'joinTable' => 'busstops_child_parents'
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
            ->allowEmpty('account');

        $validator
            ->allowEmpty('display_name');

        $validator
            ->allowEmpty('secret');

        $validator
            ->allowEmpty('school');

        $validator
            ->allowEmpty('mother_name');

        $validator
            ->allowEmpty('mother_kana');

        $validator
            ->allowEmpty('father_name');

        $validator
            ->allowEmpty('father_kana');

        $validator
            ->allowEmpty('pref');

        $validator
            ->allowEmpty('addr');

        $validator
            ->allowEmpty('addr2');

        $validator
            ->allowEmpty('mobile');

        $validator
            ->allowEmpty('tel');

        $validator
            ->allowEmpty('tels');

        $validator
            ->allowEmpty('memo');

        return $validator;
    }
}
