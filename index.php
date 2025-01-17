<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Velvet Bloom</title>
  <style>
    /* General Styles */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: rgb(112, 98, 98);
      color: #fff;
    }

    /* Navigation Bar */
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #00000094;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1000;
    }

    li {
      float: left;
    }

    li a {
      display: inline-block;
      color: #fff;
      text-align: center;
      padding: 20px 16px;
      text-decoration: none;
      font-size: 18px;
      font-family: 'Times New Roman', Times, serif;
    }

    li a:hover {
      background-color: #575757;
    }

    /* Hero Section */
    .hero {
      padding: 250px;
      position: relative;
      text-align: center;
      background-image: url(Men/Clothing\ Rack\ Boutique\ Fashion\ Facebook\ Cover.png);
      background-repeat: no-repeat; 
      background-size: cover;
    }

    .hero h1 {
      font-size: 3em;
      margin: 0;
    }

    .hero p {
      font-size: 1.5em;
    }

    /* Sections */
    .section {
      padding: 50px 20px;
      text-align: center;
    }

    .section h2 {
      font-size: 2em;
      margin-bottom: 20px;
    }

    .product {
      display: inline-block;
      margin: 20px;
      background-color: #444;
      padding: 20px;
      border-radius: 8px;
      text-align: left;
      width: 250px;
    }

    .product img {
      width: 100%;
      border-radius: 8px;
    }

    .product p {
      margin: 10px 0;
    }

    .product .price {
      font-weight: bold;
      color: #f9d342;
    }
  </style>
