<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formModel extends Model
{
    use HasFactory;
    protected $table ="form_models";
    protected $primaryKey="id";
}
