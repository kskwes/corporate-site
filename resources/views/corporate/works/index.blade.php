@php
    $target = mb_strstr(request()->fullUrl(), '?');
    $replacedId = str_replace('?id=', '', $target);
@endphp

@extends('corporate.layouts.layout')

@section('title', 'Works | Corporate-Site')

@include('corporate.layouts.header')

@include('corporate.layouts.path')

@section('content')
    <div class="content content-page works">
        <div class="container-fluid">
            <x-title>
                <x-slot name="main_title">
                    {{ $contentArray[3]['title'] }}
                </x-slot>
                <x-slot name="sub_title">
                    {{ $contentArray[3]['title-sub'] }}
                </x-slot>
            </x-title>
            @if ($replacedId >= 1)
                {{-- 詳細 --}}
                <div class="works-main">
                    <div class="main-list mb-5 pb-3">
                        @foreach ($items as $item)
                            @if ($item['id'] == $replacedId)
                                <div class="main-list-item">
                                    <span class="main-list-item-img mb-4">
                                        <img src="{{ $item['main_img'] }}" alt="{{ $item['title'] }}">
                                    </span>
                                    <span class="main-list-item-text text-muted small mb-3">
                                        {{ $item['date'] }}
                                    </span>
                                    <span class="main-list-item-title h1 mb-5">
                                        {{ $item['title'] }}
                                    </span>
                                    <span class="main-list-item-body">
                                        {!! $item['body'] !!}
                                    </span>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div>
                        <a href="/corporate/works" class="link-hover fs-2">
                            &lt; 一覧に戻る
                        </a>
                    </div>
                </div>
            @else
                {{-- 一覧 --}}
                <div class="row">
                    @foreach ($items as $item)
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <a href="{{ url()->current() }}?id={{ $item['id'] }}" class="link-hover">
                                    <img src="{{ $item['thumb_img'] }}" class="card-img-top" alt="{{ $item['title'] }}">
                                    <div class="card-body">
                                        <p class="card-text">{{ $item['title'] }}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection

@include('corporate.layouts.footer')