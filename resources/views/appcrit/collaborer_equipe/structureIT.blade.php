@extends('layouts.app')

@section('title', 'Comprendre la structure IT')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>Comprendre la diversité, la structure et la dimension de l'informatique dans une organisation</h1>
    </div>
</div>
<div class="container">
    <h2> Présentation de stage  </h2>
    <h3 style="margin-top: 50px; margin-bottom: 50px;">J’ai démontré ma maîtrise de cet apprentissage critique en analysant et en présentant la diversité, la structure et la dimension du système informatique au sein de Cerballiance Martinique, en mettant en évidence l’organisation hiérarchique, 
        les interactions entre les différents services et le rôle central du département informatique dans le support technique des laboratoires, comme détaillé dans ma présentation de stage et illustré par la réalisation d’une application adaptée aux besoins spécifiques de l’entreprise.</h3>
</div>
<div class="container">
    <div class="comp-grid">
        <div class="comp-card">
            <div class="comp-image">
                <div class="pdf-preview" onclick="openPdfModal()" style="cursor: pointer;">
                    <img src="https://res.cloudinary.com/dgvchkuk9/image/upload/v1750811975/presentation_ppp_zr4mju.png" width="100%" height="400px" style="object-fit: cover; border: none; pointer-events: none;">
                    <div class="pdf-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s;">
                        <span style="background: rgba(0,0,0,0.8); color: white; padding: 10px 20px; border-radius: 5px;">Cliquez pour agrandir</span>
                    </div>
                </div>
            </div>
            <div class="comp-content">
                <h3>Présentation de stage</h3>
                <p>Aperçu de la présentation de stage réalisée en PPP</p>
            </div>
        </div>
    </div>
</div>

<!-- PDF Modal -->
<div id="pdfModal" class="modal" style="display: none; position: fixed; z-index: 1000; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.8);">
    <div class="modal-content" style="background-color: #fefefe; margin: 2% auto; padding: 20px; border: none; width: 90%; height: 90%; border-radius: 10px; position: relative;">
        <span class="close" onclick="closePdfModal()" style="color: #aaa; float: right; font-size: 28px; font-weight: bold; cursor: pointer; position: absolute; right: 20px; top: 10px; z-index: 1001;">&times;</span>
        <div style="height: 100%; margin-top: 20px;">
            <iframe src="/Présentation_Stage_PPP.pdf" width="100%" height="100%" style="border: none;"></iframe>
        </div>
    </div>
</div>
@endsection 