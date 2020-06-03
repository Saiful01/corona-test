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
            $risk_counter += 5;
        } else if ($request['temperature'] == 4) {
            $risk_counter += 10;
        } else if ($request['temperature'] == 5) {
            $risk_counter += 5;
        } else {
            $risk_counter = 0;
        }

        //Symptom
        if (isset($request['symptom'])) {
            $risk_counter += count($request['symptom']);
        }


        //Extra Symptom
        if (isset($request['extra_symptom'])) {
            $risk_counter += count($request['extra_symptom']);
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

        //return $risk_counter;


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

        if ($risk_counter > 50) {
            $risk_valeu = "অত্যধিক ঝুঁকি ";
        } else if ($risk_counter > 40) {
            $risk_valeu = "মধ্যম ঝুঁকি";
        } else {
            $risk_valeu = "কম ঝুঁকি";
        }


        return view('common.test.submit')
            ->with('result_id', $result_id)
            ->with('result', $risk_valeu);
        // sympstom strat
        /*      1=শ্বাসকষ্ট;
                2=শুকনা কাশি;
                3=গলা ব্যথা;
                4=অতি দুর্বলতা (যেমনঃ বাথরুমে যেতে অন্যের সাহায্যের প্রয়োজন হয় এমন);
                5=অতি দুর্বলতা (যেসর্দি বা নাক দিয়ে পানি পড়া);*/
        //sympstom end

        // extrasymptom strat
        /*      1=পেট ব্যাথা, বমি বা পাতলা পায়খানা;
                2=বুকে ব্যথা এবং চাপ অনুভব করা;
                3=নাকে গন্ধ না পাওয়া;
                4=স্বাদ না পাওয়া;
                5=চোখ চুলকানো বা লাল হয়ে যাওয়া;
                6=মাংশপেশি তে ব্যাথা;
                7=তন্দ্রাচ্ছন্নভাব;
                8=একটিও না;
        */
        //extrasymptom end

        // disease strat
        /*      1=গত ১৪ দিনের মধ্যে কোথাও ভ্রমণ করি নাই অথবা করোনা
                        আক্রান্ত কিংবা জ্বর, কাশি, শ্বাসকষ্ট আছে এমন কারো কাছাকাছি যাই নাই;
                2=গত ১৪ দিনের মধ্যে করোনা ভাইরাসে আক্রান্ত
                        ব্যক্তির সংস্পর্শে গিয়েছিলাম;
                3=গত ১৪ দিনের মধ্যে করোনা ভাইরাসে আক্রান্ত এলাকা
                        বা বিদেশে ভ্রমণ করেছিা;
                4=গত ১৪ দিনের মধ্যে বিদেশ থেকে ফিরেছে এমন কারো
                        সংস্পর্শে গিয়েছিলাম;
                5=গত ১৪ দিনের মধ্যে জ্বর, কাশি, শ্বাসকষ্ট আছে এমন
                        কারো সংস্পর্শে গিয়েছিলাম (যেমনঃ পরিবার সদস্য / সহকর্মী);*/
        //disease end

        // predisease strat
        /*      1=ফুসফুসের সমস্যা;
                2=ক্যান্সার;
                3=কিডনির সমস্যা;
                4=ডায়াবেটিস;
                5=হৃদরোগের সমস্যা;
                6=উচ্চ রক্ত চাপা;
        */
        //predisease end

        // changesmyptom strat
        /*      1= কোন পরিবর্তন নাই;
                2=অনেক বেশী খারাপ;
                3=কিআরও খারাপ হয়েছে;
                4=আগের থেকে ভালো;
        */
        //changesmyptom end


    }

    public function home()
    {


        return view('common.home.index');

    }

    public function testSave(Request $request)
    {


        $result_id = $request['result_id'];
        $result = $request['result'];
        $request['created_at'] = Carbon::now();
        $request['updated_at'] = Carbon::now();
        unset($request['result_id']);
        unset($request['_token']);
        unset($request['result']);
        if (is_null(Patient::where('patient_id', $request['patient_id'])->first())) {
            try {
                $id = Patient::insertGetId($request->all());
            } catch (Exception $exception) {
                return $exception->getMessage();
            }


            Result::where('result_id', $result_id)->update([
                'patient_id' => $id
            ]);

        }
        return view('common.test.answer')->with('result', $result);
    }


}
