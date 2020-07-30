<?php

namespace App\Http\Controllers;
use App\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DosenController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    
    public function index(){
        $dosen = Dosen::get();
        // return response()->Dosen::all());
        if(sizeof($dosen) > 0)
            return response()->json([
                'status' => 'Success',
                'size' => sizeof($dosen),
                'data' => [
                    'dosen' => $dosen->toArray()
                ],
            ],200);
        else{
            return response(['Belum ada data dosen'],404);
        }
    }

    public function show($id)
    {   
        $dosen = Dosen::findOrFail($id);
        return response()->json($dosen);
    }

    public function create(Request $request)
    {   
        $validator = Validator::make($request->all(), [
            'nama_dosen' => 'required',
            'nidn' => 'required',
            'nik' => 'required',
            'tgl_masuk' => 'required',
            'golongan' => 'required',
            'jabfung' => 'required',
            'jabstruk' => 'required',


        ]);
        if ($validator->fails()) {    
            return response()->json($validator->messages(), 422);
        }
        
        $dosen = Dosen::create($request->all());

        return response()->json($dosen, 201);
    }

    public function update($id, Request $request)
    {
        $dosen = Dosen::findOrFail($id);
        $dosen->update($request->all());

        return response()->json($dosen, 200);
    }
    
    public function delete($id)
    {
        Dosen::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }    
}
