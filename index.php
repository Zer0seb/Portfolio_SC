<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
         <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
         <link rel="icon" type="image/png" sizes="16x16" href="assets/img/Logo_blanc.png">



        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Sebastien Coffigniez | Portfolio</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo"><img src="assets/img/Logo_reduit2.png"></a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Accueil</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">A propos</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Compétences</a></li>
                        <li class="nav__item"><a href="#work" class="nav__link">Projets</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== ACCUEIL =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title" id="Titre">Bonjour,<br>Je m'appelle <span class="home__title-color">Sebastien</span><br> </br> Web Communication</h1>

                    
                    <a href="assets/COFFIGNIEZ_Sebastien_CV.pdf"style="margin: left 2rem;" class="button" download>Téléchargez mon CV !</a>
                </div>

                <div class="home__social">
                  <!--   <a href="https://www.linkedin.com/in/sebastien-coffigniez-54a3081a7/" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>--> 
                   <!--  <a href="" class="home__social-icon"><i class='bx bxl-behance' ></i></a>--> 
                   <!--  <a href="" class="home__social-icon"><i class='bx bxl-github' ></i></a>--> 
                </div>

             <div class="home__img">
                <img src="assets/img/Logo_home.png" id="home_logo">
                </div>
            </section>

            <!--===== A PROPOS =====-->
            <section class="about section " id="about">
                <h2 class="section-title">A propos</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/Photo1.jpg" alt="">
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle">Bonjour, je m'appelle Sebastien</h2>
                        <p class="about__text">Je suis titulaire d'une licence de philosophie que j'ai obtenu à l'Université de Lille. Cela m'a appris les rouages de l'argumentation et de la rhétorique, mais m'a également donné un bon bagage lexical et culturel.</p><br>

                            Je me suis par la suite inscris en MMI (Métiers du Multimédia et de l'Internet). Pourquoi une telle réorientation? Je suis toujours passionné par la philosophie mais les perspectives d'avenir dans ce domaine ne me plaisaient guère. Et donc, étant passionné depuis très longtemps par le domaine du numérique, de l'audiovisuel et de l'informatique, je me suis tourné vers une formation professionnalisante et polyvalente.</p>           
                    </div>                                   
                </div>
            </section>

            <!--===== SKILLS =====-->
            <section class="skills section" id="skills">
                <h2 class="section-title">Compétences</h2>

                <div class="skills__container bd-grid">          
                    <div>
                        <h2 class="skills__subtitle">Mes compétences</h2>
                        <p class="skills__text">  Mes compétences peuvent êtres variées selon le domaine étant donné la polyvalence de la formation. Néanmoins, en voici quelques unes qui me semblent pertinent de mettre en avant</p>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-html5 skills__icon'></i>
                                <i class='bx bxl-css3 skills__icon'></i>
                                <span class="skills__name">HTML5 - CSS3</span>
                            </div>
                            <div class="skills__bar skills__html">

                            </div>
                            <div>
                                <span class="skills__percentage">75%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-php skills__icon' ></i>
                                <span class="skills__name">PHP</span>
                            </div>
                            <div class="skills__bar skills__php">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">65%</span>
                            </div>
                        </div>
                        <!--<div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-javascript skills__icon' ></i>
                                <span class="skills__name">JAVASCRIPT</span>
                            </div>
                            <div class="skills__bar skills__js">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">65%</span>
                            </div>
                        </div>-->
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxs-paint skills__icon'></i>
                                <span class="skills__name">UX/UI</span>
                            </div>
                            <div class="skills__bar skills__ux">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">80%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxs-analyse skills__icon'></i>
                                <span class="skills__name">Analyse et Synthèse</span>
                            </div>
                            <div class="skills__bar skills__analyse">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">90%</span>
                            </div>
                        </div>
                    </div>
                    
                    <div>              
                        <img src="assets/img/work3.jpg" alt="" class="skills__img"> <!--<a href="https://fr.freepik.com/photos-gratuite/homme-affaires-travailler-ordinateur-portable_6766229.htm">Image de pressfoto</a> sur Freepik -->
                    </div>
                </div>
            </section>

            <!--===== PROJETS  PERSOS =====-->
            <section class="work_perso section" id="work">
                <h2 class="section-title">Projets persos</h2>

                <div class="work__container bd-grid">
                    <a href="Omniscience.html" class="work__img">
                        <img src="assets/img/Omniscience.png" alt="Première de couverture Omniscience">
                        <div class="description">
                           <!-- <i class="bx bx-search"></i>-->
                            <h2 class="description_titre"> Mon livre " Omniscience" </h2>
                            <p class="description_desc"> Thriller psychologique écrit et auto-édité en 2020. </p>
                            <!--<h3 class="desc_theme"> Web <br> Audiovisuel <br>Communication </h3> -->
                            <h3 class="description_desc"> Cliquez pour en savoir + </h3>
                        </div>
                    </a>
                    <a href="Virgule.html" class="work__img">
                        <img src="assets/img/Virgule.png" alt=" Logo Virgule">
                        <div class="description">
                           <!-- <i class="bx bx-search"></i>-->
                            <h2 class="description_titre"> Média "Virgule" </h2>
                            <p class="description_desc"> Média collaboratif et interdisciplinaire lancé en 2020, notamment sur Youtube et Instagram. </p>
                            <!--<h3 class="desc_theme"> Web <br> Audiovisuel <br>Communication </h3> -->
                            <h3 class="description_desc"> Cliquez pour en savoir + </h3>
                        </div>
                    </a>
                    <a href="Warholised.html" class="work__img">
                        <img src="assets/img/Wharolised.png" alt=" Illustration de Wharolised">
                        <div class="description">
                           <!-- <i class="bx bx-search"></i>-->
                            <h2 class="description_titre"> Projet "Warholised" </h2>
                            <p class="description_desc"> Petite gallerie de visuels que j'ai réalisés de moi et de mes proches à la manière d'Andy Warhol.  </p>
                            <!--<h3 class="desc_theme"> Web <br> Audiovisuel <br>Communication </h3> -->
                            <h3 class="description_desc"> Cliquez pour en savoir + </h3>
                        </div>
                    </a>
            
                </div>
            </section>
              <!--===== PROJETS  ETUDES=====-->
            <section class="work section" id="work">
                <h2 class="section-title">Projets de formation</h2>

                <div class="work__container bd-grid">
                    <a href="Astrocon.html" class="work__img">
                        <img src="assets/img/Astrocon.png" alt=" Logo Astrocon">
                        <div class="description">
                           <!-- <i class="bx bx-search"></i>-->
                            <h2 class="description_titre"> Astrocon </h2>
                            <p class="description_desc"> Projet de création de convention fictive sur le thème de l'astronomie et de l'espace. </p>
                            <!--<h3 class="desc_theme"> Web <br> Audiovisuel <br>Communication </h3> -->
                            <h3 class="description_desc"> Cliquez pour en savoir + </h3>
                        </div>
                    </a>
                    <a href="Instagram.html" class="work__img">
                        <img src="assets/img/Instagram.PNG" alt="Illustration projet Instagram">
                        <div class="description">
                           <!-- <i class="bx bx-search"></i>-->
                            <h2 class="description_titre"> Instagram de l'IUT</h2>
                            <p class="description_desc"> Projet fictif de développement pour mobile d'un réseau social type Instagram. Codé avec Blade et PHP </p>
                            <!--<h3 class="desc_theme"> Web <br> Audiovisuel <br>Communication </h3> -->
                            <h3 class="description_desc"> Cliquez pour en savoir + </h3>
                        </div>
                    </a>
                    <a href="Creo_Casus.html" class="work__img">
                        <img src="assets/img/Creo_Casus.png" alt="Logo Creo Casus">
                        <div class="description">
                           <!-- <i class="bx bx-search"></i>-->
                            <h2 class="description_titre"> Agence Creo Casus</h2>
                            <p class="description_desc"> Projet de crétation d'agence de communication fictive, spécialisée dans le branding et le rebranding. </p>
                            <!--<h3 class="desc_theme"> Web <br> Audiovisuel <br>Communication </h3> -->
                            <h3 class="description_desc"> Cliquez pour en savoir + </h3>
                        </div>
                    </a>
                    <a href="Michel Creusot.html" class="work__img">
                        <img src="assets/img/Michel_Creusot.png" alt="Logo Michel Creusot">
                        <div class="description">
                           <!-- <i class="bx bx-search"></i>-->
                            <h2 class="description_titre"> Entreprise Michel Creusot </h2>
                            <p class="description_desc"> Projet de création d'identité grahpique d'une entreprise fictive.</p>
                            <!--<h3 class="desc_theme"> Web <br> Audiovisuel <br>Communication </h3> -->
                            <h3 class="description_desc"> Cliquez pour en savoir + </h3>
                        </div>
                    </a>
                    <a href="Les_Bons_Gestes.html" class="work__img">
                        <img src="assets/img/LBG.png" alt="Illustration Les Bons Gestes">
                        <div class="description">
                           <!-- <i class="bx bx-search"></i>-->
                            <h2 class="description_titre"> Association Les Bons Gestes </h2>
                            <p class="description_desc"> Création d'une véritable association étudiante, écologiste. Collaboration entre les MMI et les GEA de l'IUT de Lens </p>
                            <!--<h3 class="desc_theme"> Web <br> Audiovisuel <br>Communication </h3> -->
                            <h3 class="description_desc"> Cliquez pour en savoir + </h3>
                        </div>
                    </a>
                    <a href="Esthetique.html" class="work__img">
                        <img src="assets/img/Esthetique.png" alt="Illustration projets d'esthétique">
                        <div class="description">
                           <!-- <i class="bx bx-search"></i>-->
                            <h2 class="description_titre"> Gallerie de visuels</h2>
                            <p class="description_desc"> Plusieurs visuels réalisés pour mes cours d'Esthétique, dans plusieurs sytles, de Saul Bass au Pop Art.</p>
                            <!--<h3 class="desc_theme"> Web <br> Audiovisuel <br>Communication </h3> -->
                            <h3 class="description_desc"> Cliquez pour en savoir + </h3>
                        </div>
                    </a>
                </div>
            </section>

            <!--===== CONTACT =====-->
            <section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>
<?php unset($_POST['message']);?>
                <div class="contact__container bd-grid">
                    <form class="contact__form" method="POST">
                        <input type="text" name="nom" placeholder="Nom" class="contact__input" required>
                        <input type="mail"  name="email" placeholder="Email" class="contact__input" required>
                        <textarea name="message"id="" cols="0" rows="10" class="contact__input" required></textarea>
                        <input type="submit" value="Envoyer" class="contact__button button">
                    </form>

                    <?php
                  
    if (isset($_POST['message'])) {
        echo "<script> alert('Votre message a bien été envoyé') </script>";
       $retour = mail('sebastiencoffigniez@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: '. $_POST['nom'] . "\r\n" . 'Reply-to: ' . $_POST['email']);
       $confirma = "Bonjour";
       unset($_POST['message']);
       header('Location:Contact_reussi.html');
};

    ?>
    
    
                </div>
            </section>
        </main>

        <!--===== FOOTER =====-->
        <footer class="footer">
            <p class="footer__title">Sebastien</p>
            <div class="footer__social">
                <span> <a href="https://www.linkedin.com/in/sebastien-coffigniez-54a3081a7/" class="footer__icon"><i class='bx bxl-linkedin' ></i> Mon Linkedin </a></span>
                <span>   <i class='bx bxs-phone' ></i>   06 83 18 38 74</span>
                <span> <i class='bx bxs-envelope' ></i>  sebastiencoffigniez@gmail.com</span>
               <!-- <a href="#" class="footer__icon"><i class='bx bxl-instagram' ></i></a>-->
               <!-- <a href="#" class="footer__icon"><i class='bx bxl-twitter' ></i></a>-->
            </div>
            <p style="font-size:0.6rem">© Bedimcode. All rigths reserved</p>
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>
