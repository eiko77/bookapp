@extends('layouts.helloapp')
@section('title','Rental.Delete')

@section('menubar')
@parent
本貸し出し　返却ページ
@endsection

@section('content')

<form action="/rental/del" method="post">
    <table>
        @csrf
     <input type="hidden" name ="id" value ="{{$form->id}}">
        <tr><th>bookname:</th>
            <td>{{$form->bookname}}</td></tr>
            <tr><th>borrower:</th>
                <td>{{$form->borrower}}</td></tr>
                    <tr><th></th>
                        <td><input type="submit" value="返却"></td></tr>
        </table>
</form>
@endsection

@section('footer')
copyright 2020 tuyano
@endsection

