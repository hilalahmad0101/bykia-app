<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyJob extends Model
{
    use HasFactory;

    protected $table="apply_jobs";
    protected $fillable=[
        'user_id',
        "from",
        "to",
        "date",
        "time",
        "description",
        "status"
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
