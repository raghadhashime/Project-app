@extends('layouts.Dashboard')
@section('content')
<div class=""container>
<div class="modal-body row">
    <div class="col-md-4">   
    <div class="row d-flex justify-content-center ">
        <div class="col-sm-20">
<form action="{{route('additem')}}" method="post">
    @csrf
  
        <legend class="text-center p-2">اضافة عنصر جديد</legend>
  <label for="prodectName" class="form-label">الاسم </label>
    <input type='text' name="prodectName" class="form-control">
    <label for="price" class="form-label">السعر</label>
    <input type='text' name="price" class="form-control">
    <label for="qty" class="form-label">الكمية</label>
    <input type='text' name="qty" class="form-control">
    <label for="color" class="form-label">اللون</label>
    <input type='text' name="color" class="form-control">
    <label for="itemgroupno" class="form-label">رقم المجموعة</label>
    <input type='text' name="itemgroupno" class="form-control">
    <div class="p-2"><button type="submit" class="btn btn-dark">حفظ</button></div>

</form>


</div>
</div>


</div>
<div class="col-sm p-2">
    @if(isset($data))
    <div class="card mt-3"> 

        <div class="card-body">
        <table class="table table-bordered">
        <thead>
            
            <th>رقم العنصر</th>
            <th>اسم العنصر</th>
            <th>سعر العنصر</th>
            <th>كمية العنصر</th>
            <th>لون العنصر</th>
            <th>رقم المجموعة</th>
            <th colspan="2">الاجراءات</th>
        </thead>
        <tbody>
            @foreach($data as $row)
            <tr>
             <td>{{$row->id}}</td>
             <td>{{$row->prodectName}}</td>
             <td>{{$row->price}}</td>
             <td>{{$row->qty}}</td>
             <td>{{$row->color}}</td>
             <td>{{$row->itemgroupno}}</td>
             <td><a href="#"><i class="bi bi-trash3-fill"></i></a></td>
             <td><i class="bi bi-pencil-square"></i></td>
            </tr>
            @endforeach
        </tbody>
        </table>
        </div>
        </div>
      @endif  
</div>

      <!-- Your first column here -->
    </div>
   
  </div>
@endsection


