<?php
/**
 * @var \App\View\AppView $this
 */

$user = $this->getRequest()->getAttribute('identity');
?>

<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MyArticles</title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css(['normalize.min', 'milligram.min']) ?>
</head>

<body>
    <main class="container" style="margin-top: 5rem; text-align: center;">

        <h1>MyArticles</h1>

        <p>
            Plataforma privada para gestionar y leer tus propios artículos.
        </p>

        <hr>

        <?php if (!$user): ?>
            <!-- USUARIO NO LOGEADO -->

            <h2>Acceso restringido</h2>

            <p>
                Para poder ver los artículos necesitas iniciar sesión
                o crear una cuenta gratuita.
            </p>

            <div style="margin-top: 2rem;">
                <?= $this->Html->link(
                    'Iniciar sesión',
                    ['controller' => 'Users', 'action' => 'login'],
                    ['class' => 'button']
                ) ?>

                <?= $this->Html->link(
                    'Registrarse',
                    ['controller' => 'Users', 'action' => 'add'],
                    ['class' => 'button button-outline']
                ) ?>
            </div>

        <?php else: ?>
            <!-- USUARIO LOGEADO -->

            <h2>Bienvenido 👋</h2>

            <p>
                Ya estás autenticado. Puedes acceder a tus artículos.
            </p>

            <?= $this->Html->link(
                'Ver mis artículos',
                ['controller' => 'Articles', 'action' => 'index'],
                ['class' => 'button']
            ) ?>

        <?php endif; ?>

    </main>
</body>
</html>
