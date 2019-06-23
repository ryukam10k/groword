@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header content__header">
                    <div class="content__header__title"><a href="/sentence/">English Sentence</a> - Show</div>
                    <div class="content__header__button">
                        <a href="/sentence/edit?id={{$form->id}}" class="btn btn-dark btn-sm" role="button"><i class="fas fa-pen"></i> Edit</a>
                        <a href="/sentence/del?id={{$form->id}}" class="btn btn-dark btn-sm" role="button"><i class="fas fa-trash"></i> Del</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>sentence: </th>
                            <td>{{$form->name}}</td>
                        </tr>
                        <tr>
                            <th>meaning: </th>
                            <td>{{$form->meaning}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
