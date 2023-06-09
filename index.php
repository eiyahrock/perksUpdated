<?php
include("header.php");
?>
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

    <!-- //banner -->
    <!-- banner bottom -->
    <section class="banner-bottom py-5" id="process">
        <div class="container py-md-5">
            <div class="row bottom-grids text-center">
                <div class="col-md-4 bottom-grid">
                    <span class="fa clr1 fa-star-half-o"></span>
                    <p class="number">1</p>
                    <h4>A 100% Paperless Personal Loan Experience</h4>
                    <p class="mt-4">The most notable feature is the complete digital experience that these loans promise.</p>
                </div>
                <div class="col-md-4 mt-md-0 mt-5 bottom-grid">
                    <span class="fa clr2 fa fa-money"></span>
                    <p class="number">2</p>
                    <h4>Loan Amount Starting from ₱1000.00 up to ₱50,000.00</h4>
                    <p class="mt-4">Get instant paperless personal loan of upto ₱50,000.00...</p>
                </div>
                <div class="col-md-4 mt-md-0 mt-5 bottom-grid">
                    <span class="fa clr3 fa-credit-card"></span>
                    <p class="number">3</p>
                    <h4>Repayable in a Tenure of 1 month to 4 months</h4>
                    <p class="mt-4">PerksFinance offers personal loans over flexible tenors of 1 month to 4 months.</p>
                </div>
                <span class="border-line"></span>
            </div>
        </div>
    </section>
    <!-- //banner bottom -->
    <!-- /features -->
    <section class="about py-md-5 py-5" id="loans">
        <div class="container py-md-5">
            <div class="feature-grids row mt-3">
                <div class="col-lg-6 ab-content-img">
                <img class="img-fluid image1" style="border-radius: 2%;"src="https://images.unsplash.com/photo-1608521704450-893e5ac294fc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="" >
                </div>
                <!--title-w3ls my-3-->
                <div class="col-lg-6 ab-content-inf pl-lg-5">
                    <h3 class="heading1">Get Instant Loan at Perks Finance</h3>
                    <p style="text-align: justify;">We are not yet another online offer comparison site. While we do give you the most exhaustive range of options, we do the last mile and get you the loan also. We strongly believe that financial services is not like an ecommerce business where products are standardized and hence the cheaper the better.</p>
                    <p style="text-align: justify;">Every borrower has a unique financial position and requirement. PERKSFinance can help you consolidate all your loans into one to increase your eligibility. Try Applying for a higher Loan Amount as most bank reduce interest rates as loan amount increases.</p>
            </div>
        </div>
    </section>
    <!-- //features -->

    <!-- products -->
    <section class="products py-5" id="stats">
        <div class="container py-lg-5 py-3">
            <h3 class="heading2">Number of Loan Applications</h3>
            <div class="row products_grids text-center mt-5">

<?php
		$sql = "SELECT * FROM  ltyp_loantypes WHERE ltyp_status	='Active' order by RAND() LIMIT 6";
		$qsql = mysqli_query($con,$sql);
		while($rs = mysqli_fetch_array($qsql))
		{
$sqlloan = "SELECT count(*) FROM `lacc_loanaccount` WHERE ltyp_id='$rs[0]'";
$qsqlloan = mysqli_query($con,$sqlloan);
$rsloan = mysqli_fetch_array($qsqlloan);
?>	
<div class="col-lg-2 col-2 grid4">
	<div class="prodct1">
		<a href="#">
			<div class="icon-w3ls f1">
				<span class="fa fa fa-users"></span>
			</div>
			<h4 class="mt-2"><?php echo $rs['ltyp_loantype']; ?></h4>
			<h4 class="mt-2"> <strong><?php echo $rsloan[0]; ?></strong></h4>
		</a>
	</div>
</div>
<?php
		}
?>
            </div>
        </div>
    </section>
    <!-- //products -->
<section class="content-info py-5">
	<div class="container py-md-5">

		<h3 class="heading3">LOAN TYPES</h3>
		<div class="row">
		<?php
		$sql = "SELECT * FROM  ltyp_loantypes WHERE ltyp_status	='Active'";
		$qsql = mysqli_query($con,$sql);
		while($rs = mysqli_fetch_array($qsql))
		{
			if($rs['ltyp_icon'] == "")
			{
				$icon = "images/noimage.png";
			}
			else if(file_exists("imgloantype/".$rs['ltyp_icon']))
			{
				$icon = "imgloantype/".$rs['ltyp_icon'];
			}
			else
			{
				$icon = "images/noimage.png";
			}
		?>
			<div class="col-lg-4 col-md-6 mt-4">
				<div class="thumbnail card">
					<div class="position-relative">
						<img src="<?php echo $icon; ?>" style="height: 250px;width: 100%;" class="img-fluid" alt="">
					</div>
					<div class="blog-info card-body">
						<h4 class=""><?php echo $rs['ltyp_loantype']; ?></h4>
						<p class="mt-2">
						<b>- Loan Amount -</b> <?php echo moneyFormatPhil($rs['min_loanamt']); ?> - <?php echo moneyFormatPhil($rs['max_loanamt']); ?><br>
						<b>- Maximum Month -</b>  <?php echo $rs['ltyp_maxmonth']; ?> months<br>
						<b>- Interest rate -</b> <?php echo $rs['ltyp_interestperc']; ?>% 
						</p>
					</div>
				</div>
			</div>
		<?php
		}
		?>
		</div>
	</div>
