<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * WeeklyIdeaDetail Entity.
 *
 * @property int $id
 * @property int $weekly_idea_id
 * @property \App\Model\Entity\Weeklyea $weeklyea
 * @property \Cake\I18n\Time $date
 * @property string $events
 * @property string $activity
 * @property string $memo
 * @property \Cake\I18n\Time $modified
 * @property \Cake\I18n\Time $created
 */
class WeeklyIdeaDetail extends Entity
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
