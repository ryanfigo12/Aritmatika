@extends('layout.template')
@section('title','TUGAS 1')

@section('content')
    <h1>HASIL DERET BILANGAN</h1>
    <table border='1' style='width:15%;'>
        <thead>
            <tr>
                <td>Index</td>
                <td>Value</td>
            </tr>
        </thead>
        <tbody>
            @foreach($deret as $key=>$val)
                <tr>
                    <td>{{$key}}</td>
                    <td>{{$val}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection