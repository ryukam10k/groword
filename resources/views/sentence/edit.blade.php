@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <div class="content__header__title"><a href="/sentence/">English Sentence</a> - Edit</div>
                </div>
                <div class="card-body">
                    @if (count($errors) > 0)
                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="/sentence/edit" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$form->id}}">
                    <table class="table">
                        <tr>
                            <th>sentence: </th>
                            <td><textarea class="form-control" rows="4" name="name">{{$form->name}}</textarea></td>
                        </tr>
                        <tr>
                            <th>meaning: </th>
                            <td><textarea class="form-control" rows="4" name="meaning">{{$form->meaning}}</textarea></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><input type="submit" class="btn btn-primary" value="send"></td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="content__header__title">Related words</div>
                </div>
                <div class="card-body">
                    <ul>
                        <li>assure：確信させる。保証する。分からせて安心させる。</li>
                        <li>turn：曲がる。向きを変える。</li>
                        <li>fine：<a href="/eng_word/add" target="_blank">Add</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
