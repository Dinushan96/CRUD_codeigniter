<?php include 'head/navbar.php' ?>


<h2> Show Your Flight </h2>

<body>

<?php echo validation_errors(); ?>
<?php echo form_open('Ranindu/flightdisplay'); ?>       

<style>
.button {
  background-color: #4CAF50; 
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
.button2 {background-color: #008CBA;}  

</style>

        <div class="form-btn">
          <button class="button button2">Show Flights</button>
        </div>   

        <div class="w3-display-container mySlides">
      <img src="http://www.golflacbrome.com/wp-content/uploads/2018/03/Book-A-Flight-With-The-Houston-Texas-Airport.jpg" style="width:100%">
      <div class="w3-display-topright w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">Blorum pipsum</span>
      </div>
        
 <?php echo form_close(); 
 ?>


</body>


