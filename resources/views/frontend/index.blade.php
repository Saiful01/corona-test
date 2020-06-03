<!DOCTYPE html>
<html lang="en">
<head>
    <title>Corona Test</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }

        /* Hide the carousel text when the screen is less than 600 pixels wide */
        @media (max-width: 600px) {
            .carousel-caption {
                display: none;
            }
        }
    </style>
</head>
<body ng-app="myApp" ng-controller="myCtrl">

<nav id="navbar-example2" class="navbar navbar-light bg-light scroll-to-top">
    <a class="navbar-brand" href="#">Navbar</a>
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link" href="#fat">@fat</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#mdo">@mdo</a>
        </li>
    </ul>
</nav>
<div class="container " style="margin-top: 20px">
    <div class="row">
        <div class="col-md-3">
            {{-- <form action="/form" class="form-inline p-" method="get">
                 <div class="form-group">
                     <label for="email">Email address:</label>
                     <input type="email" class="form-control" placeholder="Enter email" id="email">
                 </div>
                 <div class="form-group">
                     <label for="pwd">Password:</label>
                     <input type="password" class="form-control" placeholder="Enter password" id="pwd">
                 </div>
                 <div class="form-group form-check">
                     <label class="form-check-label">
                         <input class="form-check-input" type="checkbox"> Remember me
                     </label>
                 </div>
                 <button type="submit" class="btn btn-primary">Submit</button>
             </form>--}}
        </div>
        <div class="col-md-6">
            <form action="/form" class="form-inline p-" method="get">
                <div name="age">
                    <div class="name">
                        <p>স্বাগতম। এই টুলটির সাহায্যে আপনি কোভিড-১৯ বা
                            নভেল করোনা ভাইরাস দ্বারা আক্রান্ত কি’না, তা নিজেই
                            মূল্যায়ন করতে পারবেন। এমনকি আপনার ঝুঁকির মাত্রা ও করনীয় সম্পর্কেও জানতে পারবেন। এই
                            সফটওয়্যারটি
                            বিশ্ব
                            স্বাস্থ্য সংস্থা এর গাইডলাইন মেনে তৈরি করা হয়েছে। তবে কোন অবস্থাতেই এই সফটওয়ার থেকে প্রাপ্ত
                            ফলাফলকে
                            অভিজ্ঞ ডাক্তার কর্তৃক স্বাস্থ্য পরামর্শ হিসেবে বিবেচনা করা যাবে না। সফটওয়ারে আপনার শেয়ার করা
                            তথ্যের
                            গোপনীয়তা বজায় রাখা হবে।</p>
                    </div>
                    <div class="name">
                        <p>
                            আপনার বয়স কত?</p>
                    </div>
                    <div class="radio">

                        <input type="radio" name="age" value="0-20"> ০-২০
                        <input type="radio" name="age" value="21-30"> ২১-৩০
                        <input type="radio" name="age" value="31-40"> ৩১-৪০
                        <input type="radio" name="age" value="41-50"> ৪১-৫০
                        <input type="radio" name="age" value="51-65"> ৫১-৬৫
                        <input type="radio" name="age" value="65+"> ৬৫+

                    </div>

                </div>

                <div name="gender">
                    <div class="name">
                        <p>আপনার লিঙ্গ নির্বাচন করুন</p>
                    </div>
                    <div class="radio">

                        <input type="radio" name="gender" value="male"> পুরুষ
                        <input type="radio" name="gender" value="female"> নারী
                        <input type="radio" name="gender" value="other"> অন্যান্য

                    </div>

                </div>
                <div name="female">

                    <div class="name">
                        <p>আপনি কি গর্ভবতী?</p>
                    </div>
                    <div class="radio">

                        <input type="radio" name="female" value="yes"> হ্যাঁ
                        <input type="radio" name="female" value="no"> না


                    </div>

                </div>
                <div name="temperature">
                    <div class="name">
                        <p>দয়াকরে আপনার শরীরের বর্তমান তাপমাত্রা কত তা আমাদের জানান</p>
                    </div>
                    <div class="name">
                        <p>(ফারেনহাইটে উল্লেখ করুন)</p>
                    </div>
                    <div class="radio">

                        <input type="radio" name="temperature" value="96-98"> শরীরের তাপমাত্রা স্বাভাবিক আছে 96°F-98.6°F<br>
                        <input type="radio" name="temperature" value="98-100"> শরীরের তাপমাত্রা স্বাভাবিক আছে
                        98°F-100.6°F<br>
                        <input type="radio" name="temperature" value="98-102"> জ্বর 98.6°F-102°F<br>
                        <input type="radio" name="temperature" value="102"> অনেক জ্বর >102°F<br>
                        <input type="radio" name="temperature" value="no"> জানি না

                    </div>

                </div>




                <div name="symptom">
                    <div class="name">
                        <p>আপনার কি এই লক্ষণ গুলো রয়েছে?</p>
                    </div>
                    <div class="name">
                        <p>(আপনি একাধিক টিক দিতে পারবেন)</p>
                    </div>
                    <div class="radio">

                        <label class="float-left">
                            <input type="checkbox" name="symptom" value="1">শ্বাসকষ্ট
                        </label>
                        <label class="float-left">
                            <input type="checkbox" name="symptom" value="2">শুকনা কাশি
                        </label>
                        <label class="float-left">
                            <input type="checkbox" name="symptom" value="3">গলা ব্যথা
                        </label>
                        <label class="float-left">
                            <input type="checkbox" name="symptom" value="4">অতি দুর্বলতা (যেমনঃ বাথরুমে যেতে অন্যের সাহায্যের প্রয়োজন
                            হয় এমন)
                        </label>
                        <label class="float-left">
                            <input type="checkbox" name="symptom" value="5">সর্দি বা নাক দিয়ে পানি পড়া
                        </label>
                    </div>
                    <div class=" float-right" >
                        <button  class="btn btn-success">পরবর্তী</button>
                    </div>

                </div>

               <div name="extrasymptom">
                   <div class="name">
                       <p>অতিরিক্ত কি কি লক্ষণ আপনার রয়েছে?</p>
                   </div>
                   <div class="name">
                       <p>(আপনি একাধিক টিক দিতে পারবেন)</p>
                   </div>
                   <div class="radio">

                       <label class="float-left">
                           <input type="checkbox" name="extrasymptom" value="1">পেট ব্যাথা, বমি বা পাতলা পায়খানা
                       </label>
                       <label class="float-left">
                           <input type="checkbox" name="extrasymptom" value="2">বুকে ব্যথা এবং চাপ অনুভব করা
                       </label>
                       <label class="float-left">
                           <input type="checkbox" name="extrasymptom" value="3">নাকে গন্ধ না পাওয়া
                       </label>
                       <label class="float-left">
                           <input type="checkbox" name="extrasymptom" value="4">স্বাদ না পাওয়া
                       </label>
                       <label class="float-left">
                           <input type="checkbox" name="extrasymptom" value="5">চোখ চুলকানো বা লাল হয়ে যাওয়া
                       </label>
                       <label class="float-left">
                           <input type="checkbox" name="extrasymptom" value="6">মাংশপেশি তে ব্যাথা
                       </label>
                       <label class="float-left">
                           <input type="checkbox" name="extrasymptom" value="7">তন্দ্রাচ্ছন্নভাব
                       </label>
                       <label class="float-left">
                           <input type="checkbox" name="extrasymptom" value="8">একটিও না
                       </label>

                   </div>
                   <div class=" float-right" >
                       <button  class="btn btn-success">পরবর্তী</button>
                   </div>

               </div>
                <div name="disease">
                    <div class="name">
                        <p>আপনার ভ্রমণ এর বিস্তারিত তথ্য দিন</p>
                    </div>
                    <div class="radio">

                        <input type="radio" name="disease" value="1"> গত ১৪ দিনের মধ্যে কোথাও ভ্রমণ করি নাই অথবা করোনা
                        আক্রান্ত কিংবা জ্বর, কাশি, শ্বাসকষ্ট আছে এমন কারো কাছাকাছি যাই নাই <br>
                        <input type="radio" name="disease" value="2"> গত ১৪ দিনের মধ্যে করোনা ভাইরাসে আক্রান্ত
                        ব্যক্তির সংস্পর্শে গিয়েছিলাম
                        <input type="radio" name="disease" value="3"> গত ১৪ দিনের মধ্যে করোনা ভাইরাসে আক্রান্ত এলাকা
                        বা বিদেশে ভ্রমণ করেছি<br>
                        <input type="radio" name="disease" value="4"> গত ১৪ দিনের মধ্যে বিদেশ থেকে ফিরেছে এমন কারো
                        সংস্পর্শে গিয়েছিলাম
                        <input type="radio" name="disease" value="5"> গত ১৪ দিনের মধ্যে জ্বর, কাশি, শ্বাসকষ্ট আছে এমন
                        কারো সংস্পর্শে গিয়েছিলাম (যেমনঃ পরিবার সদস্য / সহকর্মী)

                    </div>

                </div>
                <div name="predisease">
                    <div class="name">
                        <p>আপনার কি এই রোগ গুলো আগে থেকেই আছে?</p>
                    </div>
                    <div class="name">
                        <p>(আপনি একাধিক টিক দিতে পারবেন)</p>
                    </div>
                    <div class="radio">

                        <label class="float-left">
                            <input type="checkbox" value="1">ফুসফুসের সমস্যা
                        </label>
                        <label class="float-left">
                            <input type="checkbox" value="2">ক্যান্সার
                        </label>
                        <label class="float-left">
                            <input type="checkbox" value="3">কিডনির সমস্যা
                        </label>
                        <label class="float-left">
                            <input type="checkbox" value="4">ডায়াবেটিস
                        </label>
                        <label class="float-left">
                            <input type="checkbox" value="5">হৃদরোগের সমস্যা
                        </label>
                        <label class="float-left">
                            <input type="checkbox" value="6">উচ্চ রক্ত চাপ
                        </label>
                    </div>
                    <div class=" float-right" >
                        <button  class="btn btn-success">পরবর্তী</button>
                    </div>
                </div>

                <div name="smoke">
                    <div class="name">
                        <p>আপনার কি ধূমপানের অভ্যাস আছে?</p>
                    </div>
                    <div class="radio">

                        <input type="radio" name="smoke" value="yes"> হ্যাঁ
                        <input type="radio" name="smoke" value="no"> না


                    </div>

                </div>
                <div name="nurse">

                    <div class="name">
                        <p>আপনি কি একজন স্বাস্থ্যকর্মী? (ডাক্তার, নার্স, সহায়ককর্মী ইত্যাদি)</p>
                    </div>
                    <div class="radio">

                        <input type="radio" name="nurse" value="yes"> হ্যাঁ
                        <input type="radio" name="nurse" value="no"> না


                    </div>

                </div>
                <div name="changesmyptom">
                    <div class="name">
                        <p>আপনার লক্ষণ গুলো গত ৪৮ ঘণ্টায় কি পরিবর্তন হয়েছে?</p>
                    </div>
                    <div class="radio">

                        <input type="radio" name="gender" value="male"> কোন পরিবর্তন নাই
                        <input type="radio" name="gender" value="female"> অনেক বেশী খারাপ
                        <input type="radio" name="gender" value="female"> আরও খারাপ হয়েছে
                        <input type="radio" name="gender" value="female"> আগের থেকে ভালো


                    </div>
                </div>

                <label>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </label>
            </form>

        </div>
        <div class="col-md-3">

        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>

<script>
    var app = angular.module('myApp', []);
    app.controller('myCtrl', function ($scope) {

        //age
        //gender

        console.log("App");


    });
</script>
</body>
</html>
