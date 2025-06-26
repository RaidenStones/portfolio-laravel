@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>Formaliser les besoins du client et de l'utilisateur</h1>
    </div>
</div>
<div class="container">
    <h2> Projet Click&Rent Site de location d'appareils électroniques</h2>
    <h3 style="margin-top: 50px; margin-bottom: 50px;">J'ai démontré ma maîtrise de cet apprentissage critique en formalisant de manière structurée les besoins fonctionnels et techniques du projet Click&Rent, une plateforme de location d'appareils électroniques, à travers la création d'un cahier des charges complet incluant l'analyse des personas utilisateurs, l'architecture technique et les spécifications détaillées des fonctionnalités.</h3>
</div>
<div class="container">
    <div class="comp-grid">
        <div class="comp-card">
            <div class="comp-image">
                <div class="pdf-preview" onclick="openPdfModal()" style="cursor: pointer;">
                    <img src="https://res.cloudinary.com/dgvchkuk9/image/upload/v1750732670/Section___Logo_1_p64ynk.png" width="100%" height="400px" style="object-fit: cover; border: none; pointer-events: none;">
                    <div class="pdf-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s;">
                        <span style="background: rgba(0,0,0,0.8); color: white; padding: 10px 20px; border-radius: 5px;">Cliquez pour agrandir</span>
                    </div>
                </div>
            </div>
            <div class="comp-content">
                <h3>Cahier des charges du projet Click&Rent</h3>
                <p>Aperçu du cahier des charges du projet Click&Rent</p>
            </div>
        </div>
    </div>
</div>

<!-- PDF Modal -->
<div id="pdfModal" class="modal" style="display: none; position: fixed; z-index: 1000; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.8);">
    <div class="modal-content" style="background-color: #fefefe; margin: 2% auto; padding: 20px; border: none; width: 90%; height: 90%; border-radius: 10px; position: relative;">
        <span class="close" onclick="closePdfModal()" style="color: #aaa; float: right; font-size: 28px; font-weight: bold; cursor: pointer; position: absolute; right: 20px; top: 10px; z-index: 1001;">&times;</span>
        <div style="height: 100%; margin-top: 20px;">
            <iframe src="/Cahier_des_charges_Click&Rent.pdf" width="100%" height="100%" style="border: none;"></iframe>
        </div>
    </div>
</div>
@endsection 