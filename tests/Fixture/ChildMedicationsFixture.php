<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ChildMedicationsFixture
 *
 */
class ChildMedicationsFixture extends TestFixture
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
        'guardian_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'doctor' => ['type' => 'string', 'length' => 64, 'null' => false, 'default' => null, 'comment' => '病院名', 'precision' => null, 'fixed' => null],
        'doctor_tel' => ['type' => 'string', 'length' => 16, 'null' => false, 'default' => null, 'comment' => '病院の電話番号', 'precision' => null, 'fixed' => null],
        'diagnosis' => ['type' => 'string', 'length' => 128, 'null' => false, 'default' => null, 'comment' => '診断名', 'precision' => null, 'fixed' => null],
        'medicine_type' => ['type' => 'string', 'length' => 128, 'null' => false, 'default' => null, 'comment' => '薬の種類', 'precision' => null, 'fixed' => null],
        'medicine_object' => ['type' => 'string', 'length' => 128, 'null' => false, 'default' => null, 'comment' => '薬の内容', 'precision' => null, 'fixed' => null],
        'start' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '投薬開始日', 'precision' => null],
        'end' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '投薬最終日', 'precision' => null, 'autoIncrement' => null],
        'method' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '投薬時間（服用の詳細）', 'precision' => null, 'autoIncrement' => null],
        'caution' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '特記事項', 'precision' => null],
        'received' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '受領日', 'precision' => null],
        'received_staff_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '受領者の教職員ID', 'precision' => null, 'autoIncrement' => null],
        'memo' => ['type' => 'text', 'length' => 16777215, 'null' => true, 'default' => null, 'comment' => '園側の特記事項', 'precision' => null],
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
            'doctor' => 'Lorem ipsum dolor sit amet',
            'doctor_tel' => 'Lorem ipsum do',
            'diagnosis' => 'Lorem ipsum dolor sit amet',
            'medicine_type' => 'Lorem ipsum dolor sit amet',
            'medicine_object' => 'Lorem ipsum dolor sit amet',
            'start' => '2016-05-06',
            'end' => 1,
            'method' => 1,
            'caution' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'received' => '2016-05-06',
            'received_staff_id' => 1,
            'memo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'modified' => '2016-05-06 15:10:11',
            'created' => '2016-05-06 15:10:11'
        ],
    ];
}
