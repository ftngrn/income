<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Staff Entity.
 *
 * @property int $id
 * @property string $account
 * @property string $display_name
 * @property string $secret
 * @property string $acl_group
 * @property string $school
 * @property int $system
 * @property string $job
 * @property string $room
 * @property string $grade
 * @property string $name
 * @property string $kana
 * @property string $old_name
 * @property string $wife_name
 * @property \Cake\I18n\Time $joined
 * @property \Cake\I18n\Time $finished
 * @property \Cake\I18n\Time $birthday
 * @property string $tel
 * @property string $mobile
 * @property string $zip
 * @property string $pref
 * @property string $addr
 * @property string $addr2
 * @property string $memo
 * @property bool $died
 * @property bool $attended_25th
 * @property bool $attended_50th
 * @property bool $nondelivery
 * @property \Cake\I18n\Time $modified
 * @property \Cake\I18n\Time $created
 * @property \App\Model\Entity\DailyReport[] $daily_reports
 * @property \App\Model\Entity\Income[] $incomes
 * @property \App\Model\Entity\Journal[] $journals
 * @property \App\Model\Entity\WeeklyIdea[] $weekly_ideas
 */
class Staff extends Entity
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
