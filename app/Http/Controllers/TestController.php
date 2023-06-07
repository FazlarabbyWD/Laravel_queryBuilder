<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        //    $result=DB::table('products')->get();
        //    return $result;

        //    $result=DB::table('brands')->first();
        //    return $result;

        //$findd= DB::table('products')->find(4);
        //return $find;

        // $result=DB::table('brands')->pluck('brandName');
        // return $result;

        // $result=DB::table('categories')->pluck('categoryImg','categoryName');
        // return $result;

        //  $count=DB::table('products')->count();
        //  return $count;
        // $max=DB::table('products')->max('price');
        // return $max;
        // $min=DB::table('products')->min('price');
        // return $min;

        // $avg=DB::table('products')->avg('price');
        // return $avg;

        // $sum=DB::table('products')->sum('price');
        // return $sum;

        //  $result= DB::table('products')->select('title','price')->get();
        // return $result;

        // $result= DB::table('products')->select('price')->distinct()->get();
        // return $result;


        // $result=DB::table('products')
        // ->join('brands','products.brand_id','=','brands.id')
        // ->join('categories','products.category_id','=','categories.id')
        // ->get();
        // return $result;


        //$join=DB::table('products')
        //    ->rightJoin('brands','products.category_id','=','brands.id')
        //    ->rightjoin('categories','products.category_id','=','brands.id')
        //    ->get();
        // return $join;

        // $join=DB::table('products')
        //     ->crossJoin('brands')
        //     ->get();
        // return $join;


        //Advance Join Cluse\\

        // $result=DB::table('products')
        // ->join('categories',function(JoinClause $join){
        //     $join->on('products.category_id','=','categories.id')
        //     ->where('categories.categoryName','=','Food');
        // })
        // ->join('brands',function(JoinClause $join){
        //     $join->on('products.brand_id','=','brands.id')
        //     ->where('brands.brandName','=','Hatil');
        // })

        // ->get();
        // return $result;

        //Union\\

        // $query1=DB::table('products')->where('products.price','>',2000);
        // $query2=DB::table('products')->where('products.discount','=',1)
        // ->union($query1)->get();

        // return $query2;

        // $result=DB::table('products')->where('products.price','>',2000)->get();
        // return $result;

        //  $result=DB::table('products')->where('title','LIKE','%CA%')->get();
        // return $result;

        //  $result=DB::table('products')->whereIn('price',[234,100])->get();
        // return $result;

        //  $result=DB::table('products')->whereNotIn('price',[234,100])->get();
        // return $result;

        $result=DB::table('products') ->where('price','>',2000)
        ->orWhere('price','=',234)

        ->get();

        return $result;
















    }
}
