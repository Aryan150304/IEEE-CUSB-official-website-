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
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="IEEE Chandigarh University Student Branch. As a professional society for engineers, we are dedicated to providing our members with the resources and tools they need to succeed in their careers.">
   
  
      <!-- This One for only Pricing Range Slider -->
      <link rel="stylesheet" href="/styles/nouislider.min.css">
      <link rel="stylesheet" href="https://cdn.tailgrids.com/2.0/image/assets/css/jsvectormap.min.css">
      <link rel="stylesheet" href="https://cdn.tailgrids.com/2.0/image/assets/css/tailwind.css">
      <script defer="" src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.9.5/cdn.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
      <script src="https://cdn.tailgrids.com/2.0/image/assets/js/jsvectormap.min.js"></script>
      <script src="https://cdn.tailgrids.com/2.0/image/assets/maps/world.js"></script>
      <script src="https://cdn.tailgrids.com/2.0/image/assets/maps/world-merc.js"></script>
      <script src="https://cdn.tailgrids.com/2.0/image/assets/maps/us-aea-en.js"></script>
    
  
  
  <!--FONT AWESOME-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <!--GOOGLE FONTS-->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
   <link
     href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
     rel="stylesheet">
  <!-- poppins and roboto font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
    <!-- google icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  <!-- css stylesheet -->

  <link rel="stylesheet" href="css/main-carousel.css">
  <link rel="stylesheet" href="css/testimonial.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/event.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/society-carousel.css">
  <link rel="stylesheet" href="css/rewards.css">
  <link rel="stylesheet" href="css/society2.css">
 
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/vision.css">

  <link rel="stylesheet" href="css/mediaQueries.css">
  <link rel="shortcut icon" type="image/icon" href="images/fav.png">

  <title>IEEE CUSB</title>
</head>

