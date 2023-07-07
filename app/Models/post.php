<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class post extends Model
{
    use HasFactory;
    use Sluggable;
    
    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $table = 'posts';
    protected $guarded = [];


    // eager loading
    protected $with = ['user', 'category'];


            // fungsi pencarian konek ke model
    public function scopeFilter($query , array $filters)
    {



        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('title', 'like', '%'. $search . '%')
                         ->orWhere('body','like', '%'. $search . '%');
        });

        $query->when($filters['category'] ?? false, function($query, $category){
                return $query->whereHas('category', function($query) use ($category) {
                  $query->where('slug', $category);
                });
        });



        $query->when($filters['author'] ?? false, function($query, $author){
            return $query->whereHas('user', function($query) use ($author) {
              $query->where('ketua', $author);
            });
    });

        // // ini dimatikan saja dulu
        // $query->when($filters['author'] ?? false, fn($query, $author) =>
        //     $query->whereHas('user', fn($query) =>
        //          $query->where('ketua', $author)
        //     )
        //     );
    }



    public function category() 
    {
        return $this->belongsTo(category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    

    public function getRouteKeyName()
{
    return 'slug';
}


public function sluggable(): array
{
    return [
        'slug' => [
            'source' => 'title'
        ]
    ];
}


}
