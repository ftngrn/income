<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ChildMedication Entity.
 *
 * @property int $id
 * @property int $child_id
 * @property \App\Model\Entity\Child $child
 * @property int $guardian_id
 * @property string $doctor
 * @property string $doctor_tel
 * @property string $diagnosis
 * @property string $medicine_type
 * @property string $medicine_object
 * @property \Cake\I18n\Time $start
 * @property int $end
 * @property int $method
 * @property string $caution
 * @property \Cake\I18n\Time $received
 * @property int $received_staff_id
 * @property \App\Model\Entity\ReceivedStaff $received_staff
 * @property string $memo
 * @property \Cake\I18n\Time $modified
 * @property \Cake\I18n\Time $created
 * @property \App\Model\Entity\ChildParent $child_parent
 * @property \App\Model\Entity\ChildMedicationHistory[] $child_medication_histories
 */
class ChildMedication extends Entity
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
