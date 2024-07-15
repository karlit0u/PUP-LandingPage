<!-- UNDER DEVELOPEMENT -->
<?php
    include('includes/top-navbar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!---Tab logo and title-->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Cinzel'>
    <title>Polytechnic University of the Philippines - SRC (Beta)</title>
    <link rel=icon type="image/png" sizes="16x16" href="images/pupsrclogo.webp">

    <!--CSS-->
    <link rel="stylesheet" href="styles/style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
</head>

<!---Content-->
<body>   
    <!--Body-->
    <section>
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="images/carousel_1.png" alt="carouselpic">
            </div>
        
            <div class="mySlides fade">
                <img src="images/carousel_2.png" alt="carouselpic">
            </div>
        
            <div class="mySlides fade">
                <img src="images/carousel_3.png" alt="carouselpic">
            </div>
        
            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <!-- The dots/circles -->
            <div class="dot-container">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="page-content-i">
                <h2 class="text-title">Announcements</h2>
                <h4>Important Information Regarding ID Application Processing:</h4>
                <p>Please be advised that applications for IDs will be accepted until December 9, 2023. 
                Applications received after this date will not be processed in this current batch.</p>

                <p>We are committed to processing applications efficiently and accurately. Once this batch is complete, we will announce the next processing window and associated deadlines. 
                We appreciate your understanding and cooperation.</p>
            </div>

            <div class="page-content-i">
                <h2 class="text-title">Latest News</h2>
                <img src="images/pupcet-index.gif">

                <p>
                    Exciting news for the future Iskolar ng Bayan! The online application for PUP Santa Rosa Branch College Entrance Test (PUPCET) is open from January 3 to March 31, 2024. 
                    Get ready to embark on your academic journey with us. 
                    Visit our website to apply and secure your spot! For application instructions, click
                    <a rel="noreferrer noopener" href="https://www.pup.edu.ph/announcements/?go=oB%2B0UfKzmp4%3D" target="_blank">here</a>
                </p>
                <p>
                    For any queries or require assistance, 
                    please contact us via email at <b>admission.starosa@pup.edu.ph</b> (use email subject: PUPCET APPLICATION 2024) or visit us at PUP Santa Rosa Branch Admission Office, Monday-Friday 8am-5pm.
                </p>
            </div>

            <div class = "page-content-i">
                <h3 class="text-title">CONGRATULATIONS</h3>

                <h5>100% Passing Rate for Electronics Technician Licensure Examination(*NP:75.77%)</h5>
                <h5>50% Passing Rate for Electronics Engineer Licensure Examination (*NP: 47.84%)</h5>


                <img src="images/grads-footer.png" alt = "graduates">
            </div>
        </div>
    </section>

    <!--Student organization logos-->
    <section>
        <div class="org-container">
            <h2 class="org-title">Student Organizations</h2>
            <div class="logo-container">
                <div class="logo-card">
                    <img src="images/orgs/acap.png" alt="acap">
                    <p class="org-acronym">ACAP</p>
                    <p class="org-name">Association of Competent and Aspiring Psychologists</p>
                </div>
                <div class="logo-card">
                    <img src="images/orgs/aeces.png" alt="aeces">
                    <p class="org-acronym">AECES</p>
                    <p class="org-name">Association of Electronics and Communications Engineering Students</p>
                </div>
                <div class="logo-card">
                    <img src="images/orgs/elite.png" alt="elite">
                    <p class="org-acronym">ELITE</p>
                    <p class="org-name">Eligible League of Information Technology Enthusiasts</p>
                </div>
                <div class="logo-card">
                    <img src="images/orgs/give.png" alt="give">
                    <p class="org-acronym">GIVE</p>
                    <p class="org-name">Guild of Imporous and Valuable Educators</p>
                </div>
                <div class="logo-card">
                    <img src="images/orgs/jehra.png" alt="jehra">
                    <p class="org-acronym">JEHRA</p>
                    <p class="org-name">Junior Executive of Human Resource Association</p>
                </div>
                <div class="logo-card">
                    <img src="images/orgs/jmap.png" alt="jmap">
                    <p class="org-acronym">JMAP</p>
                    <p class="org-name">Junior Marketing Association of the Philippines</p>
                </div>
                <div class="logo-card">
                    <img src="images/orgs/jpia.png" alt="jpia">
                    <p class="org-acronym">JPIA</p>
                    <p class="org-name">Junior Philippine Institute of Accountants</p>
                </div>
                <div class="logo-card">
                    <img src="images/orgs/piie.png" alt="piie">
                    <p class="org-acronym">PIIE</p>
                    <p class="org-name">Philippine Institute of Industrial Engineers</p>
                </div>
            </div>
        </div>
    </section>
      
    <!-- Footer -->
    <?php
        include('includes/footer.php');
    ?>
    
    <script src="scripts/script.js"></script>
    <button onclick="topFunction()" id="scrollToTopBtn" title="Go to top">&#8679;</button>

</body>
</html>