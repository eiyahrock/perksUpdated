<?php
include("header.php");
if(!isset($_SESSION['cst_id']))
{
		echo "<script>window.location='customerlogin.php';</script>";
}
?>
    </div>
<?php
$sqlcibil = "SELECT * FROM creditscore where cst_id='$_SESSION[cst_id]'";
$qsqlcibil = mysqli_query($con,$sqlcibil);
if(mysqli_num_rows($qsqlcibil) >= 1)
{
?>
<section class="news-letter-w3-pvt">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
<a href="creditscorechart.php"><img src="images/creditscore.jpg" style="height: 150px;width: 100%;" class="img-fluid" alt=""></a>
			</div>
		</div>
	</div>
</section>
<?php
}
?>
<!-- //banner-botttom -->
<section class="content-info">
	<div class="container py-md-5">

		<h3 class="heading3">Loan Types</h3>
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
						<b>- Interest rate -</b> <?php echo $rs['ltyp_interestperc']; ?>% <br>
						<b>- Delay Payment Charges -</b> <?php echo $rsdelaypaymentpenaltycharge['dpmt_charge']; ?>% 
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


<!-- /news-letter -->
<section class="news-letter-w3-pvt">
	<div class="container contact-form mx-auto text-left">
		<h3 class="heading5" style="text-align: left;">Loan Processing Fee</h3>
		<form method="post" action="#" class="w3pvt-frm">
			<div class="row subscribe-sec">
				<p class="news-para col-lg-12">
	<table  class="table table-striped table-bordered">
		<THEAD>
			<tr>
				<th>From Amount</th>
				<th>To Amount</th>
				<th>Processing fee type</th>
				<th>Loan Processing charge</th>
			</tr>
		</THEAD>
		<tbody>
			<?php
			$sql = "SELECT * FROM  lpf_loanprocessingfee";
			$qsql = mysqli_query($con,$sql);
			while($rs = mysqli_fetch_array($qsql))
			{
				echo "<tr>
						<td>" . moneyFormatPhil($rs['lpf_famt'])  ."</td>
						<td>" . moneyFormatPhil($rs['lpf_tamt'])  ."</td>
						<td>$rs[lpf_amttype]</td>
						<td>";
						if($rs['lpf_amttype'] == "Percentage")
						{
							echo $rs['lpf_amt'] . "%";
						}
						if($rs['lpf_amttype'] == "Flat")
						{
							echo moneyFormatPhil($rs['lpf_amt']) ;
						}
				echo "</td>
					</tr>";
			}
			?>
		</tbody>
	</table>
				</p>
			</div>

		</form>
	</div>
</section>
<!-- //news-letter -->

<?php
include("footer.php");
?>