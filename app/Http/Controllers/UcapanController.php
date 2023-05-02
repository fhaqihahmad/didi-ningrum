<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ucapan;
use Illuminate\Support\Facades\Validator;

class UcapanController extends Controller
{
    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'nama'     => 'required',
            'ucapan'   => 'required',
            'kehadiran'   => 'required'
        ]);

        // //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create post
        $post = Ucapan::create([
            'nama'     => $request->nama,
            'ucapan'   => $request->ucapan,
            'kehadiran'   => $request->kehadiran
        ]);

        //return response
        return response()->json([
            'success' => true,
            'message' => 'Doa dan Ucapan Terkirim',
            'data'    => $post
        ]);
    }


}