@extends('layouts.new')

@section('title')
    Diseno Academy
@endsection

@section('content')
    <main>
        <div class="big-wrapper light">
            <!-- Awal Navigation Bar -->
            <header>
                <div class="container">
                <div class="logo">
                    <a href="{{ route('home') }}"><img src="../IMG/Logo 1.png" alt="Logo"></a>
                </div>
                <div class="navbar">
                    <ul>
                    <li><a href="#services" class="link">Services</a></li>
                    <li><a href="#class" class="link">Class</a></li>
                    <li><a href="#promo" class="link">Promo</a></li>
                    <li><a href="#review" class="link">Review</a></li>
                    <li><a href="#mentor" class="link">Mentor</a></li>
                    </ul>
                </div>

                <div class="icons">
                    <div class="fas fa-shopping-cart" id="cart-btn"></div>
                    <div class="fas fa-user" id="login-btn"></div>
                </div>
                <div class="overlay"></div>
                <div class="hamburger-menu">
                    <div class="bar"></div>
                </div>
                </div>
                <div class="tombol">
                <button class="toggle-btn">
                </button>
                </div>
            </header>
            <!-- Akhir Navigation Bar -->

            <!-- Awal Jumbotron -->
            <div class="jumbotron">
                <div class="container">
                <div class="left">
                    <h1 data-aos="zoom-in-up">Scale Up Your Skill<br>With <span>Diseño Academy</span></h1>
                    <p data-aos="zoom-in-up" class="par">Belajar desain dari 0, bangun portofoliomu, serta raih sertifikasi <br>
                    tingkat internasional dengan bergabung bersama kami.
                    </p>
                    <label data-aos="zoom-in-up" class="btn" for="modal">Coba Gratis</label>
                    <input type="checkbox" class="switcher" id="modal">

                    <!-- Awal Popup -->
                    <div class="wrapper">
                    <label for="modal" class="btn-close">x</label>
                    <label for="modal" class="overlay2"></label>
                    <div class="kotak">
                        <div class="modal-bg"></div>
                        <h2 class="heading">Dapatkan Akses Gratis Untuk 1 Bulan Pertama!</h2>
                        <h3 class="heading">Kuota Terbatas!</h3>
                        <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        <br>Stay tuned for more discounts
                        </p>

                        <form class="email-field">
                        <div>
                            <input class="email-input" type="email" placeholder="Enter you email here">
                            <button class="btnn" type="submit">Send</button>
                        </div>
                        </form>
                    </div>
                    </div>
                    <!-- Akhir Popup -->

                </div>

                <div class="right">
                    <div class="account-page">
                    <div data-aos="zoom-in-up" class="form-box">

                        <div class="button-box">
                        <div id="btn2"></div>
                        <button type="button" onclick="login()" class="judul">Sign In</button>
                        <button type="button" onclick="register()" class="judul">Sign Up</button>
                        </div>

                        <form method="POST" action="{{ route('login') }}" id="login" class="input-group-login">
                            @csrf
                            <input type="email" name="email" class="input-field" placeholder="Email" required>
                            <input type="password" name="password" class="input-field" placeholder="Password" required>
                            {{-- <button type="submit" name="signin" class="submit-btn">Sign In</button> --}}
                            <x-jet-button class="submit-btn">
                                {{ __('Sign In') }}
                            </x-jet-button>
                            <!-- <p class="liw">Log in with</p> -->
                            <div class="icons">
                                <a href="#">
                                <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                                <a href="#">
                                <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                                <a href="#">
                                <ion-icon name="logo-twitter"></ion-icon>
                                </a>
                                <a href="#">
                                <ion-icon name="logo-google"></ion-icon>
                                </a>
                            </div>
                            <p>Not a member? <span onclick="register()">Sign up</span></p>
                        </form>

                        <form method="POST" action="{{ route('register') }}" id="register" class="input-group-register">
                            @csrf
                        <input type="text" name="name" class="input-field" placeholder="Full Name" required>
                        <input type="email" name="email" class="input-field" placeholder="Email" required>
                        <input type="password" name="password" class="input-field" placeholder="Enter Password" required>
                        <input type="password" name="password_confirmation" class="input-field" placeholder="Confirm Password" required>
                        <x-jet-button class="submit-btn">
                            {{ __('Sign Up') }}
                        </x-jet-button>

                        <div class="icons">
                            <a href="#">
                            <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                            <a href="#">
                            <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                            <a href="#">
                            <ion-icon name="logo-twitter"></ion-icon>
                            </a>
                            <a href="#">
                            <ion-icon name="logo-google"></ion-icon>
                            </a>
                        </div>

                        </form>

                    </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- Akhir Jumbotron -->

            <!-- Awal Counter-Up -->
            <div data-aos="slide-up" class="judulcounter-up">
                <div class="container">
                <h1>Our Achievements</h1>
                </div>
            </div>

            <div data-aos="slide-up" class="counter-up">
                <div class="container">
                <div class="middle">
                    <div class="counting-sec">
                    <div class="inner-width">

                        <div class="col">
                        <lord-icon src="https://cdn.lordicon.com/wxnxiano.json" trigger="loop" colors="primary:#7d4f50,secondary:#cc8b86" style="width:110px;height:110px">
                        </lord-icon>
                        <!-- <i class="fas fa-book-open"></i> -->
                        <div class="num">1221</div>
                        Modul
                        </div>

                        <div class="col">
                        <lord-icon src="https://cdn.lordicon.com/zpxybbhl.json" trigger="loop" colors="primary:#7d4f50,secondary:#cc8b86" style="width:110px;height:110px">
                        </lord-icon>
                        <div class="num">807</div>
                        Mentor
                        </div>

                        <div class="col">
                        <lord-icon src="https://cdn.lordicon.com/ssdupzsv.json" trigger="loop" colors="primary:#7d4f50,secondary:#cc8b86" style="width:110px;height:110px">
                        </lord-icon>
                        <div class="num">1907</div>
                        Students
                        </div>

                        <div class="col">
                        <lord-icon src="https://cdn.lordicon.com/cjieiyzp.json" trigger="loop" colors="primary:#7d4f50,secondary:#cc8b86" style="width:110px;height:110px">
                        </lord-icon>
                        <div class="num">123</div>
                        Partner
                        </div>

                    </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- Akhir Counter-up -->


            <!-- Awal Services -->
            <div data-aos="slide-up" class="judulservices" id="services">
                <div class="container">
                <h1>Our Services</h1>
                </div>
            </div>

            <div data-aos="zoom-in-up" class="boxes">
                <div class="container">
                <div class="box">
                    <div class="inner-box">
                    <span><i class="fas fa-photo-video"></i></span>
                    <h3>Ribuan Video</h3>
                    </div>
                    <p>
                    Kami menyediakan ribuan video pembelajaran di setiap jenis kelas yang kamu pilih.
                    </p>
                </div>

                <div class="box">
                    <div class="inner-box">
                    <span><i class="fas fa-chalkboard-teacher"></i></span>
                    <h3>Mentor Berkualitas</h3>
                    </div>
                    <p>
                    Pada setiap kelas kamu akan diajarkan oleh para mentor berkualitas.
                    </p>
                </div>

                <div class="box">
                    <div class="inner-box">
                    <span><i class="fas fa-user-clock"></i></span>
                    <h3>Fleksibel</h3>
                    </div>
                    <p>
                    Bersama kami, kamu bisa belajar di mana saja dan kapan saja dengan mudah.
                    </p>
                </div>

                <div class="box">
                    <div class="inner-box">
                    <span><i class="fas fa-award"></i></span>
                    <h3>Sertifikasi</h3>
                    </div>
                    <p>
                    Setelah menyelesaikan semua materi, kamu akan mendapatkan sertifikat tingkat internasional.
                    </p>
                </div>

                <div class="box">
                    <div class="inner-box">
                    <span><i class="fas fa-recycle"></i></span>
                    <h3>Free Update</h3>
                    </div>
                    <p>
                    Kami terus memperbarui materi secara berkala dan kamu tidak perlu membayar uang tambahan.
                    </p>
                </div>

                <div class="box">
                    <div class="inner-box">
                    <span><i class="fas fa-laptop-house"></i></span>
                    <h3>Sumber Bervariasi</h3>
                    </div>
                    <p>
                    Materi yang kami sajikan berasal dari berbagai sumber yang berkualitas.
                    </p>
                </div>
                </div>
            </div>

            <!-- Akhir Services -->

            <!-- Awal Product Card -->
            <div data-aos="slide-up" class="judulproduct" id="class">
                <div class="container">
                <h1>Our Class</h1>
                </div>
            </div>

            <div data-aos="zoom-in-up" class="product">
                <div class="container">

                <div class="card">
                    <div class="imgbx">
                    <img src="../IMG/adobe-photoshop.png" alt="">
                    </div>
                    <div class="contentbx">
                    <h2>Photoshop</h2>
                    <div class="level">
                        <h3>Level : </h3>
                        <span>1</span>
                        <span>2</span>
                        <span>3</span>
                    </div>
                    <div class="price">
                        <h3>Rp150.000 </h3>
                    </div>
                    <!-- <button class="btn btn-danger my-cart-btn" data-id="1" data-name="product 1" data-summary="summary 1" data-price="10" data-quantity="1" data-image="../IMG/adobe-illustrator.png">Buy Now</button> -->
                    <a href="#">Buy Now</a>
                    </div>
                </div>

                <div class="card">
                    <div class="imgbx">
                    <img src="../IMG/adobe-illustrator.png" alt="">
                    </div>
                    <div class="contentbx">
                    <h2>Illustrator</h2>
                    <div class="level">
                        <h3>Level : </h3>
                        <span>1</span>
                        <span>2</span>
                        <span>3</span>
                    </div>
                    <div class="price">
                        <h3>Rp150.000</h3>
                    </div>
                    <a href="#">Buy Now</a>
                    </div>
                </div>

                <div class="card">
                    <div class="imgbx">
                    <img src="../IMG/premiere.png" alt="">
                    </div>
                    <div class="contentbx">
                    <h2>Premiere</h2>
                    <div class="level">
                        <h3>Level : </h3>
                        <span>1</span>
                        <span>2</span>
                        <span>3</span>
                    </div>
                    <div class="price">
                        <h3>Rp150.000</h3>
                    </div>
                    <a href="#">Buy Now</a>
                    </div>
                </div>

                <div class="card">
                    <div class="imgbx">
                    <img src="../IMG/adobe-lightroom.png" alt="">
                    </div>
                    <div class="contentbx">
                    <h2>Lightroom</h2>
                    <div class="level">
                        <h3>Level : </h3>
                        <span>1</span>
                        <span>2</span>
                        <span>3</span>
                    </div>
                    <div class="price">
                        <h3>Rp150.000</h3>
                    </div>
                    <a href="#">Buy Now</a>
                    </div>
                </div>

                <div class="card">
                    <div class="imgbx">
                    <img src="../IMG/after-effects.png" alt="">
                    </div>
                    <div class="contentbx">
                    <h2>After Effects</h2>
                    <div class="level">
                        <h3>Level : </h3>
                        <span>1</span>
                        <span>2</span>
                        <span>3</span>
                    </div>
                    <div class="price">
                        <h3>Rp150.000</h3>
                    </div>
                    <a href="#">Buy Now</a>
                    </div>
                </div>

                <div class="card">
                    <div class="imgbx">
                    <img src="../IMG/indesign.png" alt="">
                    </div>
                    <div class="contentbx">
                    <h2>InDesign</h2>
                    <div class="level">
                        <h3>Level : </h3>
                        <span>1</span>
                        <span>2</span>
                        <span>3</span>
                    </div>
                    <div class="price">
                        <h3>Rp150.000</h3>
                    </div>
                    <a href="#">Buy Now</a>
                    </div>
                </div>

                </div>
            </div>
            <!-- Akhir Product Card -->

            <!-- Awal Promo -->
            <div data-aos="slide-up" class="judulpromo" id="promo">
                <div class="container">
                <h1>Our Promo</h1>
                </div>
            </div>

            <div data-aos="zoom-in-up" class="promo">
                <div class="container">

                <section class="card">
                    <div class="card-inner">
                    <div class="card-inner-circle">
                        <span><i class="fas fa-dollar-sign"></i></span>
                    </div>
                    <div class="card-inner-content">
                        <div class="title">Bundle Edition</div>
                        <div class="price">Rp300.000</div>
                        <div class="text">
                        <div class="text1">
                            <span><i class="far fa-check-square"></i></span>
                            <p>Bebas memilih 3 Kelas</p>
                        </div>
                        <div class="text1">
                            <span><i class="far fa-check-square"></i></span>
                            <p>Akses Selamanya</p>
                        </div>
                        <div class="text1">
                            <span><i class="far fa-check-square"></i></span>
                            <p>Bebas konsul via chat ke mentor</p>
                        </div>
                        <div class="text1">
                            <span><i class="far fa-check-square"></i></span>
                            <p>Akses ke premium group</p>
                        </div>
                        <div class="text1">
                            <span><i class="far fa-check-square"></i></span>
                            <p>Video offline</p>
                        </div>
                        </div>
                        <div class="code">Kode Promo : BUNDLE </div>
                        <div class="card-inner-btn">
                        <button>
                            <span>Buy Now</span>
                        </button>
                        </div>
                    </div>
                    </div>
                </section>

                <section class="card">
                    <div class="card-inner">
                    <div class="card-inner-circle">
                        <span><i class="fas fa-dollar-sign"></i></span>
                    </div>
                    <div class="card-inner-content">
                        <div class="title">Best Seller Edition</div>
                        <div class="price">Rp250.000</div>
                        <div class="text">
                        <div class="text1">
                            <span><i class="far fa-check-square"></i></span>
                            <p>Photoshop & Illustrator</p>
                        </div>
                        <div class="text1">
                            <span><i class="far fa-check-square"></i></span>
                            <p>Akses Selamanya</p>
                        </div>
                        <div class="text1">
                            <span><i class="far fa-check-square"></i></span>
                            <p>Bebas konsul via chat ke mentor</p>
                        </div>
                        <div class="text1">
                            <span><i class="far fa-check-square"></i></span>
                            <p>Akses ke premium group</p>
                        </div>
                        <div class="text1">
                            <span><i class="far fa-check-square"></i></span>
                            <p>Video offline</p>
                        </div>
                        </div>
                        <div class="code">Kode Promo : BEST </div>
                        <div class="card-inner-btn">
                        <button>
                            <span>Buy Now</span>
                        </button>
                        </div>
                    </div>
                    </div>
                </section>

                <section class="card">
                    <div class="card-inner">
                    <div class="card-inner-circle">
                        <span><i class="fas fa-dollar-sign"></i></span>
                    </div>
                    <div class="card-inner-content">
                        <div class="title">Personal Edition</div>
                        <div class="price">Rp75.000</div>
                        <div class="text">
                        <div class="text1">
                            <span><i class="far fa-check-square"></i></span>
                            <p>Discount 50%(maks. 1 kelas)</p>
                        </div>
                        <div class="text1">
                            <span><i class="far fa-check-square"></i></span>
                            <p>Akses Selamanya</p>
                        </div>
                        <div class="text1">
                            <span><i class="far fa-check-square"></i></span>
                            <p>Bebas konsul via chat ke mentor</p>
                        </div>
                        <div class="text1">
                            <span><i class="far fa-check-square"></i></span>
                            <p>Akses ke premium group</p>
                        </div>
                        <div class="text1">
                            <span><i class="far fa-check-square"></i></span>
                            <p>Video offline</p>
                        </div>
                        </div>
                        <div class="code">Kode Promo : PERSONAL </div>
                        <div class="card-inner-btn">
                        <button>
                            <span>Buy Now</span>
                        </button>
                        </div>
                    </div>
                    </div>
                </section>

                </div>
            </div>

            <!-- Akhir Promo -->

            <!-- Awal Review -->
            <div data-aos="slide-up" class="judulreview" id="review">
                <div class="container">
                <h1>Our Reviews</h1>
                </div>
            </div>

            <div data-aos="zoom-in-up" class="review">
                <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                        <div class="review-item">
                            <img src="../IMG/Darren.jpg" alt="">
                            <div class="quote-icon">
                            <i class="fa fa-quote-right"></i>
                            </div>
                            <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae accusamus dicta odio molestias quaerat. Expedita impedit quam tempora debitis reprehenderit!
                            </p>
                            <h4>Matthew Darren</h4>
                            <span class="position">Universitas Diponegoro</span>
                            <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                        </div>
                        <div class="item">
                        <div class="review-item">
                            <img src="../IMG/Haritsa Malfanda.jpg" alt="">
                            <div class="quote-icon">
                            <i class="fa fa-quote-right"></i>
                            </div>
                            <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae accusamus dicta odio molestias quaerat. Expedita impedit quam tempora debitis reprehenderit!
                            </p>
                            <h4>Haritsa Malfanda</h4>
                            <span class="position">Universitas Brawijaya</span>
                            <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fas fa-star-half-alt"></i></li>
                            </ul>
                        </div>
                        </div>

                        <div class="item">
                        <div class="review-item">
                            <img src="../IMG/Shafa Aulia.jpeg" alt="">
                            <div class="quote-icon">
                            <i class="fa fa-quote-right"></i>
                            </div>
                            <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae accusamus dicta odio molestias quaerat. Expedita impedit quam tempora debitis reprehenderit!
                            </p>
                            <h4>Shafa Aulia</h4>
                            <span class="position">Universitas Indonesia</span>
                            <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                        </div>

                        <div class="item">
                        <div class="review-item">
                            <img src="../IMG/Putri.jpeg" alt="">
                            <div class="quote-icon">
                            <i class="fa fa-quote-right"></i>
                            </div>
                            <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae accusamus dicta odio molestias quaerat. Expedita impedit quam tempora debitis reprehenderit!
                            </p>
                            <h4>Putri Nur Alifah</h4>
                            <span class="position">Universitas Diponegoro</span>
                            <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fas fa-star-half-alt"></i></li>
                            </ul>
                        </div>
                        </div>
                        <div class="item">
                        <div class="review-item">
                            <img src="../IMG/Yoga.JPG" alt="">
                            <div class="quote-icon">
                            <i class="fa fa-quote-right"></i>
                            </div>
                            <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae accusamus dicta odio molestias quaerat. Expedita impedit quam tempora debitis reprehenderit!
                            </p>
                            <h4>Ananda Yoga</h4>
                            <span class="position">Universitas Diponegoro</span>
                            <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                        </div>
                        <div class="item">
                        <div class="review-item">
                            <img src="../IMG/Rafi.jpeg" alt="">
                            <div class="quote-icon">
                            <i class="fa fa-quote-right"></i>
                            </div>
                            <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae accusamus dicta odio molestias quaerat. Expedita impedit quam tempora debitis reprehenderit!
                            </p>
                            <h4>Rafi Athallah</h4>
                            <span class="position">Universitas Diponegoro</span>
                            <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fas fa-star-half-alt"></i></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                </div>
            </div>
            <!-- Akhir Review -->

            <!-- Awal Our Mentor -->
            <div data-aos="slide-up" class="judulmentor" id="mentor">
                <div class="container">
                <h1>Our <span>Mentor</span></h1>
                </div>
            </div>

            <div data-aos="zoom-in-up" class="mentor">
                <div class="container">

                <section>
                    <div class="team" style="--img: url(../IMG/cinda2.jpg)">
                    <img src="../IMG/cinda2.jpg" alt="">
                    <div class="info">
                        <div class="name">Ayodya Cinda</div>
                        <div class="title">Universitas Diponegoro</div>
                        <div class="social">
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-line"></i>
                        <i class="fab fa-linkedin"></i>
                        </div>
                    </div>
                    </div>

                    <div class="team" style="--img: url(../IMG/farhan2.jpg)">
                    <img src="../IMG/farhan2.jpg" alt="">
                    <div class="info">
                        <div class="name">Farhan Maulana</div>
                        <div class="title">Universitas Diponegoro</div>
                        <div class="social">
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-line"></i>
                        <i class="fab fa-linkedin"></i>
                        </div>
                    </div>
                    </div>

                    <div class="team" style="--img: url(../IMG/nada2.jpg)">
                    <img src="../IMG/nada2.jpg" alt="">
                    <div class="info">
                        <div class="name">Nada Wahyudia</div>
                        <div class="title">Universitas Indonesia</div>
                        <div class="social">
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-line"></i>
                        <i class="fab fa-linkedin"></i>
                        </div>
                    </div>
                    </div>

                    <div class="team" style="--img: url(../IMG/Kak Zulfa.jpeg)">
                    <img src="../IMG/Kak Zulfa.jpeg" alt="">
                    <div class="info">
                        <div class="name">Zulfa Ayunda</div>
                        <div class="title">Universitas Diponegoro</div>
                        <div class="social">
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-line"></i>
                        <i class="fab fa-linkedin"></i>
                        </div>
                    </div>
                    </div>
                </section>

                </div>
            </div>

            <!-- Akhir Our Mentor -->

            <!-- Awal Partner -->
            <div class="judulpartner">
                <div class="container">
                <h1>Our Partners</h1>
                </div>
            </div>

            <div class="partner">
                <div class="container">
                <div class="item"><a href="#"><img src="../IMG/Logo Youtube.png" alt=""></a></div>
                <div class="item"><a href="#"><img src="../IMG/Logo Mandiri 2.png" alt=""></a></div>
                <div class="item"><a href="#"><img src="../IMG/Logo google2.png" alt=""></a></div>
                <div class="item"><a href="#"><img src="../IMG/Logo BCA.png" alt=""></a></div>
                <div class="item"><a href="#"><img src="../IMG/Logo Adobe.png" alt=""></a></div>
                <div class="item"><a href="#"><img src="../IMG/Logo Twitter.png" alt=""></a></div>
                <div class="item"><a href="#"><img src="../IMG/Logo Instagram.png" alt=""></a></div>
                </div>
            </div>
            <!-- Akhir Partner -->
            <!-- <div class="test">
                <div class="container">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque excepturi magnam quisquam consequatur sequi adipisci neque. Officia natus voluptatibus dolorem repudiandae aspernatur sapiente quam possimus beatae placeat quibusdam ad ducimus distinctio molestias esse tempora magnam, dicta atque laudantium velit odit eos. Quaerat, neque? Rem ratione expedita non molestias aperiam. Minus?</p>
                </div>
                </div> -->

        </div>
    </main>
@endsection