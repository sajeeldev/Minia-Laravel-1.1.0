<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserRequest;
use App\Models\Employee;
use GuzzleHttp\Psr7\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $users = Employee::all();
        return view('custom.users', compact('users'));
    }

    public function create()
    {
        return view('custom.create');
    }

    public function store(UserRequest $request)
    {
        $data = $request->validated();
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $profileImage);
            $data['image'] = $destinationPath . $profileImage;
        }
        Employee::create($data);
        return redirect()->route('custom.users');
    }

    public function edit($id){
        $user = Employee::find($id);
        return view('custom.edit', compact('user'));
    }

    public function update(UserRequest $request, $id){
        $request->validated();
        $user = Employee::find($id);
        
        if($user){
            $user->update($request->all());
        }

        return redirect()->route('custom.users');
    }

    public function destroy($id){
        Employee::find($id)->delete();
        return redirect()->route('custom.users')
            ->with('success', 'User Registered Successfully');
    }
}
