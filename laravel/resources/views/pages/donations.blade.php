@extends('layout')


@section('content')
    <div class="donationContainer">
        <div class="wrapper">
            <div class="section section1">
                <h1>{{ $title }}</h1>
            </div>
            <div class="section section2">
                <form action="{{ url('donations') }}" method="POST">
                    @csrf
                    <input type="text" name="name" id="name" placeholder="Name" required>
                    <input type="text" name="email" id="email" placeholder="Email" required>
                    <input type="number" name="amount" id="amount" class="amount" placeholder="Amount" required>
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Message" required></textarea>
                    <div class="checked">
                        <input type="checkbox" name="check" id="check">
                        <label for="check">I Want this to be public</label>
                    </div>

                    <button type="submit">Pay</button>
                </form>
            </div>
            <div class="section section3">

            </div>
        </div>
    </div>


@endsection
