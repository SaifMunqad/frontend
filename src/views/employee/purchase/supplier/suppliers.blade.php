<?php

use App\Main\PageData;

PageData::setPage('Suppliers');
PageData::setDescription('Review each supplier before edit or delete!');

?>


@extends('layouts.employee.app')
@section('content')
    <x-employee.title :title="PageData::getPage()" :description="PageData::getDescription()">
        <a
            class="flex select-none items-center gap-2 rounded bg-indigo-600 dark:bg-gray-800 py-2.5 px-4 text-xs font-semibold text-white shadow-md hover:bg-indigo-500 dark:hover:bg-gray-600 transition-all"
            href="./supplier/add"
            type="button">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12"/>
            </svg>
            Add Supplier
        </a>
    </x-employee.title>
    <x-employee.tables.tableHead :tableHeads="$tableHeads">
        @foreach($suppliers as $supplier)
            <tr class="bg-gray-100 dark:bg-gray-800">
                <x-employee.tables.photoTwo :photoLink="$supplier['supplier_image']"
                                            :dataTop="$supplier['supplier_name']"
                                            :dataButtom="$supplier['supplier_type']"/>
                <x-employee.tables.cellTwo :dataTop="$supplier['borrow_money']"
                                           :dataButtom="$supplier['supplier_lend_money']"/>
                <x-employee.tables.cell :data="$supplier['in_stock']"/>
                <x-employee.tables.cell :data="$supplier['supplier_brands']"/>
                <x-employee.tables.cell :data="$supplier['added']"/>
                {{--                EYE             --}}
                <x-employee.tables.eye :link="'/purchase/supplier/'. $supplier['id']"/>
                @endforeach
            </tr>
    </x-employee.tables.tableHead>

@endsection
