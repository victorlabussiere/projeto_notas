<?php

use Core\Database;

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . '/Core/functions.php';

spl_autoload_register(function ($class) {

    $class = str_replace('\\', '/', $class);

    require base_path("{$class}.php");
});

require BASE_PATH . '/Core/router.php';
require BASE_PATH . '/Core/Response.php';

$config = require(BASE_PATH . "/Core/config.php");
$db = new Database($config['database']);

$heading = array_key_exists($uri, $routes) === true ? $routes[$uri]['heading'] : '404 Not Found';

?>

<!DOCTYPE html>
<html lang="pt-br">

<?php require BASE_PATH . 'views/partials/head.php' ?>

<body class='flex flex-col w-screen h-screen justify-between p-0 relative'>
    <?php require BASE_PATH . '/views/partials/topbar.php' ?><!-- topbar -->
    <?php require BASE_PATH . '/views/partials/banner.php' ?><!-- banner -->

    <main class="h-full w-full flex flex-col py-10">
        <?php routeToController($uri, $routes); ?><!-- pages router: section com conteúdo das páginas -->
    </main>

    <?php require BASE_PATH . '/views/partials/footer.php' ?><!-- footer -->
</body>

</html>