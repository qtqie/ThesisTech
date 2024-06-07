<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use App\Models\Platinum;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function platinumHome()
    // {
    //     return view('home');
    // }

    // public function staffHome()
    // {
    //     return view('staff');
    // }

    // public function mentorHome()
    // {
    //     return view('mentor');
    // }

    // public function home($role)
    // {
    //     // Mapping roles to Blade view files
    //     $viewMap = [
    //         'platinum' => 'platinum.home',
    //         'staff' => 'staff.home',
    //         'mentor' => 'mentor.home',
    //     ];

    //     // Check if the role exists in the map, otherwise handle as needed (e.g., 404 error)
    //     if (array_key_exists($role, $viewMap)) {
    //         return view($viewMap[$role]);
    //     } else {
    //         abort(404); // Role not found, return a 404 error or handle differently
    //     }
    // }

    public function index()
    {
        $users = User::all();
        return view('UserProfile.index', compact('users'));
    }

    public function show(User $user)
    {
        $user = Auth::user();
        $role = $user->role;
        return view('UserProfile.show',compact('user','role'));
    }

    public function search($id)
    {
        $user = User::findOrFail($id);
        return view('UserProfile.show', compact('user'));
    }

    public function edit(User $user)
    {
        $role = $user->role;
        return view('UserProfile.edit',compact('user','role'));
    }

    public function update(Request $request, User $user)
    {
        $role = $user->role;

        switch ($role) {
            case 'platinum':
                $profile = Platinum::where('user_id', $user->id)->firstOrFail(); 
                $data = [
                    'p_hp_no' => 'required|string',
                    'p_address' => 'required|string',
                    'p_race' => 'required|string',
                    'p_religion' => 'required|string',
                    'p_fb_name' => 'required|string',
                ];
                break;
            case 'mentor':
                $profile = Mentor::where('user_id', $user->id)->firstOrFail();
                $data = [
                    'm_hp_no' => 'required|string',
                    'm_address' => 'required|string',
                    'm_race' => 'required|string',
                    'm_religion' => 'required|string',
                ];
                break;
            case 'staff':
                $profile = Staff::where('user_id', $user->id)->firstOrFail();
                $data = [
                    's_hp_no' => 'required|string',
                    's_address' => 'required|string',
                    's_race' => 'required|string',
                    's_religion' => 'required|string',
                ];
                break;
            default:
                abort(404);
        }
        $validatedData = $request->validate($data);
        $profile->update($validatedData);

        return redirect()->route('profile.show', ['user' => $profile->user_id])->with('success', 'Profile updated successfully');
    }
    
    public function edit_image(User $user){
        $user = Auth::user();
        return view('UserProfile.image',compact('user'));
    }

    public function upload(Request $request, $id)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // dd($request->all());
        $user = User::findOrFail($id);

        if (!Storage::exists("public/{$id}")) {
            Storage::makeDirectory("public/{$id}");
        }

        if ($request->hasFile('photo')) {
            if ($user->photo) {
                $oldPhotoPath = str_replace('/storage/', '', $user->photo);
                Storage::disk('public')->delete($oldPhotoPath);
            }
            $photo = $request->file('photo');
            $fileName = $photo->getClientOriginalName();
            $path = $photo->storeAs("{$id}", $fileName,'public');
            $user->photo = "/storage/{$path}";
            $user->save();
        }
        
        return redirect()->route('profile.show', ['user' => $user->id])->with('success', 'Profile Photo updated successfully');
    }

    public function destroy(User $user)
    {
        // Check if the authenticated user has permission to delete users
        if (auth()->user()->role != 'staff') {
            abort(403, 'Unauthorized action.');
        }

        // Delete the user
        $user->delete();

        return redirect()->back()->with('success', 'User deleted successfully.');
    }

    public function insertUserDataForm($userId)
    {

        return view('auth.insert',compact('userId'));
    }

    public function insertUserData(Request $request, $userId)
    {
        $user = User::find($userId);
        $role = $user->role;
        switch ($role) {
            case 'platinum':
                $profile = new Platinum(); 
                $profile->user_id = $user->id;
                $profile->user_id = $userId;
                $profile->p_ic = $request->p_ic;
                $profile->p_gender = $request->p_gender;
                $profile->p_religion = $request->p_religion;
                $profile->p_race = $request->p_race;
                $profile->p_citizenship = $request->p_citizenship;
                $profile->p_address = $request->p_address;
                $profile->p_hp_no = $request->p_hp_no;
                $profile->p_fb_name = $request->p_fb_name;
                $profile->p_edu_information = $request->p_edu_information;
                $profile->p_pakej = $request->p_pakej;
                $profile->p_batch_no = $request->p_batch_no;
                $profile->p_cluster_of_study = $request->p_cluster_of_study;
                break;
            case 'staff':
                $profile = new Staff(); 
                $profile->user_id = $user->id;
                $profile->s_ic = $request->s_ic;
                $profile->s_gender = $request->s_gender;
                $profile->s_religion = $request->s_religion;
                $profile->s_race = $request->s_race;
                $profile->s_citizenship = $request->s_citizenship;
                $profile->s_address = $request->s_address;
                $profile->s_hp_no = $request->s_hp_no;
                $profile->s_department = $request->s_department;
                $profile->s_position = $request->s_position;
                break;
            default:
                abort(404);
        }
            $profile->save();

        return redirect('register')->with('success', 'User data inserted successfully!');
    }

}
