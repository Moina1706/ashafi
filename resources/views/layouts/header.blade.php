<nav class="navbar navbar-expand-lg justify-content-between navbar-light bg-light"
    style="background-color: #5C3E3E !important">
    <div class="container-fluid">
        <!-- <a class="navbar-brand  text-white" href="#">Imam Shafi</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="#">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('liste') }}">Liste Apprenant</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled text-white">Disabled</a>
                </li>
            </ul>
            <span class="navbar-text">
                Navbar text with an inline element
            </span>
        </div>

    -->
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
                        style="text-decoration:none;" href="#">Nous joindre</a></button>
            </form>
        </div>
    </div>

</nav>
