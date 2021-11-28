@extends('layouts.new')

@section('title')
    CART | Diseno Academy
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

                <!-- Awal FAQ -->
                <div class="judulfaq">
                    <div class="container">
                        <h1>CART</h1>
                    </div>
                </div>

                <div class="table">
                    <div class="container">
                        <table>
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product</th>
                                <th>Level</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            
                                <p style="font-size: 0">{{!! $i = 1; !!}}</p>
                            @foreach ($cart as $cart)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $cart->product }}</td>
                                    <td>{{ $cart->level }}</td>
                                    <td class="amount" >Rp{{ $cart->price }}</td>
                                    <td>
                                        <a href="{{ route('cart-destroy', $cart->id) }}" class="fas fa-trash"></a>
                                    </td>
                                </tr>
                                <p style="font-size: 0">{{!! $i++ !!}}</p>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Akhir Cart -->
            </div>
    </main>
@endsection

@push('addon-script')
<script src="../JS/script2.js"></script>
@endpush

@push('addon-style')
    <link rel="stylesheet" href="../CSS/style2.css" />
@endpush