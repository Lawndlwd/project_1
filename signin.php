<!DOCTYPE html>
<html lang="fr">

<head>

    <title>project 1 -
        <TeamTreeHouse class="com">TeamTreeHouse</TeamTreeHouse>
    </title>
    <meta charset="UTF-8">
    <meta name="description" content="Structure of an HTML page">
    <meta name="keywords" content="HTML, CSS">
    <meta name="author" content="Raym648">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,423;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,423;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/signin.css">

    <style>

    </style>

</head>

<body>

    <div class="topnav" id="myTopnav">
        <a href="index.html" target="_blank" class="active">Home</a>
        <a href="https://join.teamtreehouse.com/techdegree/" target="_blank">Techdegree</a>
        <a href="https://teamtreehouse.com/tracks" target="_blank">Tracks</a>
        <a href="https://teamtreehouse.com/library" target="_blank">Library</a>
        <a href="https://teamtreehouse.com/community" target="_blank">Community</a>
        <a href="https://teamtreehouse.com/support" target="_blank">Support</a>

        <a href="https://teamtreehouse.com/subscribe/plans?trial=yes" target="_blank" class="right">Free Trial</a>
        <a href="https://teamtreehouse.com/signin?return_to=%2F" target="_blank" class="right">Sign In</a>

        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>


    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>



    <div class="container">
        <form action="/action_page.php">

            <div class="row">
                <h2 style="text-align:center">Login with Social Media or Manually</h2>
                <div class="vl">
                    <span class="vl-innertext">or</span>
                </div>

                <div class="col">
                    <a href="#" class="fb btn">
                        <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                    </a>
                    <a href="#" class="twitter btn">
                        <i class="fa fa-twitter fa-fw"></i> Login with Twitter
                    </a>
                    <a href="#" class="google btn">
                        <i class="fa fa-google fa-fw"></i> Login with Google+
                    </a>
                </div>

                <div class="col">
                    <div class="hide-md-lg">
                        <p>Or sign in manually:</p>
                    </div>

                    <input type="email" name="EmailAdr" placeholder="@ Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <input type="submit" value="Login">
                </div>

            </div>

        </form>

    </div>

    <div class="bottom-container">
        <div class="row">
            <div class="col">
                <a href="#" style="color:white" class="btn">Sign up</a>
            </div>
            <div class="col">
                <a href="#" style="color:white" class="btn">Forgot password?</a>
            </div>
        </div>
    </div>


    <div class="dummy_page">Mobile responsive footer</div>

    <!-- FOOTER START -->
    <div class="footer">
        <div class="contain">

            <div class="col">
                <h1><a href="https://teamtreehouse.com/ " target="_blank">Treehouse</a></h1>
                <p> </p>
            </div>

            <div class="col">
                <h1>Our Company</h1>
                <ul>
                    <li><a href="https://teamtreehouse.com/about " target="_blank">About Us</a></li>
                    <li><a href="https://teamtreehouse.com/support " target="_blank">Contact Us</a></li>
                    <li><a href="https://teamtreehouse.com/community " target="_blank">Community</a></li>
                    <li><a href="https://teamtreehouse.com/stories " target="_blank">Treehouse stories</a></li>
                    <li><a href="https://teamtreehouse.com/perks " target="_blank">Student Perks</a></li>
                    <li><a href="https://blog.teamtreehouse.com/?_ga=2.246814595.623872555.1583939092-2040935043.1583939092 " target="_blank">Treehouse Blog</a></li>
                    <li><a href="https://teamtreehouse.com/affiliate-program " target="_blank">Affiliate Program</a></li>
                    <li><a href="https://teamtreehouse.com/jobs " target="_blank">Careers</a></li>
                </ul>
            </div>

            <div class="col">
                <h1>Topics</h1>
                <ul>
                    <li><a href="https://teamtreehouse.com/library/topic:html " target="_blank">HTML</a></li>
                    <li><a href="https://teamtreehouse.com/library/topic:css " target="_blank">CSS</a></li>
                    <li><a href="https://teamtreehouse.com/library/topic:design " target="_blank">Design</a></li>
                    <li><a href="https://teamtreehouse.com/library/topic:javascript " target="_blank">Javascript</a></li>
                    <li><a href="https://teamtreehouse.com/library/topic:ruby " target="_blank">Ruby</a></li>
                    <li><a href="https://teamtreehouse.com/library/topic:php " target="_blank">PHP</a></li>
                    <li><a href="https://teamtreehouse.com/library/topic:ios " target="_blank">iOS</a></li>
                    <li><a href="https://teamtreehouse.com/library/topic:android " target="_blank">Audroid</a></li>
                    <li><a href="https://teamtreehouse.com/library/topic:development-tools " target="_blank">Development</a></li>
                    <li><a href="https://teamtreehouse.com/library/topic:business " target="_blank">Business</a></li>
                </ul>
            </div>

            <div class="col">
                <h1>Tracks</h1>
                <ul>
                    <li><a href="https://teamtreehouse.com/tracks/web-design " target="_blank">Web Design</a></li>
                    <li><a href="https://teamtreehouse.com/tracks/front-end-web-development " target="_blank">Web Development</a></li>
                    <li><a href="https://teamtreehouse.com/tracks/rails-development " target="_blank">Rails Development</a></li>
                    <li><a href="https://teamtreehouse.com/tracks/beginning-php " target="_blank">PHP Development</a></li>
                    <li><a href="https://teamtreehouse.com/tracks/ios-development-with-objectivec " target="_blank">iOS Development</a></li>
                    <li><a href="https://teamtreehouse.com/tracks/beginning-android " target="_blank">Audroid Development</a></li>
                    <li><a href="https://teamtreehouse.com/tracks/starting-a-business " target="_blank">Starting a Business</a></li>
                </ul>
            </div>

            <div class="col social">
                <h1>Social</h1>
                <ul>
                    <li><img src="https://svgshare.com/i/5fq.svg" width="32" style="width: 32px;" alt="image 1"></li>
                    <li><img src="https://svgshare.com/i/5eA.svg" width="32" style="width: 32px;" alt="image 2"></li>
                    <li><img src="https://svgshare.com/i/5f_.svg" width="32" style="width: 32px;" alt="image 3"></li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>

    <!-- END OF FOOTER -->

</body>

</html>