@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>Définir et mettre en oeuvre une démarche de suivi de projet</h1>
    </div>
</div>
<div class="container">
    <h2> Formulaire de déclaration douanière</h2>
    <h3 style="margin-top: 50px; margin-bottom: 50px;">J'ai démontré ma maîtrise de cet apprentissage critique en structurant et documentant rigoureusement l'avancement de mes missions chez Beepway.com à travers la rédaction de rapports journaliers détaillés, 
        permettant un suivi méthodique du développement du formulaire de déclaration douanière depuis la conception des maquettes jusqu'à la résolution des problématiques techniques complexes.</h3>
</div>
<div class="container">
    <div class="comp-grid">
        <div class="comp-card">
            <div class="comp-image">
                <div class="pdf-preview" onclick="openPdfModal()" style="cursor: pointer;">
                    <img src="https://res.cloudinary.com/dgvchkuk9/image/upload/v1750768828/Section___Logo_2_wbfxfa.png" width="100%" height="400px" style="object-fit: cover; border: none; pointer-events: none;">
                    <div class="pdf-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s;">
                        <span style="background: rgba(0,0,0,0.8); color: white; padding: 10px 20px; border-radius: 5px;">Cliquez pour agrandir</span>
                    </div>
                </div>
            </div>
            <div class="comp-content">
                <h3>Rapports journaliers</h3>
                <p>Aperçu des rapports journaliers</p>
            </div>
        </div>
    </div>
</div>

<!-- PDF Modal -->
<div id="pdfModal" class="modal" style="display: none; position: fixed; z-index: 1000; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.8);">
    <div class="modal-content" style="background-color: #fefefe; margin: 2% auto; padding: 20px; border: none; width: 90%; height: 90%; border-radius: 10px; position: relative;">
        <span class="close" onclick="closePdfModal()" style="color: #aaa; float: right; font-size: 28px; font-weight: bold; cursor: pointer; position: absolute; right: 20px; top: 10px; z-index: 1001;">&times;</span>
        <div style="height: 100%; margin-top: 20px;">
            <iframe src="/Rapports_journaliers_Stage_Beepway.pdf" width="100%" height="100%" style="border: none;"></iframe>
        </div>
    </div>
</div>
@endsection 