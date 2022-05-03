<?php include('config.php'); ?>
<?php require_once(ROOT_PATH . '/includes/public_functions.php') ?>
<?php include('includes/registration_login.php'); ?>
<?php include('includes/head_section.php'); ?>

<title>Academics</title>
</head>
<?php $courses = getAllCourses(); ?>
<body>
    <!-- navbar -->
    <?php include(ROOT_PATH . '/includes/navbar.php') ?>
    <!-- // navbar -->

    <div class="content">
			<h2 class="content-title">Programmes</h2>
			<hr>
			<?php foreach ($courses as $course) : ?>
				<div class="post" style="margin-left: 0px;">

					<?php if (isset($course['name']['description'])) : ?>
						<a href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $course['name']['id'] ?>" class="btn category">
							<?php echo $course['name']['description'] ?>
						</a>
					<?php endif ?>

					<a href="single_programme.php?course-slug=<?php echo $course['slug']; ?>">
						<div class="post_info">
							<h3><?php echo $course['name'] ?></h3>
							<div class="info">
								<span><?php echo date("F j, Y ", strtotime($course["created_at"])); ?></span>
								<span class="read_more">Read more...</span>
							</div>
						</div>
					</a>
				</div>
			<?php endforeach ?>
			<!-- more content still to come here ... -->
		</div>

    <!-- Single News Start-->
    <div class="single-news">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="sn-container">
                        <div class="sn-content">
                            <br>
                            <h1>Programmes</h1>
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
                            <div class="news-list">
                                <div class="nl-item">
                                    <div class="nl-img">
                                        <img src="<?php echo BASE_URL . 'static/images/cisco.png'; ?>" alt="Cisco">
                                    </div>
                                    <div class="nl-title">
                                        <a href="">Cisco Certified Network Associate (CCNA)</a>
                                    </div>
                                </div>
                                <div class="nl-item">
                                    <div class="nl-img">
                                    <img src="<?php echo BASE_URL . 'static/images/fibre-optic.jpg'; ?>" alt="Fibre optics">
                                    </div>
                                    <div class="nl-title">
                                        <a href="">Fibre Optic Training</a>
                                    </div>
                                </div>
                                <div class="nl-item">
                                    <div class="nl-img">
                                    <img src="<?php echo BASE_URL . 'static/images/fibre-optic.jpg'; ?>" alt="Fibre optics">
                                    </div>
                                    <div class="nl-title">
                                        <a href="">Summer School Visualization - Free registration</a>
                                    </div>
                                </div>
                                <div class="nl-item">
                                    <div class="nl-img">
                                    <img src="<?php echo BASE_URL . 'static/images/fibre-optic.jpg'; ?>" alt="Fibre optics">
                                    </div>
                                    <div class="nl-title">
                                        <a href="">Fundamentals of Software Testing, Third Cohort</a>
                                    </div>
                                </div>
                                <div class="nl-item">
                                    <div class="nl-img">
                                    <img src="<?php echo BASE_URL . 'static/images/fibre-optic.jpg'; ?>" alt="Fibre optics">
                                    </div>
                                    <div class="nl-title">
                                        <a href="">Fiber Optic Training</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                                <h2 class="sw-title">Department of IT</h2>
                                <div class="category">
                                    <ul>
                                        <li><a href="">Bsc Information Technology</a><span>(98)</span></li>
                                        <li><a href="">International</a><span>(87)</span></li>
                                        <li><a href="">Economics</a><span>(76)</span></li>
                                        <li><a href="">Politics</a><span>(65)</span></li>
                                        <li><a href="">Lifestyle</a><span>(54)</span></li>
                                        <li><a href="">Technology</a><span>(43)</span></li>
                                        <li><a href="">Trades</a><span>(32)</span></li>
                                    </ul>
                                </div>
                            </div>
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

    <!-- Footer Menu Start -->
    <div class="footer-menu">
        <div class="container">
            <div class="f-menu">
                <a href="">Terms of use</a>
                <a href="">Privacy policy</a>
                <a href="">Cookies</a>
                <a href="">Accessibility help</a>
                <a href="">Advertise with us</a>
                <a href="">Contact us</a>
            </div>
        </div>
    </div>
    <!-- Footer Menu End -->

    <!-- Footer Bottom Start -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 copyright">
                    <p>Copyright &copy; <a href="">The JKUAT Reporter</a>. All Rights Reserved</p>
                </div>

                <div class="col-md-6 template-by">
                    <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom End -->

    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

</body>

</html>