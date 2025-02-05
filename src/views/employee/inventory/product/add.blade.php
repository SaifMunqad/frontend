<?php

use App\Main\PageData;

PageData::setPage('Product');
?>


@extends('layouts.employee.app')
@section('content')
    <form method="POST" class="mx-auto mt-4 max-w-7xl sm:mt-6">
        <div class="relative mt-4 overflow-hidden">
            <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:items-center justify-between">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100">Add Product</h3>
                    <p class="text-gray-500 dark:text-gray-400 text-sm">Please fill this form to add a new product!</p>
                </div>
            </div>
        </div>
        <div class="mt-2 dark:bg-gray-900 dark:text-white">
            <h1 class="text-md font-semibold tracking-tight text-gray-900 dark:text-white pt-4 pb-2">Product
                Information</h1>
        </div>
        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2 md:grid-cols-3">
            <div class="mt-4 dark:bg-gray-900 dark:text-white">
                <label for="product-name" class="block text-xs font-semibold text-gray-900 dark:text-white">Product
                    Name</label>
                <div class="mt-2.5">
                    <input type="text" name="product-name" id="product-name"
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:bg-gray-700 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 text-xs">
                </div>
            </div>
            <div class="mt-4 dark:bg-gray-900 dark:text-white">
                <label for="product-model" class="block text-xs font-semibold text-gray-900 dark:text-white">Product
                    Model</label>
                <div class="mt-2.5">
                    <input type="text" name="product-model" id="product-model"
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:bg-gray-700 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 text-xs">
                </div>
            </div>

            <div class="mt-4 dark:bg-gray-900 dark:text-white">
                <label for="brand-name" class="block text-xs font-semibold text-gray-900 dark:text-white">Brand
                    Name</label>
                <div class="mt-2.5">
                    <select name="brand-name" id="brand-name" onchange="handleSelectChange(this)"
                            class="block w-full max-h-40 overflow-y-auto rounded-md border-0 px-3.5 py-2 text-gray-900 dark:bg-gray-700 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 focus:ring-2 focus:ring-inset focus:ring-indigo-600 text-xs">
                        <option value="brand1">Brand 1</option>
                        <option value="brand2">Brand 2</option>
                        <option value="brand3">Brand 3</option>
                        <option value="AddBrand"
                                class="text-center text-white bg-blue-800 hover:bg-gray-300 dark:bg-blue-600 dark:hover:bg-gray-500">
                            Add New
                        </option>
                    </select>
                </div>
            </div>

            <div class="mt-4 dark:bg-gray-900 dark:text-white">
                <label for="category-name" class="block text-xs font-semibold text-gray-900 dark:text-white">Category
                    Name</label>
                <div class="mt-2.5">
                    <select name="category-name" id="category-name" onchange="handleSelectChange(this)"
                            class="block w-full max-h-40 overflow-y-auto rounded-md border-0 px-3.5 py-2 text-gray-900 dark:bg-gray-700 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 focus:ring-2 focus:ring-inset focus:ring-indigo-600 text-xs">
                        <option value="Category1">Category 1</option>
                        <option value="Category2">Category 2</option>
                        <option value="AddCategory"
                                class="text-center text-white bg-blue-800 hover:bg-gray-300 dark:bg-blue-600 dark:hover:bg-gray-500">
                            Add New
                        </option>
                    </select>
                </div>
            </div>

            <div class="sm:col-span-2 md:col-span-2 mt-4 dark:bg-gray-900 dark:text-white">
                <label for="barcode" class="block text-xs font-semibold text-gray-900 dark:text-white">Barcode</label>
                <div class="mt-2.5 relative flex items-center">
                    <input type="text" name="barcode" id="barcode" disabled
                           class="block w-full rounded-md border-0 px-3.5 py-2 pr-24 text-gray-900 dark:bg-gray-700 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 text-xs"
                           required>
                    <button type="button"
                            class="absolute right-0 top-0 h-full px-4 bg-indigo-600 text-white text-xs rounded-r-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Scan
                    </button>
                </div>
            </div>

            <div class="sm:col-span-2 md:col-span-3 mt-4 dark:bg-gray-900 dark:text-white">
                <div class="flex flex-col md:flex-row md:space-x-4">
                    <div class="flex-1">
                        <label for="specifications" class="block text-xs font-semibold text-gray-900 dark:text-white">Specifications</label>
                        <div class="mt-2.5">
                    <textarea name="specifications" oninput="autoResize()" id="specifications" rows="1"
                              class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:bg-gray-700 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 text-xs"></textarea>
                        </div>
                    </div>
                    <div class="flex-1 mt-4 md:mt-0">
                        <label for="descriptions" class="block text-xs font-semibold text-gray-900 dark:text-white">Descriptions</label>
                        <div class="mt-2.5">
                    <textarea name="descriptions" oninput="autoResize()" id="descriptions" rows="1"
                              class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:bg-gray-700 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 text-xs"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="mt-4 dark:bg-gray-900 dark:text-white">
            <h1 class="text-balance text-md font-semibold tracking-tight text-gray-900 dark:text-white pt-4 pb-2">
                Economy Details</h1>
        </div>
        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2 md:grid-cols-3 dark:bg-gray-900 dark:text-white">
            <div>
                <label for="b_price" class="block text-xs font-semibold text-gray-900 dark:text-white">Buy price</label>
                <div class="mt-2.5">
                    <input type="number" name="b_price" id="b_price"
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:bg-gray-700 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 text-xs"
                           required>
                </div>
            </div>
            <div>
                <label for="sell-price" class="block text-xs font-semibold text-gray-900 dark:text-white">Sell
                    price</label>
                <div class="mt-2.5">
                    <input type="number" name="sell-price" id="sell-price"
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:bg-gray-700 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 text-xs"
                           required>
                </div>
            </div>
            <div>
                <label for="stock-quantity" class="block text-xs font-semibold text-gray-900 dark:text-white">Stock
                    Quantity</label>
                <div class="mt-2.5">
                    <input type="number" name="stock-quantity" id="stock-quantity"
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:bg-gray-700 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 text-xs">
                </div>
            </div>
            <div>
                <label for="sku" class="block text-xs font-semibold text-gray-900 dark:text-white">Stock Keeping Unit
                    (SKU)</label>
                <div class="mt-2.5">
                    <select name="sku" id="sku"
                            class="block w-full max-h-40 overflow-y-auto rounded-md border-0 px-3.5 py-2 text-gray-900 dark:bg-gray-700 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 focus:ring-2 focus:ring-inset focus:ring-indigo-600 text-xs">
                        <option value="sku1">SKU 1</option>
                        <option value="sku2">SKU 2</option>
                        <option value="AddSKU"
                                class="text-center text-white bg-blue-800 hover:bg-gray-300 dark:bg-blue-600 dark:hover:bg-gray-500">
                            Add New
                        </option>
                    </select>
                </div>
            </div>
            <div>
                <label for="purchased-invoice" class="block text-xs font-semibold text-gray-900 dark:text-white">Purchased
                    Invoice</label>
                <div class="mt-2.5">
                    <input type="text" name="purchased-invoice" id="purchased-invoice"
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:bg-gray-700 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 text-xs">
                </div>
            </div>
            <div>
                <label for="total" class="block text-xs font-semibold text-gray-900 dark:text-white">Total</label>
                <div class="mt-2.5">
                    <input type="text" disabled name="total" id="total"
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:bg-gray-700 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 text-xs">
                </div>
            </div>
        </div>


        <div class="mt-4 dark:bg-gray-900 dark:text-white">
            <h1 class="text-balance text-md font-semibold tracking-tight text-gray-900 dark:text-white pt-4 pb-2">
                Photos</h1>
        </div>
        <div
                class="w-full relative border-2 border-gray-300 dark:border-gray-600 border-dashed rounded-lg p-6 dark:bg-gray-800"
                id="dropzone">
            <input type="file" id="file-upload" name="file-upload" multiple
                   accept=".png, .jpg, .jpeg, .gif, .bmp, .webp" class="absolute inset-0 w-full h-full opacity-0 z-50"/>
            <div class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 fill-black dark:fill-gray-200"
                     viewBox="0 0 24 24">
                    <path
                            d="M19,13a1,1,0,0,0-1,1v.38L16.52,12.9a2.79,2.79,0,0,0-3.93,0l-.7.7L9.41,11.12a2.85,2.85,0,0,0-3.93,0L4,12.6V7A1,1,0,0,1,5,6h7a1,1,0,0,0,0-2H5A3,3,0,0,0,2,7V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V14A1,1,0,0,0,19,13ZM5,20a1,1,0,0,1-1-1V15.43l2.9-2.9a.79.79,0,0,1,1.09,0l3.17,3.17,0,0L15.46,20Zm13-1a.89.89,0,0,1-.18.53L13.31,15l.7-.7a.77.77,0,0,1,1.1,0L18,17.21ZM22.71,4.29l-3-3a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21l-3,3a1,1,0,0,0,1.42,1.42L18,4.41V10a1,1,0,0,0,2,0V4.41l1.29,1.3a1,1,0,0,0,1.42,0A1,1,0,0,0,22.71,4.29Z"/>
                </svg>
                <h3 class="mt-2 text-xs font-medium text-gray-900 dark:text-white">
                    <label for="file-upload" class="relative cursor-pointer">
                        <span>Drag and drop</span>
                        <span class="text-indigo-600 dark:text-indigo-400"> or browse</span>
                        <span>to upload</span>
                    </label>
                </h3>
                <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">
                    PNG, JPG, GIF up to 200KB / Photo
                </p>
            </div>
            <div id="preview-thumbnails" class="mt-4 flex justify-center space-x-2"></div>
        </div>


        <div class="mt-4 dark:bg-gray-900 dark:text-white">
            <div class="flex ">
                <label for="default-checkbox"
                       class="text-balance text-md font-semibold tracking-tight text-gray-900 dark:text-white pt-4 pb-2">Warranty</label>
                <div class="flex items-center p-1">
                    <input id="default-checkbox" type="checkbox"
                           class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                </div>
            </div>
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2 md:grid-cols-3">
                <div>
                    <label for="product-name" class="block text-xs font-semibold text-gray-900 dark:text-white">Duration
                        Type</label>
                    <div class="mt-2.5">
                        <select name="product-name" id="product-name"
                                class="block w-full max-h-40 overflow-y-auto rounded-md border-0 px-3.5 py-2 text-gray-900 dark:bg-gray-700 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 focus:ring-2 focus:ring-inset focus:ring-indigo-600 text-xs">
                            <option value="product3">Day</option>
                            <option value="product1">Month</option>
                            <option value="product2">Year</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label for="product-name" class="block text-xs font-semibold text-gray-900 dark:text-white">Warranty
                        Duration</label>
                    <div class="mt-2.5">
                        <input type="number" name="product-name" id="product-name"
                               class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:bg-gray-700 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 text-xs">
                    </div>
                </div>
                <div>
                    <label for="product-model" class="block text-xs font-semibold text-gray-900 dark:text-white">Warranty
                        Type</label>
                    <div class="mt-2.5">
                        <input type="text" name="product-model" id="product-model"
                               class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:bg-gray-700 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 text-xs">
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-4 dark:bg-gray-900 dark:text-white">
            <div class="flex ">
                <label for="Paid-checkbox"
                       class="text-balance text-md font-semibold tracking-tight text-gray-900 dark:text-white pt-4 pb-2">Fully
                    Paid</label>
                <div class="flex items-center p-1">
                    <input id="Paid-checkbox" type="checkbox" checked
                           class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                </div>
            </div>
            <div class="sm:col-span-2 md:col-span-3">
                <div class="flex flex-col md:flex-row md:space-x-4">
                    <div class="flex-1">
                        <label for="paid-amount" class="block flex text-xs font-semibold text-gray-900 dark:text-white">Paid
                            Amount
                            <span class="ml-1 relative group flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-4 w-4 text-gray-500 dark:text-gray-300"
                         viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M12 2a10 10 0 100 20 10 10 0 000-20zM11 7a1 1 0 012 0v4a1 1 0 01-2 0V7zm1 8a1.25 1.25 0 110-2.5 1.25 1.25 0 010 2.5z"
                              clip-rule="evenodd"/>
                    </svg>
                    <span
                            class="absolute left-1/2 transform -translate-x-1/2 bottom-full mb-2 w-56 px-3 py-2 text-xs text-white bg-black rounded-lg opacity-0 scale-0 group-hover:scale-100 group-hover:opacity-100 transition-transform duration-200 origin-bottom">
                        The paid amount will be deducted from your account, and the remaining balance will be added to the supplier's borrowings.
                    </span>
                </span>
                        </label>
                        <div class="mt-2.5">
                            <input type="number" name="paid-amount" id="paid-amount"
                                   class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:bg-gray-700 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 text-xs">
                        </div>
                    </div>
                    <div class="flex-1 mt-4 md:mt-0">
                        <label for="not-left-amount" class="block text-xs font-semibold text-gray-900 dark:text-white">Not
                            Left Amount</label>
                        <div class="mt-2.5">
                            <input type="text" name="not-left-amount" id="not-left-amount"
                                   class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:bg-gray-700 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 text-xs">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="mt-10 dark:bg-gray-900 dark:text-white">
            <button type="submit"
                    class="block w-full rounded-md bg-indigo-600 hover:bg-indigo-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 dark:bg-indigo-700 dark:hover:bg-indigo-600">
                Save
            </button>
        </div>

    </form>

    <!-- Add New Brand -->
    <div id="addBrandModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-gray-900 bg-opacity-50">
        <div class="bg-white dark:bg-gray-800 rounded-lg p-6 w-full max-w-md">
            <h2 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Add New Brand</h2>
            <form id="addBrandForm">
                <div class="mb-4">
                    <label for="new-brand-name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Brand
                        Name</label>
                    <input type="text" id="new-brand-name" name="new-brand-name" placeholder="Brand Name"
                           class="mt-1 block w-full py-2 px-4 rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:border-indigo-500 dark:focus:border-indigo-400 focus:ring focus:ring-indigo-500 dark:focus:ring-indigo-400 focus:ring-opacity-50 dark:bg-gray-700 dark:text-white">

                    <label for="brand-country-name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Brand
                        Country</label>
                    <input type="text" id="brand-country-name" name="new-brand-country" placeholder="Brand Country"
                           class="mt-1 block w-full py-2 px-4 rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:border-indigo-500 dark:focus:border-indigo-400 focus:ring focus:ring-indigo-500 dark:focus:ring-indigo-400 focus:ring-opacity-50 dark:bg-gray-700 dark:text-white">

                    <label for="brand-level" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Brand
                        Level</label>
                    <input type="text" id="brand-level" name="new-brand-level" placeholder="Brand Level"
                           class="mt-1 block w-full py-2 px-4 rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:border-indigo-500 dark:focus:border-indigo-400 focus:ring focus:ring-indigo-500 dark:focus:ring-indigo-400 focus:ring-opacity-50 dark:bg-gray-700 dark:text-white">
                </div>
                <div class="flex flex-col items-center">
                    <button type="submit"
                            class="w-full mb-2 px-4 py-2 bg-indigo-600 text-white dark:bg-indigo-700 dark:hover:bg-indigo-600 rounded-md">
                        Add Brand
                    </button>
                    <button type="button" onclick="closeBrandModal()"
                            class="w-full px-4 py-2 bg-gray-300 dark:bg-gray-600 dark:hover:bg-gray-500 rounded-md">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Add New Category -->
    <div id="addCategoryModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-gray-900 bg-opacity-50">
        <div class="bg-white dark:bg-gray-800 rounded-lg p-6 w-full max-w-md">
            <h2 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Add New Category</h2>
            <form id="addBrandForm">
                <div class="mb-4">
                    <label for="new-brand-name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Category
                        Name</label>
                    <input type="text" id="new-brand-name" name="new-brand-name" placeholder="Brand Name"
                           class="mt-1 block w-full py-2 px-4 rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:border-indigo-500 dark:focus:border-indigo-400 focus:ring focus:ring-indigo-500 dark:focus:ring-indigo-400 focus:ring-opacity-50 dark:bg-gray-700 dark:text-white">

                    <label for="main-category" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Main
                        Category</label>
                    <select id="main-category" name="main-category"
                            class="mt-1 block w-full py-2 px-4 rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:border-indigo-500 dark:focus:border-indigo-400 focus:ring focus:ring-indigo-500 dark:focus:ring-indigo-400 focus:ring-opacity-50 dark:bg-gray-700 dark:text-white">
                        <option value="category1">Category 1</option>
                        <option value="category2">Category 2</option>
                        <option value="category3">Category 3</option>
                        <option value="add-category"
                                class="text-center text-white bg-blue-800 hover:bg-gray-300 dark:bg-blue-600 dark:hover:bg-gray-500">
                            Add New Category
                        </option>
                    </select>
                </div>
                <div class="flex flex-col items-center">
                    <button type="submit"
                            class="w-full mb-2 px-4 py-2 bg-indigo-600 text-white dark:bg-indigo-700 dark:hover:bg-indigo-600 rounded-md">
                        Add Brand
                    </button>
                    <button type="button" onclick="closeCategoryModal()"
                            class="w-full px-4 py-2 bg-gray-300 dark:bg-gray-600 dark:hover:bg-gray-500 rounded-md">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>


    <script>
      var dropzone = document.getElementById('dropzone');
      var input = document.getElementById('file-upload');

      dropzone.addEventListener('dragover', e => {
        e.preventDefault();
        dropzone.classList.add('border-indigo-600');
      });

      dropzone.addEventListener('dragleave', e => {
        e.preventDefault();
        dropzone.classList.remove('border-indigo-600');
      });

      dropzone.addEventListener('drop', e => {
        e.preventDefault();
        dropzone.classList.remove('border-indigo-600');
        var files = e.dataTransfer.files;
        displayPreviews(files);
      });

      input.addEventListener('change', e => {
        var files = e.target.files;
        displayPreviews(files);
      });

      function displayPreviews (files) {
        var previewContainer = document.getElementById('preview-thumbnails');
        previewContainer.innerHTML = ''; // Clear existing previews

        for (let i = 0; i < files.length; i++) {
          var file = files[i];
          if (file.type.startsWith('image/')) {
            var reader = new FileReader();
            reader.onload = function (e) {
              var imgElement = document.createElement('img');
              imgElement.src = e.target.result;
              imgElement.classList.add('w-6', 'h-6', 'rounded', 'border', 'shadow-sm');
              previewContainer.appendChild(imgElement);
            };
            reader.readAsDataURL(file);
          }
        }
      }

      //add brand modal controller
      function handleSelectChange (select) {
        if (select.value === 'AddBrand') {
          openBrandModal();
        } else if (select.value === 'AddCategory') {
          openCategoryModal();
        } else if (select.value === 'AddSKU') {
          openSkuModal();
        }
      }

      function openBrandModal () {
        // Get the dropdown element var
        const dropdown = document.getElementById('brand-name'); // Set the selectedIndex to 0 (first option)
        dropdown.selectedIndex = 0;
        document.getElementById('addBrandModal').classList.remove('hidden');
        document.getElementById('addBrandModal').classList.add('flex');
      }

      function openCategoryModal () {
        // Get the dropdown element var
        const dropdown = document.getElementById('category-name'); // Set the selectedIndex to 0 (first option)
        dropdown.selectedIndex = 0;
        document.getElementById('addCategoryModal').classList.remove('hidden');
        document.getElementById('addCategoryModal').classList.add('flex');
      }

      function closeBrandModal () {
        document.getElementById('addBrandModal').classList.add('hidden');
        document.getElementById('addBrandModal').classList.remove('flex');
      }

      function closeCategoryModal () {
        document.getElementById('addCategoryModal').classList.add('hidden');
        document.getElementById('addCategoryModal').classList.remove('flex');
      }

      // Handle form submission
      document.getElementById('addBrandForm').addEventListener('submit', function (event) {
        const brand_name = document.getElementsByName('new-brand-name');
        const brand_country = document.getElementsByName('new-brand-country');
        const brand_level = document.getElementsByName('new-brand-level');

        event.preventDefault();
        // Add your form submission logic here

      });


    </script>

@endsection
