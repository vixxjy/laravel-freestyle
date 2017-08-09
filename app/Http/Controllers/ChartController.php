<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Charts;
use Datatables;

class ChartController extends Controller
{
    public function index(){
        $users = User::where(DB::raw("(DATE_FORMAT(created_at, '%Y'))"), date('Y'))->get();
        
        $chart = Charts::database($users, 'bar', 'highcharts')->title("Monthly new Register Users")
        ->elementLabel("Total Users")
        ->dimensions(1000, 500)
        ->responsive(true)
        ->groupByMonth(date('Y'), true);
        
        return view('charts', compact('chart'));
    }
    
    public function getData(){
        return Datatables::of(User::query())->make(true);
       
    }
}
