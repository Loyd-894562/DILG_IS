@extends('layouts.app')

@section('content')
    <div>
        <img style=" width: 100%; height: auto;" src="{{ asset('/img/facade.png') }}">
        <p></p>

        <div class="header ml-3 mr-3" style=" padding: 7px; background: #002c76; color: #FFFFFF;  margin-bottom: 5px;">
            <h1 class="text-center" style="font-size: 18px; margin-top: 10px;">CONTACT INFORMATION</h1>
        </div>

        <div class="">
            <div class="card p-5">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="text-left" style="font-size: 28px; font-weight: 700;">Get in touch with us!</h1>
                        <p class="text-justify" style="font-size: 18px;">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab mollitia quibusdam, autem eos
                            doloremque magnam numquam animi enim quaerat eveniet. Aliquam nisi, labore voluptate
                            voluptatibus voluptas rerum cum perspiciatis nemo!</p>


                        <div class="card mx-auto" style="width: 18rem;">
                            <div class="card-body elevation-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/place.png" style="height: 100px;" alt="">
                                </div>
                                <p class="text-center mt-3" style="font-size: 16px; font-weight: 700;">OFFICE ADDRESS</p>
                                <p class="text-center" style="font-size: 15px; font-weight: 450; margin-top: -15px;">Sen.
                                    Benigno Aquino Ave, Tagbilaran City, Bohol</p>
                                {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                            </div>
                        </div>


                        <div class="card mx-auto" style="width: 18rem;">
                            <div class="card-body elevation-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/phone.png" style="height: 100px;" alt="">
                                </div>
                                <p class="text-center mt-3" style="font-size: 16px; font-weight: 700;">CONTACT US</p>
                                <p class="text-center" style="font-size: 15px; font-weight: 450; margin-top: -15px;">
                                    09989878767</p>
                                {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                            </div>
                        </div>


                    </div>
                    <div class="col-md-6">
                        <iframe class="col-md-12"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1006178.5514274818!2d123.60298033998527!3d9.90185998774785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33aa17de1ba154df%3A0x6bc8bf042118d020!2sBohol!5e0!3m2!1sen!2sph!4v1674019267140!5m2!1sen!2sph"
                            height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" class="rounded"></iframe>
                    </div>
                </div>
            </div>
        </div>
    @endsection
