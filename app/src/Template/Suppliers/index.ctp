<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supplier[]|\Cake\Collection\CollectionInterface $suppliers
 */
?>
<div class="suppliers index large-9 medium-8 columns content">
    <h3><?= __('Suppliers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('companyname', '会社名') ?></th>
                <th scope="col"><?= $this->Paginator->sort('companyphone', '電話') ?></th>
                <th scope="col"><?= $this->Paginator->sort('companymail', '業者メール') ?></th>
                <th scope="col"><?= $this->Paginator->sort('companyurl', '業者URL') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created', '作成日') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified', '更新日') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($suppliers as $supplier): ?>
            <tr>
                <td><?= h($supplier->companyname) ?></td>
                <td>
                    <?php if ($supplier->companyphone === null): ?>
                        <?= '登録無し' ?></td>
                    <?php else: ?>
                        <?= $this->Number->format($supplier->companyphone) ?>
                    <?php endif; ?>
                </td>
                <td><?= h($supplier->companymail) ?></td>
                <td><?= h($supplier->companyurl) ?></td>
                <td><?= h($supplier->created) ?></td>
                <td><?= h($supplier->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $supplier->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $supplier->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $supplier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $supplier->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
