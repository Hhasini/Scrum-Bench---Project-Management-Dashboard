<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Session;
use App\Messages1;
use Illuminate\Support\Facades\DB as DB;
use Illuminate\Http\Request;

class Message1Controller extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	//function to view all recieved user messages
	public function index()
	{

		$user = \Auth::user()->name;
		$messages1s = Messages1::where('to',$user)->orderBy('created_at', 'desc')->get();

		return view('messages1s.index', array('messages1s' => $messages1s));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */


	public function create()
	{
		//return to send message form
		return view('messages1s.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response

	public function store()
	{

	}*/

	//funtion to store messages
	public function store(Request $request)
	{
		//validate fields
		$this->validate($request, [

			'to' => 'required',
			'message' => 'required',
			'from' => 'required'

		]);

		$input = $request->all();
		Messages1::create($input);
		Session::flash('flash_message', 'Message successfully sent!');

		return redirect()->back();
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $messageid
	 * @return Response
	 */

	public function show($messageid)
	{
		$messages1 = Messages1::find($messageid);
		return view('messages1s.show', array('messages1' => $messages1));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	//function to delete user's recieved messages
	public function destroy($messageid)
	{
		$messages1=Messages1::findOrFail($messageid);
		$messages1->delete();
		DB::table('messages1s')->where('messageid','=', $messageid)->delete();

		return redirect()->route('messages1s.index');

	}

}
