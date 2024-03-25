<section class="p-5 pb-10">
    <span class="title">Découvrez</span>
    <h2>Nos questions les plus fréquentes</h2>
    <div class="space-y-4 ">
        <?php $loop = new WP_Query(array('post_type' => 'question', 'posts_per_page' => '10')); ?>
        <?php while ($loop->have_posts()) : ?>
            <?php $loop->the_post(); ?>
            <div class="flex justify-between items-center pb-4 border-b-2 border-primary/10">
                <span class="leading-[19.2px]"><?php the_title(); ?>
                </span>
                <svg width="42" height="43" viewBox="0 0 42 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect y="0.375" width="42" height="42" rx="21" fill="#256EFA" fill-opacity="0.1" />
                    <g clip-path="url(#clip0_349_1971)">
                        <path d="M27.3 20.675H21.7V15.075C21.7 14.6886 21.3864 14.375 21 14.375C20.6136 14.375 20.3 14.6886 20.3 15.075V20.675H14.7C14.3136 20.675 14 20.9886 14 21.375C14 21.7614 14.3136 22.075 14.7 22.075H20.3V27.675C20.3 28.0614 20.6136 28.375 21 28.375C21.3864 28.375 21.7 28.0614 21.7 27.675V22.075H27.3C27.6864 22.075 28 21.7614 28 21.375C28 20.9886 27.6864 20.675 27.3 20.675Z" fill="#256EFA" />
                    </g>
                    <defs>
                        <clipPath id="clip0_349_1971">
                            <rect width="14" height="14" fill="white" transform="translate(14 14.375)" />
                        </clipPath>
                    </defs>
                </svg>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
    </div>
</section>