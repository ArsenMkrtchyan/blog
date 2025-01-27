<?php

namespace App\Http\Controllers;

use App\Models\Tractor;
use Illuminate\Http\Request;

class TractorController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        $tractors = Tractor::latest()->paginate(5);

        return view('tractors.index',compact('tractors'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function catalog()
    {
        $tractors = Tractor::all();

        return view('tractors.catalog-page',compact('tractors'));
    }
    public function catalogproduct(Tractor $tractor)
    {
        $tractors = Tractor::all();

        return view('tractors.product-page',compact('tractor','tractors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tractors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'features' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'text' => 'required',
            'enginetype' => 'required',
            'ratedengine' => 'required',
            'enginespeed' => 'required',
            'clutch' => 'required',
            'gears' => 'required',
            'gearshiftmode' => 'required',
            'speedrange' => 'required',
            'brake' => 'required',
            'rearpto' => 'required',
            'liftcapacity' => 'required',
            'hydraulic' => 'required',
            'dimensions' => 'required',
            'wheelbase' => 'required',
            'groundclearance' => 'required',
            'wheeltrack' => 'required',
            'minturningradius' => 'required',
            'tyre' => 'required',

        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Tractor::create($input);

        return redirect()->route('tractors.index')
            ->with('success','Tractor created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Tractor $tractor)
    {
        $tractors = Tractor::all();
        return view('tractors.show',compact('tractor','tractors'));
    }


    public function productpage(Tractor $tractor)
    {
        $tractors = Tractor::all();
        return view('tractors.product-page',compact('tractor','tractors'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tractor $tractor)
    {
        return view('tractors.edit',compact('tractor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tractor $tractor)
    {
        $request->validate([
            'name' => 'required',
            'features' => 'required',

            'text' => 'required',
            'enginetype' => 'required',
            'ratedengine' => 'required',
            'enginespeed' => 'required',
            'clutch' => 'required',
            'gears' => 'required',
            'gearshiftmode' => 'required',
            'speedrange' => 'required',
            'brake' => 'required',
            'rearpto' => 'required',
            'liftcapacity' => 'required',
            'hydraulic' => 'required',
            'dimensions' => 'required',
            'wheelbase' => 'required',
            'groundclearance' => 'required',
            'wheeltrack' => 'required',
            'minturningradius' => 'required',
            'tyre' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }

        $tractor->update($input);

        return redirect()->route('tractors.index')
            ->with('success','Tractor updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tractor $tractor)
    {
        $tractor->delete();

        return redirect()->route('tractors.index')
            ->with('success','Tractor deleted successfully');

    }

    public function layoutproducts()
    {
        $tractors = Tractor::all();

        return view('indexes.layout2',compact('tractors'));
    }
}
