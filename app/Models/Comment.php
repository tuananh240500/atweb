<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'tbl_comments';
    
    protected $fillable = [
        'content',
        'created_by',
        'news_id',
    ];
    
    public function createdBy(){
        return $this->belongsTo(User::class,'created_by');
    }
    
}
