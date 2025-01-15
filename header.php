<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Catalog</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body class="bg-gray-100 text-gray-900">

 
  <nav class="bg-white shadow-md">
    <div class="containere mx-auto px-4 py-2 flex items-center justify-between">
      <a href="#" class="text-lg font-bold text-gray-800">Smart PiXel</a>
    
      <button id="menu-toggle" class="md:hidden focus:outline-none text-gray-700 hover:text-gray-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    
      <ul id="menu" class="hidden md:flex space-x-6">
        <li><a href="#" class="text-gray-700 hover:text-gray-500">Home</a></li>
        <li><a href="#" class="text-gray-700 hover:text-gray-500">About</a></li>
        <li><a href="#" class="text-gray-700 hover:text-gray-500">Products</a></li>
        <li><a href="#" class="text-gray-700 hover:text-gray-500">Contact</a></li>
      </ul>
    </div>
  </nav>


  <script src="script.js"></script>
</body>
</html>