<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ResourceRequest;
use Illuminate\Support\Facades\DB;


class ResourceController extends Controller
{
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
                "resource_name" => $request->resource_name,
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
                "resource_name" => $request->resource_name,
                "manufacturer" =>  $request->manufacturer,
                "model" =>  $request->model,
                "serial_number" =>  $request->serial_number,
                "acquisition_date" =>  $request->acquisition_date
            ]);

        return $updated;
    }

    public function deleteByID($resourceID) {

        $deleted =  DB::table('resources')
            ->where('id', $resourceID)
            ->delete();
            
        return $deleted;
    }
}
