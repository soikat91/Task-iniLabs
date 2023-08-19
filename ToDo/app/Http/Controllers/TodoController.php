<?php

namespace App\Http\Controllers;


use Exception;
use App\Models\TodoList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    function todo(){

        return view('pages.todo-page');
    }
    function getTodoList(Request $request){

        return TodoList::get();       
    }

    function createList(Request $request){
    
     try{   
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:55'                   
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $todo=TodoList::create([
            'title'=>$request->title,
            'description'=>$request->description,            
        ]);

        return response()->json([
            'status'=>"success",
            'message'=>"Todo Created Successfully",
            "data"=>$todo
        ],201);
     }catch(Exception $e){
        return response()->json([
            'status'=>"failed",
            'message'=>"Something Went Wrong"
           
        ],400);
     }   
       

    }
    function updateList(Request $request){

        try{           
                  
            $id=$request->input('id');          
         
             return TodoList::where('id',$id)->update([
                    'title'=>$request->title,
                    'description'=>$request->description
                ]);                
            
        }catch(Exception $e){

            return response()->json([
                'status'=>"failed",
                'message'=>"Something Went Wrong"
               
            ]);
        }
    }
        function TodoById(Request $request){

            $id=$request->input('id');        
            return TodoList::where('id',$id)->first();           
        

    }
    function deleteList(Request $request){

            $id=$request->input('id');
         
          return TodoList::where('id',$id)->delete();           
           
  
}
}
