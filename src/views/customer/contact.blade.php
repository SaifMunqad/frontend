@extends('layouts.customer.app')
@section('content')
    <div class="max-w-4xl px-4 py-6 mx-auto sm:px-6 lg:px-8">
        <div class="lg:col-span-2">
            <div class="mx-auto max-w-2xl md:pt-8 text-center">
                <h2 class="text-balance text-4xl font-semibold tracking-tight text-gray-900 dark:text-gray-100 sm:text-5xl">
                    Contact us</h2>
                <p class="mt-2 text-lg/8 text-gray-600 dark:text-gray-300">Please fill this form to contact us.</p>
            </div>

            <form method="POST" id="contact" class="mx-auto mt-16 max-w-xl sm:mt-20">
                <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                    <div>
                        <label for="first-name" class="block text-sm/6 font-semibold text-gray-900 dark:text-gray-100">First
                            Name</label>
                        <div class="mt-2.5">
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                   class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 dark:focus:ring-indigo-400 sm:text-sm/6">
                        </div>
                    </div>
                    <div>
                        <label for="last-name" class="block text-sm/6 font-semibold text-gray-900 dark:text-gray-100">Last
                            Name</label>
                        <div class="mt-2.5">
                            <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                   class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 dark:focus:ring-indigo-400 sm:text-sm/6">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="company" class="block text-sm/6 font-semibold text-gray-900 dark:text-gray-100">Company
                            Name</label>
                        <div class="mt-2.5">
                            <input type="text" name="company" id="company" autocomplete="organization"
                                   class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 dark:focus:ring-indigo-400 sm:text-sm/6">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="email"
                               class="block text-sm/6 font-semibold text-gray-900 dark:text-gray-100">E-mail</label>
                        <div class="mt-2.5">
                            <input type="email" name="email" id="email" autocomplete="email"
                                   class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 dark:focus:ring-indigo-400 sm:text-sm/6">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message" class="block text-sm/6 font-semibold text-gray-900 dark:text-gray-100">Message
                            or Problem</label>
                        <div class="mt-2.5">
                    <textarea name="message" id="message" rows="4" required
                              class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 dark:focus:ring-indigo-400 sm:text-sm/6"></textarea>
                        </div>
                    </div>
                    <div class="flex gap-x-4 sm:col-span-2">
                        <label class="text-sm/6 text-gray-600 dark:text-gray-400" id="switch-1-label">
                            Before submitting this form you have to agree to our
                            <a href="/userPrivacyPolicy" class="font-semibold text-indigo-600 dark:text-indigo-400">terms
                                and conditions</a>.
                        </label>
                    </div>
                </div>
                <div class="mt-10">
                    <button type="submit"
                            class="block w-full rounded-md bg-indigo-600 dark:bg-indigo-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 dark:hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 dark:focus-visible:outline-indigo-400">
                        Send
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- Status Modal -->
    <div id="my-modal" class="fixed z-10 inset-0 overflow-y-auto hidden">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div
                class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <div>
                    <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-100">
                        <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <div class="mt-3 text-center sm:mt-5">
                        <h3 class="text-lg leading-6 font-medium text-gray-900"
                            id="modal-headline"> Success
                        </h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500"> Your message has been sent
                                successfully!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mt-5 sm:mt-6">
                    <button
                        class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:text-sm"
                        onclick="closeModal()"> OK
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('contact').onsubmit = function () {
            this.action = '/controllers/contact'; // Set the action URL dynamically
        }

        function showModal() {
            document.getElementById('my-modal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('my-modal').classList.add('hidden');
            // Use history.pushState to change the URL without reloading
            history.pushState(null, null, '/contact');

        }
    </script>
@endsection
