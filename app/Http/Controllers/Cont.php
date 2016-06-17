<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Cont extends Controller
{
    public function first()
    {
        return View('first');
    }
    public function second()
    {
        return view('second');
    }
    public function base()
    {
        return view('base');
    }
    public function stas(Request $request)
    {
        $name = $request->id;
        $surename = $request->Name;
      
        //echo $_POST['name1'];
        DB::insert('insert into users_from_ru (name, lastname) values (?,?)', [$name, $surename]);
    }
}