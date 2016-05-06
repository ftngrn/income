<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pta Entity.
 *
 * @property int $id
 * @property int $guardian_id
 * @property \App\Model\Entity\Guardian $guardian
 * @property int $child_id
 * @property \App\Model\Entity\Child $child
 * @property string $name
 * @property string $kana
 * @property string $year
 * @property string $room
 * @property string $job
 * @property string $zip
 * @property string $addr
 * @property string $tel
 * @property string $mobile
 * @property string $memo
 * @property \Cake\I18n\Time $modified
 * @property \Cake\I18n\Time $created
 */
class Pta extends Entity
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
