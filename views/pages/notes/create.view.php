<?php
require base_path('views/partials/head.php');
require base_path('views/partials/topbar.php');
require base_path('views/partials/banner.php');
?>
<main class="h-full w-full flex flex-col py-10">
    <section>
        <form method="POST" action="/notes/create" class=' flex flex-col gap-4 w-full'>
            <header class='flex gap-10 w-full items-center justify-end'>
                <h3 class="text-3xl font-bold text-lime-700 justify-self-start place-self-start mr-auto">Crie uma nova Nota</h3>

                <a href="/notes" class="text-base font-semibold border-lime-700 text-lime-700 flex items-center duration-100 hover-2px-left">
                    <i class='material-symbols-outlined w-min p-0'>arrow_left</i>Voltar
                </a>

                <input type="submit" value="Adicionar Nota" class='flex items-center py-2 px-3 gap-2 bg-lime-700 text-white font-semibold rounded-lg duration-150 hover:bg-lime-600 cursor-pointer'>

            </header>

            <label for="text" class="flex flex-col gap-1 text-lime-700">Texto da Nota
                <textarea type="text" name="body" id="text" placeholder="Exemplo de texto.." class='p-2 w-full h-44 text-lime-600 rounded-md duration-100 transition-all shadow-md hover:shadow-lg'> </textarea>

                <?php if (isset($errors['body'])) : ?>
                    <p class='text-red-500 text-xs font-semibold'> <?= $errors['body'] ?></p>
                <?php endif ?>
            </label>
        </form>
    </section>
</main>
<?php require base_path('views/partials/footer.php') ?>