<body>
  <section class="circles">
      <!-- navbars -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="images/logos.png" class="logo" alt="Bootstrap" width="30" height="24">
      </a>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active hover-underline-animation" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link hover-underline-animation" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link hover-underline-animation" href="#society">Societies</a>
          </li>
          <li class="nav-item">
            <a class="nav-link hover-underline-animation" href="https://ieee-bytes.web.app/">BYTES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link hover-underline-animation" href="#event">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link hover-underline-animation" href="#faq">FAQ</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link hover-underline-animation" href="#contact">Contact Us</a>
          </li>
          <button class="btn rounded-pill ml-start none" onclick="window.location.href = '/ieee/';">JOIN US</button>
        </ul>

      </div>
      <button class="btn rounded-pill ml-start" onclick="window.location.href = '/ieee/';">JOIN US</button>
    </div>
  </nav>

  <section class="header" id="home">
    <h1 class="head-1">Welcome to</h1>
    <h1 class="head-2">IEEE Chandigarh University Student Branch</h1>
    <p class="para">As a professional society for engineers, we are dedicated to providing our members with the
      resources and tools they need to succeed in their careers.</p>
    <button class="head-button rounded-4" onclick="window.location.href = '/ieee/';">grab this opportunity</button>
    <script>

    </script>
  </section>

  <!-- image carousel -->
  <div class="carouselOuter">
    <section class="carousel">
      <input type="radio" name="position"  class="input"/>
      <input type="radio" name="position" class="input"/>
      <input type="radio" name="position" class="input" checked />
      <input type="radio" name="position" class="input" />
      <input type="radio" name="position"class="input" />
      <main id="carousel">
        <div class="item checkedPart">
          <img src="235.jpg" class="image" alt="">
        </div>
        <div class="item checkedPart">
            <img src="237.jpg" class="image" alt="">
        </div>
        <div class="item checkedPart">
          <img src="images/qr-code.png" class="carouselImage" alt="">
        </div>
        <div class="item checkedPart">
          <img src="https://edu.ieee.org/in-cu/wp-content/uploads/sites/833/2022/10/WhatsApp-Image-2022-10-13-at-00.45.50.jpg"  class="image" alt="">
        </div>
        <div class="item checkedPart">
          <img src="236.jpg" class="image" alt="">
        </div>
        <main>
    </section>
  </div>
  
  </section>


  <!-- society section -->
  <div class="contain-society" id="society">
    <div class="societymainText">
      <h1 class="head-2 socText">our societies</h1>
    </div>
  
    <section class="socities">
      <section class="swiper mySwiper ">

        <div class="swiper-wrapper">

          <div class="cardi swiper-slide">
            <div class="card__image">
              <img src="https://edu.ieee.org/in-cu/wp-content/uploads/sites/833/elementor/thumbs/wie-removebg-preview-pwavnm5r1btebzfz7x0ed3s2owp2whyjfx6elxsb44.png"  class="carouselImages" alt="ieee wie logo">
            </div>

            <div class="card__content">
              <a class="societyButton"  href="https://edu.ieee.org/in-cuchd/" target="_blank">Know more <span class="material-symbols-outlined">
                arrow_forward
                </span></a>
            </div>
          </div>

          <div class="cardi swiper-slide">
            <div class="card__image">
              <img src="https://edu.ieee.org/in-cu/wp-content/uploads/sites/833/elementor/thumbs/cs-removebg-preview-pwavkwejak3ksjdz2qr75sg4wu2wnz6gehbwp5t938.png"  class="carouselImages" alt="ieee wie logo">
            </div>

            <div class="card__content">
              <a class="societyButton" href="https://enchanting-dusk-d6359c.netlify.app/" target="_blank">Know more <span class="material-symbols-outlined">
                arrow_forward
                </span></a>
            </div>
          </div>

          <div class="cardi swiper-slide">
            <div class="card__image">
              <img src="https://edu.ieee.org/in-cu/wp-content/uploads/sites/833/elementor/thumbs/ras-removebg-preview-pwavo1762odzhqu4s3ifgzzg72mybnm8tzm6ad60ck.png"  class="carouselImages" alt="ieee wie logo">
            </div>

            <div class="card__content">
              <a class="societyButton" href="https://edu.ieee.org/in-cuchdras/">Know more <span class="material-symbols-outlined">
                arrow_forward
                </span></a>
            </div>
          </div>

          <div class="cardi swiper-slide">
            <div class="card__image">
              <img src="https://edu.ieee.org/in-cu/wp-content/uploads/sites/833/elementor/thumbs/cis-removebg-preview-pwavkas8xd9zdi9dkzes2fwj8z1gqxsmnibqnspb2c.png"  class="carouselImages" alt="ieee wie logo">
            </div>

            <div class="card__content">
              <a class="societyButton" href="https://edu.ieee.org/in-cuchdcis/">Know more <span class="material-symbols-outlined">
                arrow_forward
                </span></a>
            </div>
          </div>
          <div class="cardi swiper-slide">
            <div class="card__image">
              <img src="https://edu.ieee.org/in-cu/wp-content/uploads/sites/833/elementor/thumbs/Photnics-removebg-preview-pwavqfobjfod5vcir4w3ue5uuispzt5jtvmuftlsg4.png"  class="carouselImages" alt="ieee wie logo">
            </div>

            <div class="card__content">
              <a class="societyButton" href="https://edu.ieee.org/in-cuchdpho/">Know more <span class="material-symbols-outlined">
                arrow_forward
                </span></a>
            </div>
          </div>
          <div class="cardi swiper-slide">
            <div class="card__image">
              <img src="https://edu.ieee.org/in-cu/wp-content/uploads/sites/833/elementor/thumbs/ctsoc-removebg-preview-pwavokxs27509k1gku1lfd04o5xntaslwpbdd6cqpw.png" class="carouselImages" alt="ieee wie logo">
            </div>

            <div class="card__content">
              <a class="societyButton" href="https://edu.ieee.org/in-cuchdct/home/">Know more <span class="material-symbols-outlined">
                arrow_forward
                </span></a>
            </div>
          </div>


        </div>
      </section>
    </section>


    <section class="features-section">
      <div class="container">
        <div class="features-area flex">
          <div class="features-card flex">
            <img src="https://edu.ieee.org/in-cu/wp-content/uploads/sites/833/elementor/thumbs/wie-removebg-preview-pwavnm5r1btebzfz7x0ed3s2owp2whyjfx6elxsb44.png"/>
            <h3>CUSB WIE </h3>
            <!--<p>Discover how people group and label information.</p>-->
            <a href="https://edu.ieee.org/in-cuchd/" class="secondary-button">Learn More <i class="fa-solid fa-right-long"></i></a>
          </div>
          <div class="features-card flex">
            <img src="https://edu.ieee.org/in-cu/wp-content/uploads/sites/833/elementor/thumbs/cs-removebg-preview-pwavkwejak3ksjdz2qr75sg4wu2wnz6gehbwp5t938.png" alt="" />
            <h3>CUSB CS</h3>
            <!--<p>Discover how people navigate your Figma prototypes.</p>-->
            <a href="https://enchanting-dusk-d6359c.netlify.app/" class="secondary-button">Learn More <i class="fa-solid fa-right-long"></i></a>
          </div>
          <div class="features-card flex">
            <img src="https://edu.ieee.org/in-cu/wp-content/uploads/sites/833/elementor/thumbs/ras-removebg-preview-pwavo1762odzhqu4s3ifgzzg72mybnm8tzm6ad60ck.png" alt="" />
            <h3>CUSB RAS</h3>
            <!--<p>Test interaction with first click.</p>-->
            <a href="https://edu.ieee.org/in-cuchdras/" class="secondary-button">Learn More <i class="fa-solid fa-right-long"></i></a>
          </div>
          <div class="features-card flex">
            <img src="https://edu.ieee.org/in-cu/wp-content/uploads/sites/833/elementor/thumbs/cis-removebg-preview-pwavkas8xd9zdi9dkzes2fwj8z1gqxsmnibqnspb2c.png" alt="" />
            <h3>CUSB CIS</h3>
            <!--<p>Get feedback on images, videos or audio files.</p>-->
            <a href="https://edu.ieee.org/in-cuchdcis/" class="secondary-button">Learn More <i class="fa-solid fa-right-long"></i></a>
          </div>
          <div class="features-card flex">
            <img src="https://edu.ieee.org/in-cu/wp-content/uploads/sites/833/elementor/thumbs/Photnics-removebg-preview-pwavqfobjfod5vcir4w3ue5uuispzt5jtvmuftlsg4.png" alt="" />
            <h3>CUSB Photonics</h3>
            <!--<p>Find out which designs users prefer and why.</p>-->
            <a href="https://edu.ieee.org/in-cuchdpho/" class="secondary-button">Learn More <i class="fa-solid fa-right-long"></i></a>
          </div>
          <div class="features-card flex">
            <img src="https://edu.ieee.org/in-cu/wp-content/uploads/sites/833/elementor/thumbs/ctsoc-removebg-preview-pwavokxs27509k1gku1lfd04o5xntaslwpbdd6cqpw.png" alt="" />
            <h3>CUSB CTSOC</h3>
            <!--<p>Test comprehensibility by measuring.</p>-->
            <a href="#" class="secondary-button">Learn More <i class="fa-solid fa-right-long"></i></a>
          </div>
        </div>
      </div>
    </section>

  </div>

  <section class="ieee_mv" id="about">
  
    <div class="mission_vision">
        <div class="mission">
            <div class="inner_vision">
                <h1 class="text">Mission</h1>
                <p class="text">IEEE CUSB’s core purpose is to foster technological innovation and excellence for the benefit of humanity , drive global innovation through broad collaboration and the sharing of knowledge. .</p>
            </div>
        </div>
        <div class="vision">
            <div class="inner_vision">
                <h1 class="text">Vision</h1>
                <p class="text">IEEE CUSB's core vision right now is to be a platform for the overall development of growth for the students and by the students. Also,to be a trusted source of educational services and resources to support life-long learning for our students.</p>
            </div>
        </div>
    </div>
