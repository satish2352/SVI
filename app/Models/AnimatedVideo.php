<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimatedVideo extends Model
{
    use HasFactory;
    protected $table = 'animated_video';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'video_link'];
}
