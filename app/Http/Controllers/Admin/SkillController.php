<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SkillRequest;
use App\Models\Skill;


class SkillController extends Controller
{
    public function store(SkillRequest $request){
        $skill = Skill::create([
            'skill' => $request->skill,
            'percentage' => $request->percentage,
        ]);

        return Skill::all();
    }
}