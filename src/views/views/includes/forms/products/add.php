<div class="mx-auto max-w-6xl md:pt-8 text-left px-6 sm:px-4 md:px-2 lg:px-0">
    <h2 class="text-4xl font-semibold tracking-tight text-gray-900">Add
        Product
    </h2>
    <p class="mt-2 text-lg text-gray-600">Please fill this form to add a new product.</p>
</div>
<form action="#" method="POST" class="mx-auto mt-16 max-w-6xl sm:mt-20">
    <div class="mt-4">
        <h1 class="text-2xl font-semibold tracking-tight text-gray-900 pt-4 pb-2">Product Information</h1>
    </div>
    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2 md:grid-cols-3">

        <div>
            <label for="product-name" class="block text-sm font-semibold text-gray-900">Product Name</label>
            <div class="mt-2.5">
                <input type="text" name="product-name" id="product-name"
                       class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
            </div>
        </div>
        <div>
            <label for="product-model" class="block text-sm font-semibold text-gray-900">Product Model</label>
            <div class="mt-2.5">
                <input type="text" name="product-model" id="product-model"
                       class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
            </div>
        </div>
        <div>
            <label for="brand-name" class="block text-sm font-semibold text-gray-900">Brand Name</label>
            <div class="mt-2.5">
                <select name="brand-name" id="brand-name" onchange="handleSelectChange(this)"
                        class="block w-full max-h-40 overflow-y-auto rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                    <option value="brand1">Brand 1</option>
                    <option value="brand2">Brand 2</option>
                    <option value="brand3">Brand 3</option>
                    <option value="AddBrand" class="text-center text-white bg-blue-800 hover:bg-gray-300">Add New
                    </option>
                </select>
            </div>
        </div>
        <div>
            <label for="category-name" class="block text-sm font-semibold text-gray-900">Category Name</label>
            <div class="mt-2.5">
                <select name="category-name" id="category-name"
                        class="block w-full max-h-40 overflow-y-auto rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                    <option value="Category1">Category 1</option>
                    <option value="Category2">Category 2</option>
                    <option value="AddCategory" class="text-center text-white bg-blue-800 hover:bg-gray-300">Add New
                    </option>
                </select>
            </div>
        </div>

        <div class="sm:col-span-2 md:col-span-2">
            <label for="barcode" class="block text-sm font-semibold text-gray-900">Barcode</label>
            <div class="mt-2.5 relative flex items-center">
                <input type="text" name="barcode" id="barcode" disabled
                       class="block w-full rounded-md border-0 px-3.5 py-2 pr-24 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"
                       required>
                <button type="button"
                        class="absolute right-0 top-0 h-full px-4 bg-indigo-600 text-white text-sm rounded-r-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Scan
                </button>
            </div>
        </div>
        <div class="sm:col-span-2 md:col-span-3">
            <div class="flex flex-col md:flex-row md:space-x-4">
                <div class="flex-1">
                    <label for="specifications" class="block text-sm font-semibold text-gray-900">Specifications</label>
                    <div class="mt-2.5">
                    <textarea name="specifications" id="specifications" rows="2"
                              class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"></textarea>
                    </div>
                </div>
                <div class="flex-1 mt-4 md:mt-0">
                    <label for="descriptions" class="block text-sm font-semibold text-gray-900">Descriptions</label>
                    <div class="mt-2.5">
                    <textarea name="descriptions" id="descriptions" rows="2"
                              class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <h1 class="text-balance text-2xl font-semibold tracking-tight text-gray-900 pt-4 pb-2">Economy
            Details</h1>

    </div>
    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2 md:grid-cols-3">
        <div class="">
            <label for="b_price" class="block text-sm font-semibold text-gray-900">Buy
                price</label>
            <div class="mt-2.5"><input type="number" name="b_price" id="b_price"
                                       class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"
                                       required></div>
        </div>
        <div>
            <label for="sell-price" class="block text-sm font-semibold text-gray-900">Sell price</label>
            <div class="mt-2.5"><input type="number" name="product-name" id="sell-price"
                                       class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"
                                       required>

            </div>
        </div>
        <div>
            <label for="stock-quantity" class="block text-sm font-semibold text-gray-900">Stock Quantity</label>
            <div class="mt-2.5"><input type="number" name="product-model" id="stock-quantity"
                                       class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
            </div>
        </div>
        <div>
            <label for="sku" class="block text-sm font-semibold text-gray-900">Stock Keep Unit</label>
            <div class="mt-2.5 ">
                <select name="product-name" id="sku"
                        class="block w-full max-h-40 overflow-y-auto rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                    <option value="Category1">SKU 1</option>
                    <option value="Category2">SKU 2</option>
                    <option value="AddSKU" class="text-center text-white bg-blue-800 hover:bg-gray-300">Add New
                    </option>

                </select>
            </div>
        </div>
        <div>
            <label for="purchased-invoice" class="block text-sm font-semibold text-gray-900">Purchased invoice</label>
            <div class="mt-2.5"><input type="text" name="product-name" id="purchased-invoice"
                                       class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
            </div>
        </div>
        <div>
            <label for="total" class="block text-sm font-semibold text-gray-900">Total</label>
            <div class="mt-2.5"><input type="text" disabled name="total" id="total"
                                       class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
            </div>
        </div>

    </div>
    <div class="mt-4">
        <h1 class="text-balance text-2xl font-semibold tracking-tight text-gray-900 pt-4 pb-2">Photos</h1>

    </div>
    <div class="w-full relative border-2 border-gray-300 border-dashed rounded-lg p-6" id="dropzone">
        <input type="file" id="file-upload" name="file-upload" multiple accept=".png, .jpg, .jpeg, .gif, .bmp, .webp"
               class="absolute inset-0 w-full h-full opacity-0 z-50"/>
        <div class="text-center">
            <img class="mx-auto h-12 w-12" src="https://www.svgrepo.com/show/357902/image-upload.svg" alt="">

            <h3 class="mt-2 text-sm font-medium text-gray-900">
                <label for="file-upload" class="relative cursor-pointer">
                    <span>Drag and drop</span>
                    <span class="text-indigo-600"> or browse</span>
                    <span>to upload</span>
                </label>
            </h3>
            <p class="mt-1 text-xs text-gray-500">
                PNG, JPG, GIF up to 200KB / Photo
            </p>
        </div>
        <div id="preview-thumbnails" class="mt-4 flex justify-center space-x-2"></div>
    </div>


    <div class="mt-4">
        <div class="flex ">
            <label for="default-checkbox"
                   class="text-balance text-2xl font-semibold tracking-tight text-gray-900 pt-4 pb-2">Warranty</label>
            <div class="flex items-center p-1">
                <input id="default-checkbox" type="checkbox"
                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            </div>
        </div>
        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2 md:grid-cols-3">
            <div>
                <label for="product-name" class="block text-sm font-semibold text-gray-900">Duration Type</label>
                <div class="mt-2.5 ">
                    <select name="product-name" id="product-name"
                            class="block w-full max-h-40 overflow-y-auto rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                        <option value="product3">Day</option>
                        <option value="product1">Month</option>
                        <option value="product2">Year</option>
                    </select>
                </div>
            </div>
            <div>
                <label for="product-name" class="block text-sm font-semibold text-gray-900">Warranty Duration</label>
                <div class="mt-2.5"><input type="number" name="product-name" id="product-name"
                                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                </div>
            </div>
            <div>
                <label for="product-model" class="block text-sm font-semibold text-gray-900">Warranty type</label>
                <div class="mt-2.5"><input type="text" name="product-model" id="product-model"
                                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4">
        <div class="flex ">
            <label for="Paid-checkbox"
                   class="text-balance text-2xl font-semibold tracking-tight text-gray-900 pt-4 pb-2">Fully Paid</label>
            <div class="flex items-center p-1">
                <input id="Paid-checkbox" type="checkbox" checked
                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            </div>
        </div>
        <div class="sm:col-span-2 md:col-span-3">
            <div class="flex flex-col md:flex-row md:space-x-4">
                <div class="flex-1">
                    <label for="paid-amount" class="block text-sm font-semibold text-gray-900">Paid Amount</label>
                    <div class="mt-2.5">
                        <input type="number" name="product-name" id="paid-amount"
                               class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                    </div>
                </div>
                <div class="flex-1 mt-4 md:mt-0">
                    <label for="product-model" class="block text-sm font-semibold text-gray-900">Not left Amount</label>
                    <div class="mt-2.5"><input type="text" name="product-model" id="product-model"
                                               class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-10">
        <button type="submit"
                class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            Save
        </button>
    </div>