</section>


<section class="testimonial" style="background-image: url('background.png'); background-repeat: no-repeat; background-size: cover;">
  <div class="test">
  <!-- <div class="rewardText"> -->
     <h1 class="head-2 rewardtexts" style="color: #004aad !important;">Our Testimonials</h1>
    <!-- </div> -->
      <div id="loader" style="display: none;"></div>
      <div id="box" style="display: block;" style="margin-right: 0px;">
        <div class="img-con">
          <img src="https://i.postimg.cc/gJDkZrNn/profile-image-1.png">
          <img src="https://i.postimg.cc/8kZzkJ7Y/profile-image-2.png">
          <img src="https://i.postimg.cc/90gmLK32/profile-image-3.png">
          <img src="https://i.postimg.cc/6qp6Lwmz/profile-image-4.png">
        </div>
        <div class="text-center mb-4 pb-2">
                    <i class="fas fa-quote-left fa-3x text-black" style="color: #0a69ed3d !important;"></i>
                  </div>
        <div class="wrapper">
          <div class="testimonial-container" id="testimonial-container">
            <img src="https://media.licdn.com/dms/image/C4D03AQFjzNf8i4u_YQ/profile-displayphoto-shrink_800_800/0/1606816283564?e=1682553600&v=beta&t=3JjFJ6hCT0VgL1aW97o7DlNH-9mkEztrXGcQG2lHQtU">
            <h3>DR. B. PRIESTLY SHAN</h3>
            <h6>Branch Advisor - IEEE CUSB</h6>
            <span style="    font-family: 'Poppins',sans-serif !important; line-height: 0;">The institution has always emphasized students' holistic development and I am glad to observe the efforts of student volunteers who have been working tirelessly to give the same to their peers. The events and activities expose students to a wide range of experiences and inculcate qualities such as leadership and teamwork, which will be useful in their future careers.</span>
          </div>
          <button id="prev" onclick="prev()">&lt;</button>
          <button id="next" onclick="next()">&gt;</button>
        </div>
        <div class="text-center mt-4 pt-2">
                <i class="fas fa-quote-right fa-3x text-black" style="color: #ed0a5644 !important;"></i>
              </div>
      </div>
      <script
        src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>


      <script id="rendered-js">
        window.addEventListener("load", function () {
          document.getElementById("loader").style.display = "none";
          document.getElementById("box").style.display = "block";
        });
        const testimonials = [
          {
            name: "DR. B. Priestly Shan",
            job: "Branch Advisor - IEEE CUSB",
            image: "https://media.licdn.com/dms/image/C4D03AQFjzNf8i4u_YQ/profile-displayphoto-shrink_800_800/0/1606816283564?e=1682553600&v=beta&t=3JjFJ6hCT0VgL1aW97o7DlNH-9mkEztrXGcQG2lHQtU",
            testimonial:
              "The institution has always emphasized students' holistic development and I am glad to observe the efforts of student volunteers who been working tirelessly to give the same to their peers. The events and activities expose students to a wide range of experiences and inculcate qualities such as leadership and teamwork, which will be useful in their future careers. "
          },

          {
            name: "ER. Sugandha Sharma",
            job: "Branch Counselor - IEEE CUSB",
            image: "https://media.licdn.com/dms/image/C4D03AQGwWNcmsRKXgA/profile-displayphoto-shrink_400_400/0/1660482947658?e=1682553600&v=beta&t=gUH9iLvTc3yToT1PShXeQSdTwmTGBRkTxvYZPCW3xQ4",
            testimonial:
              " Our platform connects students in various fields. We promote excellence among students and strive to prepare them for successful careers as capable and qualified engineers who contribute to society's well-being. Our student branch has grown significantly and will continue to provide opportunities for students to excel and transition into the workforce."
          },

          {
            name: "MR. Rishabh Raj",
            job: "Corporate Mentor - IEEE CUSB",
            image: "https://media.licdn.com/dms/image/C4D03AQFa9YbeRPH4rQ/profile-displayphoto-shrink_400_400/0/1656849479982?e=1682553600&v=beta&t=Enqs6pJBUFwk5vJJxrhNq9x6wTUje6vTavsCCPPvdc8",
            testimonial:
              "IEEE CUSB has established itself as a true communicator and facilitator among all scientific and technological communities working to improve society. Workshops in popular areas, prominent lectures, and student contests are  a few of the regular activities that this branch pursues and would like to pursue with the greatest amount of zeal and expectations of success."
          },

      ];


        let i = 0; // current slide
        let j = testimonials.length; // total slides
        let testimonialContainer = document.getElementById("testimonial-container");
        function next() {
          i = (j + i + 1) % j;
          displayTestimonial();
        }

        function prev() {
          i = (j + i - 1) % j;
          displayTestimonial();
        }
        let displayTestimonial = () => {
          testimonialContainer.innerHTML = `
          <img src=${testimonials[i].image}></img>
         <h3 style="font-family: 'Poppins', sans-serif;     font-size: 13px;
    line-height: initial;">${testimonials[i].name}</h3>
         <h6 style="font-family: 'Poppins', sans-serif;     font-size: 13px;
    line-height: initial;">${testimonials[i].job}</h6>
        <p style="font-family: 'Poppins', sans-serif;     font-size: 13px;
    line-height: initial;">${testimonials[i].testimonial}</p>
        `;
        };
        window.onload = displayTestimonial;
      </script>

    </div>

  </section>

  <section class="events-sec" id="event">
    <section class="inner_events">
      <div class="outer-wrapper">
        <div class="inner-wrapper">
          <div class="pseudo-item">
            <img src="https://edu.ieee.org/in-cu/wp-content/uploads/sites/833/2022/12/Event-.jpg" class="pseudoImage"
              alt="" style="border-radius: 5px;">
          </div>
          <div class="pseudo-item">
            <img src="https://tech-a-month-3.web.app/assets/img/event/1%20(3).jpeg" class="pseudoImage" alt="" style="border-radius: 5px;">
          </div>
          <div class="pseudo-item">
            <img src="https://tech-a-month-3.web.app/assets/img/event/1%20(4).jpeg" class="pseudoImage" alt="" style="border-radius: 5px;">
          </div>
          <div class="pseudo-item">
            <img src="https://tech-a-month-3.web.app/assets/img/event/tanmay.jpeg" class="pseudoImage" alt="" style="border-radius: 5px;">
          </div>
          <div class="pseudo-item">
            <img src="https://tech-a-month-3.web.app/assets/img/event/28jul.jpeg" class="pseudoImage" alt="" style="border-radius: 5px;">
          </div>
          <div class="pseudo-item">
            <img src="https://tech-a-month-3.web.app/assets/img/event/4aug.jpeg" class="pseudoImage" alt="" style="border-radius: 5px;">
          </div>
        </div>
      </div>
      <div class="pseduo-track"></div>
    </section>
    <div class="events ml-start">
      <img src="images/events.png" width="400px" alt="">
    </div>
  </section>
  
  <section class="rewards">
    <div class="rewardText">
     <h1 class="head-2 rewardtexts">Rewards and Recognitions</h1>
    </div>
   <!-- Slider Code -->
   <div class="wrapperi">
     <div class="slideri">
       <div class="slide-track">
         
         <div class="slide">
           <img src="https://edu.ieee.org/in-cu/wp-content/uploads/sites/833/2022/12/Vaibhav-and-Shashank-Pareek-300x300.jpg" />
         </div>
         
         <div class="slide">
           <img src="https://edu.ieee.org/in-cu/wp-content/uploads/sites/833/2022/12/Vandana-Di-Best-volunteer-300x300.jpg" />
         </div>
         <div class="slide">
           <img src="https://edu.ieee.org/in-cu/wp-content/uploads/sites/833/2022/12/Delhi_Chandigarh-University-R10-1-1-2048x1583.png" alt="">
         </div>
         <div class="slide">
           <img src="https://edu.ieee.org/in-cu/wp-content/uploads/sites/833/2022/12/HM-Chandigarh-Univ-certificate-1-2048x1583.png" alt="">
         </div>
         <div class="slide">
           <img src="https://edu.ieee.org/in-cu/wp-content/uploads/sites/833/2022/12/WhatsApp-Image-2022-12-27-at-12.10.52-300x300.jpg" />
         </div>
         
         <div class="slide">
           <img src="12345.jpg" />
         </div>
         
         <div class="slide">
           <img src="1234.jpg" />
         </div>
         
         <div class="slide">
           <img src="123.jpg" />
         </div>
         <!-- Img Code End -->
         
       </div>
     </div>
   </div>
     
   </section>
   
