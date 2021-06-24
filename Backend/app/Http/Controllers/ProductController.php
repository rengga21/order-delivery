<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        $produk = Product::get();
        // dd($produk);
        return response()->json(
            [
                "status_code" => 200,
                "msg" => "ok",
                "data" =>  $produk
            ]
        );
    }
    function detail($id)
    {
        $produk = Product::get();
        $detail = $produk->find($id);

        return response()->json(
            [
                "status_code" => 200,
                "msg" => "ok",
                "data" =>  $detail
            ]
        );
    }

    function store(Request $request)
    {

        try {
            $produk = new Product();
            $produk->name = $request->name;
            $produk->price = $request->price;
            $produk->active = $request->active;
            $produk->description = $request->description;
            $produk->save();

            return response()->json(
                [
                    "status_code" => 200,
                    "msg" => "POST Method JOOOOOS",
                    "data" =>  $produk
                ],
                200
            );
        } catch (\Throwable $th) {
            return response()->json(
                [
                    "status_code" => 500,
                    "msg" => "POST Method Failde",
                    "data" => $th
                ],
                500
            );
        }
    }

    function update(Request $request, $id)
    {
        $produk = Product::get();
        $update = $produk->find($id);


        $update->name = $request->name;
        $update->price = $request->price;

        $update->save();



        return response()->json(
            [
                "status_code" => 200,
                "msg" => "ok",
                "data" =>  $update
            ],
            200
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
