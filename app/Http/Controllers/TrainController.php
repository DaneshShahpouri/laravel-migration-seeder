<?php


namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $data = config('data');
        $trainsList = Train::all();
        return view('trains', compact('data', 'trainsList'));
    }

    public function todayTrains()
    {
        $data = config('data');
        $currentDate = Carbon::now();
        //dd(substr($currentDate, 0, 10));
        $trainsList = Train::all()->where('departure_date', null, substr($currentDate, 0, 10));
        return view('trains', compact('data', 'trainsList'));
    }
}
