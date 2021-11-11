@extends('corporate.layouts.layout')

@section('title', 'Service | Corporate-Site')

@include('corporate.layouts.header')

@include('corporate.layouts.path')

@section('content')
    <div class="content content-page service">
        <div class="container-fluid">
            <x-title>
                <x-slot name="main_title">
                    {{ $contentArray[0]['title'] }}
                </x-slot>
                <x-slot name="sub_title">
                    {{ $contentArray[0]['title-sub'] }}
                </x-slot>
            </x-title>
        </div>
    </div>
@endsection

@include('corporate.layouts.footer')