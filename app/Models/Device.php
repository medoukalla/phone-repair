<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;


    /**
     * Get the group that owns the Device
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function group() {
        return $this->belongsTo( Group::class, 'group_id' );
    }

    /**
     * Get the category that owns the Device
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category() {
        return $this->belongsTo( Category::class, 'category_id' );
    }

    /**
     * Get all of the repairs for the Device
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function repairs() {
        return $this->hasMany(Repair::class, 'device_id');
    }


}
