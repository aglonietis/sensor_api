<?php

namespace App\Http\Controllers\Admin;

use App\Domain\Sensor\Actions\StoreSensor;
use App\Domain\Sensor\Data\StoreSensorDto;
use App\Domain\Sensor\Enum\SensorCommunicationType;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSensorRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SensorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('sensors.create',[
            'communicationTypes' => SensorCommunicationType::cases(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSensorRequest $request, StoreSensor $storeSensorAction): RedirectResponse
    {
        $storeSensorAction->handle(new StoreSensorDto(
            ip: $request->input('ip'),
            communicationType: SensorCommunicationType::from($request->input('communication_type')),
        ));

        return response()->redirectTo(route('sensors.create'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
