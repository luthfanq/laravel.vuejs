<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        $datas = Pegawai::all();

        return view('pegawai.index', compact('datas'
    ));
    }

    public function create()
    {

    } 
    
    public function store(Request $request)
    {

    }    

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
