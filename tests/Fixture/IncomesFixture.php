<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * IncomesFixture
 *
 */
class IncomesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'child_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'guardian_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '登録した保護者ID', 'precision' => null, 'autoIncrement' => null],
        'staff_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '登録した教職員ID', 'precision' => null, 'autoIncrement' => null],
        'income_types' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '連絡種別（欠席/朝送り/迎え/預かり/遅刻/連絡 etc）', 'precision' => null, 'autoIncrement' => null],
        'cautions' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'comment' => '注意事項（帰りモチ/園だより/荷物）', 'precision' => null, 'fixed' => null],
        'absence_type' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'comment' => '欠席種別（病欠/私用/事故/忌引）', 'precision' => null, 'fixed' => null],
        'childcare_start' => ['type' => 'time', 'length' => null, 'null' => true, 'default' => null, 'comment' => '預かり保育開始時間', 'precision' => null],
        'childcare_end' => ['type' => 'time', 'length' => null, 'null' => true, 'default' => null, 'comment' => '預かり保育終了時間', 'precision' => null],
        'childcare_meal' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '預かり保育給食利用（1:利用', 'precision' => null],
        'start' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '出欠の開始日', 'precision' => null],
        'end' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '出欠の最終日', 'precision' => null],
        'repeat_type' => ['type' => 'string', 'length' => 16, 'null' => true, 'default' => null, 'comment' => '繰り返す種類（毎日/毎週）', 'precision' => null, 'fixed' => null],
        'repeat_week' => ['type' => 'string', 'length' => 8, 'null' => true, 'default' => null, 'comment' => '繰り返す曜日', 'precision' => null, 'fixed' => null],
        'sickness' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'comment' => '病名', 'precision' => null, 'fixed' => null],
        'consulted' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '受診日', 'precision' => null],
        'fevered' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '発熱した日', 'precision' => null],
        'recovered' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '回復日', 'precision' => null],
        'temperature' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '体温'],
        'cough' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '咳の有無（1:有', 'precision' => null],
        'route' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'comment' => '感染経路', 'precision' => null, 'fixed' => null],
        'ip_addr' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'memo' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
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
            'child_id' => 1,
            'guardian_id' => 1,
            'staff_id' => 1,
            'income_types' => 1,
            'cautions' => 'Lorem ipsum dolor sit amet',
            'absence_type' => 'Lorem ipsum dolor sit amet',
            'childcare_start' => '15:11:13',
            'childcare_end' => '15:11:13',
            'childcare_meal' => 1,
            'start' => '2016-05-06',
            'end' => '2016-05-06',
            'repeat_type' => 'Lorem ipsum do',
            'repeat_week' => 'Lorem ',
            'sickness' => 'Lorem ipsum dolor sit amet',
            'consulted' => '2016-05-06',
            'fevered' => '2016-05-06',
            'recovered' => '2016-05-06',
            'temperature' => 1,
            'cough' => 1,
            'route' => 'Lorem ipsum dolor sit amet',
            'ip_addr' => 'Lorem ipsum dolor sit amet',
            'memo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'modified' => '2016-05-06 15:11:13',
            'created' => '2016-05-06 15:11:13'
        ],
    ];
}
