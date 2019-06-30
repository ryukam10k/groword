@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header content__header">
                    <div class="content__header__title">English Sentences</div>
                    <div class="content__header__button"><a href="/sentence/add" class="btn btn-dark btn-sm" role="button"><i class="fas fa-pen"></i> Add</a></div>
                </div>
                <div class="card-body">
                    {{ $items->appends(['sort' => $sort, 'order' => $order])->links() }}
                    <table class="table">
                        <tr>
                            <th>Sentence
                                <a href="/sentence?sort=name&order=asc">△</a>
                                <a href="/sentence?sort=name&order=desc">▽</a>
                            </th>
                            <th>Meaning
                                <a href="/sentence?sort=meaning&order=asc">△</a>
                                <a href="/sentence?sort=meaning&order=desc">▽</a>
                            </th>
                            <th>UpdateAt
                                <a href="/sentence?sort=updated_at&order=asc">△</a>
                                <a href="/sentence?sort=updated_at&order=desc">▽</a>
                            </th>
                        </tr>
                        @foreach ($items as $item)
                        <tr>
                            <td><a href="/sentence/edit?id={{$item->id}}">{{$item->name}}</a></td>
                            <td>{{$item->meaning}}</td>
                            <td>{{$item->updated_at}}</td>
                        </tr>
                        @endforeach
                    </table>
                    {{ $items->appends(['sort' => $sort, 'order' => $order])->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
