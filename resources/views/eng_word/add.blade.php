@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">English Words - Add</div>
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
                    <form action="/eng_word/add" method="post">
                        {{ csrf_field() }}
                        <div>Word</div>
                        <div>
                            <input type="text" class="form-control" name="name" value="{{old('name')}}">
                        </div>
                        <div>Meaning</div>
                        <div>
                            <textarea class="form-control" rows="7" name="meaning">{{old('meaning')}}</textarea>
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
