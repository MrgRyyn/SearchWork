<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $guarded = [];

    public function scopeFilter($query, array $filters) {
        if($filters['search'] ?? false) {
            $searchTerm = $filters['search'];
            $query->where('project_title', 'like', '%' . $searchTerm . '%')
                ->orWhere('project_description', 'like', '%' . $searchTerm . '%')
                ->orWhere('project_category', 'like', '%' . $searchTerm . '%');
        }
    }

    // Relationship To User
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
