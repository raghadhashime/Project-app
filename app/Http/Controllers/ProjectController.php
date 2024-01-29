<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Items;
use Illuminate\Http\Request;
use App\Models\Groupitems;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProjectController extends Controller
{
  public function showItemGroup(){
    $data=Groupitems::All();
    $count=$data->count();
    return view('welcome',['data'=>$data,'count'=>$count]);
  }
    public function getItemgroup(){
      $data=Groupitems::All();
      $issave=true;
      return view('dashboard.itemgroup',['data'=>$data , 'issave'=>$issave]);
    }
    public function pageadditem(Request $request){
      $data=Items::All();
      
      
      return view('dashboard.additem',['data'=>$data]);
    }

   


    public function saveGroup(Request $request){
      
        $data=Groupitems::create([
         'ItemName'=>$request->ItemName
        ]);
        $data->save();
        return redirect ('itemgroup');
    } 
    
    public function delete($x){
      $data=Groupitems::find($x);
      $data->delete();
      return redirect('itemgroup');
    }
    public function DisplayItems(){
     $data=DB::table('groupitems')
     ->join('items','Groupitems.id','=','items.itemgroupno')
     ->get();
     
     return view('dashboard.controlpanel',['data'=>$data]);

    }

    public function additems(Request $request){
     $data=Items::create([
       'prodectName'=>$request->prodectName,
       'price'=>$request->price,
       'qty'=>$request->qty,
       'color'=>$request->color,
        'itemgroupno'=>$request->itemgroupno
     ]);
     $data->save();
     
     return redirect('pageadditem');
    }
    public function logout(){
      Auth::logout();
      return redirect('login');
    }
    public function Showproduct($id)
     {
      $data=Items::where('itemgroupno',$id)
      ->get();

     
        Session::put('id',$id);
      return view('showproduct',['data'=>$data]);
     }

     public function AddtoCart($id)
     {
     
      DB::table('cart')->insert(['iditem' => $id]); //save to cart table 
      $idgroup=Session::get('id');
      $count=DB::table('cart')->get()->count();
      Session::put('countitem',$count);
      return redirect('showproduct/'. $idgroup );  //redirect to showproduct page blade 

     }
     public function checkout(){
      return view('checkout');
     }
   

  }