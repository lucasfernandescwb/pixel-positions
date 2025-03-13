<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $works = Work::latest()->with(['employer', 'tags'])->get()->groupBy('featured');

        return view('works.index', [
            'works' => $works[0],
            'featuredWorks' => $works[1],
            'tags' => Tag::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('works.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => ['required'],
            'salary' => ['required'],
            'location' => ['required'],
            'schedule' => ['required', Rule::in('Part Time', 'Full Time')],
            'url'      => ['required', 'active_url'],
            'tags' => ['nullable']
        ]);


        $attributes['featured'] = $request->has('featured');

        $work = Auth::user()->employer->works()->create(Arr::except($attributes, 'tags'));

        if ($attributes['tags'] ?? false) {
            foreach(explode(',', $attributes['tags']) as $tag) {
                $work->tag($tag);
            }
        }

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
