<?php
	include 'includes/header.php';
	include '../config/database.php';
    if(count($_GET)>0){
    	$empid=$_GET['empid'];
		$staff="select * from Staff as s, Address as a, Qualification as q where s.StaffID=$empid and s.Address_ID=a.Address_ID and q.StaffID=s.StaffID";
		$db_staff =mysqli_query($conn, $staff);
		$row_staff=mysqli_fetch_array($db_staff);
	}
    if(isset($_GET['approve'])){
    	$query="UPDATE `Staff` SET `status`=1 WHERE StaffID=$empid";
    	$db_query =mysqli_query($conn, $query);
	    $message="Approved Successfully !";
	}
   
?>
<section style="padding-top:100px;">
    <div class="container">
		<h3 align="center" style="color:orange;">Search Employee</h3>
		<form action="" method="get">
		<p align="center"> <select class="form-control" name="empid" style="width:400px;" required>
			<option value="">Select Employee</option>
			<?php
			 						$employee="select * from Staff";
				                	$db_employee =mysqli_query($conn, $employee);
                                    while($row_employee=mysqli_fetch_array($db_employee)){
                                        ?>
                                    
                                    <option value="<?php echo $row_employee['StaffID'];?>" <?php if($empid==$row_employee['StaffID']) echo "selected";?> ><?php echo $row_employee['Title']."."; echo $row_employee['First_Name']." ";  echo $row_employee['Last_Name'];?></option>
                                    <?php
                                    
                                    }
                                    ?>
			</select></p><p align="center"><button class="btn btn-success btn-sm">Search</button></p>
			</form>
		<?php
		if(isset($message)){
			?>
		<h3 align="center" style="color:green;"><?php echo $message;?></h3>
			<?php
		}
		?>
             <?php
		if(count($_GET)>0){
			?>
			<div class="card">
				  <div class="card-header">Employee Details</div>
				   <div class="card-body">
					   <!--Row 1-->
					   <div class="row">
						   <div class="col-md-6">
							   <div class="row">
								   <div class="col-md-4">
									   Name
								   </div>
								   <div class="col-md-1">
									   :
								   </div>
								   <div class="col-md-6">
									   <?php echo $row_staff['Title'];?> <?php echo $row_staff['First_Name'];?> <?php echo $row_staff['Last_Name'];?>
								   </div>
							   </div>
						   </div>
						   <div class="col-md-6">
							   <div class="row">
								   <div class="col-md-4">
									   
								   </div>
								   <div class="col-md-1">
									   
								   </div>
								   <div class="col-md-6">
									  
								   </div>
							   </div>
						   </div>
					   </div>
					   <!--Row 2--><br>
					   <div class="row">
						   <div class="col-md-6">
							   <div class="row">
								   <div class="col-md-4">
									   Email ID
								   </div>
								   <div class="col-md-1">
									   :
								   </div>
								   <div class="col-md-6">
									   <?php echo $row_staff['EmailId'];?>
								   </div>
							   </div>
						   </div>
						   <div class="col-md-6">
							   <div class="row">
								   <div class="col-md-4">
									   Phone
								   </div>
								   <div class="col-md-1">
									   :
								   </div>
								   <div class="col-md-6">
									   <?php echo $row_staff['PhoneNo'];?>
								   </div>
							   </div>
						   </div>
					   </div><br>
					  <h3>Address Details</h3>
					   <!--Row 2-->
					   <div class="row">
						   <div class="col-md-6">
							   <div class="row">
								   <div class="col-md-4">
									   Building Name
								   </div>
								   <div class="col-md-1">
									   :
								   </div>
								   <div class="col-md-6">
									   <?php echo $row_staff['Building_Name'];?>
								   </div>
							   </div>
						   </div>
						   <div class="col-md-6">
							   <div class="row">
								   <div class="col-md-4">
									   Phone
								   </div>
								   <div class="col-md-1">
									   :
								   </div>
								   <div class="col-md-6">
									   <?php echo $row_staff['Building_Number'];?>
								   </div>
							   </div>
						   </div>
					   </div>
					   <!--Row 3--><br>
					   <div class="row">
						   <div class="col-md-6">
							   <div class="row">
								   <div class="col-md-4">
									   Street Name
								   </div>
								   <div class="col-md-1">
									   :
								   </div>
								   <div class="col-md-6">
									   <?php echo $row_staff['Street_Name'];?>
								   </div>
							   </div>
						   </div>
						   <div class="col-md-6">
							   <div class="row">
								   <div class="col-md-4">
									   City
								   </div>
								   <div class="col-md-1">
									   :
								   </div>
								   <div class="col-md-6">
									   <?php echo $row_staff['City'];?>
								   </div>
							   </div>
						   </div>
					   </div>
					   <!--Row 4--><br>
					   <div class="row">
						   <div class="col-md-6">
							   <div class="row">
								   <div class="col-md-4">
									   State
								   </div>
								   <div class="col-md-1">
									   :
								   </div>
								   <div class="col-md-6">
									   <?php echo $row_staff['State'];?>
								   </div>
							   </div>
						   </div>
						   <div class="col-md-6">
							   <div class="row">
								   <div class="col-md-4">
									   ZIP Code
								   </div>
								   <div class="col-md-1">
									   :
								   </div>
								   <div class="col-md-6">
									   <?php echo $row_staff['ZIPCode'];?>
								   </div>
							   </div>
						   </div>
					   </div>
					   <!--Row 5--><br>
					   <div class="row">
						   <div class="col-md-6">
							   <div class="row">
								   <div class="col-md-4">
									   	Country
								   </div>
								   <div class="col-md-1">
									   :
								   </div>
								   <div class="col-md-6">
									   <?php echo $row_staff['Country'];?>
								   </div>
							   </div>
						   </div>
						  
					   </div>
					   <br>
					  <h3>Qualification</h3>
					   <!--Row 2-->
					   <div class="row">
						   <div class="col-md-6">
							   <div class="row">
								   <div class="col-md-4">
									   Name of Qualification
								   </div>
								   <div class="col-md-1">
									   :
								   </div>
								   <div class="col-md-6">
									   <?php echo $row_staff['NameOfQualification'];?>
								   </div>
							   </div>
						   </div>
						   <div class="col-md-6">
							   <div class="row">
								   <div class="col-md-4">
									   Subject Area
								   </div>
								   <div class="col-md-1">
									   :
								   </div>
								   <div class="col-md-6">
									   <?php echo $row_staff['Subject_Area'];?>
								   </div>
							   </div>
						   </div>
					   </div>
					   <!--Row 2--><br>
					   <div class="row">
						   <div class="col-md-6">
							   <div class="row">
								   <div class="col-md-4">
									   Institute Name
								   </div>
								   <div class="col-md-1">
									   :
								   </div>
								   <div class="col-md-6">
									   <?php echo $row_staff['Institution_Name'];?>
								   </div>
							   </div>
						   </div>
						   <div class="col-md-6">
							   <div class="row">
								   <div class="col-md-4">
									   Institute Country
								   </div>
								   <div class="col-md-1">
									   :
								   </div>
								   <div class="col-md-6">
									   <?php echo $row_staff['Institution_Country'];?>
								   </div>
							   </div>
						   </div>
					   </div>
					   <!--Row 2--><br>
					   <div class="row">
						   <div class="col-md-6">
							   <div class="row">
								   <div class="col-md-4">
									   Full Name Of Award
								   </div>
								   <div class="col-md-1">
									   :
								   </div>
								   <div class="col-md-6">
									   <?php echo $row_staff['Full_Name_Of_Award'];?>
								   </div>
							   </div>
						   </div>
						   <div class="col-md-6">
							   <div class="row">
								   <div class="col-md-4">
									  Awarded Year
								   </div>
								   <div class="col-md-1">
									   :
								   </div>
								   <div class="col-md-6">
									   <?php echo $row_staff['Awarded_Year'];?>
								   </div>
							   </div>
						   </div>
					   </div>
					   <?php
			          if($_SESSION[is_admin]==1){
						  ?>
					   <hr>
					   <br>
					   <?php
						  if($row_staff['status']==1){
							  ?>
						<p align="center"><button type="submit" class="btn btn-success btn-sm" name="approved">Approved</button></p>
					   <?php
						  }
						  else{
						  ?>
					   <form action="" method="get">
						    <input type="hidden" name="empid" value="<?php echo $row_staff['StaffID'];?>">
					   		<p align="center"><button type="submit" class="btn btn-warning btn-sm" name="approve">Approve</button></p>
						</form>
                    <?php
						  }
					  }
			        ?>
					   
					   
					   
				   </div>
				  
			</div>
		<?php
		}
		?>
        
    </div>
</section>
<?php
	include 'includes/footer.php';
?>
 