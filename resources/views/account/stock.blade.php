@extends('layouts.account')
@section('title', 'Календарь скидок')
@section('content')
    <div class="header-profile__stock">
        <div class="header-profile__stock-calendar">
            <div class="header-profile__stock-calendar-title">Календарь скидок</div>
            <div class="header-profile__stock-calendar-icon">
                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.5391 1.64062H17.5547V0H15.9141V1.64062H5.08594V0H3.44531V1.64062H2.46094C1.10398 1.64062 0 2.7446 0 4.10156V18.5391C0 19.896 1.10398 21 2.46094 21H18.5391C19.896 21 21 19.896 21 18.5391V4.10156C21 2.7446 19.896 1.64062 18.5391 1.64062ZM19.3594 18.5391C19.3594 18.9914 18.9914 19.3594 18.5391 19.3594H2.46094C2.00862 19.3594 1.64062 18.9914 1.64062 18.5391V7.71094H19.3594V18.5391ZM19.3594 6.07031H1.64062V4.10156C1.64062 3.64924 2.00862 3.28125 2.46094 3.28125H3.44531V4.92188H5.08594V3.28125H15.9141V4.92188H17.5547V3.28125H18.5391C18.9914 3.28125 19.3594 3.64924 19.3594 4.10156V6.07031Z" fill="white"/>
                    <path d="M4.75781 9.43359H3.11719V11.0742H4.75781V9.43359Z" fill="white"/>
                    <path d="M8.03906 9.43359H6.39844V11.0742H8.03906V9.43359Z" fill="white"/>
                    <path d="M11.3203 9.43359H9.67969V11.0742H11.3203V9.43359Z" fill="white"/>
                    <path d="M14.6016 9.43359H12.9609V11.0742H14.6016V9.43359Z" fill="white"/>
                    <path d="M17.8828 9.43359H16.2422V11.0742H17.8828V9.43359Z" fill="white"/>
                    <path d="M4.75781 12.7148H3.11719V14.3555H4.75781V12.7148Z" fill="white"/>
                    <path d="M8.03906 12.7148H6.39844V14.3555H8.03906V12.7148Z" fill="white"/>
                    <path d="M11.3203 12.7148H9.67969V14.3555H11.3203V12.7148Z" fill="white"/>
                    <path d="M14.6016 12.7148H12.9609V14.3555H14.6016V12.7148Z" fill="white"/>
                    <path d="M4.75781 15.9961H3.11719V17.6367H4.75781V15.9961Z" fill="white"/>
                    <path d="M8.03906 15.9961H6.39844V17.6367H8.03906V15.9961Z" fill="white"/>
                    <path d="M11.3203 15.9961H9.67969V17.6367H11.3203V15.9961Z" fill="white"/>
                    <path d="M14.6016 15.9961H12.9609V17.6367H14.6016V15.9961Z" fill="white"/>
                    <path d="M17.8828 12.7148H16.2422V14.3555H17.8828V12.7148Z" fill="white"/>
                </svg>

                <p>Календарь скидок</p>
            </div>
            <div class="header-profile__stock-calendar-block">
                <div id="datepickerStock"></div>
            </div>
        </div>
        <div class="header-profile__stock-info">
            <div class="header-profile__stock-info-circle"><p>Мемоджи</p></div>
            <div class="header-profile__stock-info-add">Получите  выгоду</div>
            <div class="header-profile__stock-info-text">
                При оплате заявки заблаговременно <br>
                Вам доступна скидка, укажите <br>
                желаемую дату. <br>
                <br>
                От 7 дней - 5% <br>
                От 14 дней – 10% <br>
                От 21 дня - 15%
            </div>
        </div>
    </div>

    <script>
        $('.header-profile__menu-list-stock').addClass('header-profile__menu-list-active')
    </script>
@endsection
