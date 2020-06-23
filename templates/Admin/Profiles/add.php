<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profile $profile
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Profiles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="profiles form content">
            <?= $this->Form->create($profile) ?>
            <fieldset>
                <legend><?= __('Add Profile') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('user_device');
                    echo $this->Form->control('os');
                    echo $this->Form->control('age');
                    echo $this->Form->control('country');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
