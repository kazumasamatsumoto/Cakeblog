<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profile[] $profiles
 */
?>
<div class="content">
    <?php foreach ($profiles as $profile): ?>
        <h3>名前: <?= $profile->name ?></h3>
        <p>デバイス: <?= $profile->user_device ?></p>
        <p>OS: <?= $profile->os ?></p>
        <p>出身国: <?= $profile->country ?></p>
        <p>年齢: <?= $profile->age ?>歳</p>
        <p>作成日: <?= $profile->created->i18nFormat('YYYY年MM月dd日 HH時mm分') ?></p>
        <p>更新日 : <?= $profile->modified->i18nFormat('YYYY年MM月dd日 HH時mm分') ?></p>
        <?= $this->Html->link('詳細プロフィール', [
            'controller' => 'Profiles',
            'action' => 'view',
            $profile->id
        ],['class' => 'button']) ?>
    <?php endforeach; ?>

    <?php if($this->Paginator->total() > 1): ?>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<<') ?>
                <?= $this->Paginator->prev('<') ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next('>') ?>
                <?= $this->Paginator->last('>>') ?>
            </ul>
        </div>
    <?php endif; ?>
</div>
