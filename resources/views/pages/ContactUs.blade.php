@extends('layouts.new')

@section('title')
    Contact Us | Diseno Academy
@endsection

@section('content')
    <main>
            <div class="big-wrapper light">
                <!-- Awal Navigation Bar -->
                <header>
                    <div class="container">
                        <div class="logo">
                            <a href="{{ route('home') }}"
                                ><img src="../IMG/Logo 1.png" alt="Logo"
                            /></a>
                        </div>
                        <div class="navbar">
                            <ul>
                                <li><a href="#" class="link">Services</a></li>
                                <li><a href="#" class="link">Kelas</a></li>
                                <li><a href="#" class="link">Promo</a></li>
                                <li><a href="#" class="link">Mentor</a></li>
                                <li><a href="#" class="link">Review</a></li>
                            </ul>
                        </div>

                        <div class="icons">
                            <div
                                class="fas fa-shopping-cart"
                                id="cart-btn"
                            ></div>
                            <div class="fas fa-user" id="login-btn"></div>
                        </div>
                        <div class="overlay"></div>
                        <div class="hamburger-menu">
                            <div class="bar"></div>
                        </div>
                    </div>
                    <div class="tombol">
                        <button class="toggle-btn"></button>
                    </div>
                </header>
                <!-- Akhir Navigation Bar -->

                <!-- Awal Jumbotron -->
                <div class="jumbotron">
                    <div class="container">
                        <div class="left">
                            <h1>
                                Tingkatkan &<br />Wujudkan Karyamu<br />Bersama
                                <span>Diseño Academy</span>
                            </h1>
                            <p class="par">
                                Belajar desain dari para mentor berkualitas,
                                bangun portofolio, dan <br />
                                raih sertifikat serta gelar online dari
                                universitas dan perusahaan
                                <br />
                                kelas dunia dengan bergabung bersama kami.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Akhir Jumbotron -->

                <!-- Awal Contact Us -->
                <div class="judulcontact">
                    <div class="container">
                        <h1>Contact Us</h1>
                    </div>
                </div>

                <div class="contact">
                    <div class="container">
                        <div class="form">
                            <div class="contact-info">
                                <h3 class="title">Find Us!</h3>
                                <iframe
                                    class="googlemap"
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15862.560969058879!2d106.9293664!3d-6.3109032!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf022fb6e3263919a!2sPt%20Metrikateknindo!5e0!3m2!1sid!2sid!4v1635522059076!5m2!1sid!2sid"
                                    width="600"
                                    height="450"
                                    style="border: 0"
                                    allowfullscreen=""
                                    loading="lazy"
                                ></iframe>
                            </div>

                            <div class="contact-form">
                                <span class="circle one"></span>
                                <span class="circle two"></span>
                                <form action="contact.php" method="post">
                                    <h3 class="title">Contact Us</h3>
                                    <div class="input-container">
                                        <input
                                            type="text"
                                            name="name"
                                            class="input"
                                        />
                                        <label for="">Username</label>
                                        <span>Username</span>
                                    </div>
                                    <div class="input-container">
                                        <input
                                            type="email"
                                            name="email"
                                            class="input"
                                        />
                                        <label for="">Email</label>
                                        <span>Email</span>
                                    </div>
                                    <div class="input-container">
                                        <input
                                            type="tel"
                                            name="phone"
                                            class="input"
                                        />
                                        <label for="">Phone</label>
                                        <span>Phone</span>
                                    </div>
                                    <div class="input-container textarea">
                                        <textarea
                                            name="message"
                                            class="input"
                                        ></textarea>
                                        <label for="">Message</label>
                                        <span>Message</span>
                                    </div>
                                    <!-- <input type="submit" name="submit" value="Send" class="btn3"> -->
                                    <input
                                        type="submit"
                                        name="submit"
                                        value="Send"
                                        class="btn3"
                                    />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Akhir Contact Us -->
            </div>
    </main>
@endsection

@push('addon-style')
    <link rel="stylesheet" href="../CSS/style3.css" />
@endpush

@push('addon-script')
    <script src="../JS/script3.js"></script>
@endpush