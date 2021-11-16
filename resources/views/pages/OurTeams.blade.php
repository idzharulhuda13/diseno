@extends('layouts.new')

@section('title')
    About Diseno Academy
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
                <!-- <div class="subjumbotron">
          <div class="container">
            <div class="content">
              <div class="text">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam placeat maxime quaerat nostrum, consectetur repellendus deleniti aut doloremque ea esse!</p>
                <a href="#" class="btn4">Get Started!</a>
              </div>
            </div>
          </div>
            </div>
        
            <div class="wave">
            <img src="../IMG/wave.svg" alt="">
            </div>

            <div class="kosong">
            <span></span>
            <span></span>
            </div> -->
                <!-- Akhir Jumbotron -->

                <!-- Awal Our Teams -->
                <div class="judulteams">
                    <div class="container">
                        <h1>Our Teams</h1>
                    </div>
                </div>

                <div class="teams">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <img src="../IMG/g_athifah.jpg" class="pic" />

                                <div class="layer">
                                    <img src="../IMG/g_athifah.jpg" />
                                </div>

                                <div class="info">
                                    <h2>Athifah Radhiyah</h2>
                                    <p>President & CEO</p>
                                    <div class="icons">
                                        <i class="fab fa-instagram"></i>
                                        <i class="fab fa-twitter"></i>
                                        <i class="fab fa-line"></i>
                                        <i class="fab fa-linkedin"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <img src="../IMG/g_fya.jpg" class="pic" />

                                <div class="layer">
                                    <img src="../IMG/g_fya.jpg" />
                                </div>

                                <div class="info">
                                    <h2>Alifya Fitrieani</h2>
                                    <p>Managing Director & CCO</p>
                                    <div class="icons">
                                        <i class="fab fa-instagram"></i>
                                        <i class="fab fa-twitter"></i>
                                        <i class="fab fa-line"></i>
                                        <i class="fab fa-linkedin"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <img src="../IMG/g_ica.jpg" class="pic" />

                                <div class="layer">
                                    <img src="../IMG/g_ica.jpg" />
                                </div>

                                <div class="info">
                                    <h2>Narisa Aulia</h2>
                                    <p>Managing Director & CRO</p>
                                    <div class="icons">
                                        <i class="fab fa-instagram"></i>
                                        <i class="fab fa-twitter"></i>
                                        <i class="fab fa-line"></i>
                                        <i class="fab fa-linkedin"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="teams">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <img src="../IMG/g_cinta.jpg" class="pic" />

                                <div class="layer">
                                    <img src="../IMG/g_cinta.jpg" />
                                </div>

                                <div class="info">
                                    <h2>Cinta Callista</h2>
                                    <p>CTO</p>
                                    <div class="icons">
                                        <i class="fab fa-instagram"></i>
                                        <i class="fab fa-twitter"></i>
                                        <i class="fab fa-line"></i>
                                        <i class="fab fa-linkedin"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <img src="../IMG/g_sandra.jpg" class="pic" />

                                <div class="layer">
                                    <img src="../IMG/g_sandra.jpg" />
                                </div>

                                <div class="info">
                                    <h2>Sandra Fatimah</h2>
                                    <p>Head of Product</p>
                                    <div class="icons">
                                        <i class="fab fa-instagram"></i>
                                        <i class="fab fa-twitter"></i>
                                        <i class="fab fa-line"></i>
                                        <i class="fab fa-linkedin"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <img src="../IMG/g_brigit.jpg" class="pic" />

                                <div class="layer">
                                    <img src="../IMG/g_brigit.jpg" />
                                </div>

                                <div class="info">
                                    <h2>Brigita Eliza</h2>
                                    <p>Marketing Head</p>
                                    <div class="icons">
                                        <i class="fab fa-instagram"></i>
                                        <i class="fab fa-twitter"></i>
                                        <i class="fab fa-line"></i>
                                        <i class="fab fa-linkedin"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Akhir Our Teams -->
        </div>
    </main>
@endsection