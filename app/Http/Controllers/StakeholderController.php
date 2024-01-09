<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStakeholderRequest;
use App\Http\Requests\UpdateStakeholderRequest;
use App\Models\Stakeholder;
use App\Models\UserGroup;

class StakeholderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data['stakeholders'] = Stakeholder::latest()->get();
        $data['total_stakeholder'] = count($data['stakeholders']);
        $data['total_pending'] = $data['stakeholders']->sum("balance");
        return view("pages.stakeholder.all_stakeholder")->with($data);
    }

    public function type (UserGroup $usergroup)
    {
//        dd($usergroup->stakeholders);
        $data['stakeholders'] = $usergroup->stakeholders;
        $data['usergroup'] = $usergroup;
        $data['total_stakeholder'] = count($data['stakeholders']);
        $data['total_pending'] = $data['stakeholders']->sum("balance");
        return view("pages.stakeholder.filter_stakeholder")->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        dd("new page");
        $data['member_types'] = UserGroup::all();
        return view("pages.stakeholder.add_stakeholder")->with($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStakeholderRequest $request)
    {
//        dd($request->all());
        Stakeholder::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'CNIC' => $request->cnic,
            'phone' => $request->phone,
            'city' => $request->city,
            'user_group_id' => $request->member_type,
            'opening_balance' => 0,
            'balance' => 0,
        ]);

        return "add ho gya";

    }

    /**
     * Display the specified resource.
     */
    public function show(Stakeholder $stakeholder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stakeholder $stakeholder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStakeholderRequest $request, Stakeholder $stakeholder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stakeholder $stakeholder)
    {
        //
    }
}
