@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Words</div>
                <div class="card-body">
                    <div><a href="/word/add">Add</a></div>
                    <table class="table">
                        <tr>
                            <th><a href="/word?sort=name">Name</a></th>
                            <th><a href="/word?sort=meaning">Meaning</a></th>
                            <th></th>
                        </tr>
                        @foreach ($items as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->meaning}}</td>
                            <td>
                                <a href="/word/show?id={{$item->id}}">show</a> | 
                                <a href="/word/edit?id={{$item->id}}">edit</a> | 
                                <a href="/word/del?id={{$item->id}}">del</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {{ $items->appends(['sort' => $sort])->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
