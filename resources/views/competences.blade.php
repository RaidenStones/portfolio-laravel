@extends('layouts.app')

@section('title', 'Mes Compétences')

@section('content')
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
    <!-- BUT 1 -->
    <div class="competencies-section">
        <h2>Compétences du Programme BUT (Niveau 1)</h2>
        <div class="competencies-grid">
            <div class="competency-card">
                <h3>Réaliser un développement d'application</h3>
                <ul>
                    <li><a href="{{ route('conception_simples') }}" class="nav-link">Elaborer des conceptions simples</a></li>
                    <li><a href="{{ route('essais') }}" class="nav-link">Faire de essais et évaluer leurs résultats</a></li>
                    <li><a href="{{ route('interface') }}" class="nav-link">Développer des interfaces utilisateurs</a></li>
                </ul>
            </div>

            <div class="competency-card">
                <h3>Optimiser des applications</h3>
                <ul>
                    <li><a href="{{ route('analyser') }}" class="nav-link">Analyser un problème avec méthode</a></li>
                    <li><a href="{{ route('comparer') }}" class="nav-link">Comparer des algorithmes pour des problèmes classiques</a></li>
                    <li><a href="{{ route('outils_math') }}" class="nav-link">Formaliser et mettre en œuvre des outils mathématiques pour l’informatique </a></li>
                </ul>
            </div>

            <div class="competency-card">
                <h3>Administrer des systèmes informatiques communicants complexes</h3>
                <ul>
                    <li><a href="{{ route('hardware') }}" class="nav-link">identifier les différents composants d’un système numérique </a></li>
                    <li><a href="{{ route('multitache') }}" class="nav-link">utiliser les fonctionnalités de base d’un système MulTITÂCHES </a></li>
                    <li><a href="{{ route('configurer') }}" class="nav-link">Installer et configurer un système d’exploitation</a></li>
                    <li><a href="{{ route('poste') }}" class="nav-link">Configurer un poste de travail dans un réseau d’entreprise </a></li>
                </ul>
            </div>

            <div class="competency-card">
                <h3>Gérer des données de l'information</h3>
                <ul>
                    <li><a href="{{ route('interroger') }}" class="nav-link">mettre a jour et interroger une base de données</a></li>
                    <li><a href="{{ route('visualiser') }}" class="nav-link">Visualiser des données</a></li>
                    <li><a href="{{ route('concevoir') }}" class="nav-link">Concevoir une Base de données à partir d’un Cahier des charges </a></li>
                </ul>
            </div>

            <div class="competency-card">
                <h3>Conduire un projet</h3>
                <ul>
                    <li><a href="{{ route('apprehender') }}" class="nav-link">appréhender les besoins du client et de l’utilisateur</a></li>
                    <li><a href="{{ route('gestion') }}" class="nav-link">Mettre en place les outils de gestion de projet</a></li>
                    <li><a href="{{ route('acteurs') }}" class="nav-link">Identifier les acteurs et les différentes Phases d’un cycle de Développement </a></li>
                </ul>
            </div>

            <div class="competency-card">
                <h3>Collaborer au sein d'une équipe informatique</h3>
                <ul>
                    <li><a href="{{ route('ecosysteme') }}" class="nav-link">appréhender l’écosystème numérique</a></li>
                    <li><a href="{{ route('aptitudes') }}" class="nav-link">Découvrir les aptitudes requises selon les différents secteurs informatiques </a></li>
                    <li><a href="{{ route('statuts') }}" class="nav-link">identifier les statuts les fonctions et les roles de chaque membre d’une équipe pluridisciplinaire </a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="competencies-section">
        <h2>Compétences du Programme BUT (Niveau 2)</h2>
        <div class="competencies-grid">
            <div class="competency-card">
                <h3>Réaliser un développement d'application</h3>
                <ul>
                    <li><a href="{{ route('specifications') }}" class="nav-link">Élaborer et implémenter les spécifications fonctionnelles et non fonctionnelles à partir des exigences</a></li>
                    <li><a href="{{ route('accessibilite') }}" class="nav-link">Appliquer des principes d'accessibilité et d'ergonomie</a></li>
                    <li><a href="{{ route('conception') }}" class="nav-link">Adopter de bonnes pratiques de conception et de programmation</a></li>
                    <li><a href="{{ route('test') }}" class="nav-link">Vérifier et valider la qualité par les tests</a></li>
                </ul>
            </div>

            <div class="competency-card">
                <h3>Optimiser des applications</h3>
                <ul>
                    <li><a href="{{ route('structure') }}" class="nav-link">Choisir des structures de données adaptées</a></li>
                    <li><a href="{{ route('algorithmes') }}" class="nav-link">Utiliser des techniques algorithmiques avancées</a></li>
                    <li><a href="{{ route('techniques') }}" class="nav-link">Comprendre les enjeux de sécurisation</a></li>
                    <li><a href="{{ route('impact') }}" class="nav-link">Évaluer l'impact environnemental des solutions</a></li>
                </ul>
            </div>

            <div class="competency-card">
                <h3>Administrer des systèmes informatiques communicants complexes</h3>
                <ul>
                    <li><a href="{{ route('conception_app') }}" class="nav-link">Concevoir des applications communicantes</a></li>
                    <li><a href="{{ route('virtualiser') }}" class="nav-link">Utiliser des serveurs virtualisés</a></li>
                    <li><a href="{{ route('securiser') }}" class="nav-link">Sécuriser les services et données</a></li>
                </ul>
            </div>

            <div class="competency-card">
                <h3>Gérer des données de l'information</h3>
                <ul>
                    <li><a href="{{ route('assurer') }}" class="nav-link">Assurer la qualité des données</a></li>
                    <li><a href="{{ route('optimiser') }}" class="nav-link">Optimiser une base de données</a></li>
                    <li><a href="{{ route('organiser') }}" class="nav-link">Organiser la restitution de données</a></li>
                    <li><a href="{{ route('manipuler') }}" class="nav-link">Manipuler des données hétérogènes</a></li>
                </ul>
            </div>

            <div class="competency-card">
                <h3>Conduire un projet</h3>
                <ul>
                    <li><a href="{{ route('processus') }}" class="nav-link">Identifier les processus d'amélioration</a></li>
                    <li><a href="{{ route('formaliser') }}" class="nav-link">Formaliser les besoins client</a></li>
                    <li><a href="{{ route('faisabilite') }}" class="nav-link">Identifier les critères de faisabilité</a></li>
                    <li><a href="{{ route('suivi') }}" class="nav-link">Mettre en oeuvre une démarche de suivi</a></li>
                </ul>
            </div>

            <div class="competency-card">
                <h3>Collaborer au sein d'une équipe informatique</h3>
                <ul>
                    <li><a href="{{ route('structureIT') }}" class="nav-link">Comprendre la structure IT</a></li>
                    <li><a href="{{ route('demarche') }}" class="nav-link">Appliquer une démarche pour intégrer une équipe informatique au sein d'une organisation</a></li>
                    <li><a href="{{ route('integration') }}" class="nav-link">Intégrer une équipe</a></li>
                    <li><a href="{{ route('activite') }}" class="nav-link">Rendre compte de son activité</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection