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
    <form action="#" method="POST" enctype="multipart/form-data">
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
        <select class="js-example-basic-multiple" style="width: 100%; margin: 0 auto;" name="products[]" multiple="multiple">
            @foreach($categories as $category)

                <option value="{{$category['id']}}" @if($category['id'] == $product['category_id']) selected @endif>{{$category['name']}}</option>
            @endforeach
        </select>

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
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body" style="display: block;">
                Черный +
            </div>
            <!-- /.card-body -->
            <div class="card-footer" style="display: block;">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>

    </form>
@endsection

@section('scripts')
    <script src="/admin_panel/plugins/select2/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2({
                placeholder: 'Выберите категорию',
            });
            $('.select2-container--default').addClass('mt-2')
        });
    </script>
@endsection
