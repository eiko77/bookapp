@extends('layouts.helloapp')
@section('title','Rental.Add')

@section('menubar')
@parent
新規貸し出しページ
@endsection

@section('content')
@if(count($errors) > 0)
<div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="/rental/add" method="post">
    <table>
        @csrf
       

            <tr><th>bookname: </th>
                <td><input type="text" name="bookname" value="{{old('bookname')}}"></td></tr>

                <tr><th>borrower: </th>
                    <td><input type="text" name="borrower" value="{{old('borrower')}}"></td></tr>
              
                    <tr><th></th>
                        <td><input type="submit" value="借りる"></td></tr>
        </table>
</form>
@endsection

@section('footer')
copyright 2020 tuyano
@endsection

