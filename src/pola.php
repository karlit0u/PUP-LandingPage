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
    <link rel="stylesheet" href="css/style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <!-- Content -->
    <div class="container-pola">
        <div class="page-content-pola">
            <center>
                <h2 class="text-title">SMART POLA</h2>
                <iframe src="https://pupsrc101pola.wordpress.com/polamenu/" 
                width="1000" height="1000" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
            </center>
        </div>
    </div>

    <!-- Footer -->
    <?php
        include('includes/footer.php');
    ?>

    <script src="javascript/script.js"></script>
    <button onclick="topFunction()" id="scrollToTopBtn" title="Go to top">&#8679;</button>
</body>
</html>