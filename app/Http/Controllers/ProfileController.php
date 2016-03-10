<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        return view('pages.person.userprofile')->with($user->toArray());
		
    }
    
	  public function profile(Request $request, $id) {
		$data['user'] = User::find($id);
		if (!$data['user'])
		  return redirect('/');
		if ($request -> user() && $data['user'] -> id == $request -> user() -> id) {
		  $data['person'] = true;
		} else {
		  $data['person'] = null;
		}
		$data['mentee_id'] = $data['user'] -> mentee -> count();
		$data['mentorship_session'] = $data['user'] -> mentorship_session-> count();
		$data['facility'] = $data['user'] -> facility -> where('active', '1') -> count();
		$data['gender'] = $data['person'] - $data['person'];
		$data['session_id'] = $data['user'] -> mentorship_session -> take(5);
		
		return view('person.userprofile', $data);
	  }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function create(array $data)
	{
		$user = User::create([
			'name' => $data['name'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
		]);
		$user->profile()->save(new Profile);
		return $user;
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
    /*public function show($id)
    {
        //
    }*/
    public function show($username)
	{
		$user = User::whereUsername($username)->whereActivated(true)->first();

		$user->access_counter++;
		$user->save();

		$this->title($user->username);
		$this->pageView('users::show', compact('user'));
		
	}
    /**
	Route::get('users/{username}', 'UsersController@show');
     * Show the form for editing the specified resource.
     *
	 public function show( App\User $user )
	 	{
    		return view('users.show', compact('user'));
		}
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		
        $userInfo = User::find(Auth::id())->with('personalInfo')->first();
        return View('pages.person.register')->with('userInfo',$userInfo);
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
	  $User = User::with('user_info')->find($id);
	  if(!$User) {
		return response('User not found', 404);
	  }

	  $UserInfo = $User->user_info;
	  if(!$UserInfo) {
		$UserInfo = new UserInfo();
		$UserInfo->user_id = $id;
		$UserInfo->save();
	  }

	  try {
		$values = Input::only($UserInfo->getFillable());
		$UserInfo->update($values);
	  } catch(Exception $ex) {
		return response($ex->getMessage(), 400);
	  }
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
