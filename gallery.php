<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TripTrack</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- font awesome cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- fonts -->
        <link rel = "stylesheet" href = "font/fonts.css">
        <!-- normalize css -->
        <link rel = "stylesheet" href = "css/normalize.css">
        <!-- custom css -->
        <link rel = "stylesheet" href = "css/utility.css">
        <link rel = "stylesheet" href = "css/style.css">
        <link rel = "stylesheet" href = "css/responsive.css">
        <style>
            header{
              background-image: linear-gradient(
            rgba(80, 129, 172, 0.5),
            rgba(17, 24, 30, 0.5)
          ), url(Chilika-Lake/assets/chilika\ lake\ img3.jpg);
          height: 80vh;
            }
          </style>
    </head>
    <body>
               <!-- navbar  -->
        <nav class = "navbar">
            <div class = "container flex">
                <a  href = "index.php" class = "site-brand">
                    Trip<span>Track</span>
                </a>

                <button type = "button" id = "navbar-show-btn" class = "flex">
                    <i class = "fas fa-bars"></i>
                </button>
                <div id = "navbar-collapse">
                    <button type = "button" id = "navbar-close-btn" class = "flex">
                        <i class = "fas fa-times"></i>
                    </button>
                    <ul class = "navbar-nav">
                        <li class = "nav-item">
                            <a  href = "index.php" class = "nav-link">Home</a>
                        </li>
                        <li class = "nav-item">
                            <a  href = "gallery.php" class = "nav-link">Gallery</a>
                        </li>
                        <li class = "nav-item">
                            <a  href = "destination.php" class = "nav-link">Destination</a>
                        </li>
                        <li class = "nav-item">
                            <a  href = "contact.php" class = "nav-link">Contact</a>
                        </li>
                        <div class="dropdown">
                            <li class = "nav-item">
                                <a href = "#" class = "nav-link"><i class='fas fa-user-circle' style='font-size:28px'></i></a>
                                <ul class="dropdown-content">
                                    <b><li>
                                    <?php    
                                    session_start();
                                    if(isset($_SESSION['username'])){
                                    echo "Hello ".$_SESSION['username'];
                                    echo '<a href="logout.php"> <button class="logout">Logout</b></button></a>';
                                    }
                                    else{
                                        echo '<a href="signin.html" <button class="login">Login</b></button></a>';
                                    }
                                    ?>
                                    </li> 
                                    
                                </ul>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
        <style>
            .login{
                cursor: pointer;
                color: blueviolet;
                border: 0;
                border-radius: 2px;
                margin-top: 50rem;
                font-size: 20px;
                font-weight: 900;
                
            }
            .logout{
                cursor: pointer;
                color: blueviolet;
                border: 0;
                border-radius: 5px;
                font-size: 15px;
                font-weight: 800;
            }
            .dropdown-content{
                display: none;
                position: absolute;
                background-color:#f1f1f1;
                min-width: 100px;
                height: 4.5rem;
                text-align: center;
                font-size: 1rem;
                border-radius: 1rem;
                line-height: 1.5rem;
                box-shadow:0px 8px 16px 0px rgba(0,0,0,0.2);
                padding: 5px 8px;
                z-index: 1;
            }
            .dropdown:hover .dropdown-content{
                display: block;
            }
        </style>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- end of navbar  -->

        <!-- header -->
        <header class = "flex header-sm">
            <div class = "container">
                <div class = "header-title">
                    <h1>Gallery</h1>
                    <p>Here you can see all the beautifull images of the places.</p>
                </div>
            </div>
        </header>
        <!-- header -->

        <!-- gallery section -->
        <div id = "gallery" class = "py-4">
            <div class = "container">
                <div class = "gallery-row">
                    <div class = "gallery-item shadow">
                        <img src = "images/puri img1.jpeg" alt = "gallery img">
                        <span class = "zoom-icon">
                        </span>
                    </div>
                    <div class = "gallery-item shadow">
                        <img src = "images/barbil.avif" alt = "gallery img">
                        <span class = "zoom-icon">
                        </span>
                    </div>
                    <div class = "gallery-item shadow">
                        <img src = "images/pipili.jpg" alt = "gallery img">
                        <span class = "zoom-icon">
                        </span>
                    </div>
                    <div class = "gallery-item shadow">
                        <img src = "images/Konark.jpg" alt = "gallery img">
                        <span class = "zoom-icon">
                        </span>
                    </div>
                    <div class = "gallery-item shadow">
                        <img src = "images/CUTTACK.jpg" alt = "gallery img">
                        <span class = "zoom-icon">
                        </span>
                    </div>
                    <div class = "gallery-item shadow">
                        <img src = "images/sambalpur.jpg" alt = "gallery img">
                        <span class = "zoom-icon">
                        </span>
                    </div>
                    <div class = "gallery-item shadow">
                        <img src = "images/paradeep.jpg" alt = "gallery img">
                        <span class = "zoom-icon">
                        </span>
                    </div>
                    <div class = "gallery-item shadow">
                        <img src = "images/puribeach.jpeg" alt = "gallery img">
                        <span class = "zoom-icon">
                        </span>
                    </div>
                    <div class = "gallery-item shadow">
                        <img src = "images/Simlipal National Park.jpeg" alt = "gallery img">
                        <span class = "zoom-icon">
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .gallery-item{
                height: 280px;
            }
            .gallery-item img{
                height: 280px;
            }
        </style>

        <!-- end of gallery section -->

        <!-- img modal -->
        <div id = "img-modal-box">
            <div id = "img-modal">
                <button type = "button" id = "modal-close-btn" class = "flex">
                    <i class = "fas fa-times"></i>
                </button>
                <button type = "button" id = "prev-btn" class = "flex">
                    <i class = "fas fa-chevron-left"></i>
                </button>
                <button type = "button" id = "next-btn" class = "flex">
                    <i class = "fas fa-chevron-right"></i>
                </button>
                <img src = "images/gallery-1.jpg">
            </div>
        </div>
        <!-- end of img modal -->

        <!-- popular places section -->
        <section id = "popular" class = "py-4">
            <div class = "title-wrap">
                <span class = "sm-title">know about some famous places to visit</span>
                <h2 class = "lg-title">Popular Places</h2>
            </div>

            <div class = "popular-row">
                <div class = "popular-item shadow">
                    <img src = "images/popular images/bhitarkanika national park.jpg" alt = "">
                    <div>
                        <span>Similipal National Park, Baripada</span>
                        <ul class = "rating flex">
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star-half-alt"></i></li>
                            <li>&nbsp;400 reviews</li>
                        </ul>
                        <p class = "text">This park is known for the tiger, elephant and hill mynah.</p>
                    </div>
                </div>

                <div class = "popular-item shadow">
                    <img src = "images/popular images/Daringbadi.jpg" alt = "">
                    <div>
                        <span>Daringbadi, Kandhamal</span>
                        <ul class = "rating flex">
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star-half-alt"></i></li>
                            <li>&nbsp;400 reviews</li>
                        </ul>
                        <p class = "text">Daringbadi is a beautiful hill station in Odisha,If you can find a heaven in Odisha, its here..</p>
                    </div>
                </div>

                <div class = "popular-item shadow">
                    <img src = "images/popular images/Konark.jpg" alt = "">
                    <div>
                        <span>Konark, Puri</span>
                        <ul class = "rating flex">
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star-half-alt"></i></li>
                            <li>&nbsp;400 reviews</li>
                        </ul>
                        <p class = "text">The Sun Temple at Konark is not just a religious site, but a masterpiece of art that inspires awe and wonder.</p>
                    </div>
                </div>

                <div class = "popular-item shadow">
                    <img src = "images/popular images/Tikarpada_Wildlife_Sanctuary.jpg" alt = "">
                    <div>
                        <span>Tikarpada Wildlife Sanctuary,Angul</span>
                        <ul class = "rating flex">
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star-half-alt"></i></li>
                            <li>&nbsp;400 reviews</li>
                        </ul>
                        <p class = "text">Tikarpada Wildlife Sanctuary is also famous for its diverse species of flora and fauna.</p>
                    </div>
                </div>

                <div class = "popular-item shadow">
                    <img src = "images/popular images/bhitarkanika national park.jpg" alt = "">
                    <div>
                        <span>Bhitarkanika National Park, Kendrapara</span>
                        <ul class = "rating flex">
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star-half-alt"></i></li>
                            <li>&nbsp;400 reviews</li>
                        </ul>
                        <p class = "text">LBhitarkanika has one of the largest populations of endangered saltwater crocodile in India</p>
                    </div>
                </div>

                <div class = "popular-item shadow">
                    <img src = "images/popular images/dhauli.jpg" alt = "">
                    <div>
                        <span>Dhauli, Bhubaneswar</span>
                        <ul class = "rating flex">
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star-half-alt"></i></li>
                            <li>&nbsp;400 reviews</li>
                        </ul>
                        <p class = "text">Dhauli known for "Dhauli Santi Stupa",a peace pagoda monument which witnesses the great Kalinga War built by Japan Budhha Sangha and Kalinga Nippon Budhha Sangha.</p>
                    </div>
                </div>

                <div class = "popular-item shadow">
                    <img src = "images/popular images/koraput.jpg" alt = "">
                    <div>
                        <span>Koraput</span>
                        <ul class = "rating flex">
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star-half-alt"></i></li>
                            <li>&nbsp;400 reviews</li>
                        </ul>
                        <p class = "text">Koraput is mostly famous for its Jagannath Temple which is also known as Sabara Srikhetra.</p>
                    </div>
                </div>

                <div class = "popular-item shadow">
                    <img src = "images/popular images/barbil.jpg" alt = "">
                    <div>
                        <span>Barbil</span>
                        <ul class = "rating flex">
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star"></i></li>
                            <li><i class = "fas fa-star-half-alt"></i></li>
                            <li>&nbsp;400 reviews</li>
                        </ul>
                        <p class = "text">Barbil is a popular spot which have a unique combination of Mythology, History and Scenic beauty. Famous and blessed for the world largest deposit of iron ore and manganese ore.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of popular places section -->
        

        <!-- footer -->
        <footer class = "py-4">
            <div class = "container footer-row">
                <div class = "footer-item">
                    <a href = "index.html" class = "site-brand">
                        Trip<span>Track</span>
                    </a>
                    <p class = "text">TripTrack is a tourism planning web application, that help users from everywhere to plan their trip to the most beautiful and famous places to visit in Odisha. It saves your time and stress from researching on like- which places to visit, where to stay, which restaurants provides the quality services, mode of transport to visit to that particular place.</p>
                </div>

                <div class = "footer-item">
                    <h2>Follow us on: </h2>
                    <ul class = "social-links">
                        <li>
                            <a href = "#">
                                <i class = "fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-twitter"></i>
                            </a>
                        </li>
                      
                        <li>
                            <a href = "#">
                                <i class = "fab fa-google-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class = "footer-item">
                    <h2>Popular Places:</h2>
                    <ul>
                        <li><a href = "#">Puri</a></li>
                        <li><a href = "#">Chilika Lake</a></li>
                        <li><a href = "#">Chandipur</a></li>
                        <li><a href = "#">Paradeep</a></li>
                        <li><a href = "#">sambalpur</a></li>
                        <li><a href = "#">Cuttack</a></li>
                    </ul>
                </div>

                <div class = "subscribe-form footer-item">
                    <h2>Subscribe for New Updates</h2>
                    <form class = "flex">
                        <input type = "email" placeholder="Enter Email" class = "form-control">
                        <input type = "submit" class = "btn" value = "Subscribe">
                    </form>
                </div>
            </div>
        </footer>
        <!-- end of footer -->
    </body>
</html>