</form>

<!-- Add New Brand -->
<div id="addBrandModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-gray-900 bg-opacity-50">
    <div class="bg-white rounded-lg p-6 w-full max-w-md">
        <h2 class="text-lg font-medium text-gray-900 mb-4">Add New Brand</h2>
        <form id="addBrandForm">
            <div class="mb-4">
                <label for="new-brand-name" class="block text-sm font-medium text-gray-700">Brand Name</label>
                <input type="text" id="new-brand-name" name="new-brand-name" placeholder="Brand Name"
                       class="mt-1 block w-full py-2 px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                <label for="brand-country-name" class="block text-sm font-medium text-gray-700">Brand Name</label>
                <input type="text" id="brand-country-name" name="new-brand-country" placeholder="Brand Country"
                       class="mt-1 block w-full py-2 px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                <label for="brand-level" class="block text-sm font-medium text-gray-700">Brand Name</label>
                <input type="text" id="brand-level" name="new-brand-level" placeholder="Brand Level"
                       class="mt-1 block w-full py-2 px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
            </div>
            <div class="flex flex-col items-center">
                <button type="submit"
                        class="w-full mb-2 px-4 py-2 bg-indigo-600 text-white rounded-md">Add Brand
                </button>
                <button type="button" onclick="closeBrandModal()" class="w-full px-4 py-2 bg-gray-300 rounded-md">Cancel
                </button>
            </div>
        </form>
    </div>
