<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Article extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = ['title', 'full_text', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public static function add($data)
    {
        return self::create($data);
    }

    public function setTags($tags)
    {
        return $this->tags()->sync($tags);
    }

    public function setImage($image)
    {
        if ($image == null) {
            return null;
        }
        $this->removeImage($this->image);
        $this->image = Storage::putFile('/images', $image);
        $this->save();
    }

    public function hasCategory()
    {
        if (!is_null($this->category)) {
            return true;
        }
        return false;
    }

    public function hasTags()
    {
        if ($this->tags->isEmpty()){
            return false;
        }
        return true;
    }

    public function hasImage()
    {
        if (!is_null($this->image)) {
//            if (Storage::exists($this->image)) {
//                return true;
//            }
            return true;
        }
        return false;
    }

    public function selectedTags()
    {
        if ($this->tags->isEmpty()) {
            return null;
        }
        return $this->tags->pluck('id')->all();
    }

    public function showCategory()
    {
        if (is_null($this->category)) {
            return 'No category';
        }
        return $this->category->name;
    }

    public function showTags()
    {
        if ($this->tags->isEmpty()) {
            return 'No tags';
        }
        return $this->tags->pluck('name')->implode(', ');
    }

    public function showImage()
    {
        if (!is_null($this->image)) {
//            if (Storage::exists($this->image)) {
//                return $this->image;
//            }
            return $this->image;
        }
        return asset('images/no-image-available.jpg');
    }

    public function removeImage($image)
    {
        if (Storage::exists($image)) {
            Storage::delete($image);
        }
    }

}
