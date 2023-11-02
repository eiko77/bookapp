@extends('layouts.helloapp')
@section('title','Rental.Edit')

@section('menubar')
@parent
貸し出し情報　変更ページ
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
<form action="/rental/edit" method="post">
    <table>
        @csrf
     <input type="hidden" name ="id" value ="{{$form->id}}">
        <tr><th>bookname:</th>
            <td><input type="text" name="bookname" value="{{$form->bookname}}"></td></tr>
            <tr><th>borrower:</th>
                <td><input type="text" name="borrower" value="{{$form->borrower}}"></td></tr>
                
                    <tr><th></th>
                        <td><input type="submit" value="変更"></td></tr>
        </table>
</form>
@endsection

@section('footer')
copyright 2020 tuyano
@endsection

