<link rel="stylesheet" href="style.css">
<?php
include 'header.php';
?>


<section class="hero">
    <div class="hero-content">
      <h2>Welcome to Our Store</h2>
      <p>Discover amazing products and shop now!</p>
      <a href="#" class="shop-button">Shop Now</a>
    </div>
</section>


<main class="main-content">
    <h1>Product Catalog</h1>
    <div class="filter-section">
        <label for="category-filter">Filter by Category:</label>
        <select id="category-filter">
            <option value="all">All</option>
        </select>
    </div>
    <div id="product-list" class="product-card"></div>
</main>

<script src="script.js"></script>

<?php
include 'footer.php';
?>
