<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contact $contact
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contact'), ['action' => 'edit', $contact->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contact'), ['action' => 'delete', $contact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contact'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contact view large-9 medium-8 columns content">
    <h3><?= h($contact->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('NOM') ?></th>
            <td><?= h($contact->NOM) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PRENOM') ?></th>
            <td><?= h($contact->PRENOM) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('EMAIL') ?></th>
            <td><?= h($contact->EMAIL) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rue') ?></th>
            <td><?= h($contact->Rue) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CODEPOSTAL') ?></th>
            <td><?= h($contact->CODEPOSTAL) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('VILLE') ?></th>
            <td><?= h($contact->VILLE) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PAYS') ?></th>
            <td><?= h($contact->PAYS) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contact->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TELEPHONE') ?></th>
            <td><?= $this->Number->format($contact->TELEPHONE) ?></td>
        </tr>
    </table>
</div>
