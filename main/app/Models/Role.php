<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    use HasFactory;

    protected $table = 'role';
    protected $primaryKey = 'id_role';
    public $incrementing = false;
    protected $fillable = [
      'id_role',
      'nama_role',
    ];

    public function user(): HasMany{
        return $this->hasMany(User::class, "id_role");
    }
}
