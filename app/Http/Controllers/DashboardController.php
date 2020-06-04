<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Result;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

        $result = Patient::orderBy('patients.created_at', "DESC")
            ->limit(10)->get();


        $total = Patient::count();
        $high_risk = Result::where('score', '>=', '45')->count();
      $Medium_risk = Result::where('score', '>=', '35')->count();

        $little_risk = Result::where('score', '<', '30')->count();
        $female_count = Result::where('gender', 'female')->count();
        $male_count = Result::where('gender', 'male')->count();
        $other_count = Result::where('gender', 'other')->count();
        $today_count = Result::whereDate('created_at', Carbon::today())->count();
        $today_low_count = Result::whereDate('created_at', Carbon::today())
            ->select('score', '>', '30')->count();
         $today_medium_count = Result::select('score', '>', '35')
        ->whereDate('created_at', Carbon::today())->count();
          $today_high_count = Result::select('score', '>', '45')
        ->whereDate('created_at', Carbon::today())->count();
        $today_male_count = Result::select('gender', 'male')
        ->whereDate('created_at', Carbon::today())->count();
        $today_female_count = Result::select('gender', 'female')
        ->whereDate('created_at', Carbon::today())->count();





         $histories = Result::selectRaw('date(created_at) date, count(*) count')
            ->groupBy('date')
            ->limit(7)
            ->orderByDesc('date')
            ->get();
        foreach ($histories as $history){
            $history->date=dateFormat($history->date);
        }

       // return $histories;



        return view('admin.dashboard.index')
            ->with('high_risk', $high_risk)
            ->with('Medium_risk', $Medium_risk)
            ->with('little_risk', $little_risk)

            ->with('female_count', $female_count)
            ->with('male_count', $male_count)
            ->with('other_count', $other_count)
            ->with('histories', $histories)
            ->with('today_count', $today_count)
            ->with('today_low_count', $today_low_count)
            ->with('today_medium_count', $today_medium_count)
            ->with('today_high_count', $today_high_count)
            ->with('today_male_count', $today_male_count)
            ->with('today_female_count', $today_female_count)
            ->with('result', $result)
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

    public function patientFilter(Request $request)
    {

        //return $request->all();

        $query=Patient::orderBy('patients.created_at', "DESC");
        if($request['district'] !="All"){
            $query->where('district', $request['district']);
        }

/*        if($request['status'] !="All"){
            if ($request['status']== 1){
                $query->where('score','>', 45, $request['status']);

            }
            elseif ($request['status']== 2){
                $query->where('score','>', 30, $request['status']);

            }
            elseif ($request['status']== 3){
                $query->where('score','<', 30, $request['status']);

            }
            else {
                $query->whereNull('score');

            }
            $query->where('score', $request['status']);
        }*/

        $result= $query->get();

        return view('admin.patient.show')->with('result', $result);
    }



    public function patientCreate()
    {
        return view('admin.patient.create');
    }
    public function patientSave( Request $request)
    {
        unset($request['_token']);
        try {
            Patient::create($request->all());
            return back()->with('success', "Successfully Saved");
        }
        catch (\Exception $exception){
            return back()->with('failed', $exception->getMessage());
        }
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

    public function passwordchange(){
        return view('admin.password_update')->with('result', User::where('id', Auth::id())->first());;

    }
    public function passwordUpdate(Request $request){
        try {
            unset($request['_token']);
            $request['password'] = Hash::make($request['password']);

            User::where('id', $request['id'])->update([
                'password' => $request['password']
            ]);

            return back()->with('success', "Successfully Updated Your Password");
        } catch (\Exception $exception) {

            return back()->with('success', $exception->getMessage());
        }
    }
}
