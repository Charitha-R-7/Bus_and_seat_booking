
<html>
<head>
<style>
*{margin:0px;padding:0px;box-sizing:border-box;}
body{background-color:lightblue;}
nav{width:100%;background-color:white;height:66px;line height:75px;}
 nav h1{font-size:32px;font-family:san-seriff;text-transform:uppercase;float:left;line-height:75px;background-image: linear-gradient(to right, blue 0%, #ff00bf 100%);
color: transparent;-webkit-background-clip: text;position:absolute;left:18px;}
nav ul{float:right}
nav ul li{float:left;list-style:none;position:relative;font-size:24px;}
nav ul li a{text-decoration:none;font-family:san-seriff;color:brown;font-size:20px;padding:24px 80px; display:block;}
nav ul li a:hover{background-color:#f0f0f0;}
#seatContainer {
  width: 600px;
  margin: 0 auto;
}

.row {
  display: flex;
  justify-content: space-around;
  margin-bottom: 10px;
}

.seat {
  width: 50px;
  height: 50px;
  border: 1px solid black;
  display: inline-block;
  text-align: center;
  line-height: 50px;
  background-color:white;
}

.driver {
  background-color: blue;
  color: white;
}

.empty {
  visibility: hidden;
}


.form-group {
  margin-bottom: 10px;
  font-size:19px;padding:10px;width:50%;
}

label {
  display: block;
}

 input[type="text"],
 input[type="number"] {
 width: 100%;
   padding: 5px;
   box-sizing: border-box;
   margin-top: 5px;}

button {
  background-color:lavender;padding:10px 25px;border-radius:6px;position:absolute;left:20px;
}

button:hover {
  background-color: orange;
}
#bookingForm{position:absolute;left:20px;width:50%;}
#seatContainer{position:absolute;top:210px;left:488px}
#c1{font-size: 24px;font-family:san-seriff;padding:20px;color:red;}
</style></head>
<body>
<nav>
<h1>VOYAGE VUE</h1>
<ul><li><a href="logout.php"><b>LOGOUT</b></a></li>
</ul></nav><br><br>
<p id="c1"><b>Book Your Bus Seats Here !</b></p>
<form id="bookingForm">
  <div class="form-group">
    <label for="seatNumber"><b>Seat Number:</b></label>
    <input type="number" id="seatNumber" name="seatNumber" min="1" max="30" required>
  </div>
  <div class="form-group">
    <label for="name"><b>Name:</b></label>
    <input type="text" id="name" name="name" required>
  </div>
  <div class="form-group">
    <label for="gender"><b>Gender:</b></label>
    <input type="text" id="gender" name="gender" required>
  </div>
  <div class="form-group">
    <label for="phoneNumber"><b>Phone Number:</b></label>
    <input type="text" id="phoneNumber" name="phoneNumber" required>
  </div>
  <button type="submit"><b>Book Seat</b></button>
</form>

<div id="seatContainer">
  <div class="row">
    <div class="seat driver">Driver</div>
    <?php
    // PHP loop to generate seat boxes
    for ($i = 1; $i <= 10; $i++) {
      echo '<div class="seat" id="seat'.$i.'" onclick="selectSeat('.$i.')">'.$i.'</div>';
    }
    ?>
  </div>
  
  <div class="row">
    <div class="seat empty"></div>
    <?php
    for ($i = 11; $i <= 20; $i++) {
      echo '<div class="seat" id="seat'.$i.'" onclick="selectSeat('.$i.')">'.$i.'</div>';
    }
    ?>
  </div>
  <br>
  <div class="row">
    <div class="seat empty"></div>
    <?php
    for ($i = 21; $i <= 30; $i++) {
      echo '<div class="seat" id="seat'.$i.'" onclick="selectSeat('.$i.')">'.$i.'</div>';
    }
    ?>
  </div>
</div>

<script>
function selectSeat(seatNumber) {
  var seat = document.getElementById('seat'+seatNumber);
  var seatInput = document.getElementById('seatNumber');
  seatInput.value = seatNumber;
}

document.getElementById('bookingForm').addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent form submission
  var seatNumber = document.getElementById('seatNumber').value;
  var seat = document.getElementById('seat'+seatNumber);
  
  if (seat.classList.contains('booked')) {
    alert('Seat ' + seatNumber + ' is already booked. Please choose another seat.');
  } else {
    seat.classList.add('booked');
	seat.style.backgroundColor = 'lightgreen';
    // Here you would typically send the booking information to the server using AJAX or store it in an array
    alert('Seat ' + seatNumber + ' booked successfully!');
  }
});
</script>
</body>
</html>