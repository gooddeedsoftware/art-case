<?php

namespace App\Http\Controllers\Administrator\ManagementUser;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\ManagementUser\UpdateUserRequest;
use App\Services\Interfaces\UserService;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function __construct(
        private UserService $userService
    ){}

    public function index(Request $request){
        $data = User::where('type', 'user')->get();
        return view('administrator.manage-user.index', compact('data'));
    }

    public function create(Request $request){
        $type = 'user';
        $edit = false;
        return view("administrator.manage-user.create", compact('type', 'edit'));
        
    }

    public function createAuthor(Request $request){
        $type = 'author';
        $edit = false;
        return view("administrator.manage-user.create", compact('type', 'edit'));        
    }

    public function createArtist(Request $request){
        $type = 'artist';
        $edit = false;
        return view("administrator.manage-user.create", compact('type', 'edit'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        // $validator = Validator::make($data, [
        //     'first_name' => ['required', 'string', 'max:255'],
        //     'last_name' => ['required', 'string', 'max:255'],
        //     'mobile' => ['required', 'numeric', 'min:10'],
        //     'country' => ['required', 'string', 'max:255'],
        //     'aboutnote' => ['required'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'min:8', 'confirmed'],
        // ]); 
        // if ($validator->fails()) {
        //     return back()->with('error','Validation errors');
        // } 
        
        $image = $request->file('image');
        
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('uploads/users/'), $imageName);

        $data['image'] = $imageName;
        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'mobile' => $data['mobile'],
            'country' => $data['country'],
            'aboutnote' => $data['aboutnote'],
            'image' => $data['image'],
            'type' => $data['type'],
            'password' => Hash::make($data['password']),
        ]);
        return back()->with('success','Item created successfully!');
    }

    public function edit(Request $request, $id){
        $user = User::find($id);
        $edit = true;
        $type = $user->type;
        return view('administrator.manage-user.create', compact('user', 'edit', 'type'));
    }
    

    public function update(UpdateUserRequest $request, $id){
        try {
            $this->userService->update($request->all(), $id);
            return back()->with('success','Item update successfully!');
        } catch (\Exception $e) {
            return $this->sendError($e);
        }
    }

    public function delete(Request $request, $id){
        try {
            $data = User::find($id);
            $data->delete();
            return redirect()->back()->with('Success', 'Art Deleted Successfully.');
        } catch (\Exception $e) {
            return $this->sendError($e);
        }
    }

    public function author(Request $request){
        $data = User::where('type', 'author')->get();
        return view('administrator.manage-author.index', compact('data'));
    }

    public function artist(Request $request){
        $data = User::where('type', 'artist')->get();
        return view('administrator.manage-artist.index', compact('data'));
    }

    
}
