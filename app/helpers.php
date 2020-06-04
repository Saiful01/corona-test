<?php

function getScore($id)
{

    $data= \App\Result::where('patient_id',$id)->orderBy('created_at','DESC')->first();
    return $data->score;
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
    ];

    return $array[$id];
}

?>