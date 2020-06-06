<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Result;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Redirect;
use Mockery\Exception;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function coronaTest(Request $request)
    {

        // return $request['symptom'];

        $risk_counter = 0;


        if ($request['age'] >= 5) {
            $risk_counter += 5;
        } else {
            $risk_counter += 2;
        }

        if ($request['gender'] == "female") {
            if ($request['is_pregnant'] == "yes") {
                $risk_counter += 2;
            }
        }
        //temperature

        if ($request['temperature'] == 3) {
            $risk_counter += 7;
        } else if ($request['temperature'] == 4) {
            $risk_counter += 10;
        } else if ($request['temperature'] == 5) {
            $risk_counter += 7;
        } else {
            $risk_counter = 0;
        }

        //Symptom
        if (isset($request['symptom'])) {
            $risk_counter += count($request['symptom']) * 5;
        }


        //Extra Symptom
        if (isset($request['extra_symptom'])) {
            $risk_counter += count($request['extra_symptom']) * 5;
        }

        //Disease
        if ($request['disease'] != 1) {
            $risk_counter += 10;
        }
        if (isset($request['pre_disease'])) {
            $risk_counter += count($request['pre_disease']);
        }

        //Smoking
        if ($request['is_smoker'] == "yes") {
            $risk_counter += 5;
        }
        //Nurse
        if ($request['is_nurse'] == "yes") {
            $risk_counter += 5;
        }
        //Symptom Change
        if ($request['symptom_change'] > 2) {
            $risk_counter += 5;
        }


        $request['symptom'] = json_encode($request['symptom']);
        $request['extra_symptom'] = json_encode($request['extra_symptom']);
        $request['pre_disease'] = json_encode($request['pre_disease']);
        $request['score'] = $risk_counter;
        $request['created_at'] = Carbon::now();
        $request['updated_at'] = Carbon::now();

        try {
            $result_id = Result::insertGetId($request->all());
        } catch (Exception $exception) {

            return $exception->getMessage();
        }


        $risk_valeu = getRiskMeasurement($risk_counter);


        return view('common.test.submit')
            ->with('result_id', $result_id)
            ->with('result', $risk_valeu);


    }

    public function home()
    {
        return view('common.home.index');
    }

    public function preTest()
    {
        return view('common.test.pretest');
    }

    public function preTestGo(Request $request)
    {
        if ($request['status'] == 1) {
            return Redirect::to('/corona-test');
        } else {

            $request['created_at'] = Carbon::now();
            $request['updated_at'] = Carbon::now();

            try {
                $result_id = Result::insertGetId($request->all());
                return view('common.test.submit')
                    ->with('result_id', $result_id)
                    ->with('result', 0);
            } catch (Exception $exception) {

                return $exception->getMessage();
            }

        }
    }

    public function testSave(Request $request)
    {

       //return $request->all();

        $result_id = $request['result_id'];
        $result = $request['result'];
        $request['created_at'] = Carbon::now();
        $request['updated_at'] = Carbon::now();
        unset($request['result_id']);
        unset($request['_token']);
        unset($request['result']);
        unset($request['type']);


        $is_exist = Patient::where('phone', $request['phone'])->first();


        if (is_null($is_exist)) {
            try {
                $id = Patient::insertGetId($request->all());
            } catch (Exception $exception) {
                return $exception->getMessage();
            }
        } else {
            $id = $is_exist->patient_id;
        }

        Result::where('result_id', $result_id)->update([
            'patient_id' => $id
        ]);
        return view('common.test.answer')->with('result', $result);
    }


}
