<?php
include("header.php");
if(isset($_POST['submit']))  
{
	$cst_photo = rand() . $_FILES['cst_photo']['name'];
	move_uploaded_file($_FILES['cst_photo']['tmp_name'],"filecst_photo/".$cst_photo);
	$cst_idproof  = rand() . $_FILES['cst_idproof']['name'];
	move_uploaded_file($_FILES['cst_idproof']['tmp_name'],"filecst_idproof/".$cst_idproof);
	$cst_addressproof =rand() .  $_FILES['cst_addressproof']['name'];
	move_uploaded_file($_FILES['cst_addressproof']['tmp_name'],"filecst_addressproof/".$cst_addressproof);
	$bankdetail = serialize(array($_POST['bank_bankname'],$_POST['bank_accnumber'],$_POST['bank_ifsc']));
		$sql ="UPDATE  cst_customer SET comp_name='$_POST[comp_name]',cst_fname='$_POST[cst_fname]',cst_mname='$_POST[cst_mname]',cst_lname='$_POST[cst_lname]',cst_dob='$_POST[cst_dob]',cst_gender='$_POST[cst_gender]' ,cst_address='$_POST[cst_address]',cst_state='$_POST[cst_state]' ,cst_contact='$_POST[cst_contact]',cst_email='$_POST[cst_email]',cst_bankdetail='$bankdetail',cst_jobdetail='$_POST[cst_jobdetail]' ,cst_note='$_POST[cst_note]',cst_pan='$_POST[cst_pan]'";
		if($_FILES['cst_photo']['name'] != "")
		{
		$sql = $sql . ",cst_photo='$cst_photo'";
		}
		if($_FILES['cst_idproof']['name'] != "")
		{
		$sql = $sql . ",cst_idproof='$cst_idproof' ";
		}		
		if($_FILES['cst_addressproof']['name'] != "")
		{
		$sql = $sql . ",cst_addressproof='$cst_addressproof' "; 
		}
		$sql = $sql . ",cst_status='Active'   WHERE cst_id='$_SESSION[cst_id]'";
		$qsql = mysqli_query($con,$sql);
		echo mysqli_error($con);
		if(mysqli_affected_rows($con) == 1)
		{
			echo "<script>alert('Customer Profile updated successfully..');</script>";
			echo "<script>window.location='customerprofile.php';</script>";
		}
}
 $sqlcustomer = "SELECT * FROM  cst_customer WHERE cst_id='$_SESSION[cst_id]'";
$qsqlcustomer = mysqli_query($con,$sqlcustomer);
$rsedit = mysqli_fetch_array($qsqlcustomer);
//echo print_r($rsedit);
$cst_bankdetail = unserialize($rsedit['cst_bankdetail']);
?>
    <section class="content-info py-5">
        <div class="container py-md-5">

<form method="post" action="" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-12 col-md-12 mt-12">
                    <div class="thumbnail card">
                        <div class="blog-info card-body">
<center><h3 class="">Customer Profile</h3></center>
                            <p class="mt-2">

<div class="row">
	<div class="col-md-3" style="padding-top: 4px;">
		Account Type
	</div>
	<div class="col-md-9">
		<select  name="cst_type" id="cst_type" class="form-control"  onchange="loadregtype(this.value)">
			<?php
			$arr = array("Customer","Company");
			foreach($arr as $val)
			{
				if($val == $rsedit['cst_type'])
				{
				echo "<option value='$val' selected >$val</option>";
				}
			}
			?>
		</select>
	</div>
</div>	
<br>


