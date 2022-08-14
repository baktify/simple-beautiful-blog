<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use SoftDeletes;
    protected $fillable = ['name'];

    use HasFactory;

    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }

    public static function add($data)
    {
        return Tag::create($data);
    }

    public function edit($data)
    {
        $this->fill($data);
        $this->save();
    }

    public function getNameAttribute($value)
    {
        return ($value);
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }
}
