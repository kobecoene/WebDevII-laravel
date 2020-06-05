@extends('layout')

@section('content')
    <div class="contactContainer">
        <div class="contactWrapper box">
            <h1>{{ $title }}</h1>
            <form action="" method="post">
                @csrf
                <input type="text" name="name" id="name" placeholder="Name" required>
                <input type="email" name="email" id="email" placeholder="E-mail" required>
                <input type="text" name="subject" id="subject" placeholder="Subject" required>
                <textarea name="content" id="content" cols="30" rows="10" placeholder="Bericht" required> </textarea>
                <button type="submit">Verzend</button>
            </form>
        </div>
    </div>

@endsection

