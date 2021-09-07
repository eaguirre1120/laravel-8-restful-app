<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;
    protected $table = 'quotes';

    public $timestamps = false;

    protected $fillable = [
        'project_id',
        'position',
        'name'
    ];

    public function projects()
    {
        return $this->belongsTo(Project::class);
    }
}
