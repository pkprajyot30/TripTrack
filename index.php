
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
            rgba(212, 217, 222, 0.5),
            rgba(5, 6, 7, 0.5)
          ), url(./puri-beach-homescreen.jpeg);
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
                                    echo "Hello- ".$_SESSION['username'];
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

        <!-- end of navbar  -->

        <!-- header -->
        <header class = "flex">
            <div class = "container">
                <div class = "header-title">
                    <h1>WELCOME TO ODISHA</h1>
                    <p>“In Odisha, every temple tells a story, and every beach whispers serenity.</p>
                </div>
            </div>
        </header>
        <!-- header -->

        <!-- featured section -->
        <section id = "featured" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">know about some places before your travel</span>
                    <h2 class = "lg-title">Featured places</h2>
                </div>

                <div class = "featured-row">
                    <div class = "featured-item my-2 shadow">
                        <img src = "images/puri img1.jpeg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Puri
                            </span>
                            <div>
                                <p class = "text">Puri in Odisha is one of the four must-visit pilgrimage sites for Hindus because of Jagannath Temple that forms the part of Char Dham in India.</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "images/Konark.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Konark
                            </span>
                            <div>
                                <p class = "text">The Sun Temple at Konark is not just a religious site, but a masterpiece of art that inspires awe and wonder.</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "images/Chilka Lake.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Chilika
                            </span>
                            <div>
                                <p class = "text">Chilika Lake is the largest brackish water lake with estuarine character that sprawls along the east coast of India.</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "images/Simlipal National Park.jpeg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Simlipal National Park
                            </span>
                            <div>
                                <p class = "text">This park is known for the tiger, elephant and hill mynah. It holds the highest tiger population in the state of Orissa.</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "images/Daringbadi.jpeg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Daringbadi
                            </span>
                            <div>
                                <p class = "text">Daringbadi is a beautiful hill station in Odisha. This hill station lies peacefully at an elevation of 3000 feet from sea level, If you can find a heaven in Odisha, its here.</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "images/pipili.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Pipili
                            </span>
                            <div>
                                <p class = "text">This place is famous for Applique works which is a traditional craft of the local People. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                .featured-item img{
                    height: 250px;
                }
            </style>
        </section>

        <!-- testimonials section -->
        <section id = "testimonials" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">Review of some Travellers</span>
                    <h2 class = "lg-title">Reviews</h2>
                </div>

                <div class = "test-row">
                    <div class = "test-item">
                        <p class = "text">This place is Just so beautiful. Odisha tourism's Main heart is this place. The Nature heals you in wonderful way. Loved it, Thank You Odisha for this beautifull place.</p>
                        <div class = "test-item-info">
                            <img src = "images/pk prajyot.jpg" alt = "review">
                            <div>
                                <h3>Pk Prajyot</h3>
                                <p class = "text">Trip to Daringbadi</p>
                            </div>
                        </div>
                    </div>

                    <div class = "test-item">
                        <p class = "text">On the way to Chillika Lake one can visit great Alarnath Temple. Experience is good. Friendly atmosphere no trouble for visiting tourists.</p>
                        <div class = "test-item-info">
                            <img src = "images/snehapanda.jpg" alt = "review">
                            <div>
                                <h3>Sneha Panda</h3>
                                <p class = "text">Trip to Chilika</p>
                            </div>
                        </div>
                    </div>

                    <div class = "test-item">
                        <p class = "text">The golden beach along the marine drive is just a perfect place for sunrise and sunset. The beach is also perfect for sea bathing. Horse and camels are available for all-time stroll across the beach.
                        </p>
                        <div class = "test-item-info">
                            <img src = "images/pk.jpg" alt = "review">
                            <div>
                                <h3>Praise</h3>
                                <p class = "text">Trip to Puri</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of testimonials section -->

        <!-- video section -->
        <section id = "video">
            <div class = "video-wrapper flex">
                <video loop>
                    <source src = "images/purivideo.mp4" type = "video/mp4">
                </video>
                <button type = "button" id = "play-btn">
                    <i class = "fas fa-play"></i>
                </button>
            </div>
        </section>
        <!-- end of video section -->

        <!-- footer -->
        <footer class = "py-4">
            <div class = "container footer-row">
                <div class = "footer-item">
                    <a href = "index.php" class = "site-brand">
                        Trip<span>Track</span>
                    </a>
                    <p class = "text">TripTrack is a tourism planning web application, that help users from everywhere to plan their trip to the most beautiful and famous places to visit in Odisha. It saves your time and stress from researching on like- which places to visit, where to stay, which restaurants provides the quality services, mode of transport to visit to that particular place. </p>
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
            // play/pause video
            let video = document.querySelector('.video-wrapper video');
            document.getElementById('play-btn').addEventListener('click', () => {
                if(video.paused){
                    video.play();
                } else {
                    video.pause();
                }
            });
        </script>
    </body>
</html>