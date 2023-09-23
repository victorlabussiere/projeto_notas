<?php
require base_path('views/partials/head.php');
require base_path('views/partials/topbar.php');
?>
<main class="h-full w-full flex flex-col py-10">
    <section class="mt-10">

        <header class='flex flex-col w-full'>
            <h2 class='text-lime-600 font-bold text-4xl self-center mb-6'>Novo usuário</h2>
        </header>

        <form action="register" method="post" class='flex flex-col items-center justify-center w-3/5 gap-4' id='register_form'>

            <label for='name' class='flex flex-col justify-start items-start gap-2 w-full'>
                <input class="p-2 rounded border-lime-700 border w-full" type="text" name="name" id="register_name" placeholder="Digite o Nome...">
                <span class='errorSpan hideTag'>Insira um Nome para prosseguir</span>
            </label>

            <label for='name' class=' flex flex-col justify-start items-start gap-2 w-full'>
                <input class="p-2 rounded border-lime-700 border w-full" type="email" name="email" id="register_email" placeholder="Digite o E-mail...">
                <span class='errorSpan hideTag'>Insira um E-mail para prosseguir</span>
            </label>

            <label for='name' class=' flex flex-col justify-start items-start gap-2 w-full'>
                <input class="p-2 rounded border-lime-700 border w-full" type="password" name="senha" id="register_senha" placeholder="Digite sua senha...">
                <span class='errorSpan hideTag'>Insira a senha para prosseguir</span>
            </label>

            <input role='button' type='submit' class="w-full text-white bg-lime-600 rounded py-3 hover:bg-lime-700 duration-150 cursor-pointer text-center font-semibold">

        </form>
    </section>
</main>

<script type='module'>
    import FormValidator from './js/FormsValidator.js'
    const form = document.querySelector('form#register_form')
    FormValidator.validate(form, "label>input", 'span.errorSpan')
</script>

<?php require base_path('views/partials/footer.php') ?>