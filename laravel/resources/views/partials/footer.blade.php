<footer>
    <div class="footer">
        <div class="text">
            &copy; Facebook2020
        </div>
        <div class="newsletter">

            @if (session('succes'))
                <div class="alert alert-succes" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('failure'))
                <div class="alert alert-danger" role="alert">
                    {{ session('failure') }}
                </div>
            @endif

            <p>Sign up for the newsletter:</p>
            <form method="POST" action="{{ url('/newsletter') }}" >
                <div class="newsletterInput">
                    @csrf
                    <input type="email" name="email" id="email" placeholder="E-mail" required>
                    <button type="submit" class="btnNewsletter"><i class="fas fa-angle-right"></i></button>
                </div>
            </form>
        </div>
    </div>
</footer>
