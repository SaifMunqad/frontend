<?php

use App\Main\PageData;

PageData::setPage('Receipts');
?>

@extends('layouts.employee.app')
@section('content')
    <x-employee.title title="Sales Receipt" description="Responsible for overseeing operations"/>

@endsection
