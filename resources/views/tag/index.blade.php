@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Tags</div>
                <div class="card-body">
                    <a href="/tag/add">Add Tag</a>
                    <table class="table">
                        <tr>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ($items as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>
                                <a href="/tag/show?id={{$item->id}}">show</a> | 
                                <a href="/tag/edit?id={{$item->id}}">edit</a> | 
                                <a href="/tag/del?id={{$item->id}}">del</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
