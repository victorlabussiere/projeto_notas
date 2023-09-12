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

            <div class='flex flex-col justify-start items-start gap-2 w-full'>
                <input class="p-2 rounded border-lime-700 border w-full" type="text" name="name" id="register_name" placeholder="Digite o Nome...">
                <span class='errorSpan hideSpan'>Insira um Nome para prosseguir</span>
            </div>
            <div class='flex flex-col justify-start items-start gap-2 w-full'>
                <input class="p-2 rounded border-lime-700 border w-full" type="email" name="email" id="register_email" placeholder="Digite o E-mail...">
                <span class='errorSpan hideSpan'>Insira um E-mail para prosseguir</span>
            </div>

            <div class='flex flex-col justify-start items-start gap-2 w-full'>
                <input class="p-2 rounded border-lime-700 border w-full" type="password" name="senha" id="register_senha" placeholder="Digite sua senha...">
                <span class='errorSpan hideSpan'>Insira a senha para prosseguir</span>
            </div>

            <input role='button' type='submit' class="w-full text-white bg-lime-600 rounded py-3 hover:bg-lime-700 duration-150 cursor-pointer text-center font-semibold">

        </form>
    </section>
</main>

<script>
    const registerForm = document.querySelector('form#register_form')
    const registerSubmit = registerForm.querySelector("input[type='submit']")
    const spanMessages = registerForm.querySelectorAll('span.errorSpan')

    registerForm.addEventListener('submit', function(e) {
        let inputs = this.querySelectorAll("div>input");
        let count = 0;

        spanMessages.forEach(span => span.classList = 'errorSpan hideSpan') // reset span's classList

        for (let i = 0; i < inputs.length; i++) { // for looping than forEach method because it allow to break the looping
            const input = inputs[i];

            if (!input.value) {
                e.preventDefault();
                input.focus();
                spanMessages[i].classList.remove('hideSpan')

                return; // break the looping when some input isn't filled
            }
        }
    })
</script>

<?php require base_path('views/partials/footer.php') ?>