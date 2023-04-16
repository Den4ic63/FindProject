<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTask extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'status', 'deadline', 'project_id'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
