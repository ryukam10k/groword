@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">Words - Show</div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>name: </th>
                            <td>{{$form->name}}</td>
                        </tr>
                        <tr>
                            <th>howtoread: </th>
                            <td>{{$form->howtoread}}</td>
                        </tr>
                        <tr>
                            <th>meaning: </th>
                            <td>{{$form->meaning}}</td>
                        </tr>
                        <tr>
                            <th>source: </th>
                            <td>{{$form->source}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
