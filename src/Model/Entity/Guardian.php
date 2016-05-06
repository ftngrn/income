<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Guardian Entity.
 *
 * @property int $id
 * @property string $account
 * @property string $display_name
 * @property string $secret
 * @property string $school
 * @property string $mother_name
 * @property string $mother_kana
 * @property string $father_name
 * @property string $father_kana
 * @property string $pref
 * @property string $addr
 * @property string $addr2
 * @property string $mobile
 * @property string $tel
 * @property string $tels
 * @property string $memo
 * @property \Cake\I18n\Time $modified
 * @property \Cake\I18n\Time $created
 * @property \App\Model\Entity\ChildHealth[] $child_healths
 * @property \App\Model\Entity\ChildMedication[] $child_medications
 * @property \App\Model\Entity\Income[] $incomes
 * @property \App\Model\Entity\Pta[] $ptas
 * @property \App\Model\Entity\Busstop[] $busstops
 */
class Guardian extends Entity
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
