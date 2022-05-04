<?php include('config.php'); ?>
<?php include('includes/registration_login.php'); ?>
<?php include('includes/head_section.php'); ?>
<?php require_once(ROOT_PATH . '/includes/public_functions.php') ?>
</head>
<?php
$courses = getTop5Courses();
$boot_camps = getBootCamps();
?>

<body>
    <!-- navbar -->
    <?php include(ROOT_PATH . '/includes/navbar.php') ?>
    <!-- // navbar -->

    <!-- Single News Start-->
    <div class="single-news">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="sn-container">
                        <div class="sn-content">
                            <br>
                            <h3>Information for First Year Students – 2022</h3>
                            <p>
                                The University Council, Management and Staff are pleased to warmly welcome our first year students 2021/2022 academic year to the JKUAT family. Congratulations and welcome to your University of Choice! You worked hard to competitively secure your admission to JKUAT and we look forward to having you on board as you pursue all your academic endeavors.

                                Due to the prevailing COVID 19 pandemic, we would like to inform you that registration and learning for the first semester will be done both online and in person. Below is the information you need to successfully register as a student and access the online learning platform. Kindly keep checking this webpage as important information will be continually communicated here.
                            </p>
                            <h3>Registration</h3>
                            <p>
                                The registration process is online and started on 29th August 2021 . The Reporting Date is 6th September 2021

                                To be considered fully registered for the semester, students are supposed to:
                            </p>
                            <p>
                            <ul>
                                <li>Pay fees into the bank accounts specified in the next section.</li>
                                <li>Create a student’s account on the admission system and upload all relevant documents.
                                    EMAIL ACTIVATION</li>

                            </ul>
                            Important communication from the University to the Students is always done through the students’ JKUAT email. All students are required to activate their emails and regularly check their mails for any communication from their Colleges/Schools/Departments.
                            <br>
                            To access most resources at the University e.g. online library, WIFI etc students will be required to use their JKUAT email accounts.
                            </p>

                            <h5><u>Fee Payment</u></h5>
                            <div class="contact-info">
                                <p>Absa Bank Account Number: 0775001216</p>
                                <p>KCB Account Number: 1107589177</p>
                                <p>KCB (Taifa Laptop Only) Account Number: 1107589045</p>
                                <p>Cooperative Bank of Kenya Account Number: 01129098952900</p>
                                <p>Equity Bank Account Number: 0090291251426</p>
                                <p>National Bank of Kenya Account Number: 0100359580600</p>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            <h2 class="sw-title">Boot Camps and Courses</h2>
                            <div class="category">
                                <ul>
                                    <?php foreach ($boot_camps as $camp) : ?>
                                        <li><a href="single_programme.php?course-slug=<?php echo $camp['slug']; ?>"><?php echo $camp['name']; ?></a></li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        </div>

                        <?php require_once(ROOT_PATH . '/includes/department_courses.php') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single News End-->

    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3 class="title">Contacts</h3>
                        <div class="contact-info">
                            <p><i class="fa fa-map-marker"></i>Main Campus, Juja, Kenya</p>
                            <p><i class="fa fa-envelope"></i>thereporter@jkuat.ac.ke</p>
                            <p><i class="fa fa-phone"></i>+254 700 000 000</p>
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3 class="title">Useful Links</h3>
                        <ul>
                            <li><a href="#">Be a Reporter</a></li>
                            <li><a href="#">Enroll</a></li>
                            <li><a href="#">Apply Course</a></li>
                            <li><a href="#">Undergraduate Courses</a></li>
                            <li><a href="#">Postgraduate Courses</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3 class="title">Links To</h3>
                        <ul>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Regional CISCO Academy</a></li>
                            <li><a href="#">JKUAT Enterprises</a></li>
                            <li><a href="#">JKUAT Tech Expo</a></li>
                            <li><a href="#">Online Systems & Services</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3 class="title">Newsletter</h3>
                        <div class="newsletter">
                            <p>
                                You can get our weekly newsletter by subcribing to us. You will always stay connected
                                and up to date on the latest news.
                            </p>
                            <form>
                                <input class="form-control" type="email" placeholder="Your email here">
                                <button class="btn">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

</body>

</html>