<a id="my-anchor">
    <header class="main-menu">
        <ul class="menu-list">
            <li><a href="<?php echo BASE_URL . 'main.php'?>">ГЛАВНАЯ</a></li>
            <li>
                <?php if (isset($_SESSION['id'])): ?>
                    <a href="<?php echo BASE_URL . 'gallery.php'?>">ГАЛЕРЕЯ</a>
                <?php else: ?>
                    <a href="<?php echo BASE_URL . 'gallery.php'?>">ГАЛЕРЕЯ</a>
                <?php endif; ?>
            </li>
            <li><a href="<?php echo BASE_URL . 'author.php'?>">ОБ АВТОРЕ</a></li>
            <li><a href="<?php echo BASE_URL . 'contacts.php'?>">КОНТАКТЫ</a></li>
            <li>
                <?php if (isset($_SESSION['id'])): ?>
                    <a href="#" class="dropdown-toggle">
                        <?php echo $_SESSION['username']; ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo BASE_URL . 'account.php'?>">КАБИНЕТ</a></li>
                        <li><a href="<?php echo BASE_URL . 'logout.php'?>">ВЫХОД</a></li>
                    </ul>
                <?php else: ?>
                    <a href="<?php echo BASE_URL . 'login.php'?>">ВХОД</a>
                <?php endif; ?>
            </li>
        </ul>
    </header>
</a>

<style>
    .dropdown-menu {
        display: none; /* Скрываем выпадающее меню по умолчанию */
    }

    .dropdown-toggle:hover + .dropdown-menu,
    .dropdown-menu:hover {
        display: block; /* Показываем выпадающее меню при наведении на ссылку или на само меню */
    }
</style>

<script>
    // Добавляем обработчик события для показа/скрытия выпадающего меню
    document.addEventListener("DOMContentLoaded", function() {
        var dropdownToggle = document.querySelector(".dropdown-toggle");
        var dropdownMenu = document.querySelector(".dropdown-menu");

        dropdownToggle.addEventListener("mouseover", function() {
            dropdownMenu.style.display = "block";
        });

        dropdownToggle.addEventListener("mouseout", function() {
            dropdownMenu.style.display = "none";
        });

        dropdownMenu.addEventListener("mouseover", function() {
            dropdownMenu.style.display = "block";
        });

        dropdownMenu.addEventListener("mouseout", function() {
            dropdownMenu.style.display = "none";
        });
    });
</script>