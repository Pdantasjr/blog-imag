<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Inertia\Inertia;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Staff/Index', [
            'staff' => DB::table('staff')->orderBy('created_at', 'DESC')->get(),
            'staffAvatar' => asset('storage/'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Staff/Create', [
            "member_avatar" => asset('storage/Staff/default/avatar_default.svg')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' =>  'required|min:3',
            'office' => 'required|min:3',
            'crm' => 'required',
            'email' => 'required|email',
        ];
        $message = [
            'name.required' => 'O campo Nome é obrigatório',
            'name.min' => 'O campo Nome deve conter pelo menos 3 caractéres',
            'office.required' => 'O campo Cargo é obrigatório',
            'office.min' => 'O campo Cargo deve conter pelo menos 3 caractéres',
            'crm.required' => 'O campo CRM é obrigatório',
            'email.required' => 'O campo E-mail é obrigatório',
            'email.email' => 'O campo E-mail é deve conter um email válido',
        ];

        Validator::validate($request->all(), $rules, $message);

        $member = New Staff();
        $slug = $this->setSlug($request->name);

        $avatarDefault = 'Staff/default/avatar_default.svg';

        $member->name = $request->name;
        $member->slug = $slug;
        $member->avatar = $request->file('avatar') ?  $request->file('avatar')->store('Staff/'.$slug, 'public') : $avatarDefault;
        $member->office = $request->office;
        $member->crm = $request->crm;
        $member->email = $request->email;
        $member->serviceTime = $request->input('serviceTime');
        $member->about = $request->about;
        $member->save();

        return Redirect::route('staff.index')->with(['toast' => ['message' => $request->name." foi cadastrado!"]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Staff $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        return Inertia::render('Staff/Edit', [
            "member" => $staff,
            "member_avatar" => Storage::url($staff->avatar),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Staff $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        $rules = [
            'name' =>  'required|min:3',
            'office' => 'required|min:3',
            'crm' => 'required',
            'email' => 'required|email',
        ];
        $message = [
            'name.required' => 'O campo Nome é obrigatório',
            'name.min' => 'O campo Nome deve conter pelo menos 3 caractéres',
            'office.required' => 'O campo Cargo é obrigatório',
            'office.min' => 'O campo Cargo deve conter pelo menos 3 caractéres',
            'crm.required' => 'O campo CRM é obrigatório',
            'email.required' => 'O campo E-mail é obrigatório',
            'email.email' => 'O campo E-mail é deve conter um email válido',
        ];

        Validator::validate($request->all(), $rules, $message);

        $avatar = $staff->avatar;
        $avatarDefault = 'Staff/default/avatar_default.svg';

        if($request->hasFile('avatar')) {
            $avatar != $avatarDefault ? Storage::delete('public/'.$staff->avatar) : null;
            $avatar = $request->file('avatar')->store('Staff/'.$staff->slug, 'public');
        }

        $staff->name = $request->input('name');
        $staff->avatar = $avatar;
        $staff->office = $request->input('office');
        $staff->crm = $request->input('crm');
        $staff->about = $request->input('about');
        $staff->email = $request->input('email');
        $staff->serviceTime = $request->input('serviceTime');
        $staff->about = $request->input('about');

        $staff->update();

        return Redirect::route('staff.index')->with(['toast' => ['message' => "Membro atualizado com sucesso!"]]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Staff $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        Storage::deleteDirectory('public/Staff/'.$staff->slug);
        $staff->delete();
        return Redirect::route('staff.index')->with(['toast' => ['message' => "Membro excluído com sucesso!"]]);
    }

    private function setSlug($member) {
        $titleSlug = Str::slug($member);

        $query = Staff::all();

        $t = 0;
        foreach ($query as $member) {
            if (Str::slug($member->name) === $titleSlug) {
                $t++;
            }
        }

        if ($t > 0) {
            $titleSlug = $titleSlug . '-' . $t;
        }
        return $titleSlug;
    }
}
