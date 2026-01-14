<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'fonts', 'cake']) ?>
    <?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
    <nav class="top-nav">
        <div class="top-nav-title">
            <a href="<?= $this->Url->build('/') ?>"><span>Cake</span>PHP</a>
        </div>
        <div class="top-nav-links">
            <!-- Si estoy logeado email y enlace a logout, sino nada -->
            <?php if ($this->request->getAttribute('identity')): ?>
                <span><?= $this->request->getAttribute('identity')->username ?></span>
                <?= $this->Html->link(
                    'Logout',
                    ['controller' => 'Users', 'action' => 'logout'],
                    ['class' => 'button button-outline']
                ) ?>
            <?php endif; ?>

        </div>
    </nav>
    <main class="main">
        <?php if ($this->request->getAttribute('identity')): ?>
            <button class="sidebar-toggle" aria-label="Toggle menu">
                ☰
            </button>

            <aside class="side-nav" id="sidebar">

                <nav class="side-menu">
                    <?= $this->Html->link(
                        '<i class="fa-solid fa-newspaper"></i><span>Articles</span>',
                        ['controller' => 'Articles', 'action' => 'index'],
                        ['escape' => false, 'class' => 'side-link']
                    ) ?>

                    <?= $this->Html->link(
                        '<i class="fa-solid fa-user"></i><span>Users</span>',
                        ['controller' => 'Users', 'action' => 'index'],
                        ['escape' => false, 'class' => 'side-link']
                    ) ?>

                    <?= $this->Html->link(
                        '<i class="fa-solid fa-tags"></i><span>Tags</span>',
                        ['controller' => 'Tags', 'action' => 'index'],
                        ['escape' => false, 'class' => 'side-link']
                    ) ?>
                </nav>
            </aside>

        <?php endif; ?>

        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>

    <footer>
    </footer>

    <?= $this->Html->script('sidebar') ?>
</body>

</html>