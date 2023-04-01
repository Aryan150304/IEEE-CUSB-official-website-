<?php

// Define your database connection parameters
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$dbname = "ieee";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Get the form data
  $fullname = $_POST["fullname"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  
  // Insert the data into the database
  $sql = "INSERT INTO contact (fullname, phone, email, message) VALUES ('$fullname', '$phone', '$email', '$message')";
  
  if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
    echo '<script>alert("Your response has been recorded.")</script>';
    header("Location: response.html");

  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  // Close the database connection
  $conn->close();
}

?>

<section class="contact">
  <h1 class="contactHead">Get in Touch <span class="contactSpan">with us</span> </h1>
  <p class="para contactPara">Fill out the form to contact us. We'll come back to you as soon as possible..</p>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="searchBoxes">
      <div class="Box12 ">
        <input type="text" name="fullname" class="box upbox box1Text"  placeholder="Full Name">
        <input type="text" name="phone" class="box upbox box2Text" placeholder="Phone Number">
      </div>
      <div class="Box3">
        <input type="text" name="email" class="box box3text"  placeholder="E-mail">
      </div>
      <div class="Box4">
        <input type="text" name="message" class="box box4Text"  placeholder="Message">
      </div>
      <button class="head-button rounded-4 contactButton" type="submit">contact us <span class="material-symbols-outlined">
        send
        </span></button>
        
    </div>
  </form>

</section>