    <nav class="topbar fixed top-0 left-0">
        <header class=" h-full flex text-2xl hover-2px-down"><a class="flex" href="/" class='tobar_link'>logoarea</a></header>

        <div>
            <a href="/" class='topbar_link'>Home</a>
            <a href="/notes" class='topbar_link'>Notas</a>
            <a href="/contact" class='topbar_link'>Contato</a>
            <a href="/about" class='topbar_link'>Sobre</a>
            <?php if ($_SESSION['user'] ?? false) : ?>
                <p class="text-lime-900">You are signed in!</p>
            <?php else : ?>
                <a href="/register" class='topbar_link'>Cadastrar</a>
            <?php endif ?>
        </div>
    </nav>