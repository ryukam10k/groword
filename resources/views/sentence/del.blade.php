@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">English Sentences - Delete</div>

                <div class="card-body">
                    <p>Are you sure you want to delete it?</p>
                    <form action="/sentence/del" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$form->id}}">
                        <table class="table">
                            <tr>
                                <th>sentence: </th>
                                <td>{{$form->name}}</td>
                            </tr>
                            <tr>
                                <th>meaning: </th>
                                <td>{{$form->meaning}}</td>
                            </tr>
                            <tr>
                                <th></th>
                                <td><input type="submit" class="btn btn-danger" value="send"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection