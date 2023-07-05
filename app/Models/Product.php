<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = [];

    public function scopeFilter($query, array $filters) {
        if($filters['search2'] ?? false) {
            $searchTerm2 = $filters['search2'];
            $query->where('city', 'like', '%' . $searchTerm2 . '%');
        }
    }

    // Relationship To User
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
    
}
