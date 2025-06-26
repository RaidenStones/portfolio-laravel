@extends('layouts.app')

@section('title', 'Mon CV')

@section('content')

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

@endsection
