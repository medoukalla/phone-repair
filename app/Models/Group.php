<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    /**
     * Get all of the devices for the Group
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function devices(){
        return $this->hasMany(Device::class, 'group_id');
    }

    /**
     * Get the category that owns the Group
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

}
