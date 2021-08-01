<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class AjaxPaginationController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function ajaxPagination(Request $request)
  {
    $products = Product::paginate(5);
  
    if ($request->ajax()) {
        return view('presult', compact('products'));
    }
  
    return view('ajaxPagination',compact('products'));
  }
}

