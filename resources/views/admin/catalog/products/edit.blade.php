@extends('layouts.admin')
@section('title', 'Товары')
@section('meta')
    <link href="/admin_panel/plugins/select2/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
        </div>
    @endif
    <form action="#" id="form-edit" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Название</label>
            <input type="text" value="{{$product['name']}}" class="form-control" placeholder="Товар 1">
        </div>
        <div class="form-group">
            <label>Описание</label>
            <textarea name="description" id="" class="form-control" cols="30" rows="10">
                {{$product['description']}}
            </textarea>
        </div>
        <div class="form-group">
            <label>Изображение</label>
            <input type="file" class="form-control-file" name="img" id="customFile" />
            <label for="">Текущее:</label> <br>
            <img src="{{$product['img']}}" width="100px" class="mt-1" height="100px" alt="">
        </div>

        <div class="form-group">
            <label>Цена</label>
            <input type="text" value="{{$product['price']}}" class="form-control" placeholder="1231">
        </div>

        <div class="form-group">
            <label>Баллы</label>
            <input type="text" value="{{$product['score']}}" class="form-control" placeholder="15">
        </div>

        <div class="form-group">
            <label>Скидка %</label>
            <input type="text" value="{{$product['sale']}}" class="form-control" placeholder="20">
        </div>

        <label for="">Категория</label>
        <div class="cat-select">
        <select class="js-example-basic-multiple" style="width: 100%; margin: 0 auto;" name="products[]">
            @foreach($categories as $category)

                <option value="{{$category['id']}}" @if($category['id'] == $product['category_id']) selected @endif>{{$category['name']}}</option>
            @endforeach
        </select>
        </div>

        <div class="form-group mt-3">
            <label>Скрыть?</label>
            <select name="status" id="">
                <option value="1">Нет</option>
                <option value="0">Да</option>
            </select>
        </div>

        <div class="form-group">
            <label for="">Галлерея</label>
            <input type="file" class="form-control-file" multiple name="gallery[]">
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Выбрать цвет</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body" style="display: block;">
                <table>

                @foreach($colors as $color)
                        <tr>
                            <th>{{$color['name']}}</th>
                            <th><button type="button" class="ml-3 btn btn-block btn-primary btn-sm color-add" data-id="{{$color['id']}}">+</button></th>
                        </tr>
                @endforeach
                </table>
            </div>
            <!-- /.card-body -->
            <!-- /.card-footer-->
        </div>


        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Выбрать размеры</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body" style="display: block;">
                <table>

                    @foreach($sizes as $size)
                        <tr>
                            <th>{{$size['name']}}</th>
                            <th><button type="button" class="ml-3 btn btn-block btn-primary btn-sm size-add" data-id="{{$size['id']}}">+</button></th>
                        </tr>
                    @endforeach
                </table>
            </div>
            <!-- /.card-body -->
            <!-- /.card-footer-->
        </div>


        <div class="form-group path-product">
            <label for="">Патчи товара</label>
            <div class="row m-0">
            <select name="location[]" id="location" onchange="test($(this).val())" class="form-control col-2">
                <option value="Город">Город</option>
                <option value="Регион">Регион</option>
                <option value="Страна">Страна</option>
            </select>

            <div class="path-city col-2">
            <select class="city-select" style="width: 100%; margin: 0 auto;" name="path-city[]">
                @foreach($cities as $city)
                    <option value="{{$city['id']}}">{{$city['title']}}</option>
                @endforeach
            </select>
            </div>

                <div class="path-region col-2" style="display: none">
                    <select class="city-select" style="width: 100%; margin: 0 auto;" name="path-region[]">
                        @foreach($regions as $city)
                            <option value="{{$city['id']}}">{{$city['title']}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="path-country col-2" style="display: none">
                    <select class="city-select" style="width: 100%; margin: 0 auto;" name="path-country[]">
                        @foreach($countries as $city)
                            <option value="{{$city['id']}}">{{$city['title']}}</option>
                        @endforeach
                    </select>
                </div>

                <input type="text" class="form-control col-2" style="display: none" id="hide" placeholder="123">

            <select name="path-status[]" id="" class="form-control col-2">
                <option value="" selected disabled>Скрыть товар?</option>
                <option value="Да">Да</option>
                <option value="Нет">Нет</option>
            </select>

            <input type="text" class="col-1 ml-2" name="path-price[]" value="" placeholder="Цена">
            <input type="text" class="col-1 ml-2" name="path-sale[]" value="" placeholder="Скидка">
            <input type="text" class="col-1 ml-2" name="path-score[]" value="" placeholder="Баллы">

            </div>

            <div id="path-city-add"></div>
            <button class="btn btn-primary mt-2" type="button" onclick="add_path_city_row()">+</button>

        </div>


{{--        Размер--}}
        <div class="form-group path-product">
            <label for="">Патчи размера</label>
            <div class="row m-0">
                <select name="size_location[]" id="location" onchange="size_change($(this).val())" class="form-control col-2">
                    <option value="Город">Город</option>
                    <option value="Регион">Регион</option>
                    <option value="Страна">Страна</option>
                </select>

                <div class="size-path-city col-2">
                    <select class="city-select" style="width: 100%; margin: 0 auto;" name="path-size-city[]">
                        @foreach($cities as $city)
                            <option value="{{$city['id']}}">{{$city['title']}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="size-path-region col-2" style="display: none">
                    <select class="city-select" style="width: 100%; margin: 0 auto;" name="path-size-region[]">
                        @foreach($regions as $city)
                            <option value="{{$city['id']}}">{{$city['title']}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="size-path-country col-2" style="display: none">
                    <select class="city-select" style="width: 100%; margin: 0 auto;" name="path-size-country[]">
                        @foreach($countries as $city)
                            <option value="{{$city['id']}}">{{$city['title']}}</option>
                        @endforeach
                    </select>
                </div>

                <select name="size-path[]" id="" class="col-1 mr-2">
                    @foreach($sizes as $size)
                        <option value="{{$size['id']}}">{{$size['name']}}</option>
                    @endforeach
                </select>

                <input type="text" class="form-control col-2" style="display: none" id="hide" placeholder="123">

                <select name="path-status[]" id="" class="form-control col-2">
                    <option value="" selected disabled>Скрыть товар?</option>
                    <option value="Да">Да</option>
                    <option value="Нет">Нет</option>
                </select>

                <input type="text" class="col-1 ml-2" name="path-price[]" value="" placeholder="Цена">
                <input type="text" class="col-1 ml-2" name="path-sale[]" value="" placeholder="Скидка">
                <input type="text" class="col-1 ml-2" name="path-score[]" value="" placeholder="Баллы">

            </div>

            <div id="path-size-add"></div>
            <button class="btn btn-primary mt-2" type="button" onclick="add_path_size_row()">+</button>

        </div>
{{--        end size--}}
    </form>
    <style>
        .cat-select .select2-selection--single{
            height: 100% !important;
        }
    </style>
@endsection

@section('scripts')

    <script src="/admin_panel/plugins/select2/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2({
                placeholder: 'Выберите категорию',
            });
            $('.select2-container--default').addClass('mt-2')
            $('.city-select').select2({placeholder: 'Выберите город',});
            $('.path-product>.row>.select2-container').addClass('col-2')
            let selector = $('.path-product').find('.select2-selection--single')
            selector.css('height', '90%')
        });

        //colors
        $('.color-add').click(function (){
            let id = $(this).data('id')
                if($(this).html() == '-'){
                $('#color'+id).remove()
                $(this).html('+')
                $(this).addClass('btn-primary')
                $(this).removeClass('btn-success')
                }else {
                    $('#form-edit').append('<input type="hidden" id="color'+id+'" value="' + id + '" name="colors[]">')
                    $(this).removeClass('btn-primary')
                    $(this).addClass('btn-success')
                    $(this).html('-')
                }

        })


        $('.size-add').click(function (){
            let id = $(this).data('id')
            if($(this).html() == '-'){
                $('#size'+id).remove()
                $(this).html('+')
                $(this).addClass('btn-primary')
                $(this).removeClass('btn-success')
            }else {
                $('#form-edit').append('<input type="hidden" id="size'+id+'" value="' + id + '" name="sizes[]">')
                $(this).removeClass('btn-primary')
                $(this).addClass('btn-success')
                $(this).html('-')
            }

        })

        //City path
        let path_city_counter = 1;
        function add_path_city_row(){
            path_city_counter++;
            $('#path-city-add').append('<div class="row path-created m-0 mt-2" id="path_city'+path_city_counter+'"> <select name="location[]" onchange="add_change($(this).val(), '+path_city_counter+')" id="" class="form-control col-2"> <option value="Город">Город</option> <option value="Регион">Регион</option> <option value="Страна">Страна</option> </select> <div class="path-city'+path_city_counter+' col-2"><select class="city-select1" style="width: 100%; margin: 0 auto;" name="path-city[]" > @foreach($cities as $city) <option value="{{$city['id']}}">{{$city['title']}}</option> @endforeach </select></div> <div class="path-region'+path_city_counter+' col-2" style="display: none"><select class="city-select" style="width: 100%; margin: 0 auto;" name="path-city[]">@foreach($regions as $city)<option value="{{$city['id']}}">{{$city['title']}}</option>@endforeach</select></div><div class="path-country'+path_city_counter+' col-2" style="display: none"><select class="city-select" style="width: 100%; margin: 0 auto;" name="path-city[]">@foreach($countries as $city) <option value="{{$city['id']}}">{{$city['title']}}</option>@endforeach</select></div> <select name="path-status[]" id="" class="form-control col-2"> <option value="" selected disabled>Скрыть товар?</option> <option value="Да">Да</option> <option value="Нет">Нет</option> </select> <input type="text" class="col-1 ml-2" name="path-price[]" value="" placeholder="Цена"> <input type="text" class="col-1 ml-2" name="path-sale[]" value="" placeholder="Скидка"> <input type="text" class="col-1 ml-2" name="path-score[]" value="" placeholder="Баллы"> <button class="btn btn-warning btn-sm ml-2" type="button" onclick="path_city_remove('+path_city_counter+')">X</button> </div>')
            $('.city-select1').select2({placeholder: 'Выберите город',});
            $('.path-created>.select2-container').addClass('col-2')
            let selector = $('.path-product').find('.select2-selection--single')
            selector.css('height', '90%')
        }

        function path_city_remove(id){
            $('#path_city'+id).remove()
        }

        function test(val){
            if(val == 'Регион'){
                $('.path-region').css('display', 'block')
                $('.path-city').css('display', 'none')
                $('.path-country').css('display', 'none')
            }else if(val == 'Страна'){
                $('.path-region').css('display', 'none')
                $('.path-city').css('display', 'none')
                $('.path-country').css('display', 'block')
            }else if(val == 'Город'){
                $('.path-region').css('display', 'none')
                $('.path-city').css('display', 'block')
                $('.path-country').css('display', 'none')
            }
        }

        function add_change(val , count){
            if(val == 'Регион'){
                $('.path-region'+count).css('display', 'block')
                $('.path-city'+count).css('display', 'none')
                $('.path-country'+count).css('display', 'none')
            }else if(val == 'Страна'){
                $('.path-region'+count).css('display', 'none')
                $('.path-city'+count).css('display', 'none')
                $('.path-country'+count).css('display', 'block')
            }else if(val == 'Город'){
                $('.path-region'+count).css('display', 'none')
                $('.path-city'+count).css('display', 'block')
                $('.path-country'+count).css('display', 'none')
            }
            $('.city-select').select2({placeholder: 'Выберите город',});
            $('.city-select1').select2({placeholder: 'Выберите город',});
            $('.path-created>.select2-container').addClass('col-2')
            let selector = $('.path-product').find('.select2-selection--single')
            selector.css('height', '90%')
        }

        let add_size_counter = 1;
        function add_path_size_row(){
            add_size_counter++;
            $('#path-size-add').append('<div class="row m-0" id="size-row'+add_size_counter+'"> <select name="size_location[]" id="location" onchange="size_change1($(this).val(), '+add_size_counter+')" class="form-control col-2"> <option value="Город">Город</option> <option value="Регион">Регион</option> <option value="Страна">Страна</option> </select> <div class="size-path-city'+add_size_counter+' col-2"> <select class="city-select" style="width: 100%; margin: 0 auto;" name="path-size-city[]"> @foreach($cities as $city) <option value="{{$city['id']}}">{{$city['title']}}</option> @endforeach </select> </div> <div class="size-path-region'+add_size_counter+' col-2" style="display: none"> <select class="city-select" style="width: 100%; margin: 0 auto;" name="path-size-region[]"> @foreach($regions as $city) <option value="{{$city['id']}}">{{$city['title']}}</option> @endforeach </select> </div> <div class="size-path-country'+add_size_counter+' col-2" style="display: none"> <select class="city-select" style="width: 100%; margin: 0 auto;" name="path-size-country[]"> @foreach($countries as $city) <option value="{{$city['id']}}">{{$city['title']}}</option> @endforeach </select> </div> <select name="size-path[]" id="" class="col-1 mr-2"> @foreach($sizes as $size) <option value="{{$size['id']}}">{{$size['name']}}</option> @endforeach </select> <input type="text" class="form-control col-2" style="display: none" id="hide" placeholder="123"> <select name="path-status[]" id="" class="form-control col-2"> <option value="" selected disabled>Скрыть товар?</option> <option value="Да">Да</option> <option value="Нет">Нет</option> </select> <input type="text" class="col-1 ml-2" name="path-price[]" value="" placeholder="Цена"> <input type="text" class="col-1 ml-2" name="path-sale[]" value="" placeholder="Скидка"> <input type="text" class="col-1 ml-2" name="path-score[]" value="" placeholder="Баллы"><button type="button" class="btn btn-warning btn-sm" onclick="path_size_remove('+add_size_counter+')">-</button> </div>')
            $('.city-select').select2({placeholder: 'Выберите город',});
            $('.path-created>.select2-container').addClass('col-2')
            let selector = $('.path-product').find('.select2-selection--single')
            selector.css('height', '90%')
        }

        function path_size_remove(count){
            $('#size-row'+count).remove()
        }


        function size_change(val){
            if(val == 'Регион'){
                $('.size-path-region').css('display', 'block')
                $('.size-path-city').css('display', 'none')
                $('.size-path-country').css('display', 'none')
            }else if(val == 'Страна'){
                $('.size-path-region').css('display', 'none')
                $('.size-path-city').css('display', 'none')
                $('.size-path-country').css('display', 'block')
            }else if(val == 'Город'){
                $('.size-path-region').css('display', 'none')
                $('.size-path-city').css('display', 'block')
                $('.size-path-country').css('display', 'none')
            }
        }

        function size_change1(val, count){
            if(val == 'Регион'){
                $('.size-path-region'+count).css('display', 'block')
                $('.size-path-city'+count).css('display', 'none')
                $('.size-path-country'+count).css('display', 'none')
            }else if(val == 'Страна'){
                $('.size-path-region'+count).css('display', 'none')
                $('.size-path-city'+count).css('display', 'none')
                $('.size-path-country'+count).css('display', 'block')
            }else if(val == 'Город'){
                $('.size-path-region'+count).css('display', 'none')
                $('.size-path-city'+count).css('display', 'block')
                $('.size-path-country'+count).css('display', 'none')
            }
        }

        //Удаляем из базы все, где есть айди товара и проверяем на City Region..
    </script>
@endsection
