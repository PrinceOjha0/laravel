<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'material_type',
        'industry_sector',
        'base_unit_measure',
        'material_group',
        'creation_date',
        'created_by',
        'loading_group',
        'old_material_number',
    ];
}
