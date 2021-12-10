@extends('layouts.account')
@section('title', 'Оферта')
@section('content')
    <div class="header-profile__offers">
        <div class="header-profile__offers-add">Политика конфиденциальности</div>
        <div class="header-profile__offers-title">1. Обрабатываемые данные</div>
        <div class="header-profile__offers-text">
            1.1. Мы не осуществляем сбор ваших персональных данных с использованием Сайта.
            <br><br>
            1.2. Все данные, собираемые на Сайте, предоставляются и принимаются в обезличенной форме (далее – «Обезличенные данные»).
            <br><br>
            1.3. Обезличенные данные включают следующие сведения, которые не позволяют вас идентифицировать:
            <br><br>
            1.3.1. Информацию, которую вы предоставляете о себе самостоятельно с использованием онлайн-форм и программных модулей Сайта, включая имя или номер телефона и/или адрес электронной почты.
        </div>
        <button class="header-profile__offers-btn" id="headerProfileOffersOpen">
            <a href="#">Читать далее</a>
        </button>
        <div class="header-profile__offers-texts display-n" id="headerProfileOffersAdd">
            <div class="header-profile__offers-title ">1. Обрабатываемые данные</div>
            <div class="header-profile__offers-text">
                1.1. Мы не осуществляем сбор ваших персональных данных с использованием Сайта.
                <br><br>
                1.2. Все данные, собираемые на Сайте, предоставляются и принимаются в обезличенной форме (далее – «Обезличенные данные»).
                <br><br>
                1.3. Обезличенные данные включают следующие сведения, которые не позволяют вас идентифицировать:
                <br><br>
                1.3.1. Информацию, которую вы предоставляете о себе самостоятельно с использованием онлайн-форм и программных модулей Сайта, включая имя или номер телефона и/или адрес электронной почты.
            </div>
            <div class="header-profile__offers-text">
                1.1. Мы не осуществляем сбор ваших персональных данных с использованием Сайта.
                <br><br>
                1.2. Все данные, собираемые на Сайте, предоставляются и принимаются в обезличенной форме (далее – «Обезличенные данные»).
                <br><br>
                1.3. Обезличенные данные включают следующие сведения, которые не позволяют вас идентифицировать:
                <br><br>
                1.3.1. Информацию, которую вы предоставляете о себе самостоятельно с использованием онлайн-форм и программных модулей Сайта, включая имя или номер телефона и/или адрес электронной почты.
            </div>
        </div>
        <button class="header-profile__offers-btn display-n" id="headerProfileOffersClose">
            <a href="#">Свернуть</a>
        </button>
    </div>

    <script>
        $('.header-profile__menu-list-offers').addClass('header-profile__menu-list-active')
    </script>
@endsection