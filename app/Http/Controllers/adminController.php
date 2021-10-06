<?php

namespace App\Http\Controllers;
use App\Models\Food;
use App\Models\Reservations;
use App\Models\User;
use App\Models\Chef;
use App\Models\Order;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
        $data=user::all();
        return view('admin.adminUser',compact('data'));
    }
    public function deleteuser($id){
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function foodmenu(){
        $data=food::all();
        return view('admin.adminfood',compact('data'));
    }
    public function insertfood(Request $request){
        // $data=user::all();
         $data=new food;
         $image=$request->image;
         $imagename=time().'.'.$image->getClientOriginalExtension();
         $request->image->move('foodpicture',$imagename);
         $data->image=$imagename;
         $data->title=$request->title;
         $data->description=$request->description;
         $data->price=$request->price;
         $data->save();
         return redirect()->back();

     }
     public function deletefood($id){
        $data=food::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function update($id){
        $data=food::find($id);
        return view('admin.adminupdatefood',compact('data'));
    }
    public function updatefood(Request $request,$id)
    {

        $data=food::find($id);
         $image=$request->image;
         $imagename=time().'.'.$image->getClientOriginalExtension();
         $request->image->move('foodpicture',$imagename);
         $data->image=$imagename;
         $data->title=$request->title;
         $data->description=$request->description;
         $data->price=$request->price;
         $data->save();
         return redirect()->back();
    }
    public function reservation(Request $request){
        $data=new reservations;
        
         $data->name=$request->name;
         $data->email=$request->email;
         $data->phone=$request->phone;
         $data->date=$request->date;
         $data->time=$request->time;
         $data->num_guest=$request->number_guest;
         $data->message=$request->message;
         $data->save();
         return redirect()->back();

       
    }
    public function tablereservation(){
        $data=reservations::all();
        return view('admin.adminreservations',compact('data'));
    }

    public function getchef(){
        $data=chef::all();
        return view('admin.adminchef',compact('data'));
    }

    public function insertchef(Request $request){
        $data=new chef;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodpicture',$imagename);
        $data->image=$imagename;
        $data->name=$request->name;
        $data->specialist=$request->specialist;
      
        $data->save();
        return redirect()->back();
    }
    public function deletechef($id){
        $data=chef::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updatechef($id){
        $data=chef::find($id);
        return view('admin.adminupdatechef',compact('data'));
    }
    public function chefupdate(Request $request,$id){
        $data=chef::find($id);

        $image=$request->image;
        if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodpicture',$imagename);
        $data->image=$imagename;
        }
        $data->name=$request->name;
        $data->specialist=$request->specialist;
          $data->save();
        return redirect('/chef');
    }

    public function orders(){
        $data=order::all();
        return view('admin.adminorder',compact('data'));

    }
    public function search(Request $request)
    {
        $search=$request->search;
        $data = order::query()
        ->where('foodname', 'LIKE', "%{$search}%")
        ->orWhere('name', 'LIKE', "%{$search}%")
        ->get();
        return view('admin.adminorder',compact('data'));

    }
    public function deleteorders($id){
        $data=order::find($id);
        $data->delete();
        return redirect()->back();
    }

}
