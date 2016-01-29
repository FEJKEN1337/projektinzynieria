<!-- File: src/Template/Articles/index.ctp (delete links added) -->

<h1>Artykuły</h1>
<p><?= $this->Html->link('Dodaj Artykuł', ['action' => 'add']) ?></p>
<p><?= $this->Html->link('Zarządzaj kontami', array('controller' => 'Users', 'action' => 'index')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
        <th>Actions</th>
    </tr>

<!-- Here's where we loop through our $articles query object, printing out article info -->

    <?php foreach ($articles as $article): ?>
    <tr>
        <td><?= $article->id ?></td>
        <td>
            <?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?>
        </td>
        <td>
            <?= $article->created->format(DATE_RFC850) ?>
        </td>
        <td>
            <?= $this->Form->postLink(
                'Usuń',
                ['action' => 'delete', $article->id],
                ['confirm' => 'Jesteś pewien?'])
            ?>
            <?= $this->Html->link('Edytuj', ['action' => 'edit', $article->id]) ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>