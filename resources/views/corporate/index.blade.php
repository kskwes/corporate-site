@php
    $url = 'https://source.unsplash.com';
    $headers = @get_headers( $url );
@endphp

@extends('corporate.layouts.layout')

@section('title', 'TOP | Corporate-Site')

@include('corporate.layouts.header')

@section('kv')
    {{-- KV（画像） --}}
    <div class="kv">
        <div class="kv-img">
            @if (isset($headers))
                @if ( preg_match( '/[2][0-9][0-9]|[3][0-9][0-9]/', $headers[0] ) )
                    <img class="img-fluid" src="https://source.unsplash.com/4XbZCfU2Uoo/1740x1160" alt="ヘッダー　画像">
                @endif
            @else
                <img class="img-fluid" src="http://placehold.jp/ababab/ffffff/1740x1160.png?text=header-img" alt="ヘッダー　画像">
            @endif
        </div>
    </div>
@endsection

@section('content')
    {{-- メインコンテンツ（概要＋Moreボタン） --}}
    <div class="content">
        @foreach ($contentArray as $key => $array)
            <section class="section {{ $array['title'] }}">
                <div class="container-fluid">
                    <x-title>
                        <x-slot name="main_title">
                            {{ $array['title'] }}
                        </x-slot>
                        <x-slot name="sub_title">
                            {{ $array['title-sub'] }}
                        </x-slot>
                    </x-title>
                    <div class="section-content d-md-flex justify-content-between bg-white @if($key % 2 != 0) flex-row-reverse @endif">
                        <div class="section-content-img">
                            @if (isset($headers))
                                @if ( preg_match( '/[2][0-9][0-9]|[3][0-9][0-9]/', $headers[0] ) )
                                    <img src="{{ $array['img'] }}" alt="{{ $array['title-sub'] }}　画像">
                                @endif
                            @else
                                <img class="img-fluid" src="http://placehold.jp/ababab/ffffff/500x400.png?text=header-img" alt="ヘッダー　画像">
                            @endif
                        </div>
                        <div class="section-content-text w-100 d-flex justify-content-center align-items-center">
                            <p class="text-center">
                                {{ $array['desc'] }}
                                <a href="{{ $array['url'] }}" class="section-content-text-button link-text-main link-hover">＞MORE</a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
    </div>
@endsection

@include('corporate.layouts.footer')