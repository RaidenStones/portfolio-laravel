@extends('layouts.app')

@section('title', 'Rendre compte de son activité')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>Rendre compte de son activité professionnelle</h1>
    </div>
</div>
<div class="container">
    <h2> Restitution de stage </h2>
    <h3 style="margin-top: 50px; margin-bottom: 50px;">J’ai démontré ma maîtrise de cet apprentissage critique en restituant de façon structurée l’avancement de mes missions et les choix techniques effectués lors de mon stage chez Beepway.com, 
        notamment à travers un code commenté proprement et la présentation orale de mes travaux devant l’équipe, illustrant ainsi ma capacité à rendre compte de mon activité professionnelle de manière claire et professionnelle.</h3>
</div>
<div class="container">
    <div class="comp-grid">
        <div class="comp-card">
            <div class="comp-image">
                <img src="https://res.cloudinary.com/dgvchkuk9/image/upload/v1750808051/activite_pro_mjk0t3.png" alt="tasks_beepway" class="clickable-image" onclick="openModal(this.src)">
            </div>
            <div class="comp-content">
                <h3>Compte rendu de stage restitution du code du formulaire et remerciements à l'équipe</h3>
            </div>
        </div>
    </div>
</div>


@endsection 