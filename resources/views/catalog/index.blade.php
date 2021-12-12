@extends('layouts.main')
@section('title', 'Каталог')
@section('content')
<section class="cat-info">
    <div class="containers">
        <div class="cat-info__block">
            <div class="cat-info__block-slider">
                <div class="swiper sliderCatalogInfo">
                    <div class="swiper-wrapper">
                        @foreach($banners as $banner) 
                        <div class="swiper-slide">
                            <a href="{{ $banner['link'] }}" title="">
                                <img src="{{ $banner['img'] }}" alt="">
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="swiper-control">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="cat-info__block-menu">
                <ul class="cat-info__block-menu-list">
                    <li class="cat-info__block-menu-item">
                        <a href="{{ route('constructor') }}" title="">
                            <h2 class="cat-info__block-menu-title">
                                Конструктор букетов
                            </h2>
                        </a>
                    </li>
                    <li class="cat-info__block-menu-item">
                        <a href="{{ route('quiz.index') }}" title="">
                            <h2 class="cat-info__block-menu-title">
                                Букет на вкус флориста
                            </h2>
                        </a>
                    </li>
                    <li class="cat-info__block-menu-item">
                        <a href="{{ route('urgently') }}" title="">
                            <h2 class="cat-info__block-menu-title">
                                Срочный заказ
                            </h2>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="cat-add">
    <div class="containers">
        <div class="cat-add__block">
            <div class="cat-add__block-container">
                <div class="cat-add__block-title">Добавить к букету</div>
                <div class="cat-collections__block-select">
                    <div class="cat-collections">
                        <div class="cat-collections__block-styled">Смотреть все</div>
                    </div>
                </div>
            </div>
            <div class="cat-add__block-slider">
                <div class="swiper sliderCatalogAdd">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <p>Кондитерская</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Мягкие игрушки</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Воздушные шары</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Кондитерская</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Мягкие игрушки</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Воздушные шары</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-control">
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cat-collections">
    <div class="containers">
        <div class="cat-collections__block">
            <div class="cat-collections__block-title">Подборки</div>
            <div class="cat-collections__block-container">
                <div class="cat-collections__block-add">Монобукеты</div>
                <div class="cat-collections__block-select">
                    <div class="cat-collections">
                        <div class="cat-collections__block-styled-1">Смотреть все</div>
                    </div>
                </div>
            </div>
            <div class="cat-collections__block-slider-1">
                <div class="swiper sliderCatalogCollections-1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <p>Белый</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Розовый</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Белый</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Белый</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Розовый</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Белый</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Белый</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Розовый</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Белый</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-control-1">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <ul class="cat-collections__block-list-1">
                <li class="cat-collections__block-list-1-item">
                    <div class="cat-collections__block-text">
                        <p>Лилии</p>
                    </div>
                </li>
                <li class="cat-collections__block-list-1-item">
                    <div class="cat-collections__block-text">
                        <p>Кустовые розы</p>
                    </div>
                </li>
                <li class="cat-collections__block-list-1-item">
                    <div class="cat-collections__block-text">
                        <p>Лилии</p>
                    </div>
                </li>
                <li class="cat-collections__block-list-1-item">
                    <div class="cat-collections__block-text">
                        <p>Кустовые розы</p>
                    </div>
                </li>
                <li class="cat-collections__block-list-1-item">
                    <div class="cat-collections__block-text">
                        <p>Лилии</p>
                    </div>
                </li>
                <li class="cat-collections__block-list-1-item">
                    <div class="cat-collections__block-text">
                        <p>Кустовые розы</p>
                    </div>
                </li>
                <li class="cat-collections__block-list-1-item">
                    <div class="cat-collections__block-text">
                        <p>Лилии</p>
                    </div>
                </li>
                <li class="cat-collections__block-list-1-item">
                    <div class="cat-collections__block-text">
                        <p>Кустовые розы</p>
                    </div>
                </li>
                <li class="cat-collections__block-list-1-item">
                    <div class="cat-collections__block-text">
                        <p>Лилии</p>
                    </div>
                </li>
                <li class="cat-collections__block-list-1-item">
                    <div class="cat-collections__block-text">
                        <p>Кустовые розы</p>
                    </div>
                </li>
                <li class="cat-collections__block-list-1-item">
                    <div class="cat-collections__block-text">
                        <p>Лилии</p>
                    </div>
                </li>
                <li class="cat-collections__block-list-1-item">
                    <div class="cat-collections__block-text">
                        <p>Кустовые розы</p>
                    </div>
                </li>
            </ul>
            <div class="cat-collections__block-container">
                <div class="cat-collections__block-add">Группа подборок 2</div>
                <div class="cat-collections__block-select">
                    <div class="cat-collections">
                        <div class="cat-collections__block-styled-2">Смотреть все</div>
                    </div>
                </div>
            </div>
            <div class="cat-collections__block-slider-2">
                <div class="swiper sliderCatalogCollections-2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <p>Лилии</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Кустовые розы</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Лилии</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Кустовые розы</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Лилии</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Кустовые розы</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Лилии</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Кустовые розы</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-control-2">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <ul class="cat-collections__block-list-2">
                <li class="cat-collections__block-list-2-item">
                    <div class="cat-collections__block-text">
                        <p>Лилии</p>
                    </div>
                </li>
                <li class="cat-collections__block-list-2-item">
                    <div class="cat-collections__block-text">
                        <p>Кустовые розы</p>
                    </div>
                </li>
                <li class="cat-collections__block-list-2-item">
                    <div class="cat-collections__block-text">
                        <p>Лилии</p>
                    </div>
                </li>
                <li class="cat-collections__block-list-2-item">
                    <div class="cat-collections__block-text">
                        <p>Кустовые розы</p>
                    </div>
                </li>
                <li class="cat-collections__block-list-2-item">
                    <div class="cat-collections__block-text">
                        <p>Лилии</p>
                    </div>
                </li>
                <li class="cat-collections__block-list-2-item">
                    <div class="cat-collections__block-text">
                        <p>Кустовые розы</p>
                    </div>
                </li>
                <li class="cat-collections__block-list-2-item">
                    <div class="cat-collections__block-text">
                        <p>Лилии</p>
                    </div>
                </li>
                <li class="cat-collections__block-list-2-item">
                    <div class="cat-collections__block-text">
                        <p>Кустовые розы</p>
                    </div>
                </li>
                <li class="cat-collections__block-list-2-item">
                    <div class="cat-collections__block-text">
                        <p>Лилии</p>
                    </div>
                </li>
                <li class="cat-collections__block-list-2-item">
                    <div class="cat-collections__block-text">
                        <p>Кустовые розы</p>
                    </div>
                </li>
                <li class="cat-collections__block-list-2-item">
                    <div class="cat-collections__block-text">
                        <p>Лилии</p>
                    </div>
                </li>
                <li class="cat-collections__block-list-2-item">
                    <div class="cat-collections__block-text">
                        <p>Кустовые розы</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
@endsection