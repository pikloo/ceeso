<?php
get_header();
?>
<header>
    <?php get_template_part('partials/secondary-nav', 'secondary-nav') ?>
    <?php get_template_part('partials/main-nav', 'main-nav') ?>
</header>
<main>
    <section class="bg-secondary text-white p-4">
        <div class="w-fit mx-auto space-y-2">
            <img src="./wp-content/themes/ceeso/assets/images/ceeso_team_1.png" alt="Centre Européen d’Enseignement supérieur de l’Ostéopathie" />
            <img src="./wp-content/themes/ceeso/assets/images/ceeso_team_2.png" alt="Centre Européen d’Enseignement supérieur de l’Ostéopathie" />
        </div>
        <div class="space-y-8">
            <h1 class="text-[34px] leading-[48px]">Centre Européen d’Enseignement supérieur de l’Ostéopathie</h1>
            <div class="leading-[19.2px] ">
                <p>École d’Ostéopathie depuis 1991.</p>
                <p> Formation agrée par le ministère de la santé, RNCP Niveau 7</p>
            </div>
            <div>
                <div>
                    <ul class="flex gap-x-1 float-left mr-2">
                        <?php for ($i = 0; $i < 4; $i++) : ?>
                            <li>
                                <img src="./wp-content/themes/ceeso/assets/images/stars.png" alt="90% taux de recommandation" />
                            </li>
                        <?php endfor; ?>
                    </ul>
                    <span class="font-medium">4,03/5</span>
                </div>
                <div class="text-xs leading-[14.4px]">
                    <p>120+ avis d’étudiants qui nous recommandent</p>
                    <p>90% taux de recommandation</p>
                </div>

            </div>
            <div class="w-full font-medium text-lg leading-[21.6px]">
                <a class="button bg-primary mb-2.5" href="">S'inscrire à la JPO</a>
                <a class="button border border-white flex justify-around" href="">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 18C4.0293 18 0 13.9707 0 9C0 4.0293 4.0293 0 9 0C13.9707 0 18 4.0293 18 9C18 13.9707 13.9707 18 9 18ZM7.7598 5.7735C7.70563 5.73736 7.64268 5.71659 7.57765 5.7134C7.51261 5.71021 7.44793 5.72471 7.39048 5.75537C7.33304 5.78604 7.28499 5.8317 7.25144 5.88751C7.2179 5.94332 7.20012 6.00719 7.2 6.0723V11.9277C7.20012 11.9928 7.2179 12.0567 7.25144 12.1125C7.28499 12.1683 7.33304 12.214 7.39048 12.2446C7.44793 12.2753 7.51261 12.2898 7.57765 12.2866C7.64268 12.2834 7.70563 12.2626 7.7598 12.2265L12.1509 9.2997C12.2003 9.26684 12.2408 9.22228 12.2688 9.17C12.2968 9.11771 12.3115 9.05932 12.3115 9C12.3115 8.94068 12.2968 8.88229 12.2688 8.83C12.2408 8.77772 12.2003 8.73316 12.1509 8.7003L7.7589 5.7735H7.7598Z" fill="white" />
                    </svg>
                    <span class="ml-4">Visite virtuelle de l'école</span></a>
            </div>
        </div>
    </section>
    <section class="px-4 py-10">
        <span class="title">Ceeso</span>
        <h2>L'Agenda</h2>
        <div class="border-[0.3px] border-primary rounded divide-y divide-primary">
            <div class="p-4">
                <div class="mb-12">
                    <h3>Prochaines Journée portes ouvertes</h3>
                    <p class="text-[15px] leading-[18px]">Voir les Prochaines dates</p>
                </div>
                <a class="text-primary hover:text-secondary flex items-center  mb-4" href=""><span class="mr-3">Découvrir</span> <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 5.25C0.585786 5.25 0.25 5.58579 0.25 6C0.25 6.41421 0.585786 6.75 1 6.75V5.25ZM14.5303 6.53033C14.8232 6.23744 14.8232 5.76256 14.5303 5.46967L9.75736 0.696699C9.46447 0.403806 8.98959 0.403806 8.6967 0.696699C8.40381 0.989593 8.40381 1.46447 8.6967 1.75736L12.9393 6L8.6967 10.2426C8.40381 10.5355 8.40381 11.0104 8.6967 11.3033C8.98959 11.5962 9.46447 11.5962 9.75736 11.3033L14.5303 6.53033ZM1 6.75H14V5.25H1V6.75Z" fill="currentColor" />
                    </svg></a>
            </div>
            <div class="p-4">
                <div class="mb-12">
                    <h3>Prochaines Journée portes ouvertes</h3>
                    <p class="text-[15px] leading-[18px]">Voir les Prochaines dates</p>
                </div>
                <a class="text-primary hover:text-secondary flex items-center  mb-4" href=""><span class="mr-3">Découvrir</span> <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 5.25C0.585786 5.25 0.25 5.58579 0.25 6C0.25 6.41421 0.585786 6.75 1 6.75V5.25ZM14.5303 6.53033C14.8232 6.23744 14.8232 5.76256 14.5303 5.46967L9.75736 0.696699C9.46447 0.403806 8.98959 0.403806 8.6967 0.696699C8.40381 0.989593 8.40381 1.46447 8.6967 1.75736L12.9393 6L8.6967 10.2426C8.40381 10.5355 8.40381 11.0104 8.6967 11.3033C8.98959 11.5962 9.46447 11.5962 9.75736 11.3033L14.5303 6.53033ZM1 6.75H14V5.25H1V6.75Z" fill="currentColor" />
                    </svg></a>
            </div>
            <div class="p-4">
                <div class="mb-12">
                    <h3>Prochaines Journée portes ouvertes</h3>
                    <p class="text-[15px] leading-[18px]">Voir les Prochaines dates</p>
                </div>
                <a class="text-primary hover:text-secondary flex items-center  mb-4" href=""><span class="mr-3">Découvrir</span> <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 5.25C0.585786 5.25 0.25 5.58579 0.25 6C0.25 6.41421 0.585786 6.75 1 6.75V5.25ZM14.5303 6.53033C14.8232 6.23744 14.8232 5.76256 14.5303 5.46967L9.75736 0.696699C9.46447 0.403806 8.98959 0.403806 8.6967 0.696699C8.40381 0.989593 8.40381 1.46447 8.6967 1.75736L12.9393 6L8.6967 10.2426C8.40381 10.5355 8.40381 11.0104 8.6967 11.3033C8.98959 11.5962 9.46447 11.5962 9.75736 11.3033L14.5303 6.53033ZM1 6.75H14V5.25H1V6.75Z" fill="currentColor" />
                    </svg></a>
            </div>
        </div>
    </section>
    <section class="bg-primary/10 p-4 text-center">
        <span class="title">Pourquoi</span>
        <h2>Choisir notre École</h2>
        <div>
            <div>
                <img src="" alt="" />
                <h3>Le choix de l'excellence</h3>
                <p>Fondé en 1991, le CEESO Paris, est l’un des pionniers de la formation ostéopathique et forme des ostéopathes à haut niveau de compétence.</p>
            </div>
            <div>
                <img src="" alt="" />
                <h3>Le choix de l'excellence</h3>
                <p>Fondé en 1991, le CEESO Paris, est l’un des pionniers de la formation ostéopathique et forme des ostéopathes à haut niveau de compétence.</p>
            </div>
            <div>
                <img src="" alt="" />
                <h3>Le choix de l'excellence</h3>
                <p>Fondé en 1991, le CEESO Paris, est l’un des pionniers de la formation ostéopathique et forme des ostéopathes à haut niveau de compétence.</p>
            </div>
            <div>
                <img src="" alt="" />
                <h3>Le choix de l'excellence</h3>
                <p>Fondé en 1991, le CEESO Paris, est l’un des pionniers de la formation ostéopathique et forme des ostéopathes à haut niveau de compétence.</p>
            </div>
            <div>
                <img src="" alt="" />
                <h3>Le choix de l'excellence</h3>
                <p>Fondé en 1991, le CEESO Paris, est l’un des pionniers de la formation ostéopathique et forme des ostéopathes à haut niveau de compétence.</p>
            </div>
            <div>
                <img src="" alt="" />
                <h3>Le choix de l'excellence</h3>
                <p>Fondé en 1991, le CEESO Paris, est l’un des pionniers de la formation ostéopathique et forme des ostéopathes à haut niveau de compétence.</p>
            </div>
            <div>
                <img src="" alt="" />
                <h3>Le choix de l'excellence</h3>
                <p>Fondé en 1991, le CEESO Paris, est l’un des pionniers de la formation ostéopathique et forme des ostéopathes à haut niveau de compétence.</p>
            </div>
        </div>
        <a href="">Découvrir l'école</a>
    </section>
    <section class="bg-secondary p-4 text-white">
        <figure>
            <img src="./wp-content/themes/ceeso/assets/images/access_filiere_sante.png" alt="Accès filière de santé" />
            <figcaption><span>Filière</span>
                <h2>Accès filière de santé</h2>
                <p>Si vous êtes inscrit en PACES ou autre formation de santé et que vous souhaitez vous orienter vers la profession d’ostéopathe, le CEESO Paris vous propose d’évaluer ensemble la meilleure solution afin d’optimiser vos acquis et de réussir votre intégration dans notre cursus.
                </p>
                <p>Nous faisons également passer des examens anticipés pour valider les acquis des étudiants issus de PACES.
                <p>
                <p>Pour plus de renseignements, contactez : osteo@ceesoparis.com</p>
            </figcaption>
        </figure>
    </section>
    <section>
        <span>Découvrez</span>
        <h2>Nos questions les plus fréquentes</h2>
        <div>
            <div>
                <p>Lorem Ipsum is simply dummy text
                <p>
                    <img src="" alt="" />
            </div>
            <div>
                <p>Lorem Ipsum is simply dummy text
                <p>
                    <img src="" alt="" />
            </div>
            <div>
                <p>Lorem Ipsum is simply dummy text
                <p>
                    <img src="" alt="" />
            </div>
            <div>
                <p>Lorem Ipsum is simply dummy text
                <p>
                    <img src="" alt="" />
            </div>
            <div>
                <p>Lorem Ipsum is simply dummy text
                <p>
                    <img src="" alt="" />
            </div>
            <div>
                <p>Lorem Ipsum is simply dummy text
                <p>
                    <img src="" alt="" />
            </div>
            <div>
                <p>Lorem Ipsum is simply dummy text
                <p>
                    <img src="" alt="" />
            </div>
            <div>
                <p>Lorem Ipsum is simply dummy text
                <p>
                    <img src="" alt="" />
            </div>
            <div>
                <p>Lorem Ipsum is simply dummy text
                <p>
                    <img src="" alt="" />
            </div>
        </div>
    </section>
</main>
<?php get_template_part('partials/footer', 'footer') ?>

<?php get_footer(); ?>