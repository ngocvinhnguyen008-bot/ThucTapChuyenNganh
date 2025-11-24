<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Teacher extends Model
{
    protected $fillable = ['user_id', 'employee_code', 'specialization', 'status', 'rating'];

    /**
     * Quan hệ: Một giáo viên thuộc về một người dùng
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
