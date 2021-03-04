<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelapor;
use DataTables;

class PelaporController extends Controller
{
    public function index(Request $request)
    {
        // return Datatables::of(Pelapor::all())->make(true);
        if($request->ajax())
        {
            $data = Pelapor::latest()->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editItem">Edit</a>';
                        $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteItem">Delete</a>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('pelapor.index');
    }
}
