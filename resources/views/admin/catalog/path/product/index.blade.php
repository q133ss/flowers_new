@extends('layouts.admin')
@section('title', 'Патч товара')
@section('content')
        <div class="card-body p-0">
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
                </div>
            @endif
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-success mr-4" data-toggle="modal" data-target="#modalCreate">Добавить</button>
            </div>
            <table class="table table-sm">
                <thead>
                <tr>
                    <th style="width: 100px;">Локация</th>
                    <th>ID локации</th>
                    <th>ID товара</th>
                    <th>Статус</th>
                    <th>Цена</th>
                    <th>Балы</th>
                    <th>Скидка</th>
                    <th style="width: 40px">Изменить</th>
                    <th style="width: 40px">Удалить</th>
                </tr>
                </thead>
                <tbody>
                @foreach($path as $item)
                    <tr>
                        <td>{{$item['model']}}</td>
                        <td>{{$item['model_id']}}</td>
                        <td>{{$item['product_id']}}</td>
                        <td>@if($item['status'] == 1) Активен @else Выключен @endif</td>
                        <td>{{$item['price']}}</td>
                        <td>{{$item['score']}}</td>
                        <td>{{$item['sale']}}</td>
                        <td><a href="#" data-toggle="modal" data-target="#exampleModal{{$item['id']}}" class="btn btn-warning">Изменить</a></td>
                        <td>
                            <form action="{{route('admin.path.product.delete', $item['id'])}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-block btn-danger delete-btn">X</button>
                            </form>
                        </td>
                    </tr>
                    {{--    Modal edit--}}
                    <form action="{{route('admin.path.product.edit', $item['id'])}}" method="POST">
                    @csrf
                    <div class="modal fade" id="exampleModal{{$item['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$item['model']}} #{{$item['model_id']}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="">Модель</label>
                                        <select name="model" id="" class="form-control">
                                            <option value="City" @if($item['model'] == 'City') selected @endif>City</option>
                                            <option value="Region" @if($item['model'] == 'Region') selected @endif>Region</option>
                                            <option value="Country" @if($item['model'] == 'Country') selected @endif>Country</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">ID модели</label>
                                        <input type="text" name="model_id" value="{{$item['model_id']}}" placeholder="17" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="">ID товара</label>
                                        <input type="text" name="product_id" value="{{$item['product_id']}}" placeholder="17" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Статус</label>
                                        <select name="status" id="" class="form-control">
                                            <option value="1" @if($item['status'] == 1) selected @endif>Активен</option>
                                            <option value="0" @if($item['status'] == 0) selected @endif>Выключен</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Цена</label>
                                        <input type="text" name="price" class="form-control" value="{{$item['price']}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Балы</label>
                                        <input type="text" name="score" class="form-control" value="{{$item['score']}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Скидка</label>
                                        <input type="text" name="sale" class="form-control" value="{{$item['sale']}}">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                                    <button type="submit" class="btn btn-primary">Сохранить</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                    {{--    end Modal --}}
                @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-success mr-4" data-toggle="modal" data-target="#modalCreate">Добавить</button>
            </div>
        </div>

        {{--    Modal create--}}
        <form action="{{route('admin.path.product.create')}}" method="POST">
            @csrf
            <div class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{$item['model']}} #{{$item['model_id']}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">Модель</label>
                                <select name="model" id="" class="form-control">
                                    <option value="City">City</option>
                                    <option value="Region">Region</option>
                                    <option value="Country">Country</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">ID модели</label>
                                <input type="text" name="model_id" placeholder="17" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">ID товара</label>
                                <input type="text" name="product_id" placeholder="17" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Статус</label>
                                <select name="status" id="" class="form-control">
                                    <option value="1">Активен</option>
                                    <option value="0">Выключен</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Цена</label>
                                <input type="text" name="price" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Балы</label>
                                <input type="text" name="score" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Скидка</label>
                                <input type="text" name="sale" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                            <button type="submit" class="btn btn-primary">Создать</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        {{--    end Modal --}}
@endsection
