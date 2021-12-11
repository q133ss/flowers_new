@extends('layouts.admin')
@section('title', 'Товары')
@section('content')
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
        </div>
    @endif
    <table class="table table-sm">
        <thead>
        <tr>
            <th style="width: 10px">#</th>
            <th>Изображение</th>
            <th>Название</th>
            <th>Цена</th>
            <th>Скидка</th>
            <th>Категория</th>
            <th>Балы</th>
            <th>Статус</th>
            <th style="width: 40px">Изменить</th>
            <th style="width: 40px">Удалить</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product['id']}}</td>
            <td><img src="{{$product['img']}}" height="100px" width="100px" alt=""></td>
            <td>
                {{$product['name']}}
            </td>
            <td>
                {{$product['price']}}
            </td>
            <td>{{$product['sale']}}</td>
            <td>{{$product->category['name']}}</td>
            <td>{{$product->score}}</td>
            <td>
                @if($product->status == 1)
                    Активен
                @else
                    Выключен
                @endif
            </td>
            <td><a href="{{route('admin.products.edit', $product['id'])}}" type="button" class="btn btn-warning">Изменить</a></td>
            <td><button type="button" class="btn btn-danger">Х</button></td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{$products->links()}}
@endsection
