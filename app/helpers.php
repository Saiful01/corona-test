<?php

use Carbon\Carbon;

function getScore($id)
{

    $data = \App\Result::where('patient_id', $id)->orderBy('created_at', 'DESC')->first();
    if(is_null($data)){
        return 0;
    }
    return $data->score;
}
function getResult($id)
{

    $data = \App\Result::where('patient_id', $id)->orderBy('created_at', 'DESC')->first();
    if(is_null($data)){
        return 0;
    }
    return getRiskMeasurement($data->score);
}

function gettingSympTomIdtoValue($id)
{
    $array = [
        '',
        'শ্বাসকষ্ট',
        'শুকনা কাশি',
        'গলা ব্যথা',
        'অতি দুর্বলতা',
        'সর্দি বা নাক দিয়ে পানি পড়া',
        'একটিও না',
    ];

    return $array[$id];
}

function gettingExtraSympTomIdtoValue($id)
{
    $array = [
        '',
        'পেট ব্যাথা, বমি বা পাতলা পায়খান',
        'বুকে ব্যথা এবং চাপ অনুভব করা',
        'নাকে গন্ধ না পাওয়া',
        '্বাদ না পাওয়া',
        'চোখ চুলকানো বা লাল হয়ে যাওয়া',
        'মাংশপেশি তে ব্যাথা',
        'তন্দ্রাচ্ছন্নভাব',
        'একটিও না',
    ];

    return $array[$id];
}

function gettingPreDiseaseIdtoValue($id)
{
    $array = [
        '',
        'ফুসফুসের সমস্য',
        'ক্যান্সার',
        'কিডনির সমস্যা',
        'ডায়াবেটিস',
        'হৃদরোগের সমস্যা',
        'উচ্চ রক্ত চাপ',
        'একটিও না',
    ];

    return $array[$id];
}

function gettingTemperatureIdtoValue($id)
{
    $array = [
        '',
        'শরীরের তাপমাত্রা স্বাভাবিক আছে 96°F-98.6°F',
        'শরীরের তাপমাত্রা স্বাভাবিক আছে 98°F-100.6°F',
        'জ্বর 98.6°F-102°F',
        ' অনেক জ্বর >102°F',
        'জানি না',
    ];

    return $array[$id];
}

function gettingDiseaseIdtoValue($id)
{
    $array = [
        '',
        'গত ১৪ দিনের মধ্যে কোথাওভ্রমণ করি নাই অথবা করোনা
             আক্রান্ত কিংবা জ্বর, কাশি, শ্বাসকষ্ট আছে এমন কারো কাছাকাছি যাই নাই',
        'গত ১৪
                                        দিনের মধ্যে করোনা
                                        ভাইরাসে আক্রান্ত
                                        ব্যক্তির সংস্পর্শে গিয়েছিলাম',
        'গত ১৪
                                        দিনের মধ্যে করোনা
                                        ভাইরাসে আক্রান্ত এলাকা
                                        বা বিদেশে ভ্রমণ করেছি',
        ' গত ১৪
                                        দিনের মধ্যে বিদেশ
                                        থেকে ফিরেছে এমন কারো
                                        সংস্পর্শে গিয়েছিলাম',
        'গত ১৪
                                        দিনের মধ্যে জ্বর,
                                        কাশি, শ্বাসকষ্ট আছে এমন
                                        কারো সংস্পর্শে গিয়েছিলাম (যেমনঃ পরিবার সদস্য / সহকর্মী)',
    ];

    return $array[$id];
}

function gettingSympTomChangeIdtoValue($id)
{
    $array = [
        '',
        'কোন পরিবর্তন নাই',
        ' অনেক বেশী খারাপ',
        ' আরও খারাপ হয়েছে',
        'আগের থেকে ভালো',
    ];

    return $array[$id];
}

function dateFormat($date)
{

    $createdAt = Carbon::parse($date);
    return $createdAt->format('d M');
}

function getRiskMeasurement($risk_counter)
{

    if ($risk_counter > 50) {
        $risk_valeu = "অত্যধিক ঝুঁকিপূর্ণ";
    } else if ($risk_counter > 34) {
        $risk_valeu = "মধ্যম ঝুঁকিপূর্ণ";
    } else {
        $risk_valeu = "কম ঝুঁকিপূর্ণ";
    }

    return $risk_valeu;
}
?>
