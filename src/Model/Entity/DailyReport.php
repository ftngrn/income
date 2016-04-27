<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DailyReport Entity.
 *
 * @property int $id
 * @property \Cake\I18n\Time $date
 * @property string $room
 * @property int $staff_id
 * @property \App\Model\Entity\Staff $staff
 * @property string $activity
 * @property string $objective
 * @property string $movement
 * @property string $distribution
 * @property string $agenda
 * @property string $gist
 * @property string $report
 * @property string $problem
 * @property string $injury
 * @property \Cake\I18n\Time $principal_checked
 * @property \Cake\I18n\Time $sub_checked
 * @property \Cake\I18n\Time $chief1_checked
 * @property \Cake\I18n\Time $chief2_checked
 * @property \Cake\I18n\Time $modified
 * @property \Cake\I18n\Time $created
 */
class DailyReport extends Entity
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
