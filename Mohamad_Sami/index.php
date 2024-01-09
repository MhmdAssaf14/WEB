<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="Uploads/alwanas-white-01-removebg-preview.png" type="image/icon">
    <title>Al-Wanas Charcoal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="form.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }


    

        .about-img img {
            border-radius: 10px;
        }

        .about-text h2,
        .about-text p,
        .about-text a {
            color: #343a40;
        }

        .services,
        .portfolio,
        .team,
        .contact {
            background-color: #ffffff;
            margin-top: 30px;
            padding: 30px 0;
            border-radius: 10px;
        }

        .section-header h2,
        .section-header p {
            color: #343a40;
        }

        .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-title,
        .card-text {
            color: #343a40;
        }

        .socials i {
            font-size: 20px;
            margin: 0 5px;
            color: #343a40;
        }

        .contact form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact h1,
        .contact label {
            color: #343a40;
        }

        .contact input,
        .contact textarea {
            margin-top: 10px;
        }

        footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 10px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>

<body>

	<?php
	include("authentication.php");

	if (!isset($_SESSION["LoggedIN"]) && $_SESSION["LoggedIN"] != 1) {
		header("Location: login.php");
	}
	require("Config.php");
	?>

	<div id="preloader"></div> <!-- preloading -->

	<!--nav bar-->

	<!--slide show-->
	<div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
		<div class="carousel-indicators">
			<button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img alt="..." class="d-block w-100" src="Uploads/img1.jpg">
				<div class="carousel-caption">
					<h5>Glowing Heat</h5>
					<p>For the perfect experience.</p>
					<p><a class="btn btn-warning mt-3" href="#">Learn More</a></p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="Uploads/img2.png">
				<div class="carousel-caption">
					<h5>Eco-Friendly</h5>
					<p>Chemical Free & 100% Natural.</p>
					<p><a class="btn btn-warning mt-3" href="#">Learn More</a></p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="Uploads/img3.jpg">
				<div class="carousel-caption">
					<h5>Long Lasting</h5>
					<p>Up to 120 minutes of smoking.</p>
					<p><a class="btn btn-warning mt-3" href="#">Learn More</a></p>
				</div>
			</div>
		</div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
	</div>

	<!--about us-->
	<section class="about section-padding" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12 col-12">
					<div class="about-img"><img alt="" style="height: 350px;" class="img-fluid" src="Uploads/fac.jpg"></div>
				</div>
				<div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
					<div class="about-text">
						<h2>We Provide the Best Quality<br>
							Services</h2>
						<p>All great achievers of mankind such as Newton, Addison, Einstein etc. worked very patiently
							and perseveringly in their chosen fields. Success was blessing in response to their
							dedication to their work.

							Since 2009, Alwanas charcoal is based in Indonesia solo industrial area. Our work is based
							on high aims, credibility, and patience.

							Mr. Mohamad Assaf and Mr. Sami Rida , CEO's and Founders of alwanas charcoal. Are behind
							these successes of alwanas charcoal.</p><a class="btn btn-warning" href="#">Learn More</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Services -->
	<section class="services section-padding" id="services">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-5">
						<h2>Our Services</h2>
						<p>Discover our comprehensive range of charcoal-related services,
							tailored to meet your specific needs and deliver exceptional results.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card text-white text-center bg-dark pb-2">
						<div class="card-body">
							<i class="bi bi-laptop"></i>
							<h3 class="card-title">Best Quality</h3>
							<p class="lead">Experience the difference of our premium charcoal, meticulously crafted to
								ensure consistent quality, extended burn time, and an unparalleled grilling experience.
							</p><button class="btn bg-warning text-dark">Read More</button>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card text-white text-center bg-dark pb-2">
						<div class="card-body">
							<i class="bi bi-journal"></i>
							<h3 class="card-title">Sustainability</h3>
							<p class="lead">We take pride in our sustainable approach, responsibly sourcing our
								materials and employing environmentally conscious production methods .</p><button class="btn bg-warning text-dark">Read More</button>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card text-white text-center bg-dark pb-2">
						<div class="card-body">
							<i class="bi bi-intersect"></i>
							<h3 class="card-title">Integrity</h3>
							<p class="lead"> We uphold ethical business practices, prioritize transparency, and are
								dedicated to building lasting relationships with our valued customers.</p><button class="btn bg-warning text-dark">Read More</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- Our Services Ends -->

	<!-- portfolio -->
	<section class="portfolio section-padding" id="Products">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-5">
						<h2>Our Products</h2>
						<p>Shop now and experience the benefits of activated charcoal! </p>
					</div>
				</div>
			</div>

			Search <input type="text" id="txtSearch" /> <br/>

			<div id="result">
				<?php
				echo"</br>";
				$query = "SELECT *  
   				 FROM item   ";
				echo "<div class='row'>";
				$result = mysqli_query($con, $query);
				while ($row = mysqli_fetch_array($result)) {
					echo "<div class='col-12 col-md-12 col-lg-4'>";
					echo "<div class='card text-light text-center bg-white pb-2'>";
					echo "<div class='card-body text-dark'>";
					$img = $row["Image"];
					echo "<div class='img-area'><img src='Uploads\\$img' class='img-fluid' alt='Product Image'/></div>";
					echo "<h3 class='card-title'>". $row["Name"]."</h3>";
					echo "<p class='lead'>". $row["Price"] . "$"." / piece </p>" ;
					$id = $row["ID"]; // Item Id
					$id = base64_encode($id);
					echo "<button class='btn bg-warning text-dark'><a style='text-decoration: none; color: black;' href='Order.php?x=$id'>Order Now</a></button>";
					echo "</div>";
					echo "</div>";
					echo "</div>";
					
					echo"</br>";
				}
				echo "</div>";
				?>
			</div>
		</div>
	</section><!-- portfolio ends -->

	<!-- team starts -->
	<section class="team section-padding" id="team">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-5">
						<h2>Our Team</h2>
						<p>Mrs. Mohamad & Sami are a great example of what it means to be a successful founders. They
							are passionate about their company, they are always looking for ways to improve </p>
					</div>
				</div>
			</div>

			<div class="row">

				<div class="col-12 col-md-6 col-lg-3">
					<div class="card text-center">
						<div class="card-body">
							<img alt="" class="img-fluid rounded-circle" src="Uploads/MhmdAssaf.jpeg">
							<h3 class="card-title py-2">Mohamad Assaf</h3>
							<p class="card-text">Meet Mohamad Assaf, the visionary founder and CEO behind our
								eco-friendly charcoal company, leading the charge towards a sustainable and greener
								future</p>
							<p class="socials"><i class="bi bi-twitter text-dark mx-1"></i> <i class="bi bi-facebook text-dark mx-1"></i> <i class="bi bi-linkedin text-dark mx-1"></i> <i class="bi bi-instagram text-dark mx-1"></i></p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3" style="margin-top: 23px;">
					<div class="card text-center">
						<div class="card-body">
							<img alt="" class="img-fluid rounded-circle" src="Uploads/sa (3).jpeg">
							<h3 class="card-title py-2">Sami Rida</h3>
							<p class="card-text"> Meet Sami Rida , founder and CEO of our company. He has over 20 years
								of experience in the charcoal industry, providing our customers with the highest quality
								charcoal</p>
							<p class="socials"><i class="bi bi-twitter text-dark mx-1">

						</div>
					</div>
				</div>

			</div>
		</div>
	</section><!-- team ends -->

	<!-- Contact starts -->
	<section class="contact section-padding">
		<div style="margin-top: -20%;">

			<form onsubmit="event.preventDefault(); validateForm()">
				<h1>Contact Us</h1>

				<label for="name">Name:</label>
				<input type="text" id="name" placeholder="Your name">
				<small class="error"></small>

				<label for="email">Email:</label>
				<input type="email" id="email" placeholder="Your email">
				<small class="error"></small>

				<label for="message">Message:</label>
				<textarea id="message" placeholder="Your message" rows="6"></textarea>
				<small class="error"></small>

				<div class="center">
					<input type="submit" value="Send Message">
					<p id="success"></p>
				</div>
			</form>
		</div>
	</section><!-- contact ends -->

	<!-- footer -->
	<footer class="bg-dark p-2 text-center" style="margin-bottom:-10%;">
		<div class="container">
			<p class="text-white">All Right Reserved By Al-Wanas ©</p>
		</div>
	</footer>

</body>
<script  type="text/javascript">
// bind on keyup event to the textbox search
    $(document).ready(function(){ // on page load
      $('#txtSearch').keyup(function(){
       // alert(this.value);
       $.ajax({
        type: "GET",
        url: "search.php",
        data: {'name': this.value},
        success: function(response){
          // returned result
          $('#result').html(response);
        }
       });
      });
    });
    
    </script>

<script src="script.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>




<script>
	var loader = document.getElementById("preloader");
	window.addEventListener("load", function() {
		setTimeout(function() {
			loader.style.display = "none";
		}, 2000);
	});
</script>

</html>