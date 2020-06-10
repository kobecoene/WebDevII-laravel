<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 segment segment-one md-mb-30 sm-mb-30">
                    <h3>TITLE</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At molestias ratione possimus voluptate perspiciatis iusto sunt commodi modi provident voluptatibus, laboriosam illo dignissimos nam optio corrupti, exercitationem est omnis odit?s</p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 segment segment-two md-mb-30 sm-mb-30">
                    <h2>Usefull links</h2>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li><a href="{{ route('donations') }}">Dontations</a></li>
                        <li><a href="{{ route('privacy') }}">Privacy</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 segment segment-three md-mb-30">
                    <h2>Follow us</h2>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 segment segment-four md-mb-30">
                    <h2>Our newsletter</h2>
                    <form method="POST" action="{{ url('/newsletter') }}" >
                        <div class="newsletterInput">
                            @csrf
                            <input class="inputNewsletter" type="email" name="email" id="email" placeholder="E-mail" required>
                            <button type="submit" class="btnNewsletter"><i class="fas fa-angle-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
