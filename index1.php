<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./style.css">
    <script src="https://kit.fontawesome.com/41bf1d2d8c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
   
    <?php include("./navbar.php"); ?>


    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./ca1.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="d-felx align-content-left">
                        <p>WELCOME TO
                            <BR> SAGE ELECTRONICS</p>
                    </h5>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./image 6.png" class="d-block w-100" alt="..." width="1440px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>GADGETS AT THERE BEST</h5>
                    <p></p>
                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 id="aboutus" class="text-center">ABOUT US </h1>
            </div>
            <div class="col-md-6">
                <p>
                    We promise the best quality of gadgets as in the new generation technology has became a part of our daily life<br>these days it is not unusal to listen to music or using electronic getgets and gadgets connects us to the other people , our loved ones and to the magical world where<br> we can do some intresting and magical things and gadgets help yus bring our imagination into in reality and gedgets acts as bridge to our imagination and reality 
                </p>
            </div>
            <div class="col-md-3">
                <img src="data:image/jpeg;base64,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" width="200px" height="250px" style="border-radius: 20px;">
            </div>
            <div class="col-md-3">
                <img src="data:image/jpeg;base64,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" width="200px" height="250px" style="border-radius: 20px;">
            </div>
            
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">OUR SERVICES</h1>
            </div>
        </div>
    </div>
    <div class="img">
        <img src="./image 2.png" alt="">
        <div class="imgt">
            <h3>PC SETUPS <br>& COMPUTER COMPONENTS </h3>
        </div>
        <div class="imgb">
        <a class="btn btn-primary" href="./com.php" role="button">exlore</a>
        </div>
    </div>
    <div class="img1">
        <img src="./image 3.png" alt="">
        <div class="imgt1">
            <h3>SMARTPHONES <br>& SMARTPHONE COMPONENTS </h3>
        </div>
        <div class="imgb1">
        <a class="btn btn-primary" href="./mob.php" role="button">exlore</a>
        </div>
    </div>

    <div class="img3">
        <img src="./image 5.png" alt="">
        <div class="imgt3">
            <h3>CAMERA <br>& COMPONENTS </h3>
        </div>
        <div class="imgb3">
        <a class="btn btn-primary" href="./cam.php" role="button">exlore</a>
        </div>
    </div>

    
    
            
                <div class="container ">
                    <div class="row ">
                        <div class="col-md-12 ">
                            <h1 id="contactus " class="text-center "> contact us </h1>
                        </div>
                    </div>
                    <div class="container ">
                        <div class="d-flex ">
                            <div class="col-md-6 ">
                                <section class="contact-us ">
                                    <div class="d.flex ">
                                        <div class="contact-col ">
                                            <div>
                                                <i class="fa-solid fa-phone "></i>
                                                <span>
                                  <h5>phone</h5>
                                  <p>+91 0123457856</p>
                                </span>
                                            </div>
                                        </div>
                                        <div class="d.flex ">
                                            <div>
                                                <i class="fa-solid fa-at "></i>
                                                <span>
                                  <h5>mail</h5>
                                  <p>SAGEELECTRONICS@GMAIL.COM</p>
                                </span>
                                            </div>
                                        </div>
                                        <div class="d.flex ">
                                            <div>
                                                <i class="fa-brands fa-linkedin "></i>
                                                <span>
                                  <h5>LINKEDIN</h5>
                                  <p>SAGE ELECTRONICS</p>
                                </span>
                                            </div>
                                        </div>
                                        <div class="d.flex ">
                                            <div>
                                                <i class="fa-solid fa-map "></i>
                                                <span>
                                  <h5>LOCATION</h5>
                                  <p>Tower I, SYNERGE, No. 1573, 39th F Cross Rd, <br>
                                    4th T Block East, Jayanagar,<br>
                                     Bengaluru, Karnataka 560041</p>
                                </span>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="d.flex ">
                                <section class="location ">
                                    <div class="container ">
                                        <div class="d-flex ">
                                            <div class="col-md-6 ">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248849.552244889!2d77.49085269570615!3d12.954294598338723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1652878377011!5m2!1sen!2sin "
                                                    width="600 " height="450 " style="border:0; " allowfullscreen=" " loading="lazy " referrerpolicy="no-referrer-when-downgrade "></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        </section>
                    </div>
                </div>
            </div>





















    <?php include("./footer.php") ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx " crossorigin="anonymous "></script>

</body>

</html>