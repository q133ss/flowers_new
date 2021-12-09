@extends('layouts.account')
@section('title', 'События')
@section('content')
    <div class="header-profile__event">
        <div class="header-profile__event-title">Календарь событий</div>
        <div class="header-profile__event-table">
            <div class="header-profile__event-table-calendar">
                <div class="header-profile__event-table-calendar-title">Выберите дату</div>
                <div class="header-profile__event-table-calendar-block">
                    <input type="input" id="datepickerProfileEvent" class="header-profile__event-table-calendar-block-date" />
                    <div class="header-profile__event-table-calendar-block-bg"></div>
                </div>
                <input type="input" id="somedate"  />
                <div class="date" data-altfield="#datepickerProfileEvent"></div>
                <button class="header-profile__event-table-calendar-btn" type="button"  data-bs-toggle="modal" data-bs-target="#profileEventModel"><a href="#">Добавить событие</a></button>

                <div class="modal fade" id="profileEventModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content header-profile__event-table-calendar-model">
                            <button type="button" class="btn-close header-profile__event-table-calendar-close" data-bs-dismiss="modal" aria-label="Close">
                                <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.3281 22.3296L40.2735 40.275" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M22.1313 40.4727L40.4712 22.1328" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                            </button>
                            <div class="header-profile__event-table-calendar-model-content">
                                <div class="header-profile__event-table-calendar-model-title">Ваше событие</div>
                                <select id="event-events">
                                    <option value=""></option>
                                    <option value="День рождение">День рождение</option>
                                    <option value="День ВДВ">День ВДВ</option>
                                    <option value="ДР Макса">ДР Макса</option>
                                    <option value="День рождение">День рождение</option>
                                    <option value="День ВДВ">День ВДВ</option>
                                    <option value="ДР Макса">ДР Макса</option>
                                    <option value="День рождение">День рождение</option>
                                    <option value="День ВДВ">День ВДВ</option>
                                    <option value="ДР Макса">ДР Макса</option>
                                    <option value="День рождение">День рождение</option>
                                    <option value="День ВДВ">День ВДВ</option>
                                    <option value="ДР Макса">ДР Макса</option>
                                </select>


                                <input type="text" class="header-profile__event-table-calendar-model-date" placeholder="ДД/ММ/ГГГГ">
                                <input type="text" class="header-profile__event-table-calendar-model-where" placeholder="Кого нужно поздравить">
                                <input type="text" class="header-profile__event-table-calendar-model-phone" placeholder="Номер телефона (не обязательно)">
                                <input type="text" class="header-profile__event-table-calendar-model-city" placeholder="Город получателя (не обязательно)">
                                <input type="text" class="header-profile__event-table-calendar-model-address" placeholder="Адрес получателя (не обязательно)">
                                <button class="header-profile__event-table-calendar-model-btn"><a href="#">Добавить событие</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-profile__event-table-info">
                <div class="header-profile__event-table-info-title">Ближайшие события</div>
                <div class="header-profile__event-table-info-block">
                    <svg width="512" height="512" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M368 511.957H58.668C26.3047 511.957 0 485.652 0 453.289V143.957C0 111.594 26.3047 85.2891 58.668 85.2891H240C248.832 85.2891 256 92.457 256 101.289C256 110.121 248.832 117.289 240 117.289H58.668C43.9688 117.289 32 129.258 32 143.957V453.289C32 467.988 43.9688 479.957 58.668 479.957H368C382.699 479.957 394.668 467.988 394.668 453.289V271.957C394.668 263.125 401.836 255.957 410.668 255.957C419.5 255.957 426.668 263.105 426.668 271.957V453.289C426.668 485.652 400.363 511.957 368 511.957V511.957Z" fill="#16B8C3"/>
                        <path d="M187.137 340.82C182.933 340.82 178.836 339.156 175.828 336.129C172.031 332.352 170.41 326.91 171.457 321.684L186.539 246.25C187.156 243.137 188.691 240.297 190.91 238.078L411.863 17.1523C434.73 -5.71875 471.937 -5.71875 494.828 17.1523C505.898 28.2227 512 42.9453 512 58.625C512 74.3047 505.898 89.0234 494.805 100.098L273.879 321.047C271.66 323.285 268.801 324.801 265.707 325.418L190.293 340.5C189.246 340.715 188.18 340.82 187.137 340.82V340.82ZM262.57 309.738H262.785H262.57ZM216.961 257.281L207.551 304.426L254.676 294.996L472.191 77.4844C477.226 72.4258 480 65.75 480 58.625C480 51.5 477.226 44.8203 472.191 39.7656C461.824 29.375 444.906 29.375 434.476 39.7656L216.961 257.281Z" fill="#16B8C3"/>
                        <path d="M453.332 134.977C449.238 134.977 445.141 133.418 442.027 130.281L381.695 69.9297C375.445 63.6797 375.445 53.5469 381.695 47.2969C387.945 41.0469 398.078 41.0469 404.332 47.2969L464.66 107.648C470.91 113.898 470.91 124.031 464.66 130.281C461.523 133.398 457.43 134.977 453.332 134.977V134.977Z" fill="#16B8C3"/>
                    </svg>

                    <div class="header-profile__event-table-info-block-text">День рождение</div>
                    <div class="header-profile__event-table-info-block-date">12.01.1993</div>
                </div>
                <button class="header-profile__event-table-info-btn"><a href="#">Подабрать подарок</a></button>
            </div>
        </div>


    </div>

    <script>
        $('.header-profile__menu-list-event').addClass('header-profile__menu-list-active')
    </script>
@endsection
