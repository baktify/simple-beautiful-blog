<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = ['name'];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public static function add($data)
    {
        return Category::create($data);
    }

    public function edit($data)
    {
        $this->fill($data);
        $this->save();
    }

    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }
}
