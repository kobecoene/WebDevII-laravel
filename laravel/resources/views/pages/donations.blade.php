@extends('layout')


@section('content')
<div class="donationContainer">
    <div class="wrapper">
        @if (\Session::has('success'))
            <div class="succes">
                <div class="image">
                    <img src="https://lh3.googleusercontent.com/proxy/W-06pdv4DEapvA_vnX16alUU326VOz7rUciOnlwDKezN_GV8L50J-RdZh6Zz2gd96SRRHV10ra2LyJuQ3OyhDnJGVPGeiCGJjiDoM9MqRgma3VtB54Vjwpd6" alt="Succes">
                </div>
                <p>Thank you for donating!</p>
            </div><br/>
        @endif
        <div class="section section1">
            <h1>{{ $title }}</h1>
        </div>
        <div class="section section2">
            <form action="" method="POST">
                @csrf
                <input type="text" name="name" id="name" placeholder="Name" required>
                <input type="text" name="email" id="email" placeholder="Email" required>
                <input type="number" name="amount" id="amount" class="amount" placeholder="Amount" step=".01" required>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Message" required></textarea>
                <div class="checked">
                    <input type="checkbox" name="check" id="check">
                    <label for="check">I Want this to be public</label>
                </div>

                <button type="submit">Pay</button>
            </form>
        </div>
        <div class="section section3">
            <h1>List of recent donations</h1>
        </div>
        <div class="section section4">
            @foreach($donations as $donation)
                @if ($donation->name != "")
                    @if ( $donation->check == 'on' )
                        <div class="wrapper">
                            <table class="stack" style="width:80%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Amount</th>
                                        <th>Message</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>{{ $donation->name }}</td>
                                        <td>{{ $donation->email }}</td>
                                        <td>{{ $donation->amount }}</td>
                                        <td>{{ $donation->message }}</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    @endif
                @else
                    <p>No donations yet</p>
                @endif
            @endforeach
        </div>
    </div>
</div>


@endsection
