<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Result;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    //

    public function _construct()
    {
        // $this->middleware('auth');
    }

    public function dashboard()
    {


        $total = Patient::count();
        $high_risk = Result::where('score', '>=', '50')->count();
        $Medium_risk = Result::where('score', '>=', '40')->count();
        $little_risk = Result::where('score', '<', '40')->count();
        $female_count = Result::where('gender', 'female')->count();
        $male_count = Result::where('gender', 'male')->count();
        $other_count = Result::where('gender', 'other')->count();


        return view('admin.dashboard.index')
            ->with('high_risk', $high_risk)
            ->with('Medium_risk', $Medium_risk)
            ->with('little_risk', $little_risk)
            ->with('female_count', $female_count)
            ->with('male_count', $male_count)
            ->with('other_count', $other_count)
            ->with('total', $total);

    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to('/login');


    }

    public function patientShow()
    {
        $result = Patient::orderBy('patients.created_at', "DESC")
            ->get();
        return view('admin.patient.show')->with('result', $result);
    }

    public function patientDetails($id)
    {

        $results = Result::where('patient_id', $id)->get();
        $patient = Patient::where('patient_id', $id)->first();
/*
        $items = $results[1]->symptom;
        $items = json_decode($items);

        foreach ($items as $item) {
            echo $item;
            echo "<br>";
        }

        return;
        foreach ($results as $res) {


            return $items = $res->symptom;


        }*/
        return view('admin.patient.details')
            ->with('results', $results)
            ->with('patient', $patient);
    }
}
