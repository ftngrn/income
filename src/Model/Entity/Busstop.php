<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Busstop Entity.
 *
 * @property int $id
 * @property string $bus
 * @property string $course
 * @property string $name
 * @property string $address
 * @property float $lat
 * @property float $lng
 * @property \Cake\I18n\Time $pickup
 * @property \Cake\I18n\Time $dropoff_am
 * @property \Cake\I18n\Time $dropoff_pm
 * @property \Cake\I18n\Time $w_pickup
 * @property \Cake\I18n\Time $w_dropoff_am
 * @property \Cake\I18n\Time $w_dropoff_pm
 * @property \Cake\I18n\Time $modified
 * @property \Cake\I18n\Time $created
 * @property \App\Model\Entity\BusstopsChildParent[] $busstops_child_parents
 */
class Busstop extends Entity
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
