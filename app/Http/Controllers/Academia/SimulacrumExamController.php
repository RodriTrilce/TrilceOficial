<?php

namespace App\Http\Controllers\Academia;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

use App\Models\Academia\SimulacrumModel as Simulacrum;
use App\Models\UniversityModel as University;

class SimulacrumExamController extends Controller
{
	public function index(Request $request)
	{

		$university = University::validate( ucwords(Str::slug($request->university, ' ')) );

		if(!$university)
		return abort(404);

		return view('/academia/simulacrum_exam')->with([
			'university' => $university
		]);
	}

}
