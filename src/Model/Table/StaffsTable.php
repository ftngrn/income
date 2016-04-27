<?php
namespace App\Model\Table;

use App\Model\Entity\Staff;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Staffs Model
 *
 * @property \Cake\ORM\Association\HasMany $ChildMedicationHistories
 * @property \Cake\ORM\Association\HasMany $DailyReports
 * @property \Cake\ORM\Association\HasMany $Incomes
 * @property \Cake\ORM\Association\HasMany $Journals
 * @property \Cake\ORM\Association\HasMany $Vacations
 * @property \Cake\ORM\Association\HasMany $WeeklyIdeas
 */
class StaffsTable extends Table
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

        $this->table('staffs');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('ChildMedicationHistories', [
            'foreignKey' => 'staff_id'
        ]);
        $this->hasMany('DailyReports', [
            'foreignKey' => 'staff_id'
        ]);
        $this->hasMany('Incomes', [
            'foreignKey' => 'staff_id'
        ]);
        $this->hasMany('Journals', [
            'foreignKey' => 'staff_id'
        ]);
        $this->hasMany('Vacations', [
            'foreignKey' => 'staff_id'
        ]);
        $this->hasMany('WeeklyIdeas', [
            'foreignKey' => 'staff_id'
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
            ->allowEmpty('acl_group');

        $validator
            ->requirePresence('school', 'create')
            ->notEmpty('school');

        $validator
            ->integer('system')
            ->requirePresence('system', 'create')
            ->notEmpty('system');

        $validator
            ->allowEmpty('job');

        $validator
            ->allowEmpty('room');

        $validator
            ->allowEmpty('grade');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->allowEmpty('kana');

        $validator
            ->allowEmpty('old_name');

        $validator
            ->allowEmpty('wife_name');

        $validator
            ->date('joined')
            ->allowEmpty('joined');

        $validator
            ->date('finished')
            ->allowEmpty('finished');

        $validator
            ->date('birthday')
            ->allowEmpty('birthday');

        $validator
            ->allowEmpty('tel');

        $validator
            ->allowEmpty('mobile');

        $validator
            ->allowEmpty('zip');

        $validator
            ->allowEmpty('pref');

        $validator
            ->allowEmpty('addr');

        $validator
            ->allowEmpty('addr2');

        $validator
            ->allowEmpty('memo');

        $validator
            ->boolean('died')
            ->requirePresence('died', 'create')
            ->notEmpty('died');

        $validator
            ->boolean('attended_25th')
            ->requirePresence('attended_25th', 'create')
            ->notEmpty('attended_25th');

        $validator
            ->boolean('attended_50th')
            ->requirePresence('attended_50th', 'create')
            ->notEmpty('attended_50th');

        $validator
            ->boolean('nondelivery')
            ->requirePresence('nondelivery', 'create')
            ->notEmpty('nondelivery');

        return $validator;
    }
}
