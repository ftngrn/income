<?php
namespace App\Model\Table;

use App\Model\Entity\WeeklyIdea;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * WeeklyIdeas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Staffs
 * @property \Cake\ORM\Association\HasMany $WeeklyIdeaDetails
 */
class WeeklyIdeasTable extends Table
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

        $this->table('weekly_ideas');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Staffs', [
            'foreignKey' => 'staff_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('WeeklyIdeaDetails', [
            'foreignKey' => 'weekly_idea_id'
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
            ->allowEmpty('room');

        $validator
            ->allowEmpty('gist');

        $validator
            ->date('start')
            ->allowEmpty('start');

        $validator
            ->date('end')
            ->allowEmpty('end');

        $validator
            ->dateTime('principal_checked')
            ->allowEmpty('principal_checked');

        $validator
            ->dateTime('sub_checked')
            ->allowEmpty('sub_checked');

        $validator
            ->dateTime('chief1_checked')
            ->allowEmpty('chief1_checked');

        $validator
            ->dateTime('chief2_checked')
            ->allowEmpty('chief2_checked');

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
        $rules->add($rules->existsIn(['staff_id'], 'Staffs'));
        return $rules;
    }
}
