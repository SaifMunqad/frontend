<?php

use App\Main\PageData;

PageData::setPage('Sales Orders');
?>

@extends('layouts.employee.app')
@section('content')
    <x-employee.title title="Sales Orders" description="Responsible for overseeing operations"/>

@endsection
