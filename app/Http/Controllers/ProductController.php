<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function ajaxSave(Request $request)
    {

        //print_r($request->all());
        //die();

        Storage::disk('public')->put('products.json', json_encode($request->all()));
        return 1;
    }

    public function ajaxRead(Request $request)
    {
        $data = [];

        if (Storage::disk('public')->exists('products.json')) {

            $data = json_decode(Storage::disk('public')->get('products.json'));
        }

        //print_r($data);
        return $data;
    }
}
