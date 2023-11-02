@extends('layouts.helloapp')
@section('title','Rental.index')


@section('menubar')
@parent
本の貸し出し状況
@endsection

@section('content')

<table>
    <th>ID</th>
    <th>Bookname</th>
    <th>Borrower</th>
    <th>Time</th>
@foreach($items as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->bookname}}</td>
    <td>{{$item->borrower}}</td>
    <td>{{$item->created_at}}</td>
</tr>
@endforeach
</table>

@endsection

@section('footer')
copyright 2020 tuyano
@endsection

