<?php
include("header.php");
?>

<head>
    <title>Contact Us - PERKS Finance</title>
</head>

         <!-- banner -->
         <section class="banner_w3pvt">
            <div class="csslider infinity" id="slider1">
                <input type="radio" name="slides" checked="checked" id="slides_1" />
                <input type="radio" name="slides" id="slides_2" />
                <input type="radio" name="slides" id="slides_3" />

<ul>

	<li>
		<div class="banner-top"style ="background: url(images/1banner2.jpg) no-repeat center;">
			<div class="overlay">
                <div class="container">
                    <div class="banner-info">
                        <div class="banner-w3ls-inner">
                            <br><br><br><br><br><br><br>
                            <h4>Apply for business loans online...</h4>
                            <b style="color: white;">Take your business to the next level with easy & quick business loan from PerksFinance. Click to apply or know more about the best business loans in Zambia. Best in Marketing. Lower Interest Rate. Fast Processing. Easy to Apply. Minimum Documentation...</b>
                            <div class="test-info text-left mt-lg-5 mt-4">
                                <a href="about.php" class="btn mr-2">About Us</a>
                                <a href="contact.php" class="btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</li>

<li>
<div class="banner-top1" style ="background: url(images/1banner1.jpg) no-repeat center;">
<div class="overlay sec">
<div class="container">
<div class="banner-info">
	<div class="banner-w3ls-inner">
					<h4>Need a Personal Loan?</h4>
					<p>A personal loan is the best option if you need funds for an urgent need or a short period...</p>
		<div class="test-info text-left mt-lg-5 mt-4">
			<div class="test-info text-left mt-lg-5 mt-4">
				<a href="about.php" class="btn mr-2">About Us</a>
				<a href="contact.php" class="btn">Contact Us</a>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</li>
<li>
<div class="banner-top2"style ="background: url(images/1banner3.jpg) no-repeat center;">
<div class="overlay">
<div class="container">
<div class="banner-info">
	<div class="banner-w3ls-inner">
		<h4>Loan EMI calculator</h4>
		<h3>Business Loans</h3>
		<p>To calculate your EMI, just enter the loan amount, rate of interest and loan tenure, and your EMI is instantly displayed.</p>
		<div class="test-info text-left mt-lg-5 mt-4">
			<div class="test-info text-left mt-lg-5 mt-4">
				<a href="about.php" class="btn mr-2">About Us</a>
				<a href="contact.php" class="btn">Contact Us</a>
			</div>
		</div>
	</div>

</div>
</div>
</div>
</div>
</li>

</ul>

				<div class="arrows">
                    <label for="slides_1"></label>
                    <label for="slides_2"></label>
                    <label for="slides_3"></label>

                </div>
            </div>
        </section>
        <!-- //slider -->
    </div>

    <!--CONTACT US-->
    <section class="content-info py-5">
        <div class="container py-md-5">
            <div class="text-center px-lg-5">
                <h3 class="heading3">Contact Us</h3>
                <div class="title-desc text-center px-lg-5">
                    <p class="px-lg-5 sub-vj">Contact us for any concerns and suggestions</p>
                </div>
            </div>
            <div class="contact-w3ls-form mt-5">
                <form action="form-handler.php" class="w3-pvt-contact-fm" method="post">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" type="text" name="name" placeholder="Enter full name" required="">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email" placeholder="Enter your email address" required="">
                            </div>
                            <div class="form-group">
                                <label>Subject</label>
                                <input class="form-control" type="subject" name="subject" placeholder="Enter subject" required="">
                            </div>
                            <div class="form-group">
                                <label>Write Message</label>
                                <textarea class="form-control" name="message" placeholder="Write your message here..." required=""></textarea>
                            </div>
                        <div class="form-group mx-auto mt-3">
                            <button class="btn submit">Submit</button>
                        </div>
                        </div>
                        <div class="col-lg-3">
							<h4>Address:</h4>
							<p>Technological University of the Philippines-Manila<br><br>Ayala Blvd., corner San Marcelino St., Ermita, Manila 1000 </p>
							<hr>
							
							<h4>Contact Number:</h4>
							<p>+63 9261867274</p>
							
							
							<h4>Email Address:</h4>
							<p>info@PerksFinance.com</p>
							
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>
    <!-- //contact -->
    <!-- /map-->
    <div class="map-w3-pvt">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.2112386725275!2d120.98259631484015!3d14.587035789811125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ca21ac302015%3A0x92dcca0f915010d9!2sTechnological%20University%20of%20the%20Philippines%20-%20Manila!5e0!3m2!1sen!2sph!4v1655088500095!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- //map-->
 <?php
include("footer.php");
?>