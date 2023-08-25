<?php
require base_path('views/partials/head.php');
require base_path('views/partials/topbar.php');
require base_path('views/partials/banner.php');
?>
<main class="h-full w-full flex flex-col py-10">
    <section>
        <form method="post" action="/create" class=' flex flex-col gap-4 w-full'>
            <header class='flex gap-10 w-full items-center justify-end'>
                <h3 class="text-3xl font-bold text-lime-700 justify-self-start place-self-start mr-auto">Crie uma nova Nota</h3>

                <a href="/notes" class="text-base font-semibold border-lime-700 text-lime-700 flex items-center duration-100 hover-2px-left">
                    <i class='material-symbols-outlined w-min p-0'>arrow_left</i>Voltar
                </a>

                <div role='button' class="flex items-center bg-lime-700 pr-3 gap-2 text-slate-50 font-semibold rounded-lg self-center cursor-pointer duration-150 hover:bg-lime-600 iconEnviar">
                    <input type="submit" value="Criar" class='cursor-pointer ml-3 mr-1 py-2 font-sans'>
                </div>

            </header>

            <label for="text" class="flex flex-col gap-1">
                <p class="text-lime-700">Texto da Nota</p>
                <textarea type="text" name="body" id="text" placeholder="Exemplo de texto.." class='p-2 w-full h-44 text-lime-600 rounded-md duration-100 transition-all shadow-md hover:shadow-lg' value='<?= $_POST['body'] ?? '' ?>'> </textarea>

                <?php if (isset($errors['body'])) : ?>
                    <p class='text-red-500 text-xs font-semibold'> <?= $errors['body'] ?></p>
                <?php endif ?>
            </label>
        </form>
    </section>
</main>
<?php require base_path('views/partials/footer.php') ?>