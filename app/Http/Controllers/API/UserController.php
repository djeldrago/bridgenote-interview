<?php

namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    /**
     * Author = Muhammad Ramdhan Syakirin (projects.ramdhan@gmail.com)
     * Display a listing of the users.
     */
    public function index()
    {
        $users = User::select('user_id', 'name', 'status', 'position')->get();
        return response()->json([
            'success' => 'true',
            'message' => 'Success load Users',
            'data' => $users
        ], 200);
    }

    /**
     * Author = Muhammad Ramdhan Syakirin (projects.ramdhan@gmail.com)
     * Store a newly created user.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function store(Request $request)
    {
        try {
            // Validating inputed request
            $this->validate($request, [
                'name' => 'required',
                'status' => 'required',
                'position' => 'required',
            ]);

            // Inserting request into database
            $user = User::create([
                    'name' => $request->name,
                    'status' => $request->status,
                    'position' => $request->position,
                    ]);
                
            // Returning success responses
            return  response()->json([
                                'success' => true,
                                'message' => 'Success to add new user',
                                'data' => $user
                            ], 201);

        } catch(Exception $e) {
            return response()->json([
            'success' => 'false',
            'message' => $e->getMessage(),
            ], 400);
        }
    }

    /**
     * Author = Muhammad Ramdhan Syakirin (projects.ramdhan@gmail.com)
     * Show specificaly user.
     *
     * @param $id
     */
    public function show($id)
    {
        // Findy specific user by id
        $user = User::select('user_id', 'name', 'position', 'status')->where('user_id', $id)->first();
        if(empty($user)) {
            return response()->json([
            'success' => 'false',
            'message' => 'No Such User'
            ], 404);
        } else {
            return response()->json([
            'success' => 'true',
            'message' => 'Success to show user',
            'data' => $user
            ], 200);
        }
    }

    /**
     * Author = Muhammad Ramdhan Syakirin (projects.ramdhan@gmail.com)
     * Update an existing created user.
     *
     * @param \Illuminate\Http\Request $request, $id
     */
    public function update(Request $request, $id)
    {
        try {
            // Find user by specific id
            $user = User::find($id);
            if(empty($user)) {
                return response()->json([
                'success' => 'false',
                'message' => 'No Such User'
                ], 404);
            } else {
                // Updating inputed request into database
                $user->update([
                    'name' => $request->name,
                    'role' => $request->role,
                    'status' => $request->status
                ]);
                return response()->json([
                    'success' => 'true',
                    'message' => 'Success update user',
                    'data' => $user
                ], 201);
            }
        } catch(Exception $e) {
            return response()->json([
            'success' => 'false',
            'message' => $e->getMessage()
            ], 400);
        }   
    }
    
    /**
     * Author = Muhammad Ramdhan Syakirin (projects.ramdhan@gmail.com)
     * Delete an existing created user.
     *
     * @param $id
     */
    public function destroy($id)
    {
        try {
            // Find specific user
            $user = User::find($id);
            if(empty($user)) {
                return response()->json([
                'success' => 'false',
                'message' => 'No Such user',
            ], 404);
            } else {
                // Deleting the user
                $user->delete();
                return response()->json([
                    'success' => 'true',
                    'message' => 'Success deleting user'
                ], 201);
            }
        } catch(Exception $e) {
            return response()->json([
                'success' => 'false',
                'message' => $e->getMessage()
            ], 400);
        } 
    }
}
