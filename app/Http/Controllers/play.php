<?php

namespace App\Http\Controllers;
use App\Http\Requests\login;
use App\Http\Requests\profile_verify;
use App\Http\Requests\karamoozi;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class play extends Controller
{
    public function start_app(){
        return view('enter_form');
    }
    public function login(login $request){
$validation=$request->validated();
$user=User::where('code_melli',$request->code_melli)
->where('birth',$request->birth)
->first();
if($user){
    Auth::login($user);
  return view('account',compact('user'));  
} 
  }
  public function panel()
  {

   return view('account');
  }
  
public function karamoozi_page(){
  $user=Auth()->user();
  if($user->profile){
return redirect()->route('error');
  }
  else{
    return view('karamoozi_form',compact('user'));
  }
}
public function karamoozi_validation(karamoozi $request) {
  $validate_karamoozi = $request->validated();
  $user = auth()->user();

  if ($user) {
      $user->profile()->updateOrCreate(
          ['user_id' => $user->id],
          [
              'area' => $request->area,
              'karamoozi_name' => $request->karamoozi_name,
              'karamoozi_address' => $request->karamoozi_address,
              'karamoozi_post' => $request->karamoozi_post,
              'karfarma' => $request->karfarma,
          ]
      );
      return view('account', compact('user'));
  }
}
public function show_data(){
  $user=Auth()->user();
  if($user->profile){
    return view('profile',compact('user'));
  }
  else{
 return redirect()->route('error2');
  }
}
public function logout(Request $request){
  Auth::logout($user);
  $request->session()->invalidate();
  $request->session()->regenerateToken();
  return redirect()->route('welcome');
}
}
