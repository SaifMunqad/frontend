<?php

use App\Main\PageData;

PageData::setPage('Categories');
PageData::setDescription('Review each category before edit or delete!');
?>

@extends('layouts.employee.app')
@section('content')
    <div id="root">
        <x-employee.title title="Main Categories"
                          description="List of main categories that can be used to add subcategories.">
        </x-employee.title>
        <x-employee.tables.tableHead :tableHeads="$tableHeads">
            @if($mainCategories)
                @foreach($mainCategories as $category)
                    <tr class="bg-gray-100 dark:bg-gray-800">
                        <x-employee.tables.photoOne :photoLink="$category['category_image']"
                                                    :data="$category['category_name']"/>
                        <x-employee.tables.cell :data="$category['category_description']"/>

                        {{--                EYE             --}}
                        <x-employee.tables.eye :link="'/purchase/brand/'. $category['id']"/>
                    </tr>
                @endforeach
            @endif
        </x-employee.tables.tableHead>
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
                Add Category
            </a>
        </x-employee.title>
        <x-employee.tables.tableHead :tableHeads="$tableHeadsCategories">
            @if($categories)
                @foreach($categories as $category)
                    <tr class="bg-gray-100 dark:bg-gray-800">
                        <x-employee.tables.photoOne :photoLink="$category['category_image']"
                                                    :data="$category['category_name']"/>
                        <x-employee.tables.cell :data="$category['category_name']"/>

                        {{--                EYE             --}}
                        <x-employee.tables.eye :link="'/purchase/categories/'. $category['id']"/>
                    </tr>
                @endforeach
            @endif
        </x-employee.tables.tableHead>
    </div>
    <script type="text/babel">

    </script>
@endsection
