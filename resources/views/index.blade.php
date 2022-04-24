<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}?v=1.0">

</head>
<body class="">
<section class="container-fluid header position-relative">
    <div class="container-fluid header-div d-flex row m-0 justify-items-around">

        <h1 class="display-2 col-12 text-light text-center fw-normal">TimeLine</h1>
        <div class="search col-12 d-flex container-fluid d-flex justify-content-center align-items-center">
            <input type="text" name="search">
        </div>
    </div>
</section>
<section class="timeline-section mt-5 position-relative">
    <div class="progress-bar"></div>
    @for ($i = 0; $i < 5; $i++)
        <div class="row container-fluid m-0 timeline pt-5 position-relative">
            <div class="div-img col-12 col-sm-6 col-md-6 col-lg-6 justify-content-end d-flex px-sm-5 px-4">
                <img class="timeline-img " src="{{asset('images/photo.jpg')}}" >
            </div>
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6 px-sm-5 px-4 align-items-center d-flex">
                <div class="text position-relative pt-5 pt-md-0">
                    <p class="year p-0 ">23.3</p>
                    <h3 class="title">Lorem ipsum</h3>
                    <p class="description">
                        Ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <a href="#" class="open-qr text-dark" >Zobraziť Qr code</a>
                </div>
            </div>
        </div>
    @endfor


</section>
<div class="vh-100">

</div>
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/ScrollTrigger.min.js"></script>
<script type="text/javascript" src="{{asset('js/animation.js')}}"></script>
</html>
