<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Portion;
use Carbon\Carbon;
use App\Models\Chef;

class PenghargaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $time = Carbon::now()->startOfMonth()->format('d M Y');
        $endtime = Carbon::now()->endOfMonth()->format('d M Y');

        $portions =
                DB::table('portions')
                ->leftjoin('users','users.id', '=' ,'user_id')
                ->leftjoin('orders','orders.id', '=', 'order_id')
                ->select('portions.id','user_id','users.name','order_id','orders.total_portion','portions.created_at',
                    (DB::raw("SUM(orders.total_portion) as total")))
                ->whereBetween('portions.created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])
                ->groupBy('user_id')
                ->paginate(5);

        $portions = $portions ? $portions : null;

        $mubadzir =
                DB::table('portions')
                ->leftjoin('users','users.id', '=' ,'user_id')
                ->leftjoin('orders','orders.id', '=', 'order_id')
                ->select('portions.id','user_id','users.name','order_id','portions.created_at',(DB::raw("SUM(portion) as sisa")))
                ->whereBetween('portions.created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])
                ->groupBy('user_id')
                ->paginate(5);
        $mubadzir = $mubadzir ? $mubadzir : null;

        $chefs =
                DB::table('chefs')
                ->leftjoin('users','users.id', '=' ,'user_id')
                ->select('user_id','users.name','chefs.created_at',
                    (DB::raw('COUNT(*) as total')))
                ->whereBetween('chefs.created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])
                ->groupBy('user_id')
                ->paginate(5);
        $chefs = $chefs ? $chefs : null;

        return view('penghargaan',compact('chefs','portions','mubadzir','time','endtime'))->with('i', (request()->input('page', 2) - 1) * 1);
    }

}

