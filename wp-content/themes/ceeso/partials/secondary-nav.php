<?php
$menu_secondary = wp_nav_menu([
    'menu' => 'Secondary',
    'container' => 'ul',
    'menu_class' => 'menu-secondary hidden xl:flex items-center divide-x divide-quarter text-[15px] justify-end w-full max-w-screen-xl mx-auto font-semibold',
    'echo' => false,
]);
?>

<nav class="bg-primary/10 h-[34px] flex items-center" aria-label="Liens de connexions">
    <?= $menu_secondary ?>
</nav>