<?php

namespace App\Http\Controllers\Latihan;

use App\Http\Controllers\Controller;
use App\Models\Sortingitem;
use Illuminate\Http\Request;

class DragdroptabelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data   = Sortingitem::all();

        return view('latihan.dragdroptable.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sortingitem  $sortingitem
     * @return \Illuminate\Http\Response
     */
    public function show(Sortingitem $sortingitem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sortingitem  $sortingitem
     * @return \Illuminate\Http\Response
     */
    public function edit(Sortingitem $sortingitem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sortingitem  $sortingitem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $i = 1;
        foreach ($request->position as $key => $value) {
            Sortingitem::where('id',$value)->update([
                'position' => $i
            ]);
            $i++;
        }
    }

    public function simpan(Request $request)
    {
        $i = 1;
        foreach ($request->position as $key => $value) {
            Sortingitem::where('id',$value)->update([
                'position' => $i
            ]);
            $i++;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sortingitem  $sortingitem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sortingitem $sortingitem)
    {
        //
    }
}
