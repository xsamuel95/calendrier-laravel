<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class CalenderController extends Controller
{
	//fonction pour renvoyer 
    public function index(Request $request)
    {
    	if($request->ajax())
    	{
    		$data = Event::whereDate('start', '>=', $request->start)
                       ->whereDate('end',   '<=', $request->end)
                       ->get(['id', 'title', 'start', 'end']);
            return response()->json($data);
    	}
    	return view('calender');
    }

    public function action(Request $request)
    {
    	if($request->ajax())
    	{
    		if($request->type == 'add')
    		{
    			$event = Event::create([
    				'title'		=>	$request->title,
    				'start'		=>	$request->start,
    				'end'		=>	$request->end
    			]);

    			return response()->json($event);
    		}

    		if($request->type == 'update')
    		{
    			$event = Event::find($request->id)->update([
    				'title'		=>	$request->title,
    				'start'		=>	$request->start,
    				'end'		=>	$request->end
    			]);

    			return response()->json($event);
    		}
    	}
    }
     /*public function update(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'start' => 'required',
            'end' => 'required'
        ]);
        // Modèle
        return view('calender')->with('validated', $validated);
    } */
}
?>