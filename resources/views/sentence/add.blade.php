@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <div class="content__header__title"><a href="/sentence/">English Sentence</a> - Add</div>
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
                    <form action="/sentence/add" method="post">
                    <table class="table">
                        {{ csrf_field() }}
                        <tr>
                            <th>sentence: </th>
                            <td><textarea v-on:change="getWords" id="sentence" v-model="sentence" class="form-control" rows="4" name="name">{{old('name')}}</textarea></td>
                        </tr>
                        <tr>
                            <th>meaning: </th>
                            <td><textarea class="form-control" rows="4" name="meaning">{{old('meaning')}}</textarea></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><input type="submit" class="btn btn-primary" value="send"></td>
                        </tr>
                    </table>
                    </form>
                </div>
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
</div>

@endsection
