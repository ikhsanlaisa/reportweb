<?php

namespace App\Http\Controllers;

use App\category;
use App\subcategory;
use Illuminate\Http\Request;
use Alert;

class CategoryController extends Controller
{

    public function IndexProject(){
        $category = category::all();
//        dd($category);
        return view('project')->with('category', $category);
    }

    public function store_project(Request $request){
        $category = new category();
        $category->nama = $request->input('name');
        $category->project = $request->input('project');
        $category->tgl_target = $request->input('tgl_target');
        $category->target = $request->input('target');
        $result = $category->save();
        if ($result){
            alert()->success('Project Baru Berhasil di Tambahkan', 'Selamat')->persistent('Tutup');
            return redirect('/new/project');
        }else{
            alert()->success('Project Baru Gagal di Tambahkan', 'Gagal')->persistent('Tutup');
            return redirect('/new/project');
        }
    }

    public function store_category(Request $request){
        $subcategory = new subcategory();
        $subcategory->category_id = $request->input('category_id');
        $subcategory->sub_category = $request->input('sub_category');
        $result = $subcategory->save();
        if ($result){
            alert()->success('Sub Project Baru Berhasil di Tambahkan', 'Selamat')->persistent('Tutup');
            return redirect('/new/project');
        }else{
            alert()->success('Sub Project Baru Gagal di Tambahkan', 'Gagal')->persistent('Tutup');
            return redirect('/new/project');
        }
    }
}
