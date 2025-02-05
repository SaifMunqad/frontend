<?php

use App\Main\PageData;

PageData::setPage('Returns');
PageData::setDescription('This page allows you to manage and track all sales returns efficiently.');

?>

@extends('layouts.employee.app')
@section('content')
    <x-employee.title :title="PageData::getPage()" :description="PageData::getDescription()"/>
@endsection
