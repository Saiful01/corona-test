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
        <div class="col-md-3">

        </div>
        <div class="col-md-6">
            <div class="container">
                <div class="card">
                    <p>আপনার ঝুঁকি টেস্ট সম্পর্ন হয়েছে। ফলাফল দেখতে নিচের ফর্মটি পুরন করুন। ধন্যবাদ</p>

                </div>

            </div>
            <div class="container">
                <p>আপনার তথ্যগুলো যথাযথ কর্তৃপক্ষের কাছে জানানোর জন্য নিচের ফরমটি পূরণ করে সাবমিট বাটনে ক্লিক করুন।
                    আপনার সকল তথ্য গোপন রাখা হবে।</p>

                <form>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">নাম</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="নাম">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">ইমেইল</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="ইমেইল">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">মোবাইল নম্বর</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword3" placeholder="মোবাইল নম্বর">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">জেলা</label>
                        <div class="col-sm-10">
                             <select id="inputState" class="form-control">
                                    <option selected>ঢাকা</option>
                                    <option selected>চট্টগ্রাম</option>

                                </select>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">উপজেলা</label>
                        <div class="col-sm-10">
                             <select id="inputState" class="form-control">
                                 <option selected>ঢাকা</option>
                                 <option selected>চট্টগ্রাম</option>

                                </select>

                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-sm-10">
                            <a href="/answer" class="btn btn-success">সাবমিট</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-3">

        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>

</body>
</html>
