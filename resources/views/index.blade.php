<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <title>MV Tomorrow | E-Commerce</title>
</head>

<body class="body">

    <div class="header">
        <div class="container">
            <div class="nav">
                <div class="logo">
                    <img src="{{ asset('frontend/assets/img/logo.png') }}" alt="" class="logoImg">
                </div>

                <nav>
                    <ul id="menuItens">
                        <li><a href="{{ route('index') }}">Inicio</a></li>
                        <li><a href="">Produtos</a></li>
                        <li><a href="">Minha Conta</a></li>
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li>
                            <a href="" class="cart">
                                <i class="bi bi-bag-fill"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="hamburger" onclick="toggleMenu()">
                    <i class="bi bi-list"></i>
                </div>
            </div>
            <div class="row">
                <div class="cols">
                    <h1 class="title">
                        Bem-vindo ao MV Tomorrow.
                    </h1>
                    <p>
                        A sua loja de produtos eletrônicos de confiança. Navegue por nossa seleção de produtos e
                        encontre o que você precisa para o seu dia a dia.
                    </p>
                    <a href="" class="btn">
                        Ver Produtos
                    </a>
                </div>
                <div class="cols">
                    <img src="" alt="" class="cols-img">
                </div>
            </div>
        </div>
    </div>

    <div class="categories">
        <div class="small-containers">
            <div class="row">
                <div class="cols-container">
                    <img src="{{ asset('frontend/assets/img/categorias/categoria_1.jpg') }}" alt="">
                </div>
                <div class="cols-container">
                    <img src="{{ asset('frontend/assets/img/categorias/categoria_2.jpg') }}" alt="">
                </div>
                <div class="cols-container">
                    <img src="{{ asset('frontend/assets/img/categorias/categoria_3.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="small-containers">
        <h2 class="title">
            Produtos em Destaque
        </h2>

        <div class="row">
            <div class="cols-2">
                <a href="">
                    <img src="" alt="">
                </a>
                <a href="">
                    <h4 class="name-product"></h4>
                    <div class="rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <div class="price-container flex">
                        <span class="price">R$ </span>
                        <span class="old-price">R$ </span>
                    </div>
                </a>
            </div>

            <div class="cols-2">
                <a href="">
                    <img src="" alt="">
                </a>
                <a href="">
                    <h4 class="name-product"></h4>
                    <div class="rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <div class="price-container flex">
                        <span class="price">R$ </span>
                        <span class="old-price">R$ </span>
                    </div>
                </a>
            </div>

            <div class="cols-2">
                <a href="">
                    <img src="" alt="">
                </a>
                <a href="">
                    <h4 class="name-product"></h4>
                    <div class="rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <div class="price-container flex">
                        <span class="price">R$ </span>
                        <span class="old-price">R$ </span>
                    </div>
                </a>
            </div>

            <div class="cols-2">
                <a href="">
                    <img src="" alt="">
                </a>
                <a href="">
                    <h4 class="name-product"></h4>
                    <div class="rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <div class="price-container flex">
                        <span class="price">R$ </span>
                        <span class="old-price">R$ </span>
                    </div>
                </a>
            </div>

            <div class="cols-2">
                <a href="">
                    <img src="" alt="">
                </a>
                <a href="">
                    <h4 class="name-product"></h4>
                    <div class="rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <div class="price-container flex">
                        <span class="price">R$ </span>
                        <span class="old-price">R$ </span>
                    </div>
                </a>
            </div>

            <div class="cols-2">
                <a href="">
                    <img src="" alt="">
                </a>
                <a href="">
                    <h4 class="name-product"></h4>
                    <div class="rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <div class="price-container flex">
                        <span class="price">R$ </span>
                        <span class="old-price">R$ </span>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <script src="{{ asset('frontend/assets/js/script.js') }}"></script>
</body>

</html>
