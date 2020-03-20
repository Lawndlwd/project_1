

<?php $pageName="Tree House"; ?>
<?php require_once 'head.php'?>

<body>
    <!--start navbar-->
    <?php include 'header.php'?>
    <!--end of nav-->


    <!---->
    <section class="banner-lev">
        <div class="banner-container-lev">
            <div class="banner-welcome-lev">
                <h1 class="welcome-lev">Learn to code, gain a new skill, get a new job</h1>
                <p class="welcome-paragraph-lev">Whatever your goal — we'll get you there</p>
            </div>
            <div class="form-banner-lev">
                <header class="form-header-lev">
                    <h3>Try it free for 7 days <span class="font-wigth-lev"> starting at $25 a month</span></h3>
                </header>
                <form action="H.php" class="free-trail-lev">
                    <div class="first-line-lev">
                        <div>
                            <label for="fname">First name</label>
                            <input type="text" id="fname" name="fname">
                        </div>
                        <div>
                            <label for="lname">Last name</label>
                            <input type="text" id="lname" name="lname">
                        </div>
                    </div>
                    <div class="second-line-lev">
                        <div>
                            <label for="email">Email address</label>
                            <input type="text" id="email" name="email">
                        </div>
                        <div>
                            <label for="Password">Password</label>
                            <input type="password" id="Password" name="password">
                        </div>
                    </div>
                    <div>
                        <input type="checkbox" id="check">
                        <label for="check"><span  class="dev-label-lev"> I want to hear from Treehouse about products and services.</span></label>
                    </div>
                    <hr>
                    <input type="button" value="Claim Your Free Trial">
                </form>
            </div>
        </div>
        <div class="math-banner-lev">
            <p><span class="banner-span-lev">300+</span> courses</p>
            <p><span class="banner-span-lev">278</span> workshops</p>
            <p><span class="banner-span-lev">27</span> topics</p>
            <p><span class="banner-span-lev">50K+</span> current students</p>
        </div>
    </section>
    <!---->


    <!---->
    <section class=" container  main-section">
        <div class="main container">
            <div class="container video-banner">
                <video class="dsk7  mob12" src="https://videos.teamtreehouse.com/videos/hptest-product-overview-720p.webm?token=5e74fda8_33f94bcd63f5b61d25b5c36876fc40960ee99f91" autoplay>
            </video>
                <div class="dsk5 mob12 flexible-head">
                    <h3 class="flexible-heading">Flexible</h3>
                    <p class="flexible-paragraph">Learning a new skill doesn’t have to interrupt your busy schedule. Our on-demand videos and interactive code challenges are there for you when you need them.</p>
                    <div class="svg-img">
                        <img class=" dsk4 mob0 flexible-img" src="/img/designer.svg" alt="svg file">
                    </div>
                </div>
            </div>
            <hr>
            <div class="second-paragraph dsk12 mob12">
                <div class="supportive dsk5 mob12">
                    <h3 class="supportive-heading">Supportive</h3>
                    <p class="supportive-paragraph">Join hundreds of thousands of students in our supportive online community. They’re always available to lend support and nudge you to keep going.</p>
                    <img class="supportive-img dsk9" src="https://static.teamtreehouse.com/assets/views/marketing/home/supportive-dc87dcd46e8cc60a76dfa72e7fceb5be004f60e573e13026dcbc5a43be1929a2.png" alt="here img">
                </div>
                <div class="valuable dsk5 mob12">
                    <h3 class="valuable-heading">Valuable</h3>
                    <p class="valuable-paragraph">We have a wide range of plans to fit your goals and budget. Check out a free trial to see what works for you and then pay monthly—you’ll never have to shell out thousands up front like some bootcamps or traditional colleges.</p>
                    <img class="valuable-img dsk8" src="img/value.svg" alt="valuable">
                </div>
            </div>
            <div class="treehouse-partner dsk10 mob10">
                <h3 class=partner-heading>Treehouse Partnerships</h3>
                <div class="partner-img-container container">
                    <img class="dsk3 partnerimg" alt="markting" src="https://static.teamtreehouse.com/assets/views/marketing/home/google-developers-364d3753836b8c4c5ff9dfecdfa626e9f6fbde1770d072a21c57c0a5a1de3637.png">
                    <img class="dsk3 partnerimg " src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Amazon_Alexa_logo.svg/1280px-Amazon_Alexa_logo.svg.png" alt="sgsd">
                    <img class="dsk3 partnerimg " src="https://pngimg.com/uploads/microsoft/microsoft_PNG16.png" alt="sgsdgd">
                </div>
            </div>
        </div>
    </section>
    <!---->

    
    <!---->
    <?php include 'footer.php' ?>
    <!---->

    <?php include 'js.php'  ?>


</body>

</html>