<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GuardiansFixture
 *
 */
class GuardiansFixture extends TestFixture
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
        'school' => ['type' => 'string', 'length' => 64, 'null' => true, 'default' => null, 'comment' => '子を通わせている先', 'precision' => null, 'fixed' => null],
        'mother_name' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'comment' => '母の名前', 'precision' => null, 'fixed' => null],
        'mother_kana' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'comment' => '濁音撥音関係なく検索のためにunicode_ci', 'precision' => null, 'fixed' => null],
        'father_name' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'comment' => '父の名前', 'precision' => null, 'fixed' => null],
        'father_kana' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'comment' => '濁音撥音関係なく検索のためにunicode_ci', 'precision' => null, 'fixed' => null],
        'zip' => ['type' => 'string', 'length' => 16, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'pref' => ['type' => 'string', 'length' => 16, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'addr' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'addr2' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'mobile' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'comment' => '携帯番号', 'precision' => null, 'fixed' => null],
        'tel' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'comment' => '固定電話', 'precision' => null, 'fixed' => null],
        'tels' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'その他電話番号を複数行で', 'precision' => null],
        'memo' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'nondelivery' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '0', 'comment' => '住所が不達だったら:1', 'precision' => null],
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
            'account' => 'Lorem ipsum dolor sit amet',
            'display_name' => 'Lorem ipsum dolor sit amet',
            'secret' => 'Lorem ipsum dolor sit amet',
            'school' => 'Lorem ipsum dolor sit amet',
            'mother_name' => 'Lorem ipsum dolor sit amet',
            'mother_kana' => 'Lorem ipsum dolor sit amet',
            'father_name' => 'Lorem ipsum dolor sit amet',
            'father_kana' => 'Lorem ipsum dolor sit amet',
            'zip' => 'Lorem ipsum do',
            'pref' => 'Lorem ipsum do',
            'addr' => 'Lorem ipsum dolor sit amet',
            'addr2' => 'Lorem ipsum dolor sit amet',
            'mobile' => 'Lorem ipsum dolor sit amet',
            'tel' => 'Lorem ipsum dolor sit amet',
            'tels' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'memo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'nondelivery' => 1,
            'modified' => '2016-05-16 13:46:47',
            'created' => '2016-05-16 13:46:47'
        ],
    ];
}
