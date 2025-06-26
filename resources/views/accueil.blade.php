@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
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
                    <a href="{{ route('cv') }}" class="btn btn--primary">Découvrir mon CV</a>
                    <a href="{{ route('passions') }}" class="btn btn--outline">Mes Passions</a>
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
            <div class="about-card">
                <a href="{{ route('cv') }}">
                    <h3>Mon Parcours</h3>
                    <p>Découvrez mon parcours académique et professionnel</p>
                </a>
            </div>
            <div class="about-card">
                <a href="{{ route('passions') }}">
                    <h3>Mes Passions</h3>
                    <p>Explorez mes centres d'intérêts et loisirs</p>
                </a>
            </div>
            <div class="about-card">
                <a href="{{ route('competences') }}">
                    <h3>Compétences</h3>
                    <p>Consultez mes compétences techniques</p>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
