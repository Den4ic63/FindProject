<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'country',
        'city',
        'office_type',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'users_offices');
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
