<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Income Entity.
 *
 * @property int $id
 * @property int $child_id
 * @property \App\Model\Entity\Child $child
 * @property int $guardian_id
 * @property \App\Model\Entity\Guardian $guardian
 * @property int $staff_id
 * @property \App\Model\Entity\Staff $staff
 * @property int $income_types
 * @property string $cautions
 * @property string $absence_type
 * @property \Cake\I18n\Time $childcare_start
 * @property \Cake\I18n\Time $childcare_end
 * @property bool $childcare_meal
 * @property \Cake\I18n\Time $start
 * @property \Cake\I18n\Time $end
 * @property string $repeat_type
 * @property string $repeat_week
 * @property string $sickness
 * @property \Cake\I18n\Time $consulted
 * @property \Cake\I18n\Time $fevered
 * @property \Cake\I18n\Time $recovered
 * @property float $temperature
 * @property bool $cough
 * @property string $route
 * @property string $ip_addr
 * @property string $memo
 * @property \Cake\I18n\Time $modified
 * @property \Cake\I18n\Time $created
 */
class Income extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
