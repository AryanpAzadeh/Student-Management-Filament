<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['class_id', 'section_id', 'name', 'email', 'address', 'phone_number'];

    public function class(): BelongsTo
    {
        return $this->belongsTo(Classes::class , 'class_id');
    }

    public function section(): BelongsTo
    {
        return $this->belongsTo(Section::class , 'section_id');
    }
}
