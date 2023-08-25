<?php
require base_path('views/partials/head.php');
require base_path('views/partials/topbar.php');
require base_path('views/partials/banner.php');
?>
<main class="h-full w-full flex flex-col items-center py-10">
    <section class="flex flex-col items-center gap-6 ">
        <header class="flex items-center justify-between w-full">

            <a href="/notes" class='text-lime-600 flex items-center font-bold gap-1'>
                <i class="p-0 m-0 w-min material-symbols-outlined">navigate_before</i>
                Voltar
            </a>

            <h2 class='font-bold text-2xl text-lime-600'>
                Nota de <?= htmlspecialchars($user['nome']) ?>
            </h2>

        </header>

        <hr class='h-px w-full rounded-none self-center'>

        <div class="flex flex-col w-full text-4xl gap-1">
            <p class='text-xs'>Conteúdo:</p>
            <q class="flex">
                <p class='text-lg font-bold first-letter:uppercase'><?= htmlspecialchars($text['body']) ?></p>
            </q>
        </div>

        <form action="/note" method="POST">
            <input type="hidden" name="_method" value='delete'>
            <input type="hidden" name="id" value='<?= $_GET['id'] ?>'>

            <input class="px-4 py-2 rounded bg-red-500 text-white shadow-md" type="submit" value="Deletar Nota">
        </form>
    </section>

</main>
<?php require base_path('views/partials/footer.php') ?>