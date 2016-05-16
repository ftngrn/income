<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Child Entity.
 *
 * @property int $id
 * @property int $guardian_id
 * @property string $school
 * @property string $room
 * @property string $grade
 * @property string $bus
 * @property string $course
 * @property string $name
 * @property string $kana
 * @property string $sex
 * @property \Cake\I18n\Time $birthed
 * @property \Cake\I18n\Time $joined
 * @property \Cake\I18n\Time $finished
 * @property string $memo
 * @property int $season
 * @property int $number
 * @property string $oldname
 * @property string $newschool
 * @property string $newzip
 * @property string $newpref
 * @property string $newaddr
 * @property string $newaddr2
 * @property string $newtel
 * @property bool $nondelivery
 * @property \Cake\I18n\Time $modified
 * @property \Cake\I18n\Time $created
 * @property \App\Model\Entity\ChildHealth[] $child_healths
 * @property \App\Model\Entity\ChildMedication[] $child_medications
 * @property \App\Model\Entity\Income[] $incomes
 * @property \App\Model\Entity\Pta[] $ptas
 */
class Child extends Entity
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
