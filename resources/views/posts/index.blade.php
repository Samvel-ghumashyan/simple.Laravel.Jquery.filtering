@extends('layouts.layout')

@section('header')
    {{--    <div style="padding-bottom: 70px"></div>--}}
    <div style="background-image: url({{ asset('media/images/corporate_header.jpg') }}); height: 400px;">
        <div class="logoo"><p><span style="color: lime">MY</span> <span>LOGO</span></p></div>

        <div class="h2rentDiv">
            <h2 class="h2rent">АРЕНДОВАТЬ АВТОМОБИЛЬ</h2>
        </div>
    </div>
@endsection

@section('content')
    <div style="margin-bottom: -40px"></div>

    <div class="container mainContainerBus" style="height: auto; min-height: 700px;">
        <div style="height: 20px"></div>

        <div class="row g-1" style="height: 60px;">

            <div class="col-6">
                <div class="btn-group col-12" style="height: 100%;" role="group" aria-label="Basic example">
                    <div class="dropdown col-6 g-0 shadow-lg ">
                        <button class="btn btn-success  col-12 h-100 rounded-0 rounded-start" type="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">
                            <i class="fa-solid fa-location-dot"></i>
                            <span class="optBar1Value">ОТКУДА?</span>
                        </button>
                        <ul id="scrolingDivONe" class="dropdown-menu scrolingDivs shadow-lg  firstBut">

                            <li>
                                <button class="dropdown-item" type="button">Москва</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Санкт-Петербург</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Новосибирск</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Екатеринбург</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Казань</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Нижний Новгород</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Челябинск</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Самара</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Омск</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Ростов-на-Дону</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Уфа</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Красноярск</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Пермь</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Волгоград</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Краснодар</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Воронеж</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Саратов</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Тольятти</button>
                            </li>

                        </ul>
                    </div>

                    <div style="border-right: 1px solid white; height: 60px;"></div>

                    <div class="dropdown col-6 g-0 shadow-lg shadow-lg ">
                        <button class="btn btn-success col-12 h-100 rounded-0 rounded-end" type="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">
                            <i class="fa-solid fa-location-dot"></i>
                            <span class="optBar2Value">КУДА?</span>
                        </button>
                        <ul id="scrolingDivTwo" class="dropdown-menu shadow-lg  scrolingDivs secondBut">

                            <li>
                                <button class="dropdown-item" type="button">Москва</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Санкт-Петербург</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Новосибирск</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Екатеринбург</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Казань</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Нижний Новгород</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Челябинск</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Самара</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Омск</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Ростов-на-Дону</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Уфа</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Красноярск</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Пермь</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Волгоград</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Краснодар</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Воронеж</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Саратов</button>
                            </li>
                            <li>
                                <button class="dropdown-item" type="button">Тольятти</button>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>

            <div class="col-4">
                <div class="btn-group col-12 shadow-lg " style="height: 100%;" role="group" aria-label="Basic example">
                    <button id="daterangeStart" class="btn btn-success col-6" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        <i class="bi bi-calendar"></i>
                        <span class="dateTimeValue1">ДАТА-ПОЛУЧЕНИЕ</span>
                    </button>
                    <div style="border-right: 2px solid white; height: 60px;"></div>
                    <button id="daterangeEnd" class="btn btn-success col-6 " type="button">
                        <i class="bi bi-calendar"></i>
                        <span class="dateTimeValue2">ДАТА-ВОЗВРОТА</span>
                    </button>
                </div>
            </div>

            <div class="col-2">
                <div class="dropdown col-12 g-0 shadow-lg " style="height: 100%;">
                    <button class="btn btn-success  col-12 h-100 rounded-0 rounded-start" type="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false" data-bs-auto-close="outside">
                        <i class="fa-solid fa-filter" style="color: #ffffff;"></i>
                        ФИЛЬТРАЦИЯ?
                    </button>
                    <ul class="dropdown-menu custom_filtration shadow-lg" style="background-color: white">

                        <div style="padding: 5px;">
                            <div class="fw-bold text-center" style="font-size: 25px; color: #383838;">КОМФОРТ</div>
                            <div class="btn-group col-12" style="height: 30px; padding: 0;" role="group"
                                 aria-label="Basic example">
                                <input  type="radio" class="firstClassButton btn-check" name="btnradio" id="class-1"
                                       autocomplete="off" checked>
                                <label class="btn btn-outline-success col-4" for="class-1" style="padding: 2px;">Первый
                                    класс</label>

                                <input  type="radio" class="btn-check" name="btnradio" id="class-2" autocomplete="off">
                                <label class="btn btn-outline-success col-4" for="class-2" style="padding: 2px;">Второй
                                    класс</label>

                                <input  type="radio" class="btn-check" name="btnradio" id="class-3" autocomplete="off">
                                <label class="btn btn-outline-success col-4" for="class-3" style="padding: 2px;">Третий
                                    класс</label>

                            </div>

                            <hr>

                            <div class="row row-cols-3 gx-1 gy-2" style="padding: 20px;">
                                <div class="col">
                                    <button id="Cadillac" type="button"
                                            class="btn btn-outline-secondary position-relative carButtons">
                                        <img class="border-2"
                                             src="{{asset('media/images/car-brands-icon/icons8-cadillac-96.png')}}"
                                             alt=""></button>
                                </div>
                                <div class="col">
                                    <button id="GMC" type="button"
                                            class="btn btn-outline-secondary position-relative  carButtons"><img
                                            src="{{asset('media/images/car-brands-icon/icons8-gmc-96.png')}}" alt="">
                                    </button>
                                </div>
                                <div class="col">
                                    <button id="FORD" type="button"
                                            class="btn btn-outline-secondary position-relative  carButtons"><img
                                            src="{{asset('media/images/car-brands-icon/icons8-ford-96.png')}}" alt="">
                                    </button>
                                </div>
                                <div class="col">
                                    <button id="MERCEDES" type="button"
                                            class="btn btn-outline-secondary position-relative  carButtons"><img
                                            src="{{asset('media/images/car-brands-icon/icons8-mercedes-96.png')}}"
                                            alt="">
                                    </button>
                                </div>
                                <div class="col">
                                    <button id="LEXUS" type="button"
                                            class="btn btn-outline-secondary position-relative  carButtons"><img
                                            src="{{asset('media/images/car-brands-icon/icons8-lexus.png')}}" alt="">
                                    </button>
                                </div>
                                <div class="col">
                                    <button id="BMW" type="button"
                                            class="btn btn-outline-secondary position-relative  carButtons"><img
                                            src="{{asset('media/images/car-brands-icon/icons8-bmw-96.png')}}" alt="">
                                    </button>
                                </div>
                            </div>

                            <div style="display: flex; justify-content: end;">
                                <button id="filterBtn" type="button" class="btn btn-success btn-lg">ПОСМОТРЕТЬ</button>
                            </div>
                        </div>

                    </ul>
                </div>

            </div>

        </div>

        <div style="height: 20px;"></div>

        <div class="container">

            <div class="row row-cols-4 g-1 carsBlocks">
                @foreach($cars as $car)
                    <div class="col-4">
                        <div class="card prod_cards"
                             style=" border-radius: 25px; padding: 20px; background-color: white; height: 400px; ">
                            @if($car->available)
                                <img class="bd-placeholder-img card-img-top carsImages" src=" {{$car->car_img}} ">
                            @else
                                <img class="bd-placeholder-img card-img-top carsImages" src=" {{$car->car_img}} " style="opacity: 0.3">
                            @endif
                            <div class="card-body">
                                @if($car->available)

                                <h4 class="card-title">
                                    {{$car->car_mark}} {{$car->car_model}}
                                </h4>
                                @if($car->car_category_id === 1)
                                <p class="card-text" style="background-color: #fca900; color: white; font-size: 20px; text-align: center;"> С водителям </p>
                                @endif
                                <button class="btn btn-success modalButton"
                                        data-bs-toggle="modal"
                                        data-bs-target="#carModal"
                                        data-car-id="{{ $car->id }}"
                                        data-car-image="{{ $car->car_img }}"
                                        data-car-mark="{{ $car->car_mark }}"
                                        data-car-model="{{ $car->car_model }}"
                                        data-car-driver="{{$car->car_driver}}"
                                        data-car-available="{{$car->available}}"
                                        data-car-category_id="{{$car->car_category_id}}"
                                >Посмотреть</button>
                                @else
                                    <div style="background-color: rgba(45,55,72,0.55); color: white; font-size: 40px; text-align: center;">ЗАНЯТ</div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
                {{--                    </div>--}}
                {{--                        <div class="col-md-12">--}}
                {{--                            {{$posts->onEachSide(1)->links('vendor.pagination.bootstrap-4')}}--}}
                {{--                        </div>--}}

            </div>

            <div class="modal fade" id="carModal" tabindex="-1" aria-labelledby="carModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="carModalLabel">Car Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Content will be loaded dynamically -->
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
