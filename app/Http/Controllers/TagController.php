<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Work;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Tag $tag)
    {
        return view('results', ['works' => $tag->works]);
    }
}
