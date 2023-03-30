<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\BaseController;
use App\Models\Listing;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ListingController extends BaseController{
    public function __construct()
    {
        $this->resources = 'user.listings.';
        parent::__construct();
        $this->route = 'listings.';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info['listings'] = Listing::where('user_id','!=', auth()->user()->id)->get();
        return view($this->indexResource(), $info);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->createResource());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);
        $features = [
            "rent" => $request->rent,
            "deposit" => $request->deposit,
            "duration" => $request->duration,
            "area" => $request->area,
            "bedroom" => $request->bedroom,
            "bathroom" => $request->bathroom,
            "livingroom" => $request->livingroom,
            "kitchen" => $request->kitchen,
            "rent_date" => $request->rent_date,
            "no_of_stories" => $request->no_of_stories,
            "road_width" => $request->road_width,
            "parking" => $request->parking,
            "type" => $request->type,
        ];

        $data = [
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description?:null,
            'location' => $request->location?:null,
            'latitude' => $request->latitude?:null,
            'longitude' => $request->longitude?:null,
            'user_id' => auth()->user()->id,
            'features' => json_encode($features, true),
        ];

        $listing = new Listing($data);
        $listing->save();
        if ($request->file('files') && count($request->file('files')) > 0) {
            foreach ($request->file('files') as $document) {
                $name = round(microtime(true) * 1000) . '-' . rand(111, 999);
                $fileName = $name . '.' . $document->extension();
                $media = $listing->addMedia($document)
                    ->usingName($name)
                    ->usingFileName($fileName)
                    ->toMediaCollection('listings');
                $media->save();
            }
        }
        if($request->video_url)
        {
            $listing->addMediaFromRequest('video_url')
                ->toMediaCollection('video');
        }
        return redirect()->route($this->indexRoute())->with('success', 'Listing Saved Successfully!.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $info['item'] = Listing::findOrFail($id);
        return view($this->showResource(), $info);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function edit(Listing $listing)
    {
        $info['item'] = $listing;
        return view($this->editResource(), $info);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listing $listing)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);
        $features = [
            "rent" => $request->rent,
            "deposit" => $request->deposit,
            "duration" => $request->duration,
            "area" => $request->area,
            "bedroom" => $request->bedroom,
            "bathroom" => $request->bathroom,
            "livingroom" => $request->livingroom,
            "kitchen" => $request->kitchen,
            "rent_date" => $request->rent_date,
            "no_of_stories" => $request->no_of_stories,
            "road_width" => $request->road_width,
            "parking" => $request->parking,
            "type" => $request->type,
        ];

        $data = [
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description?:null,
            'location' => $request->location?:null,
            'latitude' => $request->latitude?:null,
            'longitude' => $request->longitude?:null,
            'user_id' => auth()->user()->id,
            'features' => json_encode($features, true),
        ];

        $listing->update($data);
        if ($request->file('files') && count($request->file('files')) > 0) {
            foreach ($request->file('files') as $document) {
                $name = round(microtime(true) * 1000) . '-' . rand(111, 999);
                $fileName = $name . '.' . $document->extension();
                $media = $listing->addMedia($document)
                    ->usingName($name)
                    ->usingFileName($fileName)
                    ->toMediaCollection('listings');
                $media->save();
            }
        }
        if($request->video_url)
        {
            $listing->clearMediaCollection('video');
            $listing->addMediaFromRequest('video_url')
                ->toMediaCollection('video');
        }
        return redirect()->route($this->indexRoute())->with('success', 'Listing Saved Successfully!.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listing $listing)
    {
        $listing->delete();
        $listing->clearMediaCollection('listings');
        $listing->clearMediaCollection('video');
        return redirect()->back()->with('success', 'Listings Deleted Successfully.');
    }

    public function deleteFile(Request $request)
    {
//        dd($request->id);
        $media = Media::findOrFail($request->id);
        $media->delete();
        return response()->json(['status' => true, 'message' => 'Deleted Successfully']);
    }
}