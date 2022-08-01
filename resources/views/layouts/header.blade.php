<nav class="navbar navbar-expand-lg justify-content-between navbar-light bg-light fixed-top mb-5"
    style="background-color: #5C3E3E !important">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#"><img src="/img/logo_imam.png" width="30" height="30"
                    class="d-inline-block align-top" alt=""></a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{ route('accueil') }}">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Notre vocation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Nos activités</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('liste') }}">Liste Apprenant</a>
                </li>

            </ul>
        </div>
        <div>
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-light my-2 my-sm-0"><a class="text-dark" style="text-decoration:none;"
                        href="{{ route('login') }}">connexion</a></button>

                <button class="btn btn-light my-2 my-sm-0" type="submit"><a class="text-dark"
                        style="text-decoration:none;" href="{{ route('renseignement') }}">Nous
                        joindre</a></button>
            </form>
        </div>
    </div>

</nav>