<div id="divregtype">
<?php
if($rsedit['cst_type'] == "Company")
{
?>
<div class="row"><div class="col-md-3" style="padding-top: 4px;">Company name</div><div class="col-md-9"><input type="text" name="comp_name" id="comp_name" class="form-control" value="<?php echo $rsedit['comp_name']; ?>" ></div></div><br>
<?php
}
if($rsedit['cst_type'] == "Customer")
{
?>
<div class="row">
	<div class="col-md-3" style="padding-top: 4px;">Customer Name</div>
	<div class="col-md-9"><div class="row"><div class="col-md-4"><input type="text" name="cst_fname" id="cst_fname" class="form-control" placeholder="First Name"  value="<?php echo  $rsedit['cst_fname']; ?>" ></div><div class="col-md-4"><input type="text" name="cst_mname" id="cst_mname" class="form-control"  placeholder="Middle Name" value="<?php echo  $rsedit['cst_mname']; ?>"  ></div><div class="col-md-4"><input type="text" name="cst_lname" id="cst_lname" class="form-control"  placeholder="Last Name"  value="<?php echo  $rsedit['cst_lname']; ?>" ></div></div></div>
</div>
<br>
<div class="row">
	<div class="col-md-3" style="padding-top: 4px;">Date of Birth</div>
	<div class="col-md-9"><input type="date" name="cst_dob" id="cst_dob" class="form-control" value="<?php echo  $rsedit['cst_dob']; ?>"></div>
</div>
<br>
<div class="row">
	<div class="col-md-3" style="padding-top: 4px;">Gender</div>
	<div class="col-md-9"><select  name="cst_gender" id="cst_gender" class="form-control"><option value="">Select Gender</option><?php $arr= array("Male","Female"); foreach($arr as $val) {	 if($val == $rsedit['cst_gender'])	 {	 echo "<option value=$val selected>$val</option>";	 }	 else	 {	 echo "<option value=$val >$val</option>";	 } } ?></select>	</div>
</div>
<br>
<?php
}
?>
</div>

<div class="row">
	<div class="col-md-3" style="padding-top: 4px;"><?php echo $_SESSION['pancardno']; ?> </div>
	<div class="col-md-9"><input type="text" name="cst_pan" id="cst_pan" class="form-control" value="<?php echo  $rsedit['cst_pan']; ?>"></div>
</div>
<br>

<div class="row">
	<div class="col-md-3" style="padding-top: 4px;">
		Address
	</div>
	<div class="col-md-9">
		<textarea name="cst_address" id="cst_address" class="form-control"><?php echo  $rsedit['cst_address']; ?></textarea>
	</div>
</div>
<br>

<div class="row">
	<div class="col-md-3" style="padding-top: 4px;">
		State
	</div>
	<div class="col-md-9">

<select name="cst_state" id="cst_state" class="form-control">
	<option value="">Select State</option>
	<?php
	$sqlstate = "SELECT * FROM st_state WHERE st_status='Active'";
	$qsqlstate = mysqli_query($con,$sqlstate);
	while($rsstate = mysqli_fetch_array($qsqlstate))
	{
		if($rsstate['st_state'] == $rsedit['cst_state'])
		{
			echo "<option value='$rsstate[st_state]' selected>$rsstate[st_state]</option>";
		}
		else
		{
			echo "<option value='$rsstate[st_state]'>$rsstate[st_state]</option>";
		}
	}
	?>
</select>
	</div>
</div>
<br>

<div class="row">
	<div class="col-md-3" style="padding-top: 4px;">
		Contact No.
	</div>
	<div class="col-md-9">
		<input type="text" name="cst_contact" id="cst_contact" class="form-control" value="<?php echo  $rsedit['cst_contact']; ?>">
	</div>
</div>
<br>

<div class="row">
	<div class="col-md-3" style="padding-top: 4px;">
		Email Address.
	</div>
	<div class="col-md-9">
		<input type="email" name="cst_email" id="cst_email" class="form-control" value="<?php echo  $rsedit['cst_email']; ?>" >
	</div>
</div>
<br>


<div class="row">
	<div class="col-md-3" style="padding-top: 4px;">Bank Name</div>
	<div class="col-md-9">
	<input type="text" name="bank_bankname" id="bank_bankname" class="form-control" value="<?php echo $cst_bankdetail[0]; ?>" >
	</div>
</div>
<br>


<div class="row">
	<div class="col-md-3" style="padding-top: 4px;">Account Number</div>
	<div class="col-md-9">
	<input type="text" name="bank_accnumber" id="bank_accnumber" class="form-control" value="<?php echo $cst_bankdetail[1]; ?>" >
	</div>
</div>
<br>

<div class="row">
	<div class="col-md-3" style="padding-top: 4px;">
	<?php echo $_SESSION['ifsccode']; ?>
	</div>
	<div class="col-md-9">
	<input type="text" name="bank_ifsc" id="bank_ifsc" class="form-control" value="<?php echo $cst_bankdetail[2]; ?>" >
	</div>
</div>
<br>


