<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ChildHealth Entity.
 *
 * @property int $id
 * @property int $child_id
 * @property \App\Model\Entity\Child $child
 * @property int $guardian_id
 * @property string $insurance_number
 * @property string $doctor
 * @property string $doctor_tel
 * @property float $temperature
 * @property int $has_allergy
 * @property string $allergy_diet
 * @property string $urticaria_food
 * @property int $nap
 * @property string $caution
 * @property string $memo
 * @property \Cake\I18n\Time $modified
 * @property \Cake\I18n\Time $created
 * @property \App\Model\Entity\ChildParent $child_parent
 */
class ChildHealth extends Entity
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
