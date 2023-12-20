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
    <?php include("php/apropos.php"); ?>
      <div class="card2">
        <div class="image">
        <img src="images/aPropos.jpg">
        </div>
      </div>
  </section>

  <section id="competences">
    <?php include("php/competences.php"); ?>
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
  </section>

  <section id="experiences">
    <?php include("php/experiences.php"); ?>
    <a href="pdf/CV.BGY.pdf">Cliquez ici pour consulter mon CV</a>
  </section>
  
  <section id="formation">
    <?php include("php/formation.php"); ?>
    <a href="pdf/CV.BGY.pdf">Cliquez ici pour consulter mon CV</a>
  </section>

  <section id="contact">
    <h2><strong>Contact</strong></h2>
    <p> Vous avez la possibilité de me contacter à l'aide du formulaire ci-dessous : </p>
    
    <form method="POST" action="verification.php">
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
    <p><h3><em> RGPD : </em></h3><br>
    Les informations recueillies sur ce formulaire font l’objet d’un traitement informatisé par le propriétaire de ce site (Bénédicte GADY) pour la gestion des prospects et clients.<br>
    Les données ne sont pas transmises à des tiers. Vos informations complétées ci-dessus (Nom et Adresse email) nous permettront de vous contacter.<br>
    Concernant vos droits, vous pouvez :<br>
    Vous opposer totalement à certains types de traitement de vos données,demander à modifier certaines de vos données (droit de rectification), demander à effacer l’intégralité de vos <br>
    données (le droit à l’oubli ou à l’effacement), transférer vos données d’un opérateur à un autre (droit à la portabilité des données). <br>
    <br>       
    Si vous souhaitez exercer vos droits, merci de bien vouloir nous envoyer un mail à l’adresse <span> benedicte.gady@sts-sio-caen.info <span>
    </p>
    </form>
  </section>



<footer>
  <p><h4>Réseaux sociaux</h4></p>
  <div class=logo>
    <a href="https://www.facebook.com/benedicte.gady-facebook" target="_blank">
    <img src="images/facebook.png" width="50" height="50">
    </a>
    <a href="https://fr.linkedin.com/in/b%C3%A9n%C3%A9dicte-gady-25a8a722b" target="_blank">
    <img src="images/linkedin.png" width="50" height="50">
    </a>
  </div>

</footer>
</body>


</html>