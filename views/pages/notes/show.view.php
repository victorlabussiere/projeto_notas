<section class="flex flex-col items-start gap-6 ">
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

    <div class="flex flex-col gap-1">
        <p class='text-xs'>Conteúdo:</p>
        <q class="flex">
            <p class='text-lg font-bold first-letter:uppercase'><?= htmlspecialchars($text['body']) ?></p>
        </q>
    </div>

</section>