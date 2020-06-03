<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
<body>

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

        <div class="col-md-8 mx-auto">
            <div class="container">
                <div class="card p-4">
                    <h4 class="text-danger text-center">মধ্যম ঝুঁকি</h4>
                    <h6>আপনি এই উপদেশ গুলো মেনে চলুন:</h6>
                    <p>ডাক্তারের পরামর্শ নিন, বাসায় থাকুন, সতর্কতা অবলম্বন করুন ও নিজের যত্ন নিন।</p>

                </div>

            </div>
            <div class="container mt-3">
                <div class="card p-4">
                    <h6>ধন্যবাদ, ভবিষ্যৎ প্রয়োজনে আপনার তথ্য সংরক্ষণ করা হয়েছে।</h6>
                   <a href="" >পুনরায় টেস্ট করুন</a>

                </div>

            </div>
            <div class="container mt-3">
                <div class="card p-4">
                    <h6>যেসব প্রতিরোধ আর সতর্কতা অবলম্বন করতে হবে:</h6>
                   <p>ডাক্তারের পরামর্শ মোতাবেক চলুন।
                       লক্ষণগুলো আরো নিবিড়ভাবে পর্যবেক্ষণ করুন। অবস্থার অবনতি হলে আপনার মেডিকেল সহায়তার প্রয়োজন হতে পারে।</p>

                </div>

            </div>
            <div class="container mt-3">
                <div class="card p-4">
                    <h3> প্রতিরোধ এবং সতর্কতা - সাধারণ প্রতিরক্ষামূলক ব্যবস্থা</h3>
                    <p>সচেতন হন, নিম্নলিখিত ওয়েবসাইটগুলির সর্বশেষ আপডেটগুলি নিয়মিত দেখুন:
                        <a href="https://www.who.int/health-topics/coronavirus" target="_blank"> বিশ্ব স্বাস্থ্য সংস্থা</a>
                        &amp;
                        <a href="https://www.iedcr.org/" target="_blank">আইইডিসিআর</a>
                    </p>
                    <p>সংক্রামিত বেশিরভাগ লোকেরা হালকা অসুস্থতা অনুভব করেন এবং রিকভারও করেন তবে এটি কিছু কিছু ক্ষেত্রে আরও গুরুতর হতে পারে। আপনার স্বাস্থ্যের যত্ন নিন এবং নিম্নলিখিত কাজগুলি করে অন্যকে সুরক্ষা দিন:</p>
                    <ul>
                        <li>
                            <h4>ঘন ঘন হাত ধুতে থাকুন</h4>
                            <p>
                                হ্যান্ড স্যানিটাইজার বা সাবান দিয়ে হাত ধুয়ে ফেলুন।
                            </p>
                        </li>
                        <li>
                            <h4>সামাজিক দূরত্ব বজায় রাখুন</h4>
                            <p>কাশি বা হাঁচি হয় এমন কারও সাথে অন্তত 2 মিটার (6 ফুট) দূরত্ব বজায় রাখুন।</p>
                        </li>
                        <li>
                            <h4>চোখ, নাক এবং মুখ স্পর্শ করা এড়িয়ে চলুন</h4>
                            <p>আপনি হাত দিয়ে যে কোন কিছু স্পর্শ করার মাধ্যমে ভাইরাসের সংস্পর্শে আসতে পারেন। আপনার হাতে থেকে আপনার চোখ, নাক বা মুখের মাধ্যমে ভাইরাস শরীরে প্রবেশ করতে পারে।</p>
                        </li>
                        <li>
                            <h4>হাঁচি কাশির শিষ্টাচার অনুশীলন করুন</h4>
                            <p>খেয়াল রাখুন যে, আপনার আশেপাশের মানুষজন হাঁচি কাশির শিষ্টাচার মেনে চলছেন। এর অর্থ হচ্ছে- যখনই কারো হাঁচি বা কাশি পাবে, তখনই বাঁকানো কনুই বা টিস্যু দিয়ে মুখ ও নাকটি আবৃত করে রাখতে হবে। অবিলম্বে হাত ধুয়ে ফেলতে হবে অথবা ব্যবহৃত টিস্যুটি ঢাকনাযুক্ত ওয়েস্টবিনে ফেলে দিতে হবে।</p>
                        </li>
                        <li>
                            <h4>
                                আপনার যদি জ্বর, কাশি এবং শ্বাস নিতে সমস্যা হয় তবে তাড়াতাড়ি চিকিৎসা সেবা নিন
                            </h4>
                            <p>আপনি অসুস্থ বোধ করলে বাড়িতেই থাকুন। আপনার যদি উচ্চ জ্বর হয়, তবে মাঝারি থেকে তীব্র কাশি এবং শ্বাসকষ্টে অসুবিধা হয় এবং অল্প সময়ের মধ্যে এটি আরও খারাপ হয়, চিকিত্সা সেবা গ্রহণ করুন এবং IEDCR এর যে কোন একটি হটলাইনে কল করুন।</p>
                        </li>
                    </ul>

                </div>

            </div>

        </div>

    </div>
</div>

<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>

</body>
</html>