<!-- contact form -->
<section class="contact" id="contact">
  <h1 class="contactHead" style="padding:13px;">Get in Touch <span class="contactSpan">with us</span> </h1>
  <p class="para contactPara">Fill out the form to contact us. We'll come back to you as soon as possible..</p>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="searchBoxes">
      <div class="Box12 ">
        <input type="text" name="fullname" class="box upbox box1Text"  placeholder="Full Name" required>
        <input type="text" name="phone" class="box upbox box2Text" placeholder="Phone Number" required>
      </div>
      <div class="Box3">
        <input type="text" name="email" class="box box3text"  placeholder="E-mail">
      </div>
      <div class="Box4">
        <input type="text" name="message" class="box box4Text"  placeholder="Message" required>
      </div>
      <button class="head-button rounded-4 contactButton" type="submit">contact us <span class="material-symbols-outlined">
        send
        </span></button>
        
    </div>
  </form>

</section>

<!-- faq -->


<!-- ====== FAQ Section Start -->
<section
  x-data="
   {
   openFaq1: false, 
   openFaq2: false, 
   openFaq3: false, 
   openFaq4: false, 
   openFaq5: false, 
   openFaq6: false
   }
   "
  class="overflow-hidden pt-20 pb-12 lg:pt-[100px] lg:pb-[90px]" id="faq"
