<?php
$mois = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aôut', 'septembre', 'octobre', 'novembre', 'décembre'];
?>
<section class="px-4 py-10 max-w-screen-xl mx-auto">
    <span class="title">Ceeso</span>
    <h2>L'Agenda</h2>
    <div class="border-[0.3px] border-primary rounded divide-y divide-primary flex flex-col lg:flex-row lg:divide-x lg:divide-y-0">
        <?php $loop = new WP_Query(array(
            'post_type' => 'event', 'posts_per_page' => '3', 'orderby' => 'post_date',
            'order' => 'ASC'
        )); ?>
        <?php while ($loop->have_posts()) : ?>
            <?php $loop->the_post(); ?>
            <?php
            $date = get_post_meta(get_the_ID(), 'date', true);
            $date = explode(',', $date);
            $dates = match (true) {
                count($date) === 1 => substr($date[0], 0, 2) . ' ' . ucfirst($mois[intval(substr($date[0], 3, 2)) - 1]) . ' ' . substr($date[0], 6, 4),
                // Si les 2 dates sont du même mois, on affiche seulement le jour de la première date
                count($date) === 2 => substr($date[0], 3, 2) === substr($date[1], 4, 2)  ?  substr($date[0], 0, 2) .  ' & ' . substr($date[1], 1, 2) . ' ' . ucfirst($mois[intval(substr($date[1], 4, 2)) - 1]) . ' ' . substr($date[1], 7, 4) : substr($date[0], 0, 2)  . ' & ' . ucfirst($mois[intval(substr($date[0], 3, 2)) - 1]) . ' ' . substr($date[0], 6, 4) . ' & ' . substr($date[1], 1, 2) . ' ' . ucfirst($mois[intval(substr($date[1], 4, 2)) - 1]) . ' ' . substr($date[1], 7, 4),
                count($date) > 2 => 'Voir les Prochaines dates',
            };

            ?>
            <div class="p-4 lg:w-1/3">
                <div class="h-[70px] mb-12">
                    <h3><?php the_title(); ?></h3>
                    <p class="text-[15px] leading-[18px]"><?= esc_attr($dates); ?></p>
                    <p class="text-[15px] leading-[18px]"><?= esc_attr(get_post_meta(get_the_ID(), 'place', true)); ?></p>
                </div>
                <a href=<?= get_the_permalink() ?> class="text-primary hover:text-secondary flex items-center  mb-4" href=""><span class="mr-3">Découvrir</span> <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 5.25C0.585786 5.25 0.25 5.58579 0.25 6C0.25 6.41421 0.585786 6.75 1 6.75V5.25ZM14.5303 6.53033C14.8232 6.23744 14.8232 5.76256 14.5303 5.46967L9.75736 0.696699C9.46447 0.403806 8.98959 0.403806 8.6967 0.696699C8.40381 0.989593 8.40381 1.46447 8.6967 1.75736L12.9393 6L8.6967 10.2426C8.40381 10.5355 8.40381 11.0104 8.6967 11.3033C8.98959 11.5962 9.46447 11.5962 9.75736 11.3033L14.5303 6.53033ZM1 6.75H14V5.25H1V6.75Z" fill="currentColor" />
                    </svg></a>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
    </div>
</section>