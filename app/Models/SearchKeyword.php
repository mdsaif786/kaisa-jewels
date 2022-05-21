<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class SearchKeyword extends Model
{
    public $table = 'search_keywords';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'keyword_name',
        'ip',
        'user_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
