<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <style>
            #exercice1_body{
   margin:0;
}
#exercice1_conteneur{
   margin:0;
   padding:10px;
   background:#048654;
}
.exercice1_fieldset{
   margin:10px;
   border:none;
   background-color:#FFFFFF;
   border-radius:10px;
   padding:20px;
}
.exercice1_legend{
   font-family:verdana, arial, sans-serif;
   font-size:14pt;
   font-weight:bold;
   color:#FFFFFF;
   margin:10px;
   padding:10px 20px 10px 20px;
   background-color:#048654;
   border-radius:4px;
}
.exercice1_label{
   display:inline-block;
   width:200px;
   font-family:verdana, arial, sans-serif;
   font-size:10pt;
   padding:10px;
}
.exercice1_input{
   display:inline-block;
   width:200px;
   padding:6px;
}
.exercice1_champ{
   outline:none;
   border:solid 1px #AAAAAA;
   padding:10px;
   border-radius:4px;
   font-family:verdana, arial, sans-serif;
}
input[type="text"].exercice1_champ:focus, input[type="password"].exercice1_champ:focus{
   background-color:#EEEEEE;
}
input[type="submit"].exercice1_champ{
   background-color:#048654;
   color:#FFFFFF;
   padding:6px 20px 6px 20px;
   border:none;
   cursor:pointer;
   padding:10px;
   width:160px;
}
        </style>
        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets/css/styles.css">
        
        <title>Restozimi</title>
    </head>
    <body>

        <!--========== SCROLL TOP ==========-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-chevron-up scrolltop__icon'><input type='button' class='button'  ></i>
        </a>

        <!--========== HEADER ==========-->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="#" class="nav__logo">Restozimi</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active-link">Acceil</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">à propos de nous</a></li>
                        <li class="nav__item"><a href="#services" class="nav__link">Services</a></li>
                        <li class="nav__item"><a href="#menu" class="nav__link">Menu</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contactez nous</a></li>

                        <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--========== HOME ==========-->
            <section class="home" id="home">
                <div class="home__container bd-container bd-grid">
                    <div class="home__data">
                        <h1 class="home__title">restozimi</h1>
                        <h2 class="home__subtitle"> Profitez de nos offers <br> Pour cette semaine <br></h2>
                        
                    </div>

                    <img src="assets/img/logo.png" alt="" class="home__img">
                </div>
            </section>

            <!--========== ABOUT ==========-->
            <section class="about section bd-container" id="about">
                <div class="about__container  bd-grid">
                    <div class="about__data">
                        <span class="section-subtitle about__initial">à propos de nous</span>
                        <h2 class="section-title about__initial">On prepare les meilleurs <br> repas</h2>
                        <p class="about__description">on prepare les meilleurs plats a meknes , avec une exelent service , qualiter , prix , visitez nous !!</p>
                        <a href="#" class="button">acceil</a>
                    </div>

                    <img src="assets/img/tizi1.png" alt="" class="about__img">
                </div>
            </section>

            <!--========== SERVICES ==========-->
            <section class="services section bd-container" id="services">
                <span class="section-subtitle">services</span>
                <h2 class="section-title">Notre exelent service</h2>

                <div class="services__container  bd-grid">
                    <div class="services__content">
                    
                        <h3 class="services__title">Excellent plats</h3>
                        <p class="services__description">Nous offre a mais client un exelent service , avec des techniques professionnel on preparont nous plats pour nous cher client.</p>
                    </div>

                    <div class="services__content">
                        
                        <h3 class="services__title">l'equipe de travail </h3>
                        <p class="services__description">Nous offre a mais client un exelent service , et en se form d'un equipe professionnel avec une grand experiance aux restaurant europien .</p>
                    </div>

                    <div class="services__content">
                        
                        <h3 class="services__title">Livraison</h3>
                        <p class="services__description">Nous offre a mais client un exelent service , dant une dure incroable et moin d'une heure ta commende doit etre chez vous , avec une livraison gratuit partout meknes.</p>
                    </div>
                </div>
            </section>

            <!--========== MENU ==========-->
            <section class='menu section bd-container' id='menu'>
                <span class='section-subtitle'>Special</span>
                <h2 class='section-title'>Notre Menu</h2>
            <?php
            
            require 'connexion.php';




            
               
                
                  
                 
                  $req="SELECT `idplat`, `nomplat`, `prixplat`, `imgplat` FROM `menu`";
                  $rep=$con->query($req);
                  
                  while($row=$rep->fetch())
                  {
                        echo " <div class='menu__content'>
                        <img src='"."$row[imgplat]"."' >
                        <h3 class='menu__name'>"."$row[nomplat]"."</h3>
                        <span class='menu__detail'>plat marocain traditionnel</span>
                        <span class='menu__preci'>"."$row[prixplat]"."</span>
                        <a href='#confi'><input type='submit' name='"."$row[nomplat]"."' value='AJOUTER' class='button'   ></a>
                        </div>";
           
                  }
                  

                ?></section>
         






         
                  <?php
                    if(isset($_POST["valider"])){

                        
                        $nom=$_POST["nom"]; $prenom=$_POST["prenom"];
                        $tel=$_POST["Tel"];  $adress=$_POST["Adress"];                      
                        $t=array(
                            ':nom'=>$nom,
                            ':prenom'=>$prenom,
                            ':tel'=>$tel,
                            ':adress'=>$adress,
                        ) ;
                        $req="INSERT INTO `client`(`idclient`, `nomcli`, `prenomcli`, `telcli`, `adress`)
                             VALUES ('','$nom','$prenom',$tel,'$adress')";
                        $sttm=$con->prepare($req);
                        $sttm->execute($t);
                        } 
                        

                      
                  ?>

         

            
            <div id="exercice1_conteneur">
         <form id="confi" name="inscription" method="post" action="#">
            <fieldset class="exercice1_fieldset">
               <legend class="exercice1_legend">Confirmation</legend>
               <div class="exercice1_label">
                  Nom
               </div>
               <div class="exercice1_input">
                  <input type="text" name="nom" class="exercice1_champ" />
               </div><br />
               <div class="exercice1_label">
                  Prénom
               </div>
               <div class="exercice1_input">
                  <input type="text" name="prenom" class="exercice1_champ" />
               </div><br />
               <div class="exercice1_label">
                  Tel
               </div>
               <div class="exercice1_input">
                  <input type="text" name="Tel" class="exercice1_champ" />
               </div><br />
               <div class="exercice1_label">
                  Adress
               </div>
               <div class="exercice1_input">
                  <input type="text" name="Adress" class="exercice1_champ" />
               </div><br />
               
               <div class="exercice1_label">
                  
               </div>
               <div class="exercice1_input">
                  <input type="submit" name="valider" value="Valider" class="exercice1_champ" />
               </div><br />
            </fieldset>
         </form>
      </div>
   















            <!--========== CONTACT US ==========-->
            <section class="contact section bd-container" id="contact">
                <div class="contact__container bd-grid">
                    <div class="contact__data">
                        <h2 class="section-title contact__initial">Contactez nous </h2>
                        <p class="contact__description">Vous pouvez nos contactez et recever nos nouveaute sur votre email.
                        <br><br>MERCI POUR VOTRE CONFIENCE!!!
                        </p>
                    </div>

                    <div class="contact__button">
                        <input type="text" value="@gmail.com" class="button" >
                    </div>
                </div>
            </section>
        </main>




        
        <!--========== FOOTER ==========-->
        <footer class="footer section bd-container">
            <div class="footer__container bd-grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">Restozimi</a>
                    <span class="footer__description">Restaurant</span>
                    <div>
                        <a href="#" class="footer__social"><i class='bx bxl-facebook'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-instagram'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
                    </div>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Services</h3>
                    <ul>
                        <li><a href="#" class="footer__link">livraison</a></li>
                        <li><a href="#" class="footer__link">les prix</a></li>
                        <li><a href="#" class="footer__link">local</a></li>
                        <li><a href="#" class="footer__link">Reservation</a></li>
                    </ul>
                </div>

            
                <div class="footer__content">
                    <h3 class="footer__title">Adress</h3>
                    <ul>
                        <li>meknes - maroc</li>
                        <li>ISTAG bab tizimi</li>
                        <li>0766110718</li>
                        <li>restobabtizimi@email.com</li>
                    </ul>
                </div>
            </div>

            <p class="footer__copy">&#169; projet de la dernier annee 2021/2022  </p>
        </footer>

        <!--========== SCROLL REVEAL ==========-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--========== MAIN JS ==========-->
        <script src="assets/js/main.js"></script>
    </body>
</html>
