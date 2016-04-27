<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('busstops');
        $table
            ->addColumn('bus', 'string', [
                'comment' => 'バス名',
                'default' => null,
                'limit' => 16,
                'null' => false,
            ])
            ->addColumn('course', 'string', [
                'comment' => 'コース名',
                'default' => null,
                'limit' => 16,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'comment' => 'バス停名',
                'default' => null,
                'limit' => 64,
                'null' => false,
            ])
            ->addColumn('address', 'string', [
                'comment' => '住所',
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('lat', 'float', [
                'comment' => '緯度',
                'default' => null,
                'null' => true,
                'precision' => 9,
                'scale' => 6,
            ])
            ->addColumn('lng', 'float', [
                'comment' => '経度',
                'default' => null,
                'null' => true,
                'precision' => 9,
                'scale' => 6,
            ])
            ->addColumn('pickup', 'time', [
                'comment' => '朝乗車時刻',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('dropoff_am', 'time', [
                'comment' => '午前降車時刻',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('dropoff_pm', 'time', [
                'comment' => '午後降車時刻',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('w_pickup', 'time', [
                'comment' => '朝乗車時刻（冬）',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('w_dropoff_am', 'time', [
                'comment' => '午前降車時刻（冬）',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('w_dropoff_pm', 'time', [
                'comment' => '午後降車時刻（冬）',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $table = $this->table('busstops_parents');
        $table
            ->addColumn('busstop_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('parent_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('start', 'date', [
                'comment' => '利用開始日',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('end', 'date', [
                'comment' => '利用最終日',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $table = $this->table('child_healths');
        $table
            ->addColumn('child_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('parent_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('insurance_number', 'string', [
                'comment' => '健康保険証の番号',
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('doctor', 'string', [
                'comment' => 'かかりつけ病院',
                'default' => null,
                'limit' => 64,
                'null' => true,
            ])
            ->addColumn('doctor_tel', 'string', [
                'comment' => 'かかりつけ病院の電話番号',
                'default' => null,
                'limit' => 16,
                'null' => true,
            ])
            ->addColumn('temperature', 'float', [
                'comment' => '平熱',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('has_allergy', 'integer', [
                'comment' => 'アレルギーはあるか（1:ある）',
                'default' => 0,
                'limit' => 4,
                'null' => false,
            ])
            ->addColumn('allergy_diet', 'text', [
                'comment' => 'アレルギーによる食事制限がある場合、どんな食べ物か',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('urticaria_food', 'text', [
                'comment' => '食べ物による蕁麻疹はある場合、どんな食べ物か',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('nap', 'integer', [
                'comment' => 'お昼寝する時間（しなければ0）',
                'default' => 0,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('caution', 'text', [
                'comment' => '特に注意している点、園に伝えておきたいこと',
                'default' => null,
                'limit' => 16777215,
                'null' => true,
            ])
            ->addColumn('memo', 'text', [
                'comment' => '園側での記入欄',
                'default' => null,
                'limit' => 16777215,
                'null' => true,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $table = $this->table('child_medication_histories');
        $table
            ->addColumn('child_medication_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('staff_id', 'integer', [
                'comment' => '投薬した教職員のID',
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('medicated', 'date', [
                'comment' => '投薬した日',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('memo', 'text', [
                'comment' => '備考',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $table = $this->table('child_medications');
        $table
            ->addColumn('child_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('parent_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('doctor', 'string', [
                'comment' => '病院名',
                'default' => null,
                'limit' => 64,
                'null' => false,
            ])
            ->addColumn('doctor_tel', 'string', [
                'comment' => '病院の電話番号',
                'default' => null,
                'limit' => 16,
                'null' => false,
            ])
            ->addColumn('diagnosis', 'string', [
                'comment' => '診断名',
                'default' => null,
                'limit' => 128,
                'null' => false,
            ])
            ->addColumn('medicine_type', 'string', [
                'comment' => '薬の種類',
                'default' => null,
                'limit' => 128,
                'null' => false,
            ])
            ->addColumn('medicine_object', 'string', [
                'comment' => '薬の内容',
                'default' => null,
                'limit' => 128,
                'null' => false,
            ])
            ->addColumn('start', 'date', [
                'comment' => '投薬開始日',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('end', 'integer', [
                'comment' => '投薬最終日',
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('method', 'integer', [
                'comment' => '投薬時間（服用の詳細）',
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('caution', 'text', [
                'comment' => '特記事項',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('received', 'date', [
                'comment' => '受領日',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('received_staff_id', 'integer', [
                'comment' => '受領者の教職員ID',
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('memo', 'text', [
                'comment' => '園側の特記事項',
                'default' => null,
                'limit' => 16777215,
                'null' => true,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $table = $this->table('children');
        $table
            ->addColumn('school', 'string', [
                'default' => null,
                'limit' => 64,
                'null' => true,
            ])
            ->addColumn('room', 'string', [
                'default' => null,
                'limit' => 16,
                'null' => true,
            ])
            ->addColumn('grade', 'string', [
                'comment' => '学年区分（年少/年中/年長など）',
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('bus', 'string', [
                'default' => null,
                'limit' => 16,
                'null' => true,
            ])
            ->addColumn('course', 'string', [
                'default' => null,
                'limit' => 16,
                'null' => true,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('kana', 'string', [
                'comment' => '濁音撥音関係なく検索のためにunicode_ci',
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('sex', 'string', [
                'default' => null,
                'limit' => 4,
                'null' => true,
            ])
            ->addColumn('birthed', 'date', [
                'comment' => '誕生日',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('memo', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $table = $this->table('daily_reports');
        $table
            ->addColumn('date', 'date', [
                'comment' => 'いつの日報か',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('room', 'string', [
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('staff_id', 'integer', [
                'comment' => '記入した教職員ID',
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('activity', 'text', [
                'comment' => '主な活動',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('objective', 'text', [
                'comment' => 'ねらい',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('movement', 'text', [
                'comment' => '欠席・入退園児',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('distribution', 'text', [
                'comment' => '配布物',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('agenda', 'text', [
                'comment' => 'その日の流れ',
                'default' => null,
                'limit' => 16777215,
                'null' => true,
            ])
            ->addColumn('gist', 'text', [
                'comment' => '指導の要点',
                'default' => null,
                'limit' => 16777215,
                'null' => true,
            ])
            ->addColumn('report', 'text', [
                'comment' => 'やったこと・できたこと',
                'default' => null,
                'limit' => 16777215,
                'null' => true,
            ])
            ->addColumn('problem', 'text', [
                'comment' => '課題',
                'default' => null,
                'limit' => 16777215,
                'null' => true,
            ])
            ->addColumn('injury', 'text', [
                'comment' => 'ケガ',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('principal_checked', 'datetime', [
                'comment' => '園長確認',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('sub_checked', 'datetime', [
                'comment' => '副園長確認',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('chief1_checked', 'datetime', [
                'comment' => '主任確認',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('chief2_checked', 'datetime', [
                'comment' => '主任確認',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $table = $this->table('incomes');
        $table
            ->addColumn('child_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('parent_id', 'integer', [
                'comment' => '登録した保護者ID',
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('staff_id', 'integer', [
                'comment' => '登録した教職員ID',
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('income_type', 'integer', [
                'comment' => '連絡種別（欠席/朝送り/迎え/預かり/遅刻/連絡 etc）',
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('absence_type', 'integer', [
                'comment' => '欠席種別（病欠/私用/事故/忌引）',
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('start', 'date', [
                'comment' => '出欠の開始日',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('end', 'date', [
                'comment' => '出欠の最終日',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('repeat_type', 'string', [
                'comment' => '繰り返す種類（毎日/毎週）',
                'default' => null,
                'limit' => 16,
                'null' => true,
            ])
            ->addColumn('repeat_week', 'string', [
                'comment' => '繰り返す曜日',
                'default' => null,
                'limit' => 8,
                'null' => true,
            ])
            ->addColumn('sickness', 'string', [
                'comment' => '病名',
                'default' => null,
                'limit' => 64,
                'null' => true,
            ])
            ->addColumn('ip_addr', 'string', [
                'default' => null,
                'limit' => 128,
                'null' => true,
            ])
            ->addColumn('memo', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $table = $this->table('journal_details');
        $table
            ->addColumn('journal_id', 'integer', [
                'comment' => '変更履歴ID',
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('journalized_key', 'string', [
                'comment' => '変更したモデルのキー名',
                'default' => null,
                'limit' => 64,
                'null' => false,
            ])
            ->addColumn('old_value', 'text', [
                'comment' => '古い値',
                'default' => null,
                'limit' => 16777215,
                'null' => false,
            ])
            ->addColumn('value', 'text', [
                'comment' => '新しい値',
                'default' => null,
                'limit' => 16777215,
                'null' => false,
            ])
            ->create();

        $table = $this->table('journals');
        $table
            ->addColumn('journalized_id', 'integer', [
                'comment' => '変更対象ID',
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('journalized_model', 'string', [
                'comment' => '変更対象モデル名',
                'default' => null,
                'limit' => 64,
                'null' => false,
            ])
            ->addColumn('staff_id', 'integer', [
                'comment' => '更新した教職員ID',
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('parent_id', 'integer', [
                'comment' => '更新した保護者ID',
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('note', 'text', [
                'comment' => '更新メモ',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $table = $this->table('parents');
        $table
            ->addColumn('account', 'string', [
                'comment' => 'アカウント名',
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('display_name', 'string', [
                'comment' => '表示名',
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('secret', 'string', [
                'comment' => 'SHA256,SHA512での運用を想定',
                'default' => null,
                'limit' => 128,
                'null' => true,
            ])
            ->addColumn('school', 'string', [
                'comment' => '子を通わせている先',
                'default' => null,
                'limit' => 64,
                'null' => true,
            ])
            ->addColumn('mother_name', 'string', [
                'comment' => '母の名前',
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('mother_kana', 'string', [
                'comment' => '濁音撥音関係なく検索のためにunicode_ci',
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('father_name', 'string', [
                'comment' => '父の名前',
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('father_kana', 'string', [
                'comment' => '濁音撥音関係なく検索のためにunicode_ci',
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('pref', 'string', [
                'default' => null,
                'limit' => 16,
                'null' => true,
            ])
            ->addColumn('addr', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('addr2', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('mobile', 'string', [
                'comment' => '携帯番号',
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('tel', 'string', [
                'comment' => '固定電話',
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('tels', 'text', [
                'comment' => 'その他電話番号を複数行で',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('memo', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $table = $this->table('photos');
        $table
            ->addColumn('model', 'string', [
                'comment' => '対象モデル名',
                'default' => null,
                'limit' => 64,
                'null' => false,
            ])
            ->addColumn('model_id', 'integer', [
                'comment' => '対象モデルID',
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('seq', 'integer', [
                'comment' => '表示順（少ない値ほど優先）',
                'default' => 0,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('body', 'binary', [
                'default' => null,
                'limit' => 16777215,
                'null' => true,
            ])
            ->addColumn('size', 'integer', [
                'comment' => 'ファイルサイズ',
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('mime', 'string', [
                'comment' => 'MIMEタイプ',
                'default' => null,
                'limit' => 64,
                'null' => true,
            ])
            ->addColumn('name', 'string', [
                'comment' => 'ファイル名',
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'model',
                    'model_id',
                    'seq',
                ]
            )
            ->create();

        $table = $this->table('ptas');
        $table
            ->addColumn('parent_id', 'integer', [
                'comment' => '保護者ID（parentsに登録されているとは限らないので0もありえる）',
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('child_id', 'integer', [
                'comment' => '子どものID（複数いる場合は就任クラスの子）',
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'comment' => '名前',
                'default' => null,
                'limit' => 64,
                'null' => false,
            ])
            ->addColumn('kana', 'string', [
                'comment' => 'カナ',
                'default' => null,
                'limit' => 64,
                'null' => true,
            ])
            ->addColumn('year', 'text', [
                'comment' => '就任年度',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('room', 'string', [
                'comment' => '就任クラス名',
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('job', 'string', [
                'comment' => '役職名（正副も記入）',
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('zip', 'string', [
                'default' => null,
                'limit' => 16,
                'null' => true,
            ])
            ->addColumn('addr', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('tel', 'string', [
                'comment' => '電話番号',
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('mobile', 'string', [
                'comment' => '携帯電話',
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('memo', 'text', [
                'comment' => '備考',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $table = $this->table('staffs');
        $table
            ->addColumn('account', 'string', [
                'comment' => 'アカウント名',
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('display_name', 'string', [
                'comment' => '表示名',
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('secret', 'string', [
                'comment' => 'SHA256,SHA512での運用を想定',
                'default' => null,
                'limit' => 128,
                'null' => true,
            ])
            ->addColumn('acl_group', 'string', [
                'comment' => 'グループ名（ACLで使うので半角英数）',
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('school', 'string', [
                'comment' => '所属',
                'default' => null,
                'limit' => 64,
                'null' => false,
            ])
            ->addColumn('system', 'integer', [
                'comment' => '雇用形態（正職員:0, パート:1, 派遣:2）',
                'default' => 0,
                'limit' => 4,
                'null' => false,
            ])
            ->addColumn('job', 'string', [
                'comment' => '職務（園長/副園長/主任/教諭/事務/総務/バス/清掃/など）',
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('room', 'string', [
                'comment' => 'クラス名部屋名',
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('grade', 'string', [
                'comment' => '学年区分（年少/年中/年長など）',
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 32,
                'null' => false,
            ])
            ->addColumn('kana', 'string', [
                'comment' => '濁音撥音関係なく検索のためにunicode_ci',
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('old_name', 'string', [
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('wife_name', 'string', [
                'comment' => '奥さんの名前（用務員等）',
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('joined', 'date', [
                'comment' => '在籍開始年月日',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('finished', 'date', [
                'comment' => '最終在籍日（退職日）',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('birthday', 'date', [
                'comment' => '誕生日',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('tel', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('mobile', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('zip', 'string', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('pref', 'string', [
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('addr', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('addr2', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('memo', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('died', 'boolean', [
                'comment' => '死亡したら1',
                'default' => 0,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('attended_25th', 'boolean', [
                'comment' => '25周年記念に出席したら1',
                'default' => 0,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('attended_50th', 'boolean', [
                'comment' => '50周年記念に出席したら1',
                'default' => 0,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('nondelivery', 'boolean', [
                'comment' => '住所が不達だったら1',
                'default' => 0,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'job',
                ]
            )
            ->addIndex(
                [
                    'school',
                ]
            )
            ->create();

        $table = $this->table('weekly_idea_details');
        $table
            ->addColumn('weekly_idea_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('date', 'date', [
                'comment' => '対象の日付',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('events', 'text', [
                'comment' => '行事予定',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('activity', 'text', [
                'comment' => '予想される活動',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('memo', 'text', [
                'comment' => '備考',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $table = $this->table('weekly_ideas');
        $table
            ->addColumn('room', 'string', [
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('staff_id', 'integer', [
                'comment' => '記入した教職員ID',
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('gist', 'text', [
                'comment' => '今週のポイント',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('start', 'date', [
                'comment' => '週の初日',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('end', 'date', [
                'comment' => '週の最終日',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('principal_checked', 'datetime', [
                'comment' => '園長確認',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('sub_checked', 'datetime', [
                'comment' => '副園長確認',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('chief1_checked', 'datetime', [
                'comment' => '主任確認',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('chief2_checked', 'datetime', [
                'comment' => '主任確認',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

    }

    public function down()
    {
        $this->dropTable('busstops');
        $this->dropTable('busstops_parents');
        $this->dropTable('child_healths');
        $this->dropTable('child_medication_histories');
        $this->dropTable('child_medications');
        $this->dropTable('children');
        $this->dropTable('daily_reports');
        $this->dropTable('incomes');
        $this->dropTable('journal_details');
        $this->dropTable('journals');
        $this->dropTable('parents');
        $this->dropTable('photos');
        $this->dropTable('ptas');
        $this->dropTable('staffs');
        $this->dropTable('weekly_idea_details');
        $this->dropTable('weekly_ideas');
    }
}
