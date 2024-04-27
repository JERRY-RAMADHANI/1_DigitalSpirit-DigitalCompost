<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrganicHistory extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the OrganicHistory
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function authorOrganic(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}