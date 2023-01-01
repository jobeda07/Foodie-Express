<?php

namespace App\Http\Controllers\backend;

use App\Models\Food;
use App\Models\Category;
use App\Models\UserModel;
use App\Models\AdminModel;
use App\Models\Deliveryboy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class dashboardController extends Controller
{
    public function dashboard(){
        return view('backend.pages.partial.dashboard');
    }



                                              //user_method
     public function user(){

        $alluser=UserModel::all();
        return view('backend.pages.userpage.user',compact('alluser'));
    }
     public function userform()
    {
        return view('backend.pages.userpage.userform');
    }
    public function user_submit(Request $request){
        //dd($request);
        UserModel::create([
            'user_name'=>$request->user_name,
            'user_email'=>$request->user_email,
            'user_mobile'=>$request->user_mobile,
            'user_address'=>$request->user_address,
           ]);
           //return redirect()->route('usershowpage');
       return to_route('user');
    }
    public function user_delete($id){
        UserModel::find($id)->delete();
        return back();

    }
    public function user_editform($id){
        $edituser=UserModel::find($id);
        return view('backend.pages.userpage.usereditform',compact('edituser'));
    }
    public function user_editform_submit(Request $request ,$id){
       $updateuser=UserModel::find($id);
       $updateuser->update([
        'user_name'=>$request->user_name,
        'user_email'=>$request->user_email,
        'user_mobile'=>$request->user_mobile,
        'user_address'=>$request->user_address,
       ]);
       return to_route('user');
    }

    
    


                                          //foodcategorymethod//
    public function category(){
        $categories=Category::all();
        return view('backend.pages.food category.categoryview',compact('categories'));
    }                                      
    public function category_form(){
        return view('backend.pages.food category.categoryform');
    }                                      
    public function category_form_submit(Request $request){
        $fileName=null;
        if ($request->hasfile('category_image')){
            $fileName='category'.'_'.date('Ymdhmsis').'.'.$request->file('category_image')->getClientOriginalExtension();
             $request->file('category_image')->storeAs('/uploads/category',$fileName);
        }
         Category::create([
            'category_name'=>$request->category_name,
            'category_image'=>$fileName,
            'status'=>$request->status,
            'description'=>$request->description
         ]);
         return to_route('category');
    }   
    public function category_editpage($id){
        $category_edit=Category::find($id);
        return view('backend.pages.food category.editpage',compact('category_edit'));

    }   
    public function category_update(Request $request, $id){
           $category=Category::find($id);
           $fileName=$category->category_image;
           if($request->hasfile('category_image')){
            $removefile=public_path().'/uploads/category/'.$fileName;
            File::delete($removefile);
            $fileName='category'.'_'.date('Ymdhmsis').'.'.$request->file('category_image')->getClientOriginalExtension();
             $request->file('category_image')->storeAs('/uploads/category/',$fileName);
           }
           $category->update([
            'category_name'=>$request->category_name,
            'category_image'=>$fileName,
            'status'=>$request->status,
            'description'=>$request->description
         ]);
         return to_route('category');


    }     
    public function category_delete($id){
        $category=Category::find($id);
        $fileName=$category->category_image;
        $removefile=public_path().'/uploads/category/'.$fileName;
        File::delete($removefile);
        $category->delete();
        return back();
    }  
    
    
                                //deliveryboymethod//


    public function deliveryboy(){
        $deliveryboys = Deliveryboy::paginate(3);
        return view('backend.pages.deliveryboy.deliveryboy',compact('deliveryboys'));

    }
    public function deliveryboy_form(){
        return view('backend.pages.deliveryboy.deliveryboyform');
    }
    public function deliveryboy_form_submit(Request $request){
         
        $fileName =null;
        if($request->hasfile('deliveryboy_image')){
                $fileName ='deliveryboy'.'_'.date('Ymdhmsis').'.'.$request->file('deliveryboy_image')->getClientOriginalExtension();
                //dd($fileName);
                $request->file('deliveryboy_image')->storeAs('/uploads/delivery', $fileName);
        }
        Deliveryboy::create([
            'deliveryboy_name'=>$request->deliveryboy_name,
            'deliveryboy_image'=>$fileName,
            'deliveryboy_email'=>$request->deliveryboy_email,
            'deliveryboy_mobile'=>$request->deliveryboy_mobile,
            'deliveryboy_address'=>$request->deliveryboy_address,
            
           ]);
           return to_route('deliveryboy');
    }

      public function delivery_editpage($id){
        $edit=Deliveryboy::find($id);
        return view ('backend.pages.deliveryboy.deliveryboyedit',compact('edit'));
      }
      public function edit_submit(Request $request, $id){
        $deliveryboy=Deliveryboy::find($id);
           $fileName=$deliveryboy->deliveryboy_image;
           if($request->hasfile('deliveryboy_image')){
            $removefile=public_path().'/uploads/delivery/'.$fileName;
            File::delete($removefile);
            $fileName='deliveryboy'.'_'.date('Ymdhmsis').'.'.$request->file('deliveryboy_image')->getClientOriginalExtension();
             $request->file('deliveryboy_image')->storeAs('/uploads/delivery/',$fileName);
           }
        $deliveryboy->update([
            'deliveryboy_name'=>$request->deliveryboy_name,
            'deliveryboy_image'=>$fileName,
            'deliveryboy_email'=>$request->deliveryboy_email,
            'deliveryboy_mobile'=>$request->deliveryboy_mobile,
            'deliveryboy_address'=>$request->deliveryboy_address,
            
           ]);
           return to_route('deliveryboy');
      }
      public function deliveryboy_delete($id){
        $deliveryboy=Deliveryboy::find($id);
        $fileName=$deliveryboy->deliveryboy_image;
        $removefile=public_path().'/uploads/delivery/'.$fileName;
        File::delete($removefile);
        $deliveryboy->delete();
        return back();
      }
       public function admin(){
        $admin=AdminModel::all();
        return view('backend.pages.admin.admin',compact('admin'));

       }
       public function admin_form(){
        return view('backend.pages.admin.adminform');

       }
       public function admin_form_submit(Request $request){
        //dd($request);
        AdminModel::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'Mobile'=>$request->Mobile,
            'email'=>$request->email,
            'address'=>$request->address,
            'username'=>$request->username,
            'password'=>$request->password
        ]);
        return to_route('admin');

       }
       public function admin_delete($id){
           AdminModel::find($id)->delete();
           return back();
       }
       public function admin_editpage($id){
        $edit=AdminModel::find($id);
            return view('backend.pages.admin.adminedit',compact('edit'));
       }
       public function admin_update(Request $request, $id){
        $admin_update=AdminModel::find($id);
        $admin_update->update([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'Mobile'=>$request->Mobile,
            'email'=>$request->email,
            'address'=>$request->address,
            'username'=>$request->username,
            'password'=>$request->password
        ]);
        return to_route('admin');
       }


                                  //foodmethod
     public function food(){
        $foods = Food::with('categoryRelation')->get();
       return view('backend.pages.all-food.food',compact('foods'));
}
      public function food_form(){
        $categories=Category::all();
          return view('backend.pages.all-food.food-form' ,compact('categories'));
}

   public function store(Request $request){
     Food::create([
    'name' =>$request->name,
    'description' =>$request->description,
    'quantity' =>$request->quantity,
    'price' =>$request->price,
    'stock_status' =>$request->stock_status,
    'category_id' =>$request->category_id,

   ]);
   return to_route('food');
} 

     public function food_editpage($id){
        $categories=Category::all();
        $food_edit=Food::find($id);
        return view('backend.pages.all-food.food-edit',compact('categories','food_edit'));
     } 
     public function food_update(Request $request, $id){
        $food=Food::find($id);
        $food->update([
            'name' =>$request->name,
            'description' =>$request->description,
            'quantity' =>$request->quantity,
            'price' =>$request->price,
            'stock_status' =>$request->stock_status,
            'category_id' =>$request->category_id,
        
           ]);
           return to_route('food');
     }
     public function food_delete($id){
        Food::find($id)->delete();
        return back();



     }






}
