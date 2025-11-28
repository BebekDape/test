<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage E-Commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="bg-white shadow">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-blue-600">E-Shop</a>
            <div>
                <a href="#" class="mx-2 text-gray-700 hover:text-blue-600">Home</a>
                <a href="#" class="mx-2 text-gray-700 hover:text-blue-600">Shop</a>
                <a href="#" class="mx-2 text-gray-700 hover:text-blue-600">Cart</a>
                <a href="#" class="mx-2 text-gray-700 hover:text-blue-600">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-blue-100 py-16">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl font-bold text-blue-700 mb-4">Welcome to E-Shop</h1>
            <p class="text-lg text-gray-700 mb-6">Find your favorite products at the best prices!</p>
            <a href="#" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Shop Now</a>
        </div>
    </section>

    <!-- Product Grid -->
    <section class="container mx-auto px-4 py-12">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Featured Products</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Product Card 1 -->
            <div class="bg-white shadow rounded-lg p-6 text-center">
                <img src="https://via.placeholder.com/150" alt="Product 1" class="mx-auto mb-4 rounded">
                <h3 class="text-lg font-semibold mb-2">Product Name 1</h3>
                <p class="text-gray-600 mb-2">Short description of product 1.</p>
                <span class="block text-blue-600 font-bold mb-4">Rp 150.000</span>
                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add to Cart</button>
            </div>
            <!-- Product Card 2 -->
            <div class="bg-white shadow rounded-lg p-6 text-center">
                <img src="https://via.placeholder.com/150" alt="Product 2" class="mx-auto mb-4 rounded">
                <h3 class="text-lg font-semibold mb-2">Product Name 2</h3>
                <p class="text-gray-600 mb-2">Short description of product 2.</p>
                <span class="block text-blue-600 font-bold mb-4">Rp 200.000</span>
                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add to Cart</button>
            </div>
            <!-- Product Card 3 -->
            <div class="bg-white shadow rounded-lg p-6 text-center">
                <img src="https://via.placeholder.com/150" alt="Product 3" class="mx-auto mb-4 rounded">
                <h3 class="text-lg font-semibold mb-2">Product Name 3</h3>
                <p class="text-gray-600 mb-2">Short description of product 3.</p>
                <span class="block text-blue-600 font-bold mb-4">Rp 250.000</span>
                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add to Cart</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white shadow mt-12">
        <div class="container mx-auto px-4 py-6 text-center text-gray-600">
            &copy; 2025 E-Shop. All rights reserved.
        </div>
    </footer>
</body>
</html>