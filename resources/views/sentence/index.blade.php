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
                            <th style="width:20%;">Name
                                <a href="/sentence?sort=name&order=asc">△</a>
                                <a href="/sentence?sort=name&order=desc">▽</a>
                            </th>
                            <th>Meaning
                                <a href="/sentence?sort=meaning&order=asc">△</a>
                                <a href="/sentence?sort=meaning&order=desc">▽</a>
                            </th>
                            <th style="width:15%;">UpdateAt
                                <a href="/sentence?sort=updated_at&order=asc">△</a>
                                <a href="/sentence?sort=updated_at&order=desc">▽</a>
                            </th>
                            <th style="width:20%;"></th>
                        </tr>
                        @foreach ($items as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->meaning}}</td>
                            <td>{{$item->updated_at}}</td>
                            <td>
                                <a href="/sentence/show?id={{$item->id}}">show</a> | 
                                <a href="/sentence/edit?id={{$item->id}}">edit</a> | 
                                <a href="/sentence/del?id={{$item->id}}">del</a>
                            </td>
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