</div>


<!-- Add New Category -->
<div id="addBrandModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-gray-900 bg-opacity-50">
    <div class="bg-white rounded-lg p-6 w-full max-w-md">
        <h2 class="text-lg font-medium text-gray-900 mb-4">Add New Brand</h2>
        <form id="addBrandForm">
            <div class="mb-4">
                <label for="new-brand-name" class="block text-sm font-medium text-gray-700">Category Name</label>
                <input type="text" id="new-brand-name" name="new-brand-name" placeholder="Category Name"
                       class="mt-1 block w-full py-2 px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                <label for="sub-category-name" class="block text-sm font-medium text-gray-700">Sub-category
                    Name</label>
                <input
                    type="text" id="sub-category-name" name="new-brand-country" placeholder="Sub-Category name"
                    class="mt-1 block w-full py-2 px-4 rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
            </div>
            <div class="flex flex-col items-center">
                <button type="submit"
                        class="w-full mb-2 px-4 py-2 bg-indigo-600 text-white rounded-md">Add Brand
                </button>
                <button type="button" onclick="closeCategoryModal()" class="w-full px-4 py-2 bg-gray-300 rounded-md">
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

    function displayPreviews(files) {
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
    function handleSelectChange(select) {
        if (select.value === 'AddBrand') {
            openModal();
        }
    }

    function openModal() {
        // Get the dropdown element var
        const dropdown = document.getElementById('brand-name'); // Set the selectedIndex to 0 (first option)
        dropdown.selectedIndex = 0;

        document.getElementById('addBrandModal').classList.remove('hidden');
        document.getElementById('addBrandModal').classList.add('flex');


    }

    function closeBrandModal() {
        document.getElementById('addBrandModal').classList.add('hidden');
        document.getElementById('addBrandModal').classList.remove('flex');
    } // Handle form submission
    document.getElementById('addBrandForm').addEventListener('submit', function (event) {
        const brand_name = document.getElementsByName("new-brand-name");
        const brand_country = document.getElementsByName('new-brand-country');
        const brand_level = document.getElementsByName('new-brand-level');

        event.preventDefault();
        // Add your form submission logic here

    });
</script>
