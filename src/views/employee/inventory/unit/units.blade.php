<?php

use App\Main\PageData;

PageData::setPage('Unites');
?>

@extends('layouts.employee.app')
@section('content')

    <x-employee.title :title="PageData::getPage()" :description="PageData::getDescription()"/>
    <x-employee.tables.tableHead :tableHeads="$tableHeads">
        @foreach($units as $unit)
            <tr class="dark:bg-gray-800 dark:text-gray-100">
                <x-employee.tables.rowOne :data="$unit['unit_name']"/>
                <x-employee.tables.cell :data="$unit['unit_symbol']"/>
                <x-employee.tables.cell :data="$unit['unit_description']"/>

                {{--                EYE             --}}
                <x-employee.tables.eye :link="'/inventory/unit/'. $unit['id']"/>
            </tr>
        @endforeach
    </x-employee.tables.tableHead>
@endsection
