<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
class UserCRUDController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$data['users'] = User::orderBy('id','desc')->paginate(5);
return view('users.index', $data);
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('users.create');
}
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
$request->validate([
'name' => 'required',
'email' => 'required',
'password' => 'required'
]);
$user = new User;
$user->name = $request->name;
$user->email = $request->email;
$user->password = $request->password;
$user->save();
return redirect()->route('users.index')
->with('success','User has been created successfully.');
}
/**
* Display the specified resource.
*
* @param  \App\company  $company
* @return \Illuminate\Http\Response
*/
public function show(User $user)
{
return view('users.show',compact('user'));
} 
/**
* Show the form for editing the specified resource.
*
* @param  \App\Company  $company
* @return \Illuminate\Http\Response
*/
public function edit(User $user)
{
return view('users.edit',compact('user'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\company  $company
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
$request->validate([
'name' => 'required',
'email' => 'required',
'password' => 'required',
]);
$user = User::find($id);
$user->name = $request->name;
$user->email = $request->email;
$user->password = $request->password;
$user->save();
return redirect()->route('users.index')
->with('success','User Has Been updated successfully');
}
/**
* Remove the specified resource from storage.
*
* @param  \App\Company  $company
* @return \Illuminate\Http\Response
*/
public function destroy(User $user)
{
$user->delete();
return redirect()->route('users.index')
->with('success','User has been deleted successfully');
}
}