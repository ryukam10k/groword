@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">Words - Add</div>
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
                    <form action="/word/add" method="post">
                    <table class="table">
                        {{ csrf_field() }}
                        <tr>
                            <th>name: </th>
                            <td><input type="text" class="form-control" name="name" value="{{old('name')}}"></td>
                        </tr>
                        <tr>
                            <th>howtoread: </th>
                            <td><input type="text" class="form-control" name="howtoread" value="{{old('howtoread')}}"></td>
                        </tr>
                        <tr>
                            <th>meaning: </th>
                            <td><textarea class="form-control" rows="7" name="meaning">{{old('meaning')}}</textarea></td>
                        </tr>
                        <tr>
                            <th>source: </th>
                            <td><input type="text" class="form-control" name="source" value="{{old('source')}}"></td>
                        </tr>
                        <tr>
                            <th>tags: </th>
                            <td>
                                <select name="tags" id="tags" class="form-control">
                                    @foreach($tags as $tag)
                                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                                    @endforeach
                                </select>
                            </td>
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
