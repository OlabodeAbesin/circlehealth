<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientBloodPressure extends Model
{
    use HasFactory;

    /**
    * The attributes that are mass assignable.
    *
    * @var string[]
    */
    protected $fillable = [
        'added_by',
        'systolic',
        'diastolic',
        'time_of_record',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
