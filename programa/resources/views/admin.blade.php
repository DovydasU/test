@extends("layout.base")

@section("title", "Administravimas")

@section("headerfoto")
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Log In <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">Admin Page Log In</h1>
            </div>
        </div>
    </div>
</section>
@endsection

@section("content")
<section class="ftco-section">
    <input class="login">Vardas
    <input class="login">Pavarde
    <input class="login">Email
</section>
@endsection

@section("scripts")
@endsection

@section("styles")
@endsection