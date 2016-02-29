<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\FlyerRequest;
use App\Http\Controllers\Controller;
use App\Flyer;
use App;
use App\Flyers_photo;

class DemoController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth', ['except' => 'show']);
		parent::__construct();
	}



   /* public function index()
	{
		$demotab = DB::table('demotab')->get();
		return view('demo',compact('demotab'));
	}
	public function show($id)
	{
      $demotab = DB::table('demotab')->find($id);
		//var_dump($demotab); exit;
		return view('demo',compact('demotab'));
	}*/
	public function home()
	{
		return view('home');
	}
	public function create()
	{
		return view('form');
	}

	public function show($zip,$street)
	{
		//return Flyer::where(compact('zip','street'))->first();
      $flyer = Flyer::locatedAt($zip,$street)->first();
		return view('firstpage',compact('flyer'));
	}

	public function store(FlyerRequest $request)
	{
		$flyer = $this->user->publish(new Flyer($request->all()));
		//Flyer::create($request->all());
		return redirect()->back();
	}
    public function addPhoto($zip,$street,Request $request)
	{
		$this->validate($request,[
				'photo'=> 'required|mimes:jpg,png,bmp,jpeg'
			]
			);

		$flyer = Flyer::locatedAt($zip,$street)->first();

		echo $flyer->user_id;
		echo  \Auth::id();
		if($flyer->user_id != \Auth::id())
		{
			if($request->ajax())
			{
				return response(['message' => 'No Way.'],403);
			}
			flash('No Way.');
		}

		$file = $request->file('photo');

		$name=time().$file->getClientOriginalName();
		$file->move('images',$name);



       $flyer->photos()->create(['path' => "{$name}"]);

		return 'Done';
	}

	public function destroy($id)
	{
       	$f=Flyers_photo::findOrFail($id);

		\File::delete([
			$f->path
		]);
		$f->delete();
		return back();

	}

}
