<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    protected $fillable = ['user_id', 'student_code', 'status', 'gpa'];

    /**
     * Quan hệ: Một học sinh thuộc về một người dùng
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
