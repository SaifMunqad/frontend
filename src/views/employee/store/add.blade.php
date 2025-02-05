@extends('layouts.employee.app')
@section('content')
    <div class="mx-auto max-w-6xl md:pt-8 text-left dark:text-gray-200">
        <h2 class="text-4xl font-semibold tracking-tight text-gray-900 dark:text-gray-100">Add Store</h2>
        <p class="mt-2 text-lg text-gray-600 dark:text-gray-300">Please fill this form to add a new store.</p>
    </div>

    <form action="#" method="POST" class="mx-auto mt-16 max-w-6xl sm:mt-4">
        <div class="mt-4">
            <h1 class="text-2xl font-semibold tracking-tight text-gray-900 pt-4 pb-2 dark:text-gray-100">Store
                Information</h1>
        </div>
        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2 md:grid-cols-3">
            <div>
                <label for="product-name" class="block text-sm font-semibold text-gray-900 dark:text-gray-100">Store
                    Name - English</label>
                <div class="mt-2.5">
                    <input type="text" name="product-name" id="product-name"
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                </div>
            </div>
            <div class="sm:col-span-2 md:col-span-2">
                <label for="store-full-name" class="block text-sm font-semibold text-gray-900 dark:text-gray-100">Store
                    Full Name - English</label>
                <div class="mt-2.5">
                    <input type="text" name="product-name" id="product-name"
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                </div>
            </div>
            <div>
                <label for="product-name" class="block text-sm font-semibold text-gray-900 dark:text-gray-100">Store
                    Name - Dari</label>
                <div class="mt-2.5">
                    <input type="text" name="product-name" id="product-name" dir="rtl"
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                </div>
            </div>
            <div class="sm:col-span-2 md:col-span-2">
                <label for="store-full-name" class="block text-sm font-semibold text-gray-900 dark:text-gray-100">Store
                    Full Name - Dari</label>
                <div class="mt-2.5">
                    <input type="text" name="product-name" id="product-name" dir="rtl"
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                </div>
            </div>
            <div>
                <label for="product-name" class="block text-sm font-semibold text-gray-900 dark:text-gray-100">Store
                    Name - Pashto</label>
                <div class="mt-2.5">
                    <input type="text" name="product-name" id="product-name" dir="rtl"
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                </div>
            </div>
            <div class="sm:col-span-2 md:col-span-2">
                <label for="store-full-name" class="block text-sm font-semibold text-gray-900 dark:text-gray-100">Store
                    Full Name - Pashto</label>
                <div class="mt-2.5">
                    <input type="text" name="product-name" id="product-name" dir="rtl"
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                </div>
            </div>
            <div>
                <label for="brand-name"
                       class="block text-sm font-semibold text-gray-900 dark:text-gray-100 flex items-center space-x-2">
                    Store Unique Name
                    <span class="relative group flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500 dark:text-gray-300" viewBox="0 0 24 24"
                 fill="currentColor">
                <path fill-rule="evenodd"
                      d="M12 2a10 10 0 100 20 10 10 0 000-20zM11 7a1 1 0 012 0v4a1 1 0 01-2 0V7zm1 8a1.25 1.25 0 110-2.5 1.25 1.25 0 010 2.5z"
                      clip-rule="evenodd"/>
            </svg>
            <span
                class="absolute left-1/2 transform -translate-x-1/2 bottom-full mb-2 w-56 px-3 py-2 text-xs text-white bg-black rounded-lg opacity-0 scale-0 group-hover:scale-100 group-hover:opacity-100 transition-transform duration-200 origin-bottom">
                This identifier is unique, similar to a username, but specifically used for the store.
            </span>
        </span>
                </label>
                <div class="mt-2.5">
                    <input type="text" name="product-name" id="product-name"
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                </div>
            </div>

            <div>
                <label for="product-model" class="block text-sm font-semibold text-gray-900 dark:text-gray-100">Store
                    Type</label>
                <div class="mt-2.5">
                    <input type="text" name="product-model" id="product-model"
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                </div>
            </div>
            <div>
                <label for="brand-name"
                       class="block text-sm font-semibold text-gray-900 dark:text-gray-100 flex items-center space-x-2">
                    Store Currency
                    <span class="relative group flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500 dark:text-gray-300" viewBox="0 0 24 24"
                 fill="currentColor">
                <path fill-rule="evenodd"
                      d="M12 2a10 10 0 100 20 10 10 0 000-20zM11 7a1 1 0 012 0v4a1 1 0 01-2 0V7zm1 8a1.25 1.25 0 110-2.5 1.25 1.25 0 010 2.5z"
                      clip-rule="evenodd"/>
            </svg>
            <span
                class="absolute left-1/2 transform -translate-x-1/2 bottom-full mb-2 w-56 px-3 py-2 text-xs text-white bg-black rounded-lg opacity-0 scale-0 group-hover:scale-100 group-hover:opacity-100 transition-transform duration-200 origin-bottom">
                The currency selection will be permanent until the next complete update.
            </span>
        </span>
                </label>
                <div class="mt-2.5">
                    <select name="brand-name" id="brand-name"
                            class="block w-full max-h-40 overflow-y-auto rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                        <option value="AFN">AFN</option>
                        <option value="USD">USD</option>
                        <option value="Euro">Euro</option>
                        <option value="IRR">IRR</option>
                    </select>
                </div>
            </div>
            <div>
                <label for="category-name" class="block text-sm font-semibold text-gray-900 dark:text-gray-100">Category
                    Name</label>
                <div class="mt-2.5">
                    <select name="category-name" id="category-name"
                            class="block w-full max-h-40 overflow-y-auto rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                        <option value="Category1">Category 1</option>
                        <option value="Category2">Category 2</option>
                    </select>
                </div>
            </div>
            <div class="sm:col-span-2 md:col-span-3">
                <div class="flex flex-col md:flex-row md:space-x-4">
                    <div class="flex-1">
                        <label for="specifications"
                               class="block text-sm font-semibold text-gray-900 dark:text-gray-100">Store Bio</label>
                        <div class="mt-2.5">
                <textarea name="specifications" id="specifications" rows="2"
                          class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"></textarea>
                        </div>
                    </div>
                    <div class="flex-1 mt-4 md:mt-0">
                        <label for="descriptions" class="block text-sm font-semibold text-gray-900 dark:text-gray-100">Other
                            Descriptions</label>
                        <div class="mt-2.5">
                <textarea name="descriptions" id="descriptions" rows="2"
                          class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"></textarea>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-4">
            <h1 class="text-balance text-2xl font-semibold tracking-tight text-gray-900 pt-4 pb-2 dark:text-gray-100">
                Logo</h1>
        </div>
        <div
            class="w-full relative border-2 border-gray-300 dark:border-gray-600 border-dashed rounded-lg p-6 dark:bg-gray-700"
            id="dropzone">
            <input type="file" id="file-upload" name="file-upload" accept=".png"
                   class="absolute inset-0 w-full h-full opacity-0 z-50"/>
            <div class="text-center">
                <img class="mx-auto h-12 w-12" src="https://www.svgrepo.com/show/357902/image-upload.svg" alt="">
                <h3 class="mt-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                    <label for="file-upload" class="relative cursor-pointer">
                        <span>Drag and drop</span>
                        <span class="text-indigo-600 dark:text-indigo-300"> or browse</span>
                        <span>to upload</span>
                    </label>
                </h3>
                <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">
                    PNG - Photo 200KB
                </p>
            </div>
            <div id="preview-thumbnails" class="mt-4 flex justify-center space-x-2"></div>
        </div>

        <div class="mt-4">
            <h1 class="text-2xl font-semibold tracking-tight text-gray-900 pt-4 pb-2 dark:text-gray-100">Admin
                Information</h1>
        </div>

        <div class="flex justify-center items-center my-4 space-x-6">
            <div class="shrink-0">
                <img id="preview_img" class="h-16 w-16 shadow-sm object-cover rounded-full"
                     src="https://www.uparcel.sg/static/uparceldelivery/img/block/men-placeholder.png"
                     alt="profile photo"/>
            </div>
            <label class="block">
        <span class="sr-only">
            Choose profile photo
        </span>
                <input type="file"
                       accept="image/*"
                       required
                       onchange="loadFile(event)"
                       class="block w-full text-sm text-slate-800 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 dark:file:bg-gray-700 file:text-gray-300 hover:file:bg-gray-800 dark:text-gray-100"/>
            </label>
        </div>

        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2 md:grid-cols-3">
            <div>
                <label for="first-name" class="block text-sm font-semibold text-gray-900 dark:text-gray-100">First
                    Name</label>
                <div class="mt-2.5">
                    <input type="text" name="product-name" id="first-name"
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                </div>
            </div>
            <div>
                <label for="last-name" class="block text-sm font-semibold text-gray-900 dark:text-gray-100">Last
                    Name</label>
                <div class="mt-2.5">
                    <input type="text" name="product-name" id="last-name"
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                </div>
            </div>
            <div>
                <label for="brand-name"
                       class="block text-sm font-semibold text-gray-900 dark:text-gray-100 flex items-center space-x-2">
                    Username <span class="relative group flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="h-4 w-4 text-gray-500 dark:text-gray-300"
                     viewBox="0 0 24 24" fill="currentColor">
                    <path
                        fill-rule="evenodd"
                        d="M12 2a10 10 0 100 20 10 10 0 000-20zM11 7a1 1 0 012 0v4a1 1 0 01-2 0V7zm1 8a1.25 1.25 0 110-2.5 1.25 1.25 0 010 2.5z"
                        clip-rule="evenodd"/>
                </svg>
                <span
                    class="absolute left-1/2 transform -translate-x-1/2 bottom-full mb-2 w-56 px-3 py-2 text-xs text-white bg-black rounded-lg opacity-0 scale-0 group-hover:scale-100 group-hover:opacity-100 transition-transform duration-200 origin-bottom"> Each username must be unique and can only be associated with a single account.
                </span> </span>
                </label>
                <div class="mt-2.5">
                    <input type="text" name="product-name" id="user-name"
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                </div>
            </div>
            <div>
                <label for="password"
                       class="block text-sm font-semibold text-gray-900 dark:text-gray-100">Password</label>
                <div class="mt-2.5">
                    <input type="password" name="product-name" id="password"
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                </div>
            </div>
            <div>
                <label for="verify-password" class="block text-sm font-semibold text-gray-900 dark:text-gray-100">Verify
                    Password</label>
                <div class="mt-2.5">
                    <input type="password" name="product-name" id="verify-password"
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                </div>
            </div>
            <div>
                <label for="email" class="block text-sm font-semibold text-gray-900 dark:text-gray-100">Email</label>
                <div class="mt-2.5">
                    <input type="email" name="product-name" id="email" required
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                </div>
            </div>
            <div>
                <label for="phone" class="block text-sm font-semibold text-gray-900 dark:text-gray-100">Phone</label>
                <div class="mt-2.5 relative flex items-center">
                    <button type="button"
                            class="absolute left-0 top-0 h-full w-16 bg-indigo-600 text-white text-sm rounded-l-md shadow-sm cursor-default">
                        +93
                    </button>
                    <input type="text" name="phone" id="phone" pattern="[0-9]*" inputmode="numeric"
                           class="block w-full rounded-md border-0 pl-20 pr-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"
                           required>
                </div>
            </div>
            <div>
                <label for="date-birth" class="block text-sm font-semibold text-gray-900 dark:text-gray-100">Date of
                    birth</label>
                <div class="mt-2.5">
                    <input type="date" name="date-birth" id="product-name"
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                </div>
            </div>
            <div>
                <label for="language"
                       class="block text-sm font-semibold text-gray-900 dark:text-gray-100">Language</label>
                <div class="mt-2.5">
                    <select name="category-name" id="language"
                            class="block w-full max-h-40 overflow-y-auto rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                        <option value="Category1">English</option>
                        <option value="Category2">Pashto</option>
                        <option value="Category2">Dari</option>
                    </select>
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
                        imgElement.classList.add('w-8', 'h-8', 'rounded', 'border', 'shadow-sm');
                        previewContainer.appendChild(imgElement);
                    };
                    reader.readAsDataURL(file);
                }
            }
        }

        const loadFile = function (event) {

            const input = event.target;
            const file = input.files[0];
            const type = file.type;

            const output = document.getElementById('preview_img');


            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function () {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>

@endsection
