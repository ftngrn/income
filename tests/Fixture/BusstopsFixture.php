<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BusstopsFixture
 *
 */
class BusstopsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'bus' => ['type' => 'string', 'length' => 16, 'null' => false, 'default' => null, 'comment' => 'バス名', 'precision' => null, 'fixed' => null],
        'course' => ['type' => 'string', 'length' => 16, 'null' => false, 'default' => null, 'comment' => 'コース名', 'precision' => null, 'fixed' => null],
        'name' => ['type' => 'string', 'length' => 64, 'null' => false, 'default' => null, 'comment' => 'バス停名', 'precision' => null, 'fixed' => null],
        'address' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'comment' => '住所', 'precision' => null, 'fixed' => null],
        'lat' => ['type' => 'float', 'length' => 9, 'precision' => 6, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '緯度'],
        'lng' => ['type' => 'float', 'length' => 9, 'precision' => 6, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '経度'],
        'pickup' => ['type' => 'time', 'length' => null, 'null' => true, 'default' => null, 'comment' => '朝乗車時刻', 'precision' => null],
        'dropoff_am' => ['type' => 'time', 'length' => null, 'null' => true, 'default' => null, 'comment' => '午前降車時刻', 'precision' => null],
        'dropoff_pm' => ['type' => 'time', 'length' => null, 'null' => true, 'default' => null, 'comment' => '午後降車時刻', 'precision' => null],
        'w_pickup' => ['type' => 'time', 'length' => null, 'null' => true, 'default' => null, 'comment' => '朝乗車時刻（冬）', 'precision' => null],
        'w_dropoff_am' => ['type' => 'time', 'length' => null, 'null' => true, 'default' => null, 'comment' => '午前降車時刻（冬）', 'precision' => null],
        'w_dropoff_pm' => ['type' => 'time', 'length' => null, 'null' => true, 'default' => null, 'comment' => '午後降車時刻（冬）', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'bus' => 'Lorem ipsum do',
            'course' => 'Lorem ipsum do',
            'name' => 'Lorem ipsum dolor sit amet',
            'address' => 'Lorem ipsum dolor sit amet',
            'lat' => 1,
            'lng' => 1,
            'pickup' => '15:09:19',
            'dropoff_am' => '15:09:19',
            'dropoff_pm' => '15:09:19',
            'w_pickup' => '15:09:19',
            'w_dropoff_am' => '15:09:19',
            'w_dropoff_pm' => '15:09:19',
            'modified' => '2016-05-06 15:09:19',
            'created' => '2016-05-06 15:09:19'
        ],
    ];
}
