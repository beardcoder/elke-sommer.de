<?php

namespace App\Twill\Capsules\Appointments\Models;

use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Appointment extends Model
{
  use HasRevisions;

  protected $casts = [
    'date_start' => 'datetime',
    'date_end' => 'datetime',
  ];

  protected $fillable = ['published', 'title', 'date_start', 'date_end'];

  public function appointment_registrations(): HasMany
  {
    return $this->hasMany(AppointmentRegistration::class);
  }

  public static function findFuture()
  {
    return static::where('date_start', '>=', date('Y-m-d G:i:s'))->get();
  }
}
