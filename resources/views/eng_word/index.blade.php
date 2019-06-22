@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header content__header">
                    <div class="content__header__title">English Words</div>
                    <div class="content__header__button"><a href="/eng_word/add" class="btn btn-dark btn-sm" role="button"><i class="fas fa-pen"></i> Add</a></div>
                </div>
                <div class="card-body">
                    {{ $items->appends(['sort' => $sort, 'order' => $order])->links() }}
                    <table class="table">
                        <tr>
                            <th style="width:20%;">Name
                                <a href="/eng_word?sort=name&order=asc">△</a>
                                <a href="/eng_word?sort=name&order=desc">▽</a>
                            </th>
                            <th>Meaning
                                <a href="/eng_word?sort=meaning&order=asc">△</a>
                                <a href="/eng_word?sort=meaning&order=desc">▽</a>
                            </th>
                            <th style="width:15%;">UpdateAt
                                <a href="/eng_word?sort=updated_at&order=asc">△</a>
                                <a href="/eng_word?sort=updated_at&order=desc">▽</a>
                            </th>
                            <th style="width:20%;"></th>
                        </tr>
                        @foreach ($items as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->meaning}}</td>
                            <td>{{$item->updated_at}}</td>
                            <td>
                                <a href="/eng_word/show?id={{$item->id}}">show</a> | 
                                <a href="/eng_word/edit?id={{$item->id}}">edit</a> | 
                                <a href="/eng_word/del?id={{$item->id}}">del</a>
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
