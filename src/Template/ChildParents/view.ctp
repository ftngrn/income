<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Child Parent'), ['action' => 'edit', $childParent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Child Parent'), ['action' => 'delete', $childParent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childParent->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Child Parents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Child Parent'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Child Healths'), ['controller' => 'ChildHealths', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Child Health'), ['controller' => 'ChildHealths', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Child Medications'), ['controller' => 'ChildMedications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Child Medication'), ['controller' => 'ChildMedications', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Incomes'), ['controller' => 'Incomes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Income'), ['controller' => 'Incomes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Journals'), ['controller' => 'Journals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Journal'), ['controller' => 'Journals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ptas'), ['controller' => 'Ptas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pta'), ['controller' => 'Ptas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Busstops'), ['controller' => 'Busstops', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Busstop'), ['controller' => 'Busstops', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="childParents view large-9 medium-8 columns content">
    <h3><?= h($childParent->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Account') ?></th>
            <td><?= h($childParent->account) ?></td>
        </tr>
        <tr>
            <th><?= __('Display Name') ?></th>
            <td><?= h($childParent->display_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Secret') ?></th>
            <td><?= h($childParent->secret) ?></td>
        </tr>
        <tr>
            <th><?= __('School') ?></th>
            <td><?= h($childParent->school) ?></td>
        </tr>
        <tr>
            <th><?= __('Mother Name') ?></th>
            <td><?= h($childParent->mother_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Mother Kana') ?></th>
            <td><?= h($childParent->mother_kana) ?></td>
        </tr>
        <tr>
            <th><?= __('Father Name') ?></th>
            <td><?= h($childParent->father_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Father Kana') ?></th>
            <td><?= h($childParent->father_kana) ?></td>
        </tr>
        <tr>
            <th><?= __('Pref') ?></th>
            <td><?= h($childParent->pref) ?></td>
        </tr>
        <tr>
            <th><?= __('Addr') ?></th>
            <td><?= h($childParent->addr) ?></td>
        </tr>
        <tr>
            <th><?= __('Addr2') ?></th>
            <td><?= h($childParent->addr2) ?></td>
        </tr>
        <tr>
            <th><?= __('Mobile') ?></th>
            <td><?= h($childParent->mobile) ?></td>
        </tr>
        <tr>
            <th><?= __('Tel') ?></th>
            <td><?= h($childParent->tel) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($childParent->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($childParent->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($childParent->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Tels') ?></h4>
        <?= $this->Text->autoParagraph(h($childParent->tels)); ?>
    </div>
    <div class="row">
        <h4><?= __('Memo') ?></h4>
        <?= $this->Text->autoParagraph(h($childParent->memo)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Child Healths') ?></h4>
        <?php if (!empty($childParent->child_healths)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Child Id') ?></th>
                <th><?= __('Child Parent Id') ?></th>
                <th><?= __('Insurance Number') ?></th>
                <th><?= __('Doctor') ?></th>
                <th><?= __('Doctor Tel') ?></th>
                <th><?= __('Temperature') ?></th>
                <th><?= __('Has Allergy') ?></th>
                <th><?= __('Allergy Diet') ?></th>
                <th><?= __('Urticaria Food') ?></th>
                <th><?= __('Nap') ?></th>
                <th><?= __('Caution') ?></th>
                <th><?= __('Memo') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($childParent->child_healths as $childHealths): ?>
            <tr>
                <td><?= h($childHealths->id) ?></td>
                <td><?= h($childHealths->child_id) ?></td>
                <td><?= h($childHealths->child_parent_id) ?></td>
                <td><?= h($childHealths->insurance_number) ?></td>
                <td><?= h($childHealths->doctor) ?></td>
                <td><?= h($childHealths->doctor_tel) ?></td>
                <td><?= h($childHealths->temperature) ?></td>
                <td><?= h($childHealths->has_allergy) ?></td>
                <td><?= h($childHealths->allergy_diet) ?></td>
                <td><?= h($childHealths->urticaria_food) ?></td>
                <td><?= h($childHealths->nap) ?></td>
                <td><?= h($childHealths->caution) ?></td>
                <td><?= h($childHealths->memo) ?></td>
                <td><?= h($childHealths->modified) ?></td>
                <td><?= h($childHealths->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ChildHealths', 'action' => 'view', $childHealths->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ChildHealths', 'action' => 'edit', $childHealths->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ChildHealths', 'action' => 'delete', $childHealths->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childHealths->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Child Medications') ?></h4>
        <?php if (!empty($childParent->child_medications)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Child Id') ?></th>
                <th><?= __('Child Parent Id') ?></th>
                <th><?= __('Doctor') ?></th>
                <th><?= __('Doctor Tel') ?></th>
                <th><?= __('Diagnosis') ?></th>
                <th><?= __('Medicine Type') ?></th>
                <th><?= __('Medicine Object') ?></th>
                <th><?= __('Start') ?></th>
                <th><?= __('End') ?></th>
                <th><?= __('Method') ?></th>
                <th><?= __('Caution') ?></th>
                <th><?= __('Received') ?></th>
                <th><?= __('Received Staff Id') ?></th>
                <th><?= __('Memo') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($childParent->child_medications as $childMedications): ?>
            <tr>
                <td><?= h($childMedications->id) ?></td>
                <td><?= h($childMedications->child_id) ?></td>
                <td><?= h($childMedications->child_parent_id) ?></td>
                <td><?= h($childMedications->doctor) ?></td>
                <td><?= h($childMedications->doctor_tel) ?></td>
                <td><?= h($childMedications->diagnosis) ?></td>
                <td><?= h($childMedications->medicine_type) ?></td>
                <td><?= h($childMedications->medicine_object) ?></td>
                <td><?= h($childMedications->start) ?></td>
                <td><?= h($childMedications->end) ?></td>
                <td><?= h($childMedications->method) ?></td>
                <td><?= h($childMedications->caution) ?></td>
                <td><?= h($childMedications->received) ?></td>
                <td><?= h($childMedications->received_staff_id) ?></td>
                <td><?= h($childMedications->memo) ?></td>
                <td><?= h($childMedications->modified) ?></td>
                <td><?= h($childMedications->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ChildMedications', 'action' => 'view', $childMedications->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ChildMedications', 'action' => 'edit', $childMedications->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ChildMedications', 'action' => 'delete', $childMedications->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childMedications->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Incomes') ?></h4>
        <?php if (!empty($childParent->incomes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Child Id') ?></th>
                <th><?= __('Child Parent Id') ?></th>
                <th><?= __('Staff Id') ?></th>
                <th><?= __('Income Types') ?></th>
                <th><?= __('Cautions') ?></th>
                <th><?= __('Absence Type') ?></th>
                <th><?= __('Childcare Start') ?></th>
                <th><?= __('Childcare End') ?></th>
                <th><?= __('Childcare Meal') ?></th>
                <th><?= __('Start') ?></th>
                <th><?= __('End') ?></th>
                <th><?= __('Repeat Type') ?></th>
                <th><?= __('Repeat Week') ?></th>
                <th><?= __('Sickness') ?></th>
                <th><?= __('Consulted') ?></th>
                <th><?= __('Fevered') ?></th>
                <th><?= __('Recovered') ?></th>
                <th><?= __('Temperature') ?></th>
                <th><?= __('Cough') ?></th>
                <th><?= __('Route') ?></th>
                <th><?= __('Ip Addr') ?></th>
                <th><?= __('Memo') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($childParent->incomes as $incomes): ?>
            <tr>
                <td><?= h($incomes->id) ?></td>
                <td><?= h($incomes->child_id) ?></td>
                <td><?= h($incomes->child_parent_id) ?></td>
                <td><?= h($incomes->staff_id) ?></td>
                <td><?= h($incomes->income_types) ?></td>
                <td><?= h($incomes->cautions) ?></td>
                <td><?= h($incomes->absence_type) ?></td>
                <td><?= h($incomes->childcare_start) ?></td>
                <td><?= h($incomes->childcare_end) ?></td>
                <td><?= h($incomes->childcare_meal) ?></td>
                <td><?= h($incomes->start) ?></td>
                <td><?= h($incomes->end) ?></td>
                <td><?= h($incomes->repeat_type) ?></td>
                <td><?= h($incomes->repeat_week) ?></td>
                <td><?= h($incomes->sickness) ?></td>
                <td><?= h($incomes->consulted) ?></td>
                <td><?= h($incomes->fevered) ?></td>
                <td><?= h($incomes->recovered) ?></td>
                <td><?= h($incomes->temperature) ?></td>
                <td><?= h($incomes->cough) ?></td>
                <td><?= h($incomes->route) ?></td>
                <td><?= h($incomes->ip_addr) ?></td>
                <td><?= h($incomes->memo) ?></td>
                <td><?= h($incomes->modified) ?></td>
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
        <?php if (!empty($childParent->journals)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Journalized Id') ?></th>
                <th><?= __('Journalized Model') ?></th>
                <th><?= __('Staff Id') ?></th>
                <th><?= __('Child Parent Id') ?></th>
                <th><?= __('Note') ?></th>
                <th><?= __('Created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($childParent->journals as $journals): ?>
            <tr>
                <td><?= h($journals->id) ?></td>
                <td><?= h($journals->journalized_id) ?></td>
                <td><?= h($journals->journalized_model) ?></td>
                <td><?= h($journals->staff_id) ?></td>
                <td><?= h($journals->child_parent_id) ?></td>
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
        <h4><?= __('Related Ptas') ?></h4>
        <?php if (!empty($childParent->ptas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Child Parent Id') ?></th>
                <th><?= __('Child Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Kana') ?></th>
                <th><?= __('Year') ?></th>
                <th><?= __('Room') ?></th>
                <th><?= __('Job') ?></th>
                <th><?= __('Zip') ?></th>
                <th><?= __('Addr') ?></th>
                <th><?= __('Tel') ?></th>
                <th><?= __('Mobile') ?></th>
                <th><?= __('Memo') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($childParent->ptas as $ptas): ?>
            <tr>
                <td><?= h($ptas->id) ?></td>
                <td><?= h($ptas->child_parent_id) ?></td>
                <td><?= h($ptas->child_id) ?></td>
                <td><?= h($ptas->name) ?></td>
                <td><?= h($ptas->kana) ?></td>
                <td><?= h($ptas->year) ?></td>
                <td><?= h($ptas->room) ?></td>
                <td><?= h($ptas->job) ?></td>
                <td><?= h($ptas->zip) ?></td>
                <td><?= h($ptas->addr) ?></td>
                <td><?= h($ptas->tel) ?></td>
                <td><?= h($ptas->mobile) ?></td>
                <td><?= h($ptas->memo) ?></td>
                <td><?= h($ptas->modified) ?></td>
                <td><?= h($ptas->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ptas', 'action' => 'view', $ptas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ptas', 'action' => 'edit', $ptas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ptas', 'action' => 'delete', $ptas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ptas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Busstops') ?></h4>
        <?php if (!empty($childParent->busstops)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Bus') ?></th>
                <th><?= __('Course') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Address') ?></th>
                <th><?= __('Lat') ?></th>
                <th><?= __('Lng') ?></th>
                <th><?= __('Pickup') ?></th>
                <th><?= __('Dropoff Am') ?></th>
                <th><?= __('Dropoff Pm') ?></th>
                <th><?= __('W Pickup') ?></th>
                <th><?= __('W Dropoff Am') ?></th>
                <th><?= __('W Dropoff Pm') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($childParent->busstops as $busstops): ?>
            <tr>
                <td><?= h($busstops->id) ?></td>
                <td><?= h($busstops->bus) ?></td>
                <td><?= h($busstops->course) ?></td>
                <td><?= h($busstops->name) ?></td>
                <td><?= h($busstops->address) ?></td>
                <td><?= h($busstops->lat) ?></td>
                <td><?= h($busstops->lng) ?></td>
                <td><?= h($busstops->pickup) ?></td>
                <td><?= h($busstops->dropoff_am) ?></td>
                <td><?= h($busstops->dropoff_pm) ?></td>
                <td><?= h($busstops->w_pickup) ?></td>
                <td><?= h($busstops->w_dropoff_am) ?></td>
                <td><?= h($busstops->w_dropoff_pm) ?></td>
                <td><?= h($busstops->modified) ?></td>
                <td><?= h($busstops->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Busstops', 'action' => 'view', $busstops->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Busstops', 'action' => 'edit', $busstops->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Busstops', 'action' => 'delete', $busstops->id], ['confirm' => __('Are you sure you want to delete # {0}?', $busstops->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
