<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function get()
    {
        return response()->json(
            [
                "message" => "GET Method Succes"
            ]
        );
    }

    function post()
    {
        return response()->json(
            [
                "message" => "POST Method Succes"
            ]
        );
    }

    function put($id)
    {
        return response()->json(
            [
                "message" => "PUT Method Succes" . $id
            ]
        );
    }

    function delete($id)
    {
        return response()->json(
            [
                "message" => "DELETE Method Succes" . $id
            ]
        );
    }
}
