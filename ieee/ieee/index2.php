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
  $uni_id = $_POST["uid"];
  $gender = $_POST["gender"];
  $age = $_POST["age"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $course = $_POST["course"];
  $years = $_POST["year"];
  $why = $_POST["address"];
  $about = $_POST["about"];
  
  // Insert the data into the database
  $sql = "INSERT INTO applications (fullname, uni_id, gender, age, email, phone, course, years, why, about) VALUES ('$fullname', '$uni_id', '$gender', '$age', '$email', '$phone', '$course', '$years', '$why', '$about')";
  
  if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
    echo '<script>alert("New record created successfully")</script>';
    header("Location: submitted.html");
    

  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  // Close the database connection
  $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joining Form</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
</head>
<body>
<section class="py-6 dark:dark:bg-gray-800 dark:dark:text-gray-50">
	<div class="grid max-w-6xl grid-cols-1 px-6 mx-auto lg:px-8 md:grid-cols-2 md:divide-x">
		<div class="py-6 md:py-0 md:px-6"  style="margin: auto 0;">
			<h1 class="text-4xl font-bold" style="font-weight: 600; font-family: 'Space Grotesk', sans-serif;">Send us your Application</h1>
			<h3 class="text-xl font-bold" style="margin-top: 5px; margin-bottom: 15px; font-family: 'Space Grotesk', sans-serif;">Fill in the form to start a conversation</h3>
			<div class="space-y-4">
				<p class="flex items-center">
					<span>Join IEEE Chandigarh Student Branch to expand your tech knowledge, connect with peers, participate in events, access resources, and boost your career prospects. Don't miss out on this opportunity!</span>
				</p>
                <p class="flex items-center">
                    <h3 class="text-xl font-bold" style="margin-top: 20px; margin-bottom: 15px; font-family: 'Space Grotesk', sans-serif;">Team Scaler got your back...</h3>
                </p>
                <p class="flex items-center">
                    <div class="teams">
                        <img src="person.svg">
                        <div class="teams2">
                            <h3>Ankit Panigrahi </h3>
                            <p>Chairperson</p>
                            <h4>ankitpanigrahi@ieee.org</h4>
                        </div>
                    </div>
                </p>
                <p class="flex items-center">
                    <div class="teams">
                        <img src="person.svg">
                        <div class="teams2">
                            <h3>Manav Verma </h3>
                            <p>Vice Chairperson</p>
                            <h4>manav.vm@ieee.org</h4>
                        </div>
                    </div>
                </p>
                <p class="flex items-center">
                    <div class="teams">
                        <img src="person.svg">
                        <div class="teams2">
                            <h3>Dipesh Ranjan </h3>
                            <p>Secretary</p>
                            <h4>dipeshranjan@ieee.org</h4>
                        </div>
                    </div>
                </p>
                <p class="flex items-center">
                    <div class="teams">
                        <img src="person.svg">
                        <div class="teams2">
                            <h3>Adarsh Pandey </h3>
                            <p>Student Coordinator</p>
                            <h4>adarshpandey@ieee.org</h4>
                        </div>
                    </div>
                </p>
			</div>
		</div>
		<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="flex flex-col py-6 space-y-6 md:py-0 md:px-6 ng-untouched ng-pristine ng-valid">
			<label class="block">
				<span class="mb-1">Full name</span>
				<input type="text" placeholder="Tarun Saroch" name="fullname" id="fullname" class="block w-full rounded-md shadow-sm focus:ring focus:ring-opacity-75 focus:ring-violet-400 dark:dark:bg-gray-800" required>
			</label>
            <div class="divvy">
                <label class="block">
                    <span class="mb-1">UID</span>
                    <input type="text" placeholder="21BCS5722" name="uid" id="uid" class="block w-full rounded-md shadow-sm focus:ring focus:ring-opacity-75 focus:ring-violet-400 dark:dark:bg-gray-800" required>
                </label>
                <label class="block ml-10">
                    <span class="mb-1">Gender</span>
                    <select id="gender" name="gender" id="gender" class="block w-full rounded-md shadow-sm focus:ring focus:ring-opacity-75 focus:ring-violet-400 dark:dark:bg-gray-800"required>
                        <option value="">Select</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </label>
                <label class="block ml-10">
                    <span class="mb-1">Age</span>
                    <input type="number" placeholder="19" name="age" id="age" class="block w-full rounded-md shadow-sm focus:ring focus:ring-opacity-75 focus:ring-violet-400 dark:dark:bg-gray-800"required>
                </label>
            </div>
            <label class="block">
				<span class="mb-1">Email address</span>
				<input type="email" placeholder="tsaroch@proton.me" name="email" id="email" class="block w-full rounded-md shadow-sm focus:ring focus:ring-opacity-75 focus:ring-violet-400 dark:dark:bg-gray-800"required>
			</label>
            <label class="block">
				<span class="mb-1">Contact number (Preferrably Whatsapp)</span>
				<input type="number" placeholder="+91 - 9055XXXXXXX" name="phone" id="phone" class="block w-full rounded-md shadow-sm focus:ring focus:ring-opacity-75 focus:ring-violet-400 dark:dark:bg-gray-800"required>
			</label>
            <div class="divvy">
                <label class="block">
                    <span class="mb-1">Course</span>
                    <input type="text" placeholder="Computer Science" name="course" id="course" class="block w-full rounded-md shadow-sm focus:ring focus:ring-opacity-75 focus:ring-violet-400 dark:dark:bg-gray-800" required>
                </label>
                <label class="block ml-10">
                    <span class="mb-1">Year</span>
                    <select name="year" id="year" class="block w-full rounded-md shadow-sm focus:ring focus:ring-opacity-75 focus:ring-violet-400 dark:dark:bg-gray-800"required>
                        <option value="">Select</option>
                        <option value="1">1st</option>
                        <option value="2">2nd</option>
                        <option value="3">3rd</option>
                        <option value="4">4th</option>
                        <option value="other">other</option>
                    </select>
                </label>
            </div>
            <label class="block">
				<span class="mb-1">Why would you like join IEEE?</span>
				<textarea rows="3" id="address" name="address" placeholder="I am joining IEEE ..." class="block w-full rounded-md focus:ring focus:ring-opacity-75 focus:ring-violet-400 dark:dark:bg-gray-800"></textarea>
			</label>
			<label class="block">
				<span class="mb-1">Describe Yourself</span>
				<textarea rows="5" id="about" name="about" placeholder="I'm Tarun Saroch ..." class="block w-full rounded-md focus:ring focus:ring-opacity-75 focus:ring-violet-400 dark:dark:bg-gray-800" required></textarea>
			</label>
			<button class="head-button rounded-4 contactButton" type="submit">Submit</button>
		</form>
	</div>
</section>
</body>
</html>
<script src="script.js"></script>