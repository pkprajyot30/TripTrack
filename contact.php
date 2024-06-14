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
          ), url(./puri-beach.jpg);
          height: 75vh;
            }
            
          </style>
    </head>
    <body>
        <!-- navbar  -->
        <nav class = "navbar">
            <div class = "container flex">
                <a href = "index.php" class = "site-brand">
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
                            <a href = "index.php" class = "nav-link">Home</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "gallery.php" class = "nav-link">Gallery</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "destination.php" class = "nav-link">Destination</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "contact.php" class = "nav-link">Contact</a>
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
                    <h1>Contact</h1>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus rerum maxime enim odit illum in molestias beatae doloremque, ratione optio.</p> -->
                </div>
            </div>
        </header>
        <!-- header -->

        <!-- contact section -->
        <section id = "contact" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">get in touch with us</span>
                    <h2 class = "lg-title">contact us</h2>
                </div>

                <div class = "contact-row">
                    <div class = "contact-left">
                        <form class = "contact-form">
                            <input type = "text" class = "form-control" placeholder="Your name">
                            <input type = "email" class = "form-control" placeholder="Your email">
                            <textarea rows = "4" class = "form-control" placeholder="Your message" style = "resize: none;"></textarea>
                            <input type = "submit" class = "btn" value = "Send message">
                        </form>
                    </div>
                    <div class = "contact-right my-2">
                        <div class = "contact-item">
                            <span class = "contact-icon flex">
                                <i class = "fa fa-phone-alt"></i>
                            </span>
                            <div>
                                <span>Phone</span>
                                <p class = "text">8144570994</p>
                            </div>
                        </div>
                        <!-- <div class = "contact-item">
                            <span class = "contact-icon flex">
                                <i class = "fa fa-map-marked-alt"></i>
                            </span>
                            <div>
                                <span>Address</span>
                                <p class = "text">102 East 22nd Street, NY</p>
                            </div>
                        </div> -->
                        <div class = "contact-item">
                            <span class = "contact-icon flex">
                                <i class = "fa fa-envelope"></i>
                            </span>
                            <div>
                                <span>Message</span>
                                <p class = "text">triptrack@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of contact section -->
        

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

        <!-- js -->
        <script src = "js/script.js"></script>
        <script>
            
        </script>
    </body>
</html>