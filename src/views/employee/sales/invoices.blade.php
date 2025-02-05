<?php

use App\Main\PageData;

PageData::setPage('Invoices');

$svgPath = "";

?>

@extends('layouts.employee.app')
@section('content')
    <x-employee.title title="Sales Invoices" description="Responsible for overseeing operations"/>

@endsection
