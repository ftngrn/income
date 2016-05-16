<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * WeeklyIdeasFixture
 *
 */
class WeeklyIdeasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'room' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'staff_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '記入した教職員ID', 'precision' => null, 'autoIncrement' => null],
        'gist' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '今週のポイント', 'precision' => null],
        'start' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '週の初日', 'precision' => null],
        'end' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '週の最終日', 'precision' => null],
        'principal_checked' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '園長確認', 'precision' => null],
        'sub_checked' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '副園長確認', 'precision' => null],
        'chief1_checked' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '主任確認', 'precision' => null],
        'chief2_checked' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '主任確認', 'precision' => null],
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
            'room' => 'Lorem ipsum dolor sit amet',
            'staff_id' => 1,
            'gist' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'start' => '2016-05-06',
            'end' => '2016-05-06',
            'principal_checked' => '2016-05-06 15:11:43',
            'sub_checked' => '2016-05-06 15:11:43',
            'chief1_checked' => '2016-05-06 15:11:43',
            'chief2_checked' => '2016-05-06 15:11:43',
            'modified' => '2016-05-06 15:11:43',
            'created' => '2016-05-06 15:11:43'
        ],
    ];
}
