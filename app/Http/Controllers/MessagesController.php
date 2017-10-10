<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Message;

use Carbon\Carbon;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $messages = Message::all();

        return view('messages.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('messages.create_message');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* Guardar mensaje */

        /*Primera forma de guardar con eloquent*/

        // $message = new Message;

        // $message->nombre = $request->input('nombre');

        // $message->email = $request->input('email');

        // $message->mensaje = $request->input('mensaje');

        // $message->save();

        /*Segunda forma de guarda con eloquent*/

        Message::create($request->all());

        /* Redireccionar */

        return redirect()->route('mensajes.index');
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
        $message = Message::findOrFail($id);

        return view('messages.show_message', compact('message'));
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
       $message = Message::findOrFail($id);

        return view('messages.edit_message', compact('message'));
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
        /*edit*/

        Message::findOrFail($id)->update($request->all());

        /*redirect*/ 

        return redirect()->route('mensajes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*delete*/
        
        Message::findOrFail($id)->delete();

        /*redirect*/

        return redirect()->route('mensajes.index');
    }
}
