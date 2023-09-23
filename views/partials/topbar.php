    <nav class="topbar fixed top-0 left-0">
        <header class=" h-full flex text-2xl hover-2px-down"><a class="flex" href="/" class='tobar_link'>logoarea</a></header>

        <ul class='flex'>
            <li><a href="/" class='topbar_link'>Home</a></li>
            <li><a href="/notes" class='topbar_link'>Notas</a></li>
            <li><a href="/contact" class='topbar_link'>Contato</a></li>
            <li><a href="/about" class='topbar_link'>Sobre</a></li>
            <?php if ($_SESSION['user'] ?? false) : ?>
                <p class="text-lime-900 topbar_link">You are signed in!</p>
            <?php else : ?>
                <li><a href="/register" class='topbar_link'>Cadastrar</a></li>
                <li><a href="/authzcxzxc" class='topbar_link'>Entrar</a></li>
            <?php endif ?>
        </ul>
    </nav>