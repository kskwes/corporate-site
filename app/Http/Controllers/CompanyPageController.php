<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class CompanyPageController extends IndexPageController {
    public function show() {
        $data = ['title'=>'Company'];
        return view('corporate.company.index')->with('contentArray', $this->contentArray,);
     }
}