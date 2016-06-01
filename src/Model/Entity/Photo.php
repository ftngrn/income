<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Photo Entity.
 *
 * @property int $id
 * @property \App\Model\Entity\Model $model
 * @property int $model_id
 * @property int $seq
 * @property string|resource $body
 * @property int $size
 * @property string $mime
 * @property string $name
 * @property \Cake\I18n\Time $modified
 * @property \Cake\I18n\Time $created
 */
class Photo extends Entity
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
