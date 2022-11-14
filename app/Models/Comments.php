<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory, HasUuids;

    // protected function user() {
    //     $this->belongsTo(User::class, 'user_id');
    // }
    // protected function comments() {
    //     $this->belongsTo(Posts::class, 'post_id');
    // }


}
