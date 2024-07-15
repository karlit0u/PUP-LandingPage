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
    <!---Header-->
    <div class="header">
        <a href="index.php"><img class="logo" src="images/puplogo.png" alt="PUPSRC LOGO"></a>
        <div class="header-content">
            <div class="header-name">POLYTECHNIC UNIVERSITY OF THE PHILIPPINES</div>
            <div class="header-subname">Santa Rosa Branch</div>
        </div>
        <div class="navbar-right">
            <div class="navbar">
                <a href="index.php">Home</a>

                <!--Quick Links dropdown-->
                <div class="dropdown">
                    <button class="dropbtn">Quick Links</button>
                    <div class="dropdown-content">
                        <a href="ql_tanglaw.php">TANGLAW</a>
                        <a href="ql_hdf.php">Health Declaration Form</a>
                    </div>
                </div>
                
                <!--Services dropdown-->
                <div class="dropdown">
                    <button class="dropbtn">Services</button>
                    <div class="dropdown-content">
                        <a href="cvass.php">CVASS</a>
                        <a rel="noopener noreferrer" href="https://pupsrc102.school.blog/cvass101/3/" target="_blank">Inquiry/Request/Set Appointment</a>
                        <a rel="noreferrer noopener" href="https://pupsrc102.school.blog/services101/" target="_blank">All Services</a>
                        <a href="pola.php">SMART POLA</a>
                    </div>
                </div>
                
                <!--Downloads dropdown-->
                <div class="dropdown">
                    <button class="dropbtn">Downloads</button>
                    <div class="dropdown-content">
                        <a href="download_id_application.php">ID Application</a>
                        <a href="download_completion_form.php">Completion Form</a>
                        <a rel="noreferrer noopener" href="https://www.pup.edu.ph/downloads/students/" target="_blank">For Students</a>
                        <a rel="noreferrer noopener" href="https://www.pup.edu.ph/downloads/employees/" target="_blank">For Faculty and Employees</a>
                    </div>
                </div>

                <!--About dropdown-->
                <div class="dropdown right">
                    <button class="dropbtn">About</button>
                    <div class="dropdown-content">
                        <a href="vision_mission.php">Vision and Mission</a>
                        <a href="hymn.php" class = "hymn">Hymn </a>
                        <a href="history.php">History</a>
                        <a href="campus_virtual_tour.php">Branch Virtual Tour</a>
                        <a href="board_of_regents.php">Board of Regents</a>
                        <a href="university_officials.php">University Officials</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Content -->
        <div class="container-uc">
            <div class="page-content-uc">
                <h1 class="text-title">University Officials</h1>
                <table style="width: 100%" align="center">
                    <tbody>
                        <tr>
                            <td style="width: 50%">
                                <div class="image-container-uc">
                                    <img src="images/univpres.jpg">
                                </div>
                                <p>
                                    <b>Dr. Manuel M. Muhi</b><br>
                                    University President
                                </p>
                            </td>
                            <td>
                                <div class="image-container-uc">
                                    <img src="images/univvp.jpg">
                                </div>
                                <p>
                                    <b>Prof. Alberto C. Guillo</b><br>
                                    Executive Vice President
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 50%">
                                <div class="image-container-uc">
                                    <img src="images/univvpa.jpg">
                                </div>
                                <p>
                                    <b>Dr. Emanuel C. De Guzman</b><br>
                                    Vice President for Academic Affairs
                                </p>
                            </td>
                            <td>
                                <div class="image-container-uc">
                                    <img src="images/univvps.jpg">
                                </div>
                                <p>
                                    <b>Prof. Tomas O. Testor</b><br>
                                    Vice President for Student Affairs and Services
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 50%">
                                <div class="image-container-uc">
                                    <img src="images/univvpr.jpg">
                                </div>
                                <p>
                                    <b>Dr. Anna Ruby P. Gapasin</b><br>
                                    Vice President for Research, Extension, Planning, and Development
                                </p>
                            </td>
                            <td>
                                <div class="image-container-uc">
                                    <img src="images/univvpb.jpg">
                                </div>
                                <p>
                                    <b>Prof. Pascualito B. Gatan</b><br>
                                    Vice President for Branches and Satellite Campus
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 50%">
                                <div class="image-container-uc">
                                    <img src="images/univvpad.jpg">
                                </div>
                                <p>
                                    <b>Prof. Adam V. Ramilo</b><br>
                                    Vice President for Administration
                                </p>
                            </td>
                            <td>
                                <div class="image-container-uc">
                                    <img src="images/univvpf.jpg">
                                </div>
                                <p>
                                    <b>Ms. Marisa J. Legaspi</b><br>
                                    Vice President for Finance
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <h1 class="text-title">Santa Rosa Branch Officials</h1>
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <div class="image-container-uc">
                                    <img src="images/srbdirect.png">
                                </div>
                                <p>
                                    <b>DR. LENY V. SALMINGO</b><br>
                                    Director & Academic Program Head
                                </p>
                            </td>
                            <td>
                                <div class="image-container-uc">
                                    <img src="images/srbs.png">
                                </div>
                                <p>
                                    <b>DR. GILFRED A. ACIERTO</b><br>
                                    Head, Student Services & Quality Assurance Coordinator
                                </p>
                            </td>
                            <td>
                                <div class="image-container-uc">
                                    <img src="images/srbad.png">
                                </div>
                                <p>
                                    <b>ENGR. EMY LOU G. ALINSOD</b><br>
                                    Head, Admission and Registration Office
                                </p>
                            </td>
                            <td>
                                <div class="image-container-uc">
                                    <img src="images/srbcd.png">
                                </div>
                                <p>
                                    <b>DR. PARALUMAN L. VELOZ</b><br>
                                    Cash Disbursement Officer & GAD Focal Person
                                </p>
                            </td>
                            <td>
                                <div class="image-container-uc">
                                    <img src="images/srbao.png">
                                </div>
                                <p>
                                    <b>ASST. PROF. DIOMEDES E. RODRIGUEZ</b><br>
                                    Administrative Officer & Faculty Management Officer
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
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