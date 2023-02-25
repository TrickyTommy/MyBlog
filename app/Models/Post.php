<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //yang boleh diisi
    // protected $fillable = ['tittle','author','excerpt','body'];

    //yang gak boleh di isi sisanya boleh
    protected $guarded = ['id'];
    protected $with = ['author','category'];


    //fiteri
    public function scopeFilter($query, array $filters)
    {
        //filters search
        // if(isset($filters['search']) ? $filters['search'] : false){
        //     return $query->where('tittle','like','%' . $filters['search'] . '%')
        //     ->orWhere('body', 'like', '%' .$filters['search'] . '%');
        // }
        //pengganti route
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('tittle','like','%' . $search . '%')
                        ->orWhere('body', 'like', '%' .$search . '%');
        });

        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                    $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false, function($query, $author){
            return $query->whereHas('author', function($query) use ($author){
                $query->where('username', $author);
            });
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
