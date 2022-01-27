<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Http\Requests\StoreCampaignRequest;
use App\Http\Requests\UpdateCampaignRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campaign = Campaign::all();
        return view('campaign.index', compact('campaign'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return view('campaign.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCampaignRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCampaignRequest $request)
    {
        $campaign = Campaign::all();
        $request->validate([
            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $file_name = $request->images->getClientOriginalName();
        $image = $request->images->move('img', $file_name);
        Campaign::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'author' => $request->author,
            'images' => $image,
            'description' => $request->description,
            'description_2' => $request->description_2,
            'description_3' => $request->description_3,
            'description_4' => $request->description_4,
            'description_5' => $request->description_5,
        ]);
        Alert::success('Success', 'Data Campaign sudah di tambahkan');
        return redirect()->route('campaign.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function show(Campaign $campaign)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function edit(Campaign $campaign)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCampaignRequest  $request
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCampaignRequest $request, Campaign $campaign)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campaign $campaign)
    {
         $campaign->delete();
        Alert::success('Success', 'Data Campaign sudah di hapus');
        return back();
    }
}
