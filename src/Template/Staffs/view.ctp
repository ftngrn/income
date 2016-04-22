<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Staff'), ['action' => 'edit', $staff->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Staff'), ['action' => 'delete', $staff->id], ['confirm' => __('Are you sure you want to delete # {0}?', $staff->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Staffs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Staff'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Daily Reports'), ['controller' => 'DailyReports', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Daily Report'), ['controller' => 'DailyReports', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Incomes'), ['controller' => 'Incomes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Income'), ['controller' => 'Incomes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Journals'), ['controller' => 'Journals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Journal'), ['controller' => 'Journals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Weekly Ideas'), ['controller' => 'WeeklyIdeas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Weekly Idea'), ['controller' => 'WeeklyIdeas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="staffs view large-9 medium-8 columns content">
    <h3><?= h($staff->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Account') ?></th>
            <td><?= h($staff->account) ?></td>
        </tr>
        <tr>
            <th><?= __('Display Name') ?></th>
            <td><?= h($staff->display_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Secret') ?></th>
            <td><?= h($staff->secret) ?></td>
        </tr>
        <tr>
            <th><?= __('Acl Group') ?></th>
            <td><?= h($staff->acl_group) ?></td>
        </tr>
        <tr>
            <th><?= __('School') ?></th>
            <td><?= h($staff->school) ?></td>
        </tr>
        <tr>
            <th><?= __('Job') ?></th>
            <td><?= h($staff->job) ?></td>
        </tr>
        <tr>
            <th><?= __('Room') ?></th>
            <td><?= h($staff->room) ?></td>
        </tr>
        <tr>
            <th><?= __('Grade') ?></th>
            <td><?= h($staff->grade) ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($staff->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Kana') ?></th>
            <td><?= h($staff->kana) ?></td>
        </tr>
        <tr>
            <th><?= __('Old Name') ?></th>
            <td><?= h($staff->old_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Wife Name') ?></th>
            <td><?= h($staff->wife_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Tel') ?></th>
            <td><?= h($staff->tel) ?></td>
        </tr>
        <tr>
            <th><?= __('Mobile') ?></th>
            <td><?= h($staff->mobile) ?></td>
        </tr>
        <tr>
            <th><?= __('Zip') ?></th>
            <td><?= h($staff->zip) ?></td>
        </tr>
        <tr>
            <th><?= __('Pref') ?></th>
            <td><?= h($staff->pref) ?></td>
        </tr>
        <tr>
            <th><?= __('Addr') ?></th>
            <td><?= h($staff->addr) ?></td>
        </tr>
        <tr>
            <th><?= __('Addr2') ?></th>
            <td><?= h($staff->addr2) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($staff->id) ?></td>
        </tr>
        <tr>
            <th><?= __('System') ?></th>
            <td><?= $this->Number->format($staff->system) ?></td>
        </tr>
        <tr>
            <th><?= __('Joined') ?></th>
            <td><?= h($staff->joined) ?></td>
        </tr>
        <tr>
            <th><?= __('Finished') ?></th>
            <td><?= h($staff->finished) ?></td>
        </tr>
        <tr>
            <th><?= __('Birthday') ?></th>
            <td><?= h($staff->birthday) ?></td>
        </tr>
        <tr>
            <th><?= __('Updated') ?></th>
            <td><?= h($staff->updated) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($staff->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Died') ?></th>
            <td><?= $staff->died ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Attended 25th') ?></th>
            <td><?= $staff->attended_25th ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Attended 50th') ?></th>
            <td><?= $staff->attended_50th ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Nondelivery') ?></th>
            <td><?= $staff->nondelivery ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Memo') ?></h4>
        <?= $this->Text->autoParagraph(h($staff->memo)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Daily Reports') ?></h4>
        <?php if (!empty($staff->daily_reports)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Date') ?></th>
                <th><?= __('Room') ?></th>
                <th><?= __('Staff Id') ?></th>
                <th><?= __('Activity') ?></th>
                <th><?= __('Objective') ?></th>
                <th><?= __('Movement') ?></th>
                <th><?= __('Distribution') ?></th>
                <th><?= __('Agenda') ?></th>
                <th><?= __('Gist') ?></th>
                <th><?= __('Report') ?></th>
                <th><?= __('Problem') ?></th>
                <th><?= __('Injury') ?></th>
                <th><?= __('Principal Checked') ?></th>
                <th><?= __('Sub Checked') ?></th>
                <th><?= __('Chief1 Checked') ?></th>
                <th><?= __('Chief2 Checked') ?></th>
                <th><?= __('Updated') ?></th>
                <th><?= __('Created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($staff->daily_reports as $dailyReports): ?>
            <tr>
                <td><?= h($dailyReports->id) ?></td>
                <td><?= h($dailyReports->date) ?></td>
                <td><?= h($dailyReports->room) ?></td>
                <td><?= h($dailyReports->staff_id) ?></td>
                <td><?= h($dailyReports->activity) ?></td>
                <td><?= h($dailyReports->objective) ?></td>
                <td><?= h($dailyReports->movement) ?></td>
                <td><?= h($dailyReports->distribution) ?></td>
                <td><?= h($dailyReports->agenda) ?></td>
                <td><?= h($dailyReports->gist) ?></td>
                <td><?= h($dailyReports->report) ?></td>
                <td><?= h($dailyReports->problem) ?></td>
                <td><?= h($dailyReports->injury) ?></td>
                <td><?= h($dailyReports->principal_checked) ?></td>
                <td><?= h($dailyReports->sub_checked) ?></td>
                <td><?= h($dailyReports->chief1_checked) ?></td>
                <td><?= h($dailyReports->chief2_checked) ?></td>
                <td><?= h($dailyReports->updated) ?></td>
                <td><?= h($dailyReports->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'DailyReports', 'action' => 'view', $dailyReports->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'DailyReports', 'action' => 'edit', $dailyReports->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'DailyReports', 'action' => 'delete', $dailyReports->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dailyReports->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Incomes') ?></h4>
        <?php if (!empty($staff->incomes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Child Id') ?></th>
                <th><?= __('Income Type') ?></th>
                <th><?= __('Absence Type') ?></th>
                <th><?= __('Start') ?></th>
                <th><?= __('End') ?></th>
                <th><?= __('Repeat Type') ?></th>
                <th><?= __('Repeat Week') ?></th>
                <th><?= __('Sickness') ?></th>
                <th><?= __('Staff Id') ?></th>
                <th><?= __('Parent Id') ?></th>
                <th><?= __('Ip Addr') ?></th>
                <th><?= __('Memo') ?></th>
                <th><?= __('Updated') ?></th>
                <th><?= __('Created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($staff->incomes as $incomes): ?>
            <tr>
                <td><?= h($incomes->id) ?></td>
                <td><?= h($incomes->child_id) ?></td>
                <td><?= h($incomes->income_type) ?></td>
                <td><?= h($incomes->absence_type) ?></td>
                <td><?= h($incomes->start) ?></td>
                <td><?= h($incomes->end) ?></td>
                <td><?= h($incomes->repeat_type) ?></td>
                <td><?= h($incomes->repeat_week) ?></td>
                <td><?= h($incomes->sickness) ?></td>
                <td><?= h($incomes->staff_id) ?></td>
                <td><?= h($incomes->parent_id) ?></td>
                <td><?= h($incomes->ip_addr) ?></td>
                <td><?= h($incomes->memo) ?></td>
                <td><?= h($incomes->updated) ?></td>
                <td><?= h($incomes->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Incomes', 'action' => 'view', $incomes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Incomes', 'action' => 'edit', $incomes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Incomes', 'action' => 'delete', $incomes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $incomes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Journals') ?></h4>
        <?php if (!empty($staff->journals)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Journalized Id') ?></th>
                <th><?= __('Journalized Model') ?></th>
                <th><?= __('Staff Id') ?></th>
                <th><?= __('Parent Id') ?></th>
                <th><?= __('Note') ?></th>
                <th><?= __('Created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($staff->journals as $journals): ?>
            <tr>
                <td><?= h($journals->id) ?></td>
                <td><?= h($journals->journalized_id) ?></td>
                <td><?= h($journals->journalized_model) ?></td>
                <td><?= h($journals->staff_id) ?></td>
                <td><?= h($journals->parent_id) ?></td>
                <td><?= h($journals->note) ?></td>
                <td><?= h($journals->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Journals', 'action' => 'view', $journals->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Journals', 'action' => 'edit', $journals->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Journals', 'action' => 'delete', $journals->id], ['confirm' => __('Are you sure you want to delete # {0}?', $journals->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Weekly Ideas') ?></h4>
        <?php if (!empty($staff->weekly_ideas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Room') ?></th>
                <th><?= __('Staff Id') ?></th>
                <th><?= __('Gist') ?></th>
                <th><?= __('Start') ?></th>
                <th><?= __('End') ?></th>
                <th><?= __('Principal Checked') ?></th>
                <th><?= __('Sub Checked') ?></th>
                <th><?= __('Chief1 Checked') ?></th>
                <th><?= __('Chief2 Checked') ?></th>
                <th><?= __('Updated') ?></th>
                <th><?= __('Created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($staff->weekly_ideas as $weeklyIdeas): ?>
            <tr>
                <td><?= h($weeklyIdeas->id) ?></td>
                <td><?= h($weeklyIdeas->room) ?></td>
                <td><?= h($weeklyIdeas->staff_id) ?></td>
                <td><?= h($weeklyIdeas->gist) ?></td>
                <td><?= h($weeklyIdeas->start) ?></td>
                <td><?= h($weeklyIdeas->end) ?></td>
                <td><?= h($weeklyIdeas->principal_checked) ?></td>
                <td><?= h($weeklyIdeas->sub_checked) ?></td>
                <td><?= h($weeklyIdeas->chief1_checked) ?></td>
                <td><?= h($weeklyIdeas->chief2_checked) ?></td>
                <td><?= h($weeklyIdeas->updated) ?></td>
                <td><?= h($weeklyIdeas->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'WeeklyIdeas', 'action' => 'view', $weeklyIdeas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'WeeklyIdeas', 'action' => 'edit', $weeklyIdeas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'WeeklyIdeas', 'action' => 'delete', $weeklyIdeas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $weeklyIdeas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
