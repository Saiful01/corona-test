<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function coronaTest(Request $request){
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
}
