@extends('layouts.new')

@section('title')
    About | Diseno Academy
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

            <!-- Awal Timeline -->
            <div data-aos="slide-up" class="judultimeline" id="class">
                <div class="container">
                    <h1>Our Timeline</h1>
                </div>
            </div>

            <div class="timeline">
                <div class="container">
                    <div id="wrap" class="home">
                        <div id="content">
                            <section class="process">
                                <div class="container">
                                    <div class="start">
                                        <ul class="row">
                                            <li>
                                                <div
                                                    class="
                                                        line1
                                                        animate
                                                        fadeInDown
                                                    "
                                                    data-wow-delay="0.4s"
                                                >
                                                    <img
                                                        src="../IMG/process-line-1-.png"
                                                        alt=""
                                                    />
                                                </div>
                                                <div class="left">
                                                    <br />
                                                    <div
                                                        class="
                                                            icon
                                                            animate
                                                            fadeInLeft
                                                        "
                                                        data-wow-delay="0.8s"
                                                    >
                                                        <img
                                                            src="../IMG/ide.png"
                                                            alt=""
                                                            id="foto1_tl"
                                                        />
                                                    </div>
                                                </div>
                                                <div
                                                    class="
                                                        media-body
                                                        animate
                                                        fadeInLeft
                                                    "
                                                    data-wow-delay="0.8s"
                                                >
                                                    <h4>
                                                        Business Idea - 2017
                                                    </h4>
                                                    <!-- <h5>2017</h5> -->
                                                    <p>
                                                        Lorem ipsum dolor
                                                        sit amet consectetur
                                                        adipisicing elit.
                                                        Neque, nam veniam
                                                        saepe amet quis
                                                        rerum qui
                                                        perspiciatis
                                                        nesciunt incidunt
                                                        repudiandae, cumque
                                                        repellendus libero
                                                        iusto ab soluta
                                                        nihil doloribus,
                                                        excepturi nobis
                                                        dolorum voluptatum!
                                                        Ullam debitis,
                                                        doloremque ad
                                                        laborum unde,
                                                        facilis quam
                                                        assumenda, sunt
                                                        quidem quisquam
                                                        eveniet aliquid quas
                                                        placeat delectus
                                                        consectetur.
                                                    </p>
                                                </div>
                                                <div
                                                    class="
                                                        line2
                                                        animate
                                                        fadeInDown
                                                    "
                                                    data-wow-delay="0.2s"
                                                >
                                                    <img
                                                        src="../IMG/process-line-2-.png"
                                                        alt=""
                                                    />
                                                </div>
                                            </li>

                                            <li>
                                                <div class="left">
                                                    <div
                                                        class="
                                                            icon
                                                            animate
                                                            fadeInRight
                                                        "
                                                        data-wow-delay="0.4s"
                                                    >
                                                        <img
                                                            class="two"
                                                            src="../IMG/timeline2.png"
                                                            alt=""
                                                        />
                                                    </div>
                                                </div>
                                                <div
                                                    class="
                                                        media-body
                                                        animate
                                                        fadeInRight
                                                    "
                                                    data-wow-delay="0.8s"
                                                >
                                                    <h4>
                                                        Released Website -
                                                        2018
                                                    </h4>
                                                    <p>
                                                        Lorem ipsum dolor
                                                        sit amet consectetur
                                                        adipisicing elit.
                                                        Neque, nam veniam
                                                        saepe amet quis
                                                        rerum qui
                                                        perspiciatis
                                                        nesciunt incidunt
                                                        repudiandae, cumque
                                                        repellendus libero
                                                        iusto ab soluta
                                                        nihil doloribus,
                                                        excepturi nobis
                                                        dolorum voluptatum!
                                                        Ullam debitis,
                                                        doloremque ad
                                                        laborum unde,
                                                        facilis quam
                                                        assumenda, sunt
                                                        quidem quisquam
                                                        eveniet aliquid quas
                                                        placeat delectus
                                                        consectetur.
                                                    </p>
                                                </div>
                                                <div
                                                    class="
                                                        line3
                                                        animate
                                                        fadeInDown
                                                    "
                                                    data-wow-delay="0.2s"
                                                >
                                                    <img
                                                        src="../IMG/process-line-1-.png"
                                                        alt=""
                                                    />
                                                </div>
                                            </li>

                                            <li>
                                                <div class="left">
                                                    <div
                                                        class="
                                                            icon
                                                            animate
                                                            fadeInLeft
                                                        "
                                                        data-wow-delay="0.4s"
                                                    >
                                                        <img
                                                            class="three"
                                                            src="../IMG/timeline3.png"
                                                            alt=""
                                                        />
                                                    </div>
                                                </div>
                                                <div
                                                    class="
                                                        media-body
                                                        animate
                                                        fadeInLeft
                                                    "
                                                    data-wow-delay="0.8s"
                                                >
                                                    <h4>
                                                        Trending Course -
                                                        2019
                                                    </h4>
                                                    <p>
                                                        Lorem ipsum dolor
                                                        sit amet consectetur
                                                        adipisicing elit.
                                                        Neque, nam veniam
                                                        saepe amet quis
                                                        rerum qui
                                                        perspiciatis
                                                        nesciunt incidunt
                                                        repudiandae, cumque
                                                        repellendus libero
                                                        iusto ab soluta
                                                        nihil doloribus,
                                                        excepturi nobis
                                                        dolorum voluptatum!
                                                        Ullam debitis,
                                                        doloremque ad
                                                        laborum unde,
                                                        facilis quam
                                                        assumenda, sunt
                                                        quidem quisquam
                                                        eveniet aliquid quas
                                                        placeat delectus
                                                        consectetur.
                                                    </p>
                                                </div>
                                                <div
                                                    class="
                                                        line2
                                                        animate
                                                        fadeInDown
                                                    "
                                                    data-wow-delay="0.2s"
                                                >
                                                    <img
                                                        src="../IMG/process-line-2-.png"
                                                        alt=""
                                                    />
                                                </div>
                                            </li>

                                            <li>
                                                <div class="left">
                                                    <div
                                                        class="
                                                            icon
                                                            animate
                                                            fadeInRight
                                                        "
                                                        data-wow-delay="0.4s"
                                                    >
                                                        <img
                                                            class="four"
                                                            src="../IMG/timeline4.png"
                                                            alt=""
                                                        />
                                                    </div>
                                                </div>
                                                <div
                                                    class="
                                                        media-body
                                                        animate
                                                        fadeInRight
                                                    "
                                                    data-wow-delay="0.8s"
                                                >
                                                    <h4>
                                                        1M Customers! - 2020
                                                    </h4>
                                                    <p>
                                                        Lorem ipsum dolor
                                                        sit amet consectetur
                                                        adipisicing elit.
                                                        Neque, nam veniam
                                                        saepe amet quis
                                                        rerum qui
                                                        perspiciatis
                                                        nesciunt incidunt
                                                        repudiandae, cumque
                                                        repellendus libero
                                                        iusto ab soluta
                                                        nihil doloribus,
                                                        excepturi nobis
                                                        dolorum voluptatum!
                                                        Ullam debitis,
                                                        doloremque ad
                                                        laborum unde,
                                                        facilis quam
                                                        assumenda, sunt
                                                        quidem quisquam
                                                        eveniet aliquid quas
                                                        placeat delectus
                                                        consectetur.
                                                    </p>
                                                </div>
                                                <div
                                                    class="
                                                        line3
                                                        animate
                                                        fadeInDown
                                                    "
                                                    data-wow-delay="0.2s"
                                                >
                                                    <img
                                                        src="../IMG/process-line-1-.png"
                                                        alt=""
                                                    />
                                                </div>
                                            </li>

                                            <li>
                                                <div class="left">
                                                    <div
                                                        class="
                                                            icon
                                                            animate
                                                            fadeInLeft
                                                        "
                                                        data-wow-delay="0.4s"
                                                    >
                                                        <img
                                                            class="five"
                                                            src="../IMG/timeline5.png"
                                                            alt=""
                                                        />
                                                    </div>
                                                </div>
                                                <div
                                                    class="
                                                        media-body
                                                        animate
                                                        fadeInLeft
                                                    "
                                                    data-wow-delay="0.8s"
                                                >
                                                    <h4>
                                                        Go International -
                                                        2021
                                                    </h4>
                                                    <p>
                                                        Lorem ipsum dolor
                                                        sit amet consectetur
                                                        adipisicing elit.
                                                        Neque, nam veniam
                                                        saepe amet quis
                                                        rerum qui
                                                        perspiciatis
                                                        nesciunt incidunt
                                                        repudiandae, cumque
                                                        repellendus libero
                                                        iusto ab soluta
                                                        nihil doloribus,
                                                        excepturi nobis
                                                        dolorum voluptatum!
                                                        Ullam debitis,
                                                        doloremque ad
                                                        laborum unde,
                                                        facilis quam
                                                        assumenda, sunt
                                                        quidem quisquam
                                                        eveniet aliquid quas
                                                        placeat delectus
                                                        consectetur.
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Akhir Timeline -->

            <!-- Awal Counter-Up -->
            <div class="judulcounter-up">
                <div class="container">
                    <h1>Our Achievements</h1>
                </div>
            </div>

            <div class="counter-up">
                <div class="container">
                    <div class="middle">
                        <div class="counting-sec">
                            <div class="inner-width">
                                <div class="col">
                                    <lord-icon
                                        src="https://cdn.lordicon.com/wxnxiano.json"
                                        trigger="loop"
                                        colors="primary:#7d4f50,secondary:#cc8b86"
                                        style="width: 110px; height: 110px"
                                    >
                                    </lord-icon>
                                    <!-- <i class="fas fa-book-open"></i> -->
                                    <div class="num">1221</div>
                                    Modul
                                </div>

                                <div class="col">
                                    <lord-icon
                                        src="https://cdn.lordicon.com/zpxybbhl.json"
                                        trigger="loop"
                                        colors="primary:#7d4f50,secondary:#cc8b86"
                                        style="width: 110px; height: 110px"
                                    >
                                    </lord-icon>
                                    <div class="num">807</div>
                                    Mentor
                                </div>

                                <div class="col">
                                    <lord-icon
                                        src="https://cdn.lordicon.com/ssdupzsv.json"
                                        trigger="loop"
                                        colors="primary:#7d4f50,secondary:#cc8b86"
                                        style="width: 110px; height: 110px"
                                    >
                                    </lord-icon>
                                    <div class="num">1907</div>
                                    Students
                                </div>

                                <div class="col">
                                    <lord-icon
                                        src="https://cdn.lordicon.com/cjieiyzp.json"
                                        trigger="loop"
                                        colors="primary:#7d4f50,secondary:#cc8b86"
                                        style="width: 110px; height: 110px"
                                    >
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

            <!-- Awal Timeline -->
            <!-- Akhir Timeline -->

        </div>
    </main>
@endsection