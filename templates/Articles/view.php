<!-- File: templates/Articles/view.php -->

<h1><?= h($article->title) ?></h1>
<p><?= h($article->body) ?></p>
<p><b>Tags:</b> <?= h($article->tag_string) ?></p>
<p><b>Created:</b> <?= h($article->created) ?></p>
<p><b>Modified:</b> <?= h($article->modified) ?></p>
<p>
    <?= $this->Html->link('Edit Article', ['action' => 'edit', $article->slug]) ?> |
    <?= $this->Form->postLink(
        'Delete Article',
        ['action' => 'delete', $article->slug],
        ['confirm' => 'Are you sure you want to delete #' . $article->id . '?']
    ) ?> |
    <?= $this->Html->link('List Articles', ['action' => 'index']) ?> |
    <?= $this->Html->link('New Article', ['action' => 'add']) ?>