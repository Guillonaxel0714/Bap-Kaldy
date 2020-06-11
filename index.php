<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style1.css">
    <link rel="stylesheet" href="assets/css/presentation.css">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
    <title>Hello, world!</title>
</head>

<body>

    <section>
        <div class="backgroundc">
            <div class="headerimg">
                <!-- <img class="headerimgg" src="assets/img/photomassage.png"> -->
                <!-- Navigation -->
                <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav"
                    style="background-color: rgba(191, 191, 191, 0.09); padding: 25px; transition: 0.4s;">
                    <div class="container">
                        <div class="collapse navbar-collapse">
                            <ul class="navbar-nav mx-auto"
                                style="align-items: center; width: 100%; display: flex; justify-content: space-around;">
                                <li class="nav-item">
                                    <img id="logoRK" style="height: 70px;max-width: auto !important;"
                                        src="assets/img/LogoRK.png">
                                    <a class="navbar-text"
                                        style="color: white; font-size: 175%; font-weight: 700; margin-left: 1em; font-family: 'Fira Sans', sans-serif; text-decoration: none;"
                                        href="index.php">Régis Kaldy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        style="font-size: 150%;color: white; font-family: 'Fira Sans', sans-serif;"
                                        href="Pages/presentation.php">Qui suis-je ?</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        style="font-size: 150%;color: white; font-family: 'Fira Sans', sans-serif;"
                                        href="Pages/inscription.php">S'inscrire</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        style="font-size: 150%;color: white; font-family: 'Fira Sans', sans-serif;"
                                        href="Pages/connexion.php">Se connecter</a>
                                </li>
                                <li class="nav-item">
                                    <div class="subtext">
                                        <a class="nav-link" style="font-size: 150%;color: white;"
                                            href="pages/panier.php">
                                            <svg class="bi bi-basket2" width="1em" height="1em" viewBox="0 0 16 16"
                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                                style="font-size: 150%;">
                                                <path fill-rule="evenodd"
                                                    d="M1.111 7.186A.5.5 0 0 1 1.5 7h13a.5.5 0 0 1 .489.605l-1.5 7A.5.5 0 0 1 13 15H3a.5.5 0 0 1-.489-.395l-1.5-7a.5.5 0 0 1 .1-.42zM2.118 8l1.286 6h9.192l1.286-6H2.118z" />
                                                <path fill-rule="evenodd"
                                                    d="M11.314 1.036a.5.5 0 0 1 .65.278l2 5a.5.5 0 1 1-.928.372l-2-5a.5.5 0 0 1 .278-.65zm-6.628 0a.5.5 0 0 0-.65.278l-2 5a.5.5 0 1 0 .928.372l2-5a.5.5 0 0 0-.278-.65z" />
                                                <path
                                                    d="M4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zM0 6.5A.5.5 0 0 1 .5 6h15a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1z" />
                                            </svg>
                                            <p style="font-size: initial; font-family: 'Fira Sans', sans-serif;">Panier
                                            </p>
                                        </a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div class="subtext">
                                        <a class="nav-link" style="font-size: 150%;color: white; font-size: 150%;"
                                            href="Pages/profil.php">
                                            <svg class="bi bi-person" width="1em" height="1em" viewBox="0 0 16 16"
                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                                style="font-size: 150%;">
                                                <path fill-rule="evenodd"
                                                    d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                            </svg>
                                            <p style="font-size: initial; font-family: 'Fira Sans', sans-serif;">Mon
                                                Profil</p>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="headertxt">
                    <p style="font-size: 200%">Formation de massage en ligne</p>
                    <div style="flex-direction: row;">
                        <p style="font-size: 150%">avec la méthode</p>
                        <p style="font-size: -webkit-xxx-large;
                font-weight: 700;">BRAM</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div style="display: flex; flex-direction: row; justify-content: center;">
        <img src="assets/img/borderlogo.png" style="margin-top: -3%;">
    </div>
    <section>
        <div class="container" style="display: flex; height: 12em; justify-content: center;
            align-items: flex-end;">
            <div class="textpres" style="display: flex;
                font-size: xx-large;
                font-family: 'Fira Sans', sans-serif;
                color: #175A75;">
                <p>Comment se passe la formation ?</p>
            </div>
        </div>
    </section>

    <section>
        <div>
            <div class="row" style="margin-left: 0px; margin-right: 0px; height: 50em">
                <div class="col"
                    style="display: flex; flex-direction: row; align-items: center; justify-content: center;">
                    <div style="width: 30%; display: flex; justify-content: center;">
                        <img src="assets/img/lignec.png">
                    </div>
                    <div
                        style="display: flex; flex-direction: column; justify-content: space-around; height: 100%; width: 50%;">
                        <div style="display: flex; flex-direction: column;">
                            <p
                                style="font-family: 'Fira Sans', sans-serif; font-weight: 700; color:#227090; font-size: 190%;">
                                Début de la formation</p>
                            <p style="font-family: 'Fira Sans', sans-serif; color:#227090; font-size: 125%;">Accès à 10h
                                de vidéos à voir en illimité </p>
                        </div>

                        <div style="display: flex; flex-direction: column;">
                            <p
                                style="font-family: 'Fira Sans', sans-serif; font-weight: 700; color:#227090;font-size: 190%;">
                                Suivi actif de la formation</p>
                            <p style="font-family: 'Fira Sans', sans-serif; color:#227090; font-size: 125%;">Avec mise
                                en application des connaissance
                                et messagerie instantanée avec Régis Kaldy </p>
                        </div>

                        <div style="display: flex; flex-direction: column;">
                            <p
                                style="font-family: 'Fira Sans', sans-serif; font-weight: 700; color:#227090;font-size: 190%;">
                                Fin de la formation</p>
                            <p style="font-family: 'Fira Sans', sans-serif; color:#227090; font-size: 125%;">Évaluation
                                finale des connaissances avec
                                application aux côtés de Régis Kaldy </p>
                        </div>
                    </div>

                </div>
                <div class="col" style="display: flex; flex-direction: column; justify-content: center;">
                    <div style="display: flex; flex-direction: row; justify-content: center;">
                        <img src="assets/img/illumassage.png">
                    </div>
                </div>
            </div>
    </section>

    <div style="display: flex; flex-direction: row; justify-content: center; margin-bottom: -3%;">
        <img src="assets/img/borderlogo.png"> </div>

    <section style="display: flex; justify-content: center; background-color: #EFEFEF;">

        <div style="display: flex; flex-direction: column; justify-content: center; height: 30em; width: 50%;">
            <p
                style="font-family: 'Fira Sans', sans-serif; font-weight: 700; color:#227090; font-size: 190%; text-align: center; margin-top: 10%">
                Combien de temps dure la formation ?</p>
            <div style="display: flex; flex-direction: row; justify-content: space-around;">
                <p style="font-family: 'Fira Sans', sans-serif; color:#227090; font-size: 125%; padding: 2em;">Lorem
                    ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                    et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                </p>
                <p style="font-family: 'Fira Sans', sans-serif; color:#227090; font-size: 125%; padding: 2em;">Lorem
                    ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                    et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                </p>
            </div>

        </div>
    </section>

    <section>
        <div style="display: flex; flex-direction: row; justify-content: center; height: 30em; width: 100%;">
            <div
                style="display: flex; flex-direction: column; width: 50%; justify-content: center; align-items: center;">
                <div>
                    <p
                        style="font-family: 'Fira Sans', sans-serif; font-weight: 700; color:#227090; font-size: 190%; text-align: center;">
                        Apercu de la formation</p>
                </div>
                <div style="width: 60%;">
                    <p style="font-family: 'Fira Sans', sans-serif; color:#227090; font-size: 125%;">Lorem ipsum dolor
                        sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                        dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                        rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                        ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                        labore et dolore magna aliquyam erat, sed diam</p>
                </div>
                <div><button class="buttonforma">Acheter la formation</button></div>
            </div>
            <div
                style="display: flex; flex-direction: column; width: 50%; justify-content: center; align-items: center;">
                <video width="640" height="360" controls>
                    <source src="movie.mp4" type="video/mp4">

                    Your browser does not support the video tag.
                </video>
            </div>

        </div>


    </section>

    <section>
        <div
            style="display: flex; flex-direction: column; width: 100%; justify-content: center; align-items: center; height: 20em;">
            <a href="Pages/faq.php"><button class="btn-faq">Des questions ?</button></a>
            <p style="padding: 1%; font-family: 'Fira Sans', sans-serif;">Je suis là pour vous répondre</p>
        </div>
    </section>
    <div class="borderlogo">
        <img src="assets/img/borderlogo.png">
    </div>

    <footer>
        <div class="row" style="justify-content: space-around;
      padding-top: 10%;
      margin: 0 auto;">
            <div class="logo col-xs-12 col-sm-12 col-lg-2">
                <img class="logofooter" style="height: 100px;max-width: auto !important;"
                    src="assets/img/LogoRKb.png"></img>
            </div>
            <div class="info-footer col-xs-12 col-sm-12 col-md-4 col-lg-3">
                <h4>Coordonnées</h4>
                <hr>
                <div class="icone">
                    <img src="assets/img/phone.png" alt="logo téléphone">
                    <p class="contact">06 73 82 28 93</p>
                </div>
                <div class="icone">
                    <img src="assets/img/mail.png" alt="logo mail">
                    <p class="contact">Regis.kaldy@gmail.com</p>
                </div>
            </div>

            <div class="info-footer col-xs-12 col-sm-12 col-md-4 col-lg-3">
                <h4>Navigation</h4>
                <hr>
                <p class="menu">Accueil</p>
                <p class="menu">Qui suis-je ?</p>
                <p class="menu">S'inscrire</p>
                <p class="menu">Panier</p>
                <p class="menu">Mon compte</p>
            </div>

            <div class="info-footer col-xs-12 col-sm-12 col-md-4 col-lg-3">
                <h4>Réseaux sociaux</h4>
                <hr>
                <div class="icone">
                    <img src="assets/img/logo-fb.png" alt="logo Facebook">
                    <p class="contact">Régis Kaldy</p>
                </div>
                <div class="icone">
                    <img src="assets/img/logo-insta.png" alt="logo Instagram">
                    <p class="contact">Régis Kaldy</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="assets/js/script.js"></script>
</body>

</html>