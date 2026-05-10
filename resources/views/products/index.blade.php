<x-app-layout>

<div class="py-10" x-data="{ open: false, openEdit: null, openDelete: null }">

    <div class="max-w-7xl mx-auto px-4">

        <h1 class="text-xl font-bold mb-4">School Supplies</h1>

        <!-- ADD BUTTON -->
        <button
            @click="open = true"
            class="bg-green-600 text-dark px-4 py-2 rounded"
        >
            + Add Product
        </button>

        <!-- PRODUCTS LIST -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-6">

            @foreach($products as $product)
                <div class="border p-4 rounded shadow">

                    <h2 class="font-bold">{{ $product->product_name }}</h2>

                    <p class="text-gray-600">
                        ₱{{ number_format($product->price, 2) }}
                    </p>

                    <p class="text-sm text-gray-500">
                        {{ $product->product_desc }}
                    </p>

                    <!-- EDIT BUTTON -->
                    <button
                        @click="openEdit = {{ $product->id }}"
                        class="bg-yellow-500 text-dark px-3 py-1 rounded mt-3"
                    >
                        Edit
                    </button>

                </div>
            @endforeach

        </div>

    </div>

    <!-- ================= ADD MODAL ================= -->
    <div
        x-show="open"
        class="fixed inset-0 bg-black/50 flex items-center justify-center z-50"
    >

       <div class="bg-white w-full max-w-lg p-6 rounded">

            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-bold">Add Product</h2>

                <button
                    @click="open = false"
                    class="text-xl px-2"
                >
                    ✕
                </button>
            </div>

            <form method="POST" action="{{ route('products.store') }}">
                @csrf

                <input
                    type="text"
                    name="product_name"
                    placeholder="Product Name"
                    class="w-full border p-2 mb-3 rounded"
                >

                <input
                    type="number"
                    step="0.01"
                    name="price"
                    placeholder="Price"
                    class="w-full border p-2 mb-3 rounded"
                >

                <textarea
                    name="product_desc"
                    placeholder="Description"
                    class="w-full border p-2 mb-3 rounded"
                ></textarea>

                <button class="bg-blue-600 text-dark px-4 py-2 rounded w-full">
                    Save Product
                </button>

            </form>

        </div>
    </div>

        <!-- ================= EDIT MODAL ================= -->
        <div
            x-show="openEdit"
            class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 p-4"
        >

            @foreach($products as $product)

                <div
                    x-show="openEdit == {{ $product->id }}"
                    class="bg-white w-full max-w-lg rounded-2xl shadow-xl overflow-hidden"
                >

                    <!-- HEADER -->
                    <div class="flex items-center justify-between px-6 py-4 border-b">

                        <h2 class="text-xl font-semibold text-gray-800">
                            Edit Product
                        </h2>

                        <button
                            @click="openEdit = null"
                            class="text-gray-500 hover:text-red-500 text-2xl transition"
                        >
                            ✕
                        </button>

                    </div>

                    <!-- BODY -->
                    <div class="p-6">

                        <form
                            method="POST"
                            action="{{ route('products.update', $product->id) }}"
                            class="space-y-4"
                        >
                            @csrf
                            @method('PUT')

                            <!-- Product Name -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">
                                    Product Name
                                </label>

                                <input
                                    type="text"
                                    name="product_name"
                                    value="{{ $product->product_name }}"
                                    class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"
                                >
                            </div>

                            <!-- Price -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">
                                    Price
                                </label>

                                <input
                                    type="number"
                                    step="0.01"
                                    name="price"
                                    value="{{ $product->price }}"
                                    class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"
                                >
                            </div>

                            <!-- Description -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">
                                    Description
                                </label>

                                <textarea
                                    name="product_desc"
                                    rows="4"
                                    class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"
                                >{{ $product->product_desc }}</textarea>
                            </div>

                            <!-- ACTION BUTTONS -->
                            <div class="flex gap-3 pt-2">

                                <button
                                    type="submit"
                                    class="flex-1 bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg font-medium transition"
                                >
                                    Update Product
                                </button>

                                <button
                                    type="button"
                                    @click="
                                        openEdit = null;
                                        openDelete = {{ $product->id }}
                                    "
                                    class="bg-red-600 hover:bg-red-700 text-white px-5 py-3 rounded-lg font-medium transition"
                                >
                                    Delete
                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            @endforeach

        </div>

    <!-- ================= DELETE MODAL ================= -->
        <div
            x-show="openDelete"
            class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 p-4"
        >

            @foreach($products as $product)

                <div
                    x-show="openDelete == {{ $product->id }}"
                    class="bg-white w-full max-w-md rounded-2xl shadow-xl overflow-hidden"
                >

                    <!-- HEADER -->
                    <div class="flex items-center justify-between px-6 py-4 border-b">

                        <h2 class="text-xl font-semibold text-red-600">
                            Delete Product
                        </h2>

                        <button
                            @click="openDelete = null"
                            class="text-gray-500 hover:text-red-500 text-2xl transition"
                        >
                            ✕
                        </button>

                    </div>

                    <!-- BODY -->
                    <div class="p-6">

                        <!-- WARNING ICON -->
                        <div class="flex justify-center mb-4">
                            <div class="bg-red-100 text-red-600 w-16 h-16 rounded-full flex items-center justify-center text-3xl">
                                !
                            </div>
                        </div>

                        <p class="text-center text-gray-700 mb-6 leading-relaxed">
                            Are you sure you want to delete
                            <strong>{{ $product->product_name }}</strong>?
                            <br>
                            This action cannot be undone.
                        </p>

                        <form
                            method="POST"
                            action="{{ route('products.destroy', $product->id) }}"
                        >
                            @csrf
                            @method('DELETE')

                            <div class="flex gap-3">

                                <!-- CANCEL -->
                                <button
                                    type="button"
                                    @click="openDelete = null"
                                    class="w-full border border-gray-300 hover:bg-gray-100 py-3 rounded-lg font-medium transition"
                                >
                                    Cancel
                                </button>

                                <!-- DELETE -->
                                <button
                                    type="submit"
                                    class="w-full bg-red-600 hover:bg-red-700 text-white py-3 rounded-lg font-medium transition"
                                >
                                    Delete
                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            @endforeach

        </div>

</div>

</x-app-layout>