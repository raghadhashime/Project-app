@extends('layouts.Dashboard')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center">بيانات الاصناف</h1>
<div class="card ">
<div class="card-body">
<table class="table">
<thead>
    @if(isset($data))
    <th>رقم العنصر </th>
    <th>اسم العنصر </th>
    <th>سعر العنصر </th>
    <th>لون العنصر </th>
    <th>اسم المجموعه </th>
</thead>
<tbody>
   
    @foreach($data as $row)
    <tr>
        <td>{{$row->id}}</td>
        <td>{{$row->prodectName}}</td>
        <td>{{$row->price}}</td>
        <td>{{$row->color}}</td>
        <td>{{$row->ItemName}}</td>
    </tr>
    @endforeach
    @endif
</tbody>
</table>
</div>

</div>
</di>
</div>
</div>





@endsection