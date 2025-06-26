@extends('layouts.app')

@section('title', 'Mes Passions')

@section('content')
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
@endsection