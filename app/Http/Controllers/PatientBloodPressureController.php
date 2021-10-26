<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\User\PatientBloodPressure\StoreRequest;
use App\Models\PatientBloodPressure;
use App\Models\User;
use App\Services\PatientBloodPressureService;
use App\Services\UserService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PatientBloodPressureController extends Controller
{
    protected PatientBloodPressureService $patientBloodPressureService;
    public function __construct(PatientBloodPressureService $patientBloodPressureService)
    {
        $this->patientBloodPressureService = $patientBloodPressureService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('users.patientbloodpressure.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(Request $request)
    {
        return view('users.patientbloodpressure.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRequest $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request)
    {
        $this->patientBloodPressureService->store($request->validated());

        return redirect()->back()->with('status', 'Blood pressure recorded successfully');
    }
}
