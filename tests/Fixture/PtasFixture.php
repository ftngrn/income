<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PtasFixture
 *
 */
class PtasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'guardian_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '保護者ID（parentsに登録されているとは限らないので0もありえる）', 'precision' => null, 'autoIncrement' => null],
        'child_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '子どものID（複数いる場合は就任クラスの子）', 'precision' => null, 'autoIncrement' => null],
        'name' => ['type' => 'string', 'length' => 64, 'null' => false, 'default' => null, 'comment' => '名前', 'precision' => null, 'fixed' => null],
        'kana' => ['type' => 'string', 'length' => 64, 'null' => true, 'default' => null, 'comment' => 'カナ', 'precision' => null, 'fixed' => null],
        'year' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '就任年度', 'precision' => null],
        'room' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'comment' => '就任クラス名', 'precision' => null, 'fixed' => null],
        'job' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'comment' => '役職名（正副も記入）', 'precision' => null, 'fixed' => null],
        'zip' => ['type' => 'string', 'length' => 16, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'addr' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'tel' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'comment' => '電話番号', 'precision' => null, 'fixed' => null],
        'mobile' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'comment' => '携帯電話', 'precision' => null, 'fixed' => null],
        'memo' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '備考', 'precision' => null],
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
            'child_id' => 1,
            'name' => 'Lorem ipsum dolor sit amet',
            'kana' => 'Lorem ipsum dolor sit amet',
            'year' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'room' => 'Lorem ipsum dolor sit amet',
            'job' => 'Lorem ipsum dolor sit amet',
            'zip' => 'Lorem ipsum do',
            'addr' => 'Lorem ipsum dolor sit amet',
            'tel' => 'Lorem ipsum dolor sit amet',
            'mobile' => 'Lorem ipsum dolor sit amet',
            'memo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'modified' => '2016-05-06 15:11:21',
            'created' => '2016-05-06 15:11:21'
        ],
    ];
}
