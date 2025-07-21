<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class ResourceViewController extends Controller
{
    public function listView() {
        return view('resources.list');
    }

    public function createView() {
        return view('resources.create');
    }


    public function updateView($resourceID) {
        return view('resources.update', [
            'id' => $resourceID
        ]);
    }
}
