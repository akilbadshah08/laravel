<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Email_model;
use App\Campiagn_model;
use App\Http\Requests\ValidateEmail;
    use View;


class Email extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $emails = Email_model::all();
        return  View::make('email/list',['emails' => $emails]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $campiagns = Campiagn_model::all(['campiagn_id','title']);
        $filtered_campiagns=[];
        foreach ($campiagns as $key => $value) {
           $filtered_campiagns[$value->campiagn_id]=$value->title;
        }
        return View::make('email/create',['campiagns' =>$filtered_campiagns]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $emails = new Email_model();
        $email_data = $request->email;
        $emails->email=$email_data['email'];
        $emails->user_id=1;
        $emails->campiagn=1;
        $emails->save();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
