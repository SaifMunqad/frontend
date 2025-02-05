<?php

use App\Main\PageData;

$pageSelected = true;
$menuSelected = false;
?>
<style>
    /* Hide scrollbar for Chrome, Safari, and Opera */
    .overflow-y-auto::-webkit-scrollbar {
        display: none;
    }

    @layer components {
        .sidebar {
            transition: all .15s ease-in-out;
        }
    }
</style>
<div class="z-10 min-h-screen bg-gray-200 dark:bg-gray-950 fixed">

    <div
        class="sidebar min-h-screen w-[3.30rem] overflow-hidden border-r-2 border-gray-200 dark:border-gray-800 focus:w-56 hover:w-56 dark:hover:bg-gray-950 hover:shadow-lg overflow-y-auto">
        <div class="flex h-screen flex-col justify-between pt-2 pb-0">
            <div>
                <ul class="mt-10 space-y-2 tracking-wide">
                    <x-employee.sidebar.main pageName="Home" pageLink="/store/home">
                        <path class="fill-current text-gray-50 dark:text-gray-300 group-hover:text-cyan-300"
                              d="M19.006 3.705a.75.75 0 1 0-.512-1.41L6 6.838V3a.75.75 0 0 0-.75-.75h-1.5A.75.75 0 0 0 3 3v4.93l-1.006.365a.75.75 0 0 0 .512 1.41l16.5-6Z"></path>
                        <path fill-rule="evenodd"
                              class="fill-current text-gray-600 group-hover:text-cyan-600"
                              d="M3.019 11.114 18 5.667v3.421l4.006 1.457a.75.75 0 1 1-.512 1.41l-.494-.18v8.475h.75a.75.75 0 0 1 0 1.5H2.25a.75.75 0 0 1 0-1.5H3v-9.129l.019-.007ZM18 20.25v-9.566l1.5.546v9.02H18Zm-9-6a.75.75 0 0 0-.75.75v4.5c0 .414.336.75.75.75h3a.75.75 0 0 0 .75-.75V15a.75.75 0 0 0-.75-.75H9Z"
                              clip-rule="evenodd"></path>
                    </x-employee.sidebar.main>

                    {{--                    Purchases                   --}}
                    <li class="w-full relative">
                        <x-employee.sidebar.button buttonId="purchases_button" svgId="purchases_svg"
                                                   :pageSelected="$pageSelected" buttonName="Purchases">
                            <path class="fill-current text-gray-300 group-hover:text-cyan-300"
                                  d="M10.464 8.746c.227-.18.497-.311.786-.394v2.795a2.252 2.252 0 0 1-.786-.393c-.394-.313-.546-.681-.546-1.004 0-.323.152-.691.546-1.004ZM12.75 15.662v-2.824c.347.085.664.228.921.421.427.32.579.686.579.991 0 .305-.152.671-.579.991a2.534 2.534 0 0 1-.921.42Z"></path>
                            <path fill-rule="evenodd"
                                  class="fill-current text-gray-300 group-hover:text-cyan-300"
                                  d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v.816a3.836 3.836 0 0 0-1.72.756c-.712.566-1.112 1.35-1.112 2.178 0 .829.4 1.612 1.113 2.178.502.4 1.102.647 1.719.756v2.978a2.536 2.536 0 0 1-.921-.421l-.879-.66a.75.75 0 0 0-.9 1.2l.879.66c.533.4 1.169.645 1.821.75V18a.75.75 0 0 0 1.5 0v-.81a4.124 4.124 0 0 0 1.821-.749c.745-.559 1.179-1.344 1.179-2.191 0-.847-.434-1.632-1.179-2.191a4.122 4.122 0 0 0-1.821-.75V8.354c.29.082.559.213.786.393l.415.33a.75.75 0 0 0 .933-1.175l-.415-.33a3.836 3.836 0 0 0-1.719-.755V6Z"
                                  clip-rule="evenodd"></path>
                        </x-employee.sidebar.button>
                        <ul id="purchases_dropdown"
                            class=" {{( !$pageSelected ) ? '' : 'hidden'}} ease-in-out transform space-y-0 text-sm whitespace-nowrap">

                            {{--                            Purchases                       --}}
                            <x-employee.sidebar.sub pageLink="/purchase/purchases" pageName="Purchases"
                                                    :menuSelected="$menuSelected">
                                <path fill-rule="evenodd" class="fill-current text-cyan-300"
                                      d="M23.292 4.46a1.125 1.125 0 0 1 .708 1.044v12.993a1.125 1.125 0 0 1-.708 1.044l-10.875 4.35a1.125 1.125 0 0 1-.836 0L.708 19.54A1.125 1.125 0 0 1 0 18.496V5.504a1.125 1.125 0 0 1 .707-1.043l10.875-4.35a1.125 1.125 0 0 1 .836 0L23.292 4.46zm-7.866-1.46L6.375 6.691 2.769 5.25 1.5 5.759v.6l9.75 3.9v11.883l.75.3.75-.3V10.259l9.75-3.9v-.6l-1.269-.509L12 8.941l-3.904-1.962 9.33-3.737z"></path>
                            </x-employee.sidebar.sub>

                            {{--                            Purchase Order                       --}}
                            <x-employee.sidebar.sub pageLink="/purchase/order" pageName="Purchase Orders"
                                                    :menuSelected="$menuSelected">
                                <path class="fill-current text-cyan-300"
                                      d="M3.375 4.5C2.339 4.5 1.5 5.34 1.5 6.375V13.5h12V6.375c0-1.036-.84-1.875-1.875-1.875h-8.25ZM13.5 15h-12v2.625c0 1.035.84 1.875 1.875 1.875h.375a3 3 0 1 1 6 0h3a.75.75 0 0 0 .75-.75V15Z"></path>
                                <path class="fill-current text-cyan-400"
                                      d="M8.25 19.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0ZM15.75 6.75a.75.75 0 0 0-.75.75v11.25c0 .087.015.17.042.248a3 3 0 0 1 5.958.464c.853-.175 1.522-.935 1.464-1.883a18.659 18.659 0 0 0-3.732-10.104 1.837 1.837 0 0 0-1.47-.725H15.75Z"></path>
                                <path class="fill-current text-cyan-300"
                                      d="M19.5 19.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z"></path>
                            </x-employee.sidebar.sub>

                            {{--                            Purchase Recives                       --}}
                            <x-employee.sidebar.sub pageLink="/purchase/receives" pageName="Purchase Receives"
                                                    :menuSelected="$menuSelected">
                                <path fill-rule="evenodd" class="fill-current text-cyan-300"
                                      d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                                      clip-rule="evenodd"></path>
                            </x-employee.sidebar.sub>

                            {{--                            Suppliers                       --}}
                            <x-employee.sidebar.sub pageLink="/purchase/suppliers" pageName="Suppliers"
                                                    :menuSelected="$menuSelected">
                                <path fill="currentColor" class="fill-current text-cyan-300"
                                      d="M19.15 8a2 2 0 0 0-1.72-1H15V5a1 1 0 0 0-1-1H4a2 2 0 0 0-2 2v10a2 2 0 0 0 1 1.73 3.49 3.49 0 0 0 7 .27h3.1a3.48 3.48 0 0 0 6.9 0 2 2 0 0 0 2-2v-3a1.07 1.07 0 0 0-.14-.52zM15 9h2.43l1.8 3H15zM6.5 19A1.5 1.5 0 1 1 8 17.5 1.5 1.5 0 0 1 6.5 19zm10 0a1.5 1.5 0 1 1 1.5-1.5 1.5 1.5 0 0 1-1.5 1.5z"></path>
                            </x-employee.sidebar.sub>

                            {{--                            Brands                       --}}
                            <x-employee.sidebar.sub pageLink="/purchase/brands" pageName="Brands"
                                                    :menuSelected="$menuSelected">
                                <path class="fill-current text-cyan-300"
                                      d="M8.85,13.64c-.9,1.34-2.3,1.5-3.32,1.19-1.01-.31-2.1-1.21-2.1-2.83s1.08-2.52,2.1-2.83c.28-.08,.59-.14,.91-.14,.84,0,1.76,.35,2.41,1.33l.59,.88,2.04-3.07c-1.63-2.18-4.3-3.09-6.94-2.28C1.78,6.72,0,9.12,0,12s1.78,5.28,4.53,6.11c2.75,.84,5.57-.17,7.17-2.57l3.45-5.18c.9-1.35,2.3-1.5,3.32-1.19,1.02,.31,2.1,1.21,2.1,2.83s-1.08,2.52-2.1,2.83c-1.01,.31-2.42,.16-3.32-1.19l-.59-.88-2.06,3.07c1.23,1.65,3.07,2.56,5.04,2.56,.63,0,1.28-.09,1.92-.29,2.75-.84,4.53-3.23,4.53-6.11s-1.78-5.28-4.54-6.11c-2.75-.83-5.57,.18-7.16,2.57l-3.45,5.18Z"></path>
                            </x-employee.sidebar.sub>

                            {{--                            Bills                       --}}
                            <x-employee.sidebar.sub pageLink="/purchase/bills" pageName="Bills"
                                                    :menuSelected="$menuSelected">
                                <path fill-rule="evenodd" class="fill-current text-cyan-500"
                                      d="M17.663 3.118c.225.015.45.032.673.05C19.876 3.298 21 4.604 21 6.109v9.642a3 3 0 0 1-3 3V16.5c0-5.922-4.576-10.775-10.384-11.217.324-1.132 1.3-2.01 2.548-2.114.224-.019.448-.036.673-.051A3 3 0 0 1 13.5 1.5H15a3 3 0 0 1 2.663 1.618ZM12 4.5A1.5 1.5 0 0 1 13.5 3H15a1.5 1.5 0 0 1 1.5 1.5H12Z"
                                      clip-rule="evenodd"></path>
                                <path class="fill-current text-cyan-300"
                                      d="M3 8.625c0-1.036.84-1.875 1.875-1.875h.375A3.75 3.75 0 0 1 9 10.5v1.875c0 1.036.84 1.875 1.875 1.875h1.875A3.75 3.75 0 0 1 16.5 18v2.625c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625v-12Z"></path>
                                <path class="fill-current text-cyan-300"
                                      d="M10.5 10.5a5.23 5.23 0 0 0-1.279-3.434 9.768 9.768 0 0 1 6.963 6.963 5.23 5.23 0 0 0-3.434-1.279h-1.875a.375.375 0 0 1-.375-.375V10.5Z"></path>
                            </x-employee.sidebar.sub>

                            {{--                            Returns                       --}}
                            <x-employee.sidebar.sub pageLink="/purchase/returns" pageName="Purchase Returns"
                                                    :menuSelected="$menuSelected">
                                <path fill-rule="evenodd"
                                      class="fill-current text-cyan-300"
                                      d="M12 1.5c-1.921 0-3.816.111-5.68.327-1.497.174-2.57 1.46-2.57 2.93V21.75a.75.75 0 0 0 1.029.696l3.471-1.388 3.472 1.388a.75.75 0 0 0 .556 0l3.472-1.388 3.471 1.388a.75.75 0 0 0 1.029-.696V4.757c0-1.47-1.073-2.756-2.57-2.93A49.255 49.255 0 0 0 12 1.5Zm-.97 6.53a.75.75 0 1 0-1.06-1.06L7.72 9.22a.75.75 0 0 0 0 1.06l2.25 2.25a.75.75 0 1 0 1.06-1.06l-.97-.97h3.065a1.875 1.875 0 0 1 0 3.75H12a.75.75 0 0 0 0 1.5h1.125a3.375 3.375 0 1 0 0-6.75h-3.064l.97-.97Z"
                                      clip-rule="evenodd"></path>
                            </x-employee.sidebar.sub>

                        </ul>
                    </li>

                    {{--                    INVENTROY                   --}}
                    <li class="w-full relative">
                        <x-employee.sidebar.button buttonId="inventory_button" svgId="inventory_svg"
                                                   :pageSelected="$pageSelected" buttonName="Inventory">
                            <path class="fill-current text-gray-300 group-hover:text-cyan-300"
                                  d="M21 6.375c0 2.692-4.03 4.875-9 4.875S3 9.067 3 6.375 7.03 1.5 12 1.5s9 2.183 9 4.875Z"></path>
                            <path
                                d="M12 12.75c2.685 0 5.19-.586 7.078-1.609a8.283 8.283 0 0 0 1.897-1.384c.016.121.025.244.025.368C21 12.817 16.97 15 12 15s-9-2.183-9-4.875c0-.124.009-.247.025-.368a8.285 8.285 0 0 0 1.897 1.384C6.809 12.164 9.315 12.75 12 12.75Z"></path>
                            <path
                                d="M12 16.5c2.685 0 5.19-.586 7.078-1.609a8.282 8.282 0 0 0 1.897-1.384c.016.121.025.244.025.368 0 2.692-4.03 4.875-9 4.875s-9-2.183-9-4.875c0-.124.009-.247.025-.368a8.284 8.284 0 0 0 1.897 1.384C6.809 15.914 9.315 16.5 12 16.5Z"></path>
                            <path
                                d="M12 20.25c2.685 0 5.19-.586 7.078-1.609a8.282 8.282 0 0 0 1.897-1.384c.016.121.025.244.025.368 0 2.692-4.03 4.875-9 4.875s-9-2.183-9-4.875c0-.124.009-.247.025-.368a8.284 8.284 0 0 0 1.897 1.384C6.809 19.664 9.315 20.25 12 20.25Z"></path>

                        </x-employee.sidebar.button>
                        <ul id="inventory_dropdown"
                            class="{{( !$pageSelected ) ? '' : 'hidden'}} ease-in-out transform space-y-0 text-sm whitespace-nowrap">

                            {{--                            Products                       --}}
                            <x-employee.sidebar.sub pageLink="/inventory/products" pageName="Products"
                                                    :menuSelected="$menuSelected">
                                <path class="fill-current text-cyan-300"
                                      fill-rule="evenodd"
                                      d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z">
                                </path>
                            </x-employee.sidebar.sub>

                            {{--                            Categories                       --}}
                            <x-employee.sidebar.sub pageLink="/inventory/categories" pageName="Categories"
                                                    :menuSelected="$menuSelected">
                                <path fill-rule="evenodd"
                                      class="fill-current fill-cyan-700"
                                      d="M1.5 7.125c0-1.036.84-1.875 1.875-1.875h6c1.036 0 1.875.84 1.875 1.875v3.75c0 1.036-.84 1.875-1.875 1.875h-6A1.875 1.875 0 0 1 1.5 10.875v-3.75Z"
                                      clip-rule="evenodd"></path>
                                <path fill-rule="evenodd"
                                      class="fill-current fill-cyan-700"
                                      d="M3 16.125c0-1.036.84-1.875 1.875-1.875h5.25c1.036 0 1.875.84 1.875 1.875v2.25c0 1.035-.84 1.875-1.875 1.875h-5.25A1.875 1.875 0 0 1 3 18.375v-2.25Z"
                                      clip-rule="evenodd"></path>
                                <path fill-rule="evenodd"
                                      class="fill-current text-cyan-300"
                                      d="M13.5 8.625c0-1.036.84-1.875 1.875-1.875h5.25c1.035 0 1.875.84 1.875 1.875v8.25c0 1.035-.84 1.875-1.875 1.875h-5.25a1.875 1.875 0 0 1-1.875-1.875v-8.25Z"
                                      clip-rule="evenodd"></path>
                            </x-employee.sidebar.sub>

                            {{--                            Unites                       --}}
                            <x-employee.sidebar.sub pageLink="/inventory/units" pageName="Unites"
                                                    :menuSelected="$menuSelected">
                                <path fill-rule="evenodd" class="fill-current text-cyan-300"
                                      d="M10.5 3.798v5.02a3 3 0 0 1-.879 2.121l-2.377 2.377a9.845 9.845 0 0 1 5.091 1.013 8.315 8.315 0 0 0 5.713.636l.285-.071-3.954-3.955a3 3 0 0 1-.879-2.121v-5.02a23.614 23.614 0 0 0-3 0Zm4.5.138a.75.75 0 0 0 .093-1.495A24.837 24.837 0 0 0 12 2.25a25.048 25.048 0 0 0-3.093.191A.75.75 0 0 0 9 3.936v4.882a1.5 1.5 0 0 1-.44 1.06l-6.293 6.294c-1.62 1.621-.903 4.475 1.471 4.88 2.686.46 5.447.698 8.262.698 2.816 0 5.576-.239 8.262-.697 2.373-.406 3.092-3.26 1.47-4.881L15.44 9.879A1.5 1.5 0 0 1 15 8.818V3.936Z"
                                      clip-rule="evenodd"></path>
                            </x-employee.sidebar.sub>

                            {{--                            Configuration                       --}}
                            <x-employee.sidebar.sub pageLink="/inventory/configuration" pageName="Configuration"
                                                    :menuSelected="$menuSelected">
                                <path class="fill-current text-cyan-300"
                                      d="M18.75 12.75h1.5a.75.75 0 0 0 0-1.5h-1.5a.75.75 0 0 0 0 1.5ZM12 6a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 12 6ZM12 18a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 12 18ZM3.75 6.75h1.5a.75.75 0 1 0 0-1.5h-1.5a.75.75 0 0 0 0 1.5ZM5.25 18.75h-1.5a.75.75 0 0 1 0-1.5h1.5a.75.75 0 0 1 0 1.5ZM3 12a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 3 12ZM9 3.75a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM12.75 12a2.25 2.25 0 1 1 4.5 0 2.25 2.25 0 0 1-4.5 0ZM9 15.75a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"></path>
                            </x-employee.sidebar.sub>
                        </ul>
                    </li>

                    {{--                    SALES                   --}}
                    <li class="w-full relative">
                        <x-employee.sidebar.button buttonId="marketplace_button" svgId="sales_svg"
                                                   :pageSelected="$pageSelected" buttonName="Sales">
                            <path class="fill-current fill-gray-300"
                                  d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921z"></path>
                            <circle class="fill-current fill-gray-300" cx="10.5" cy="19.5"
                                    r="1.5"></circle>
                            <circle class="fill-current fill-gray-300" cx="17.5" cy="19.5"
                                    r="1.5"></circle>
                        </x-employee.sidebar.button>
                        <ul id="marketplace_dropdown"
                            class="{{PageData::check_pages(['Customers', 'Sales Orders', 'Sell Product', 'Packages', 'Invoices', 'Receipts', 'Returns']) ? '' : 'hidden'}} ease-in-out transform space-y-0 text-sm whitespace-nowrap">

                            {{--                            Customers                       --}}
                            <x-employee.sidebar.sub pageLink="/sales/customers" pageName="Customers"
                                                    :menuSelected="$menuSelected">
                                <path fill-rule="evenodd" class="fill-current fill-cyan-300"
                                      d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z"
                                      clip-rule="evenodd"></path>
                                <path
                                    class="fill-current fill-cyan-600"
                                    d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z"></path>
                            </x-employee.sidebar.sub>

                            {{--                            Sales Orders                       --}}
                            <x-employee.sidebar.sub pageLink="/sales/orders" pageName="Sales Orders"
                                                    :menuSelected="$menuSelected">
                                <path fill-rule="evenodd"
                                      class="fill-current text-gray-300 "
                                      d="M7.502 6h7.128A3.375 3.375 0 0 1 18 9.375v9.375a3 3 0 0 0 3-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 0 0-.673-.05A3 3 0 0 0 15 1.5h-1.5a3 3 0 0 0-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6ZM13.5 3A1.5 1.5 0 0 0 12 4.5h4.5A1.5 1.5 0 0 0 15 3h-1.5Z"
                                      clip-rule="evenodd"></path>
                                <path fill-rule="evenodd"
                                      class="fill-current text-cyan-300"
                                      d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625V9.375Zm9.586 4.594a.75.75 0 0 0-1.172-.938l-2.476 3.096-.908-.907a.75.75 0 0 0-1.06 1.06l1.5 1.5a.75.75 0 0 0 1.116-.062l3-3.75Z"
                                      clip-rule="evenodd"></path>
                            </x-employee.sidebar.sub>

                            {{--                            Packages                       --}}
                            <x-employee.sidebar.sub pageLink="/sales/packages" pageName="Packages"
                                                    :menuSelected="$menuSelected">
                                <path
                                    d="M3.375 3C2.339 3 1.5 3.84 1.5 4.875v.75c0 1.036.84 1.875 1.875 1.875h17.25c1.035 0 1.875-.84 1.875-1.875v-.75C22.5 3.839 21.66 3 20.625 3H3.375Z"></path>
                                <path fill-rule="evenodd"
                                      class="fill-current text-cyan-300"
                                      d="m3.087 9 .54 9.176A3 3 0 0 0 6.62 21h10.757a3 3 0 0 0 2.995-2.824L20.913 9H3.087Zm6.163 3.75A.75.75 0 0 1 10 12h4a.75.75 0 0 1 0 1.5h-4a.75.75 0 0 1-.75-.75Z"
                                      clip-rule="evenodd"></path>
                            </x-employee.sidebar.sub>

                            {{--                            Sell products                       --}}
                            <x-employee.sidebar.sub pageLink="/sales/sell" pageName="Sell Product"
                                                    :menuSelected="$menuSelected">
                                <path fill-rule="evenodd"
                                      class="fill-current text-cyan-300"
                                      d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 0 0 4.25 22.5h15.5a1.875 1.875 0 0 0 1.865-2.071l-1.263-12a1.875 1.875 0 0 0-1.865-1.679H16.5V6a4.5 4.5 0 1 0-9 0ZM12 3a3 3 0 0 0-3 3v.75h6V6a3 3 0 0 0-3-3Zm-3 8.25a3 3 0 1 0 6 0v-.75a.75.75 0 0 1 1.5 0v.75a4.5 4.5 0 1 1-9 0v-.75a.75.75 0 0 1 1.5 0v.75Z"
                                      clip-rule="evenodd"></path>
                            </x-employee.sidebar.sub>

                            {{--                            Instant Sell products                       --}}
                            <x-employee.sidebar.sub pageLink="/sales/instant" pageName="Instant Sell"
                                                    :menuSelected="$menuSelected">
                                <path fill-rule="evenodd" class="fill-current text-cyan-300"
                                      d="M14.615 1.595a.75.75 0 0 1 .359.852L12.982 9.75h7.268a.75.75 0 0 1 .548 1.262l-10.5 11.25a.75.75 0 0 1-1.272-.71l1.992-7.302H3.75a.75.75 0 0 1-.548-1.262l10.5-11.25a.75.75 0 0 1 .913-.143Z"
                                      clip-rule="evenodd">

                                </path>
                            </x-employee.sidebar.sub>

                            {{--                            Invoices                       --}}
                            <x-employee.sidebar.sub pageLink="/sales/invoices" pageName="Invoices"
                                                    :menuSelected="$menuSelected">
                                <path fill-rule="evenodd"
                                      class="fill-current text-cyan-300"
                                      d="M3.75 3.375c0-1.036.84-1.875 1.875-1.875H9a3.75 3.75 0 0 1 3.75 3.75v1.875c0 1.036.84 1.875 1.875 1.875H16.5a3.75 3.75 0 0 1 3.75 3.75v7.875c0 1.035-.84 1.875-1.875 1.875H5.625a1.875 1.875 0 0 1-1.875-1.875V3.375Zm7.464 9.442c.459-.573 1.019-.817 1.536-.817.517 0 1.077.244 1.536.817a.75.75 0 1 0 1.171-.937c-.713-.892-1.689-1.38-2.707-1.38-1.018 0-1.994.488-2.707 1.38a4.61 4.61 0 0 0-.705 1.245H8.25a.75.75 0 0 0 0 1.5h.763c-.017.25-.017.5 0 .75H8.25a.75.75 0 0 0 0 1.5h1.088c.17.449.406.87.705 1.245.713.892 1.689 1.38 2.707 1.38 1.018 0 1.994-.488 2.707-1.38a.75.75 0 0 0-1.171-.937c-.459.573-1.019.817-1.536.817-.517 0-1.077-.244-1.536-.817-.078-.098-.15-.2-.215-.308h1.751a.75.75 0 0 0 0-1.5h-2.232a3.965 3.965 0 0 1 0-.75h2.232a.75.75 0 0 0 0-1.5H11c.065-.107.136-.21.214-.308Z"
                                      clip-rule="evenodd"></path>
                                <path
                                    d="M14.25 5.25a5.23 5.23 0 0 0-1.279-3.434 9.768 9.768 0 0 1 6.963 6.963A5.23 5.23 0 0 0 16.5 7.5h-1.875a.375.375 0 0 1-.375-.375V5.25Z"></path>

                            </x-employee.sidebar.sub>

                            {{--                            Receipts                       --}}
                            <x-employee.sidebar.sub pageLink="/sales/receipts" pageName="Receipts"
                                                    :menuSelected="$menuSelected">
                                <path fill-rule="evenodd"
                                      class="fill-current text-cyan-300"
                                      d="M4.125 3C3.089 3 2.25 3.84 2.25 4.875V18a3 3 0 0 0 3 3h15a3 3 0 0 1-3-3V4.875C17.25 3.839 16.41 3 15.375 3H4.125ZM12 9.75a.75.75 0 0 0 0 1.5h1.5a.75.75 0 0 0 0-1.5H12Zm-.75-2.25a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 0 1.5H12a.75.75 0 0 1-.75-.75ZM6 12.75a.75.75 0 0 0 0 1.5h7.5a.75.75 0 0 0 0-1.5H6Zm-.75 3.75a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5H6a.75.75 0 0 1-.75-.75ZM6 6.75a.75.75 0 0 0-.75.75v3c0 .414.336.75.75.75h3a.75.75 0 0 0 .75-.75v-3A.75.75 0 0 0 9 6.75H6Z"
                                      clip-rule="evenodd"></path>
                                <path
                                    d="M18.75 6.75h1.875c.621 0 1.125.504 1.125 1.125V18a1.5 1.5 0 0 1-3 0V6.75Z"></path>
                            </x-employee.sidebar.sub>

                            {{--                            Returns                       --}}
                            <x-employee.sidebar.sub pageLink="/sales/returns" pageName="Returns"
                                                    :menuSelected="$menuSelected">
                                <path fill-rule="evenodd"
                                      class="fill-current text-cyan-300"
                                      d="M12 1.5c-1.921 0-3.816.111-5.68.327-1.497.174-2.57 1.46-2.57 2.93V21.75a.75.75 0 0 0 1.029.696l3.471-1.388 3.472 1.388a.75.75 0 0 0 .556 0l3.472-1.388 3.471 1.388a.75.75 0 0 0 1.029-.696V4.757c0-1.47-1.073-2.756-2.57-2.93A49.255 49.255 0 0 0 12 1.5Zm-.97 6.53a.75.75 0 1 0-1.06-1.06L7.72 9.22a.75.75 0 0 0 0 1.06l2.25 2.25a.75.75 0 1 0 1.06-1.06l-.97-.97h3.065a1.875 1.875 0 0 1 0 3.75H12a.75.75 0 0 0 0 1.5h1.125a3.375 3.375 0 1 0 0-6.75h-3.064l.97-.97Z"
                                      clip-rule="evenodd"></path>
                            </x-employee.sidebar.sub>

                        </ul>
                    </li>
                    {{--                    STORE                      --}}
                    <li class="w-full relative">
                        <x-employee.sidebar.button buttonId="store_button" svgId="store_svg"
                                                   :pageSelected="$pageSelected" buttonName="Store">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                  d="M4 20h2V10a1 1 0 0 1 1-1h12V7a1 1 0 0 0-1-1h-3.051c-.252-2.244-2.139-4-4.449-4S6.303 3.756 6.051 6H3a1 1 0 0 0-1 1v11a2 2 0 0 0 2 2zm6.5-16c1.207 0 2.218.86 2.45 2h-4.9c.232-1.14 1.243-2 2.45-2z"></path>
                            <path class="fill-current text-gray-300 group-hover:text-cyan-300"
                                  d="M21 11H9a1 1 0 0 0-1 1v8a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-8a1 1 0 0 0-1-1zm-6 7c-2.757 0-5-2.243-5-5h2c0 1.654 1.346 3 3 3s3-1.346 3-3h2c0 2.757-2.243 5-5 5z"></path>

                        </x-employee.sidebar.button>
                        <ul id="store_dropdown"
                            class="{{ (!$pageSelected) ? '' : 'hidden'}} ease-in-out transform space-y-0 text-sm whitespace-nowrap">

                            {{--                            Employees                       --}}
                            <x-employee.sidebar.sub pageLink="/store/employees" pageName="Employees"
                                                    :menuSelected="$menuSelected">
                                <path d="M9 12a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9z" clip-rule="evenodd"
                                      fill-rule="evenodd"
                                      class="fill-current text-cyan-300"></path>
                                <path d="M1.5 21s-1.5 0-1.5-1.5 1.5-6 9-6 9 4.5 9 6-1.5 1.5-1.5 1.5z"
                                      class="fill-current text-cyan-300"
                                      clip-rule="evenodd"
                                      fill-rule="evenodd"></path>
                                <path clip-rule="evenodd"
                                      fill-rule="evenodd"
                                      d="M16.5 5.25a.75.75 0 0 1 .75-.75h6a.75.75 0 0 1 0 1.5h-6a.75.75 0 0 1-.75-.75zM16.5 9a.75.75 0 0 0 0 1.5h6a.75.75 0 0 0 0-1.5zM20.25 13.5a.75.75 0 0 0 0 1.5h3a.75.75 0 0 0 0-1.5zM20.25 18a.75.75 0 0 0 0 1.5h3a.75.75 0 0 0 0-1.5z"></path>
                            </x-employee.sidebar.sub>

                            {{--                            Store Essentials                       --}}
                            <x-employee.sidebar.sub pageLink="/store/essentials" pageName="Store Essentials"
                                                    :menuSelected="$menuSelected">
                                <path class="fill-current text-cyan-300"
                                      fill-rule="evenodd"
                                      d="M3 2.25a.75.75 0 0 0 0 1.5v16.5h-.75a.75.75 0 0 0 0 1.5H15v-18a.75.75 0 0 0 0-1.5H3ZM6.75 19.5v-2.25a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75v2.25a.75.75 0 0 1-.75.75h-3a.75.75 0 0 1-.75-.75ZM6 6.75A.75.75 0 0 1 6.75 6h.75a.75.75 0 0 1 0 1.5h-.75A.75.75 0 0 1 6 6.75ZM6.75 9a.75.75 0 0 0 0 1.5h.75a.75.75 0 0 0 0-1.5h-.75ZM6 12.75a.75.75 0 0 1 .75-.75h.75a.75.75 0 0 1 0 1.5h-.75a.75.75 0 0 1-.75-.75ZM10.5 6a.75.75 0 0 0 0 1.5h.75a.75.75 0 0 0 0-1.5h-.75Zm-.75 3.75A.75.75 0 0 1 10.5 9h.75a.75.75 0 0 1 0 1.5h-.75a.75.75 0 0 1-.75-.75ZM10.5 12a.75.75 0 0 0 0 1.5h.75a.75.75 0 0 0 0-1.5h-.75ZM16.5 6.75v15h5.25a.75.75 0 0 0 0-1.5H21v-12a.75.75 0 0 0 0-1.5h-4.5Zm1.5 4.5a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Zm.75 2.25a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75v-.008a.75.75 0 0 0-.75-.75h-.008ZM18 17.25a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Z"
                                      clip-rule="evenodd"></path>
                            </x-employee.sidebar.sub>

                            {{--                            Expenses                       --}}
                            <x-employee.sidebar.sub pageLink="/store/expenses" pageName="Expenses"
                                                    :menuSelected="$menuSelected">
                                <path fill-rule="evenodd" class="fill-current text-cyan-300"
                                      d="M3.75 3.375c0-1.036.84-1.875 1.875-1.875H9a3.75 3.75 0 0 1 3.75 3.75v1.875c0 1.036.84 1.875 1.875 1.875H16.5a3.75 3.75 0 0 1 3.75 3.75v7.875c0 1.035-.84 1.875-1.875 1.875H5.625a1.875 1.875 0 0 1-1.875-1.875V3.375Zm10.5 1.875a5.23 5.23 0 0 0-1.279-3.434 9.768 9.768 0 0 1 6.963 6.963A5.23 5.23 0 0 0 16.5 7.5h-1.875a.375.375 0 0 1-.375-.375V5.25ZM12 10.5a.75.75 0 0 1 .75.75v.028a9.727 9.727 0 0 1 1.687.28.75.75 0 1 1-.374 1.452 8.207 8.207 0 0 0-1.313-.226v1.68l.969.332c.67.23 1.281.85 1.281 1.704 0 .158-.007.314-.02.468-.083.931-.83 1.582-1.669 1.695a9.776 9.776 0 0 1-.561.059v.028a.75.75 0 0 1-1.5 0v-.029a9.724 9.724 0 0 1-1.687-.278.75.75 0 0 1 .374-1.453c.425.11.864.186 1.313.226v-1.68l-.968-.332C9.612 14.974 9 14.354 9 13.5c0-.158.007-.314.02-.468.083-.931.831-1.582 1.67-1.694.185-.025.372-.045.56-.06v-.028a.75.75 0 0 1 .75-.75Zm-1.11 2.324c.119-.016.239-.03.36-.04v1.166l-.482-.165c-.208-.072-.268-.211-.268-.285 0-.113.005-.225.015-.336.013-.146.14-.309.374-.34Zm1.86 4.392V16.05l.482.165c.208.072.268.211.268.285 0 .113-.005.225-.015.336-.012.146-.14.309-.374.34-.12.016-.24.03-.361.04Z"
                                      clip-rule="evenodd"></path>
                            </x-employee.sidebar.sub>

                            {{--                            Taxes                       --}}
                            <x-employee.sidebar.sub pageLink="/store/taxes" pageName="Taxes"
                                                    :menuSelected="$menuSelected">
                                <path
                                    d="M10.464 8.746c.227-.18.497-.311.786-.394v2.795a2.252 2.252 0 0 1-.786-.393c-.394-.313-.546-.681-.546-1.004 0-.323.152-.691.546-1.004ZM12.75 15.662v-2.824c.347.085.664.228.921.421.427.32.579.686.579.991 0 .305-.152.671-.579.991a2.534 2.534 0 0 1-.921.42Z"></path>
                                <path fill-rule="evenodd" class="fill-current text-cyan-300"
                                      d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v.816a3.836 3.836 0 0 0-1.72.756c-.712.566-1.112 1.35-1.112 2.178 0 .829.4 1.612 1.113 2.178.502.4 1.102.647 1.719.756v2.978a2.536 2.536 0 0 1-.921-.421l-.879-.66a.75.75 0 0 0-.9 1.2l.879.66c.533.4 1.169.645 1.821.75V18a.75.75 0 0 0 1.5 0v-.81a4.124 4.124 0 0 0 1.821-.749c.745-.559 1.179-1.344 1.179-2.191 0-.847-.434-1.632-1.179-2.191a4.122 4.122 0 0 0-1.821-.75V8.354c.29.082.559.213.786.393l.415.33a.75.75 0 0 0 .933-1.175l-.415-.33a3.836 3.836 0 0 0-1.719-.755V6Z"
                                      clip-rule="evenodd"></path>
                            </x-employee.sidebar.sub>

                            {{--                            Reports                       --}}
                            <x-employee.sidebar.sub pageLink="/store/reports" pageName="Reports"
                                                    :menuSelected="$menuSelected">
                                <path class="fill-current text-cyan-300"
                                      fill-rule="evenodd"
                                      d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z"
                                      clip-rule="evenodd"></path>
                                <path class="fill-current text-cyan-200"
                                      d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path>
                            </x-employee.sidebar.sub>

                            {{--                            Analytics                       --}}
                            <x-employee.sidebar.sub pageLink="/store/analytics" pageName="Analytics"
                                                    :menuSelected="$menuSelected">
                                <path class="fill-current text-cyan-300"
                                      d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path class="fill-current text-cyan-200"
                                      d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </x-employee.sidebar.sub>
                        </ul>
                    </li>

                    {{--                    Feedbacks                   --}}
                    <x-employee.sidebar.main pageName="Feedbacks" pageLink="/feedbacks">
                        <path fill-rule="evenodd"
                              class="fill-current text-gray-600 group-hover:text-cyan-600"
                              d="M4.848 2.771A49.144 49.144 0 0 1 12 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 0 1-3.476.383.39.39 0 0 0-.297.17l-2.755 4.133a.75.75 0 0 1-1.248 0l-2.755-4.133a.39.39 0 0 0-.297-.17 48.9 48.9 0 0 1-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97ZM6.75 8.25a.75.75 0 0 1 .75-.75h9a.75.75 0 0 1 0 1.5h-9a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5H12a.75.75 0 0 0 0-1.5H7.5Z"
                              clip-rule="evenodd">
                        </path>
                    </x-employee.sidebar.main>

                    {{--                    Customer Orders                   --}}
                    <x-employee.sidebar.main pageName="Customer Orders" pageLink="/orders">
                        <path fill-rule="evenodd" class="text-gray-600 group-hover:text-cyan-600"
                              d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z"
                              clip-rule="evenodd">
                        </path>
                    </x-employee.sidebar.main>

                </ul>
            </div>
            <div class="w-full mb-3">
                <div class="space-y-2 tracking-wide">
                    <a href="/settings"
                       class="bg group min-w-max flex items-center space-x-4 px-4 py-3 dark:text-gray-300 {{PageData::check_page('Settings') ? "bg-gradient-to-r from-sky-600 to-cyan-400 dark:text-gray-800 text-gray-300 dark:text-white" : 'dark:text-gray-600'}}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5 rtl:ml-4 group-hover:fill-cyan-600"
                             viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" class="text-gray-600 group-hover:text-cyan-600"
                                  d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                  clip-rule="evenodd"/>
                        </svg>
                        <span class="-mr-1 dark:text-gray-300 group-hover:text-gray-500">Settings</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const marketplace_button = document.getElementById('marketplace_button');
    const marketplace_dropdown = document.getElementById('marketplace_dropdown');
    const sales_svg = document.getElementById('sales_svg');

    const inventory_button = document.getElementById('inventory_button');
    const inventory_dropdown = document.getElementById('inventory_dropdown');
    const inventory_svg = document.getElementById('inventory_svg');

    const store_button = document.getElementById('store_button');
    const store_dropdown = document.getElementById('store_dropdown');
    const store_svg = document.getElementById('store_svg');

    const purchases_button = document.getElementById('purchases_button');
    const purchases_dropdown = document.getElementById('purchases_dropdown');
    const purchases_svg = document.getElementById('purchases_svg');

    const closeAllDropdowns = () => {
        [marketplace_dropdown, inventory_dropdown, store_dropdown, purchases_dropdown].forEach(
            dropdown => dropdown.classList.add('hidden'));
        [sales_svg, inventory_svg, store_svg, purchases_svg].forEach(svg => svg.classList.add('-rotate-90'));
    };

    marketplace_button.addEventListener('click', function (event) {
        event.stopPropagation();
        if (marketplace_dropdown.classList.contains('hidden')) {
            closeAllDropdowns();
        }
        marketplace_dropdown.classList.toggle('hidden');
        sales_svg.classList.toggle('-rotate-90');
    });

    inventory_button.addEventListener('click', function (event) {
        event.stopPropagation();
        if (inventory_dropdown.classList.contains('hidden')) {
            closeAllDropdowns();
        }
        inventory_dropdown.classList.toggle('hidden');
        inventory_svg.classList.toggle('-rotate-90');
    });

    store_button.addEventListener('click', function (event) {
        event.stopPropagation();
        if (store_dropdown.classList.contains('hidden')) {
            closeAllDropdowns();
        }
        store_dropdown.classList.toggle('hidden');
        store_svg.classList.toggle('-rotate-90');
    });

    purchases_button.addEventListener('click', function (event) {
        event.stopPropagation();
        if (purchases_dropdown.classList.contains('hidden')) {
            closeAllDropdowns();
        }
        purchases_dropdown.classList.toggle('hidden');
        purchases_svg.classList.toggle('-rotate-90');
    });

    // document.addEventListener('click', function (event) {
    //     closeAllDropdowns();
    // });

    // const marketplace_button = document.getElementById('marketplace_button');
    // const marketplace_dropdown = document.getElementById('marketplace_dropdown');
    // const sales_svg = document.getElementById('sales_svg');
    //
    // const inventory_button = document.getElementById('inventory_button');
    // const inventory_dropdown = document.getElementById('inventory_dropdown');
    // const inventory_svg = document.getElementById('inventory_svg');
    //
    // marketplace_button.addEventListener('click', function () {
    //     // Close inventory dropdown if open
    //     if (!inventory_dropdown.classList.contains('hidden')) {
    //         inventory_dropdown.classList.add('hidden');
    //         inventory_svg.classList.remove('-rotate-90');
    //     }
    //
    //     // Toggle marketplace dropdown
    //     marketplace_dropdown.classList.toggle('hidden');
    //     sales_svg.classList.toggle('-rotate-90');
    // });
    //
    // inventory_button.addEventListener('click', function () {
    //     // Close marketplace dropdown if open
    //     if (!marketplace_dropdown.classList.contains('hidden')) {
    //         marketplace_dropdown.classList.add('hidden');
    //         sales_svg.classList.remove('-rotate-90');
    //     }
    //
    //     // Toggle inventory dropdown
    //     inventory_dropdown.classList.toggle('hidden');
    //     inventory_svg.classList.toggle('-rotate-90');
    // });


</script>

