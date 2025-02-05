<?php

use App\Main\PageData;

PageData::setPage('Products');
PageData::setDescription('These are the units you can use for your product measurements.');

?>


@extends('layouts.employee.app')
@section('content')
    <div class=" mr-3 mb-3 rounded-md lg:col-span-2 text-gray-700 dark:text-gray-300">
        <x-employee.title :title="PageData::getPage()" :description="PageData::getDescription()"/>
        <x-employee.tables.tableHead :tableHeads="$tableHeads">
            @isset($products)
                @foreach($products as $product)
                    <tr class="dark:bg-gray-800 dark:text-gray-100">
                        <x-employee.tables.photoTwo :photoLink="$product['product_image']"
                                                    :dataTop="$product['product_name']"
                                                    :dataButtom="$product['product_brand']"/>
                        <x-employee.tables.cellTwo :dataTop="$product['product_buy_price']"
                                                   :dataButtom="$product['product_sell_price']"/>
                        <x-employee.tables.cell :data="$product['product_stock']"/>
                        <x-employee.tables.cell :data="$product['product_added_by']"/>
                        {{--                EYE             --}}
                        <x-employee.tables.eye :link="'/inventory/product/'. $product['id']"/>
                    </tr>
                @endforeach
            @endisset
        </x-employee.tables.tableHead>
    </div>
@endsection
