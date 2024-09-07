<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Gamer Café</title>
    <!-- Insertion de Bootstrap CSS pour le style de la page -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icônes Bootstrap pour une meilleure présentation visuelle -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <!-- Lien vers le fichier CSS personnalisé pour des styles additionnels -->
    <link rel="stylesheet" href="styles.css">
    <!-- Inclusion du fichier JavaScript pour les interactions -->
    <script src="script.js"></script>
	 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-title {
            color: #343a40;
            margin-bottom: 20px;
        }

        .submit-btn {
            background-color: #ffa500;
            border: none;
            color: white;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #e59400;
        }
    </style>
	
	<style>
        body { font-family: Arial, sans-serif; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .error { color: red; font-size: 18px; font-weight: bold; margin-bottom: 20px; }
        .error img { width: 50px; vertical-align: middle; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input, textarea { width: 100%; padding: 8px; box-sizing: border-box; }
        button { padding: 10px 15px; background-color: #ffa500; border: none; color: white; font-size: 16px; cursor: pointer; }
        button:hover { background-color: #e68a00; }
    </style>
	
	
     <!-- Inclusion du fichier PHP pour les messages d'erreur -->
    <?php include 'error.php'; ?>
</head>

<body>
 
    <!-- Header avec logo centré, bouton menu à gauche et boutons connexion/inscription -->
    <header class="d-flex justify-content-between align-items-center p-3 bg-dark text-white fixed-top">
        <!-- Bouton de menu à gauche -->
        <div class="menu-button">
            <button class="btn btn-warning dropdown-toggle" type="button" id="menuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Menu
            </button>
            <div class="dropdown-menu bg-warning" aria-labelledby="menuButton">
                <!-- Liens de menu pour accéder aux différentes sections du site -->
                <a class="dropdown-item text-dark" href="#">Devis Site Web</a>
                <a class="dropdown-item text-dark" href="tarif.html">Tarif pour la création du site web</a>
                <a class="dropdown-item text-dark" href="#">Projet Jeux Vidéo</a>
                <a class="dropdown-item text-dark" href="#">Boutique</a>
                <a class="dropdown-item text-dark" href="index1.4.html">Acceuil</a>
            </div>
        </div>
        <!-- Logo centré -->
        <div class="header-logo">
            <img src="images/01.png" alt="Logo" class="img-fluid">
        </div>
        <!-- Boutons Connexion et Inscription -->
        <div class="login d-flex">
            <button class="btn btn-warning">Connexion</button>
            <a href="#" class="btn btn-warning ml-2">Inscription</a>
        </div>
    </header>

   <main>
    <body>
    <div class="container form-container">
        <h2 class="form-title">Demande de Devis pour Site Web</h2>
        <form action="envoyer_devis.php" method="POST" enctype="multipart/form-data">
            <!-- Informations de Contact -->
            <div class="form-group">
                <label for="name">Nom :</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Votre nom" required>
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Votre adresse email"
                    required>
            </div>
            <div class="form-group">
                <label for="phone">Téléphone :</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Votre numéro de téléphone"
                    required>
            </div>

            <!-- Type de Site Web -->
            <div class="form-group">
                <label for="siteType">Type de Site Web :</label>
                <select class="form-control" id="siteType" name="siteType" required>
                    <option value="">Sélectionnez un type de site</option>
                    <option value="vitrine">Site Vitrine</option>
                    <option value="ecommerce">Site E-commerce</option>
                    <option value="surmesure">Site sur Mesure</option>
                </select>
            </div>

            <!-- Fonctionnalités souhaitées -->
            <div class="form-group">
                <label>Fonctionnalités Souhaitées :</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="contactForm" name="features[]"
                        value="formulaire-contact">
                    <label class="form-check-label" for="contactForm">Formulaire de Contact</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="blog" name="features[]" value="blog">
                    <label class="form-check-label" for="blog">Blog</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="paiement" name="features[]"
                        value="paiement-securise">
                    <label class="form-check-label" for="paiement">Paiement Sécurisé</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="newsletter" name="features[]"
                        value="newsletter">
                    <label class="form-check-label" for="newsletter">Intégration de Newsletter</label>
                </div>
            </div>

            <!-- Choix de Couleurs -->
            <div class="form-group">
                <label>Choisissez jusqu'à 3 couleurs pour votre site :</label>
                <input type="color" class="form-control" name="color1" value="#FF5733" required>
                <input type="color" class="form-control" name="color2" value="#33FFBD">
                <input type="color" class="form-control" name="color3" value="#335BFF">
            </div>

            <!-- Téléchargement d'une Image d'Exemple -->
            <div class="form-group">
                <label for="exampleImage">Téléchargez une image exemple ou une inspiration :</label>
                <input type="file" class="form-control-file" id="exampleImage" name="exampleImage">
            </div>  

            <!-- Sujet ou Thématique du Site Web -->
            <div class="form-group">
                <label for="siteTheme">Thématique du Site Web :</label>
                <select class="form-control" id="siteTheme" name="siteTheme" required>
                    <option value="">Sélectionnez une thématique</option>
                    <option value="sport">Sport</option>
                    <option value="cuisine">Cuisine</option>
                    <option value="cinema">Cinéma</option>
                    <option value="vente">Vente</option>
                    <option value="commerce">Commerce</option>
                    <option value="artiste">Artiste</option>
                    <option value="entreprise">Entreprise</option>
                    <option value="portfolio">Portfolio</option>
                    <option value="sante">Santé</option>
                    <option value="education">Éducation</option>
                </select>
            </div>

            <!-- Nombre de Pages Prévu -->
            <div class="form-group">
                <label for="pages">Nombre de Pages Prévues :</label>
                <select class="form-control" id="pages" name="pages" required>
                    <option value="">Sélectionnez le nombre de pages</option>
                    <option value="1-5">1 - 5 pages</option>
                    <option value="5-10">5 - 10 pages</option>
                    <option value="10-20">10 - 20 pages</option>
                    <option value="20+">20 pages et plus</option>
                </select>
            </div>

            <!-- Besoins en SEO -->
            <div class="form-group">
                <label>Avez-vous besoin d'un référencement SEO ?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="seoOui" name="seo" value="oui" required>
                    <label class="form-check-label" for="seoOui">Oui</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="seoNon" name="seo" value="non" required>
                    <label class="form-check-label" for="seoNon">Non</label>
                </div>
            </div>

            <!-- Intégration des Réseaux Sociaux -->
            <div class="form-group">
                <label>Souhaitez-vous intégrer des réseaux sociaux ?</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="facebook" name="social[]" value="facebook">
                    <label class="form-check-label" for="facebook">Facebook</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="instagram" name="social[]" value="instagram">
                    <label class="form-check-label" for="instagram">Instagram</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="linkedin" name="social[]" value="linkedin">
                    <label class="form-check-label" for="linkedin">LinkedIn</label>
                </div>
            </div>

            <!-- Budget Prévisionnel -->
            <div class="form-group">
                <label for="budget">Budget Prévisionnel :</label>
                <select class="form-control" id="budget" name="budget" required>
                    <option value="">Sélectionnez une tranche de budget</option>
                    <option value="moins-1000">Moins de 1000 €</option>
                    <option value="1000-3000">1000 € - 3000 €</option>
                    <option value="3000-5000">3000 € - 5000 €</option>
                    <option value="plus-5000">Plus de 5000 €</option>
                </select>
            </div>

            <!-- Délais de Réalisation -->
            <div class="form-group">
                <label for="delai">Délais de Réalisation Souhaités :</label>
                <select class="form-control" id="delai" name="delai" required>
                    <option value="">Sélectionnez un délai</option>
                    <option value="moins-1-mois">Moins d'un mois</option>
                    <option value="1-3-mois">1 à 3 mois</option>
                    <option value="3-6-mois">3 à 6 mois</option>
                    <option value="plus-6-mois">Plus de 6 mois</option>
                </select>
            </div>

            <!-- Hébergement et Maintenance -->
            <div class="form-group">
                <label>Souhaitez-vous inclure l'hébergement et la maintenance ?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="maintenanceOui" name="maintenance" value="oui"
                        required>
                    <label class="form-check-label" for="maintenanceOui">Oui</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="maintenanceNon" name="maintenance" value="non"
                        required>
                    <label class="form-check-label" for="maintenanceNon">Non</label>
                </div>
            </div>

            <!-- Description Supplémentaire -->
            <div class="form-group">
			    <div class="form-group">
                <label for="description">Description Supplémentaire :</label>
                <textarea class="form-control" id="description" name="description" rows="4" placeholder="Donnez plus de détails sur votre projet..."></textarea>
            </div>

          

             <!-- CAPTCHA -->
                <div class="form-group">
                    <label for="captcha">Veuillez entrer le code CAPTCHA :</label>
                    <input type="text" class="form-control" name="captcha" required>
                    <br>
                    <img src="image.php" onclick="this.src='image.php?' + Math.random();" alt="CAPTCHA" style="cursor:pointer;">
                </div>

                <!-- Bouton de Soumission -->
                <button type="submit" class="submit-btn">Envoyer le Devis</button>
            </form>
        </div>
    </footer>

    <!-- Scripts nécessaires pour le fonctionnement de Bootstrap et jQuery -->
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
