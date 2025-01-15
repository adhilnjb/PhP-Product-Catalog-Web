document.addEventListener("DOMContentLoaded", () => {
    const categoryFilter = document.getElementById("category-filter");
    const productList = document.getElementById("product-list");
    

    fetch("products.json")
        .then((response) => response.json())
        .then((products) => {
            const categories = new Set(products.map((p) => p.category));
            categories.forEach((category) => {
                const option = document.createElement("option");
                option.value = category;
                option.textContent = category;
                categoryFilter.appendChild(option);
            });

            const displayProducts = (filter) => {
                productList.innerHTML = "";
                const filteredProducts = filter === "all" ? products : products.filter((p) => p.category === filter);
                filteredProducts.forEach((product) => {
                    const card = document.createElement("div");
                    card.className = "bg-white shadow-md rounded p-4";
                    card.innerHTML = `
                        <img src="${product.image}" alt="${product.name}" class="w-full h-40 object-cover mb-4">
                        <h2 class="text-lg font-bold mb-2">${product.name}</h2>
                        <p class="text-gray-700 mb-2">${product.description}</p>
                        <p class="text-blue-500 font-bold mb-2">Rs.${product.price.toFixed(2)}</p>
                        <p class="text-sm text-gray-500">Category: ${product.category}</p>
                    `;
                    productList.appendChild(card);
                });
            };

            categoryFilter.addEventListener("change", (e) => {
                displayProducts(e.target.value);
            });

            displayProducts("all");
        });
});






