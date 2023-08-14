<section>
    <h1 class='text-xl text-lime-700 font-bold'>
        Crie uma nova nota
    </h1>

    <form method="post" action="/create" class=' flex flex-col gap-4 w-full'>
        <label for="text" class="flex flex-col gap-1">
            <p class="text-lime-700">Texto da Nota</p>
            <textarea type="text" name="body" id="text" placeholder="Exemplo de texto.." class='p-2 w-full h-44 text-lime-600 rounded-md duration-100 hover:shadow-md' value='<?= $_POST['body'] ?? '' ?>'> </textarea>

            <?php if (isset($errors['body'])) : ?>
                <p class='text-red-500 text-xs font-semibold'> <?= $errors['body'] ?></p>
            <?php endif ?>
        </label>
        <input type="submit" value="Criar nota" class="bg-lime-700 px-6 py-2 text-slate-50 font-semibold rounded-full self-center cursor-pointer duration-150 w-full hover:bg-lime-600">
    </form>
</section>