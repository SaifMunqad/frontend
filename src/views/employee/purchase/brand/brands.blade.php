<?php

use App\Main\PageData;

PageData::setPage('Brands');
PageData::setDescription('Review each brand before edit or delete!');
?>

@extends('layouts.employee.app')
@section('content')
    <div id="root">
        <x-employee.title :title="PageData::getPage()" :description="PageData::getDescription()">
            <a
                class="flex select-none items-center gap-2 rounded bg-gray-900 dark:bg-gray-800 py-2.5 px-4 text-xs font-semibold text-white shadow-md hover:bg-gray-800 dark:hover:bg-gray-700 transition-all"
                href="/store/brand/add"
                type="button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
                Add Brand
            </a>
        </x-employee.title>
        <x-employee.tables.tableHead :tableHeads="$tableHeads">
            @if($brands)
                @foreach($brands as $brand)
                    <tr class="bg-gray-100 dark:bg-gray-800">
                        <x-employee.tables.photoOne :photoLink="$brand['brand_logo']"
                                                    :data="$brand['brand_name']"/>
                        <x-employee.tables.cell :data="$brand['brand_country']"/>

                        {{--                EYE             --}}
                        <x-employee.tables.eye :link="'/purchase/brand/'. $brand['id']"/>
                    </tr>
                @endforeach
            @endif
        </x-employee.tables.tableHead>
    </div>
    <script type="text/babel">

    </script>
@endsection
