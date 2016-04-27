<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DailyReportsFixture
 *
 */
class DailyReportsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'date' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'いつの日報か', 'precision' => null],
        'room' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'staff_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '記入した教職員ID', 'precision' => null, 'autoIncrement' => null],
        'activity' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '主な活動', 'precision' => null],
        'objective' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'ねらい', 'precision' => null],
        'movement' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '欠席・入退園児', 'precision' => null],
        'distribution' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '配布物', 'precision' => null],
        'agenda' => ['type' => 'text', 'length' => 16777215, 'null' => true, 'default' => null, 'comment' => 'その日の流れ', 'precision' => null],
        'gist' => ['type' => 'text', 'length' => 16777215, 'null' => true, 'default' => null, 'comment' => '指導の要点', 'precision' => null],
        'report' => ['type' => 'text', 'length' => 16777215, 'null' => true, 'default' => null, 'comment' => 'やったこと・できたこと', 'precision' => null],
        'problem' => ['type' => 'text', 'length' => 16777215, 'null' => true, 'default' => null, 'comment' => '課題', 'precision' => null],
        'injury' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'ケガ', 'precision' => null],
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
            'date' => '2016-04-27',
            'room' => 'Lorem ipsum dolor sit amet',
            'staff_id' => 1,
            'activity' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'objective' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'movement' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'distribution' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'agenda' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'gist' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'report' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'problem' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'injury' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'principal_checked' => '2016-04-27 15:33:29',
            'sub_checked' => '2016-04-27 15:33:29',
            'chief1_checked' => '2016-04-27 15:33:29',
            'chief2_checked' => '2016-04-27 15:33:29',
            'modified' => '2016-04-27 15:33:29',
            'created' => '2016-04-27 15:33:29'
        ],
    ];
}
