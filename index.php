<?php include('includes/header.php') ?>



<div class="w3-container" id="container">
 <div class="card" id="card-1">
 <div class="w3-container">
   <h1>Create Shipment</h1>



   <form class="main" action="create_Shipment.php" method="post">
     <label for="surname">Surname:</label> 
     <input class="w3-input w3-border w3-round-large" type="text" name="surname" placeholder="Your surname here"> <br>

     <label for="OtherNames">Other Names:</label> 
     <input class="w3-input w3-border w3-round-large" type="text" name="OtherNames" placeholder="Add your other names" required> <br>

     <label for="PhoneNo,">Phone No:</label> 
     <input class="w3-input w3-border w3-round-large" type="text" name="PhoneNo" placeholder="Sender's Phone number" required> <br>

     <label for="Address">Pick-Up Address:</label>
     <input class="w3-input w3-border w3-round-large" type="text" name="Address" required> <br>

     <label for="RcvName">Receiver's Name(who are you sending it to?):</label>
     <input class="w3-input w3-border w3-round-large" type="text" name="RcvName" required> <br>

     <label for="DlvAddress">Delivery Address:</label>
     <input class="w3-input w3-border w3-round-large" type="text" name="DlvAddress" required> <br>

     <label for="RcvPhone">Reciever's Phone No:</label> 
     <input class="w3-input w3-border w3-round-large" type="text" name="RcvPhone" placeholder="Input Receiver's Phone No. here"> <br>

     <label for="ItemDesc">Item Description:</label>
     <textarea class="w3-input w3-border w3-round-large"  name="ItemDesc" placeholder="Please provide a brief description of your pick-up item" required></textarea> <br>

     <input type="submit"  class="w3-button w3-red w3-border w3-border-red w3-round-large" value="Create">
   </form>

</div>

 </div>
 <div class="card" id="card-2">
 <div class="w3-container">
   <h1>Track Your Shipment</h1>
   <form action="">
     <label for="Track">Shipment Code:</label>
     <input class="w3-input w3-border w3-round-large" type="text" placeholder="Please input your shipment code" required> <br>

     <button class="w3-button w3-red w3-border w3-border-red w3-round-large">Track</button>
   </form>
</div>

 </div>
      </div>
        
      
    
  </div>
</div> 

<div class="contactForm">
<form action="/action_page.php" class="w3-container w3-card-4 w3-light-grey w3-text-red ">
<h2 class="w3-center">Contact Us</h2>
 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="first" type="text" placeholder="First Name">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="last" type="text" placeholder="Last Name">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="email" type="text" placeholder="Email">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="phone" type="text" placeholder="Phone">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="message" type="text" placeholder="Message">
    </div>
</div>

<button class="w3-button w3-block w3-section w3-red w3-ripple w3-padding">Send</button>

</form>
</div>
</body>

<?php include ('includes/footer.php') ?>
</html>