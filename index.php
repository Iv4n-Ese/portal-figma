<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-- MAIN -->
    <link rel="stylesheet" href="static/css/main.css">
</head>
<body>
    <div class="menu-btn">
        <i class="fas fa-bars"></i>
    </div>
    <div class="container">
        
        <!-- Nav menu-->
        <?php include("templates/nav.php") ?>
        
        <div class="container__cover">
            <div class="cover">
                <div class="text">                
                    <h1>
                        Zero Hassle Push to Talk conversations
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, provident nam rerum natus quis fugiat!
                    </p>

                    <input type="button" value="Demo" class="demo">
                    <input type="button" value="Get started" class="started">

                </div>
                <div class="svg">
                    <img src="static/images/banner-1.png">
                </div>

            </div>
        </div>
    
     <!-- seciones -->    
    <div class="social">
        <h1>Greeat products, faster than ever</h1>
        <p>Everything you need to build corporat and  great products.</p>
        <div class="links">
            <h1>
                400+
            </h1>
            <p>
                Projects completed
            </p>
        </div>
        <div class="links">
            <h1>
                600%
            </h1>
            <p>
                Return on investment
            </p>                    
        </div>
        <div class="links">
            <h1>
                10k
            </h1>
            <p>
                global downloads
            </p>                    
        </div>
    </div>

    <!-- 3 -->
    <div class="container__description">
            <div class="cover">
                <div class="text">                
                    <h1>
                        We've really sped up our workflow with Company and havent't looked back.
                    </h1>                    
                </div>
                <div class="svg-2">
                    <img src="static/images/banner-2-Image-1.png">
                    <img src="static/images/banner-2-Image-2.png"><br>
                    <img src="static/images/banner-2-Image-3.png" class="horizontal-l">
                    <img src="static/images/banner-2-Image-4.png">
                    <img src="static/images/banner-2-Image-5.png" class="horizontal-r">
                </div>

            </div>
        </div>
    <!-- 4 -->
    <div class="social task-content">
        <h1>Frequently asked questions</h1>
        <p>Everything you need to know the product and billing</p>
        <div class="task">
            <div class="task-Info">
                <p>
                    Is there a free trial available? 
                    <strong class="plus" id="plus"> + </strong>
                    <strong class="less" id="less"> - </strong>
                    
                </p>
                <div class="collapsible" id="collapsible">
                Yes, you can try us for free for 30 days. If you want, we’ll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.
                </div> 
            </div>            
            <div class="task-Info">
                <p>
                    Can i change my plan later?
                </p>                
            </div>
            <div class="task-Info">
                <p>
                    Whats is yours cancellation policy?
                </p>
            </div>
            <div class="task-Info">
                <p>
                    Can other info be addes to an invoice?
                </p>
            </div>
            <div class="task-Info">
                <p>
                    How dows billing work?
                </p>
            </div>
            <div class="task-Info">
                <p>
                    How do i change my account email?
                </p>
            </div>
        </div>
        <img src="static/images/Avatar.png" class="task-img">
        <h6>Still have questions?</h6>
        <p>Can't fnd the answer you're looking for? Please chat to our friendl team</p>
        <input type="button" value="Get in touch" class="started">
    </div>
    
    <!-- footer -->
    
    <div class="footer-links">
        <div class="footer-container">
            <div class="footer-info">                
                <p>
                <img src="static/images/brand.png" alt="" class="nav-brand-footer">  
                <b>logotipo</b>
                </p>
                <p class="footer-lorem">
                    Lorem ipsum dolor sit amet.
                    <br>
                    Lorem ipsum dolor sit amet consectetur.
                    
                </p>
                <p class="footer-menu">
                    Overview Features Pricing Carrers Help Privacy                    
                </p>
            </div>            
            <div class="footer-download">
                <p>
                    Get the app
                </p>
                <img src="static/images/app-store.png" class="task-img-download">
                <img src="static/images/play-store.png" class="task-img-download">
            </div>            
        </div>
        <hr class="footer-hr">
        <!-- footer copyright -->
        <footer class="footer">
            <h3>Dev Iván Suárez </h3>
            <div class="footer-tech">
                <a href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#">
                    <i class="fab fa-git"></i>
                </a>
                <a href="#">
                    <i class="fab fa-gitkraken"></i>
                </a>
                <a href="#">
                    <i class="fab fa-itunes"></i>
                </a>
                
            </div>

        </footer>
    </div>
</div>
</body>
<script src="static/js/main.js" ></script>
</html>