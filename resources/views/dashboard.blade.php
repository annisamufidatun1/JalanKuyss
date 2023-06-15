{{-- @extends('layouts.template')
@section('body')
    <div class="container-fluid">
        <div class="row" id="overall">
            <div class="col" id="content">
                <h2>Hello!</h2>
                <h3>Welcome and explore the world with Jalankuy.</h3>

                <form>
                    <div class="row">
                        <div class="col-7" id="searchbar">
                            <input type="text" class="container-fluid" id="search" name="cari" placeholder="Search for your favourite destination" value="{{ old('cari') }}">
                        </div>

                        <div class="col-2" id="searchbar" action="/dashboard/results" method="GET">
                            <button type="submit" class="search-btn" id="search-btn">
                                Search
                            </button>
                        </div>

                        <div class="col-1" id="filter">
                            <!--  <iconify-icon icon="ic:outline-notifications-none"></iconify-icon> -->
                            <iconify-icon icon="ri:equalizer-line" style="font-size: 37px; color: black; background-color: #FFC68F; border-radius: 14px; padding: 5px;"></iconify-icon>
                        </div>

                        <div class="col-1" id="notif">
                            <iconify-icon icon="ic:outline-notifications-none" style="font-size: 37px; color: black; background-color: #FFC68F; border-radius: 100%; padding: 5px;"></iconify-icon>
                        </div>

                        <div class="col-1" id="mini-profile">
                            <!-- <img src="Logo Icon/Mark.svg" alt=""> -->
                        </div>
                    </div>
                </form>

                <h2>Popular Today</h2>

                <div class="container-fluid" id="popular">

                    <div class="row">
                        <div class="col-4">
                            <img src="Logo Icon/Poster.svg" alt="" style="height: 220px; width: 220px; margin-left:20px">
                        </div>
                        <div class="col-8">
                            <h5 style="font-family: 'Poppins'; font-weight: 700; font-size: 28px; color: #143362">(Nama Event)</h5>
                            <p style="font-size: 20px; vertical-align:middle; margin:10px 0">
                                <iconify-icon icon="ion:location-outline" style="font-size: 30px; color: black; vertical-align:middle"></iconify-icon> (Location)
                            </p>
                            <p style="font-size: 20px; vertical-align:middle; margin:0">
                                <iconify-icon icon="ant-design:star-filled" style="font-size: 30px; color: black; vertical-align:middle"></iconify-icon> (rating)
                            </p>
                            <p style="color:#5F647E; margin-top: 10px">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit in quas cumque unde rem nesciunt amet ipsum itaque..
                            </p>
                            <button type="button" class="btn" style="background-color: #FFC68F; border-radius: 10px ">
                                Detail
                            </button>
                            <button type="button" class="btn" style="background-color: #FD7B46; border-radius: 10px; margin-left: 10px">
                                Get a Ticket
                            </button>

                        </div>
                    </div>

                </div>

                <h2>Discover World</h2>
                    <div class="wrapper">
                        <div class="card" id="discover">
                            <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                            <div class="card-body">
                                <h6 class="card-title">(Nama Event)</h6>
                            </div>
                        </div>

                        <div class="card" id="discover">
                            <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                            <div class="card-body">
                                <h6 class="card-title">(Nama Event)</h6>
                            </div>
                        </div>

                        <div class="card" id="discover">
                            <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                            <div class="card-body">
                                <h6 class="card-title">(Nama Event)</h6>
                            </div>
                        </div>

                        <div class="card" id="discover">
                            <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                            <div class="card-body">
                                <h6 class="card-title">(Nama Event)</h6>
                            </div>
                        </div>

                        <div class="card" id="discover">
                            <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                            <div class="card-body">
                                <h6 class="card-title">(Nama Event)</h6>
                            </div>
                        </div>

                        <div class="card" id="discover">
                            <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                            <div class="card-body">
                                <h6 class="card-title">(Nama Event)</h6>
                            </div>
                        </div>

                        <div class="card" id="discover">
                            <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                            <div class="card-body">
                                <h6 class="card-title">(Nama Event)</h6>
                            </div>
                        </div>

                        <div class="card" id="discover">
                            <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                            <div class="card-body">
                                <h6 class="card-title">(Nama Event)</h6>
                            </div>
                        </div>

                        <div class="card" id="discover">
                            <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                            <div class="card-body">
                                <h6 class="card-title">(Nama Event)</h6>
                            </div>
                        </div>

                        <div class="card" id="discover">
                            <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                            <div class="card-body">
                                <h6 class="card-title">(Nama Event)</h6>
                            </div>
                        </div>

                        <div class="card" id="discover">
                            <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                            <div class="card-body">
                                <h6 class="card-title">(Nama Event)</h6>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