</section>
<!-- //banner-botttom -->


    <!--mid -->
    <section class="mid-w3-pvt-content">
        <div class="overlay-inner py-5" style ="background: url(images/bg5.jpg) no-repeat center;">
            <div class="container py-lg-5 py-md-3">
                <div class="test-info text-right ml-auto">
                    <h3 class="heading5">HELPING YOUR BUSINESS REACH</h3>
                    <h4 class="tittle">ITS FULL POTENTIAL</h4>
                    <p class="p4">Are you a self-employed or salaried individual trying to meet both ends? Have you given a thought about personal loan option? When there is an unusual expense like child's marriage, renovation of your home or furnishing, children’s higher education, family holiday, or any other dream to be turned into reality, make use of the personal loans...</p>
                    <div class="text-right mt-5">
                        <a href="index.php" class="btn mr-2">Read More</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //mid-->

    <!-- /services -->
    <div class="welcome py-5">
        <div class="container py-xl-5 py-lg-3" id="services">
            <div class="row">
                <div class="col-lg-5 welcome-left">
                    <h4>What We Provide</h4>
                    <h3 class="heading4">Our Services</h3>
                    <ul class="tic-info list-unstyled mt-5">
                        <li>
                            <span class="fa fa-check-square-o mr-2"></span> All Types of Loans available
                        </li>
						
                        <li>

                            <span class="fa fa-check-square-o mr-2"></span> Paperless Loan Application
                        </li>

                        <li>

                            <span class="fa fa-check-square-o mr-2"></span> Repayable in 1 to 4 Months

                        </li>
                        <li>

                            <span class="fa fa-check-square-o mr-2"></span>Loan Interest starts from 10%

                        </li>
                        <li>
                            <span class="fa fa-check-square-o mr-2"></span> Easy Online Payment
                        </li>
                    </ul>
                </div>
<?php
$i=0;
$sqlltyp_loantypes = "SELECT * FROM ltyp_loantypes ORDER BY RAND() LIMIT 6";
$qsqlltyp_loantypes= mysqli_query($con,$sqlltyp_loantypes);
while($rsltyp_loantypes = mysqli_fetch_array($qsqlltyp_loantypes))
{
	$ltyp_loantype[$i] = $rsltyp_loantypes['ltyp_loantype'];
	$ltyp_interestperc[$i] = $rsltyp_loantypes['ltyp_interestperc'];
	$i++;
}
?>
                <div class="col-lg-7 welcome-right text-center mt-lg-0 mt-5">
                    <div class="row">
                        <div class="col-sm-4 service-1-w3pvt serve-gd1">
                            <div class="serve-grid mt-4">
                                <p class="mt-2" style="color: red;"><?php echo $ltyp_loantype[5]; ?> </p>
                                <p class="mt-2"><?php echo $ltyp_interestperc[5]; ?>%</p>
                            </div>
                        </div>
                        <div class="col-sm-4 service-1-w3pvt serve-gd2">
                            <div class="serve-grid mt-4">
                                <p class="mt-2" style="color: red;"><?php echo $ltyp_loantype[0]; ?> </p>
                                <p class="mt-2"><?php echo $ltyp_interestperc[0]; ?>%</p>
                            </div>
                            <div class="serve-grid mt-4">
                                <p class="mt-2" style="color: red;"><?php echo $ltyp_loantype[1]; ?> </p>
                                <p class="mt-2"><?php echo $ltyp_interestperc[1]; ?>%</p>
                            </div>
                        </div>
                        <div class="col-sm-4 service-1-w3pvt serve-gd3">
                            <div class="serve-grid mt-4">
                                <p class="mt-2" style="color: red;"><?php echo $ltyp_loantype[2]; ?> </p>
                                <p class="mt-2"><?php echo $ltyp_interestperc[2]; ?>%</p>
                            </div>
                            <div class="serve-grid mt-4">
                                <p class="text-li mt-2" style="color: red;"><?php echo $ltyp_loantype[3]; ?>
                                <p class="mt-2"><?php echo $ltyp_interestperc[3]; ?>%</p> </p>
                            </div>
                            <div class="serve-grid mt-4">
                                <p class="mt-2" style="color: red;"><?php echo $ltyp_loantype[4]; ?> </p>
                                <p class="mt-2"><?php echo $ltyp_interestperc[4]; ?>%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <?php
include("footer.php");
?>