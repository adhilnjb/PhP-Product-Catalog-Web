<?php

include 'header.php';
?>

<section class="hero bg-cover bg-center " style="background-image: url('https://fscl01.fonpit.de/userfiles/7687254/image/iPhone_15_vs_15_Pro.jpg');height:500px;"> 
    <div class="container mx-auto text-center py-24"> 
      <h2 class="text-3xl font-bold text-white">Welcome to Our Store</h2>
      <p class="text-lg text-white mt-4">Discover amazing products and shop now!</p><br>
      <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded mt-6">Shop Now</a>
    </div>
  </section>

<main class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4 text-white">Product Catalog</h1>
    <div class="mb-4">
        <label for="category-filter" class="mr-2 text-white">Filter by Category:</label>
        <select id="category-filter" class="p-2 border rounded">
            <option value="all">All</option>
        </select>
    </div>
    <div id="product-list" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 rounded-full" style="width: 1640px;height:auto;"> 
    </div>
        
    </div>
</main>

<script src="script.js"></script>


<?php
include 'footer.php';
?>
