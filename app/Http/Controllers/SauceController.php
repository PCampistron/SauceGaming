<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sauce;

class SauceController extends Controller
{
    public function index()
    {
        $sauces = Sauce::all();
    }

    public function show($id)
    {
        $sauce = Sauce::find($id);
    }

    public function destroy($id)
    {
        $sauce = Sauce::find($id);
        $sauce->delete();
        return view();
    }

    public function store(Request $request)
    {
        $request->validate([
            'userId' => 'requested'
        ]);
    }
}
