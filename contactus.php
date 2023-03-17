<?php include 'header.php';?>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="style.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="css/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">

<style>
  #contact-container{
    height: 84.2vh;
  }
</style>


<div class="container" id= "contact-container" >

<div class="form-sec" style="margin: 20px auto 20px auto;">
  <h2 style="text-align: center;">Get in touch with us!</h2>
  
 <form name="qryform" id="qryform"  method="post" action="mail.php" onsubmit="return(validate());" novalidate="novalidate">
    <div class="form-group">
      <label>Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label>Email:</label>
      <input type="email" class="form-control" id="name" placeholder="Enter Email" name="email">
    </div>
    
    <div class="form-group">
      <label>Phone No.:</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter Phone no." name="phone">
    </div>
	<div class="form-group">
      <label>Subject:</label>
      <input type="text" class="form-control" id="name" placeholder="Subject" name="subject">
    </div>
	 
	<div class="form-group">
      <label>Issues/query:</label>
      <textarea name="message" class="form-control" id="iq" placeholder="Enter your Issues/query"></textarea>
    </div>
	
    
    <button type="submit" style="background: #d4d7dd" class="btn btn-default">Submit</button>
  </form>
  </div>


</div>
<?php include 'footer.php';?>