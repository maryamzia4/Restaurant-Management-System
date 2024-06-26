<!DOCTYPE html>
<html>
<head>
<title>Restaurant Website</title>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<header>
<img src="{{ asset('images/logomrm.png') }}" width="85" height="65">
Maryam's Flavor Palette: A Culinary Adventure
<button style="border:1px solid white; font-size:13px;">
    <a href="{{ route('login') }}" style="color:black; text-decoration: none;">Book Table</a>
</button>

<button style="border:1px solid white; font-size:13px;">
    <a href="{{ route('feedback.index') }}" style="color:black; text-decoration: none;">Feedback</a>
</button>

<div style="font-size:14px; display:flex;">
<nav>
<ul class="header-menu">
<li><a href="#menu">Menu</a></li>
<li><a href="#about">About Us</a></li>
<li><a href="#contact">Contact</a></li>
</ul>
</nav>
</div>
</header>

<div class="container">
    <div class="side-bar">
	<div class="spacing">
        <h2 style="color:black; text-align:left; font-family: 'New Century Schoolbook', 'TeX Gyre Schola', serif;">Our Specialties</h2>
        <p style="font-family: 'New Century Schoolbook', 'TeX Gyre Schola', serif;">Indulge in our chef's signature dishes crafted with the freshest ingredients.</p>
        <p style="font-family: 'New Century Schoolbook', 'TeX Gyre Schola', serif;">1. Grilled Seafood Platter</p>
        <p style="font-family: 'New Century Schoolbook', 'TeX Gyre Schola', serif;">2. Beef Wellington</p>
        <p style="font-family: 'New Century Schoolbook', 'TeX Gyre Schola', serif;">3. Vegetarian Delight</p>
		</div>
    </div>
    <div class="content">
        <div class="spacing">
            <p class="quote" style="text-align: center;">"Delicious food awaits you at our restaurant. Come, dine with us!"</p>

        </div>
        
        <p>For more information, visit our <a href="https://www.restaurant.com/" style="color: red;">website</a></p>
      
        
        <div class="transbox">
            <p class="spacing">Indulge in a culinary journey like no other at our restaurant. From exquisite appetizers to mouthwatering main courses and delightful desserts, we offer a diverse menu to tantalize your taste buds. Whether you're craving savory classics or exploring new flavors, our restaurant is the perfect destination for a memorable dining experience.</p>
        </div>
        
        <div class="block">
            <h2 id="menu">Menu</h2>
            <p>Explore our delectable menu offerings:</p>

<h3><u>Desserts</u></h3>
 
<div class="food-container">
    <div class="food-type">
        <div class="img-container">
            <img src="{{ asset('images/macaroons.jpg') }}" alt="Food 1">

        </div>
        <div class="img-content">
            <h3>Macaroon Madness</h3>
            <p>A colorful burst of almond goodness awaits in every bite.</p>
        </div>
    </div>
    <div class="food-type">
        <div class="img-container">
            <img src="{{ asset('images/cremebrulee.jpg') }}" alt="Food 2">
        </div>
        <div class="img-content">
            <h3>Crème Brûlée Delight</h3>
            <p>Indulge in the creamy richness of our classic French dessert, caramelized to perfection.</p>
        </div>
    </div>
    <div class="food-type">
        <div class="img-container">
            <img src="{{ asset('images/waffle.jpg') }}" alt="Food 3">
        </div>
        <div class="img-content">
            <h3>Waffle Wonderland</h3>
            <p>Crispy on the outside, fluffy on the inside – our waffles are a sweet symphony of taste and texture.</p>
        </div>
    </div>
</div>
            <h3><u>Appetizers</u></h3>
            
 
<div class="food-container">
    <div class="food-type">
        <div class="img-container">
            <img src="{{ asset('images/onionrings.jpg') }}" alt="Food 1">
        </div>
        <div class="img-content">
            <h3>Crispy Onion Ringss</h3>
            <p>Golden-brown perfection with every bite, our onion rings are a crispy delight.</p>
        </div>
    </div>
    <div class="food-type">
        <div class="img-container">
            <img src="{{ asset('images/egg.jpg') }}" alt="Food 2">
        </div>
        <div class="img-content">
            <h3>Classic Eggs Benedict</h3>
            <p>A harmonious marriage of poached eggs, savory ham, and hollandaise sauce atop toasted English muffins.</p>
        </div>
    </div>
    <div class="food-type">
        <div class="img-container">
            <img src="{{ asset('images/ceasersalad.jpg') }}" alt="Food 3">
        </div>
        <div class="img-content">
            <h3>Caesar Salad Sensation</h3>
            <p>Crisp romaine lettuce, crunchy croutons, and tangy Caesar dressing combine for a refreshing burst of flavor.</p>
        </div>
    </div>
</div>

            <h3><u>Main Courses</u></h3>

<div class="food-container">
    <div class="food-type">
        <div class="img-container">
            <img src="{{ asset('images/chicken_quesadilla.jpg') }}" alt="Food 1">
        </div>
        <div class="img-content">
            <h3>Chicken Quesadilla Fiesta</h3>
            <p>Melted cheese, seasoned chicken, and peppers stuffed in a grilled tortilla for a flavor-packed fiesta.</p>
        </div>
    </div>
    <div class="food-type">
        <div class="img-container">
            <img src="{{ asset('images/salmon.jpg') }}" alt="Food 2">
        </div>
        <div class="img-content">
            <h3>Savory Salmon Delight</h3>
            <p>Savor the rich, buttery taste of our perfectly grilled salmon fillet, served with your choice of sides.</p>
        </div>
    </div>
    <div class="food-type">
        <div class="img-container">
            <img src="{{ asset('images/tacos.jpg') }}" alt="Food 3">
        </div>
        <div class="img-content">
            <h3>Taco Trio Temptation</h3>
            <p> A tantalizing trio of soft tortillas filled with your choice of protein, topped with fresh salsa and creamy guacamole.</p>
        </div>
    </div>
</div>
            
        
            <h2 id="about">About Us</h2>
            <p>Discover the story behind our restaurant:</p>
            <p>We are committed to serving high-quality dishes crafted with the finest ingredients. Our team of talented chefs combines culinary expertise with passion to deliver exceptional dining experiences to our guests. With a warm and inviting atmosphere, attentive service, and flavorful cuisine, we strive to create memorable moments for every diner.</p>
        
            <h2 id="contact">Contact</h2>
            <p>Get in touch with us:</p>
            <p>Address: 123 Main Street, City, Country</p>
            <p>Phone: +123-456-7890</p>
            <p>Email: info@restaurant.com</p>
        </div>
    </div>
</div>

<footer>
<p style="color:white;">This website is optimized for showcasing our restaurant's offerings. All rights reserved.</p>
<p style="text-align: left; color:white;">For reservations, call +123-456-7890</p>
</footer>

</body>
</html>
