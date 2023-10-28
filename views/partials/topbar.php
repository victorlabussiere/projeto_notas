    <nav class="topbar fixed top-0 left-0">
        <header class=" h-full flex text-2xl hover-2px-down"><a class="flex" href="/" class='tobar_link'>logoarea</a></header>

        <ul class='flex items-center'>
            <li><a href="/" class='topbar_link'>Home</a></li>

            <?php if ($_SESSION['user'] ?? false) : ?>
                <li><a href="/notes" class='topbar_link'>Notas</a></li>
            <?php endif ?>

            <li><a href="/contact" class='topbar_link'>Contato</a></li>
            <li><a href="/about" class='topbar_link'>Sobre</a></li>


            <!-- Auth display -->
            <?php if ($_SESSION['user'] ?? false) : ?>

                <li class='relative topbar_link' id='subParent'>
                    <!-- User display -->
                    <i class='material-icons mr-3 my-auto'>keyboard_arrow_down</i>
                    <a href="/user?id=<?= $_SESSION['user']['id'] ?>"><?= $_SESSION['user']['nome'] ?></a>

                    <!-- Dropdown menu -->
                    <form action="session" method="post" class='absolute top-full right-0 bg-white w-full p-4 shadow-xl hideTag flex flex-col gap-5'>
                        <input type="hidden" name="_method" value='delete'>

                        <a class="flex items-start justify-between" href="/user?id=<?= $_SESSION['user']['id'] ?>">Minha conta <i class="material-icons">person</i></a>
                        <div class=" w-full flex items-center justify-between">
                            <input type="submit" value='Sair' class="flex items-start justify-between"><i class="material-icons">logout</i>
                        </div>
                    </form>
                    </div>
                </li>

            <?php else : ?>
                <!-- Guest display -->
                <li><a href="/register" class=' topbar_link'>Cadastrar</a>
                </li>
                <li class='flex'>
                    <a href="/session" class='topbar_link'>Entrar</a>
                </li>
            <?php endif ?>
        </ul>

        <script>
            // dropdown menu behavior
            const submenuParent = document.querySelector('li#subParent')
            const iconButton = submenuParent.querySelector('i.material-icons')
            const submenu = submenuParent.querySelector('form')

            iconButton.addEventListener('click', function() {
                submenu.classList.toggle('hideTag')
                if (this.textContent === 'keyboard_arrow_down') {
                    this.textContent = 'keyboard_arrow_up'
                } else {
                    this.textContent = 'keyboard_arrow_down'
                }
            })
        </script>
    </nav>