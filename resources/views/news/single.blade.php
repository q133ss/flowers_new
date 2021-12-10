@extends('layouts.main')
@section('title')
    {{$news['title']}} - BeeHappy
@endsection
@section('content')
    <div class="dnew-content">
        <div class="containers">
            <div class="dnew-content__block">
                <div class="dnew-content__block-back">
                    <a href="#">
                        <svg width="6" height="8" viewBox="0 0 6 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.126693 4.21814L5.26511 7.90939C5.34597 7.9675 5.45558 8.0001 5.5698 8C5.68403 7.9999 5.79353 7.96713 5.87421 7.90888C5.95488 7.85063 6.00013 7.77168 6 7.6894C5.99987 7.60712 5.95436 7.52825 5.8735 7.47014L1.04088 3.99865L5.8735 0.527157C5.9528 0.468818 5.99696 0.390309 5.99641 0.308663C5.99586 0.227018 5.95064 0.148821 5.87056 0.0910377C5.79048 0.0332541 5.682 0.000545474 5.56866 7.11485e-06C5.45531 -0.000531244 5.34624 0.0311446 5.26511 0.0881619L0.126693 3.77915C0.0865377 3.80795 0.0546745 3.84217 0.0329326 3.87986C0.0111912 3.91755 -6.00308e-07 3.95796 -6.03876e-07 3.99878C-6.07444e-07 4.03959 0.0111912 4.08 0.0329326 4.11769C0.0546745 4.15538 0.0865377 4.18961 0.126693 4.2184L0.126693 4.21814Z" fill="white"/>
                        </svg>

                        <svg width="6" height="8" viewBox="0 0 6 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.126693 4.21814L5.26511 7.90939C5.34597 7.9675 5.45558 8.0001 5.5698 8C5.68403 7.9999 5.79353 7.96713 5.87421 7.90888C5.95488 7.85063 6.00013 7.77168 6 7.6894C5.99987 7.60712 5.95436 7.52825 5.8735 7.47014L1.04088 3.99865L5.8735 0.527157C5.9528 0.468818 5.99696 0.390309 5.99641 0.308663C5.99586 0.227018 5.95064 0.148821 5.87056 0.0910377C5.79048 0.0332541 5.682 0.000545474 5.56866 7.11485e-06C5.45531 -0.000531244 5.34624 0.0311446 5.26511 0.0881619L0.126693 3.77915C0.0865377 3.80795 0.0546745 3.84217 0.0329326 3.87986C0.0111912 3.91755 -6.00308e-07 3.95796 -6.03876e-07 3.99878C-6.07444e-07 4.03959 0.0111912 4.08 0.0329326 4.11769C0.0546745 4.15538 0.0865377 4.18961 0.126693 4.2184L0.126693 4.21814Z" fill="white"/>
                        </svg>

                    </a>
                </div>
                <div class="dnew-content__block-banner" style="background-image: url('{{$news['banner']}}'); background-size: cover"></div>
                <div class="dnew-content__block-wrapper">
                    <div class="dnew-content__block-text">
                        <div class="dnew-content__block-text-title">{{$news['title']}}</div>
                        <div class="dnew-content__block-text-item">{{$news['content']}}</div>
                        <button class="dnew-content__block-text-btn">
                            <a href="#">
                                Перейти в каталог
                            </a>
                        </button>
                    </div>
                    <div class="dnew-content__block-table">
                        <div class="dnew-content__block-table-title">
                            Еще новости по теме
                        </div>
                        <ul class="dnew-content__block-tables">
                            @foreach($news_more as $more)
                            <li class="dnew-content__block-tables-item" style="background-image: url('{{$more['img']}}'); background-size: cover">
                                <div class="dnew-content__block-tables-item-date">
                                    {{substr($more['created_at'],0,10)}}
                                </div>
                                <div class="dnew-content__block-tables-item-text" style="cursor: pointer" onclick="location.href='{{route('news.single', $more['id'])}}'">
                                    {{mb_strimwidth($more['content'], 0, 65, "...")}}
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dnew-message">
        <div class="containers">
            <div class="dnew-message__block">
                <div class="dnew-message__block-input">
                    <div class="dnew-message__block-input-title">Написать комментарий</div>
                    <div class="dnew-message__block-input-wrapper">
                        <div class="dnew-message__block-input-img"></div>
                        <textarea class="dnew-message__block-input-textarea" placeholder="Напишите ваш комментарий"></textarea>
                    </div>
                    <button class="dnew-message__block-input-btn"><a href="#">Написать комментарий</a></button>
                </div>
                <ul class="dnew-message__block-list">
                    <li class="dnew-message__block-list-item">
                        <div class="dnew-message__block-list-img"></div>
                        <div class="dnew-message__block-list-wrapper">
                            <div class="dnew-message__block-list-name">Артур Аппаков</div>
                            <div class="dnew-message__block-list-date">2 дня назад</div>
                        </div>
                        <div class="dnew-message__block-list-text">
                            В связи с загруженным автомобильным трафиком в предпраздничные и праздничные дни, а также  в связи с большим объемом заказов на пиковые интервалы, возможны задержки в доставках 5 и 8 марта включительно. В связи с загруженным автомобильным трафиком в предпраздничные и праздничные дни, а также  в связи с большим объемом заказов на пиковые интервалы, возможны задержки в доставках 5 и 8 марта включительно.
                        </div>
                    </li>
                    <li class="dnew-message__block-list-item">
                        <div class="dnew-message__block-list-img"></div>
                        <div class="dnew-message__block-list-wrapper">
                            <div class="dnew-message__block-list-name">Артур Аппаков</div>
                            <div class="dnew-message__block-list-date">2 дня назад</div>
                        </div>
                        <div class="dnew-message__block-list-text">
                            В связи с загруженным автомобильным трафиком в предпраздничные и праздничные дни, а также  в связи с большим объемом заказов на пиковые интервалы, возможны задержки в доставках 5 и 8 марта включительно. В связи с загруженным автомобильным трафиком в предпраздничные и праздничные дни, а также  в связи с большим объемом заказов на пиковые интервалы, возможны задержки в доставках 5 и 8 марта включительно.
                        </div>
                    </li>
                    <li class="dnew-message__block-list-item">
                        <div class="dnew-message__block-list-img"></div>
                        <div class="dnew-message__block-list-wrapper">
                            <div class="dnew-message__block-list-name">Артур Аппаков</div>
                            <div class="dnew-message__block-list-date">2 дня назад</div>
                        </div>
                        <div class="dnew-message__block-list-text">
                            В связи с загруженным автомобильным трафиком в предпраздничные и праздничные дни, а также  в связи с большим объемом заказов на пиковые интервалы, возможны задержки в доставках 5 и 8 марта включительно. В связи с загруженным автомобильным трафиком в предпраздничные и праздничные дни, а также  в связи с большим объемом заказов на пиковые интервалы, возможны задержки в доставках 5 и 8 марта включительно.
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