>
  <div class="container mx-auto">
    <div class="-mx-4 flex flex-wrap">
      <div class="w-full px-4">
        <div class="mx-auto mb-[60px] max-w-[520px] text-center lg:mb-20">
          <!-- <span class="mb-2 block text-lg font-semibold text-primary">
            FAQ
          </span> -->
          <h1
            class="mb-4 text-4xl font-bold text-dark sm:text-4xl md:text-[80px]">
            Frequently Asked Questions
          </h1>
          <!-- <p class="text-base text-body-color">
            There are many variations of passages of Lorem Ipsum available but
            the majority have suffered alteration in some form.
          </p> -->
        </div>
      </div>
    </div>
    <div class="-mx-4 flex flex-wrap">
      <div class="w-full px-4 lg:w-1/2">
        <div
          class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8"
        >
          <button
            class="faq-btn flex w-full text-left"
            @click="openFaq1 = !openFaq1"
          >
           
            <div class="w-full">
              <h4 class="text-lg font-semibold text-black">
                What is IEEE?
              </h4>
            </div>
          </button>
          <div x-show="openFaq1" class="faq-content pl-[62px]">
            <p class="py-3 text-base leading-relaxed text-body-color">
              IEEE stands for the Institute of Electrical and Electronics Engineers. It is an international professional organization dedicated to advancing technology for the benefit of humanity.
            </p>
          </div>
        </div>
        <div
          class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8"
        >
          <button
            class="faq-btn flex w-full text-left"
            @click="openFaq2 = !openFaq2"
          >
            
            <div class="w-full">
              <h4 class="text-lg font-semibold text-black">
                How do I become a member of IEEE?
              </h4>
            </div>
          </button>
          <div x-show="openFaq2" class="faq-content pl-[62px]">
            <p class="py-3 text-base leading-relaxed text-body-color">
              To become a member of IEEE, you can visit the IEEE website and complete the online application process. There are different types of memberships available, including student, professional, and associate memberships.
            </p>
          </div>
        </div>
      
        <div
        class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8"
      >
        <button
          class="faq-btn flex w-full text-left"
          @click="openFaq3 = !openFaq3"
        >
          
          <div class="w-full">
            <h4 class="text-lg font-semibold text-black">
              What are the benefits of joining IEEE CUSB?
            </h4>
          </div>
        </button>
        <div x-show="openFaq3" class="faq-content pl-[62px]">
          <p class="py-3 text-base leading-relaxed text-body-color">
            IEEE CUSB offers a wide range of benefits to its members, including access to technical resources, networking opportunities, discounts on conferences and publications, and career development resources.
          </p>
        </div>
      </div>
      </div>
      <div class="w-full px-4 lg:w-1/2">
        <div
          class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8"
        >
          <button
            class="faq-btn flex w-full text-left"
            @click="openFaq4 = !openFaq4"
          >
           
            <div class="w-full">
              <h4 class="text-lg font-semibold text-black">
                How do I access IEEE publications?
              </h4>
            </div>
          </button>
          <div x-show="openFaq4" class="faq-content pl-[62px]">
            <p class="py-3 text-base leading-relaxed text-body-color">
              IEEE publications are available through the IEEE Xplore Digital Library. Members can access the library by logging into their IEEE account. Non-members can purchase access to individual articles or subscribe to the digital library.
            </p>
          </div>
        </div>
        <div
          class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8"
        >
          <button
            class="faq-btn flex w-full text-left"
            @click="openFaq5 = !openFaq5"
          >
   
            <div class="w-full">
              <h4 class="text-lg font-semibold text-black">
                How do I submit a paper to an IEEE conference or journal?
              </h4>
            </div>
          </button>
          <div x-show="openFaq5" class="faq-content pl-[62px]">
            <p class="py-3 text-base leading-relaxed text-body-color">
              To submit a paper to an IEEE conference or journal, you can visit the conference or journal website and follow the submission guidelines. You will typically need to prepare your paper according to specific formatting requirements and submit it through an online system.
            </p>
          </div>
        </div>
  

        <div
        class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8"
      >
        <button
          class="faq-btn flex w-full text-left"
          @click="openFaq6 = !openFaq6"
        >
        
          <div class="w-full">
            <h4 class="text-lg font-semibold text-black">
              How can I find IEEE CUSB events in my area?
            </h4>
          </div>
        </button>
        <div x-show="openFaq6" class="faq-content pl-[62px]">
          <p class="py-3 text-base leading-relaxed text-body-color">
            IEEE CUSB hosts a variety of events, including conferences, workshops, and webinars, all over the world. You can find information about upcoming events on the IEEE website or by searching the IEEE Event Finder.
          </p>
        </div>
      </div>

  
      </div>
    </div>
  </div>
  <div class="absolute bottom-0 right-0 z-[-1]">
    <svg
      width="1440"
      height="886"
      viewBox="0 0 1440 886"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        opacity="0.5"
        d="M193.307 -273.321L1480.87 1014.24L1121.85 1373.26C1121.85 1373.26 731.745 983.231 478.513 729.927C225.976 477.317 -165.714 85.6993 -165.714 85.6993L193.307 -273.321Z"
        fill="url(#paint0_linear)"
      />
      <defs>
        <linearGradient
          id="paint0_linear"
          x1="1308.65"
          y1="1142.58"
          x2="602.827"
          y2="-418.681"
          gradientUnits="userSpaceOnUse"
        >
          <stop stop-color="#3056D3" stop-opacity="0.36" />
          <stop offset="1" stop-color="#F5F2FD" stop-opacity="0" />
          <stop offset="1" stop-color="#F5F2FD" stop-opacity="0.096144" />
        </linearGradient>
      </defs>
    </svg>
  </div>
