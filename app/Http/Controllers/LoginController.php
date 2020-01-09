<?php
 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\userRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user = Auth::User()->id;
        $getUser = Auth::user()->findOrFail($user);
        $post = Post::where('id_user',$user)->get();

        return view('home',['posts'=>$post,'user'=>$getUser]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRegister(){
        return view('auth.register');
    }
    public function postRegister(userRequest $rq){

        $user = new user();
        $user->name         = $rq->name;
        $user->email        = $rq->email;
        $user->age          = $rq->age;
        $user->gender       = $rq->gender;
        $user->number_phone = $rq->number_phone;
        $user->password     = Hash::make($rq->password);
        $user->save();

      

    }
    public function logout(Request $rq){
          Auth::logout();
          return redirect('/login');

    }
    public function getLogin(){
        return view('auth.login');
    }
    public function postLogin(){
        return redirect()->back();

    }
    public function postFile(Request $rq){
        $isFile = $rq->hasFile('file');

    }
    public function create(Request $rq)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
