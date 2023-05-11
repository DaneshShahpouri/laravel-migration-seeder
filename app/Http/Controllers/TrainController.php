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
}
