<?php
include("header.php");
if(isset($_POST['submit']))
{
	$ltyp_icon = rand() . $_FILES['ltyp_icon']['name'];
	move_uploaded_file($_FILES['ltyp_icon']['tmp_name'],"imgloantype/".$ltyp_icon);
	if(isset($_GET['editid']))
	{
		$sql ="UPDATE  st_state SET st_state='$_POST[st_state]', st_note='$_POST[st_note]',st_status='$_POST[st_status]'  WHERE st_id ='$_GET[editid]'";
		$qsql = mysqli_query($con,$sql);
			echo mysqli_error($con);
		if(mysqli_affected_rows($con) == 1)
		{
			echo "<script>alert('State record updated successfully..');</script>";
		}
	}
	else
	{
		$sql ="INSERT INTO st_state(st_state,st_note,st_status) values('$_POST[st_state]','$_POST[st_note]','$_POST[st_status]')";
		$qsql = mysqli_query($con,$sql);
			echo mysqli_error($con);
		if(mysqli_affected_rows($con) == 1)
		{
			echo "<script>alert('State record inserted successfully..');</script>";
			echo "<script>window.location='state.php';</script>";
		}
	}
}
?>
<?php
if(isset($_GET['editid']))
{
	$sqledit = "SELECT * FROM st_state WHERE st_id='$_GET[editid]'";
	$qsqledit = mysqli_query($con,$sqledit);
	$rsedit = mysqli_fetch_array($qsqledit);
}
?>
    <section class="content-info py-5">
        <div class="container py-md-5">

<form method="post" action="" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-2 col-md-2 mt-2"></div>
                <div class="col-lg-8 col-md-8 mt-8">
                    <div class="thumbnail card">
                        <div class="blog-info card-body">
                            <center><h3 class="">State</h3></center>
                            <p class="mt-2">


<div class="row">
	<div class="col-md-5" style="padding-top: 4px;">
		State
	</div>
	<div class="col-md-7">
		<input type="text" name="st_state" id="st_state" class="form-control" value="<?php echo $rsedit['st_state']; ?>">
	</div>
</div>	
<br>

<div class="row">
	<div class="col-md-5" style="padding-top: 4px;">
		Any Note
	</div>
	<div class="col-md-7">
		<textarea name="st_note" id="st_note" class="form-control" ><?php echo $rsedit['st_note']; ?></textarea>
	</div>
</div>	
<br>

<div class="row">
	<div class="col-md-5" style="padding-top: 4px;">
		Status
	</div>
	<div class="col-md-7">
		<select name="st_status" id="st_status" class="form-control">
			<option value="">Select Status</option>
			<?php
			$arr = array("Active","Inactive");
			foreach($arr as $val)
			{
				if($val == $rsedit['st_status']){ echo "<option value='$val' selected>$val</option>"; } else { echo "<option value='$val' >$val</option>"; }
			}
			?>
		</select>
	</div>
</div>				
<br>
			
							</p>
<div class="read-icon">
	<center><input type="submit" name="submit" id="submit" class="btn read" value="submit"></a></center>
</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 mt-2"></div>
			</div>
</form>			
			
        </div>
    </section>
    <!-- //banner-botttom -->
    <?php
include("footer.php");
?>