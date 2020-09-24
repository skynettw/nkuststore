@extends("base")
@section("main")
<h1>這是test模板</h1>
<table>
<tr bgcolor=#aaaaaa><td>姓名</td></tr>
@foreach ($names as $name)
    @if ($loop->odd)
    <tr bgcolor=#ccccff>
    @else
    <tr bgcolor=#ffcccc>
    @endif
    <td>{{ $name }} </td>
    </tr>
@endforeach
</table>
@endsection