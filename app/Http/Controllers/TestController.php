<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
       // $result= DB::table('products')->get();
       // return $result;

        //$first= DB::table('products')->first();
        //return $first;

        //$findd= DB::table('products')->find(4);
        //return $findd;

        // $result= DB::table('products')->select('title','price')->get();
        // return $result;

         //$result= DB::table('products')->select('title')->distinct()->get();
         //return $result;

        //$join=DB::table('products')
        //    ->join('brands','products.category_id','=','brands.id')
        //    ->join('categories','products.category_id','=','brands.id')
        //    ->get();
        //    return $join;

        //$join=DB::table('products')
        //    ->rightJoin('brands','products.category_id','=','brands.id')
        //    ->rightjoin('categories','products.category_id','=','brands.id')
        //    ->get();
        // return $join;

        $join=DB::table('products')
            ->crossJoin('brands')
            ->get();
        return $join;
    }
}
