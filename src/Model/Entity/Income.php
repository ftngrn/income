<?php
namespace App\Model\Entity;

use Cake\Log\Log;
use Cake\ORM\Entity;

/**
 * Income Entity.
 *
 * @property int $id
 * @property int $child_id
 * @property \App\Model\Entity\Child $child
 * @property int $guardian_id
 * @property \App\Model\Entity\Guardian $guardian
 * @property int $staff_id
 * @property \App\Model\Entity\Staff $staff
 * @property int $income_types
 * @property string $cautions
 * @property string $absence_type
 * @property \Cake\I18n\Time $childcare_start
 * @property \Cake\I18n\Time $childcare_end
 * @property bool $childcare_meal
 * @property \Cake\I18n\Time $start
 * @property \Cake\I18n\Time $end
 * @property string $repeat_type
 * @property string $repeat_week
 * @property string $sickness
 * @property \Cake\I18n\Time $consulted
 * @property \Cake\I18n\Time $fevered
 * @property \Cake\I18n\Time $recovered
 * @property float $temperature
 * @property bool $cough
 * @property string $route
 * @property string $ip_addr
 * @property string $memo
 * @property \Cake\I18n\Time $modified
 * @property \Cake\I18n\Time $created
 */
class Income extends Entity
{
	/**
	 * Types for income
	 *
	 */
	public static $TYPES = [
    [
      'enum' => 1,
      'key' => 'absent',
      'label' => 'お休み',
      'short_label' => '休',
    ],
    [
      'enum' => 2,
      'key' => 'escort',
      'label' => '朝送り',
      'short_label' => '朝送',
    ],
    [
      'enum' => 4,
      'key' => 'come',
      'label' => 'お迎え',
			'short_label' => '迎',
    ],
		[
      'enum' => 8,
      'key' => 'care',
      'label' => '預かり保育',
      'short_label' => '預保',
    ],
    [
      'enum' => 16,
      'key' => 'late',
      'label' => '遅刻',
      'short_label' => '遅',
    ],
    [
      'enum' => 32,
      'key' => 'other',
      'label' => 'その他',
      'short_label' => '他',
    ],
  ];

	/**
	 * Cautions for income
	 *
	 */
	public static $CAUTIONS = [
		[
			'key' => 'mochi',
			'label' => '帰り餅',
			'short_label' => '餅',
		],
		[
			'key' => 'book',
			'label' => '園だより',
			'short_label' => '園',
		],
		[
			'key' => 'bag',
			'label' => '荷物',
			'short_label' => '荷',
		],
	];

	/**
	 * Absences for income
	 *
	 */
	public static $ABSENCES = [
		[
			'key' => 'sick',
			'label' => '病欠',
			'short_label' => '病',
		],
		[
			'key' => 'private',
			'label' => '私用',
			'short_label' => '用',
		],
		[
			'key' => 'accident',
			'label' => '事故',
			'short_label' => '事',
		],
		[
			'key' => 'mourning',
			'label' => '忌引',
			'short_label' => '忌',
		],
	];


		/**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];

	public function setFromIncomeTypes($bools) {
		$income_type = 0;
		foreach ($bools as $key => $bool) {
			if ($bool === "false") {
				continue;
			}
			$enum = $this->getEnumFromIncomeKey($key);
			if ($enum === false) {
				continue;
			}
			$income_type = $income_type | $enum;
			//Log::write('debug', "enum:".$enum. " income_type:".$income_type);
		}
		$this->income_types = $income_type;
	}

	public function setFromAbsenceTypes($bools) {
		$labels = [];
		foreach ($bools as $key => $bool) {
			if ($bool === "false") {
				continue;
			}
			$labels []= $this->getLabelFromAbsenceKey($key);
		}
		$this->absence_type = implode("/", $labels);
	}

	public function setFromCautionTypes($bools) {
		$labels = [];
		foreach ($bools as $key => $bool) {
			if ($bool === "false") {
				continue;
			}
			$labels []= $this->getLabelFromCautionKey($key);
		}
		$this->cautions = implode("/", $labels);
	}

	public function getEnumFromIncomeKey($key) {
		foreach (self::$TYPES as $v) {
			if ($v['key'] === $key) {
				return $v['enum'];
			}
		}
		return false;
	}

	public function getLabelFromAbsenceKey($key) {
		foreach (self::$ABSENCES as $v) {
			if ($v['key'] === $key) {
				return $v['label'];
			}
		}
		return false;
	}

	public function getLabelFromCautionKey($key) {
		foreach (self::$CAUTIONS as $v) {
			if ($v['key'] === $key) {
				return $v['label'];
			}
		}
		return false;
	}

}
