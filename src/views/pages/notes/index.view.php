<section class="flex flex-col items-center gap-8">
    <header class='flex gap-10 w-full items-center justify-end'>
        <h3 class="text-3xl font-bold text-lime-700 justify-self-start place-self-start mr-auto">Todas as Notas</h3>

        <a href="/" class="text-base font-semibold border-lime-700 text-lime-700 flex items-center duration-100 hover-2px-left">
            <i class='material-symbols-outlined w-min p-0'>arrow_left</i>Voltar
        </a>

        <div role='button' class="flex items-center bg-lime-700 gap-2 pr-3 text-slate-50 font-semibold rounded-lg self-center cursor-pointer duration-150 hover:bg-lime-600 iconEnviar">
            <a href="/create" value="Criar" class='cursor-pointer ml-3 mr-1 py-2 font-sans'>Adicionar Nota</a>
        </div>

    </header>

    <ul class='flex flex-col gap-4 p-4 w-full self-start overflow-y-scroll max-h-80'>

        <?php if (isset($notes) === false) : ?>

            <h2> Você ainda não possui nenhuma nota. </h2>

        <?php else : ?>

            <?php foreach ($notes as $note) : ?>

                <li class='delay-100 first-letter:uppercase border-b py-1'>
                    <a class='block font-semibold text-lime-600 hover:text-lime-700' href='/note?id=<?= $note['id'] ?>'>
                        <?= htmlspecialchars($note['body']) ?>
                    </a>
                </li>

            <?php endforeach ?>

        <?php endif ?>

    </ul>



</section>