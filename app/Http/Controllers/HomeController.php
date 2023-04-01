<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        task::create($input);

        // return redirect('task')->with('flash_message', 'task Addedd!');  
    }

    public function update(Request $request, $id)
    {
        $task = task::find($id);
        $input = $request->all();
        $task->update($input);

        // return redirect('task')->with('flash_message', 'task Updated!');  
    }
  
    public function destroy($id)
    {
        task::destroy($id);
        // return redirect('task')->with('flash_message', 'task destroyed!');  

    }



}
