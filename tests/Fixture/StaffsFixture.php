<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StaffsFixture
 *
 */
class StaffsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'account' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'comment' => 'アカウント名', 'precision' => null, 'fixed' => null],
        'display_name' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'comment' => '表示名', 'precision' => null, 'fixed' => null],
        'secret' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'comment' => 'SHA256,SHA512での運用を想定', 'precision' => null, 'fixed' => null],
        'acl_group' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'comment' => 'グループ名（ACLで使うので半角英数）', 'precision' => null, 'fixed' => null],
        'school' => ['type' => 'string', 'length' => 64, 'null' => false, 'default' => null, 'comment' => '所属', 'precision' => null, 'fixed' => null],
        'system' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '雇用形態（正職員:0, パート:1, 派遣:2）', 'precision' => null, 'autoIncrement' => null],
        'job' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'comment' => '職務（園長/副園長/主任/教諭/事務/総務/バス/清掃/など）', 'precision' => null, 'fixed' => null],
        'room' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'comment' => 'クラス名部屋名', 'precision' => null, 'fixed' => null],
        'grade' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'comment' => '学年区分（年少/年中/年長など）', 'precision' => null, 'fixed' => null],
        'name' => ['type' => 'string', 'length' => 32, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'kana' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'comment' => '濁音撥音関係なく検索のためにunicode_ci', 'precision' => null, 'fixed' => null],
        'old_name' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'wife_name' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'comment' => '奥さんの名前（用務員等）', 'precision' => null, 'fixed' => null],
        'joined' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '在籍開始年月日', 'precision' => null],
        'finished' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '最終在籍日（退職日）', 'precision' => null],
        'birthday' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '誕生日', 'precision' => null],
        'tel' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'mobile' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'zip' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'pref' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'addr' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'addr2' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'memo' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'died' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '死亡したら1', 'precision' => null],
        'attended_25th' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '25周年記念に出席したら1', 'precision' => null],
        'attended_50th' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '50周年記念に出席したら1', 'precision' => null],
        'nondelivery' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '住所が不達だったら1', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'job' => ['type' => 'index', 'columns' => ['job'], 'length' => []],
            'school' => ['type' => 'index', 'columns' => ['school'], 'length' => []],
        ],
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
            'account' => 'Lorem ipsum dolor sit amet',
            'display_name' => 'Lorem ipsum dolor sit amet',
            'secret' => 'Lorem ipsum dolor sit amet',
            'acl_group' => 'Lorem ipsum dolor sit amet',
            'school' => 'Lorem ipsum dolor sit amet',
            'system' => 1,
            'job' => 'Lorem ipsum dolor sit amet',
            'room' => 'Lorem ipsum dolor sit amet',
            'grade' => 'Lorem ipsum dolor sit amet',
            'name' => 'Lorem ipsum dolor sit amet',
            'kana' => 'Lorem ipsum dolor sit amet',
            'old_name' => 'Lorem ipsum dolor sit amet',
            'wife_name' => 'Lorem ipsum dolor sit amet',
            'joined' => '2016-04-27',
            'finished' => '2016-04-27',
            'birthday' => '2016-04-27',
            'tel' => 'Lorem ipsum dolor ',
            'mobile' => 'Lorem ipsum dolor ',
            'zip' => 'Lorem ip',
            'pref' => 'Lorem ipsum dolor sit amet',
            'addr' => 'Lorem ipsum dolor sit amet',
            'addr2' => 'Lorem ipsum dolor sit amet',
            'memo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'died' => 1,
            'attended_25th' => 1,
            'attended_50th' => 1,
            'nondelivery' => 1,
            'modified' => '2016-04-27 15:32:53',
            'created' => '2016-04-27 15:32:53'
        ],
    ];
}
