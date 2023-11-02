@extends('layouts.helloapp')
@section('title','Rental.find')


@section('menubar')
@parent
検索ページ
<br><br>
本のタイトルを入力してね！
@endsection

@section('content')

<form action="/rental/find"  method="post">
@csrf
<input type="text" name="input" value="{{$input}}">
<input type="submit" value="探す">
</form>

@if (isset($item))
<table>
    <tr><th>検索結果</th></tr>
    <tr>
        <td>{{$item->getData()}}</td>
    </tr>
</table>
@endif 

@endsection

@section('footer')
copyright 2020 tuyano
@endsection

