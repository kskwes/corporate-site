<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class IndexPageController extends Controller {
    protected $siteData = [
        "site-name" => "Corporate-Site"
    ];

    protected $contentArray = [
        [
            "title" => "Service",
            "title-sub" => "事業内容",
            "desc" => "事業内容を紹介します。",
            "img" => "https://source.unsplash.com/1wBmbnvv4TE/500x400",
            "url" => "/corporate/service"
        ],
        [
            "title" => "Company",
            "title-sub" => "会社情報",
            "desc" => "会社情報を紹介します。",
            "img" => "https://source.unsplash.com/PhYq704ffdA/500x400",
            "url" => "/corporate/company"
        ],
        [
            "title" => "News",
            "title-sub" => "お知らせ",
            "desc" => "弊社からのお知らせです。",
            "img" => "https://source.unsplash.com/cxoR55-bels/500x400",
            "url" => "/corporate/news"
        ],
        [
            "title" => "Works",
            "title-sub" => "事業実績",
            "desc" => "事業実績を紹介します。",
            "img" => "https://source.unsplash.com/OqtafYT5kTw/500x400",
            "url" => "/corporate/works"
        ]
    ];
    function index() {
        return view('corporate.index')->with([
            'contentArray' => $this->contentArray,
            'siteData' => $this->siteData,
        ]);
    }
}