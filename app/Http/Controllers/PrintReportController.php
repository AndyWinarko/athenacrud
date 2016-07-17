<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

use App\Http\Requests;

class printReportController extends Controller
{
    public function index(Request $request)
    {
        //echo $request->input('q');
        //return view('print.index');
        $items = Item::all();

        if($request->input('q')){
            $items = Item::search($request->input('q'), $request->searchBy)
                           ->get();
        }

        $index = 1;
        return view('print.report', [
            'items' => $items,
            'index' => $index
        ]);
    }
}
