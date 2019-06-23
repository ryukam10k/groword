@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">English Sentences - Edit</div>
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
                            <th>name: </th>
                            <td><input type="text" class="form-control" name="name" value="{{$form->name}}"></td>
                        </tr>
                        <tr>
                            <th>meaning: </th>
                            <td><textarea class="form-control" rows="7" name="meaning">{{$form->meaning}}</textarea></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><input type="submit" class="btn btn-primary" value="send"></td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
