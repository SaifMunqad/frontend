<?php

use App\Main\PageData;

PageData::setPage('Analytics');
?>

@extends('layouts.employee.app')
@section('content')
    <x-employee.title :title="PageData::getPage()" description="Responsible for overseeing operations"/>

@endsection
