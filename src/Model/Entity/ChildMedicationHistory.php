<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ChildMedicationHistory Entity.
 *
 * @property int $id
 * @property int $child_medication_id
 * @property \App\Model\Entity\ChildMedication $child_medication
 * @property int $staff_id
 * @property \App\Model\Entity\Staff $staff
 * @property \Cake\I18n\Time $medicated
 * @property string $memo
 * @property \Cake\I18n\Time $created
 */
class ChildMedicationHistory extends Entity
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