</head>
<body>
  <!-- Navigation Bar -->
  <ul>
    <li><a href="#home">Home</a></li>
    <li><a href="#about">About Us</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#men">Men</a></li>
    <li><a href="#women">Women</a></li>
    <li><a href="#kids">Kids</a></li>
    <li><a href="#new-arrivals">New Arrivals</a></li>
    <li><a href="#promotions">Promotions</a></li>
  </ul>

  <!-- Hero Section -->
  <div class="hero" id="home">
  
  </div>

  <!-- About Section -->
  <div class="section" id="about">
    <h2>About Us</h2>
    <p>We are a premier retailer offering the latest fashion trends for men, women, and kids. Our mission is to make fashion accessible to everyone.</p>
  </div>

  <!-- Product Sections -->
  <div class="section" id="men">
    <h2>Men's Clothing</h2>
    <div class="product">
      <img src="Men/1 (1).jpg" alt="Men's Shirt">
      <p>Name: Casual Shirt</p>
      <p>Price: <span class="price">LKR.1500.00</span></p>
      <p>Availability: In Stock</p>
    </div>
    <div class="product">
      <img src="Men/1 (10).jpg" alt="Men's Suit">
      <p>Name: Polo Shirt</p>
      <p>Price: <span class="price">LKR.1750.00</span></p>
      <p>Availability: In Stock</p>
    </div>
    <div class="product">
        <img src="Men/1 (11).jpg" alt="Men's Shirt">
        <p>Name: Casual Shirt</p>
        <p>Price: <span class="price">LKR.1200.00</span></p>
        <p>Availability: In Stock</p>
      </div>
      <div class="product">
        <img src="Men/1 (12).jpg" alt="Men's Suit">
        <p>Name: Printed Shirt</p>
        <p>Price: <span class="price">LKR.1500.00</span></p>
        <p>Availability: In Stock</p>
      </div>
      <div class="product">
        <img src="Men/1 (2).jpg" alt="Men's Shirt">
        <p>Name: Black T-Shirt</p>
        <p>Price: <span class="price">LKR.1700.00</span></p>
        <p>Availability: In Stock</p>
      </div>
      <div class="product">
        <img src="Men/1 (3).jpg" alt="Men's Suit">
        <p>Name: White T-Shirt</p>
        <p>Price: <span class="price">LKR.1700.00</span></p>
        <p style="color: rgb(243, 5, 5);">Availability: Out of Stock</p>
      </div>
      <div class="product">
        <img src="Men/1 (4).jpg" alt="Men's Shirt">
        <p>Name: Casual Shirt</p>
        <p>Price: <span class="price">LKR.2200.00</span></p>
        <p>Availability: In Stock</p>
      </div>
      <div class="product">
        <img src="Men/1 (5).jpg" alt="Men's Suit">
        <p>Name: Casual Shirt</p>
        <p>Price: <span class="price">LKR.2000.00</span></p>
        <p>Availability: In Stock</p>
      </div>
      <div class="product">
        <img src="Men/1 (8).jpg" alt="Men's Shirt">
        <p>Name: Polo Shirt</p>
        <p>Price: <span class="price">LKR.1750.00</span></p>
        <p>Availability: In Stock</p>
      </div>
      <div class="product">
        <img src="Men/1 (7).jpg" alt="Men's Suit">
        <p>Name: Casual Shirt</p>
        <p>Price: <span class="price">LKR.1200.00</span></p>
        <p>Availability: In Stock</p>
      </div>
  </div>

  <div class="section" id="women">
    <h2>Women's Clothing</h2>
    <div class="product">
      <img src="Women/1 (1).jpeg" alt="Women's Dress">
      <p>Name: Skirts </p>
      <p>Price: <span class="price">LKR.1500.00</span></p>
      <p>Availability: In Stock</p>
    </div>
    <div class="product">
      <img src="Women/1 (1).jpg" alt="Women's Top">
      <p>Name: Crop Top</p>
      <p>Price: <span class="price">LKR.1100.00</span></p>
      <p>Availability: In Stock</p>
    </div>
    <div class="product">
        <img src="Women/1 (2).jpeg" alt="Women's Dress">
        <p>Name: Skirts</p>
        <p>Price: <span class="price">LKR.1500.00</span></p>
        <p>Availability: In Stock</p>
      </div>
      <div class="product">
        <img src="Women/1 (2).jpg" alt="Women's Top">
        <p>Name: Crop Top</p>
        <p>Price: <span class="price">LKR.1100.00</span></p>
        <p style="color: rgb(243, 5, 5);">Availability: Out of Stock</p>
      </div>
      <div class="product">
        <img src="Women/1 (3).jpeg" alt="Women's Dress">
        <p>Name: Dress</p>
        <p>Price: <span class="price">LKR.1750.00</span></p>
        <p>Availability: In Stock</p>
      </div>
      <div class="product">
        <img src="Women/1 (7).jpg" alt="Women's Top">
        <p>Name: Crop Top</p>
        <p>Price: <span class="price">LKR.1100.00</span></p>
        <p>Availability: In Stock</p>
      </div>
      <div class="product">
        <img src="Women/1 (4).jpeg" alt="Women's Dress">
        <p>Name: Short Skirts</p>
        <p>Price: <span class="price">LKR.1500.00</span></p>
        <p>Availability: In Stock</p>
      </div>
      <div class="product">
        <img src="Women/1 (9).jpg" alt="Women's Top">
        <p>Name: Short Skirts</p>
        <p>Price: <span class="price">LKR.1200.00</span></p>
        <p>Availability: In Stock</p>
      </div>
      <div class="product">
        <img src="Women/1 (8).jpg" alt="Women's Dress">
        <p>Name: Gym Wear</p>
        <p>Price: <span class="price">LKR.2500.00</span></p>
        <p>Availability: In Stock</p>
      </div>
      <div class="product">
        <img src="Women/1 (6).jpg" alt="Women's Top">
        <p>Name: Short Skirts</p>
        <p>Price: <span class="price">LKR.1500.00</span></p>
        <p>Availability: In Stock</p>
      </div>
  </div>

  <div class="section" id="kids">
    <h2>Kids' Clothing</h2>
    <div class="product">
      <img src="Kids/1 (1).jpg" alt="Kids' T-Shirt">
      <p>Name: Boys Full Kit</p>
      <p>Price: <span class="price">LKR.2500.00</span></p>
      <p>Availability: In Stock</p>
    </div>
    <div class="product">
      <img src="Kids/1 (1).png" alt="Kids' Shorts">
      <p>Name: Dress</p>
      <p>Price: <span class="price">LKR.1500.00</span></p>
      <p>Availability: Out of Stock</p>
    </div>
    <div class="product">
        <img src="Kids/1 (3).jpg" alt="Kids' T-Shirt">
        <p>Name: Fun Shirt</p>
        <p>Price: <span class="price">LKR.900.00</span></p>
        <p>Availability: In Stock</p>
      </div>
      <div class="product">
        <img src="Kids/1 (9).jpg" alt="Kids' Shorts">
        <p>Name: Dress</p>
        <p>Price: <span class="price">LKR.1500.00</span></p>
        <p>Availability: Out of Stock</p>
      </div><div class="product">
        <img src="Kids/1 (4).jpg" alt="Kids' T-Shirt">
        <p>Name: Full Kit</p>
        <p>Price: <span class="price">LKR.1400.00</span></p>
        <p>Availability: In Stock</p>
      </div>
      <div class="product">
        <img src="Kids/1 (5).jpg" alt="Kids' Shorts">
        <p>Name: Shorts</p>
        <p>Price: <span class="price">LKR.1000.00</span></p>
        <p>Availability: Out of Stock</p>
      </div><div class="product">
        <img src="Kids/1 (6).jpg" alt="Kids' T-Shirt">
        <p>Name: Dress</p>
        <p>Price: <span class="price">LKR.1500.00</span></p>
        <p>Availability: In Stock</p>
      </div>
      <div class="product">
        <img src="Kids/1 (7).jpg" alt="Kids' Shorts">
        <p>Name: Dress</p>
        <p>Price: <span class="price">LKR.1500.00</span></p>
        <p style="color: rgb(243, 5, 5);">Availability: Out of Stock</p>
      </div><div class="product">
        <img src="Kids/1 (8).jpg" alt="Kids' T-Shirt">
        <p>Name: Dress</p>
        <p>Price: <span class="price">LKR.1500.00</span></p>
        <p>Availability: In Stock</p>
      </div>
      <div class="product">
        <img src="Kids/1 (2).jpg" alt="Kids' Shorts">
        <p>Name: Wedding Kit</p>
        <p>Price: <span class="price">LKR.2500.00</span></p>
        <p>Availability: Out of Stock</p>
      </div>
  </div>

  <!-- New Arrivals Section -->
  <div class="section" id="new-arrivals">
    <h2>New Arrivals</h2>
    <p>Discover the latest additions to our store!</p>
    <div class="product">
      <img src="Men/p (3).jpg" alt="Kids' T-Shirt">
      <p>Name: Fun T-Shirt</p>
      <p>Price: <span class="price">$15</span></p>
      <p>Availability: In Stock</p>
    </div>
    <div class="product">
        <img src="Women/P (3).jpg" alt="Kids' T-Shirt">
        <p>Name: Fun T-Shirt</p>
        <p>Price: <span class="price">$15</span></p>
        <p>Availability: In Stock</p>
      </div>
      <div class="product">
        <img src="Women/p(4).jpeg" alt="Kids' T-Shirt">
        <p>Name: Fun T-Shirt</p>
        <p>Price: <span class="price">$15</span></p>
        <p>Availability: In Stock</p>
      </div>
    </div>

  <!-- Promotions Section -->
  <div class="section" id="promotions">
    <h2>Promotions</h2>
    <p>Take advantage of our ongoing discounts and deals.</p>
    <div class="product">
      <img src="Women/P (2).jpg" alt="Kids' T-Shirt">
      <p>Name: Dennim </p>
      <p>Price: <span class="price">LKR.2700.00</span></p>
      <p>Discounts: <span class="price">15% Off </span></p>
      <p>Availability: In Stock</p>
    </div>

    <div class="product">
        <img src="Women/P (1).jpg" alt="Kids' T-Shirt">
        <p>Name: Crop Top</p>
        <p>Price: <span class="price">LKR.1200.00</span></p>
        <p>Discounts: <span class="price">25% Off </span></p>
        <p>Availability: In Stock</p>
      </div>

      <div class="product">
        <img src="Men/p (2).jpg" alt="Kids' T-Shirt">
        <p>Name:T-Shirt</p>
        <p>Price: <span class="price">LKR.2200.00</span></p>
        <p>Discounts: <span class="price">20% Off </span></p>
        <p>Availability: In Stock</p>
      </div>  
    </div>
  <!-- Contact Section -->
  <div class="section" id="contact">
    <h2>Contact Us</h2>
    <p>Email: support@velvetbloomstore.com</p>
    <p>Phone: +94 71 563 1399</p>
  </div>
</body>
</html>
