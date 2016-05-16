<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ChildrenFixture
 *
 */
class ChildrenFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'children';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'guardian_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'school' => ['type' => 'string', 'length' => 64, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'room' => ['type' => 'string', 'length' => 16, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'grade' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'comment' => '学年区分（年少/年中/年長など）', 'precision' => null, 'fixed' => null],
        'bus' => ['type' => 'string', 'length' => 16, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'course' => ['type' => 'string', 'length' => 16, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'name' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'kana' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'comment' => '濁音撥音関係なく検索のためにunicode_ci', 'precision' => null, 'fixed' => null],
        'sex' => ['type' => 'string', 'length' => 4, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'birthed' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '誕生日', 'precision' => null],
        'joined' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '入園日', 'precision' => null],
        'finished' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '卒園・退園日', 'precision' => null],
        'memo' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'season' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '期', 'precision' => null, 'autoIncrement' => null],
        'number' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '証書番号', 'precision' => null, 'autoIncrement' => null],
        'oldname' => ['type' => 'string', 'length' => 64, 'null' => true, 'default' => null, 'comment' => '旧姓', 'precision' => null, 'fixed' => null],
        'newschool' => ['type' => 'string', 'length' => 64, 'null' => true, 'default' => null, 'comment' => '進学先名', 'precision' => null, 'fixed' => null],
        'newzip' => ['type' => 'string', 'length' => 16, 'null' => true, 'default' => null, 'comment' => '独立後の郵便番号', 'precision' => null, 'fixed' => null],
        'newpref' => ['type' => 'string', 'length' => 16, 'null' => true, 'default' => null, 'comment' => '独立後の都道府県', 'precision' => null, 'fixed' => null],
        'newaddr' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'comment' => '独立後の住所', 'precision' => null, 'fixed' => null],
        'newaddr2' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'comment' => '独立後の住所2', 'precision' => null, 'fixed' => null],
        'newtel' => ['type' => 'string', 'length' => 64, 'null' => true, 'default' => null, 'comment' => '独立後の電話', 'precision' => null, 'fixed' => null],
        'nondelivery' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '住所が不達だったら:1', 'precision' => null],
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
            'guardian_id' => 1,
            'school' => 'Lorem ipsum dolor sit amet',
            'room' => 'Lorem ipsum do',
            'grade' => 'Lorem ipsum dolor sit amet',
            'bus' => 'Lorem ipsum do',
            'course' => 'Lorem ipsum do',
            'name' => 'Lorem ipsum dolor sit amet',
            'kana' => 'Lorem ipsum dolor sit amet',
            'sex' => 'Lo',
            'birthed' => '2016-05-16',
            'joined' => '2016-05-16',
            'finished' => '2016-05-16',
            'memo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'season' => 1,
            'number' => 1,
            'oldname' => 'Lorem ipsum dolor sit amet',
            'newschool' => 'Lorem ipsum dolor sit amet',
            'newzip' => 'Lorem ipsum do',
            'newpref' => 'Lorem ipsum do',
            'newaddr' => 'Lorem ipsum dolor sit amet',
            'newaddr2' => 'Lorem ipsum dolor sit amet',
            'newtel' => 'Lorem ipsum dolor sit amet',
            'nondelivery' => 1,
            'modified' => '2016-05-16 13:45:47',
            'created' => '2016-05-16 13:45:47'
        ],
    ];
}
