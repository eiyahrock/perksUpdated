<?php
include("header.php");
if(isset($_GET['delid']))
{
	$sql = "DELETE FROM st_state WHERE st_id ='$_GET[delid]'";
	$qsql = mysqli_query($con,$sql);
		echo mysqli_error($con);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('State record deleted successfully...');</script>";
		echo "<script>window.location='viewstates.php';</script>";
	}
}
?>
    </div>

    <!-- products -->
    <section class="products py-5" id="stats">
        <div class="container">

 <h3 class="heading3"> View States</h3>
	
	<table id="example"  class="table table-striped table-bordered">
		<THEAD>
			<tr>
				<th>State</th>
				<th>Any Note</th>
				<th>Status</th>
				<th style="width: 175px;">Action</th>
			</tr>
		</THEAD>
		<tbody>
			<?php
			$sql = "SELECT * FROM  st_state";
			$qsql = mysqli_query($con,$sql);
			while($rs = mysqli_fetch_array($qsql))
			{
				echo "<tr>
						<td>$rs[st_state]</td>
						<td>$rs[st_note]</td>
						<td>$rs[st_status]</td>
						<td><a href='state.php?editid=$rs[0]' class='btn btn-info'  >Edit</a> |
						 <a href='viewstates.php?delid=$rs[0]' class='btn btn-danger' onclick='return confirmdelete()' >Delete</a>
						</td>
					</tr>";
			}
			?>
		</tbody>
	</table>
        </div>
    </section>
    <!-- //products -->


<?php
include("footer.php");
?>
<script>
function confirmdelete()
{
	if(confirm("Are you sure want to delete this record?") == true)
	{
		return true;
	}
	else
	{
		return false;
	}
}
</script>