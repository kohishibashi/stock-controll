<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item $item
 */
?>
<div class="items view large-9 medium-8 columns content">
    <h3><?= h($item->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('商品名') ?></th>
            <td><?= $item->has('name') ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('業者') ?></th>
            <td><?= $item->has('supplier') ? $this->Html->link($item->supplier->id, ['controller' => 'Suppliers', 'action' => 'view', $item->supplier->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ユーザー') ?></th>
            <td><?= $item->has('user') ? $this->Html->link($item->user->id, ['controller' => 'Users', 'action' => 'view', $item->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('商品ID') ?></th>
            <td><?= $this->Number->format($item->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('値段') ?></th>
            <td><?= $this->Number->format($item->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('仕入れ値') ?></th>
            <td><?= $this->Number->format($item->purchase_price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('在庫') ?></th>
            <td><?= $this->Number->format($item->stock) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('登録日') ?></th>
            <td><?= h($item->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('情報変更日') ?></th>
            <td><?= h($item->modified) ?></td>
        </tr>
    </table>
</div>
