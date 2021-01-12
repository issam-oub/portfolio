<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="Portfolio.css">

    <!-- =====BOX ICONS===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/fontawesome-5.15.1/css/fontawesome.min.css">



    <title>Portfolio website complete</title>
</head>

<body>

    <!--Video--------------------------------------------------------------->

    <!--===== HEADER =====-->
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="#" class="nav__logo">OUBBALI Issam</a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <!-- <li class="nav__item"><a href="#about" class="nav__link acive">Présentation</a></li>-->
                    <li class="nav__item"><a href="#compétences" class="nav__link acrive">Compétences</a></li>
                    <li class="nav__item"><a href="#projets" class="nav__link">Projets</a></li>
                    <li class="nav__item"><a href="#expériences" class="nav__link">Expériences </a></li>
                    <li class="nav__item"><a href="#parcous" class="nav__link">Parcous</a></li>
                    <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    <li class="nav__item"><a href="index.php" class="nav__link ">Retour</a></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <main class="l-main">

        <!--===== ABOUT =====-->
        <section class="about section " id="about">
            <h2 class="section-title">Présentation</h2>

            <div class="about__container bd-grid">
                <div class="about__img">
                    <img src="img1/img4.png" alt="">
                    <h2 class="about__subtitle">Présentation</h2>
                    <p class="about__text">Je m'appelle OUBBALI Issam et je suis passionné d’informatique et de nouvelles technologies depuis toujours notamment la conception web et mobile,
                        je suis à la recherche d’une entreprise en alternance en partenariat avec l’ETNA une école en informatique.<br>
                        A travers mes différentes expériences professionnelles j’ai pu acquérir une autonomie dans mon travail, Très rigoureux, persévérant, j’apprécie le travail en équipe et je souhaite m’investir sur des projets aussi variés, qu’innovants.
                        <br>Je suis à l’aise dans la découverte de nouvelles technologies. Je sais également rester critique et indépendant d’un point de vue technologique.
                        que du travail d’équipe pour le bon résultat..
                    </p>
                </div>

                <div>
                    <h2 class="about__subtitle">La reconversion professionnelle</h2>
                    <p class="about__text">Aprés un parcours dans le domaine sportif, j'ai décidé de tout quitter et de me reconvertir professionnellement dans l'informatique. C'est donc par passion de la tech que je me suis lancé dans cette aventure.<br> Motivé à réussir ce pari, je m'informe des dernières actualités, j'ai pu suivre des formations en autodidacte axé sur le développement web et je continue à me former en faisant des projets personnels.</p>


                    <br>
                    <h2 class="about__subtitle">Projet Pofessionnel</h2>
                    <p class="about__text">Après l'obtention du bachelor niveau bac+3, je m'oriente naturellement vers un master spécialisé dans le développement web afin d'obtenir le titre d'ingénieur bac+5, et ainsi devenir développeur Web au sein de l'entreprise qui aura su me faire confiance.<br> Je recherche donc une entreprise où je pourrais construire un avenir. Investir en moi s'apparente donc à du long terme </p>
                    <br>

                    <h2 class="about__subtitle">Centres D'intérêt</h2>

                    <div class="about__row">
                        <p class="sf"> Sport </p>
                        <p class="sf"> Voyages </p>
                        <p class="sf"> Bénévolat</p>
                    </div>
                    <div class="about__row">
                        <p class="sf"> Football </p>
                        <p class="sf"> Musique </p>
                        <p class="sf"> Randonnée</p>
                    </div>

                </div>




            </div>
        </section>

        <!--===== SKILLS =====-->
        <section class="skills section" id="compétences">
            <h2 class="section-title">Compétences</h2>
            <!--=== Front-End===------------>
            <div class="skills__container bd-grid">
                <div>
                    <img src="img1/img3.png" alt="" class="skills__img" height="600px">
                </div>
                <div>
                    <h2 class="skills__subtitle">Front-End</h2>

                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-html5  skills__icon'></i>
                            <span class="skills__name">HTML5</span>
                        </div>
                        <div class="skills__bar skills__html">

                        </div>
                        <div>
                            <span class="skills__percentage"></span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-css3 skills__icon'></i>
                            <span class="skills__name">CSS3</span>
                        </div>
                        <div class="skills__bar skills__css">

                        </div>
                        <div>
                            <span class="skills__percentage"></span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-javascript skills__icon'></i>
                            <span class="skills__name">JAVASCRIPT</span>
                        </div>
                        <div class="skills__bar skills__js">

                        </div>
                        <div>
                            <span class="skills__percentage"></span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-vuejs skills__icon'></i>
                            <span class="skills__name">VueJs</span>
                        </div>
                        <div class="skills__bar skills__vuejs">

                        </div>
                        <div>
                            <span class="skills__percentage"></span>
                        </div>
                    </div>

                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-wordpress skills__icon'></i>
                            <span class="skills__name">Wordpress</span>
                        </div>
                        <div class="skills__bar skills__wor">

                        </div>
                        <div>
                            <span class="skills__percentage"></span>
                        </div>
                    </div>

                </div>
        </section>
        <!--===Back-End===------->
        <section class="skills section" id="skills">
            <div class="skills__container bd-grid">

                <div>
                    <h2 class="skills__subtitle">Back-End</h2>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='fab fa-php skills__icon'></i>
                            <span class="skills__name">PHP</span>
                        </div>
                        <div class="skills__bar skills__php">

                        </div>
                        <div>
                            <span class="skills__percentage"></span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-symfony skills__icon'></i>
                            <span class="skills__name">Symfony</span>
                        </div>
                        <div class="skills__bar skills__symfony">

                        </div>
                        <div>
                            <span class="skills__percentage"></span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class="fab fa-laravel skills__icon"></i>
                            <span class="skills__name">Laravel</span>
                        </div>
                        <div class="skills__bar skills__laravel">

                        </div>
                        <div>
                            <span class="skills__percentage"></span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class="fas fa-database skills__icon"></i>
                            <span class="skills__name"> MySQL</span>
                        </div>
                        <div class="skills__bar skills__sql">

                        </div>
                        <div>
                            <span class="skills__percentage"></span>
                        </div>
                    </div>

                </div>
                <div>
                    <img src="img1/img10.jpeg" alt="" class="skills__img">
                </div>
            </div>
        </section>

        <!--===== WORK =====-->
        <!-- <section class="work section" id="work">
            <h2 class="section-title">Expérieces</h2>

            <div class="work__container bd-grid">
                <div class="work__img">
                    <img src="img/work1.jpg" alt="">
                </div>
                <div class="work__img">
                    <img src="img/work2.jpg" alt="">
                </div>
                <div class="work__img">
                    <img src="img/work3.jpg" alt="">
                </div>
                <div class="work__img">
                    <img src="img/work4.jpg" alt="">
                </div>

            </div>
        </section> -->
        <section class="work section" id="projets">
            <h2 class="section-title">Projets</h2>
            <!--1-------------------------------------------->
            <div class="work__container bd-grid">
                <div class="carte">
                    <img src="img1/portfolio.png" class="work__img" height="700" width="300">
                    <div class="titre">
                        Portfolio
                        <hr>
                    </div>
                    <div class="tech">
                        <h4>Techno: </h4>
                        <p> HTML/CSS/Javascript PHP/MYSQL</p>
                    </div>
                    <div class="info">
                        <h3>Description</h3>
                        <p>&#10004;Portfolio un site responsive que j'ai crée afin de me présenter comme il faut.</p>
                    </div>
                </div>
                <!--2--------------------------------------->
                <div class="carte">
                    <img src="img1/capture1.png" class="work__img" height="700" width="300">
                    <div class="titre">
                        Moroccan Food
                        <hr>
                    </div>
                    <div class="tech">
                        <h4>Techno: </h4>
                        <p> HTML/CSS/Javascript </p>
                    </div>
                    <div class="info">
                        <h3>Description</h3>
                        <p>&#10004; Un sie Responsive qui présente des plats marocains afin de passer commande</p>
                    </div>
                </div>
                <!--3--------------------------------------->
                <div class="carte">
                    <img src="img1/img5.jpg" class="work__img" height="700" width="300">
                    <div class="titre">
                        Site E-commerce
                        <hr>
                    </div>
                    <div class="tech">
                        <h4>Techno: </h4>
                        <p> HTML/CSS/Javascript PHP/MYSQL</p>
                    </div>
                    <div class="info">
                        <h3>Description</h3>
                        <p>&#10004; Un site vitrine E-Commerce ou on peut présenter des articles pour tous les passionés des Baskets Américan.</p>
                    </div>
                </div>
            </div>
        </section>
        <!--4--------------------------------------->
        <section class="work section" id="expériences">
            <h2 class="section-title">Expérieces </h2>

            <div class="work__container bd-grid">
                <div class="carte">

                    <img src="img1/img5.jpg" class="work__img" height="700" width="300">

                    <div class="titre">
                        business developer
                        <hr>
                    </div>
                    <div class="tech">
                        <h4>Stage</h4>
                        <p> Salle de Sport Vita Liberte </p>
                    </div>
                    <div class="info">
                        <h3>Description</h3>
                        <p>Stage de fin d'études ou j'avais des reponsabilité de developper le chiffre d'affaire du club,
                            la gesion globale du club, relation cliens et coachs...</p>
                    </div>
                </div>
                <!--5--------------------------------------->
                <div class="carte">

                    <img src="img1/img5.jpg" class="work__img" height="700" width="300">

                    <div class="titre">
                        Encadreur
                        <hr>
                    </div>
                    <div class="tech">
                        <h4>2012 - 2015 </h4>
                        <p> Multisports Juniors Rabat</p>
                    </div>
                    <div class="info">
                        <h3>Description</h3>
                        <p>Encadreur de football des U9 - U12 & Organisation et encadrement des stages de multisports.<br> </p>
                    </div>
                </div>
                <!--6--------------------------------------->
                <div class="carte">

                    <img src="img1/img5.jpg" class="work__img" height="700" width="300">

                    <div class="titre">
                        Gestion de la tréserorie
                        <hr>
                    </div>
                    <div class="tech">
                        <h4> 2015 - 2017 </h4>
                        <p> Union Athletic Club de Rabat</p>
                    </div>
                    <div class="info">
                        <h3>Description</h3>
                        <p>Membre fondateur du club et responsable de la trésorerie du club .<br> Gestion des equipes et recherche des partenaires et sponsors pour le club. </p>
                    </div>
                </div>
            </div>
        </section>

        <!---====Parcours======------------------------------------------>
        <section class="work section" id="parcous">
            <h2 class="section-title">Parcours</h2>
            <!--1--------------------------------------->
            <div class="work__container bd-grid">
                <div class="carte">

                    <img src="par/img6.png" class="work__img">

                    <div class="titre">
                        Bachelor chef de projet de projet Web et Mobile
                        <hr>
                    </div>
                    <div class="tech">
                        <h5>📍 &#9755; Ivry-sur-Seine &nbsp; France </h5>
                    </div>
                    <div class="info">
                        <h3>Description</h3>
                        <p>&#10004;Shell/Laravel/Symfony/PhP/MySQL<br>&#10004;Développement pour le mobile et les API <br> &#10004;Administration Web et Système sous Windows et LINUX & Sécurité Web <br>&#10004; Algorithmique pour les statistiques<br> &#10004;Administration de systèmes de gestion de base de données
                        </p>
                    </div>
                </div>
                <!--2--------------------------------------->
                <div class="carte">
                    <img src="par/img44.png" class="work__img">
                    <div class="titre">
                        Master Management du Sport
                        <hr>
                    </div>
                    <div class="tech">
                        <h5>📍&#9755; Marseille &nbsp; France </h5>
                    </div>
                    <div class="info">
                        <h3>Description</h3>
                        <p>&#10004;Economie du Sport & Sociologie du Sport<br> &#10004;Communication Digitale & Management <br> &#10004; Marketing des évènements & Anglais<br> &#10004; Développement et Stratégie & APS <br> &#10004;Analyse systémique et transactionnelle<br> &#10004; Management des équipes projets& APS</p>
                    </div>
                </div>
                <!--3--------------------------------------->
                <div class="carte">
                    <img src="par/img33.png" class="work__img">
                    <div class="titre">
                        Licence Management du Sport
                        <hr>
                    </div>
                    <div class="tech">
                        <h5>📍&#9755; Champs Sur Marne &nbsp; France 🇫🇷 </h5>
                    </div>
                    <div class="info">
                        <h3>Description</h3>
                        <p>&#10004;Marketing Média & Marketing évémentiel<br> &#10004;Web Communication & Web Marketing<br> &#10004; Gestion de Projet Sportif & Anglais<br> &#10004; Etude de Marché & Projet Sportif <br> &#10004; Création de Site Web & Management<br> &#10004; Gestion Financière & Droit & APS</p>
                    </div>
                </div>
                <!--4-------------------------------------------->

                <div class="carte">
                    <img src="par/img11.png" class="work__img">
                    <div class="titre">
                        Licence Economie&Gestion
                        <hr>
                    </div>
                    <div class="tech">
                        <h5> 📍 &#9755; Rabat &nbsp; Maroc </h5>
                    </div>
                    <div class="info">
                        <h3>Description</h3>
                        <p>&#10004; Macroéconomie & Microéconomie<br> &#10004; GRH & Comptabilité & Fiscalité <br> &#10004; Satistique & Algébre & Probabilité<br> &#10004; Finance & Droit & Marketing<br> &#10004; Econométrie & Economie industrielle<br> &#10004; Audit et Contrôle de Gestion </p>
                    </div>
                </div>

                <!--5--------------------------------------->
                <div class="carte">

                    <img src="par/img55.png" class="work__img">

                    <div class="titre">
                        Année préparatoir de Langue Russe
                        <hr>
                    </div>
                    <div class="tech">
                        <h5>📍 &#9755; Astrakhan &nbsp; Russie</h5>

                    </div>
                    <div class="info">
                        <h3>Description</h3>
                        <p>Année préparatoir de la langue russe à l'université d'Astrakhan</p>
                    </div>
                </div>

            </div>
        </section>

        <!--===== CONTACT =====-->
        <section class="contact section" id="contact">
            <h2 class="section-title">Contact</h2>

            <div class="contact__container bd-grid">
                <form action="" class="contact__form">
                    <input type="text" placeholder="Nom&Prénom" class="contact__input">
                    <input type="numéro" placeholder="Téléphone" class="contact__input">
                    <input type="mail" placeholder="Email" class="contact__input">
                    <textarea type="text" placeholder="" cols="0" rows="15" class="contact__input"></textarea>
                    <input type="button" value="Envoyer" class="contact__button button">
                </form>
            </div>
        </section>
    </main>

    <!--===== FOOTER =====-->
    <footer class="footer">
        <p class="footer__title">OUBBALI Issam</p>
        <div class="footer__social">
            <a href="#" class="footer__icon"><i class='bx bxl-google'></i></a>
            <a href="https://www.linkedin.com/in/issam-oubbali-ab386513a" class="footer__icon"><i class='bx bxl-linkedin'></i></a>
            <a href="#" class="footer__icon"><i class='bx bxl-twitter'></i></a>
        </div>
        <h4>oubbali91@gmail.com</h4>
        <h5>&#169; 2020 copyright </h5>

    </footer>


    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--===== MAIN JS =====-->
    <script src="js/main.js"></script>
    <!---Script Card------------------------------------------------>
    <script type="text/javascript" src="js/vanilla-tilt.js"></script>

</body>

</html>