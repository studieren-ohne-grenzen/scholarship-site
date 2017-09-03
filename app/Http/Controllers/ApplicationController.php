<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\UploadApplicant;
use App\Http\Controllers\Controller;
use App\Http\Requests\Step1Data;
use App\Http\Requests\Step2Data;
use App\Http\Requests\Step3Data;
use App\Http\Requests\Step4Data;
use App\Http\Requests\Step5Data;
use App\Http\Requests\Step6Data;
use App\Http\Requests\UploadData;
use App\Http\Requests\SummaryData;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function imprint()
    {
        return view('imprint');
    }

    public function about()
    {
        return view('about');
    }

    public function apply()
    {
        return view('apply');
    }

    public function index()
    {
        return view('index');
    }

    public function upload()
    {
        return view('upload');
    }

    public function step1()
    {
        return view('step1');
    }

    public function step2()
    {
        return view('step2');
    }

    public function step2save(Step1Data $request)
    {
        $request->session()->put('first_name', $request->input('first_name'));
        $request->session()->put('family_name', $request->input('family_name'));
        $request->session()->put('nationality', $request->input('nationality'));
        $request->session()->put('gender', $request->input('gender'));
        $request->session()->put('current_address', $request->input('current_address'));
        $request->session()->put('civil_status', $request->input('civil_status'));
        $request->session()->put('date_of_birth', $request->input('date_of_birth'));
        $request->session()->put('place_of_birth', $request->input('place_of_birth'));
        $request->session()->put('phone', $request->input('phone'));
        $request->session()->put('email', $request->input('email'));
        return view('step2');
    }

    public function step3()
    {
        return view('step3');
    }

    public function step3save(Step2Data $request)
    {
        $request->session()->put('mother', $request->input('mother'));
        $request->session()->put('father', $request->input('father'));
        $request->session()->put('spouse', $request->input('spouse'));
        $request->session()->put('children', $request->input('children'));
        $request->session()->put('siblings', $request->input('siblings'));
        return view('step3');
    }

    public function step4()
    {
        return view('step4');
    }

    public function step4save(Step3Data $request)
    {
        $request->session()->put('conditions', $request->input('conditions'));
        $request->session()->put('parents_profession', $request->input('parents_profession'));
        $request->session()->put('where_live', $request->input('where_live'));
        $request->session()->put('how_many_people', $request->input('how_many_people'));
        $request->session()->put('job', $request->input('job'));
        $request->session()->put('conflict', $request->input('conflict'));
        $request->session()->put('support_needed', $request->input('support_needed'));
        $request->session()->put('additional_information', $request->input('additional_information'));
        return view('step4');
    }

    public function step5()
    {
        return view('step5');
    }

    public function step5save(Step4Data $request)
    {
        $request->session()->put('enrolled', $request->input('enrolled'));
        $request->session()->put('major', $request->input('major'));
        $request->session()->put('still_studying', $request->input('still_studying'));
        $request->session()->put('dropping_out_reasons', $request->input('dropping_out_reasons'));
        $request->session()->put('wanted_major', $request->input('wanted_major'));
        $request->session()->put('languages', $request->input('languages'));
        $request->session()->put('live_with_family', $request->input('live_with_family'));
        return view('step5');
    }

    public function step6()
    {
        return view('step6');
    }

    public function step6save(Step5Data $request)
    {
        $request->session()->put('engagement', $request->input('engagement'));
        $request->session()->put('biggest_problems', $request->input('biggest_problems'));
        $request->session()->put('future', $request->input('future'));
        $request->session()->put('motivation', $request->input('motivation'));
        return view('step6');
    }

    public function summary()
    {
        return view('summary');
    }

    public function summarysave(Step6Data $request)
    {
        $request->session()->put('project', $request->input('project'));
        $request->session()->put('project_goal', $request->input('project_goal'));
        $request->session()->put('project_reach', $request->input('project_reach'));
        $request->session()->put('project_role', $request->input('project_role'));
        $request->session()->put('project_finances', $request->input('project_finances'));
        $request->session()->put('project_partners', $request->input('project_partners'));
        return view('summary');
    }

    public function createUpload(UploadData $request)
    {
        $applicant = new UploadApplicant;
        $applicant->first_name = $request->input('first_name');
        $applicant->family_name = $request->input('family_name');
        $applicant->file_name = $request->file('application_pdf')->store('applications');
        $applicant->save();
        return view('submitted');
    }
    
    public function create(SummaryData $request)
    {
        // TODO: Validation
        $applicant = new Applicant;
        $applicant->first_name = $request->session()->get('first_name');
        $applicant->family_name = $request->session()->get('family_name');
        $applicant->nationality = $request->session()->get('nationality');
        $applicant->gender = $request->session()->get('gender');
        $applicant->current_address = $request->session()->get('current_address');
        $applicant->civil_status = $request->session()->get('civil_status');
        $applicant->date_of_birth = $request->session()->get('date_of_birth');
        $applicant->place_of_birth = $request->session()->get('place_of_birth');
        $applicant->phone = $request->session()->get('phone');
        $applicant->email = $request->session()->get('email');

        $applicant->mother = $request->session()->get('mother');
        $applicant->father = $request->session()->get('father');
        $applicant->spouse = $request->session()->get('spouse');
        $applicant->children = $request->session()->get('children');
        $applicant->siblings = $request->session()->get('siblings');

        $applicant->conditions = $request->session()->get('conditions');
        $applicant->parents_profession = $request->session()->get('parents_profession');
        $applicant->where_live = $request->session()->get('where_live');
        $applicant->how_many_people = $request->session()->get('how_many_people');
        $applicant->job = $request->session()->get('job');
        $applicant->conflict = $request->session()->get('conflict');
        $applicant->support_needed = $request->session()->get('support_needed');
        $applicant->additional_information = $request->session()->get('additional_information');

        $applicant->enrolled = $request->session()->get('enrolled');
        $applicant->major = $request->session()->get('major');
        $applicant->still_studying = $request->session()->get('still_studying');
        $applicant->dropping_out_reasons = $request->session()->get('dropping_out_reasons');
        $applicant->wanted_major = $request->session()->get('wanted_major');
        $applicant->languages = $request->session()->get('languages');
        $applicant->live_with_family = $request->session()->get('live_with_family');

        $applicant->engagement = $request->session()->get('engagement');
        $applicant->biggest_problems = $request->session()->get('biggest_problems');
        $applicant->future = $request->session()->get('future');
        $applicant->motivation = $request->session()->get('motivation');

        $applicant->project = $request->session()->get('project');
        $applicant->project_goal = $request->session()->get('project_goal');
        $applicant->project_reach = $request->session()->get('project_reach');
        $applicant->project_role = $request->session()->get('project_role');
        $applicant->project_finances = $request->session()->get('project_finances');
        $applicant->project_partners = $request->session()->get('project_partners');

        $applicant->save();
        $request->session()->flush();
        return view('submitted');
    }
}
