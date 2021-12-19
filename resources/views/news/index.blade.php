@extends('layouts.main')
@section('title', 'Новости')
@section('content')
    <div class="new-content">
        <div class="containers">
            <div class="new-content__block">
                <div class="new-content__block-back">
                    <a href="#">
                        <svg width="6" height="8" viewBox="0 0 6 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.126693 4.21814L5.26511 7.90939C5.34597 7.9675 5.45558 8.0001 5.5698 8C5.68403 7.9999 5.79353 7.96713 5.87421 7.90888C5.95488 7.85063 6.00013 7.77168 6 7.6894C5.99987 7.60712 5.95436 7.52825 5.8735 7.47014L1.04088 3.99865L5.8735 0.527157C5.9528 0.468818 5.99696 0.390309 5.99641 0.308663C5.99586 0.227018 5.95064 0.148821 5.87056 0.0910377C5.79048 0.0332541 5.682 0.000545474 5.56866 7.11485e-06C5.45531 -0.000531244 5.34624 0.0311446 5.26511 0.0881619L0.126693 3.77915C0.0865377 3.80795 0.0546745 3.84217 0.0329326 3.87986C0.0111912 3.91755 -6.00308e-07 3.95796 -6.03876e-07 3.99878C-6.07444e-07 4.03959 0.0111912 4.08 0.0329326 4.11769C0.0546745 4.15538 0.0865377 4.18961 0.126693 4.2184L0.126693 4.21814Z" fill="white"/>
                        </svg>

                        <svg width="6" height="8" viewBox="0 0 6 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.126693 4.21814L5.26511 7.90939C5.34597 7.9675 5.45558 8.0001 5.5698 8C5.68403 7.9999 5.79353 7.96713 5.87421 7.90888C5.95488 7.85063 6.00013 7.77168 6 7.6894C5.99987 7.60712 5.95436 7.52825 5.8735 7.47014L1.04088 3.99865L5.8735 0.527157C5.9528 0.468818 5.99696 0.390309 5.99641 0.308663C5.99586 0.227018 5.95064 0.148821 5.87056 0.0910377C5.79048 0.0332541 5.682 0.000545474 5.56866 7.11485e-06C5.45531 -0.000531244 5.34624 0.0311446 5.26511 0.0881619L0.126693 3.77915C0.0865377 3.80795 0.0546745 3.84217 0.0329326 3.87986C0.0111912 3.91755 -6.00308e-07 3.95796 -6.03876e-07 3.99878C-6.07444e-07 4.03959 0.0111912 4.08 0.0329326 4.11769C0.0546745 4.15538 0.0865377 4.18961 0.126693 4.2184L0.126693 4.21814Z" fill="white"/>
                        </svg>

                    </a>
                </div>
                <div class="new-content__block-text">
                    <div class="new-content__block-text-title">Новости</div>
                    <div class="new-content__block-text-select">
                        <select id="sort">
                            <option class="sort-item" value="new" rel="icon-temperature">Сначала новые</option>
                            <option class="sort-item" value="old">Сначала старые</option>
                        </select>
                    </div>
                </div>
                <div class="new-content__block-table" id="news_sort">
                    @include('news.items', compact('news'))
                </div>

                <div class="new-content__block-next">
                    ЕЩЕ НОВОСТИ
                    <div class="new-content__block-next-hr"></div>
                </div>

            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
        $("li[rel^='new']").addClass('new_');
        $("li[rel^='old']").addClass('old_');
        $('.new_').click(function(){
            $.ajax({
                url: '{{route('news.sort', 'new')}}',
                type: "POST",
                data: {
                },
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: (data) => {
                    //alert(data)
                    $('#news_sort').html(data)
                },
                error: function(request, status, error) {
                    //    alert(statusCode = request.responseText);

                }
            })
        })
        $('.old_').click(function(){

            $.ajax({
                url: '{{route('news.sort', 'old')}}',
                type: "POST",
                data: {
                },
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: (data) => {
                  //   alert(data)
                    $('#news_sort').html(data)
                },
                error: function(request, status, error) {
                   //    alert(statusCode = request.responseText);

                }
            })

        })
        });
    </script>
@endsection
@section('js')

@endsection
