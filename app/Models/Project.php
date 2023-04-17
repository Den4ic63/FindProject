<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'office_id',
    ];


    public function office()
    {
        return $this->belongsTo(Office::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class,'project_user');
    }

    public function comments()
    {
        return $this->hasMany(ProjectComment::class);
    }

    public function tasks()
    {
        return $this->hasMany(ProjectTask::class);
    }
}
