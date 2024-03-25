<?php
$menu_main = wp_nav_menu([
    'menu' => 'Main',
    'container' => 'ul',
    'menu_class' => 'main',
    'echo' => false,
    'container_aria_label' => 'Navigation principal',
]);

$menu_actions = wp_nav_menu([
    'menu' => 'Actions',
    'container' => 'ul',
    'menu_class' => 'actions',
    'echo' => false,
    'container_aria_label' => 'Actions',
]);
?>

<nav class="relative px-4 py-1 flex justify-between items-center xl:max-w-screen-xl mx-auto">
    <div class="xl:hidden">
        <button class="navbar-burger flex items-center p-3">
            <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 0.88501H21" stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round" />
                <path d="M1 8.38501H21" stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round" />
                <path d="M1 16.115H21" stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round" />
            </svg>
        </button>
    </div>
    <a href="#"><img src="./wp-content/themes/ceeso/assets/images/logo_ceeso.png" alt="Centre Européen d'Enseignement supérieur de l'Ostéopathie" /></a>
    <div class="xl:hidden">
        <button>
            <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.2608 12.094C15.8565 11.0346 16.9118 9.22232 16.9118 7.16807C16.9118 3.90863 14.2594 1.25626 11 1.25626C7.74053 1.25626 5.08815 3.90863 5.08815 7.16807C5.08815 9.22301 6.14346 11.0346 7.73915 12.094C4.99465 12.8709 2.97546 15.3933 2.97546 18.3839V19.2303C2.97546 20.1584 3.6334 20.9579 4.54021 21.1312C6.6639 21.5375 8.83778 21.7438 11 21.7438C13.1622 21.7438 15.336 21.5375 17.4597 21.1312C18.3665 20.9579 19.0245 20.1584 19.0245 19.2303V18.3839C19.0245 15.3933 17.0053 12.8716 14.2608 12.094ZM6.32565 7.16807C6.32565 4.59063 8.42253 2.49376 11 2.49376C13.5774 2.49376 15.6743 4.59063 15.6743 7.16807C15.6743 9.74551 13.5774 11.8424 11 11.8424C8.42253 11.8424 6.32565 9.74551 6.32565 7.16807ZM17.7877 19.2303C17.7877 19.5658 17.5525 19.8538 17.228 19.9164C13.1319 20.7001 8.86871 20.7001 4.77259 19.9164C4.44809 19.8545 4.21296 19.5658 4.21296 19.2303V18.3839C4.21296 15.4593 6.5924 13.0799 9.51703 13.0799H12.4829C15.4075 13.0799 17.787 15.4593 17.787 18.3839L17.7877 19.2303Z" fill="black" />
            </svg>
        </button>
    </div>
    <div class="navbar-regular hidden absolute top-1/2 left-1/3 transform -translate-y-1/2 -translate-x-1/2 xl:flex xl:mx-auto xl:flex xl:items-center xl:w-auto xl:space-x-6">
        <?= $menu_main; ?>
    </div>
    <div class="hidden xl:block"><?= $menu_actions; ?></div>
</nav>
<div class="navbar-menu relative z-50 hidden">
    <div class="navbar-backdrop fixed inset-0 opacity-25"></div>
    <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
        <div class="flex items-center mb-8">
            <a class="mr-auto" href="#">
                <img src="./wp-content/themes/ceeso/assets/images/logo_ceeso.png" alt="Centre Européen d'Enseignement supérieur de l'Ostéopathie" />
            </a>
            <button class="navbar-close">
                <svg class="h-6 w-6 text-third cursor-pointer hover:text-secondary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div>
            <?= $menu_main; ?>
        </div>
        <div class="mt-auto">
            <?= $menu_actions; ?>
        </div>
    </nav>
</div>