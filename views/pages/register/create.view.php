<?php
require base_path('views/partials/head.php');
require base_path('views/partials/topbar.php');
require base_path('views/partials/banner.php');
?>

<main class="h-full w-full flex flex-col py-10">
    <section>
        <header>
            <h2 class='text-lime-700 font-semibold text-3xl '>Utilize este espaço para realizar o cadastro de um novo usuário</h2>
        </header>

        <form action="register" method="POST" class='flex flex-col items-center gap-4 w-4/6 p-4 bg-white'>
            <label for="nome" class='w-full text-lime-800 font-semibold'>
                Nome
                <input id='nome' type="nome" name="nome" placeholder="Nome do usuário" class="w-full p-2 border rounded">
                <span class='text-red-500 text-sm font-semibold hideTag'>Preencha o campo para prosseguir</span>
            </label>
            <label for="email" class='w-full text-lime-800 font-semibold'>
                E-mail
                <input id='email' type="email" name="email" placeholder="E-mail do usuário" class="w-full p-2 border rounded">
                <span class='text-red-500 text-sm font-semibold hideTag'>Preencha o campo para prosseguir</span>
            </label>
            <label for="senha" class='w-full text-lime-800 font-semibold'>
                Senha
                <input id='senha' type="password" name="senha" placeholder="Senha do usuário" class="w-full p-2 border rounded">
                <span class='text-red-500 text-sm font-semibold hideTag'>Preencha o campo para prosseguir</span>
            </label>

            <input type="submit" value='Entrar' class='bg-lime-600 px-3 py-1 text-lg font-semibold text-white w-2/6 rounded cursor-pointer'>
        </form>

        <span class="text-red-500 text-sm font-semibold"><?= $errorFeedback ?? false ?></span><!-- feedback de erro -->
        <span class="text-green-700 text-sm font-semibold"><?= $feedback ?? false ?></span><!-- feedback -->

    </section>

</main>

<script type='module'>
    import FormValidator from './js/FormValidator.js'
    const form = document.querySelector('section>form')
    FormValidator.validate(form, 'form>label>input', 'form>label>span')
</script>

<?php require base_path('views/partials/footer.php') ?>