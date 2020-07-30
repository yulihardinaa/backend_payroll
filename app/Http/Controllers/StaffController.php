<?php

namespace App\Http\Controllers;
use App\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StaffController extends Controller
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
        $staff = Staff::get();
        if(sizeof($staff) > 0)
            return response()->json([
                'status' => 'Success',
                'size' => sizeof($staff),
                'data' => [
                    'staff' => $staff->toArray()
                ],
            ],200);
        else{
            return response(['Belum ada data Staff'],404);
        }
    }

    public function show($id)
    {   
        $staff = Staff::findOrFail($id);
        return response()->json($staff);
    }

    public function create(Request $request)
    {   
        $validator = Validator::make($request->all(), [
            'nama_staff' => 'required',
            'nik' => 'required',
            'tgl_masuk' => 'required',
            'golongan' => 'required',
            'jabstruk' => 'required',


        ]);
        if ($validator->fails()) {    
            return response()->json($validator->messages(), 422);
        }
        
        $staff = Staff::create($request->all());

        return response()->json($staff, 201);
    }

    public function update($id, Request $request)
    {
        $staff = Staff::findOrFail($id);
        $staff->update($request->all());

        return response()->json($staff, 200);
    }
    
    public function delete($id)
    {
        Staff::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }    
}
