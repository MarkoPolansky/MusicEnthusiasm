<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}?v=1.0">
</head>
<body class="pt-5">
    <div class="container text-center">
        <h1 class="display-2 fw-normal">TimeLine</h1>
    </div>
    <section class="timeline-section pt-5 mt-5">
        <div class="row container-fluid m-0 timeline  position-relative">
            <div class="div-img col-12 col-sm-6 col-md-6 col-lg-6 justify-content-end d-flex px-sm-5 px-4">
                <img class="timeline-img " src="{{asset('images/photo.jpg')}}" alt="ZostaňZdravý">
            </div>
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6 px-sm-5 px-4 align-items-center d-flex">
                <div class="text position-relative pt-5 pt-md-0">
                    <p class="year p-0 ">23.3</p>
                    <h3 class="title">ZostaňZdravý</h3>
                    <p class="description">
                    Ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <a href="#" class="open-qr text-dark" target="_blank">Zobraziť Qr code</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
