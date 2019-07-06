
<?php include 'head/navbar.php' ?>

<h2> Delete Your Flight </h2>

<?php if ($this->session->flashdata('msg')){

  echo $this->session->flashdata('msg');

} 
?>

<body>
<?php echo validation_errors(); ?>
<?php echo form_open('Ranindu/flightdlt'); ?>


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
.button3 {background-color: #f44336;} /* Red */ 

</style>

      <div class="container">
          <div class="form-group">
              <span class="form-label">NIC Number</span>
              <input class="form-control" type="text" placeholder="your nic", name="nic">
          </div>
      </div>

      <div class="form-btn" color>
        <button class="button button3">DELETE FLIGHT</button>
      </div>
     
      <div class="w3-display-container mySlides">
      <img src="https://jetsanza.com/js-content/uploads/2016/02/o-BUYING-PLANE-TICKET-facebook.jpg" style="width:100%">
      <div class="w3-display-topright w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">Blorum pipsum</span>
      </div>
    

 <?php echo form_close(); ?>
  

</body>