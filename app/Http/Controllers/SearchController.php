<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke()
    {
        $works = Work::with(['employer', 'tags'])->where('title', 'LIKE', '%' .request('q'). '%')->get();

        return view('results', ['works' => $works]);
    }
}
