@extends('layouts.default-content')

<?php
$title = "JUAN'S AUTO PAINT";
?>

@section('header')
    <div class="flex justify-center">
        <h1 class="font-bold text-5xl text-gray-800  leading-tight w-auto">{{ __($title) }}</h1>
    </div>
@endsection
@section('content')
    <div>
        <h2 class="flex pb-9 mb-0.5 text-2xl font-bold tracking-wide justify-center text-gray-900 uppercase ">New Paint Job</h2>
    </div>


    <div class="">
        <div class="flex justify-center items-center mb-12">
            <div>
                <img id="current-car" src="{{ asset('img/gray_car.png') }}" alt="Current Car">
            </div>
            <div class="px-14 mx-1">
                @include('svgs.arrow_right')
            </div>
            <div>
                <img id="target-car" src="{{ asset('img/gray_car.png') }}" alt="Target Car">
            </div>
        </div>
    </div>

    <div>
        <h4 class="font-bold text-base mb-5">Car Details</h4>
        <form class="w-5/12">
            <div class="flex flex-col space-y-1">
                <div class="flex justify-between items-center">
                    <label for="name" >Plate No.</label>
                    <input type="text" class="form-control border border-black w-3/5" id="name" name="name" required>
                </div>
                <div class="flex justify-between items-center">
                    <label for="current-color">Current Color</label>
                    <select class="form-control border border-black w-3/5" id="current-color" name="current-color">
                        <option value="Gray"></option>
                        <option value="Red">Red</option>
                        <option value="Blue">Blue</option>
                        <option value="Green">Green</option>
                    </select>
                </div>
                <div class="flex justify-between items-center">
                    <label for="target-color">Target</label>
                    <select class="form-control border border-black w-3/5" id="target-color" name="target-color">
                        <option value="Gray"></option>
                        <option value="Red">Red</option>
                        <option value="Blue">Blue</option>
                        <option value="Green">Green</option>
                    </select>
                </div>
                <div class="mb-1 flex">
                    <button type="submit" class="btn btn-danger rounded-0" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: 18px;">
                        Submit</button>
                </div>
            </div>
        </form>
    </div>

@endsection
