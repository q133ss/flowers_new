@extends('layouts.account')
@section('title', 'Благодарность')
@section('content')
    <div class="header-profile__donat">
        <div class="header-profile__donat-title">
            Мы рады, что в мире наполненном множеством
            вариантов и возможностей, вы выбрали нас.
        </div>
        <div class="header-profile__donat-circle">
            <div class="header-profile__donat-circle-item">Мемоджи</div>
        </div>
        <div class="header-profile__donat-info">
            <div class="header-profile__donat-info-price">
                <input type="text" placeholder="Сумма блогодарности" id="profileDonatePrice">
                <label for="profileDonatePrice">Введите сумму благодарности</label>
            </div>
            <div class="header-profile__donat-info-id">
                <input type="text" class="" placeholder="№ заказа" id="profileDonateID">
                <label for="profileDonateID">Введите № заказа</label>
            </div>
            <button class="header-profile__donat-info-btn"><a href="#">Оплатить</a></button>
        </div>
    </div>

    <script>
        $('.header-profile__menu-list-donat').addClass('header-profile__menu-list-active')
    </script>
@endsection
