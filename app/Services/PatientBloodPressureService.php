<?php
declare(strict_types=1);


namespace App\Services;


use App\Models\PatientBloodPressure;

class PatientBloodPressureService {

    /**
     * @param $patientBloodPressure
     * @return PatientBloodPressure
     */
    public function store($patientBloodPressure): PatientBloodPressure {
        $patientBloodPressure = array_merge($patientBloodPressure, ['added_by'=> auth()->id() ?: 1]);
        return PatientBloodPressure::create($patientBloodPressure);
     }

}
