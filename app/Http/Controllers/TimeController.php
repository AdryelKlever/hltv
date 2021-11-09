<?php

namespace App\Http\Controllers;

use App\Http\Requests\TimeRequest;
use App\Models\Time;
use Illuminate\Http\Request;

class TimeController extends Controller
{
    private $objTime;

    public function __construct()
    {
        $this -> objTime = new Time();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $time = $this -> objTime -> all() ->sortBy('name');
        return view('times', compact('time'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createTimes');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TimeRequest $request)
    {
        $cadastroTime = $this -> objTime -> create([
            'name' => $request -> name,
            'twitter' => $request -> twitter,
            'instagram' => $request -> instagram,
            'wordlranking' => $request -> wordlranking,
            'weekstop30' => $request -> weekstop30
        ]);

        if($cadastroTime) {
            return redirect('times');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $time = $this -> objTime -> find($id);
        return view('showTimes', compact('time'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $time = $this -> objTime -> find($id);
        return view('createTimes', compact('time'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TimeRequest $request, $id)
    {
        $this -> objTime -> where(['id' => $id]) -> update([
            'name' => $request -> name,
            'twitter' => $request -> twitter,
            'instagram' => $request -> instagram,
            'image' => $request -> image,
            'wordlranking' => $request -> wordlranking,
            'weekstop30' => $request -> weekstop30
        ]);

        return redirect('times');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = $this -> objTime -> destroy($id);
        return ($del) ? "Sim" : "Não";
    }
}
