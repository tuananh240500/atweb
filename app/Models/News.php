<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = 'tbl_news';
    
    protected $fillable = [
        'title',
        'content',
        'created_by',
    ];
    
    public function comments()
    {
        return $this->hasMany(Comment::class,'news_id','id');
    }
    public function createdBy()
    {
        return $this->belongsTo(User::class,'created_by','id');
    }
}
