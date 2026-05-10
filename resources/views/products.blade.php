<x-app-layout>
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-1 lg:px-4">

            <h1 class="text-xl font-bold mb-6">Products Page</h1>

            <!-- Products Grid (3 columns per row) -->
           <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- Product 1 -->
                <div class="border rounded-lg p-4 shadow">
                    <h2 class="text-lg font-semibold">Product 1</h2>
                    <p class="text-gray-600 mb-2">₱100.00</p>
                    <div class="flex items-center gap-2 mb-3">
                        <label class="text-sm">Qty:</label>
                        <input type="number" min="1" value="1" class="w-20 border rounded px-2 py-1">
                    </div>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 w-full">
                        Add to Cart
                    </button>
                </div>

                <!-- Product 2 -->
                <div class="border rounded-lg p-4 shadow">
                    <h2 class="text-lg font-semibold">Product 2</h2>
                    <p class="text-gray-600 mb-2">₱150.00</p>
                    <div class="flex items-center gap-2 mb-3">
                        <label class="text-sm">Qty:</label>
                        <input type="number" min="1" value="1" class="w-20 border rounded px-2 py-1">
                    </div>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 w-full">
                        Add to Cart
                    </button>
                </div>

                <!-- Product 3 -->
                <div class="border rounded-lg p-4 shadow">
                    <h2 class="text-lg font-semibold">Product 3</h2>
                    <p class="text-gray-600 mb-2">₱200.00</p>
                    <div class="flex items-center gap-2 mb-3">
                        <label class="text-sm">Qty:</label>
                        <input type="number" min="1" value="1" class="w-20 border rounded px-2 py-1">
                    </div>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 w-full">
                        Add to Cart
                    </button>
                </div>

                <!-- Product 4 -->
                <div class="border rounded-lg p-4 shadow">
                    <h2 class="text-lg font-semibold">Product 4</h2>
                    <p class="text-gray-600 mb-2">₱250.00</p>
                    <div class="flex items-center gap-2 mb-3">
                        <label class="text-sm">Qty:</label>
                        <input type="number" min="1" value="1" class="w-20 border rounded px-2 py-1">
                    </div>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 w-full">
                        Add to Cart
                    </button>
                </div>

                <!-- Product 5 -->
                <div class="border rounded-lg p-4 shadow">
                    <h2 class="text-lg font-semibold">Product 5</h2>
                    <p class="text-gray-600 mb-2">₱300.00</p>
                    <div class="flex items-center gap-2 mb-3">
                        <label class="text-sm">Qty:</label>
                        <input type="number" min="1" value="1" class="w-20 border rounded px-2 py-1">
                    </div>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 w-full">
                        Add to Cart
                    </button>
                </div>

                <!-- Product 6 -->
                <div class="border rounded-lg p-4 shadow">
                    <h2 class="text-lg font-semibold">Product 6</h2>
                    <p class="text-gray-600 mb-2">₱350.00</p>
                    <div class="flex items-center gap-2 mb-3">
                        <label class="text-sm">Qty:</label>
                        <input type="number" min="1" value="1" class="w-20 border rounded px-2 py-1">
                    </div>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 w-full">
                        Add to Cart
                    </button>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>