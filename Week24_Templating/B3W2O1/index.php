<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php include 'menu.php'?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <div class="container">
        <a name="aboutme"></a>
        <div class="w3-content w3-container w3-padding-64" id="about">
            <h1>About me</h1>
            <hr>
            <p>We have created a fictional "personal" website/blog, and our fictional character is a hobby photographer.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                cupidatat non proident, sunt in culpa
                qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat.</p>
            <div class="w3-row">
                <div class="w3-col m6 w3-center w3-padding-large">
                    <p><b><i class="fa fa-user w3-margin-right"></i>Olaf Schouten</b></p><br>
                    <img src="img1.png" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me"
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
                <img class="img-fluid mb-3"
                    src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg"
                    alt="Card image cap">

                <img class="img-fluid mb-3" src="https://mdbootstrap.com/img/Photos/Vertical/mountain1.jpg"
                    alt="Card image cap">

                <img class="img-fluid mb-3" src="https://mdbootstrap.com/img/Photos/Vertical/mountain2.jpg"
                    alt="Card image cap">

                <img class="img-fluid mb-3"
                    src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
                    alt="Card image cap">

                <img class="img-fluid mb-3"
                    src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                    alt="Card image cap">

                <img class="img-fluid mb-3" src="https://mdbootstrap.com/img/Photos/Vertical/mountain3.jpg"
                    alt="Card image cap">
            </div>
        </div>


        <a name="contact"></a>
        <footer class="page-footer font-small blue pt-4">
            <div class="container-fluid text-center text-md-left">
                <div class="col-md-4 mt-5 bg-light rounded">
                    <h1 class="text-center font-weight-bold text-primary">Contact Us</h1>
                    <hr class="bg-light">
                    <h5 class="text-center text-success"></h5>
                    <form action="" method="post" id="form-box" class="p-2">
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="email" name="email" class="form-control" placeholder="Enter your email"
                                required>
                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-at"></i></span>
                            </div>
                            <input type="text" name="subject" class="form-control" placeholder="Enter subject" required>
                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-comment-alt"></i></span>
                            </div>
                            <textarea name="msg" id="msg" class="form-control" placeholder="Write your message"
                                cols="30" rows="4" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="btn btn-primary btn-block"
                                value="Send">
                        </div>
                    </form>
                </div>
            </div>
        </footer>
    </div>

    <?php include 'footer.php'?>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</html>