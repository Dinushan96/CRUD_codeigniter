<?php include 'head/navbar.php' ?>

<!DOCTYPE html>
<html lang="en">
<h2> Fill Your Flight Details   </h2>
 <?php if ($this->session->flashdata('msg')){

	echo $this->session->flashdata('msg');

 } 
 ?>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button2 {background-color: #008CBA;}  /* Red */ 

</style>


<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">

					<?php echo validation_errors(); ?>
					<?php echo form_open('Ranindu/flightadd'); ?>
					
						
									<div class="form-group">
										<span class="form-label">NIC Number</span>
										<input class="form-control" type="text" placeholder="your nic", name="nic">
									</div>

						
									<div class="form-group">
										<span class="form-label">First Name</span>
										<input class="form-control" type="text" placeholder="Your First Name", name="fname">
									</div>
								
								
									<div class="form-group">
										<span class="form-label">Last Name</span>
										<input class="form-control" type="text" placeholder="Your First Name", name="lname">
									</div>
																				
							
									<div class="form-group">
										<span class="form-label">City From</span>
										<input class="form-control" type="text" placeholder="Your First Name", name="frcity">
									</div>
								
								
									<div class="form-group">
										<span class="form-label">City To</span>
										<input class="form-control" type="text" placeholder="Your First Name", name="tocity">
									</div>


									<div class="form-group">
										<span class="form-label"> Number Of Seats</span>
										<input class="form-control" type="text" placeholder="seat capacity", name="noofseats">
									</div>
								

									<div class="form-btn">
									<button class="button button2">Add My Flight</button>
									</div>
								
						
					

					<?php echo form_close(); ?>




					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
 
