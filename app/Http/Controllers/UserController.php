<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Get user list
     * @return @userList
     */
    public function userList(){
        $userList=Profile::all();
        return $userList;
    }

    /**
     *Get specific user by user id.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $request with user id
     * @return \Illuminate\Http\Response @$userProfile
     */
    public function getUser(Request $request){
        //create new groups
        $userProfile=Profile::findOrFail($request->id);
        return $userProfile;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $request with user id and role id
     * @return \Illuminate\Http\Response @$assignUserRole
     */
    public function update(Request $request)
    {
        //assign user role
        $assignUserRole=Profile::findOrFail($request->id);
        $assignUserRole->role_id = $request->roleId;
        $assignUserRole->updated_at = date('Y-m-d H:i:s'); 
        $assignUserRole->save();
        
        return $assignUserRole;
    }

        /**
     * Remove role from the specified user.
     *
     * @param  @$request with user id
     * @return \Illuminate\Http\Response @$deleteUserRole
     */
    public function destroy(Request $request)
    {
        //delete user role;
        $deleteUserRole=Profile::findOrFail($request->id);
        $deleteUserRole->role_id = null;
        $deleteUserRole->updated_at = date('Y-m-d H:i:s'); 
        $deleteUserRole->save();
        
        return $deleteUserRole;
    }
}
