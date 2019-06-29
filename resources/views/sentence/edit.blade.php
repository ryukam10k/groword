@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <div class="card">
                <div class="card-header content__header">
                    <div class="content__header__title"><a href="/sentence/">English Sentence</a> - Edit</div>
                    <div class="content__header__button">
                        <a href="/sentence/del?id={{$form->id}}" class="btn btn-danger btn-sm" role="button"><i class="fas fa-trash"></i></a>
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
                    <form action="/sentence/edit" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$form->id}}">
                        <div>Sentence</div>
                        <div>
                            <textarea v-on:change="getWords" id="sentence" v-model="sentence" class="form-control" rows="4" name="name">{{$form->name}}</textarea>
                        </div>
                        <div>Meaning</div>
                        <div>
                            <textarea class="form-control" rows="4" name="meaning">{{$form->meaning}}</textarea>
                        </div>
                        <hr>
                        <div>
                            <input type="submit" class="btn btn-primary btn-block" value="Save">
                        </div>
                    </form>
                    <example-component></example-component>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="content__header__title">Related words</div>
                </div>
                <div class="card-body">
                    <ul>
                        <li v-for="word in words">
                            @{{ word.name + "   " + word.meaning }}
                            <a v-if="word.meaning === 'unknown'" href="/eng_word/add" target="_blank">:Add</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
