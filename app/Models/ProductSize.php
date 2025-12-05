<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperProductSize
 */
class ProductSize extends Model
{
    public function size()
    {
        return $this->belongsTo(Size::class, 'size_id');
    }
}
