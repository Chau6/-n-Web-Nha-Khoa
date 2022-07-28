<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Comment;
   
class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::check()){
            $validator = validator::make($request->all(),[
                'comment' => 'required',
            ]);
            if($validator->fails()){
                return redirect()->back()->with('message','Comment area is mandetory');
            }
            $product = DB::table('products')->where('slug', $request->product_slug)->first();
            if($product){
                Comment::create([
                    'product_id' => $product->id,
                    'user_id' => Auth::user()->id,
                    'comment' => $request->comment,
                ]);
            
                return redirect()->back()->with('message', 'Commented successfully');

            }
            else{
                return redirect()->back()->with('message', 'No such product was found');
            }
        }
        else{
            return redirect('login_client')->with('message', 'Login first to comment');
        }
    }
}