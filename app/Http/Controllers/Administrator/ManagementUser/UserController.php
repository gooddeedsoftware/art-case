<?php

namespace App\Http\Controllers\Administrator\ManagementUser;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\ManagementUser\UpdateUserRequest;
use App\Services\Interfaces\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(
        private UserService $userService
    ){}

    public function index(Request $request){
        if($request->ajax()) {
            return $this->userService->get($request->all());
        }
        return view('administrator.manage-user.index');
    }

    public function create(Request $request){
        $type = 'user';
        return view("administrator.manage-user.createForm", compact('type'));
        
    }

    public function createAuthor(Request $request){
        $type = 'author';
        return view("administrator.manage-user.createForm", compact('type'));        
    }

    public function createArtist(Request $request){
        $type = 'artist';
        return view("administrator.manage-user.createForm", compact('type'));
    }

    public function update(UpdateUserRequest $request, $id){
        try {
            return $this->sendSuccess([
                'message'   => 'User has been updated',
                'data'      => $this->userService->update($request->all(), $id)
            ]);
        } catch (\Exception $e) {
            return $this->sendError($e);
        }
    }

    public function delete(Request $request, $id){
        try {
            return $this->sendSuccess([
                'message'   => 'User '.$request->name.' has been deleted',
                'data'      => $this->userService->delete($id)
            ]);
        } catch (\Exception $e) {
            return $this->sendError($e);
        }
    }

    public function author(Request $request){
        if($request->ajax()) {
            return $this->userService->get($request->all());
        }
        return view('administrator.manage-author.index');
    }

    public function artist(Request $request){
        if($request->ajax()) {
            return $this->userService->get($request->all());
        }
        return view('administrator.manage-artist.index');
    }

    
}
