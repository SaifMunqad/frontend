<?php

use App\Main\PageData;

PageData::setPage('Purchases');
PageData::setDescription('This table displays latest purchases for the inventory.');

?>

@extends('layouts.employee.app')
@section('content')
    <x-employee.title :title="PageData::getPage()" :description="PageData::getDescription()">
        <a
            class="flex select-none items-center gap-2 rounded bg-gray-800 dark:bg-gray-700 py-2.5 px-4 text-xs font-semibold text-white shadow-md hover:bg-gray-700 dark:hover:bg-gray-600 transition-all"
            href="/products/add"
            type="button">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 24" fill="currentColor"
                 aria-hidden="true"
                 stroke-width="2" class="w-4 h-4">
                <path d="M2 8v2h6v6h2v-6h6V8h-6V2H8v6H2z"></path>
                <path d="M12 3h2l3 9h10l3-9h-16z"></path>
                <path
                    d="M15 22a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm12 0a2 2 0 1 0 0-4 2 2 0 0 0 0 4zM15 16h12v-2h-12v2z"></path>
            </svg>
            Add product
        </a>
    </x-employee.title>

    <x-employee.tables.tableHead :tableHeads="$tableHeads">
        @foreach($purchases as $purchase)
            <tr class="bg-gray-100 dark:bg-gray-800">
                <x-employee.tables.rowOne :data="$purchase['supplier_name']"/>
                <x-employee.tables.cell :data="$purchase['bill']"/>
                <x-employee.tables.cell :data="$purchase['total']"/>
                <x-employee.tables.status :status="$purchase['status']" color="green"/>
                <x-employee.tables.cell :data="$purchase['added']"/>

                {{--                EYE             --}}
                <x-employee.tables.eye :link="'/purchase/view/'.$purchase['id']"/>
            </tr>
        @endforeach
    </x-employee.tables.tableHead>

@endsection
