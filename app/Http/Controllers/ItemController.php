<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    //
    public function showAllReports(){
    	$reports = Item::all();
    	return view('report.reports', compact('reports'));
    }

    public function showReport($id){
    	$report = Item::find($id);

    	return view('report.report', compact('report'));
    }

    public function reportFoundItem(){

    	return view('report.new_report');
    }
}
