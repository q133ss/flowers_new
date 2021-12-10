@extends('layouts.account')
@section('title', 'Заказы')
@section('content')
    <div class="header-profile__orders">
        <div class="header-profile__orders-table">
            <div class="header-profile__orders-table-title">Текущие заказы</div>
            <div class="header-profile__orders-table-date">
                <div class="header-profile__orders-table-date-day">Дата</div>
                <div class="header-profile__orders-table-date-number">№ заказа</div>
            </div>
            <ul class="header-profile__orders-table-list">
                <li class="header-profile__orders-table-item">
                    <div class="header-profile__orders-table-item-number">
                        <div class="header-profile__orders-table-item-number-date">23.08.22</div>
                        <div class="header-profile__orders-table-item-number-id">№ 144 - 234 -4568</div>
                    </div>
                    <div class="header-profile__orders-table-info">
                        <button class="header-profile__orders-table-info-btn" type="button" data-bs-toggle="modal" data-bs-target="#profileOrdersModel-1"><p>Подробнее</p></button>
                        <div class="modal fade" id="profileOrdersModel-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content header-profile__orders-table-info-model">
                                    <button type="button" class="btn-close header-profile__orders-table-info-close" data-bs-dismiss="modal" aria-label="Close">
                                        <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.3281 22.3296L40.2735 40.275" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M22.1313 40.4727L40.4712 22.1328" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>

                                    </button>
                                    <div class="header-profile__orders-table-info-title">№ 144 - 234 -4568 </div>
                                    <ul class="header-profile__orders-table-info-table">
                                        <li class="header-profile__orders-table-info-table-item">
                                            <div class="header-profile__orders-table-info-table-title">Получатель:</div>
                                            <div class="header-profile__orders-table-info-table-text">Алексей Алексеев</div>
                                        </li>
                                        <li class="header-profile__orders-table-info-table-item">
                                            <div class="header-profile__orders-table-info-table-title">Время доставки:</div>
                                            <div class="header-profile__orders-table-info-table-text">18:20-19:00</div>
                                        </li>
                                        <li class="header-profile__orders-table-info-table-item">
                                            <div class="header-profile__orders-table-info-table-title">Адрес доставки:</div>
                                            <div class="header-profile__orders-table-info-table-text">г. Москва, ул Круглова
                                                дом 56, кв 20</div>
                                        </li>
                                        <li class="header-profile__orders-table-info-table-item">
                                            <div class="header-profile__orders-table-info-table-title">Дата доставки:</div>
                                            <div class="header-profile__orders-table-info-table-text">01.11.2021</div>
                                        </li>
                                        <li class="header-profile__orders-table-info-table-item">
                                            <div class="header-profile__orders-table-info-table-title">Номер телефона получателя:</div>
                                            <div class="header-profile__orders-table-info-table-text">+7 (999) 456-67-80</div>
                                        </li>
                                    </ul>
                                    <div class="header-profile__orders-table-info-input">
                                        <input type="text" placeholder="Текст" value="С днем рождения!">
                                    </div>
                                    <ul class="header-profile__orders-table-info-list">
                                        <li class="header-profile__orders-table-info-list-item">
                                            <div class="header-profile__orders-table-info-list-img"><svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 20.575C0 21.9144 1.09031 23 2.42501 23H20.575C21.9144 23 23 21.9097 23 20.575V2.42501C23 1.08561 21.9097 0 20.575 0H2.42501C1.08561 0 0 1.09031 0 2.42501V20.575ZM20.575 21.8486H2.42501C1.72476 21.8486 1.15141 21.2752 1.15141 20.575V17.5437L5.51267 13.1825L9.23948 16.9093C9.46506 17.1349 9.82693 17.1349 10.0525 16.9093L16.7824 10.1794L21.8486 15.2456V20.575C21.8486 21.2752 21.2752 21.8486 20.575 21.8486ZM2.42501 1.15141H20.575C21.2752 1.15141 21.8486 1.72476 21.8486 2.42501V13.6148L17.1866 8.9575C16.961 8.73192 16.5991 8.73192 16.3735 8.9575L9.64365 15.6874L5.91684 11.9606C5.69125 11.735 5.32938 11.735 5.1038 11.9606L1.15141 15.913V2.42501C1.15141 1.72476 1.72476 1.15141 2.42501 1.15141Z" fill="#656565"/>
                                                    <path d="M7.12904 9.2161C8.74572 9.2161 10.0569 7.9002 10.0569 6.28822C10.0569 4.67625 8.74102 3.36035 7.12904 3.36035C5.51707 3.36035 4.20117 4.67625 4.20117 6.28822C4.20117 7.9002 5.51237 9.2161 7.12904 9.2161ZM7.12904 4.51176C8.11127 4.51176 8.9055 5.3107 8.9055 6.28822C8.9055 7.26575 8.10657 8.06469 7.12904 8.06469C6.15152 8.06469 5.35258 7.26575 5.35258 6.28822C5.35258 5.3107 6.14682 4.51176 7.12904 4.51176Z" fill="#656565"/>
                                                </svg>
                                            </div>
                                            <div class="header-profile__orders-table-info-list-text">
                                                <div class="header-profile__orders-table-info-list-text-title">Кустовая роза <br> белая</div>
                                                <div class="header-profile__orders-table-info-list-text-price">
                                                    <div class="header-profile__orders-table-info-list-text-price-sum">2990₽</div>
                                                    <div class="header-profile__orders-table-info-list-text-price-icon"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.7109 1.875H10.3594V1.05469C10.3594 0.473133 9.88624 0 9.30469 0C8.72313 0 8.25 0.473133 8.25 1.05469V1.34262C8.25 1.70693 8.00536 2.03128 7.65504 2.13136L7.3125 2.22923V2.22656C7.3125 2.03241 7.15509 1.875 6.96094 1.875H5.55469C5.36053 1.875 5.20312 2.03241 5.20312 2.22656V3.79688H1.05469C0.473133 3.79688 0 4.27001 0 4.85156V11.6484C0 11.7781 0.0713672 11.8972 0.185672 11.9584C0.237656 11.9862 0.294656 12 0.351539 12C0.419742 12 0.487758 11.9802 0.546562 11.9409L1.86427 11.0625H8.55469C9.13624 11.0625 9.60938 10.5894 9.60938 10.0078V6.32812H10.7109C11.4217 6.32812 12 5.74985 12 5.03906V3.16406C12 2.45327 11.4217 1.875 10.7109 1.875ZM5.90625 2.57812H6.60938V5.625H5.90625V2.57812ZM8.90625 10.0078C8.90625 10.2017 8.74854 10.3594 8.55469 10.3594H1.75781C1.68841 10.3594 1.62056 10.3799 1.56281 10.4184L0.703125 10.9916V4.85156C0.703125 4.65771 0.860836 4.5 1.05469 4.5H5.20312V5.97656C5.20312 6.17072 5.36053 6.32812 5.55469 6.32812H6.96094C7.14155 6.32812 7.29019 6.19186 7.31006 6.01657C7.62326 6.2163 7.99151 6.32812 8.37448 6.32812H8.90625V10.0078ZM11.2969 5.03906C11.2969 5.36215 11.034 5.625 10.7109 5.625H8.37448C7.94702 5.625 7.54781 5.40935 7.3125 5.05673V2.96051L7.84819 2.80746C8.49876 2.62158 8.95312 2.01921 8.95312 1.34262V1.05469C8.95312 0.860836 9.11084 0.703125 9.30469 0.703125C9.49854 0.703125 9.65625 0.860836 9.65625 1.05469V2.22656C9.65625 2.42072 9.81366 2.57812 10.0078 2.57812H10.7109C11.034 2.57812 11.2969 2.84098 11.2969 3.16406V5.03906Z" fill="white"/>
                                                            <path d="M1.75781 6.60938H4.10156C4.29572 6.60938 4.45312 6.45197 4.45312 6.25781C4.45312 6.06366 4.29572 5.90625 4.10156 5.90625H1.75781C1.56366 5.90625 1.40625 6.06366 1.40625 6.25781C1.40625 6.45197 1.56366 6.60938 1.75781 6.60938Z" fill="white"/>
                                                            <path d="M7.85156 7.3125H1.75781C1.56366 7.3125 1.40625 7.46991 1.40625 7.66406C1.40625 7.85822 1.56366 8.01562 1.75781 8.01562H7.85156C8.04572 8.01562 8.20312 7.85822 8.20312 7.66406C8.20312 7.46991 8.04572 7.3125 7.85156 7.3125Z" fill="white"/>
                                                            <path d="M7.85156 8.71875H1.75781C1.56366 8.71875 1.40625 8.87616 1.40625 9.07031C1.40625 9.26447 1.56366 9.42188 1.75781 9.42188H7.85156C8.04572 9.42188 8.20312 9.26447 8.20312 9.07031C8.20312 8.87616 8.04572 8.71875 7.85156 8.71875Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="header-profile__orders-table-info-list-item">
                                            <div class="header-profile__orders-table-info-list-img"><svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 20.575C0 21.9144 1.09031 23 2.42501 23H20.575C21.9144 23 23 21.9097 23 20.575V2.42501C23 1.08561 21.9097 0 20.575 0H2.42501C1.08561 0 0 1.09031 0 2.42501V20.575ZM20.575 21.8486H2.42501C1.72476 21.8486 1.15141 21.2752 1.15141 20.575V17.5437L5.51267 13.1825L9.23948 16.9093C9.46506 17.1349 9.82693 17.1349 10.0525 16.9093L16.7824 10.1794L21.8486 15.2456V20.575C21.8486 21.2752 21.2752 21.8486 20.575 21.8486ZM2.42501 1.15141H20.575C21.2752 1.15141 21.8486 1.72476 21.8486 2.42501V13.6148L17.1866 8.9575C16.961 8.73192 16.5991 8.73192 16.3735 8.9575L9.64365 15.6874L5.91684 11.9606C5.69125 11.735 5.32938 11.735 5.1038 11.9606L1.15141 15.913V2.42501C1.15141 1.72476 1.72476 1.15141 2.42501 1.15141Z" fill="#656565"/>
                                                    <path d="M7.12904 9.2161C8.74572 9.2161 10.0569 7.9002 10.0569 6.28822C10.0569 4.67625 8.74102 3.36035 7.12904 3.36035C5.51707 3.36035 4.20117 4.67625 4.20117 6.28822C4.20117 7.9002 5.51237 9.2161 7.12904 9.2161ZM7.12904 4.51176C8.11127 4.51176 8.9055 5.3107 8.9055 6.28822C8.9055 7.26575 8.10657 8.06469 7.12904 8.06469C6.15152 8.06469 5.35258 7.26575 5.35258 6.28822C5.35258 5.3107 6.14682 4.51176 7.12904 4.51176Z" fill="#656565"/>
                                                </svg>
                                            </div>
                                            <div class="header-profile__orders-table-info-list-text">
                                                <div class="header-profile__orders-table-info-list-text-title">Кустовая роза <br> белая</div>
                                                <div class="header-profile__orders-table-info-list-text-price">
                                                    <div class="header-profile__orders-table-info-list-text-price-sum">2990₽</div>
                                                    <div class="header-profile__orders-table-info-list-text-price-icon"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.7109 1.875H10.3594V1.05469C10.3594 0.473133 9.88624 0 9.30469 0C8.72313 0 8.25 0.473133 8.25 1.05469V1.34262C8.25 1.70693 8.00536 2.03128 7.65504 2.13136L7.3125 2.22923V2.22656C7.3125 2.03241 7.15509 1.875 6.96094 1.875H5.55469C5.36053 1.875 5.20312 2.03241 5.20312 2.22656V3.79688H1.05469C0.473133 3.79688 0 4.27001 0 4.85156V11.6484C0 11.7781 0.0713672 11.8972 0.185672 11.9584C0.237656 11.9862 0.294656 12 0.351539 12C0.419742 12 0.487758 11.9802 0.546562 11.9409L1.86427 11.0625H8.55469C9.13624 11.0625 9.60938 10.5894 9.60938 10.0078V6.32812H10.7109C11.4217 6.32812 12 5.74985 12 5.03906V3.16406C12 2.45327 11.4217 1.875 10.7109 1.875ZM5.90625 2.57812H6.60938V5.625H5.90625V2.57812ZM8.90625 10.0078C8.90625 10.2017 8.74854 10.3594 8.55469 10.3594H1.75781C1.68841 10.3594 1.62056 10.3799 1.56281 10.4184L0.703125 10.9916V4.85156C0.703125 4.65771 0.860836 4.5 1.05469 4.5H5.20312V5.97656C5.20312 6.17072 5.36053 6.32812 5.55469 6.32812H6.96094C7.14155 6.32812 7.29019 6.19186 7.31006 6.01657C7.62326 6.2163 7.99151 6.32812 8.37448 6.32812H8.90625V10.0078ZM11.2969 5.03906C11.2969 5.36215 11.034 5.625 10.7109 5.625H8.37448C7.94702 5.625 7.54781 5.40935 7.3125 5.05673V2.96051L7.84819 2.80746C8.49876 2.62158 8.95312 2.01921 8.95312 1.34262V1.05469C8.95312 0.860836 9.11084 0.703125 9.30469 0.703125C9.49854 0.703125 9.65625 0.860836 9.65625 1.05469V2.22656C9.65625 2.42072 9.81366 2.57812 10.0078 2.57812H10.7109C11.034 2.57812 11.2969 2.84098 11.2969 3.16406V5.03906Z" fill="white"/>
                                                            <path d="M1.75781 6.60938H4.10156C4.29572 6.60938 4.45312 6.45197 4.45312 6.25781C4.45312 6.06366 4.29572 5.90625 4.10156 5.90625H1.75781C1.56366 5.90625 1.40625 6.06366 1.40625 6.25781C1.40625 6.45197 1.56366 6.60938 1.75781 6.60938Z" fill="white"/>
                                                            <path d="M7.85156 7.3125H1.75781C1.56366 7.3125 1.40625 7.46991 1.40625 7.66406C1.40625 7.85822 1.56366 8.01562 1.75781 8.01562H7.85156C8.04572 8.01562 8.20312 7.85822 8.20312 7.66406C8.20312 7.46991 8.04572 7.3125 7.85156 7.3125Z" fill="white"/>
                                                            <path d="M7.85156 8.71875H1.75781C1.56366 8.71875 1.40625 8.87616 1.40625 9.07031C1.40625 9.26447 1.56366 9.42188 1.75781 9.42188H7.85156C8.04572 9.42188 8.20312 9.26447 8.20312 9.07031C8.20312 8.87616 8.04572 8.71875 7.85156 8.71875Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="header-profile__orders-table-info-list-item">
                                            <div class="header-profile__orders-table-info-list-img"><svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 20.575C0 21.9144 1.09031 23 2.42501 23H20.575C21.9144 23 23 21.9097 23 20.575V2.42501C23 1.08561 21.9097 0 20.575 0H2.42501C1.08561 0 0 1.09031 0 2.42501V20.575ZM20.575 21.8486H2.42501C1.72476 21.8486 1.15141 21.2752 1.15141 20.575V17.5437L5.51267 13.1825L9.23948 16.9093C9.46506 17.1349 9.82693 17.1349 10.0525 16.9093L16.7824 10.1794L21.8486 15.2456V20.575C21.8486 21.2752 21.2752 21.8486 20.575 21.8486ZM2.42501 1.15141H20.575C21.2752 1.15141 21.8486 1.72476 21.8486 2.42501V13.6148L17.1866 8.9575C16.961 8.73192 16.5991 8.73192 16.3735 8.9575L9.64365 15.6874L5.91684 11.9606C5.69125 11.735 5.32938 11.735 5.1038 11.9606L1.15141 15.913V2.42501C1.15141 1.72476 1.72476 1.15141 2.42501 1.15141Z" fill="#656565"/>
                                                    <path d="M7.12904 9.2161C8.74572 9.2161 10.0569 7.9002 10.0569 6.28822C10.0569 4.67625 8.74102 3.36035 7.12904 3.36035C5.51707 3.36035 4.20117 4.67625 4.20117 6.28822C4.20117 7.9002 5.51237 9.2161 7.12904 9.2161ZM7.12904 4.51176C8.11127 4.51176 8.9055 5.3107 8.9055 6.28822C8.9055 7.26575 8.10657 8.06469 7.12904 8.06469C6.15152 8.06469 5.35258 7.26575 5.35258 6.28822C5.35258 5.3107 6.14682 4.51176 7.12904 4.51176Z" fill="#656565"/>
                                                </svg>
                                            </div>
                                            <div class="header-profile__orders-table-info-list-text">
                                                <div class="header-profile__orders-table-info-list-text-title">Кустовая роза <br> белая</div>
                                                <div class="header-profile__orders-table-info-list-text-price">
                                                    <div class="header-profile__orders-table-info-list-text-price-sum">2990₽</div>
                                                    <div class="header-profile__orders-table-info-list-text-price-icon"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.7109 1.875H10.3594V1.05469C10.3594 0.473133 9.88624 0 9.30469 0C8.72313 0 8.25 0.473133 8.25 1.05469V1.34262C8.25 1.70693 8.00536 2.03128 7.65504 2.13136L7.3125 2.22923V2.22656C7.3125 2.03241 7.15509 1.875 6.96094 1.875H5.55469C5.36053 1.875 5.20312 2.03241 5.20312 2.22656V3.79688H1.05469C0.473133 3.79688 0 4.27001 0 4.85156V11.6484C0 11.7781 0.0713672 11.8972 0.185672 11.9584C0.237656 11.9862 0.294656 12 0.351539 12C0.419742 12 0.487758 11.9802 0.546562 11.9409L1.86427 11.0625H8.55469C9.13624 11.0625 9.60938 10.5894 9.60938 10.0078V6.32812H10.7109C11.4217 6.32812 12 5.74985 12 5.03906V3.16406C12 2.45327 11.4217 1.875 10.7109 1.875ZM5.90625 2.57812H6.60938V5.625H5.90625V2.57812ZM8.90625 10.0078C8.90625 10.2017 8.74854 10.3594 8.55469 10.3594H1.75781C1.68841 10.3594 1.62056 10.3799 1.56281 10.4184L0.703125 10.9916V4.85156C0.703125 4.65771 0.860836 4.5 1.05469 4.5H5.20312V5.97656C5.20312 6.17072 5.36053 6.32812 5.55469 6.32812H6.96094C7.14155 6.32812 7.29019 6.19186 7.31006 6.01657C7.62326 6.2163 7.99151 6.32812 8.37448 6.32812H8.90625V10.0078ZM11.2969 5.03906C11.2969 5.36215 11.034 5.625 10.7109 5.625H8.37448C7.94702 5.625 7.54781 5.40935 7.3125 5.05673V2.96051L7.84819 2.80746C8.49876 2.62158 8.95312 2.01921 8.95312 1.34262V1.05469C8.95312 0.860836 9.11084 0.703125 9.30469 0.703125C9.49854 0.703125 9.65625 0.860836 9.65625 1.05469V2.22656C9.65625 2.42072 9.81366 2.57812 10.0078 2.57812H10.7109C11.034 2.57812 11.2969 2.84098 11.2969 3.16406V5.03906Z" fill="white"/>
                                                            <path d="M1.75781 6.60938H4.10156C4.29572 6.60938 4.45312 6.45197 4.45312 6.25781C4.45312 6.06366 4.29572 5.90625 4.10156 5.90625H1.75781C1.56366 5.90625 1.40625 6.06366 1.40625 6.25781C1.40625 6.45197 1.56366 6.60938 1.75781 6.60938Z" fill="white"/>
                                                            <path d="M7.85156 7.3125H1.75781C1.56366 7.3125 1.40625 7.46991 1.40625 7.66406C1.40625 7.85822 1.56366 8.01562 1.75781 8.01562H7.85156C8.04572 8.01562 8.20312 7.85822 8.20312 7.66406C8.20312 7.46991 8.04572 7.3125 7.85156 7.3125Z" fill="white"/>
                                                            <path d="M7.85156 8.71875H1.75781C1.56366 8.71875 1.40625 8.87616 1.40625 9.07031C1.40625 9.26447 1.56366 9.42188 1.75781 9.42188H7.85156C8.04572 9.42188 8.20312 9.26447 8.20312 9.07031C8.20312 8.87616 8.04572 8.71875 7.85156 8.71875Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="header-profile__orders-table-info-list-item">
                                            <div class="header-profile__orders-table-info-list-img"><svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 20.575C0 21.9144 1.09031 23 2.42501 23H20.575C21.9144 23 23 21.9097 23 20.575V2.42501C23 1.08561 21.9097 0 20.575 0H2.42501C1.08561 0 0 1.09031 0 2.42501V20.575ZM20.575 21.8486H2.42501C1.72476 21.8486 1.15141 21.2752 1.15141 20.575V17.5437L5.51267 13.1825L9.23948 16.9093C9.46506 17.1349 9.82693 17.1349 10.0525 16.9093L16.7824 10.1794L21.8486 15.2456V20.575C21.8486 21.2752 21.2752 21.8486 20.575 21.8486ZM2.42501 1.15141H20.575C21.2752 1.15141 21.8486 1.72476 21.8486 2.42501V13.6148L17.1866 8.9575C16.961 8.73192 16.5991 8.73192 16.3735 8.9575L9.64365 15.6874L5.91684 11.9606C5.69125 11.735 5.32938 11.735 5.1038 11.9606L1.15141 15.913V2.42501C1.15141 1.72476 1.72476 1.15141 2.42501 1.15141Z" fill="#656565"/>
                                                    <path d="M7.12904 9.2161C8.74572 9.2161 10.0569 7.9002 10.0569 6.28822C10.0569 4.67625 8.74102 3.36035 7.12904 3.36035C5.51707 3.36035 4.20117 4.67625 4.20117 6.28822C4.20117 7.9002 5.51237 9.2161 7.12904 9.2161ZM7.12904 4.51176C8.11127 4.51176 8.9055 5.3107 8.9055 6.28822C8.9055 7.26575 8.10657 8.06469 7.12904 8.06469C6.15152 8.06469 5.35258 7.26575 5.35258 6.28822C5.35258 5.3107 6.14682 4.51176 7.12904 4.51176Z" fill="#656565"/>
                                                </svg>
                                            </div>
                                            <div class="header-profile__orders-table-info-list-text">
                                                <div class="header-profile__orders-table-info-list-text-title">Кустовая роза <br> белая</div>
                                                <div class="header-profile__orders-table-info-list-text-price">
                                                    <div class="header-profile__orders-table-info-list-text-price-sum">2990₽</div>
                                                    <div class="header-profile__orders-table-info-list-text-price-icon"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.7109 1.875H10.3594V1.05469C10.3594 0.473133 9.88624 0 9.30469 0C8.72313 0 8.25 0.473133 8.25 1.05469V1.34262C8.25 1.70693 8.00536 2.03128 7.65504 2.13136L7.3125 2.22923V2.22656C7.3125 2.03241 7.15509 1.875 6.96094 1.875H5.55469C5.36053 1.875 5.20312 2.03241 5.20312 2.22656V3.79688H1.05469C0.473133 3.79688 0 4.27001 0 4.85156V11.6484C0 11.7781 0.0713672 11.8972 0.185672 11.9584C0.237656 11.9862 0.294656 12 0.351539 12C0.419742 12 0.487758 11.9802 0.546562 11.9409L1.86427 11.0625H8.55469C9.13624 11.0625 9.60938 10.5894 9.60938 10.0078V6.32812H10.7109C11.4217 6.32812 12 5.74985 12 5.03906V3.16406C12 2.45327 11.4217 1.875 10.7109 1.875ZM5.90625 2.57812H6.60938V5.625H5.90625V2.57812ZM8.90625 10.0078C8.90625 10.2017 8.74854 10.3594 8.55469 10.3594H1.75781C1.68841 10.3594 1.62056 10.3799 1.56281 10.4184L0.703125 10.9916V4.85156C0.703125 4.65771 0.860836 4.5 1.05469 4.5H5.20312V5.97656C5.20312 6.17072 5.36053 6.32812 5.55469 6.32812H6.96094C7.14155 6.32812 7.29019 6.19186 7.31006 6.01657C7.62326 6.2163 7.99151 6.32812 8.37448 6.32812H8.90625V10.0078ZM11.2969 5.03906C11.2969 5.36215 11.034 5.625 10.7109 5.625H8.37448C7.94702 5.625 7.54781 5.40935 7.3125 5.05673V2.96051L7.84819 2.80746C8.49876 2.62158 8.95312 2.01921 8.95312 1.34262V1.05469C8.95312 0.860836 9.11084 0.703125 9.30469 0.703125C9.49854 0.703125 9.65625 0.860836 9.65625 1.05469V2.22656C9.65625 2.42072 9.81366 2.57812 10.0078 2.57812H10.7109C11.034 2.57812 11.2969 2.84098 11.2969 3.16406V5.03906Z" fill="white"/>
                                                            <path d="M1.75781 6.60938H4.10156C4.29572 6.60938 4.45312 6.45197 4.45312 6.25781C4.45312 6.06366 4.29572 5.90625 4.10156 5.90625H1.75781C1.56366 5.90625 1.40625 6.06366 1.40625 6.25781C1.40625 6.45197 1.56366 6.60938 1.75781 6.60938Z" fill="white"/>
                                                            <path d="M7.85156 7.3125H1.75781C1.56366 7.3125 1.40625 7.46991 1.40625 7.66406C1.40625 7.85822 1.56366 8.01562 1.75781 8.01562H7.85156C8.04572 8.01562 8.20312 7.85822 8.20312 7.66406C8.20312 7.46991 8.04572 7.3125 7.85156 7.3125Z" fill="white"/>
                                                            <path d="M7.85156 8.71875H1.75781C1.56366 8.71875 1.40625 8.87616 1.40625 9.07031C1.40625 9.26447 1.56366 9.42188 1.75781 9.42188H7.85156C8.04572 9.42188 8.20312 9.26447 8.20312 9.07031C8.20312 8.87616 8.04572 8.71875 7.85156 8.71875Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="header-profile__orders-table-info-titles">Фото готового товара</div>
                                    <div class="header-profile__orders-table-info-slider">
                                        <div class="swiper modelOrdersSliders">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="header-profile__orders-table-info-slider-item">
                                                        <div class="header-profile__orders-table-info-slider-content"></div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="header-profile__orders-table-info-slider-item">
                                                        <div class="header-profile__orders-table-info-slider-content"></div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="header-profile__orders-table-info-slider-item">
                                                        <div class="header-profile__orders-table-info-slider-content"></div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="header-profile__orders-table-info-slider-item">
                                                        <div class="header-profile__orders-table-info-slider-content"></div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="header-profile__orders-table-info-slider-item">
                                                        <div class="header-profile__orders-table-info-slider-content"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-sliders">
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-profile__orders-table-info-text">
                            <p>в процессе исполнения</p>
                        </div>
                    </div>
                </li>
                <li class="header-profile__orders-table-item">
                    <div class="header-profile__orders-table-item-number">
                        <div class="header-profile__orders-table-item-number-date">23.08.22</div>
                        <div class="header-profile__orders-table-item-number-id">№ 144 - 234 -4568</div>
                    </div>
                    <div class="header-profile__orders-table-info">
                        <button class="header-profile__orders-table-info-btn" type="button" data-bs-toggle="modal" data-bs-target="#profileOrdersModel-1"><p>Подробнее</p></button>
                        <div class="modal fade" id="profileOrdersModel-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content header-profile__orders-table-info-model">
                                    <button type="button" class="btn-close header-profile__orders-table-info-close" data-bs-dismiss="modal" aria-label="Close">
                                        <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.3281 22.3296L40.2735 40.275" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M22.1313 40.4727L40.4712 22.1328" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>

                                    </button>
                                    <div class="header-profile__orders-table-info-title">№ 144 - 234 -4568 </div>
                                    <ul class="header-profile__orders-table-info-table">
                                        <li class="header-profile__orders-table-info-table-item">
                                            <div class="header-profile__orders-table-info-table-title">Получатель:</div>
                                            <div class="header-profile__orders-table-info-table-text">Алексей Алексеев</div>
                                        </li>
                                        <li class="header-profile__orders-table-info-table-item">
                                            <div class="header-profile__orders-table-info-table-title">Время доставки:</div>
                                            <div class="header-profile__orders-table-info-table-text">18:20-19:00</div>
                                        </li>
                                        <li class="header-profile__orders-table-info-table-item">
                                            <div class="header-profile__orders-table-info-table-title">Адрес доставки:</div>
                                            <div class="header-profile__orders-table-info-table-text">г. Москва, ул Круглова
                                                дом 56, кв 20</div>
                                        </li>
                                        <li class="header-profile__orders-table-info-table-item">
                                            <div class="header-profile__orders-table-info-table-title">Дата доставки:</div>
                                            <div class="header-profile__orders-table-info-table-text">01.11.2021</div>
                                        </li>
                                        <li class="header-profile__orders-table-info-table-item">
                                            <div class="header-profile__orders-table-info-table-title">Номер телефона получателя:</div>
                                            <div class="header-profile__orders-table-info-table-text">+7 (999) 456-67-80</div>
                                        </li>
                                    </ul>
                                    <div class="header-profile__orders-table-info-input">
                                        <input type="text" placeholder="Текст" value="С днем рождения!">
                                    </div>
                                    <ul class="header-profile__orders-table-info-list">
                                        <li class="header-profile__orders-table-info-list-item">
                                            <div class="header-profile__orders-table-info-list-img"><svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 20.575C0 21.9144 1.09031 23 2.42501 23H20.575C21.9144 23 23 21.9097 23 20.575V2.42501C23 1.08561 21.9097 0 20.575 0H2.42501C1.08561 0 0 1.09031 0 2.42501V20.575ZM20.575 21.8486H2.42501C1.72476 21.8486 1.15141 21.2752 1.15141 20.575V17.5437L5.51267 13.1825L9.23948 16.9093C9.46506 17.1349 9.82693 17.1349 10.0525 16.9093L16.7824 10.1794L21.8486 15.2456V20.575C21.8486 21.2752 21.2752 21.8486 20.575 21.8486ZM2.42501 1.15141H20.575C21.2752 1.15141 21.8486 1.72476 21.8486 2.42501V13.6148L17.1866 8.9575C16.961 8.73192 16.5991 8.73192 16.3735 8.9575L9.64365 15.6874L5.91684 11.9606C5.69125 11.735 5.32938 11.735 5.1038 11.9606L1.15141 15.913V2.42501C1.15141 1.72476 1.72476 1.15141 2.42501 1.15141Z" fill="#656565"/>
                                                    <path d="M7.12904 9.2161C8.74572 9.2161 10.0569 7.9002 10.0569 6.28822C10.0569 4.67625 8.74102 3.36035 7.12904 3.36035C5.51707 3.36035 4.20117 4.67625 4.20117 6.28822C4.20117 7.9002 5.51237 9.2161 7.12904 9.2161ZM7.12904 4.51176C8.11127 4.51176 8.9055 5.3107 8.9055 6.28822C8.9055 7.26575 8.10657 8.06469 7.12904 8.06469C6.15152 8.06469 5.35258 7.26575 5.35258 6.28822C5.35258 5.3107 6.14682 4.51176 7.12904 4.51176Z" fill="#656565"/>
                                                </svg>
                                            </div>
                                            <div class="header-profile__orders-table-info-list-text">
                                                <div class="header-profile__orders-table-info-list-text-title">Кустовая роза <br> белая</div>
                                                <div class="header-profile__orders-table-info-list-text-price">
                                                    <div class="header-profile__orders-table-info-list-text-price-sum">2990₽</div>
                                                    <div class="header-profile__orders-table-info-list-text-price-icon"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.7109 1.875H10.3594V1.05469C10.3594 0.473133 9.88624 0 9.30469 0C8.72313 0 8.25 0.473133 8.25 1.05469V1.34262C8.25 1.70693 8.00536 2.03128 7.65504 2.13136L7.3125 2.22923V2.22656C7.3125 2.03241 7.15509 1.875 6.96094 1.875H5.55469C5.36053 1.875 5.20312 2.03241 5.20312 2.22656V3.79688H1.05469C0.473133 3.79688 0 4.27001 0 4.85156V11.6484C0 11.7781 0.0713672 11.8972 0.185672 11.9584C0.237656 11.9862 0.294656 12 0.351539 12C0.419742 12 0.487758 11.9802 0.546562 11.9409L1.86427 11.0625H8.55469C9.13624 11.0625 9.60938 10.5894 9.60938 10.0078V6.32812H10.7109C11.4217 6.32812 12 5.74985 12 5.03906V3.16406C12 2.45327 11.4217 1.875 10.7109 1.875ZM5.90625 2.57812H6.60938V5.625H5.90625V2.57812ZM8.90625 10.0078C8.90625 10.2017 8.74854 10.3594 8.55469 10.3594H1.75781C1.68841 10.3594 1.62056 10.3799 1.56281 10.4184L0.703125 10.9916V4.85156C0.703125 4.65771 0.860836 4.5 1.05469 4.5H5.20312V5.97656C5.20312 6.17072 5.36053 6.32812 5.55469 6.32812H6.96094C7.14155 6.32812 7.29019 6.19186 7.31006 6.01657C7.62326 6.2163 7.99151 6.32812 8.37448 6.32812H8.90625V10.0078ZM11.2969 5.03906C11.2969 5.36215 11.034 5.625 10.7109 5.625H8.37448C7.94702 5.625 7.54781 5.40935 7.3125 5.05673V2.96051L7.84819 2.80746C8.49876 2.62158 8.95312 2.01921 8.95312 1.34262V1.05469C8.95312 0.860836 9.11084 0.703125 9.30469 0.703125C9.49854 0.703125 9.65625 0.860836 9.65625 1.05469V2.22656C9.65625 2.42072 9.81366 2.57812 10.0078 2.57812H10.7109C11.034 2.57812 11.2969 2.84098 11.2969 3.16406V5.03906Z" fill="white"/>
                                                            <path d="M1.75781 6.60938H4.10156C4.29572 6.60938 4.45312 6.45197 4.45312 6.25781C4.45312 6.06366 4.29572 5.90625 4.10156 5.90625H1.75781C1.56366 5.90625 1.40625 6.06366 1.40625 6.25781C1.40625 6.45197 1.56366 6.60938 1.75781 6.60938Z" fill="white"/>
                                                            <path d="M7.85156 7.3125H1.75781C1.56366 7.3125 1.40625 7.46991 1.40625 7.66406C1.40625 7.85822 1.56366 8.01562 1.75781 8.01562H7.85156C8.04572 8.01562 8.20312 7.85822 8.20312 7.66406C8.20312 7.46991 8.04572 7.3125 7.85156 7.3125Z" fill="white"/>
                                                            <path d="M7.85156 8.71875H1.75781C1.56366 8.71875 1.40625 8.87616 1.40625 9.07031C1.40625 9.26447 1.56366 9.42188 1.75781 9.42188H7.85156C8.04572 9.42188 8.20312 9.26447 8.20312 9.07031C8.20312 8.87616 8.04572 8.71875 7.85156 8.71875Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="header-profile__orders-table-info-list-item">
                                            <div class="header-profile__orders-table-info-list-img"><svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 20.575C0 21.9144 1.09031 23 2.42501 23H20.575C21.9144 23 23 21.9097 23 20.575V2.42501C23 1.08561 21.9097 0 20.575 0H2.42501C1.08561 0 0 1.09031 0 2.42501V20.575ZM20.575 21.8486H2.42501C1.72476 21.8486 1.15141 21.2752 1.15141 20.575V17.5437L5.51267 13.1825L9.23948 16.9093C9.46506 17.1349 9.82693 17.1349 10.0525 16.9093L16.7824 10.1794L21.8486 15.2456V20.575C21.8486 21.2752 21.2752 21.8486 20.575 21.8486ZM2.42501 1.15141H20.575C21.2752 1.15141 21.8486 1.72476 21.8486 2.42501V13.6148L17.1866 8.9575C16.961 8.73192 16.5991 8.73192 16.3735 8.9575L9.64365 15.6874L5.91684 11.9606C5.69125 11.735 5.32938 11.735 5.1038 11.9606L1.15141 15.913V2.42501C1.15141 1.72476 1.72476 1.15141 2.42501 1.15141Z" fill="#656565"/>
                                                    <path d="M7.12904 9.2161C8.74572 9.2161 10.0569 7.9002 10.0569 6.28822C10.0569 4.67625 8.74102 3.36035 7.12904 3.36035C5.51707 3.36035 4.20117 4.67625 4.20117 6.28822C4.20117 7.9002 5.51237 9.2161 7.12904 9.2161ZM7.12904 4.51176C8.11127 4.51176 8.9055 5.3107 8.9055 6.28822C8.9055 7.26575 8.10657 8.06469 7.12904 8.06469C6.15152 8.06469 5.35258 7.26575 5.35258 6.28822C5.35258 5.3107 6.14682 4.51176 7.12904 4.51176Z" fill="#656565"/>
                                                </svg>
                                            </div>
                                            <div class="header-profile__orders-table-info-list-text">
                                                <div class="header-profile__orders-table-info-list-text-title">Кустовая роза <br> белая</div>
                                                <div class="header-profile__orders-table-info-list-text-price">
                                                    <div class="header-profile__orders-table-info-list-text-price-sum">2990₽</div>
                                                    <div class="header-profile__orders-table-info-list-text-price-icon"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.7109 1.875H10.3594V1.05469C10.3594 0.473133 9.88624 0 9.30469 0C8.72313 0 8.25 0.473133 8.25 1.05469V1.34262C8.25 1.70693 8.00536 2.03128 7.65504 2.13136L7.3125 2.22923V2.22656C7.3125 2.03241 7.15509 1.875 6.96094 1.875H5.55469C5.36053 1.875 5.20312 2.03241 5.20312 2.22656V3.79688H1.05469C0.473133 3.79688 0 4.27001 0 4.85156V11.6484C0 11.7781 0.0713672 11.8972 0.185672 11.9584C0.237656 11.9862 0.294656 12 0.351539 12C0.419742 12 0.487758 11.9802 0.546562 11.9409L1.86427 11.0625H8.55469C9.13624 11.0625 9.60938 10.5894 9.60938 10.0078V6.32812H10.7109C11.4217 6.32812 12 5.74985 12 5.03906V3.16406C12 2.45327 11.4217 1.875 10.7109 1.875ZM5.90625 2.57812H6.60938V5.625H5.90625V2.57812ZM8.90625 10.0078C8.90625 10.2017 8.74854 10.3594 8.55469 10.3594H1.75781C1.68841 10.3594 1.62056 10.3799 1.56281 10.4184L0.703125 10.9916V4.85156C0.703125 4.65771 0.860836 4.5 1.05469 4.5H5.20312V5.97656C5.20312 6.17072 5.36053 6.32812 5.55469 6.32812H6.96094C7.14155 6.32812 7.29019 6.19186 7.31006 6.01657C7.62326 6.2163 7.99151 6.32812 8.37448 6.32812H8.90625V10.0078ZM11.2969 5.03906C11.2969 5.36215 11.034 5.625 10.7109 5.625H8.37448C7.94702 5.625 7.54781 5.40935 7.3125 5.05673V2.96051L7.84819 2.80746C8.49876 2.62158 8.95312 2.01921 8.95312 1.34262V1.05469C8.95312 0.860836 9.11084 0.703125 9.30469 0.703125C9.49854 0.703125 9.65625 0.860836 9.65625 1.05469V2.22656C9.65625 2.42072 9.81366 2.57812 10.0078 2.57812H10.7109C11.034 2.57812 11.2969 2.84098 11.2969 3.16406V5.03906Z" fill="white"/>
                                                            <path d="M1.75781 6.60938H4.10156C4.29572 6.60938 4.45312 6.45197 4.45312 6.25781C4.45312 6.06366 4.29572 5.90625 4.10156 5.90625H1.75781C1.56366 5.90625 1.40625 6.06366 1.40625 6.25781C1.40625 6.45197 1.56366 6.60938 1.75781 6.60938Z" fill="white"/>
                                                            <path d="M7.85156 7.3125H1.75781C1.56366 7.3125 1.40625 7.46991 1.40625 7.66406C1.40625 7.85822 1.56366 8.01562 1.75781 8.01562H7.85156C8.04572 8.01562 8.20312 7.85822 8.20312 7.66406C8.20312 7.46991 8.04572 7.3125 7.85156 7.3125Z" fill="white"/>
                                                            <path d="M7.85156 8.71875H1.75781C1.56366 8.71875 1.40625 8.87616 1.40625 9.07031C1.40625 9.26447 1.56366 9.42188 1.75781 9.42188H7.85156C8.04572 9.42188 8.20312 9.26447 8.20312 9.07031C8.20312 8.87616 8.04572 8.71875 7.85156 8.71875Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="header-profile__orders-table-info-list-item">
                                            <div class="header-profile__orders-table-info-list-img"><svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 20.575C0 21.9144 1.09031 23 2.42501 23H20.575C21.9144 23 23 21.9097 23 20.575V2.42501C23 1.08561 21.9097 0 20.575 0H2.42501C1.08561 0 0 1.09031 0 2.42501V20.575ZM20.575 21.8486H2.42501C1.72476 21.8486 1.15141 21.2752 1.15141 20.575V17.5437L5.51267 13.1825L9.23948 16.9093C9.46506 17.1349 9.82693 17.1349 10.0525 16.9093L16.7824 10.1794L21.8486 15.2456V20.575C21.8486 21.2752 21.2752 21.8486 20.575 21.8486ZM2.42501 1.15141H20.575C21.2752 1.15141 21.8486 1.72476 21.8486 2.42501V13.6148L17.1866 8.9575C16.961 8.73192 16.5991 8.73192 16.3735 8.9575L9.64365 15.6874L5.91684 11.9606C5.69125 11.735 5.32938 11.735 5.1038 11.9606L1.15141 15.913V2.42501C1.15141 1.72476 1.72476 1.15141 2.42501 1.15141Z" fill="#656565"/>
                                                    <path d="M7.12904 9.2161C8.74572 9.2161 10.0569 7.9002 10.0569 6.28822C10.0569 4.67625 8.74102 3.36035 7.12904 3.36035C5.51707 3.36035 4.20117 4.67625 4.20117 6.28822C4.20117 7.9002 5.51237 9.2161 7.12904 9.2161ZM7.12904 4.51176C8.11127 4.51176 8.9055 5.3107 8.9055 6.28822C8.9055 7.26575 8.10657 8.06469 7.12904 8.06469C6.15152 8.06469 5.35258 7.26575 5.35258 6.28822C5.35258 5.3107 6.14682 4.51176 7.12904 4.51176Z" fill="#656565"/>
                                                </svg>
                                            </div>
                                            <div class="header-profile__orders-table-info-list-text">
                                                <div class="header-profile__orders-table-info-list-text-title">Кустовая роза <br> белая</div>
                                                <div class="header-profile__orders-table-info-list-text-price">
                                                    <div class="header-profile__orders-table-info-list-text-price-sum">2990₽</div>
                                                    <div class="header-profile__orders-table-info-list-text-price-icon"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.7109 1.875H10.3594V1.05469C10.3594 0.473133 9.88624 0 9.30469 0C8.72313 0 8.25 0.473133 8.25 1.05469V1.34262C8.25 1.70693 8.00536 2.03128 7.65504 2.13136L7.3125 2.22923V2.22656C7.3125 2.03241 7.15509 1.875 6.96094 1.875H5.55469C5.36053 1.875 5.20312 2.03241 5.20312 2.22656V3.79688H1.05469C0.473133 3.79688 0 4.27001 0 4.85156V11.6484C0 11.7781 0.0713672 11.8972 0.185672 11.9584C0.237656 11.9862 0.294656 12 0.351539 12C0.419742 12 0.487758 11.9802 0.546562 11.9409L1.86427 11.0625H8.55469C9.13624 11.0625 9.60938 10.5894 9.60938 10.0078V6.32812H10.7109C11.4217 6.32812 12 5.74985 12 5.03906V3.16406C12 2.45327 11.4217 1.875 10.7109 1.875ZM5.90625 2.57812H6.60938V5.625H5.90625V2.57812ZM8.90625 10.0078C8.90625 10.2017 8.74854 10.3594 8.55469 10.3594H1.75781C1.68841 10.3594 1.62056 10.3799 1.56281 10.4184L0.703125 10.9916V4.85156C0.703125 4.65771 0.860836 4.5 1.05469 4.5H5.20312V5.97656C5.20312 6.17072 5.36053 6.32812 5.55469 6.32812H6.96094C7.14155 6.32812 7.29019 6.19186 7.31006 6.01657C7.62326 6.2163 7.99151 6.32812 8.37448 6.32812H8.90625V10.0078ZM11.2969 5.03906C11.2969 5.36215 11.034 5.625 10.7109 5.625H8.37448C7.94702 5.625 7.54781 5.40935 7.3125 5.05673V2.96051L7.84819 2.80746C8.49876 2.62158 8.95312 2.01921 8.95312 1.34262V1.05469C8.95312 0.860836 9.11084 0.703125 9.30469 0.703125C9.49854 0.703125 9.65625 0.860836 9.65625 1.05469V2.22656C9.65625 2.42072 9.81366 2.57812 10.0078 2.57812H10.7109C11.034 2.57812 11.2969 2.84098 11.2969 3.16406V5.03906Z" fill="white"/>
                                                            <path d="M1.75781 6.60938H4.10156C4.29572 6.60938 4.45312 6.45197 4.45312 6.25781C4.45312 6.06366 4.29572 5.90625 4.10156 5.90625H1.75781C1.56366 5.90625 1.40625 6.06366 1.40625 6.25781C1.40625 6.45197 1.56366 6.60938 1.75781 6.60938Z" fill="white"/>
                                                            <path d="M7.85156 7.3125H1.75781C1.56366 7.3125 1.40625 7.46991 1.40625 7.66406C1.40625 7.85822 1.56366 8.01562 1.75781 8.01562H7.85156C8.04572 8.01562 8.20312 7.85822 8.20312 7.66406C8.20312 7.46991 8.04572 7.3125 7.85156 7.3125Z" fill="white"/>
                                                            <path d="M7.85156 8.71875H1.75781C1.56366 8.71875 1.40625 8.87616 1.40625 9.07031C1.40625 9.26447 1.56366 9.42188 1.75781 9.42188H7.85156C8.04572 9.42188 8.20312 9.26447 8.20312 9.07031C8.20312 8.87616 8.04572 8.71875 7.85156 8.71875Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="header-profile__orders-table-info-list-item">
                                            <div class="header-profile__orders-table-info-list-img"><svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 20.575C0 21.9144 1.09031 23 2.42501 23H20.575C21.9144 23 23 21.9097 23 20.575V2.42501C23 1.08561 21.9097 0 20.575 0H2.42501C1.08561 0 0 1.09031 0 2.42501V20.575ZM20.575 21.8486H2.42501C1.72476 21.8486 1.15141 21.2752 1.15141 20.575V17.5437L5.51267 13.1825L9.23948 16.9093C9.46506 17.1349 9.82693 17.1349 10.0525 16.9093L16.7824 10.1794L21.8486 15.2456V20.575C21.8486 21.2752 21.2752 21.8486 20.575 21.8486ZM2.42501 1.15141H20.575C21.2752 1.15141 21.8486 1.72476 21.8486 2.42501V13.6148L17.1866 8.9575C16.961 8.73192 16.5991 8.73192 16.3735 8.9575L9.64365 15.6874L5.91684 11.9606C5.69125 11.735 5.32938 11.735 5.1038 11.9606L1.15141 15.913V2.42501C1.15141 1.72476 1.72476 1.15141 2.42501 1.15141Z" fill="#656565"/>
                                                    <path d="M7.12904 9.2161C8.74572 9.2161 10.0569 7.9002 10.0569 6.28822C10.0569 4.67625 8.74102 3.36035 7.12904 3.36035C5.51707 3.36035 4.20117 4.67625 4.20117 6.28822C4.20117 7.9002 5.51237 9.2161 7.12904 9.2161ZM7.12904 4.51176C8.11127 4.51176 8.9055 5.3107 8.9055 6.28822C8.9055 7.26575 8.10657 8.06469 7.12904 8.06469C6.15152 8.06469 5.35258 7.26575 5.35258 6.28822C5.35258 5.3107 6.14682 4.51176 7.12904 4.51176Z" fill="#656565"/>
                                                </svg>
                                            </div>
                                            <div class="header-profile__orders-table-info-list-text">
                                                <div class="header-profile__orders-table-info-list-text-title">Кустовая роза <br> белая</div>
                                                <div class="header-profile__orders-table-info-list-text-price">
                                                    <div class="header-profile__orders-table-info-list-text-price-sum">2990₽</div>
                                                    <div class="header-profile__orders-table-info-list-text-price-icon"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.7109 1.875H10.3594V1.05469C10.3594 0.473133 9.88624 0 9.30469 0C8.72313 0 8.25 0.473133 8.25 1.05469V1.34262C8.25 1.70693 8.00536 2.03128 7.65504 2.13136L7.3125 2.22923V2.22656C7.3125 2.03241 7.15509 1.875 6.96094 1.875H5.55469C5.36053 1.875 5.20312 2.03241 5.20312 2.22656V3.79688H1.05469C0.473133 3.79688 0 4.27001 0 4.85156V11.6484C0 11.7781 0.0713672 11.8972 0.185672 11.9584C0.237656 11.9862 0.294656 12 0.351539 12C0.419742 12 0.487758 11.9802 0.546562 11.9409L1.86427 11.0625H8.55469C9.13624 11.0625 9.60938 10.5894 9.60938 10.0078V6.32812H10.7109C11.4217 6.32812 12 5.74985 12 5.03906V3.16406C12 2.45327 11.4217 1.875 10.7109 1.875ZM5.90625 2.57812H6.60938V5.625H5.90625V2.57812ZM8.90625 10.0078C8.90625 10.2017 8.74854 10.3594 8.55469 10.3594H1.75781C1.68841 10.3594 1.62056 10.3799 1.56281 10.4184L0.703125 10.9916V4.85156C0.703125 4.65771 0.860836 4.5 1.05469 4.5H5.20312V5.97656C5.20312 6.17072 5.36053 6.32812 5.55469 6.32812H6.96094C7.14155 6.32812 7.29019 6.19186 7.31006 6.01657C7.62326 6.2163 7.99151 6.32812 8.37448 6.32812H8.90625V10.0078ZM11.2969 5.03906C11.2969 5.36215 11.034 5.625 10.7109 5.625H8.37448C7.94702 5.625 7.54781 5.40935 7.3125 5.05673V2.96051L7.84819 2.80746C8.49876 2.62158 8.95312 2.01921 8.95312 1.34262V1.05469C8.95312 0.860836 9.11084 0.703125 9.30469 0.703125C9.49854 0.703125 9.65625 0.860836 9.65625 1.05469V2.22656C9.65625 2.42072 9.81366 2.57812 10.0078 2.57812H10.7109C11.034 2.57812 11.2969 2.84098 11.2969 3.16406V5.03906Z" fill="white"/>
                                                            <path d="M1.75781 6.60938H4.10156C4.29572 6.60938 4.45312 6.45197 4.45312 6.25781C4.45312 6.06366 4.29572 5.90625 4.10156 5.90625H1.75781C1.56366 5.90625 1.40625 6.06366 1.40625 6.25781C1.40625 6.45197 1.56366 6.60938 1.75781 6.60938Z" fill="white"/>
                                                            <path d="M7.85156 7.3125H1.75781C1.56366 7.3125 1.40625 7.46991 1.40625 7.66406C1.40625 7.85822 1.56366 8.01562 1.75781 8.01562H7.85156C8.04572 8.01562 8.20312 7.85822 8.20312 7.66406C8.20312 7.46991 8.04572 7.3125 7.85156 7.3125Z" fill="white"/>
                                                            <path d="M7.85156 8.71875H1.75781C1.56366 8.71875 1.40625 8.87616 1.40625 9.07031C1.40625 9.26447 1.56366 9.42188 1.75781 9.42188H7.85156C8.04572 9.42188 8.20312 9.26447 8.20312 9.07031C8.20312 8.87616 8.04572 8.71875 7.85156 8.71875Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="header-profile__orders-table-info-titles">Фото готового товара</div>
                                    <div class="header-profile__orders-table-info-slider">
                                        <div class="swiper modelOrdersSliders">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="header-profile__orders-table-info-slider-item">
                                                        <div class="header-profile__orders-table-info-slider-content"></div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="header-profile__orders-table-info-slider-item">
                                                        <div class="header-profile__orders-table-info-slider-content"></div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="header-profile__orders-table-info-slider-item">
                                                        <div class="header-profile__orders-table-info-slider-content"></div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="header-profile__orders-table-info-slider-item">
                                                        <div class="header-profile__orders-table-info-slider-content"></div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="header-profile__orders-table-info-slider-item">
                                                        <div class="header-profile__orders-table-info-slider-content"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-sliders">
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-profile__orders-table-info-text">
                            <p>в процессе исполнения</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="header-profile__orders-table">
            <div class="header-profile__orders-table-title">Предыдущие заказы</div>
            <div class="header-profile__orders-table-date">
                <div class="header-profile__orders-table-date-day">Дата</div>
                <div class="header-profile__orders-table-date-number">№ заказа</div>
            </div>
            <ul class="header-profile__orders-table-list">
                <li class="header-profile__orders-table-item">
                    <div class="header-profile__orders-table-item-number">
                        <div class="header-profile__orders-table-item-number-date">23.08.22</div>
                        <div class="header-profile__orders-table-item-number-id">№ 144 - 234 -4568</div>
                    </div>
                    <div class="header-profile__orders-table-info">
                        <button class="header-profile__orders-table-info-btn" type="button" data-bs-toggle="modal" data-bs-target="#profileOrdersModel-1"><p>Подробнее</p></button>
                        <div class="modal fade" id="profileOrdersModel-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content header-profile__orders-table-info-model">
                                    <button type="button" class="btn-close header-profile__orders-table-info-close" data-bs-dismiss="modal" aria-label="Close">
                                        <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.3281 22.3296L40.2735 40.275" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M22.1313 40.4727L40.4712 22.1328" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>

                                    </button>
                                    <div class="header-profile__orders-table-info-title">№ 144 - 234 -4568 </div>
                                    <ul class="header-profile__orders-table-info-table">
                                        <li class="header-profile__orders-table-info-table-item">
                                            <div class="header-profile__orders-table-info-table-title">Получатель:</div>
                                            <div class="header-profile__orders-table-info-table-text">Алексей Алексеев</div>
                                        </li>
                                        <li class="header-profile__orders-table-info-table-item">
                                            <div class="header-profile__orders-table-info-table-title">Время доставки:</div>
                                            <div class="header-profile__orders-table-info-table-text">18:20-19:00</div>
                                        </li>
                                        <li class="header-profile__orders-table-info-table-item">
                                            <div class="header-profile__orders-table-info-table-title">Адрес доставки:</div>
                                            <div class="header-profile__orders-table-info-table-text">г. Москва, ул Круглова
                                                дом 56, кв 20</div>
                                        </li>
                                        <li class="header-profile__orders-table-info-table-item">
                                            <div class="header-profile__orders-table-info-table-title">Дата доставки:</div>
                                            <div class="header-profile__orders-table-info-table-text">01.11.2021</div>
                                        </li>
                                        <li class="header-profile__orders-table-info-table-item">
                                            <div class="header-profile__orders-table-info-table-title">Номер телефона получателя:</div>
                                            <div class="header-profile__orders-table-info-table-text">+7 (999) 456-67-80</div>
                                        </li>
                                    </ul>
                                    <div class="header-profile__orders-table-info-input">
                                        <input type="text" placeholder="Текст" value="С днем рождения!">
                                    </div>
                                    <ul class="header-profile__orders-table-info-list">
                                        <li class="header-profile__orders-table-info-list-item">
                                            <div class="header-profile__orders-table-info-list-img"><svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 20.575C0 21.9144 1.09031 23 2.42501 23H20.575C21.9144 23 23 21.9097 23 20.575V2.42501C23 1.08561 21.9097 0 20.575 0H2.42501C1.08561 0 0 1.09031 0 2.42501V20.575ZM20.575 21.8486H2.42501C1.72476 21.8486 1.15141 21.2752 1.15141 20.575V17.5437L5.51267 13.1825L9.23948 16.9093C9.46506 17.1349 9.82693 17.1349 10.0525 16.9093L16.7824 10.1794L21.8486 15.2456V20.575C21.8486 21.2752 21.2752 21.8486 20.575 21.8486ZM2.42501 1.15141H20.575C21.2752 1.15141 21.8486 1.72476 21.8486 2.42501V13.6148L17.1866 8.9575C16.961 8.73192 16.5991 8.73192 16.3735 8.9575L9.64365 15.6874L5.91684 11.9606C5.69125 11.735 5.32938 11.735 5.1038 11.9606L1.15141 15.913V2.42501C1.15141 1.72476 1.72476 1.15141 2.42501 1.15141Z" fill="#656565"/>
                                                    <path d="M7.12904 9.2161C8.74572 9.2161 10.0569 7.9002 10.0569 6.28822C10.0569 4.67625 8.74102 3.36035 7.12904 3.36035C5.51707 3.36035 4.20117 4.67625 4.20117 6.28822C4.20117 7.9002 5.51237 9.2161 7.12904 9.2161ZM7.12904 4.51176C8.11127 4.51176 8.9055 5.3107 8.9055 6.28822C8.9055 7.26575 8.10657 8.06469 7.12904 8.06469C6.15152 8.06469 5.35258 7.26575 5.35258 6.28822C5.35258 5.3107 6.14682 4.51176 7.12904 4.51176Z" fill="#656565"/>
                                                </svg>
                                            </div>
                                            <div class="header-profile__orders-table-info-list-text">
                                                <div class="header-profile__orders-table-info-list-text-title">Кустовая роза <br> белая</div>
                                                <div class="header-profile__orders-table-info-list-text-price">
                                                    <div class="header-profile__orders-table-info-list-text-price-sum">2990₽</div>
                                                    <div class="header-profile__orders-table-info-list-text-price-icon"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.7109 1.875H10.3594V1.05469C10.3594 0.473133 9.88624 0 9.30469 0C8.72313 0 8.25 0.473133 8.25 1.05469V1.34262C8.25 1.70693 8.00536 2.03128 7.65504 2.13136L7.3125 2.22923V2.22656C7.3125 2.03241 7.15509 1.875 6.96094 1.875H5.55469C5.36053 1.875 5.20312 2.03241 5.20312 2.22656V3.79688H1.05469C0.473133 3.79688 0 4.27001 0 4.85156V11.6484C0 11.7781 0.0713672 11.8972 0.185672 11.9584C0.237656 11.9862 0.294656 12 0.351539 12C0.419742 12 0.487758 11.9802 0.546562 11.9409L1.86427 11.0625H8.55469C9.13624 11.0625 9.60938 10.5894 9.60938 10.0078V6.32812H10.7109C11.4217 6.32812 12 5.74985 12 5.03906V3.16406C12 2.45327 11.4217 1.875 10.7109 1.875ZM5.90625 2.57812H6.60938V5.625H5.90625V2.57812ZM8.90625 10.0078C8.90625 10.2017 8.74854 10.3594 8.55469 10.3594H1.75781C1.68841 10.3594 1.62056 10.3799 1.56281 10.4184L0.703125 10.9916V4.85156C0.703125 4.65771 0.860836 4.5 1.05469 4.5H5.20312V5.97656C5.20312 6.17072 5.36053 6.32812 5.55469 6.32812H6.96094C7.14155 6.32812 7.29019 6.19186 7.31006 6.01657C7.62326 6.2163 7.99151 6.32812 8.37448 6.32812H8.90625V10.0078ZM11.2969 5.03906C11.2969 5.36215 11.034 5.625 10.7109 5.625H8.37448C7.94702 5.625 7.54781 5.40935 7.3125 5.05673V2.96051L7.84819 2.80746C8.49876 2.62158 8.95312 2.01921 8.95312 1.34262V1.05469C8.95312 0.860836 9.11084 0.703125 9.30469 0.703125C9.49854 0.703125 9.65625 0.860836 9.65625 1.05469V2.22656C9.65625 2.42072 9.81366 2.57812 10.0078 2.57812H10.7109C11.034 2.57812 11.2969 2.84098 11.2969 3.16406V5.03906Z" fill="white"/>
                                                            <path d="M1.75781 6.60938H4.10156C4.29572 6.60938 4.45312 6.45197 4.45312 6.25781C4.45312 6.06366 4.29572 5.90625 4.10156 5.90625H1.75781C1.56366 5.90625 1.40625 6.06366 1.40625 6.25781C1.40625 6.45197 1.56366 6.60938 1.75781 6.60938Z" fill="white"/>
                                                            <path d="M7.85156 7.3125H1.75781C1.56366 7.3125 1.40625 7.46991 1.40625 7.66406C1.40625 7.85822 1.56366 8.01562 1.75781 8.01562H7.85156C8.04572 8.01562 8.20312 7.85822 8.20312 7.66406C8.20312 7.46991 8.04572 7.3125 7.85156 7.3125Z" fill="white"/>
                                                            <path d="M7.85156 8.71875H1.75781C1.56366 8.71875 1.40625 8.87616 1.40625 9.07031C1.40625 9.26447 1.56366 9.42188 1.75781 9.42188H7.85156C8.04572 9.42188 8.20312 9.26447 8.20312 9.07031C8.20312 8.87616 8.04572 8.71875 7.85156 8.71875Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="header-profile__orders-table-info-list-item">
                                            <div class="header-profile__orders-table-info-list-img"><svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 20.575C0 21.9144 1.09031 23 2.42501 23H20.575C21.9144 23 23 21.9097 23 20.575V2.42501C23 1.08561 21.9097 0 20.575 0H2.42501C1.08561 0 0 1.09031 0 2.42501V20.575ZM20.575 21.8486H2.42501C1.72476 21.8486 1.15141 21.2752 1.15141 20.575V17.5437L5.51267 13.1825L9.23948 16.9093C9.46506 17.1349 9.82693 17.1349 10.0525 16.9093L16.7824 10.1794L21.8486 15.2456V20.575C21.8486 21.2752 21.2752 21.8486 20.575 21.8486ZM2.42501 1.15141H20.575C21.2752 1.15141 21.8486 1.72476 21.8486 2.42501V13.6148L17.1866 8.9575C16.961 8.73192 16.5991 8.73192 16.3735 8.9575L9.64365 15.6874L5.91684 11.9606C5.69125 11.735 5.32938 11.735 5.1038 11.9606L1.15141 15.913V2.42501C1.15141 1.72476 1.72476 1.15141 2.42501 1.15141Z" fill="#656565"/>
                                                    <path d="M7.12904 9.2161C8.74572 9.2161 10.0569 7.9002 10.0569 6.28822C10.0569 4.67625 8.74102 3.36035 7.12904 3.36035C5.51707 3.36035 4.20117 4.67625 4.20117 6.28822C4.20117 7.9002 5.51237 9.2161 7.12904 9.2161ZM7.12904 4.51176C8.11127 4.51176 8.9055 5.3107 8.9055 6.28822C8.9055 7.26575 8.10657 8.06469 7.12904 8.06469C6.15152 8.06469 5.35258 7.26575 5.35258 6.28822C5.35258 5.3107 6.14682 4.51176 7.12904 4.51176Z" fill="#656565"/>
                                                </svg>
                                            </div>
                                            <div class="header-profile__orders-table-info-list-text">
                                                <div class="header-profile__orders-table-info-list-text-title">Кустовая роза <br> белая</div>
                                                <div class="header-profile__orders-table-info-list-text-price">
                                                    <div class="header-profile__orders-table-info-list-text-price-sum">2990₽</div>
                                                    <div class="header-profile__orders-table-info-list-text-price-icon"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.7109 1.875H10.3594V1.05469C10.3594 0.473133 9.88624 0 9.30469 0C8.72313 0 8.25 0.473133 8.25 1.05469V1.34262C8.25 1.70693 8.00536 2.03128 7.65504 2.13136L7.3125 2.22923V2.22656C7.3125 2.03241 7.15509 1.875 6.96094 1.875H5.55469C5.36053 1.875 5.20312 2.03241 5.20312 2.22656V3.79688H1.05469C0.473133 3.79688 0 4.27001 0 4.85156V11.6484C0 11.7781 0.0713672 11.8972 0.185672 11.9584C0.237656 11.9862 0.294656 12 0.351539 12C0.419742 12 0.487758 11.9802 0.546562 11.9409L1.86427 11.0625H8.55469C9.13624 11.0625 9.60938 10.5894 9.60938 10.0078V6.32812H10.7109C11.4217 6.32812 12 5.74985 12 5.03906V3.16406C12 2.45327 11.4217 1.875 10.7109 1.875ZM5.90625 2.57812H6.60938V5.625H5.90625V2.57812ZM8.90625 10.0078C8.90625 10.2017 8.74854 10.3594 8.55469 10.3594H1.75781C1.68841 10.3594 1.62056 10.3799 1.56281 10.4184L0.703125 10.9916V4.85156C0.703125 4.65771 0.860836 4.5 1.05469 4.5H5.20312V5.97656C5.20312 6.17072 5.36053 6.32812 5.55469 6.32812H6.96094C7.14155 6.32812 7.29019 6.19186 7.31006 6.01657C7.62326 6.2163 7.99151 6.32812 8.37448 6.32812H8.90625V10.0078ZM11.2969 5.03906C11.2969 5.36215 11.034 5.625 10.7109 5.625H8.37448C7.94702 5.625 7.54781 5.40935 7.3125 5.05673V2.96051L7.84819 2.80746C8.49876 2.62158 8.95312 2.01921 8.95312 1.34262V1.05469C8.95312 0.860836 9.11084 0.703125 9.30469 0.703125C9.49854 0.703125 9.65625 0.860836 9.65625 1.05469V2.22656C9.65625 2.42072 9.81366 2.57812 10.0078 2.57812H10.7109C11.034 2.57812 11.2969 2.84098 11.2969 3.16406V5.03906Z" fill="white"/>
                                                            <path d="M1.75781 6.60938H4.10156C4.29572 6.60938 4.45312 6.45197 4.45312 6.25781C4.45312 6.06366 4.29572 5.90625 4.10156 5.90625H1.75781C1.56366 5.90625 1.40625 6.06366 1.40625 6.25781C1.40625 6.45197 1.56366 6.60938 1.75781 6.60938Z" fill="white"/>
                                                            <path d="M7.85156 7.3125H1.75781C1.56366 7.3125 1.40625 7.46991 1.40625 7.66406C1.40625 7.85822 1.56366 8.01562 1.75781 8.01562H7.85156C8.04572 8.01562 8.20312 7.85822 8.20312 7.66406C8.20312 7.46991 8.04572 7.3125 7.85156 7.3125Z" fill="white"/>
                                                            <path d="M7.85156 8.71875H1.75781C1.56366 8.71875 1.40625 8.87616 1.40625 9.07031C1.40625 9.26447 1.56366 9.42188 1.75781 9.42188H7.85156C8.04572 9.42188 8.20312 9.26447 8.20312 9.07031C8.20312 8.87616 8.04572 8.71875 7.85156 8.71875Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="header-profile__orders-table-info-list-item">
                                            <div class="header-profile__orders-table-info-list-img"><svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 20.575C0 21.9144 1.09031 23 2.42501 23H20.575C21.9144 23 23 21.9097 23 20.575V2.42501C23 1.08561 21.9097 0 20.575 0H2.42501C1.08561 0 0 1.09031 0 2.42501V20.575ZM20.575 21.8486H2.42501C1.72476 21.8486 1.15141 21.2752 1.15141 20.575V17.5437L5.51267 13.1825L9.23948 16.9093C9.46506 17.1349 9.82693 17.1349 10.0525 16.9093L16.7824 10.1794L21.8486 15.2456V20.575C21.8486 21.2752 21.2752 21.8486 20.575 21.8486ZM2.42501 1.15141H20.575C21.2752 1.15141 21.8486 1.72476 21.8486 2.42501V13.6148L17.1866 8.9575C16.961 8.73192 16.5991 8.73192 16.3735 8.9575L9.64365 15.6874L5.91684 11.9606C5.69125 11.735 5.32938 11.735 5.1038 11.9606L1.15141 15.913V2.42501C1.15141 1.72476 1.72476 1.15141 2.42501 1.15141Z" fill="#656565"/>
                                                    <path d="M7.12904 9.2161C8.74572 9.2161 10.0569 7.9002 10.0569 6.28822C10.0569 4.67625 8.74102 3.36035 7.12904 3.36035C5.51707 3.36035 4.20117 4.67625 4.20117 6.28822C4.20117 7.9002 5.51237 9.2161 7.12904 9.2161ZM7.12904 4.51176C8.11127 4.51176 8.9055 5.3107 8.9055 6.28822C8.9055 7.26575 8.10657 8.06469 7.12904 8.06469C6.15152 8.06469 5.35258 7.26575 5.35258 6.28822C5.35258 5.3107 6.14682 4.51176 7.12904 4.51176Z" fill="#656565"/>
                                                </svg>
                                            </div>
                                            <div class="header-profile__orders-table-info-list-text">
                                                <div class="header-profile__orders-table-info-list-text-title">Кустовая роза <br> белая</div>
                                                <div class="header-profile__orders-table-info-list-text-price">
                                                    <div class="header-profile__orders-table-info-list-text-price-sum">2990₽</div>
                                                    <div class="header-profile__orders-table-info-list-text-price-icon"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.7109 1.875H10.3594V1.05469C10.3594 0.473133 9.88624 0 9.30469 0C8.72313 0 8.25 0.473133 8.25 1.05469V1.34262C8.25 1.70693 8.00536 2.03128 7.65504 2.13136L7.3125 2.22923V2.22656C7.3125 2.03241 7.15509 1.875 6.96094 1.875H5.55469C5.36053 1.875 5.20312 2.03241 5.20312 2.22656V3.79688H1.05469C0.473133 3.79688 0 4.27001 0 4.85156V11.6484C0 11.7781 0.0713672 11.8972 0.185672 11.9584C0.237656 11.9862 0.294656 12 0.351539 12C0.419742 12 0.487758 11.9802 0.546562 11.9409L1.86427 11.0625H8.55469C9.13624 11.0625 9.60938 10.5894 9.60938 10.0078V6.32812H10.7109C11.4217 6.32812 12 5.74985 12 5.03906V3.16406C12 2.45327 11.4217 1.875 10.7109 1.875ZM5.90625 2.57812H6.60938V5.625H5.90625V2.57812ZM8.90625 10.0078C8.90625 10.2017 8.74854 10.3594 8.55469 10.3594H1.75781C1.68841 10.3594 1.62056 10.3799 1.56281 10.4184L0.703125 10.9916V4.85156C0.703125 4.65771 0.860836 4.5 1.05469 4.5H5.20312V5.97656C5.20312 6.17072 5.36053 6.32812 5.55469 6.32812H6.96094C7.14155 6.32812 7.29019 6.19186 7.31006 6.01657C7.62326 6.2163 7.99151 6.32812 8.37448 6.32812H8.90625V10.0078ZM11.2969 5.03906C11.2969 5.36215 11.034 5.625 10.7109 5.625H8.37448C7.94702 5.625 7.54781 5.40935 7.3125 5.05673V2.96051L7.84819 2.80746C8.49876 2.62158 8.95312 2.01921 8.95312 1.34262V1.05469C8.95312 0.860836 9.11084 0.703125 9.30469 0.703125C9.49854 0.703125 9.65625 0.860836 9.65625 1.05469V2.22656C9.65625 2.42072 9.81366 2.57812 10.0078 2.57812H10.7109C11.034 2.57812 11.2969 2.84098 11.2969 3.16406V5.03906Z" fill="white"/>
                                                            <path d="M1.75781 6.60938H4.10156C4.29572 6.60938 4.45312 6.45197 4.45312 6.25781C4.45312 6.06366 4.29572 5.90625 4.10156 5.90625H1.75781C1.56366 5.90625 1.40625 6.06366 1.40625 6.25781C1.40625 6.45197 1.56366 6.60938 1.75781 6.60938Z" fill="white"/>
                                                            <path d="M7.85156 7.3125H1.75781C1.56366 7.3125 1.40625 7.46991 1.40625 7.66406C1.40625 7.85822 1.56366 8.01562 1.75781 8.01562H7.85156C8.04572 8.01562 8.20312 7.85822 8.20312 7.66406C8.20312 7.46991 8.04572 7.3125 7.85156 7.3125Z" fill="white"/>
                                                            <path d="M7.85156 8.71875H1.75781C1.56366 8.71875 1.40625 8.87616 1.40625 9.07031C1.40625 9.26447 1.56366 9.42188 1.75781 9.42188H7.85156C8.04572 9.42188 8.20312 9.26447 8.20312 9.07031C8.20312 8.87616 8.04572 8.71875 7.85156 8.71875Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="header-profile__orders-table-info-list-item">
                                            <div class="header-profile__orders-table-info-list-img"><svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 20.575C0 21.9144 1.09031 23 2.42501 23H20.575C21.9144 23 23 21.9097 23 20.575V2.42501C23 1.08561 21.9097 0 20.575 0H2.42501C1.08561 0 0 1.09031 0 2.42501V20.575ZM20.575 21.8486H2.42501C1.72476 21.8486 1.15141 21.2752 1.15141 20.575V17.5437L5.51267 13.1825L9.23948 16.9093C9.46506 17.1349 9.82693 17.1349 10.0525 16.9093L16.7824 10.1794L21.8486 15.2456V20.575C21.8486 21.2752 21.2752 21.8486 20.575 21.8486ZM2.42501 1.15141H20.575C21.2752 1.15141 21.8486 1.72476 21.8486 2.42501V13.6148L17.1866 8.9575C16.961 8.73192 16.5991 8.73192 16.3735 8.9575L9.64365 15.6874L5.91684 11.9606C5.69125 11.735 5.32938 11.735 5.1038 11.9606L1.15141 15.913V2.42501C1.15141 1.72476 1.72476 1.15141 2.42501 1.15141Z" fill="#656565"/>
                                                    <path d="M7.12904 9.2161C8.74572 9.2161 10.0569 7.9002 10.0569 6.28822C10.0569 4.67625 8.74102 3.36035 7.12904 3.36035C5.51707 3.36035 4.20117 4.67625 4.20117 6.28822C4.20117 7.9002 5.51237 9.2161 7.12904 9.2161ZM7.12904 4.51176C8.11127 4.51176 8.9055 5.3107 8.9055 6.28822C8.9055 7.26575 8.10657 8.06469 7.12904 8.06469C6.15152 8.06469 5.35258 7.26575 5.35258 6.28822C5.35258 5.3107 6.14682 4.51176 7.12904 4.51176Z" fill="#656565"/>
                                                </svg>
                                            </div>
                                            <div class="header-profile__orders-table-info-list-text">
                                                <div class="header-profile__orders-table-info-list-text-title">Кустовая роза <br> белая</div>
                                                <div class="header-profile__orders-table-info-list-text-price">
                                                    <div class="header-profile__orders-table-info-list-text-price-sum">2990₽</div>
                                                    <div class="header-profile__orders-table-info-list-text-price-icon"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.7109 1.875H10.3594V1.05469C10.3594 0.473133 9.88624 0 9.30469 0C8.72313 0 8.25 0.473133 8.25 1.05469V1.34262C8.25 1.70693 8.00536 2.03128 7.65504 2.13136L7.3125 2.22923V2.22656C7.3125 2.03241 7.15509 1.875 6.96094 1.875H5.55469C5.36053 1.875 5.20312 2.03241 5.20312 2.22656V3.79688H1.05469C0.473133 3.79688 0 4.27001 0 4.85156V11.6484C0 11.7781 0.0713672 11.8972 0.185672 11.9584C0.237656 11.9862 0.294656 12 0.351539 12C0.419742 12 0.487758 11.9802 0.546562 11.9409L1.86427 11.0625H8.55469C9.13624 11.0625 9.60938 10.5894 9.60938 10.0078V6.32812H10.7109C11.4217 6.32812 12 5.74985 12 5.03906V3.16406C12 2.45327 11.4217 1.875 10.7109 1.875ZM5.90625 2.57812H6.60938V5.625H5.90625V2.57812ZM8.90625 10.0078C8.90625 10.2017 8.74854 10.3594 8.55469 10.3594H1.75781C1.68841 10.3594 1.62056 10.3799 1.56281 10.4184L0.703125 10.9916V4.85156C0.703125 4.65771 0.860836 4.5 1.05469 4.5H5.20312V5.97656C5.20312 6.17072 5.36053 6.32812 5.55469 6.32812H6.96094C7.14155 6.32812 7.29019 6.19186 7.31006 6.01657C7.62326 6.2163 7.99151 6.32812 8.37448 6.32812H8.90625V10.0078ZM11.2969 5.03906C11.2969 5.36215 11.034 5.625 10.7109 5.625H8.37448C7.94702 5.625 7.54781 5.40935 7.3125 5.05673V2.96051L7.84819 2.80746C8.49876 2.62158 8.95312 2.01921 8.95312 1.34262V1.05469C8.95312 0.860836 9.11084 0.703125 9.30469 0.703125C9.49854 0.703125 9.65625 0.860836 9.65625 1.05469V2.22656C9.65625 2.42072 9.81366 2.57812 10.0078 2.57812H10.7109C11.034 2.57812 11.2969 2.84098 11.2969 3.16406V5.03906Z" fill="white"/>
                                                            <path d="M1.75781 6.60938H4.10156C4.29572 6.60938 4.45312 6.45197 4.45312 6.25781C4.45312 6.06366 4.29572 5.90625 4.10156 5.90625H1.75781C1.56366 5.90625 1.40625 6.06366 1.40625 6.25781C1.40625 6.45197 1.56366 6.60938 1.75781 6.60938Z" fill="white"/>
                                                            <path d="M7.85156 7.3125H1.75781C1.56366 7.3125 1.40625 7.46991 1.40625 7.66406C1.40625 7.85822 1.56366 8.01562 1.75781 8.01562H7.85156C8.04572 8.01562 8.20312 7.85822 8.20312 7.66406C8.20312 7.46991 8.04572 7.3125 7.85156 7.3125Z" fill="white"/>
                                                            <path d="M7.85156 8.71875H1.75781C1.56366 8.71875 1.40625 8.87616 1.40625 9.07031C1.40625 9.26447 1.56366 9.42188 1.75781 9.42188H7.85156C8.04572 9.42188 8.20312 9.26447 8.20312 9.07031C8.20312 8.87616 8.04572 8.71875 7.85156 8.71875Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="header-profile__orders-table-info-titles">Фото готового товара</div>
                                    <div class="header-profile__orders-table-info-slider">
                                        <div class="swiper modelOrdersSliders">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="header-profile__orders-table-info-slider-item">
                                                        <div class="header-profile__orders-table-info-slider-content"></div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="header-profile__orders-table-info-slider-item">
                                                        <div class="header-profile__orders-table-info-slider-content"></div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="header-profile__orders-table-info-slider-item">
                                                        <div class="header-profile__orders-table-info-slider-content"></div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="header-profile__orders-table-info-slider-item">
                                                        <div class="header-profile__orders-table-info-slider-content"></div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="header-profile__orders-table-info-slider-item">
                                                        <div class="header-profile__orders-table-info-slider-content"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-sliders">
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-profile__orders-table-info-text">
                            <p>в процессе исполнения</p>
                        </div>
                    </div>
                </li>
                <li class="header-profile__orders-table-item">
                    <div class="header-profile__orders-table-item-number">
                        <div class="header-profile__orders-table-item-number-date">23.08.22</div>
                        <div class="header-profile__orders-table-item-number-id">№ 144 - 234 -4568</div>
                    </div>
                    <div class="header-profile__orders-table-info">
                        <button class="header-profile__orders-table-info-btn" type="button" data-bs-toggle="modal" data-bs-target="#profileOrdersModel-1"><p>Подробнее</p></button>
                        <div class="modal fade" id="profileOrdersModel-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content header-profile__orders-table-info-model">
                                    <button type="button" class="btn-close header-profile__orders-table-info-close" data-bs-dismiss="modal" aria-label="Close">
                                        <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.3281 22.3296L40.2735 40.275" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M22.1313 40.4727L40.4712 22.1328" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>

                                    </button>
                                    <div class="header-profile__orders-table-info-title">№ 144 - 234 -4568 </div>
                                    <ul class="header-profile__orders-table-info-table">
                                        <li class="header-profile__orders-table-info-table-item">
                                            <div class="header-profile__orders-table-info-table-title">Получатель:</div>
                                            <div class="header-profile__orders-table-info-table-text">Алексей Алексеев</div>
                                        </li>
                                        <li class="header-profile__orders-table-info-table-item">
                                            <div class="header-profile__orders-table-info-table-title">Время доставки:</div>
                                            <div class="header-profile__orders-table-info-table-text">18:20-19:00</div>
                                        </li>
                                        <li class="header-profile__orders-table-info-table-item">
                                            <div class="header-profile__orders-table-info-table-title">Адрес доставки:</div>
                                            <div class="header-profile__orders-table-info-table-text">г. Москва, ул Круглова
                                                дом 56, кв 20</div>
                                        </li>
                                        <li class="header-profile__orders-table-info-table-item">
                                            <div class="header-profile__orders-table-info-table-title">Дата доставки:</div>
                                            <div class="header-profile__orders-table-info-table-text">01.11.2021</div>
                                        </li>
                                        <li class="header-profile__orders-table-info-table-item">
                                            <div class="header-profile__orders-table-info-table-title">Номер телефона получателя:</div>
                                            <div class="header-profile__orders-table-info-table-text">+7 (999) 456-67-80</div>
                                        </li>
                                    </ul>
                                    <div class="header-profile__orders-table-info-input">
                                        <input type="text" placeholder="Текст" value="С днем рождения!">
                                    </div>
                                    <ul class="header-profile__orders-table-info-list">
                                        <li class="header-profile__orders-table-info-list-item">
                                            <div class="header-profile__orders-table-info-list-img"><svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 20.575C0 21.9144 1.09031 23 2.42501 23H20.575C21.9144 23 23 21.9097 23 20.575V2.42501C23 1.08561 21.9097 0 20.575 0H2.42501C1.08561 0 0 1.09031 0 2.42501V20.575ZM20.575 21.8486H2.42501C1.72476 21.8486 1.15141 21.2752 1.15141 20.575V17.5437L5.51267 13.1825L9.23948 16.9093C9.46506 17.1349 9.82693 17.1349 10.0525 16.9093L16.7824 10.1794L21.8486 15.2456V20.575C21.8486 21.2752 21.2752 21.8486 20.575 21.8486ZM2.42501 1.15141H20.575C21.2752 1.15141 21.8486 1.72476 21.8486 2.42501V13.6148L17.1866 8.9575C16.961 8.73192 16.5991 8.73192 16.3735 8.9575L9.64365 15.6874L5.91684 11.9606C5.69125 11.735 5.32938 11.735 5.1038 11.9606L1.15141 15.913V2.42501C1.15141 1.72476 1.72476 1.15141 2.42501 1.15141Z" fill="#656565"/>
                                                    <path d="M7.12904 9.2161C8.74572 9.2161 10.0569 7.9002 10.0569 6.28822C10.0569 4.67625 8.74102 3.36035 7.12904 3.36035C5.51707 3.36035 4.20117 4.67625 4.20117 6.28822C4.20117 7.9002 5.51237 9.2161 7.12904 9.2161ZM7.12904 4.51176C8.11127 4.51176 8.9055 5.3107 8.9055 6.28822C8.9055 7.26575 8.10657 8.06469 7.12904 8.06469C6.15152 8.06469 5.35258 7.26575 5.35258 6.28822C5.35258 5.3107 6.14682 4.51176 7.12904 4.51176Z" fill="#656565"/>
                                                </svg>
                                            </div>
                                            <div class="header-profile__orders-table-info-list-text">
                                                <div class="header-profile__orders-table-info-list-text-title">Кустовая роза <br> белая</div>
                                                <div class="header-profile__orders-table-info-list-text-price">
                                                    <div class="header-profile__orders-table-info-list-text-price-sum">2990₽</div>
                                                    <div class="header-profile__orders-table-info-list-text-price-icon"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.7109 1.875H10.3594V1.05469C10.3594 0.473133 9.88624 0 9.30469 0C8.72313 0 8.25 0.473133 8.25 1.05469V1.34262C8.25 1.70693 8.00536 2.03128 7.65504 2.13136L7.3125 2.22923V2.22656C7.3125 2.03241 7.15509 1.875 6.96094 1.875H5.55469C5.36053 1.875 5.20312 2.03241 5.20312 2.22656V3.79688H1.05469C0.473133 3.79688 0 4.27001 0 4.85156V11.6484C0 11.7781 0.0713672 11.8972 0.185672 11.9584C0.237656 11.9862 0.294656 12 0.351539 12C0.419742 12 0.487758 11.9802 0.546562 11.9409L1.86427 11.0625H8.55469C9.13624 11.0625 9.60938 10.5894 9.60938 10.0078V6.32812H10.7109C11.4217 6.32812 12 5.74985 12 5.03906V3.16406C12 2.45327 11.4217 1.875 10.7109 1.875ZM5.90625 2.57812H6.60938V5.625H5.90625V2.57812ZM8.90625 10.0078C8.90625 10.2017 8.74854 10.3594 8.55469 10.3594H1.75781C1.68841 10.3594 1.62056 10.3799 1.56281 10.4184L0.703125 10.9916V4.85156C0.703125 4.65771 0.860836 4.5 1.05469 4.5H5.20312V5.97656C5.20312 6.17072 5.36053 6.32812 5.55469 6.32812H6.96094C7.14155 6.32812 7.29019 6.19186 7.31006 6.01657C7.62326 6.2163 7.99151 6.32812 8.37448 6.32812H8.90625V10.0078ZM11.2969 5.03906C11.2969 5.36215 11.034 5.625 10.7109 5.625H8.37448C7.94702 5.625 7.54781 5.40935 7.3125 5.05673V2.96051L7.84819 2.80746C8.49876 2.62158 8.95312 2.01921 8.95312 1.34262V1.05469C8.95312 0.860836 9.11084 0.703125 9.30469 0.703125C9.49854 0.703125 9.65625 0.860836 9.65625 1.05469V2.22656C9.65625 2.42072 9.81366 2.57812 10.0078 2.57812H10.7109C11.034 2.57812 11.2969 2.84098 11.2969 3.16406V5.03906Z" fill="white"/>
                                                            <path d="M1.75781 6.60938H4.10156C4.29572 6.60938 4.45312 6.45197 4.45312 6.25781C4.45312 6.06366 4.29572 5.90625 4.10156 5.90625H1.75781C1.56366 5.90625 1.40625 6.06366 1.40625 6.25781C1.40625 6.45197 1.56366 6.60938 1.75781 6.60938Z" fill="white"/>
                                                            <path d="M7.85156 7.3125H1.75781C1.56366 7.3125 1.40625 7.46991 1.40625 7.66406C1.40625 7.85822 1.56366 8.01562 1.75781 8.01562H7.85156C8.04572 8.01562 8.20312 7.85822 8.20312 7.66406C8.20312 7.46991 8.04572 7.3125 7.85156 7.3125Z" fill="white"/>
                                                            <path d="M7.85156 8.71875H1.75781C1.56366 8.71875 1.40625 8.87616 1.40625 9.07031C1.40625 9.26447 1.56366 9.42188 1.75781 9.42188H7.85156C8.04572 9.42188 8.20312 9.26447 8.20312 9.07031C8.20312 8.87616 8.04572 8.71875 7.85156 8.71875Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="header-profile__orders-table-info-list-item">
                                            <div class="header-profile__orders-table-info-list-img"><svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 20.575C0 21.9144 1.09031 23 2.42501 23H20.575C21.9144 23 23 21.9097 23 20.575V2.42501C23 1.08561 21.9097 0 20.575 0H2.42501C1.08561 0 0 1.09031 0 2.42501V20.575ZM20.575 21.8486H2.42501C1.72476 21.8486 1.15141 21.2752 1.15141 20.575V17.5437L5.51267 13.1825L9.23948 16.9093C9.46506 17.1349 9.82693 17.1349 10.0525 16.9093L16.7824 10.1794L21.8486 15.2456V20.575C21.8486 21.2752 21.2752 21.8486 20.575 21.8486ZM2.42501 1.15141H20.575C21.2752 1.15141 21.8486 1.72476 21.8486 2.42501V13.6148L17.1866 8.9575C16.961 8.73192 16.5991 8.73192 16.3735 8.9575L9.64365 15.6874L5.91684 11.9606C5.69125 11.735 5.32938 11.735 5.1038 11.9606L1.15141 15.913V2.42501C1.15141 1.72476 1.72476 1.15141 2.42501 1.15141Z" fill="#656565"/>
                                                    <path d="M7.12904 9.2161C8.74572 9.2161 10.0569 7.9002 10.0569 6.28822C10.0569 4.67625 8.74102 3.36035 7.12904 3.36035C5.51707 3.36035 4.20117 4.67625 4.20117 6.28822C4.20117 7.9002 5.51237 9.2161 7.12904 9.2161ZM7.12904 4.51176C8.11127 4.51176 8.9055 5.3107 8.9055 6.28822C8.9055 7.26575 8.10657 8.06469 7.12904 8.06469C6.15152 8.06469 5.35258 7.26575 5.35258 6.28822C5.35258 5.3107 6.14682 4.51176 7.12904 4.51176Z" fill="#656565"/>
                                                </svg>
                                            </div>
                                            <div class="header-profile__orders-table-info-list-text">
                                                <div class="header-profile__orders-table-info-list-text-title">Кустовая роза <br> белая</div>
                                                <div class="header-profile__orders-table-info-list-text-price">
                                                    <div class="header-profile__orders-table-info-list-text-price-sum">2990₽</div>
                                                    <div class="header-profile__orders-table-info-list-text-price-icon"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.7109 1.875H10.3594V1.05469C10.3594 0.473133 9.88624 0 9.30469 0C8.72313 0 8.25 0.473133 8.25 1.05469V1.34262C8.25 1.70693 8.00536 2.03128 7.65504 2.13136L7.3125 2.22923V2.22656C7.3125 2.03241 7.15509 1.875 6.96094 1.875H5.55469C5.36053 1.875 5.20312 2.03241 5.20312 2.22656V3.79688H1.05469C0.473133 3.79688 0 4.27001 0 4.85156V11.6484C0 11.7781 0.0713672 11.8972 0.185672 11.9584C0.237656 11.9862 0.294656 12 0.351539 12C0.419742 12 0.487758 11.9802 0.546562 11.9409L1.86427 11.0625H8.55469C9.13624 11.0625 9.60938 10.5894 9.60938 10.0078V6.32812H10.7109C11.4217 6.32812 12 5.74985 12 5.03906V3.16406C12 2.45327 11.4217 1.875 10.7109 1.875ZM5.90625 2.57812H6.60938V5.625H5.90625V2.57812ZM8.90625 10.0078C8.90625 10.2017 8.74854 10.3594 8.55469 10.3594H1.75781C1.68841 10.3594 1.62056 10.3799 1.56281 10.4184L0.703125 10.9916V4.85156C0.703125 4.65771 0.860836 4.5 1.05469 4.5H5.20312V5.97656C5.20312 6.17072 5.36053 6.32812 5.55469 6.32812H6.96094C7.14155 6.32812 7.29019 6.19186 7.31006 6.01657C7.62326 6.2163 7.99151 6.32812 8.37448 6.32812H8.90625V10.0078ZM11.2969 5.03906C11.2969 5.36215 11.034 5.625 10.7109 5.625H8.37448C7.94702 5.625 7.54781 5.40935 7.3125 5.05673V2.96051L7.84819 2.80746C8.49876 2.62158 8.95312 2.01921 8.95312 1.34262V1.05469C8.95312 0.860836 9.11084 0.703125 9.30469 0.703125C9.49854 0.703125 9.65625 0.860836 9.65625 1.05469V2.22656C9.65625 2.42072 9.81366 2.57812 10.0078 2.57812H10.7109C11.034 2.57812 11.2969 2.84098 11.2969 3.16406V5.03906Z" fill="white"/>
                                                            <path d="M1.75781 6.60938H4.10156C4.29572 6.60938 4.45312 6.45197 4.45312 6.25781C4.45312 6.06366 4.29572 5.90625 4.10156 5.90625H1.75781C1.56366 5.90625 1.40625 6.06366 1.40625 6.25781C1.40625 6.45197 1.56366 6.60938 1.75781 6.60938Z" fill="white"/>
                                                            <path d="M7.85156 7.3125H1.75781C1.56366 7.3125 1.40625 7.46991 1.40625 7.66406C1.40625 7.85822 1.56366 8.01562 1.75781 8.01562H7.85156C8.04572 8.01562 8.20312 7.85822 8.20312 7.66406C8.20312 7.46991 8.04572 7.3125 7.85156 7.3125Z" fill="white"/>
                                                            <path d="M7.85156 8.71875H1.75781C1.56366 8.71875 1.40625 8.87616 1.40625 9.07031C1.40625 9.26447 1.56366 9.42188 1.75781 9.42188H7.85156C8.04572 9.42188 8.20312 9.26447 8.20312 9.07031C8.20312 8.87616 8.04572 8.71875 7.85156 8.71875Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="header-profile__orders-table-info-list-item">
                                            <div class="header-profile__orders-table-info-list-img"><svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 20.575C0 21.9144 1.09031 23 2.42501 23H20.575C21.9144 23 23 21.9097 23 20.575V2.42501C23 1.08561 21.9097 0 20.575 0H2.42501C1.08561 0 0 1.09031 0 2.42501V20.575ZM20.575 21.8486H2.42501C1.72476 21.8486 1.15141 21.2752 1.15141 20.575V17.5437L5.51267 13.1825L9.23948 16.9093C9.46506 17.1349 9.82693 17.1349 10.0525 16.9093L16.7824 10.1794L21.8486 15.2456V20.575C21.8486 21.2752 21.2752 21.8486 20.575 21.8486ZM2.42501 1.15141H20.575C21.2752 1.15141 21.8486 1.72476 21.8486 2.42501V13.6148L17.1866 8.9575C16.961 8.73192 16.5991 8.73192 16.3735 8.9575L9.64365 15.6874L5.91684 11.9606C5.69125 11.735 5.32938 11.735 5.1038 11.9606L1.15141 15.913V2.42501C1.15141 1.72476 1.72476 1.15141 2.42501 1.15141Z" fill="#656565"/>
                                                    <path d="M7.12904 9.2161C8.74572 9.2161 10.0569 7.9002 10.0569 6.28822C10.0569 4.67625 8.74102 3.36035 7.12904 3.36035C5.51707 3.36035 4.20117 4.67625 4.20117 6.28822C4.20117 7.9002 5.51237 9.2161 7.12904 9.2161ZM7.12904 4.51176C8.11127 4.51176 8.9055 5.3107 8.9055 6.28822C8.9055 7.26575 8.10657 8.06469 7.12904 8.06469C6.15152 8.06469 5.35258 7.26575 5.35258 6.28822C5.35258 5.3107 6.14682 4.51176 7.12904 4.51176Z" fill="#656565"/>
                                                </svg>
                                            </div>
                                            <div class="header-profile__orders-table-info-list-text">
                                                <div class="header-profile__orders-table-info-list-text-title">Кустовая роза <br> белая</div>
                                                <div class="header-profile__orders-table-info-list-text-price">
                                                    <div class="header-profile__orders-table-info-list-text-price-sum">2990₽</div>
                                                    <div class="header-profile__orders-table-info-list-text-price-icon"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.7109 1.875H10.3594V1.05469C10.3594 0.473133 9.88624 0 9.30469 0C8.72313 0 8.25 0.473133 8.25 1.05469V1.34262C8.25 1.70693 8.00536 2.03128 7.65504 2.13136L7.3125 2.22923V2.22656C7.3125 2.03241 7.15509 1.875 6.96094 1.875H5.55469C5.36053 1.875 5.20312 2.03241 5.20312 2.22656V3.79688H1.05469C0.473133 3.79688 0 4.27001 0 4.85156V11.6484C0 11.7781 0.0713672 11.8972 0.185672 11.9584C0.237656 11.9862 0.294656 12 0.351539 12C0.419742 12 0.487758 11.9802 0.546562 11.9409L1.86427 11.0625H8.55469C9.13624 11.0625 9.60938 10.5894 9.60938 10.0078V6.32812H10.7109C11.4217 6.32812 12 5.74985 12 5.03906V3.16406C12 2.45327 11.4217 1.875 10.7109 1.875ZM5.90625 2.57812H6.60938V5.625H5.90625V2.57812ZM8.90625 10.0078C8.90625 10.2017 8.74854 10.3594 8.55469 10.3594H1.75781C1.68841 10.3594 1.62056 10.3799 1.56281 10.4184L0.703125 10.9916V4.85156C0.703125 4.65771 0.860836 4.5 1.05469 4.5H5.20312V5.97656C5.20312 6.17072 5.36053 6.32812 5.55469 6.32812H6.96094C7.14155 6.32812 7.29019 6.19186 7.31006 6.01657C7.62326 6.2163 7.99151 6.32812 8.37448 6.32812H8.90625V10.0078ZM11.2969 5.03906C11.2969 5.36215 11.034 5.625 10.7109 5.625H8.37448C7.94702 5.625 7.54781 5.40935 7.3125 5.05673V2.96051L7.84819 2.80746C8.49876 2.62158 8.95312 2.01921 8.95312 1.34262V1.05469C8.95312 0.860836 9.11084 0.703125 9.30469 0.703125C9.49854 0.703125 9.65625 0.860836 9.65625 1.05469V2.22656C9.65625 2.42072 9.81366 2.57812 10.0078 2.57812H10.7109C11.034 2.57812 11.2969 2.84098 11.2969 3.16406V5.03906Z" fill="white"/>
                                                            <path d="M1.75781 6.60938H4.10156C4.29572 6.60938 4.45312 6.45197 4.45312 6.25781C4.45312 6.06366 4.29572 5.90625 4.10156 5.90625H1.75781C1.56366 5.90625 1.40625 6.06366 1.40625 6.25781C1.40625 6.45197 1.56366 6.60938 1.75781 6.60938Z" fill="white"/>
                                                            <path d="M7.85156 7.3125H1.75781C1.56366 7.3125 1.40625 7.46991 1.40625 7.66406C1.40625 7.85822 1.56366 8.01562 1.75781 8.01562H7.85156C8.04572 8.01562 8.20312 7.85822 8.20312 7.66406C8.20312 7.46991 8.04572 7.3125 7.85156 7.3125Z" fill="white"/>
                                                            <path d="M7.85156 8.71875H1.75781C1.56366 8.71875 1.40625 8.87616 1.40625 9.07031C1.40625 9.26447 1.56366 9.42188 1.75781 9.42188H7.85156C8.04572 9.42188 8.20312 9.26447 8.20312 9.07031C8.20312 8.87616 8.04572 8.71875 7.85156 8.71875Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="header-profile__orders-table-info-list-item">
                                            <div class="header-profile__orders-table-info-list-img"><svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 20.575C0 21.9144 1.09031 23 2.42501 23H20.575C21.9144 23 23 21.9097 23 20.575V2.42501C23 1.08561 21.9097 0 20.575 0H2.42501C1.08561 0 0 1.09031 0 2.42501V20.575ZM20.575 21.8486H2.42501C1.72476 21.8486 1.15141 21.2752 1.15141 20.575V17.5437L5.51267 13.1825L9.23948 16.9093C9.46506 17.1349 9.82693 17.1349 10.0525 16.9093L16.7824 10.1794L21.8486 15.2456V20.575C21.8486 21.2752 21.2752 21.8486 20.575 21.8486ZM2.42501 1.15141H20.575C21.2752 1.15141 21.8486 1.72476 21.8486 2.42501V13.6148L17.1866 8.9575C16.961 8.73192 16.5991 8.73192 16.3735 8.9575L9.64365 15.6874L5.91684 11.9606C5.69125 11.735 5.32938 11.735 5.1038 11.9606L1.15141 15.913V2.42501C1.15141 1.72476 1.72476 1.15141 2.42501 1.15141Z" fill="#656565"/>
                                                    <path d="M7.12904 9.2161C8.74572 9.2161 10.0569 7.9002 10.0569 6.28822C10.0569 4.67625 8.74102 3.36035 7.12904 3.36035C5.51707 3.36035 4.20117 4.67625 4.20117 6.28822C4.20117 7.9002 5.51237 9.2161 7.12904 9.2161ZM7.12904 4.51176C8.11127 4.51176 8.9055 5.3107 8.9055 6.28822C8.9055 7.26575 8.10657 8.06469 7.12904 8.06469C6.15152 8.06469 5.35258 7.26575 5.35258 6.28822C5.35258 5.3107 6.14682 4.51176 7.12904 4.51176Z" fill="#656565"/>
                                                </svg>
                                            </div>
                                            <div class="header-profile__orders-table-info-list-text">
                                                <div class="header-profile__orders-table-info-list-text-title">Кустовая роза <br> белая</div>
                                                <div class="header-profile__orders-table-info-list-text-price">
                                                    <div class="header-profile__orders-table-info-list-text-price-sum">2990₽</div>
                                                    <div class="header-profile__orders-table-info-list-text-price-icon"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.7109 1.875H10.3594V1.05469C10.3594 0.473133 9.88624 0 9.30469 0C8.72313 0 8.25 0.473133 8.25 1.05469V1.34262C8.25 1.70693 8.00536 2.03128 7.65504 2.13136L7.3125 2.22923V2.22656C7.3125 2.03241 7.15509 1.875 6.96094 1.875H5.55469C5.36053 1.875 5.20312 2.03241 5.20312 2.22656V3.79688H1.05469C0.473133 3.79688 0 4.27001 0 4.85156V11.6484C0 11.7781 0.0713672 11.8972 0.185672 11.9584C0.237656 11.9862 0.294656 12 0.351539 12C0.419742 12 0.487758 11.9802 0.546562 11.9409L1.86427 11.0625H8.55469C9.13624 11.0625 9.60938 10.5894 9.60938 10.0078V6.32812H10.7109C11.4217 6.32812 12 5.74985 12 5.03906V3.16406C12 2.45327 11.4217 1.875 10.7109 1.875ZM5.90625 2.57812H6.60938V5.625H5.90625V2.57812ZM8.90625 10.0078C8.90625 10.2017 8.74854 10.3594 8.55469 10.3594H1.75781C1.68841 10.3594 1.62056 10.3799 1.56281 10.4184L0.703125 10.9916V4.85156C0.703125 4.65771 0.860836 4.5 1.05469 4.5H5.20312V5.97656C5.20312 6.17072 5.36053 6.32812 5.55469 6.32812H6.96094C7.14155 6.32812 7.29019 6.19186 7.31006 6.01657C7.62326 6.2163 7.99151 6.32812 8.37448 6.32812H8.90625V10.0078ZM11.2969 5.03906C11.2969 5.36215 11.034 5.625 10.7109 5.625H8.37448C7.94702 5.625 7.54781 5.40935 7.3125 5.05673V2.96051L7.84819 2.80746C8.49876 2.62158 8.95312 2.01921 8.95312 1.34262V1.05469C8.95312 0.860836 9.11084 0.703125 9.30469 0.703125C9.49854 0.703125 9.65625 0.860836 9.65625 1.05469V2.22656C9.65625 2.42072 9.81366 2.57812 10.0078 2.57812H10.7109C11.034 2.57812 11.2969 2.84098 11.2969 3.16406V5.03906Z" fill="white"/>
                                                            <path d="M1.75781 6.60938H4.10156C4.29572 6.60938 4.45312 6.45197 4.45312 6.25781C4.45312 6.06366 4.29572 5.90625 4.10156 5.90625H1.75781C1.56366 5.90625 1.40625 6.06366 1.40625 6.25781C1.40625 6.45197 1.56366 6.60938 1.75781 6.60938Z" fill="white"/>
                                                            <path d="M7.85156 7.3125H1.75781C1.56366 7.3125 1.40625 7.46991 1.40625 7.66406C1.40625 7.85822 1.56366 8.01562 1.75781 8.01562H7.85156C8.04572 8.01562 8.20312 7.85822 8.20312 7.66406C8.20312 7.46991 8.04572 7.3125 7.85156 7.3125Z" fill="white"/>
                                                            <path d="M7.85156 8.71875H1.75781C1.56366 8.71875 1.40625 8.87616 1.40625 9.07031C1.40625 9.26447 1.56366 9.42188 1.75781 9.42188H7.85156C8.04572 9.42188 8.20312 9.26447 8.20312 9.07031C8.20312 8.87616 8.04572 8.71875 7.85156 8.71875Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="header-profile__orders-table-info-titles">Фото готового товара</div>
                                    <div class="header-profile__orders-table-info-slider">
                                        <div class="swiper modelOrdersSliders">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="header-profile__orders-table-info-slider-item">
                                                        <div class="header-profile__orders-table-info-slider-content"></div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="header-profile__orders-table-info-slider-item">
                                                        <div class="header-profile__orders-table-info-slider-content"></div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="header-profile__orders-table-info-slider-item">
                                                        <div class="header-profile__orders-table-info-slider-content"></div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="header-profile__orders-table-info-slider-item">
                                                        <div class="header-profile__orders-table-info-slider-content"></div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="header-profile__orders-table-info-slider-item">
                                                        <div class="header-profile__orders-table-info-slider-content"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-sliders">
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-profile__orders-table-info-text">
                            <p>в процессе исполнения</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <script>
        $('.header-profile__menu-list-order').addClass('header-profile__menu-list-active')
    </script>
@endsection
