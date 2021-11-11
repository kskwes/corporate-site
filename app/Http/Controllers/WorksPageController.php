<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class WorksPageController extends IndexPageController {
    public function show($id = 0) {
        $items = [
            [
                'id' => 1,
                'date' => '2022.01.01',
                'title' => '１：ここにタイトルが入ります。ここにタイトルが入ります。',
                'body' => '１：ここに本文が入ります。<br><br><br>ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。<br><br>ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。<br><br>ここに本文が入ります。ここに本文が入ります。',
                'thumb_img' => 'http://placehold.jp/ababab/ffffff/200x150.png?text=thumb',
                'main_img' => 'http://placehold.jp/ababab/ffffff/1200x630.png?text=main'
            ],
            [
                'id' => 2,
                'date' => '2022.01.02',
                'title' => '２：ここにタイトルが入ります。ここにタイトルが入ります。',
                'body' => '２：ここに本文が入ります。<br><br><br>ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。<br><br>ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。<br><br>ここに本文が入ります。ここに本文が入ります。',
                'thumb_img' => 'http://placehold.jp/ababab/ffffff/200x150.png?text=thumb',
                'main_img' => 'http://placehold.jp/ababab/ffffff/1200x630.png?text=main'
            ],
            [
                'id' => 3,
                'date' => '2022.01.03',
                'title' => '３：ここにタイトルが入ります。ここにタイトルが入ります。',
                'body' => '３：ここに本文が入ります。<br><br><br>ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。<br><br>ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。<br><br>ここに本文が入ります。ここに本文が入ります。',
                'thumb_img' => 'http://placehold.jp/ababab/ffffff/200x150.png?text=thumb',
                'main_img' => 'http://placehold.jp/ababab/ffffff/1200x630.png?text=main'
            ],
            [
                'id' => 4,
                'date' => '2022.01.04',
                'title' => '４：ここにタイトルが入ります。ここにタイトルが入ります。',
                'body' => '４：ここに本文が入ります。<br><br><br>ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。<br><br>ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。<br><br>ここに本文が入ります。ここに本文が入ります。',
                'thumb_img' => 'http://placehold.jp/ababab/ffffff/200x150.png?text=thumb',
                'main_img' => 'http://placehold.jp/ababab/ffffff/1200x630.png?text=main'
            ],
            [
                'id' => 5,
                'date' => '2022.01.05',
                'title' => '５：ここにタイトルが入ります。ここにタイトルが入ります。',
                'body' => '５：ここに本文が入ります。<br><br><br>ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。<br><br>ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。<br><br>ここに本文が入ります。ここに本文が入ります。',
                'thumb_img' => 'http://placehold.jp/ababab/ffffff/200x150.png?text=thumb',
                'main_img' => 'http://placehold.jp/ababab/ffffff/1200x630.png?text=main'
            ],
            [
                'id' => 6,
                'date' => '2022.01.06',
                'title' => '６：ここにタイトルが入ります。ここにタイトルが入ります。',
                'body' => '６：ここに本文が入ります。<br><br><br>ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。<br><br>ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。<br><br>ここに本文が入ります。ここに本文が入ります。',
                'thumb_img' => 'http://placehold.jp/ababab/ffffff/200x150.png?text=thumb',
                'main_img' => 'http://placehold.jp/ababab/ffffff/1200x630.png?text=main'
            ],
            [
                'id' => 7,
                'date' => '2022.01.07',
                'title' => '７：ここにタイトルが入ります。ここにタイトルが入ります。',
                'body' => '７：ここに本文が入ります。<br><br><br>ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。<br><br>ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。<br><br>ここに本文が入ります。ここに本文が入ります。',
                'thumb_img' => 'http://placehold.jp/ababab/ffffff/200x150.png?text=thumb',
                'main_img' => 'http://placehold.jp/ababab/ffffff/1200x630.png?text=main'
            ],
            [
                'id' => 8,
                'date' => '2022.01.08',
                'title' => '８：ここにタイトルが入ります。ここにタイトルが入ります。',
                'body' => '８：ここに本文が入ります。<br><br><br>ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。<br><br>ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。<br><br>ここに本文が入ります。ここに本文が入ります。',
                'thumb_img' => 'http://placehold.jp/ababab/ffffff/200x150.png?text=thumb',
                'main_img' => 'http://placehold.jp/ababab/ffffff/1200x630.png?text=main'
            ],
            [
                'id' => 9,
                'date' => '2022.01.09',
                'title' => '９：ここにタイトルが入ります。ここにタイトルが入ります。',
                'body' => '９：ここに本文が入ります。<br><br><br>ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。<br><br>ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。<br><br>ここに本文が入ります。ここに本文が入ります。',
                'thumb_img' => 'http://placehold.jp/ababab/ffffff/200x150.png?text=thumb',
                'main_img' => 'http://placehold.jp/ababab/ffffff/1200x630.png?text=main'
            ],
            [
                'id' => 10,
                'date' => '2022.01.10',
                'title' => '１０：ここにタイトルが入ります。ここにタイトルが入ります。',
                'body' => '１０：ここに本文が入ります。<br><br><br>ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。<br><br>ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。<br><br>ここに本文が入ります。ここに本文が入ります。',
                'thumb_img' => 'http://placehold.jp/ababab/ffffff/200x150.png?text=thumb',
                'main_img' => 'http://placehold.jp/ababab/ffffff/1200x630.png?text=main'
            ],
            [
                'id' => 11,
                'date' => '2022.01.11',
                'title' => '１１：ここにタイトルが入ります。ここにタイトルが入ります。',
                'body' => '１１：ここに本文が入ります。<br><br><br>ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。<br><br>ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。<br><br>ここに本文が入ります。ここに本文が入ります。',
                'thumb_img' => 'http://placehold.jp/ababab/ffffff/200x150.png?text=thumb',
                'main_img' => 'http://placehold.jp/ababab/ffffff/1200x630.png?text=main'
            ],
            [
                'id' => 12,
                'date' => '2022.01.12',
                'title' => '１２：ここにタイトルが入ります。ここにタイトルが入ります。',
                'body' => '１２：ここに本文が入ります。<br><br><br>ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。<br><br>ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。<br><br>ここに本文が入ります。ここに本文が入ります。',
                'thumb_img' => 'http://placehold.jp/ababab/ffffff/200x150.png?text=thumb',
                'main_img' => 'http://placehold.jp/ababab/ffffff/1200x630.png?text=main'
            ],
            [
                'id' => 13,
                'date' => '2022.01.13',
                'title' => '１３：ここにタイトルが入ります。ここにタイトルが入ります。',
                'body' => '１３：ここに本文が入ります。<br><br><br>ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。<br><br>ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。<br><br>ここに本文が入ります。ここに本文が入ります。',
                'thumb_img' => 'http://placehold.jp/ababab/ffffff/200x150.png?text=thumb',
                'main_img' => 'http://placehold.jp/ababab/ffffff/1200x630.png?text=main'
            ],
        ];

        return view('corporate.works.index')->with([
            'items' => array_reverse($items),
            'contentArray' => $this->contentArray
        ]);
     }
}