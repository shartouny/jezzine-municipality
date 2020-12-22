<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="assets\pictures\logo.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
    <link rel="stylesheet" href="assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="assets/css/myStyle.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="assets/js/jquery.cycle2.js"></script>
    <script src="assets/OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
    <script src="assets/js/myJquery.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <title>Jezzine | Home</title>
</head>

<body>
    <!-- header section start  -->
    <style>
        * {
            text-align: right;
        }

        .b-0 {
            bottom: 0;
        }

        .l-0 {
            left: 0;
        }

        #upper-bar img {
            vertical-align: bottom;
            max-height: 100px;
            float: right;

        }

        a:not(.social-icon),
        header input {
            font-family: din-next-lt-regular, sans-serif;
            color: #6d6a6e;
            background-color: rgba(0, 0, 0, 0);

        }

        header input {
            border-bottom: 1px solid #000000 !important;
            border-top: 0 !important;
            border-right: 0 !important;
            border-left: 0 !important;
            background-color: rgba(0, 0, 0, 0) !important;
        }

        header nav {
            background-color: #e6e7e8;
        }
    </style>
    <div class="container">
        <header>
            <div class="row h-100 justify-content-between" id="upper-bar">
                <div class="col-2 p-3">
                    <a class="" href="index.php"><img src="assets/pictures/logo.png" class="img-fluid logo" alt="not found"></a>
                </div>
                <div class="col-4">

                    <div class="row position-absolute b-0">
                        <div class="col">
                            <ul class="nav justify-content-md-end justify-content-center align-items-center">
                                <li class="nav-item d-none d-sm-block">
                                    <a href="contact.php" class="nav-link">
                                        إتصل بنا
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="#" class="nav-link social-icon">
                                        <i class="fas fa-envelope"></i>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="#" class="nav-link social-icon">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="#" class="nav-link social-icon">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <nav>
                <div class="row">
                    <div class="col">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.php">الصفحة الرئيسيّة <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">الإتحاد</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">المشاريع</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">النشاطات والأخبار</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">خدمة المواطنين</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">إكتشف المنطقة</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">الدليل</a>
                                    </li>


                                </ul>
                                <form class="form-inline my-2 my-lg-0">
                                    <input class="form-control mr-sm-2" type="search" placeholder="البحث" aria-label="Search">
                                    <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </nav>
                    </div>
                </div>
            </nav>
        </header>
    

    <!-- header section end  -->
    <!-- header content start  -->
    <style>
        .my-caption {
            position: absolute;
            width: 100%;
            bottom: 20px;

        }

        .my-caption h3 {
            font-family: ge-dinar-2-medium, sans-serif;
            color: #ffffff;
        }

        .my-caption p {
            font: roboto;
            color: #a7a9ac;
        }

        .bg-shadow-dark {
            background: rgba(76, 76, 76, 0);
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.51) 49%, rgba(0, 0, 0, 0.5) 100%);
            position: absolute;
            width: 100%;
            height: 100%;
            bottom: 0;
            left: 0;
        }

        .z-0 {
            z-index: 0;
        }

        .z-1 {
            z-index: 1;
        }

        .z-2 {
            z-index: 2;
        }

        @media(max-width:1024px) {
            h3 {
                font-size: 1rem;
            }
        }
    </style>
    <div class="py-3 py-lg-5">
        <div class="row">
            <div class="col-md-8 ">
                <div id="carouselExampleIndicators" class="carousel slide h-100" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner h-100">
                        <div class="carousel-item active z-0 h-100">
                            <div class="position-relative h-100">
                                <img class="d-block w-100 h-100" src="assets\pictures\news-1.png" alt="First slide">
                                <div class="my-caption z-2">
                                    <div class="container px-5">
                                        <div class="row  border-bottom">
                                            <div class="col-8">
                                                <h3>العنوان الرئيسي لهذا الخبر يأتي هنا</h3>
                                            </div>
                                            <div class="col text-left">
                                                <a href="#">إقرأ المزيد
                                                    <i class="fa fa-play-circle fa-rotate-180"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <p>09-10-2020</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-shadow-dark z-1"></div>
                            </div>
                        </div>
                        <div class="carousel-item z-0 h-100">
                            <div class="position-relative h-100">
                                <img class="d-block w-100 h-100" src="assets\pictures\news-1.png" alt="First slide">
                                <div class="my-caption z-2">
                                    <div class="container px-5">
                                        <div class="row  border-bottom">
                                            <div class="col-8">
                                                <h3>العنوان الرئيسي لهذا الخبر يأتي هنا</h3>
                                            </div>
                                            <div class="col text-left">
                                                <a href="#">إقرأ المزيد
                                                    <i class="fa fa-play-circle fa-rotate-180"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <p>09-10-2020</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-shadow-dark z-1"></div>
                            </div>
                        </div>
                        <div class="carousel-item z-0 h-100">
                            <div class="position-relative h-100">
                                <img class="d-block w-100 h-100" src="assets\pictures\news-1.png" alt="First slide">
                                <div class="my-caption z-2">
                                    <div class="container px-5">
                                        <div class="row  border-bottom">
                                            <div class="col-8">
                                                <h3>العنوان الرئيسي لهذا الخبر يأتي هنا</h3>
                                            </div>
                                            <div class="col text-left">
                                                <a href="#">إقرأ المزيد
                                                    <i class="fa fa-play-circle fa-rotate-180"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <p>09-10-2020</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-shadow-dark z-1"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4 d-none d-md-block">
                <div class="row">
                    <div class="col-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 px-md-0">
                                    <img src="assets\pictures\news-2.png" alt="" class="img-fluid">
                                    <div class="my-caption z-2">
                                        <div class="container p-2 px-lg-5">
                                            <div class="row  border-bottom">
                                                <div class="col">
                                                    <h3>العنوان الرئيسي لهذا الخبر يأتي هنا</h3>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <p>09-10-2020</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-shadow-dark z-1"></div>
                                </div>
                                <div class="col-12 px-md-0 mt-3">
                                    <img src="assets\pictures\news-2.png" alt="" class="img-fluid">
                                    <div class="my-caption z-2">
                                        <div class="container px-5">
                                            <div class="row  border-bottom">
                                                <div class="col">
                                                    <h3>العنوان الرئيسي لهذا الخبر يأتي هنا</h3>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <p>09-10-2020</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-shadow-dark z-1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- header content end  -->
    <!-- page content start  -->
    <style>
        h2.middle-line span {
            padding-left: 20px;
            background-color: #ffffff;
            z-index: 1;
            position: relative;
        }

        h2.middle-line::after {
            content: '';
            background-color: #000000;
            height: 1px;
            width: 100%;
            position: absolute;
            top: 50%;
            left: 0;
            margin-top: -1px;
        }

        .bg-light-gray {
            background-color: #f6f6f6;
        }

        .project {
            height: 450px;
        }

        #projects h3,
        #projects h2 {
            font-family: ge-dinar-2-medium, sans-serif;
            color: #66686a;
            font-size: 1.2rem;
        }

        #projects h2 {
            font-size: 2rem;
        }
    </style>
    <section id="projects">
        <div class="container">
            <div class="row">
                <div class="col-12 p-0">
                    <h2 class="middle-line">
                        <span class="text-right">المشاريع</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-lg-4 col-md-6 mt-4 mt-md-2">
                <div class="bg-light-gray project">
                    <div class="row">
                        <div class="col-12">
                            <a href="#">
                                <img src="assets\pictures\news-3.png" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="container">
                                <p>09-10-2020</p>
                                <h3>افتتاح معمل التصنيع الغذائي وغرف التبريد في جزين...</h3>
                            </div>

                        </div>
                        <div class="position-absolute b-0 l-0 m-3">
                            <a href="#" class="m-3">إقرأ المزيد
                                <i class="fa fa-play-circle fa-rotate-180"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-4 mt-md-2">
                <div class="bg-light-gray project">
                    <div class="row">
                        <div class="col-12">
                            <a href="#">
                                <img src="assets\pictures\news-3.png" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="container">
                                <p>09-10-2020</p>
                                <h3>افتتاح معمل التصنيع الغذائي وغرف التبريد في جزين...</h3>
                            </div>

                        </div>
                        <div class="position-absolute b-0 l-0 m-3">
                            <a href="#" class="m-3">إقرأ المزيد
                                <i class="fa fa-play-circle fa-rotate-180"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-4 mt-md-2">
                <div class="bg-light-gray project">
                    <div class="row">
                        <div class="col-12">
                            <a href="#">
                                <img src="assets\pictures\news-3.png" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="container">
                                <p>09-10-2020</p>
                                <h3>افتتاح معمل التصنيع الغذائي وغرف التبريد في جزين...</h3>
                            </div>

                        </div>
                        <div class="position-absolute b-0 l-0 m-3">
                            <a href="#" class="m-3">إقرأ المزيد
                                <i class="fa fa-play-circle fa-rotate-180"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </section>
    <!-- page content end  -->
    <!-- footer start  -->

    <!-- footer end  -->

    </div>
</body>

</html>