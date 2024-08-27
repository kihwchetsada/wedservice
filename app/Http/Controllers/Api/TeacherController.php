<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $json = Teacher::query()
        ->whereBetween('id',[1,50])
        ->get();
        
        return response()->json([
            'status' => '200 OK',
            'data' => $json
        ]);
        
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

      /*  return response()->json([
            "data" => $request->all()
        ]);
       */
    $json = Teacher::create([
        'title_id' => $request->title_id,
        'name' => $request->name,
        'surname' => $request->surname,
        'email' => $request->email,
        'province_id' => $request->province_id,
      ]);
      return response()->json([
        'data' => $json,
    ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $json = Teacher::find($id);
        return response()->json([
           'status code' => "200",
            'data' => $json
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $json = Teacher::where('id',$id)->update([
             'name' => $request->name,
        ]);
        
        return response()->json([
            'status code' => "200",
             'data' => $json
         ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $json = Teacher::where('id',$id)->delete(101);
        return response()->json([
            'status code' => "200",
             'data' => $json
         ]);
    }
}
