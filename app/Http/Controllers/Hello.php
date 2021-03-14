<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hello extends Controller {
    public function index() {

    }

    public function hello() {
        return 'Hi';
    }

    public function helloWord($query) {
        return 'Hi ' . $query;
    }
}
