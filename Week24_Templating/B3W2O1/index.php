<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php include 'menu.php'?>

    <?php include 'carousel.php'?>

    <div class="container">
        <a name="aboutme"></a>
        <div class="w3-content w3-container w3-padding-64" id="about">
            <h1>Over mij</h1>
            <hr>
            <p>Ik ben Olaf Schouten ik ben 20 jaar oud en zit op het da Vinci college in Gorinchem.
                Ik ben nu bezig met een opleiding <a href="#">applicatieontwikkelaar</a>, ik ben goed in het gebruiken
                van html, css en
                bootstrap. Als bij baantje werk ik in de kas waar ik met planten <a href="#">werk</a>.

            </p>
            <div class="w3-row">
                <div class="w3-col m6 w3-center w3-padding-large">
                    <p><b><i class="fa fa-user w3-margin-right"></i>Olaf Schouten</b></p><br>
                    <img src="img/Olaf1.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me"
                        width="500" height="333">
                </div>

                <div class="w3-col m6 w3-hide-small w3-padding-large">
                    <p>Welcome to my website. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                        sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                        laborum consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

            <a name="photos"></a>
            <h1>Photos</h1>
            <hr>
            <div class="gallery" id="gallery">
                <img class="img-fluid mb-3" src="img/game.png" alt="Card image cap">

                <img class="img-fluid mb-3" src="img/lingo.png" alt="Card image cap">

                <img class="img-fluid mb-3" src="img/handy.png" alt="Card image cap">

                <img class="img-fluid mb-3" src="img/menu.png" alt="Card image cap">

                <img class="img-fluid mb-3" src="img/over.png" alt="Card image cap">

                <img class="img-fluid mb-3" src="img/website.png" alt="Card image cap">
            </div>
        </div>

        <a name="contact"></a>
        <footer class="page-footer font-small blue pt-4">
            <div class="container-fluid text-center text-md-left">
                <footer class="page-footer font-small blue pt-4">
                    <div class="container-fluid text-center text-md-left">
                        <div class="row">
                            <div class="col-md-6 mt-md-0 mt-3">
                                <div class="col-md-12 mt-5 bg-light rounded">
                                    <h1 class="text-center font-weight-bold text-primary">Contact Us</h1>
                                    <hr class="bg-light">
                                    <h5 class="text-center text-success"></h5>

                                    <form action="mailto:olafschouten99@gmail.com" method="post" id="form-box"
                                        class="p-2">
                                        <div class="form-group input-group">
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" class="form-control" placeholder="First name"
                                                        required>
                                                </div>
                                                <div class="col">
                                                    <input type="text" class="form-control" placeholder="Last name"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group input-group">
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Enter your email" required>
                                        </div>
                                        <div class="form-group input-group">
                                            <input type="text" name="phone" class="form-control"
                                                placeholder="Phone number">
                                        </div>
                                        <div class="form-group input-group">
                                            <input type="text" name="subject" class="form-control" placeholder="Subject"
                                                required>
                                        </div>
                                        <div class="form-group input-group">
                                            <textarea name="msg" id="msg" class="form-control"
                                                placeholder="Write your message" cols="30" rows="4" required></textarea>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="submit" id="submit"
                                                class="btn btn-primary btn-block" value="Send">
                                        </div>
                                    </form>

                                    <?php include "contact.php" ?>
                                </div>
                            </div>

                            <hr class="clearfix w-100 d-md-none pb-3">
                            <div class="col-md-3 mb-md-0 mb-3" style="margin-top: 45px;">
                                <h5 class="text-uppercase">Opdrachten</h5>
                                <ul class="list-unstyled">
                                    <li>
                                        <a
                                            href="https://github.com/Olafschouten/J1B2_1/tree/master/Week_18/Week%2018%20-%20Responsive">Responsive</a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://github.com/Olafschouten/J1B2_1/tree/master/Week_14-18/B2W19O1a%20-%20Lingo/Lingo">Lingo</a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://github.com/Olafschouten/J1B2_1/tree/master/Week_11-14/Game">Game</a>
                                    </li>

                                    <li>
                                        <a
                                            href="https://github.com/Olafschouten/J1B1_1/tree/master/Week_9/Opdracht">Handy</a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://github.com/Olafschouten/J1B1_1/tree/master/Week_8/Opdracht%20-%20Horica%20app">Horica
                                            app</a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://github.com/Olafschouten/J1B1_1/tree/master/Week_7/Opdracht">Overal</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </footer>
    </div>

    <?php include 'footer.php'?>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</html>