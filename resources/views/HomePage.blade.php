<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rhonny LOUISY-LOUIS - Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/vnd.icon" href="https://res.cloudinary.com/dgvchkuk9/image/upload/v1750375975/favicon_w3kmjc.ico">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <h3>Rhonny L-L</h3>
            </div>
            <div class="nav-menu" id="nav-menu">
                <a href="#" class="nav-link" data-page="home">Accueil</a>
                <a href="#" class="nav-link" data-page="cv">CV</a>
                <a href="#" class="nav-link" data-page="competences">Compétences</a>
                <a href="#" class="nav-link" data-page="passions">Mes Passions</a>
                <a href="#" class="nav-link" data-page="realisations">Mes réalisations</a>
            </div>
            <div class="nav-toggle" id="nav-toggle">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"> </span>
            </div>
        </div>
    </nav>

    <!-- HomePage -->
    <div class="page active" id="home-page">
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <div class="hero-text">
                        <h1 class="hero-title">Rhonny LOUISY-LOUIS</h1>
                        <h2 class="hero-subtitle">Étudiant en Informatique - BUT</h2>
                        <p class="hero-description">
                            Passionné par le développement informatique et les nouvelles technologies, 
                            je poursuis actuellement un Bachelor Universitaire de Technologie en Informatique 
                            à l'IUT de Martinique. Créatif et curieux, j'aime explorer les possibilités 
                            infinies du code et créer des solutions innovantes.
                        </p>
                        <div class="hero-buttons">
                            <button class="btn btn--primary" data-page="cv">Découvrir mon CV</button>
                            <button class="btn btn--outline" data-page="passions">Mes Passions</button>
                        </div>
                    </div>
                    <div class="hero-profile">
                        <div class="profile-circle">
                            <div class="profile-initial">R</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-preview">
            <div class="container">
                <div class="about-grid">
                    <div class="about-card" data-page="cv">
                        <h3>Mon Parcours</h3>
                        <p>Découvrez mon parcours académique et professionnel</p>
                    </div>
                    <div class="about-card" data-page="passions">
                        <h3>Mes Passions</h3>
                        <p>Explorez mes centres d'intérêts et loisirs</p>
                    </div>
                    <div class="about-card" data-page="competences">
                        <h3>Compétences</h3>
                        <p>Consultez mes compétences techniques</p>
                    </div>
                    <div class="about-card" data-page="réalisations">
                        <h3>Mes réalisations</h3>
                        <p>Découvrez mes réalisations</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- CV Page -->
    <div class="page" id="cv-page">
        <div class="container">
            <div class="page-header">
                <h1>Curriculum Vitae</h1>
                <p>Mon parcours académique et professionnel</p>
            </div>

            <div class="cv-grid">
                <div class="cv-sidebar">
                    <div class="card">
                        <div class="card__body">
                            <h3>Informations Personnelles</h3>
                            <div class="info-item">
                                <strong>Nom :</strong> Rhonny LOUISY-LOUIS
                            </div>
                            <div class="info-item">
                                <strong>Né le :</strong> 14/07/2003
                            </div>
                            <div class="info-item">
                                <strong>Adresse :</strong> 74 rue Joinville saint prix, Rivière-Salée
                            </div>
                            <div class="info-item">
                                <strong>Téléphone :</strong> 0696 02 77 88
                            </div>
                            <div class="info-item">
                                <strong>Email :</strong> rhonnylouisylouis56@gmail.com
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card__body">
                            <h3>Langues</h3>
                            <div class="language-item">
                                <span>Français</span>
                                <span class="language-level">Natif</span>
                            </div>
                            <div class="language-item">
                                <span>Anglais</span>
                                <span class="language-level">B1</span>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card__body">
                            <h3>Télécharger mon CV</h3>
                            <p style="margin-bottom: 15px;">Consultez mon CV complet au format PDF</p>
                            <a href="CV_Louisy_Louis_Rhonny.pdf" download class="btn btn--primary" style="width: 100%; text-align: center; display: inline-block;">
                                📄 Télécharger le CV
                            </a>
                        </div>
                    </div>
                </div>
                

                <div class="cv-main">
                    <div class="timeline-section">
                        <h2>Formation</h2>
                        <div class="timeline">
                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <div class="timeline-content">
                                    <div class="timeline-date">2023 - 2026</div>
                                    <h3>Bachelor Universitaire de Technologie Informatique</h3>
                                    <p>IUT Martinique</p>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <div class="timeline-content">
                                    <div class="timeline-date">2021 - 2023</div>
                                    <h3>Licence Sciences de la Vie & de la Terre</h3>
                                    <p>UFR STE Martinique</p>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <div class="timeline-content">
                                    <div class="timeline-date">2019 - 2021</div>
                                    <h3>Baccalauréat général et technologie</h3>
                                    <p>Lycée Polyvalent Joseph Zobel</p>
                                    <p><small>Spécialités : Sciences de la Vie & de la Terre & Physique-Chimie</small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-section">
                        <h2>Expérience Professionnelle</h2>
                        <div class="timeline">
                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <div class="timeline-content">
                                    <div class="timeline-date">2023 - 2024</div>
                                    <h3>Assistant en communication</h3>
                                    <p>Mairie de Rivière-Salée</p>
                                    <ul>
                                        <li>Communication</li>
                                        <li>Accueil clientèle</li>
                                        <li>Assistance logistique</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <div class="timeline-content">
                                    <div class="timeline-date">2023 - 2024</div>
                                    <h3>Hôte de caisse</h3>
                                    <p>Carrefour</p>
                                    <ul>
                                        <li>Accueil clientèle</li>
                                        <li>Assistance logistique</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <div class="timeline-content">
                                    <div class="timeline-date">2022 - 2023</div>
                                    <h3>Employé Polyvalent en Intérim</h3>
                                    <p>Diverses entreprises</p>
                                    <ul>
                                        <li>Rayonnage en grandes surface</li>
                                        <li>Déchargement de conteneur</li>
                                        <li>Renfort en grandes surfaces</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mes Passions Page -->
    <div class="page" id="passions-page">
        <div class="container">
            <div class="page-header">
                <h1>Mes Passions</h1>
                <p>Découvrez ce qui m'inspire et me motive au quotidien</p>
            </div>

            <div class="passions-grid">
                <div class="passion-card">
                    <div class="passion-image">
                        <img src="https://pplx-res.cloudinary.com/image/upload/v1749771436/pplx_project_search_images/42323edcb17dd8ce56b317fc1e706f3717c583c0.jpg" alt="The Legend of Zelda">
                    </div>
                    <div class="passion-content">
                        <h3>Jeux Vidéo</h3>
                        <p class="passion-items">The Legend of Zelda • Hollow Knight</p>
                        <p>Passionné par les jeux d'aventure et d'exploration, notamment les univers riches de Nintendo et les metroidvania indépendants.</p>
                    </div>
                </div>

                <div class="passion-card">
                    <div class="passion-image">
                        <img src="https://res.cloudinary.com/dgvchkuk9/image/upload/v1750079439/photo-1515879218367-8466d910aaa4_nrjwnr.jpg" alt="code">
                    </div>
                    <div class="passion-content">
                        <h3>Développement</h3>
                        <p class="passion-items">Développement de jeux vidéo • Développement web • Développement mobile</p>
                        <p>Passion pour la programmation et les nouvelles technologies, toujours curieux d'apprendre de nouveaux langages et frameworks.</p>
                    </div>
                </div>

                <div class="passion-card">
                    <div class="passion-image">
                        <img src="https://pplx-res.cloudinary.com/image/upload/v1749771436/pplx_project_search_images/f754e4470ac6c8bac6a829328fc1721113dccb50.jpg" alt="Arcane">
                    </div>
                    <div class="passion-content">
                        <h3>Séries d'Animation</h3>
                        <p class="passion-items">Arcane • Wakfu</p>
                        <p>Admirateur de l'art de l'animation, particulièrement attiré par les productions de haute qualité visuelle et narrative.</p>
                    </div>
                </div>

                <div class="passion-card">
                    <div class="passion-image">
                        <img src="https://res.cloudinary.com/dgvchkuk9/image/upload/v1750081226/chainsaw-man-crop_yr2sn3.jpg" alt="chainsaw man">
                    </div>
                    <div class="passion-content">
                        <h3>Manga/Anime</h3>
                        <p>Passionné par la culture japonaise et ses formes d'expression artistique uniques.</p>
                    </div>
                </div>

                <div class="passion-card">
                    <div class="passion-image">
                        <img src="https://res.cloudinary.com/dgvchkuk9/image/upload/v1750081664/guitare-crop_oom9lz.jpg" alt="guitare">
                    </div>
                    <div class="passion-content">
                        <h3>Musique</h3>
                        <p class="passion-items">Guitare</p>
                        <p>Pratique de la guitare pour exprimer ma créativité musicale.</p>
                    </div>
                </div>

                <div class="passion-card">
                    <div class="passion-image">
                        <img src="https://res.cloudinary.com/dgvchkuk9/image/upload/v1750080623/pink-hairs-crop_1_xg1tyu.jpg" alt="pink hairs">
                    </div>
                    <div class="passion-content">
                        <h3>Lecture/Écriture</h3>
                        <p class="passion-items">Roman étranger • Romans</p>
                        <p>Lecteur assidu de littérature étrangère et écrivain amateur de romans.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Compétences Page -->
    <div class="page" id="competences-page">
        <div class="container">
            <div class="page-header">
                <h1>Compétences</h1>
                <p>Mes compétences techniques et savoir-faire</p>
            </div>

            <div class="skills-section">
                <h2>Compétences Techniques Actuelles</h2>
                <div class="skills-grid">
                    <div class="skill-category">
                        <h3>Développement Web</h3>
                        <div class="skill-items">
                            <span class="skill-tag">HTML</span>
                            <span class="skill-tag">CSS</span>
                            <span class="skill-tag">PHP</span>
                            <span class="skill-tag">SQL</span>
                            <span class="skill-tag">Laravel</span>
                        </div>
                    </div>
                    <div class="skill-category">
                        <h3>Développement Informatique</h3>
                        <div class="skill-items">
                            <span class="skill-tag">Python</span>
                            <span class="skill-tag">JavaScript</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="competencies-section">
                <h2>Compétences du Programme BUT (Niveau 2)</h2>
                <div class="competencies-grid">
                    <div class="competency-card">
                        <h3>Réaliser un développement d'application</h3>
                        <ul>
                            <li><a href="#" class="nav-link" data-page="specifications">Élaborer et implémenter les spécifications fonctionnelles</a></li>
                            <li><a href="#" class="nav-link" data-page="accessibilite">Appliquer des principes d'accessibilité et d'ergonomie</a></li>
                            <li><a href="#" class="nav-link" data-page="conception">Adopter de bonnes pratiques de conception</a></li>
                            <li><a href="#" class="nav-link" data-page="tests">Vérifier et valider la qualité par les tests</a></li>
                        </ul>
                    </div>

                    <div class="competency-card">
                        <h3>Optimiser des applications</h3>
                        <ul>
                            <li><a href="#" class="nav-link" data-page="structures">Choisir des structures de données adaptées</a></li>
                            <li><a href="#" class="nav-link" data-page="algorithmes">Sélectionner les algorithmes adéquats</a></li>
                            <li><a href="#" class="nav-link" data-page="techniques">Utiliser des techniques algorithmiques avancées</a></li>
                            <li><a href="#" class="nav-link" data-page="impact">Évaluer l'impact environnemental des solutions</a></li>
                        </ul>
                    </div>

                    <div class="competency-card">
                        <h3>Administrer des systèmes informatiques communicants</h3>
                        <ul>
                            <li>Déployer des services dans une architecture réseau</li>
                            <li>Concevoir des applications communicantes</li>
                            <li>Utiliser des serveurs virtualisés</li>
                            <li>Sécuriser les services et données</li>
                        </ul>
                    </div>

                    <div class="competency-card">
                        <h3>Gérer des données de l'information</h3>
                        <ul>
                            <li>Optimiser une base de données</li>
                            <li>Assurer la confidentialité des données</li>
                            <li>Organiser la restitution de données</li>
                            <li>Manipuler des données hétérogènes</li>
                        </ul>
                    </div>

                    <div class="competency-card">
                        <h3>Conduire un projet</h3>
                        <ul>
                            <li>Identifier les processus d'amélioration</li>
                            <li>Appliquer une démarche de suivi</li>
                            <li>Formaliser les besoins client</li>
                            <li>Définir les critères de faisabilité</li>
                        </ul>
                    </div>

                    <div class="competency-card">
                        <h3>Situer son rôle dans une équipe informatique</h3>
                        <ul>
                            <li>Collaborer efficacement</li>
                            <li>Comprendre la structure IT</li>
                            <li>Intégrer une équipe</li>
                            <li>Rendre compte de son activité</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mes réalisations Page -->
    <div class="page" id="realisations-page">
        <div class="page-header">
                <h1>Mes Réalisations</h1>
                <p>Découvrez ce que j'ai pu réaliser</p>
        </div>
    </div>
    <!-- Pages de compétences -->
    <!-- Specifications Page -->
    <div class="page" id="specifications-page">
        <div class="container">
            <div class="page-header">
                <h1>Élaborer et implémenter les spécifications fonctionnelles</h1>
            </div>
        </div>
        <div class="container">
            <h2>The Legend of Link : A New Zelda Adventure</h2>
            <h3 style="margin-top: 50px; margin-bottom: 50px;">Ce projet traduit la définition de la spécification fonctionnelle par la description détaillée des fonctionnalités attendues du jeu</h3>
        </div>
        <div class="comp-grid">
            <div class="comp-card" style="margin-left: 300px;">
                <div class="comp-image">
                    <video autoplay muted loop >
                        <source src="https://res.cloudinary.com/dgvchkuk9/video/upload/v1750430498/deplacements_b6rnsn.mp4" type="video/mp4" >
                    </video>
                </div>
                <div class="comp-content">
                    <h3>Gestion des déplacements</h3>
                </div>
            </div>
            <div class="comp-card" style="margin-right: 300px;">
                <div class="comp-image">
                    <video autoplay muted loop >
                        <source src="https://res.cloudinary.com/dgvchkuk9/video/upload/v1750431977/attaques_jehvhn.mp4" type="video/mp4" >
                    </video>
                </div>
                <div class="comp-content">
                    <h3>Gestion des attaques</h3>
                </div>
            </div>
            
        </div>
        <div class="comp-grid">
            <div class="comp-card" style="margin-left: 300px; margin-top: 100px;">
                <div class="comp-image">
                    <video autoplay muted loop >
                        <source src="https://res.cloudinary.com/dgvchkuk9/video/upload/v1750444501/invulnerabilite_modif_kafqce.mp4" type="video/mp4" >
                    </video>
                </div>
                <div class="comp-content">
                    <h3>Interaction avec les ennemis</h3>
                </div>
            </div>
            <div class="comp-card" style="margin-right: 300px; margin-top: 100px;">
                <div class="comp-image">
                    <video autoplay muted loop >
                        <source src="https://res.cloudinary.com/dgvchkuk9/video/upload/v1750434769/gestion_sante_vnx6e8.mp4" type="video/mp4" >
                    </video>
                </div>
                <div class="comp-content">
                    <h3>Gestion de la santé</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Accessibilité Page -->
    <div class="page" id="accessibilite-page">
        <div class="container">
            <div class="page-header">
                <h1>Appliquer des principes d'accessibilité et d'ergonomie</h1>
            </div>
        </div>
        <div class="container">
            <h3 style="margin-top: 50px;">L'ergonomie et l'accessibilité sont visibles dans plusieurs choix de conception :</h3>
        </div>
        <div class="comp-grid">
            <div class="comp-card" style="margin-left: 300px; margin-top: 100px;">
                <div class="comp-image">
                    <img src="https://res.cloudinary.com/dgvchkuk9/image/upload/v1750438957/wasd_touches_directions_tih95o.png" alt="wasd">
                </div>
                <div class="comp-content">
                    <h3>Contrôles clavier intuitifs</h3>
                </div>
            </div>
            <div class="comp-card" style="margin-right: 300px; margin-top: 100px;">
                <div class="comp-image">
                    <video autoplay muted loop >
                        <source src="https://res.cloudinary.com/dgvchkuk9/video/upload/v1750434769/gestion_sante_vnx6e8.mp4" type="video/mp4" >
                    </video>
                </div>
                <div class="comp-content">
                    <h3>Affichage clair des points de vie sous forme de cœurs</h3>
                </div>
            </div>
        </div>
        <div class="comp-grid">
            <div class="comp-card" style="margin-left: 300px; margin-top: 100px;">
                <div class="comp-image">
                    <video autoplay muted loop >
                        <source src="https://res.cloudinary.com/dgvchkuk9/video/upload/v1750434769/interaction_ennemis_modif_u5gibn.mp4" type="video/mp4" alt="wasd">
                    </video>
                </div>
                <div class="comp-content">
                    <h3>Feedback visuel lors des dégâts (changement de couleur du sprite, clignotement)</h3>
                </div>
            </div>
            <div class="comp-card" style="margin-right: 300px; margin-top: 100px;">
                <div class="comp-image">
                    <video autoplay muted loop >
                        <source src="https://res.cloudinary.com/dgvchkuk9/video/upload/v1750438957/menu_pause_relam4.mp4" type="video/mp4" alt="wasd">
                    </video>
                </div>
                <div class="comp-content">
                    <h3>Les menus de pause et de mort permettent de reprendre ou d'arrêter la partie de manière fluide</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Conception Page -->
    <div class="page" id="conception-page">
        <div class="container">
            <div class="page-header">
                <h1>Adopter de bonnes pratiques de conception</h1>
            </div>
        </div>
        <div class="container">
            <h3 style="margin-top: 50px;">Ce projet illustre l'adoption de bonnes pratiques de conception à plusieurs niveaux :</h3>
        </div>
        <div class="comp-grid">
            <div class="comp-card" style="margin-left: 300px; margin-top: 100px;">
                <div class="comp-image">
                    <img src="https://res.cloudinary.com/dgvchkuk9/image/upload/v1750444501/modularite_xdshyz.png" alt="modularite">
                </div>
                <div class="comp-content">
                    <h3>Modularité du code : séparation claire des entités du jeu (joueur, ennemis, projectiles etc...)</h3>
                </div>
            </div>
            <div class="comp-card" style="margin-right: 300px; margin-top: 100px;">
                <div class="comp-image">
                    <img src="https://res.cloudinary.com/dgvchkuk9/image/upload/v1750444500/heritage_kauyxp.png" alt="modularite">
                </div>
                <div class="comp-content">
                    <h3>Réutilisation et héritage : utilisation de classes et de l'héritage pour définir différents types d'ennemis, centraliser la gestion des attaques et des comportements,</h3>
                </div>
            </div>
        </div>
        <div class="comp-grid">
            <div class="comp-card" style="margin-left: 300px; margin-top: 100px;">
                <div class="comp-image">
                    <video autoplay muted loop >
                        <source src="https://res.cloudinary.com/dgvchkuk9/video/upload/v1750444501/patrouille_ennemis_t5yqzw.mp4" type="video/mp4" alt="wasd">
                    </video>
                </div>
                <div class="comp-content">
                    <h3>Gestion des états : chaque entité (joueur, ennemis) possède ses propres états (attaque, patrouille, poursuite, invulnérabilité)</h3>
                </div>
            </div>
            <div class="comp-card" style="margin-right: 300px; margin-top: 100px;">
                <div class="comp-image">
                    <img src="https://res.cloudinary.com/dgvchkuk9/image/upload/v1750444939/commentaires4_vzcbjw.png" alt="modularite">
                </div>
                <div class="comp-content">
                    <h3>Réutilisation et héritage : utilisation de classes et de l'héritage pour définir différents types d'ennemis, centraliser la gestion des attaques et des comportements,</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Tests Page -->
    <div class="page" id="tests-page">
        <div class="container">
            <div class="page-header">
                <h1>Vérifier et valider la qualité par les tests</h1>
            </div>
        </div>
        <div class="container">
            <h3 style="margin-top: 50px;">La validation de la qualité du jeu a été assurée par plusieurs types de tests intégrés dans le développement :</h3>
        </div>
        <div class="comp-grid">
            <div class="comp-card" style="margin-left: 300px; margin-top: 100px;">
                <div class="comp-image">
                    <video autoplay muted loop >
                        <source src="https://res.cloudinary.com/dgvchkuk9/video/upload/v1750447904/fonctionnnels_lvw08t.mp4" type="video/mp4" >
                    </video>
                </div>
                <div class="comp-content">
                    <h3>Tests fonctionnels : vérification du bon fonctionnement des principales mécaniques (déplacement, attaque, collision, changement de carte, gestion des points de vie)</h3>
                </div>
            </div>
            <div class="comp-card" style="margin-right: 300px; margin-top: 100px;">
                <div class="comp-image">
                    <video autoplay muted loop >
                        <source src="https://res.cloudinary.com/dgvchkuk9/video/upload/v1750447905/test_interaction_q3du6g.mp4" type="video/mp4" >
                    </video>
                </div>
                <div class="comp-content">
                    <h3>Tests d'interaction : gestion des collisions entre le joueur, les ennemis et les projectiles, avec des retours visuels et sonores immédiats, permettant de détecter et corriger rapidement les bugs liés aux interactions</h3>
                </div>
            </div>
        </div>
        <div class="comp-grid">
            <div class="comp-card" style="margin-left: 300px; margin-top: 100px;">
                <div class="comp-image">
                    <video autoplay muted loop >
                        <source src="https://res.cloudinary.com/dgvchkuk9/video/upload/v1750447904/ergonomie_jxayi9.mp4" type="video/mp4" >
                    </video>
                </div>
                <div class="comp-content">
                    <h3>Tests ergonomie : ajustement de l'interface (affichage des cœurs, menus) et des contrôles en fonction des retours des utilisateurs/testeurs pour garantir une expérience fluide et agréable</h3>
                </div>
            </div>
            <div class="comp-card" style="margin-right: 300px; margin-top: 100px;">
                <div class="comp-image">
                    <img src="https://res.cloudinary.com/dgvchkuk9/image/upload/v1750447904/sauvegardes_ykwmuf.png" alt="sauvegarde">
                </div>
                <div class="comp-content">
                    <h3>Gestion des erreurs et sauvegardes : mise en place de sauvegardes automatiques et de la gestion des transitions entre cartes pour éviter les pertes de progression et garantir la robustesse du jeu</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-info">
                    <h3>Rhonny LOUISY-LOUIS</h3>
                    <p>Étudiant en Informatique - BUT</p>
                </div>
                <div class="footer-contact">
                    <div class="hero-buttons">
                        <button class="btn btn--primary" data-page="cv">Découvrir mon CV</button>
                        <button class="btn btn--outline" data-page="competences">Mes Compétences</button>
                    </div>
                    <button onclick="topFunction()" id="scrollTopBtn" title="Retour en haut" aria-label="Retour en haut">↑</button>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>