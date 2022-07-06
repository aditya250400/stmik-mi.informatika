@extends('layouts.app')

@section('title', 'Terimakasih')

@section('main')
    <main class="flex-shrink-0">
        <!-- Navigation-->
       
        <header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                        <div class="my-5 text-center text-xl-start">
                            <h1 class="display-5 fw-bolder text-white mb-2">Anda telah berlangganan via email
                            </h1>
                            <p class="lead fw-normal text-white-50 mb-4">Tunggu informasi dari kami!</p>

                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="cover"
                            src="{{asset('/img/logo10.png')}}" alt="..." /></div>
                </div>
            </div>
        </header>
        <!-- Features section-->

        <!-- Testimonial section-->

        <!-- Blog preview section-->
        <section class="py-5">
            <div class="container px-5 my-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">

                    </div>
                </div>
                <center><a href="/" class="btn btn-primary">Oke</a></center>
              
            </div>
        </section>
    </main>

@endsection