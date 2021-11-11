<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ServicePageController extends IndexPageController {
    public function show() {
        return view('corporate.service.index')->with('contentArray', $this->contentArray,);
     }
}