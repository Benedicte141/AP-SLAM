<?php

session_start();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/portfolio.css">
</head>
<body>
<header>


<div class="Accueil">
    <h1>Bienvenue</h1>
    </div>

  <nav>
    <ul>
    <il><a href="#accueil">Accueil</a></il>
    <il><a href="#apropos">A propos</a></il>
    <il><a href="#competences">Compétences</a></il>
    <il><a href="#experiences">Expériences</a></il>
    <il><a href="#formation">Formation</a></il>
    <il><a href="#contact">Contact</a></il>
    </ul>
    </nav>
  </header>


  <section id="accueil">
    <div class="photo">
      <div class="cercle">
        <img src="images/photoAccueil.jpeg" alt="Votre Image">
      </div>
    </div>
        <div class="card">
        <?php include("php/accueil.php"); ?>
          </div>
          <div class="card1">
            <div class="image">
            <img src="images/feuilleBienvenue.jpg" alt="Votre Image">
            </div>
          </div>
  </section>

  <section id="apropos">

  <div class="card2">
    <?php include("php/apropos.php"); ?>
      <div class="card3">
        <div class="image">
        <img src="images/aPropos.jpg">
        </div>
      </div>
      <div class="renvoipp">
      <img src="images/up.png" width="20" height="20">
      <a href="#accueil">Page précédente</a>
    </div>
    <div class="renvoips">
      <img src="images/down.png" width="20" height="20">
      <a href="#competences">Page suivante</a>
    </div>
  </section>

  <section id="competences">
    <div class="cache">
    <?php include("php/competences.php"); ?>
    </div>
  <div class="skills">
  <div class="skills-bar">
    <div class="bar">
      <div class="info">
        <span>HTML</span>
      </div>
      <div class="progress-line"><span class="html"></span></div>
      <div class="bar">
        <div class="info">
          <span>CSS</span>
        </div>
        <div class="progress-line"><span class="css"></span></div>
        <div class="bar">
          <div class="info">
            <span>PHP</span>
          </div>
          <div class="progress-line"><span class="php"></span></div>
          <div class="bar">
            <div class="info">
              <span>SQL</span>
            </div>
            <div class="progress-line"><span class="sql"></span></div>
            <div class="bar">
              <div class="info">
                <span>Anglais</span>
              </div>
              <div class="progress-line"><span class="anglais"></span></div>
              <div class="bar">
                <div class="info">
                      <span>Espagnol</span>
                    </div>
                    <div class="progress-line"><span class="espagnol"></span></div>
                    <div class="bar">
                      <div class="info">
                        <span>Allemand</span>
                      </div>
                      <div class="progress-line"><span class="allemand"></span></div>
                    
            
            
            
                  </div>
                </div>
              </div>
             </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="renvoipp">
      <img src="images/up.png" width="20" height="20">
      <a href="#apropos">Page précédente</a>
    </div>
    <div class="renvoips">
      <img src="images/down.png" width="20" height="20">
      <a href="#experiences">Page suivante</a>
    </div>
  </section>

  <section id="experiences">
    <div class="card6">
    <?php include("php/experiences.php"); ?>
    <a href="pdf/CV.BGY.pdf">Cliquez ici pour consulter mon CV</a>
    </div>
    <div class="renvoipp">
      <img src="images/up.png" width="20" height="20">
      <a href="#competences">Page précédente</a>
    </div>
    <div class="renvoips">
      <img src="images/down.png" width="20" height="20">
      <a href="#formation">Page suivante</a>
    </div>
  </section>
  
  <section id="formation">
    <div class="card7">
    <?php include("php/formation.php"); ?>
    <a href="pdf/CV.BGY.pdf">Cliquez ici pour consulter mon CV</a>
    </div>
      <div class="renvoipp">
      <img src="images/up.png" width="20" height="20">
      <a href="#experiences">Page précédente</a>
    </div>
    <div class="renvoips">
      <img src="images/down.png" width="20" height="20">
      <a href="#contact">Page suivante</a>
    </div>
  </section>

  <section id="contact">
    <div class="card8">
    <h2><strong>Contact</strong></h2>
    <p> Vous avez la possibilité de me contacter à l'aide du formulaire ci-dessous : </p>
    
    <form method="POST" action="php/verification.php">
    <p>
    Nom *:</br>
    <input type="text" name="nom" id="nom" placeholder="Votre Nom" />
    </p>

    <p>
    Prénom *:</br>
    <input type="text" name="prenom" id="prenom" placeholder="Votre Prénom" />
    </p>

    <p>
    Email *:</br>
    <input type="email" name="email" id="email" placeholder="Votre Email" />
    </p>

    <p>
    Sujet *:</br>
    <input type="text" name="sujet" id="sujet" placeholder="Quel est votre sujet ?" />
    </p>

    <p>
    Message *:</br>
    <textarea id="message"  name="message" placeholder="Votre Message" /></textarea>
    </p>

    <h3>Recopiez ce chiffre</h3>
    
    <img src="php/captcha.php" /></br>
    <input type="text" name="captcha" style="70px;" /></br>
    <p>
    Tous les champs avec une * sont obligatoires
    </p>

    <p>
      <input type="submit" value="Envoyez" />
    </p>
    </div></form>
    <div class="card9">
    <p><h3><em> RGPD : </em></h3><br>
    Les informations recueillies sur ce formulaire font l’objet d’un traitement informatisé par le propriétaire de ce site (Bénédicte GADY) pour la gestion des prospects et clients.<br>
    Les données ne sont pas transmises à des tiers. Vos informations complétées ci-dessus (Nom et Adresse email) me permettront de vous contacter.<br>
    Concernant vos droits, vous pouvez :<br>
    Vous opposer totalement à certains types de traitements de vos données, demander à modifier certaines de vos données (droit de rectification), demander à effacer l’intégralité de vos <br>
    données (le droit à l’oubli ou à l’effacement), transférer vos données d’un opérateur à un autre (droit à la portabilité des données). <br>
    <br>       
    Si vous souhaitez exercer vos droits, merci de bien vouloir envoyer un mail en cliquant sur <a href="mailto:benedicte.gady@sts-sio-caen.info"><span1>"Me contacter"<span1></a>
    </p>
    </div>
      <div class="renvoipp">
      <img src="images/up.png" width="20" height="20">
      <a href="#formation">Page précédente</a>
      </a> 
    </div>
  </section>



<footer>
  <p><h4>Réseaux sociaux</h4></p>
    <div>
    <a href="https://www.facebook.com/benedicte.gady-facebook" target="_blank">
    <img src="images/facebook.png" width="40" height="40">
    </a>
    <a href="https://fr.linkedin.com/in/b%C3%A9n%C3%A9dicte-gady-25a8a722b" target="_blank">
    <img src="images/linkedin.png" width="40" height="40">
    </a>
    </div>

</footer>
</body>


</html>