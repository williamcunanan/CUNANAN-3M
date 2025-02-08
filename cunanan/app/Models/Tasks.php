<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;

    // table associated with the model
    protected $table = 'tasks';

    // the primary key for the model
    protected $primaryKey = 'id';

    // Allow mass assignment on these fields
    protected $fillable = ['title', 'description'];
}
