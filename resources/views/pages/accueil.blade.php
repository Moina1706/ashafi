@extends('layouts.home')
@section('content')
    <div style="background-color: #EFF3C2; width:100%;" class="d-flex flex-row">
        <div class="">{{-- ici les image --}}
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
        </div>
        <div class="">{{-- ici le texte --}}
            <h1> ASSOCIATION IMAM SHAFI</h1>
            <p>Bienvenue,</p>
            <p>Le centre IMAM SHAFI de la Réunion a ouvert ses portes,</p>
            <p>elle a vocation de préserver la culture musulmane de rite shaféite sur</p>
            <p> le plan local et régional à travers la mise en oeuvre d'activités. </p>
            <p>De permettre à chaque fidèle de vivre pleinement sa citoyenneté </p>
            <p>en prenant part à la vie publique. </p>

            <button class="btn btn-dark ">En savoir plus</button>
        </div>
    </div>
    <div class="container  d-flex flex-row"style="background-color: #A8B691;">
        <div class="ps-5 pt-5 ">{{-- ici les image --}}
            <img src="/img/acecr.jpg" style="width: 60%; height:60%;" alt="">
        </div>
        <div style="    width: inherit;" class="me-5 pt-5">{{-- ici le texte --}}
            <h5></h5>
            <h1> Centre IMAM SHAFI</h1>
            <p> S’affirmer comme une référence musulmane de rite shafeite,</p>
            <p>Rayonner en tant que leader en matière d’éducation et de formation,</p>
            <p> S’affirmer comme une association d’utilité sociale en tant qu’interlocuteur avec les acteurs de la
                société,</p>
            <p> Favoriser le dialogue et les échanges</p>
            <p></p>
            <p></p>
            <button class="btn btn-dark ">En savoir plus</button>
        </div>
    </div>
    <div style="background-color: #545C50; "class="pt-5 px-5">
        <h1 class="text-center text-white ">Activité du Centre</h1>
        <div class="d-flex flex-row">
            <div class="px-5 text-white">{{-- ici le texte --}}
                <h1>Mosquée</h1>
                <p>
                    Retrouvez les activités et les horaires de la Mosqué
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                    t
                </p>

                <button class="btn btn-dark ">En savoir plus</button>
            </div>
            <div class="px-5 text-white">{{-- ici le texte --}}
                <h1>Centre educatif</h1>


                <p>
                    Retrouvez les activités et les horaires de la Mosqué
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                    t
                </p>

                <button class="btn btn-dark ">En savoir plus</button>
            </div>
            <div class="px-5 text-white">{{-- ici le texte --}}
                <h1>Centre Sociale</h1>
                <p>
                    Retrouvez les activités et les horaires de la Mosqué
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                    t
                </p>

                <button class="btn btn-dark ">En savoir plus</button>
            </div>
        </div>
    </div>
    <div class="">
        <h1 class="text-center">Actualité</h1>
        <p class="text-center"></p>
        <div class="d-flex flex-row ms-5">
            <div class="mx-5 card" style="width: 26rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                        of the card's content.</p>
                </div>
            </div>
            <div class="mx-5 card" style="width: 26rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                        of the card's content.</p>
                </div>
            </div>
            <div class="mx-5 card" style="width: 26rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                        of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
