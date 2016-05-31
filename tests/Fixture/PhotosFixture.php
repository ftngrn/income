<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PhotosFixture
 *
 */
class PhotosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'model' => ['type' => 'string', 'length' => 64, 'null' => false, 'default' => null, 'comment' => '対象モデル名', 'precision' => null, 'fixed' => null],
        'model_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '対象モデルID', 'precision' => null, 'autoIncrement' => null],
        'seq' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '表示順（少ない値ほど優先）', 'precision' => null, 'autoIncrement' => null],
        'body' => ['type' => 'binary', 'length' => 16777215, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'size' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'ファイルサイズ', 'precision' => null, 'autoIncrement' => null],
        'mime' => ['type' => 'string', 'length' => 64, 'null' => true, 'default' => null, 'comment' => 'MIMEタイプ', 'precision' => null, 'fixed' => null],
        'name' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'comment' => 'ファイル名', 'precision' => null, 'fixed' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'search_idx' => ['type' => 'index', 'columns' => ['model', 'model_id', 'seq'], 'length' => []],
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
            'model' => 'Lorem ipsum dolor sit amet',
            'model_id' => 1,
            'seq' => 1,
            'body' => 'Lorem ipsum dolor sit amet',
            'size' => 1,
            'mime' => 'Lorem ipsum dolor sit amet',
            'name' => 'Lorem ipsum dolor sit amet',
            'modified' => '2016-05-31 15:06:58',
            'created' => '2016-05-31 15:06:58'
        ],
    ];
}
