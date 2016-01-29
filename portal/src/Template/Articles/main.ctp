
<!-- Here's where we loop through our $articles query object, printing out article info -->

    <?php foreach ($articles as $article): ?>
    <tr>
	<center>

<?php
	

?>

        <h1><?= $this->Html->link($article->user_id, ['action' => 'view', $article->id]) ?></h1>
		</center>
	<p><?= h($article->body) ?></p>
	<p><small>Created: <?= $article->created->format(DATE_RFC850) ?></small></p>

    </tr>
    <?php endforeach; ?>
    


