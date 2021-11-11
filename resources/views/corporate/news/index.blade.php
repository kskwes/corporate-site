@php
    $target = mb_strstr(request()->fullUrl(), '?');
    $replacedId = str_replace('?id=', '', $target);
@endphp

@extends('corporate.layouts.layout')

@section('title', 'News | Corporate-Site')

@include('corporate.layouts.header')

@include('corporate.layouts.path')

@section('content')
    <div class="content content-page news">
        <div class="container-fluid">
            <x-title>
                <x-slot name="main_title">
                    {{ $contentArray[2]['title'] }}
                </x-slot>
                <x-slot name="sub_title">
                    {{ $contentArray[2]['title-sub'] }}
                </x-slot>
            </x-title>
            @if ($replacedId >= 1)
                {{-- 記事 --}}
                <div class="news-main">
                    <div class="main-list mb-5 pb-3">
                        @foreach ($items as $item)
                            @if ($item['id'] == $replacedId)
                                <div class="main-list-item">
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
                        <a href="/corporate/news" class="link-hover fs-2">
                            &lt; 一覧に戻る
                        </a>
                    </div>
                </div>
            @else
                {{-- 一覧 --}}
                <div class="news-main">
                    <ul class="main-list list-flex">
                        @foreach ($items as $item)
                            <li class="main-list-item mb-5">
                                <a href="{{ url()->current() }}?id={{ $item['id'] }}">
                                    <span class="main-list-item-text text-muted small mb-2">
                                        {{ $item['date'] }}
                                    </span>
                                    <span class="link-hover main-list-item-text main-list-item-title h2">
                                        {{ $item['title'] }}
                                    </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
@endsection

@include('corporate.layouts.footer')