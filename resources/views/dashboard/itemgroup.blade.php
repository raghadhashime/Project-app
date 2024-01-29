@extends('layouts.dashboard')
@section('content')
<div class=""container>
   <div class="card"> <div class="row d-flex justify-content-center">
        <div class="col-sm-4">
            <form action="{{route('save')}}" method="post">
                @csrf
                <label for="ItemName" class="p-2">ادخل اسم المجموعة</label>
                <input type="text" name="ItemName" class="form-control form-control-sm ">
                <div class="text-center"><button class="btn btn-primary mt-3" type="submit" onclick="showmessage()">حفظ</button></div>
            </form>

        </div>



    </div></div>
    @if(isset($data))
<div class="card mt-3"> 
<div class="card-body">
<table class="table table-bordered">
<thead>
    
    <th>رقم المجموعة</th>
    <th>اسم المجموعة</th>
    <th colspan="2">الاجراءات</th>
</thead>
<tbody>
    @foreach($data as $row)
    <tr>
     <td>{{$row->id}}</td>
     <td>{{$row->ItemName}}</td>
     <td><a href="{{route('delete',['x'=>$row->id]))}}"><i class="bi bi-trash3-fill"></i></a></td>
     <td><i class="bi bi-pencil-square"></i></td>
    </tr>
    @endforeach
</tbody>
</table>
</div>
</div>
@endif
</div>

<script >
function showmessage(){
    Swal.fire({
  position: "top-end",
  icon: "success",
  title: "تم الحفظ",
  showConfirmButton: false,
  timer: 1500
});
}
</script>


@endsection