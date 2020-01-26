<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item[]|\Cake\Collection\CollectionInterface $items
 */
?>
<div class="items index large-9 medium-8 columns content">
    <h3><?= __('商品名') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id', 'ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name', '商品名') ?></th>
                <th scope="col"><?= $this->Paginator->sort('supplier_id', '業者') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id', 'ユーザー') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price', '価格') ?></th>
                <th scope="csol"><?= $this->Paginator->sort('purchase_price', '仕入れ値') ?></th>
                <th scope="col"><?= $this->Paginator->sort('stock', '在庫') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified', '変更日') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <? foreach ($items as $item): ?>
            <tr>
                <td><?= $this->Number->format($item->id) ?></td>
                <td><?= h($item->name) ?></td>
                <td><?= $item->has('supplier') ? $this->Html->link(
                    $item->supplier->companyname, ['controller' => 'Suppliers', 'action' => 'view', $item->supplier->id]) : '' 
                    ?>
                </td>
                <td><?= $item->has('user') ? $this->Html->link(
                    $item->user->username,
                    ['controller' => 'Users', 'acstion' => 'view', $item->user->id]) : '' 
                    ?>
                </td>
                <td><?= $this->Number->format($item->price) ?></td>
                <td><?= $this->Number->format($item->purchase_price) ?></td>
                <td><?= $this->Number->format($item->stock) ?></td>
                <td><?= h($item->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $item->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $item->id]) ?>
                </td>
            </tr>
            <? endforeach; ?>
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
