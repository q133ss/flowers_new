@extends('layouts.admin')
@section('title', 'Категории')
@section('content')
    <div class="card-body p-0">
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
            </div>
        @endif
        <table class="table table-sm">
            <thead>
            <tr>
                <th style="width: 100px;">Иконка</th>
                <th>Название</th>
                <th>Тип</th>
                <th style="width: 200px">Изменить</th>
                <th style="width: 40px">Удалить</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td><img src="{{$category['img']}}" width="100%" height="100px" alt=""></td>
                    <td @if($category['type'] == 'additionallies' || $category['type'] == 'products')onclick="location.href='{{route('admin.sub.category', $category['id'])}}'" style="cursor: pointer"@endif>{{$category['name']}}</td>
                    <td>
                        @php
                        $type = 0;
                            if($category['type'] == 'products'){
                                $type = 'Букеты';
                            }elseif($category['type'] == 'additionallies'){
                                $type = 'Доп. товары';
                            }elseif($category['type'] == 'urgentlies'){
                                $type = 'Срочный заказ';
                            }elseif($category['type'] == 'constr_oazis'){
                                $type = 'Оазис';
                            }elseif($category['type'] == 'constr_sub'){
                                $type = 'Пакет для конструктора';
                            }elseif($category['type'] == 'constr_main'){
                                $type = 'Конструктор';
                            }
                        @endphp
                        {{$type}}
                    </td>
                    <td>
                        <button data-toggle="modal" data-target="#edit-modal{{$category['id']}}" class="btn btn-block btn-warning">Изменить</button>
                    </td>
                    <td>
                        <form action="{{route('admin.category.delete', $category['id'])}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-block btn-danger delete-btn">X</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-success mr-4" data-toggle="modal" data-target="#create-modal">Добавить</button>
        </div>
    </div>


    @foreach($categories as $category)
        <div class="modal" id="edit-modal{{$category['id']}}" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{route('admin.category.edit', $category['id'])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title">Изменить</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="id" value="{{$category['id']}}">
                            <input type="hidden" name="block" value="1">
                            <input type="file" value="{{$category['img']}}" name="img"> <br>
                            <input type="text" value="{{$category['name']}}" name="name" placeholder="Название" class="form-control mt-2">
                            <select name="type" id="" class="form-control mt-2">
                                <option value="products">Букеты</option>
                                <option value="additionallies">Доп. товары</option>
                                <option value="constr_sub">Пакет для конструктора</option>
                                <option value="constr_main">Конструктор</option>
                                <option value="constr_oazis">Оазис</option>
                            </select>
                            <label for="">Выключить категорию?</label>
                            <select name="status" id="">
                                <option value="Нет" @if($category['status'] == 0) selected @endif>Нет</option>
                                <option value="Да">Да</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach


    <div class="modal" id="create-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{route('admin.category.create')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Добавить</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="file" required name="img"> <br>
                        <input type="text" required name="name" placeholder="Название" class="form-control mt-2">
                        <select name="type" id="" class="form-control mt-2">
                            <option value="products">Букеты</option>
                            <option value="additionallies">Доп. товары</option>
                            <option value="constr_sub">Пакет для конструктора</option>
                            <option value="constr_main">Конструктор</option>
                            <option value="constr_oazis">Оазис</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection