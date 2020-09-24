@extends("base")
@section("main")
<h1>高科路透社</h1>
<hr>

<form method=POST action="{{route('news.postit')}}">
@csrf
訊息：<input name=message type=text size=40>
<input type=submit>
</form><br>

<table class="table table-hover table-dark">
<thead>
<tr><th>ID</th><th>訊息</th><th>張貼日期</th><th>管理</th></tr>
</thead>
<tbody>
@foreach($messages as $msg)
    <tr>
    <td>{{$msg->id}}</td>
    <td>{{$msg->message}}</td>
    <td>{{$msg->postdate}}</td>
    <td><a href="/del/{{$msg->id}}/">刪除</a></td>
    </tr>
@endforeach()
</tbody>
</table>
@endsection