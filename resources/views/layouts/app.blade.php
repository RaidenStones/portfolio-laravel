<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Rhonny LOUISY-LOUIS</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/vnd.icon" href="https://res.cloudinary.com/dgvchkuk9/image/upload/v1750375975/favicon_w3kmjc.ico">
</head>
<body>
    <!-- Navigation commune à toutes les pages -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <h3>Rhonny L-L</h3>
            </div>
            <div class="nav-menu" id="nav-menu">
                <a href="{{ route('home') }}" class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}">Accueil</a>
                <a href="{{ route('cv') }}" class="nav-link {{ Request::routeIs('cv') ? 'active' : '' }}">CV</a>
                <a href="{{ route('competences') }}" class="nav-link {{ Request::routeIs('competences') ? 'active' : '' }}">Compétences</a>
                <a href="{{ route('passions') }}" class="nav-link {{ Request::routeIs('passions') ? 'active' : '' }}">Mes Passions</a>
            </div>
            <div class="nav-toggle" id="nav-toggle">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </nav>

    <!-- Contenu de la page -->
    <main class="page active">
        @yield('content')
    </main>
    <!-- Modal pour afficher l'image en grand -->
    <div id="imageModal" class="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <img class="modal-content" id="modalImage">
    </div>

    <!-- Modal pour afficher la vidéo en grand -->
    <div id="videoModal" class="modal">
        <span class="close" onclick="closeVideoModal()">&times;</span>
        <video class="modal-content" id="modalVideo" controls>
            <source id="modalVideoSource" src="" type="video/mp4">
        </video>
    </div>

    <!-- Footer commun -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-info">
                    <h3>Rhonny LOUISY-LOUIS</h3>
                    <p>Étudiant en Informatique - BUT</p>
                </div>
                <div class="footer-contact">
                    <div class="hero-buttons">
                        <a href="{{ route('cv') }}" class="btn btn--primary">Découvrir mon CV</a>
                        <a href="{{ route('competences') }}" class="btn btn--outline">Mes Compétences</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <button onclick="topFunction()" id="scrollTopBtn" title="Retour en haut" aria-label="Retour en haut">↑</button>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
