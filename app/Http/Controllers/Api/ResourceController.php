<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ResourceRequest;
use Illuminate\Support\Facades\DB;


class ResourceController extends Controller
{

    public function index() {
        return view('resources.index');
    }

    public function list() {
        return view('resources.list');
    }

    public function create() {
        return view('resources.create');
    }


    public function update($resourceID) {
        return view('resources.update', [
            'id' => $resourceID
        ]);
    }


    public function getAll() {

        $resource =  DB::table('resources')->get();

        return $resource;
    }

    public function getByID($resourceID) {

        $resource =  DB::table('resources')
            ->where('id', $resourceID)
            ->first();

        return $resource;
    }

    public function post(ResourceRequest $request) {

        $request->validated();

        $created =  DB::table('resources')
            ->insert([
                "file_name" => $request->file_name,
                "manufacturer" =>  $request->manufacturer,
                "model" =>  $request->model,
                "serial_number" =>  $request->serial_number,
                "acquisition_date" =>  $request->acquisition_date
            ]);

        return $created;
    }

    public function updateByID(ResourceRequest $request, $resourceID) {

        $request->validated();

        $updated =  DB::table('resources')
            ->where('id', $resourceID)
            ->update([
                "file_name" => $request->file_name,
                "manufacturer" =>  $request->manufacturer,
                "model" =>  $request->model,
                "serial_number" =>  $request->serial_number,
                "acquisition_date" =>  $request->acquisition_date
            ]);

        return $updated;
    }

    public function delete($resourceID) {

        $deleted =  DB::table('resources')
            ->where('id', $resourceID)
            ->delete();
            
        return $deleted;
    }
}
