<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item $item
 */
?>
<div class="items form large-9 medium-8 columns content">
    <?= $this->Form->create($item) ?>
    <fieldset>
        <legend><?= __('商品情報編集') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('supplier_id', ['options' => $suppliers]);
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('price');
            echo $this->Form->control('purchase_price');
            echo $this->Form->control('stock');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    <button><?= $this->Form->postLink(
                __('削除'),
                ['action' => 'delete', $item->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $item->id)]
            )
        ?></button>
</div>
