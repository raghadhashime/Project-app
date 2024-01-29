@extends('layouts.app')
@section('content')
<div class=""container>
    <div class="row d-flex justify-content-center">
        <div class="col-sm-4">
            <form action="{{route('save')}}" method="post">
                @csrf
             <div class="text-center"><label for="ItemName" class="p-2 ">ادخل اسم المجموعة</label></div> 
                <input type="text" name="ItemName" class="form-control form-control-sm ">
                <div class="text-center"><button class="btn btn-secondary mt-3" type="submit ">حفظ</button></div>
            </form>

        </div>
        @if(isset($data))
        <div class="row text-center">
            <div class="col">
            <table class="table table-striped">
                    <thead>
                        <th>اسم المجموعة</th>
                    </thead>
                    <tbody>
                    @foreach($data as $row)
                          <tr>
                            <td>{{$row->ItemName}}</td>
                          </tr>
                          @endforeach
                    </tbody>
                  
                </div>
        </table>
        </div>
        @endif
  





    </div>
</div>


@endsection

