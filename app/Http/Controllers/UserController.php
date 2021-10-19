<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Http\Request;

class UserController extends Controller
{
        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
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
