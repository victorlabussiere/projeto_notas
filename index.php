<?php
require './src/functions.php';
require './src/router.php';
require './src/Response.php';
require './src/models/Database.php';

$config = require("./src/models/config.php");
$db = new Database($config['database']);

$heading = array_key_exists($uri, $routes) ? $routes[$uri]['heading'] : '404 Not Found';
?>

<!DOCTYPE html>
<html lang="pt-br">

<?php require './src/views/partials/head.php' ?>

<body class='flex flex-col w-screen h-screen justify-between p-0 relative'>
    <?php require './src/views/partials/topbar.php' ?><!-- topbar -->
    <?php require './src/views/partials/banner.php' ?><!-- banner -->

    <main class="h-full w-full flex flex-col py-10">
        <?php routeToController($uri, $routes); ?><!-- pages router: section com conteúdo das páginas -->
    </main>

    <?php require './src/views/partials/footer.php' ?><!-- footer -->
</body>

</html>