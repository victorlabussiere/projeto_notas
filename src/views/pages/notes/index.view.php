<section>

    <a href="/create" class="text-base text-neutral-50 gap-2 font-semibold rounded-full px-5 py-1 flex items-center duration-100 bg-lime-600 hover:bg-lime-500 hover:transition-all">
        <i class='material-symbols-outlined w-min p-0'>add</i> Nova Nota
    </a>

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