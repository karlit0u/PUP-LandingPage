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
    <div class="container-id">
        <div class="page-content-id">
            <h1 class="text-title">ID Card Application</h1>
            <p>Application for:</p>
            <table style="width: 100%">
                <tbody>
                    <tr>
                        <td style="width: 100%">
                            <ul>
                                <li class="text-highlight" onclick="redirectToSection('new')">New | Freshmen</li>
                                <li class="text-highlight" onclick="redirectToSection('replacement')">Replacement | Transfer | Shiftee | Late</li>
                                <li class="text-highlight" onclick="redirectToSection('lost')">Lost ID</li>
                                <li class="text-highlight" onclick="redirectToSection('status')">
                                    <a rel="noreferrer noopener" href="https://pupsrc102.school.blog/2022/04/19/application-id-for-freshmen-2020/2/" target="_blank">ID Application Status</a></li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- Redirected Sections -->
            <div id="new-section" class="redirected-section">
                <h3 class="text-title">New | Freshmen</h3>
                <table style="width: 100%">
                    <tbody>
                        <tr>
                            <td style="width: 100%">
                                <ul>
                                    <li><b>STEP 1</b> – Prepare your current Certificate of Registration (CoR)
                                        (<a rel="noreferrer noopener" href="https://sis1.pup.edu.ph/student/" target="_blank">download CoR here</a>)</li>
                                    <li><b>STEP 2</b> – Download and fill out ID Application Form. 
                                        (<a rel="noreferrer noopener" href="https://drive.google.com/file/d/1kYIdRE8y6AIOljdo5KA6_xHsLGsOd8_I/view" target="_blank">download from here</a>)</li>
                                    <li><b>STEP 3</b> – Upload ID Application Form via Google Form. 
                                        (<a rel="noreferrer noopener" href="https://docs.google.com/forms/d/e/1FAIpQLSdSomiFBCUofDBy055Mg1S4WbsPNwuWuQf3WUKAc75-DS21hA/viewform" target="_blank">Continue</a>)</li>
                                    <li><b>STEP 4</b> – Submit the printed requirements for validation/signing (<b>ID Application Form & CoR</b>) of documents to the Student Services office. <br>
                                        To set an appointment, click <a rel="noreferrer noopener" href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&source=mailto&body=Student-Number%20(optional)%20:%20_%0ALast-Name%20:%20_%0AFirst-Name%20:%20_%0AMiddle-Name%20:%20_%0ADate-of-birth%20:%20_%0AContact-Number%20:%20_%0AInquiry/%E2%80%8BConcerns/Request/Purpose%20:%20_%0A&su=APPOINTMENT|ID%20APPLICATION&to=gilfredabad%2Bstudentserv@gmail.com" 
                                        target="_blank">here</a></li>
                                    <li><b>STEP 5</b> – Check Your ID Application Status 
                                        <a rel="noreferrer noopener" href="https://pupsrc102.school.blog/2022/04/19/application-id-for-freshmen-2020/2/" target="_blank">here</a></li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="replacement-section" class="redirected-section">
                <h3 class="text-title">Replacement | Transfer | Shiftee | Late</h3>
                <table style="width: 100%">
                    <tbody>
                        <tr>
                            <td style="width: 100%">
                                <ul>
                                    <li><b>STEP 1</b> – Prepare your current Certificate of Registration (CoR)
                                        (<a rel="noreferrer noopener" href="https://sis1.pup.edu.ph/student/" target="_blank">download CoR here</a>)</li>

                                    <li><b>STEP 2</b> – Download and fill out ID Application Form. 
                                        (<a rel="noreferrer noopener" href="https://drive.google.com/file/d/1kYIdRE8y6AIOljdo5KA6_xHsLGsOd8_I/view" target="_blank">download from here</a>)</li>

                                    <li><b>STEP 3</b> – Submit the printed requirements for validation/signing (ID Application Form & CoR) of documents to the Student Services office. To set an appointment, click
                                        <a rel="noreferrer noopener" href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&source=mailto&body=Student-Number%20(optional)%20:%20_%0ALast-Name%20:%20_%0AFirst-Name%20:%20_%0AMiddle-Name%20:%20_%0ADate-of-birth%20:%20_%0AContact-Number%20:%20_%0AInquiry/%E2%80%8BConcerns/Request/Purpose%20:%20_%0A&su=APPOINTMENT|ID%20APPLICATION&to=gilfredabad%2Bstudentserv@gmail.com" 
                                        target="_blank">here</a></li>

                                    <li><b>STEP 4</b> – Pay corresponding fee at the Cashier’s Office. (for replacement/transfer/shiftee application only)</li>

                                    <li><b>STEP 5</b> – Upload ID Application Form & Official Receipt via Google Form. 
                                        <a rel="noreferrer noopener" href="https://docs.google.com/forms/d/e/1FAIpQLSdSomiFBCUofDBy055Mg1S4WbsPNwuWuQf3WUKAc75-DS21hA/viewform" target="_blank">here</a></li>

                                    <li><b>STEP 6</b> – Check Your ID Application Status
                                        <a rel="noreferrer noopener" href="https://pupsrc102.school.blog/2022/04/19/application-id-for-freshmen-2020/2/" target="_blank">here</a></li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="lost-section" class="redirected-section">
                <h3 class="text-title">Lost ID</h3>
                <table style="width: 100%">
                    <tbody>
                        <tr>
                            <td style="width:100%">
                                <ul>
                                    <li><b>STEP 1</b> – Prepare your current Certificate of Registration (CoR)
                                        (<a rel="noreferrer noopener" href="https://sis1.pup.edu.ph/student/" target="_blank">download CoR here</a>)</li>

                                    <li><b>STEP 2</b> – Prepare your <b>Affidavit of Loss</b> (you can get this document at any Notary Public)</li>

                                    <li><b>STEP 3</b> – Upload/Submit Affidavit of Loss via Google Form.
                                        <a rel="noreferrer noopener" href="https://docs.google.com/forms/d/e/1FAIpQLSeMnSIZLlYg6Jt-asNQwSKjCY395sfkw2v8u0cG9xsJUGdU4g/viewform" 
                                        target="_blank">Continue</a></li>

                                    <li><b>STEP 4</b> – Download and print Lost ID Application Form sent to your email (if no response within 3-7 working days, send an email to <a rel="noreferrer noopener" href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&source=mailto&body=Student-Number%20(optional)%20:%20_%0ALast-Name%20:%20_%0AFirst-Name%20:%20_%0AMiddle-Name%20:%20_%0ADate-of-birth%20:%20_%0AContact-Number%20:%20_%0AInquiry/%E2%80%8BConcerns/Request/Purpose%20:%20_%0A&su=INQUIRY/REQUEST%20|%202022-04-19%2021:54&to=gilfredabad%2Bstudentserv@gmail.com">
                                        gilfredabad+studentserv@gmail.com</a> to check the status of your application)</li>

                                    <li><b>STEP 5</b> – Submit the printed requirements for validation/signing (ID Application Form & CoR) of documents to the Student Services office. To set an appointment, click 
                                        <a rel="noreferrer noopener" href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&source=mailto&body=Student-Number%20(optional)%20:%20_%0ALast-Name%20:%20_%0AFirst-Name%20:%20_%0AMiddle-Name%20:%20_%0ADate-of-birth%20:%20_%0AContact-Number%20:%20_%0AInquiry/%E2%80%8BConcerns/Request/Purpose%20:%20_%0A&su=APPOINTMENT|ID%20APPLICATION&to=gilfredabad%2Bstudentserv@gmail.com" 
                                        target="_blank">here</a></li>

                                    <li><b>STEP 6</b> – Pay corresponding fee at the Cashier’s Office.</li>

                                    <li><b>STEP 7</b> – Upload ID Application Form & Official Receipt via Google Form.
                                        <a rel="noreferrer noopener" href="https://docs.google.com/forms/d/e/1FAIpQLSdSomiFBCUofDBy055Mg1S4WbsPNwuWuQf3WUKAc75-DS21hA/viewform" target="_blank">here</a></li>

                                    <li><b>STEP 8</b> – Check Your ID Application Status
                                        <a rel="noreferrer noopener" href="https://pupsrc102.school.blog/2022/04/19/application-id-for-freshmen-2020/2/" target="_blank">here</a></li>
                                </ul>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
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