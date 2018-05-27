<?php

namespace App\Http\Controllers;

use App\category;
use App\report;
use App\subcategory;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function progress(){
        $category = category::all();
        $subcategory = subcategory::all();
        return view('progress')->with(['category'=>$category, 'subcategory'=>$subcategory]);
    }

    public function store_report(Request $request){
        $report = new report();
        $report->name = $request->input('name');
    }
}
