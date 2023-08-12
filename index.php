<?php
require __DIR__ . '/src/functions.php';
require __DIR__ . '/src/router.php';

$heading = array_key_exists($uri, $routes) ? $routes[$uri]['heading'] : '404 Not Found';
?>

<!DOCTYPE html>
<html lang="pt-br">

<?php require './src/views/partials/head.php' ?>

<body class='flex flex-col w-screen h-screen justify-between p-0 relative'>
    <!-- topbar -->
    <?php require './src/views/partials/topbar.php' ?>

    <!-- banner -->
    <?php require './src/views/partials/banner.php' ?>

    <main class="h-full w-full flex flex-col py-10">
        <!-- pages router: section com conteúdo das páginas -->
        <?php
        routeToController($uri, $routes);
        ?>
    </main>

    <?php require './src/views/partials/footer.php' ?>
</body>

</html>