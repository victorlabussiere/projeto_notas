<?php
require base_path('views/partials/head.php');
require base_path('views/partials/topbar.php');
require base_path('views/partials/banner.php');
?>
<main class="h-full w-full flex flex-col py-10">
    <section>
        <?php if ($_SESSION['user'] ?? false) : ?>
            <h1 class='text-lime-700 font-semibold text-3xl'>Olá, <strong class='font-bold text-lime-700'><?= $_SESSION['user']['nome'] ?></strong>! Bem vindo ao notas!</h1>
        <?php else : ?>
            <h1 class='text-lime-700 font-semibold text-3xl'>Olá! Bem vindo ao Notas</h1>

        <?php endif ?>
    </section>
</main>
<?php require base_path('views/partials/footer.php') ?>