<div class="row">
	<div class="col-md-3" style="padding-top: 4px;">
		Job Detail
	</div>
	<div class="col-md-9">
		<textarea name="cst_jobdetail" id="cst_jobdetail" class="form-control"><?php echo  $rsedit['cst_jobdetail']; ?></textarea>
	</div>
</div>
<br>



<div class="row">
	<div class="col-md-3" style="padding-top: 4px;">
		Upload Photo
	</div>
	<div class="col-md-9">
		<input type="file" name="cst_photo" id="cst_photo" class="form-control" accept="image/*">
		<?php
		if($rsedit['cst_photo'] == "")
		{
			echo "<img src='images/noimage.png' class='btn btn-warning' style='width: 170px; height: 200px;'>";
		}
		else if(file_exists("filecst_photo/".$rsedit['cst_photo']))
		{
			echo "<img src='filecst_photo/$rsedit[cst_photo]' class='btn btn-warning' style='width: 170px; height: 200px;'>";
		}
		?>
	</div>
</div>
<br>

<div class="row">
	<div class="col-md-3" style="padding-top: 4px;">
		Upload ID proof
	</div>
	<div class="col-md-9">
		<input type="file" name="cst_idproof" id="cst_idproof" class="form-control">
		<?php
		if(file_exists("filecst_idproof/".$rsedit['cst_idproof']))
		{
			echo "<a href='filecst_idproof/$rsedit[cst_idproof]' class='btn btn-secondary' download>Download ID Proof</a>";
		}
		?>
	</div>
</div>
<br>

<div class="row">
	<div class="col-md-3" style="padding-top: 4px;">
		Upload Address Proof
	</div>
	<div class="col-md-9">
		<input type="file" name="cst_addressproof" id="cst_addressproof" class="form-control">
		<?php
		if(file_exists("filecst_addressproof/".$rsedit['cst_addressproof']))
		{
			echo "<a href='filecst_addressproof/$rsedit[cst_addressproof]' class='btn btn-primary' download>Download Address Proof</a>";
		}
		?>
	</div>
</div>
<br>

					</p>
<div class="read-icon">
	<center><input type="submit" name="submit" class="btn read" value="Update Profile"></a></center>
</div>
                        </div>
                    </div>
                </div>
			</div>
</form>			
			
        </div>
    </section>
    <!-- //banner-botttom -->
    <?php
include("footer.php");
?>
<script>
function loadregtype(regtype)
{
	if(regtype == "Company")
	{
		document.getElementById("divregtype").innerHTML = '<div class="row"><div class="col-md-3" style="padding-top: 4px;">Company name</div><div class="col-md-9"><input type="text" name="comp_name" id="comp_name" class="form-control"></div></div><br>';
	}
	if(regtype == "Customer")
	{
		document.getElementById("divregtype").innerHTML = '<div class="row"><div class="col-md-3" style="padding-top: 4px;">Customer Name</div><div class="col-md-9"><div class="row"><div class="col-md-4"><input type="text" name="cst_fname" id="cst_fname" class="form-control" placeholder="First Name" value="<?php echo   $rsedit['cst_fname']; ?>" ></div><div class="col-md-4"><input type="text" name="cst_mname" id="cst_mname" class="form-control"  placeholder="Middle Name" value="<?php echo   $rsedit['cst_mname']; ?>"  ></div><div class="col-md-4"><input type="text" name="cst_lname" id="cst_lname" class="form-control"  placeholder="Last Name"  value="<?php  echo  $rsedit['cst_lname']; ?>"  ></div></div></div></div><br><div class="row"><div class="col-md-3" style="padding-top: 4px;">Date of Birth</div><div class="col-md-9"><input type="date" name="cst_dob" id="cst_dob" class="form-control" value=" value="<?php echo  $rsedit['cst_dob']; ?>"" ></div></div><br><div class="row"><div class="col-md-3" style="padding-top: 4px;">Gender</div><div class="col-md-9"><select  name="cst_gender" id="cst_gender" class="form-control"><option value="">Select Gender</option><?php $arr= array("Male","Female"); foreach($arr as $val) {	 if($val == $rsedit['cst_gender'])	 {	 echo "<option value=$val selected>$val</option>";	 }	 else	 {	 echo "<option value=$val >$val</option>";	 } } ?></select>	</div></div><br>';
	}
}
</script>

 