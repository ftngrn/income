<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ChildHealthsFixture
 *
 */
class ChildHealthsFixture extends TestFixture
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
        'insurance_number' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'comment' => '健康保険証の番号', 'precision' => null, 'fixed' => null],
        'doctor' => ['type' => 'string', 'length' => 64, 'null' => true, 'default' => null, 'comment' => 'かかりつけ病院', 'precision' => null, 'fixed' => null],
        'doctor_tel' => ['type' => 'string', 'length' => 16, 'null' => true, 'default' => null, 'comment' => 'かかりつけ病院の電話番号', 'precision' => null, 'fixed' => null],
        'temperature' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '平熱'],
        'has_allergy' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => 'アレルギーはあるか（1:ある）', 'precision' => null, 'autoIncrement' => null],
        'allergy_diet' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'アレルギーによる食事制限がある場合、どんな食べ物か', 'precision' => null],
        'urticaria_food' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '食べ物による蕁麻疹はある場合、どんな食べ物か', 'precision' => null],
        'nap' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => 'お昼寝する時間（しなければ0）', 'precision' => null, 'autoIncrement' => null],
        'caution' => ['type' => 'text', 'length' => 16777215, 'null' => true, 'default' => null, 'comment' => '特に注意している点、園に伝えておきたいこと', 'precision' => null],
        'memo' => ['type' => 'text', 'length' => 16777215, 'null' => true, 'default' => null, 'comment' => '園側での記入欄', 'precision' => null],
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
            'insurance_number' => 'Lorem ipsum dolor sit amet',
            'doctor' => 'Lorem ipsum dolor sit amet',
            'doctor_tel' => 'Lorem ipsum do',
            'temperature' => 1,
            'has_allergy' => 1,
            'allergy_diet' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'urticaria_food' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'nap' => 1,
            'caution' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'memo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'modified' => '2016-05-06 15:09:49',
            'created' => '2016-05-06 15:09:49'
        ],
    ];
}