</section>
<!-- ====== FAQ Section End -->



   <footer>

    <html lang="en">

    <head>

      <meta charset="UTF-8">
      <meta name="apple-mobile-web-app-title" content="CodePen">
      <style>
        :root {
          --white: #FFF;
          --black: #000;
          --dark: #1E1E1E;
          --gray: rgba(1, 1, 1, 0.6);
          --lite: rgba(255, 255, 255, 0.6);
          --primary: #002347;
          --secondary: #fdc632;
        }


        /***************************
                  DEFAULT
      ****************************/

        a {
          text-decoration: none !important;
          min-width: fit-content;
          width: fit-content;
          width: -webkit-fit-content;
          width: -moz-fit-content;
        }

        a,
        button {
          transition: 0.5s;
        }

        a,
        p {
          font-size: 14px;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
          color: var(--primary);
          font-weight: 600;
        }

        a,
        button,
        input,
        textarea,
        select {
          outline: none !important;
        }

        fieldset {
          border: 0;
        }

        .title {
          color: var(--primary);
        }

        .flex,
        .fixed_flex {
          display: flex;
        }

        .flex-content {
          width: 100%;
          position: relative;
        }

        .padding_1x {
          padding: 1rem;
        }

        .padding_2x {
          padding: 2rem;
        }

        .padding_3x {
          padding: 3rem;
        }

        .padding_4x {
          padding: 4rem;
        }

        .btn {
          padding: 0.8rem 2rem;
          border-radius: 5px;
          text-align: center;
          font-weight: 500;
          text-transform: uppercase;
        }

        .btn_1 {
          border: 1px solid var(--primary);
          background-color: var(--primary);
          color: var(--secondary);
        }

        .btn_1:hover {
          background-color: transparent;
          color: var(--primary);
        }

        .btn_2 {
          border: 1px solid var(--secondary);
          background-color: var(--secondary);
          color: var(--primary);
        }

        .btn_2:hover {
          border: 1px solid var(--primary);
          background-color: var(--primary);
          color: var(--secondary);
        }

        @media (max-width:920px) {
          .flex {
            flex-wrap: wrap;
          }

          .padding_1x,
          .padding_2x,
          .padding_3x,
          .padding_4x {
            padding: 1rem;
          }

          .btn {
            padding: 0.5rem 1rem;
          }

          a,
          p {
            font-size: 12px;
          }
        }



        /***************************
                     FOOTER
      ****************************/
        footer {
          background-color: #004aad;
          color: var(--lite);
          padding-block: 0px;
          padding-top:  30px;
        }

        footer h3 {
          color: var(--white);
          margin-bottom: 1.5rem;
        }

        footer a {
          color: var(--lite);
          display: block;
          margin: 15px 0;
        }

        footer a:hover {
          color: var(--white);
        }

        footer fieldset {
          padding: 0;
        }

        footer fieldset input {
          background-color: #004aad;
          border: 0;
          color: var(--lite);
          padding: 1rem;
        }

        footer fieldset .btn {
          border-radius: 0;
          border: 0;
        }

        footer fieldset .btn_2:hover {
          background-color: var(--secondary);
          border: 0;
          color: var(--primary);
        }

        footer .flex:last-child {
          align-items: center;
        }

        footer .flex:last-child .flex-content:last-child {
          text-align: right;
        }

        footer .flex:last-child p {
          color: var(--white);
        }

        footer .flex:last-child a {
          width: 40px;
          display: inline-block;
          background-color: #004aad;
          color: var(--white);
          padding: 0.5rem;
          margin-right: 3px;
          text-align: center;
        }

        footer .flex:last-child a:hover {
          background-color: var(--secondary);
          color: var(--gray);
        }

        /* @media (max-width:1100px) {
        }

        @media (max-width:920px) {
          footer .flex:last-child .flex-content:last-child {
            text-align: left;
          }
        }

        @media (max-width:320px) {
          footer .flex:first-child .flex-content {
            flex: 1 1 100%;
          }
        }
        .footer{
          padding-bottom: 0px !important;
        }

        @media(max-width:550px){
          .ieeeText{
            width: 50%;
            margin-left:auto;
            padding-left:20px;
          }
          .ieeeTexts{
            margin-bottom: 20px;
            
          }
          .imagefooter{
            display: block;
          }
          .copyright{
            text-align: center;
            padding-bottom: 0px;
          }
          .social{
            padding:10px;
            display: flex;
            justify-content: center;
            align-items: center;
          }

        } */
        .section-new2>a{
          text-align: center;
          width: 100%;
        }
        .ieeeText>a{
          text-align: center;
          width: 100%;
        }
        .copyright{
          text-align: center;
          padding: 0;
          }
        .copyright > p{
          margin: 0px;
        }
        .socail{
          padding:0;
          display: flex;
          width:100%;
          text-align: center;
          justify-content: center;

        }
      </style>


    </head>

    <body translate="no">
      <!--FONT AWESOME-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <!--GOOGLE FONTS-->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
      <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

      <!-- contact -->


      <!--footer-->
      <footer class="padding_4x" style="padding: 0px;">
        <div class="flex">
          <section class="flex-content padding_1x imagefooter" style="padding:0px; width: 100%">
            <img src="images/logos__2_-removebg-preview.png" width="200px" height="100px" alt="">
          </section>
         <section class="section-new" style="width: 80%; display: flex; justify-content: center; margin: 0 auto; text-align: center;">

           <section class="flex-content padding_1x section-new2">
            <h3 class="footertext">References</h3>
             <a class="footertext" href="https://www.ieee.org/">IEEE.org</a>
             <a class="footertext" href="https://ieeexplore.ieee.org/Xplore/home.jsp">IEEE Xplore Digital Library</a>
             <a class="footertext" href="https://standards.ieee.org/">IEEE Standards</a>
             <a class="footertext" href="https://spectrum.ieee.org/">IEEE Spectrum</a>
           </section>
           <section class="flex-content padding_1x section-new2">
             <div class="ieeeText">
               <h3>IEEE CUSB</h3>
               <a href="#home" class="ieeeTexts">Home</a>
               <a href="#about" class="ieeeTexts">About</a>
               <a href="#event" class="ieeeTexts">Events</a>
               <a href="#contact" class="ieeeTexts">Contact</a>
             </div>
            
           </section>
         </section>
        </div>
        <div class="flex">
          <section class="flex-content padding_1x copyright">
            <p>Copyright ©2023 All rights reserved || IEEE CUSB</p>
          </section>
          <section class="flex-content padding_1x social" style="padding:0; margin-bottom: 10px; display: flex; justify-content: center;">
            <div>
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="https://www.instagram.com/ieee_chandigarhuniversity/"><i class="fa fa-dribbble"></i></a>
              <a href="https://www.linkedin.com/in/ieee-cusb/"><i class="fa fa-linkedin"></i></a>
            </section>
            </div>
           
        </div>
      </footer>
    </body>

    </html>
  </footer>

  <!-- javascript cdn -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="js/rewards.js"></script>
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 300,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>
  <script>
    $('.slide').hiSlide();
  </script>
  </body>
</html>