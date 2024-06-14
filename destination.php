<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TripTrack</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- font awesome cdn -->
        <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- fonts -->
        <link rel = "stylesheet"  href = "font/fonts.css">
        <!-- normalize css -->
        <link rel = "stylesheet"  href = "css/normalize.css">
        <!-- custom css -->
        <link rel = "stylesheet"  href = "css/utility.css">
        <link rel = "stylesheet"  href = "css/style.css">
        <link rel = "stylesheet"  href = "css/responsive.css">
        <style>
            header{
              background-image: linear-gradient(
            rgba(80, 129, 172, 0.5),
            rgba(17, 24, 30, 0.5)
          ), url(./chandipur-beach/assets/chandipur\ img2.jpg);
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
                    <h1>Destination</h1>
                    <p>Here you can find the beautifull places and know more about the places you want to visit in Odisha....</p>
                </div>
            </div>
        </header>
        <!-- header -->

        <!-- blog section -->
        <section id = "blog" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <h2 class = "sm-title">Here are some Beautifull</h2>
                    <h3 class = "lg-title">Places</h3>
                </div>

                <div class = "blog-row">
                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "./images/puri img1.jpeg" alt = "blog">
                            <span class = "blog-date">Puri</span>
                        </div>
                        <div class = "blog-item-bottom">
                            <a href = "#">Puri</a>
                            <p class = "text">Puri, located in the eastern Indian state of Odisha, is a city renowned for its rich cultural heritage, ancient temples, and vibrant traditions.</p>
                            <button  ><a href="puriindex.php">See More</button></a>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "./images/Chilka Lake.jpg" alt = "blog">
                            <span class = "blog-date">Chilika lake</span>
                        </div>
                        <div class = "blog-item-bottom">
                             
                            <a href = "#">Chilika lake</a>
                            <p class = "text">"In the heart of Odisha, Chilika Lake whispers tales of serenity, where the dance of migratory birds paints the skies with a touch of magic."</p>
                            <button  ><a href="chilikalake-index.php">See More</button></a>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "./images/chandipur beach.jpg" alt = "blog">
                            <span class = "blog-date">Chandipur</span>
                        </div>
                        <div class = "blog-item-bottom">
                            
                            <a href = "#">Chandipur</a>
                            <p class = "text">"Chandipur, where the ocean unveils its secrets twice a day, inviting you to witness the eternal embrace of land and sea."</p>
                            <button  ><a href="chandipur-index.php">See More</button></a>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/paradeep.jpg" alt = "blog">
                            <span class = "blog-date">Paradeep</span>
                        </div>
                        <div class = "blog-item-bottom">
                           
                            <a href = "#">Paradeep</a>
                            <p class = "text">Paradeep, situated on the eastern coast of Odisha, India, is a strategically important port town known for its industrial significance and natural beauty. It is one of the major ports on the Bay of Bengal.</p>
                            <button  ><a href="paradeep-index.php">See More</button></a>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/sambalpur.jpg" alt = "blog">
                            <span class = "blog-date">Sambalpur</span>
                        </div>
                        <div class = "blog-item-bottom">
                        
                            <a href = "#">Sambalpur</a>
                            <p class = "text">
                                Its located in the western part of the Indian state of Odisha, is a city steeped in history and cultural richness. Nestled on the banks of the Mahanadi River, One of the notable landmarks in Sambalpur is the Hirakud Dam.</p>
                            <button  ><a href="sambalpur-index.php">See More</button></a>
                        </div>
                    </div>
                   
                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/CUTTACK.jpg" alt = "blog">
                            <span class = "blog-date">Cuttack</span>
                        </div>
                        <div class = "blog-item-bottom">
                            
                            <a href = "#">Cuttack</a>
                            <p class = "text">Cuttack, situated in the eastern Indian state of Odisha, is a city with a rich historical and cultural legacy. Serving as the former capital of Odisha, Cuttack is often referred to as the "Silver City" due to its historically prominent trade in silver filigree work.</p>
                            <button  ><a href="cuttack-index.php">See More</button></a>
                        </div>
                        <style>
                            button{
                                background: none;
                                border: 0px solid rgb(219, 219, 219);
                            }
                        </style>
    
                    </div>
                </div>
            </div>
        </section>
         
        <!-- end of blog section -->
        

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