@extends('layouts.default')
<style>
    th {
        background-color: #289adc;
        color: white;
        padding: 5px 40px;
    }

    td {
        padding: 25px 40px;
        background-color: #eeeeee;
        text-align: center;
    }

    button {
        padding: 10px 20px;
        background-color: #289adc;
        border: none;
        color: white;
    }
</style>
@section('title', 'book.binds.blade.php')

@section ('content')
<p>Book</p>
<table>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>AGE</th>
        <th>NATIONALITY</th>
    </tr>
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->age}}</td>
        <td>{{$item->nationality}}</td>
    </tr>
</table>
@endsection