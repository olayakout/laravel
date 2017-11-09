<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;


class SkillController extends Controller
{
    public function index(){

    	$name='ola';
		$age=25;
		//get high level language
		$skill=Skill::is_high_level()->where('id','=',2);

		//get all languages
		$skills=Skill::all();

		return view('welcome',compact('name','age','skills'));

    }

      //   public function show($id){

      //   	$skill=Skill::find($id);
    		// return view('skills.show',compact('skill'));
      //   }

    public function show(Skill $skill){

    		return view('skills.show',compact('skill'));
        }

}
