<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public function search(Request $request)
    {
        $cari = $request->input('q');

        $movies = Movies::where('title','LIKE',"%$cari%")->get();

        if($movies->isEmpty())
        {
            return response()->json([
                'success' =>false,
                'data'    =>'data tidak ditemukan'
                 ],404);
        }
        else
        {
            return response()->json([
                'success' =>true,
                'data'    =>$movies
                ],200);
        }
    }
}
