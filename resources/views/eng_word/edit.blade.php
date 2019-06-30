@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header content__header">
                    <div class="content__header__title"><a href="/eng_word/">English Words</a> - Edit</div>
                    <div class="content__header__button">
                        <a href="/eng_word/del?id={{$form->id}}" class="btn btn-danger btn-sm" role="button"><i class="fas fa-trash"></i></a>
                    </div>
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
                    <form action="/eng_word/edit" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$form->id}}">
                        <div>Word</div>
                        <div>
                            <input type="text" class="form-control" name="name" value="{{$form->name}}">
                        </div>
                        <div>Meaning</div>
                        <div>
                            <textarea class="form-control" rows="7" name="meaning">{{$form->meaning}}</textarea>
                        </div>
                        <hr>
                        <div>
                            <input type="submit" class="btn btn-primary btn-block" value="Save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
