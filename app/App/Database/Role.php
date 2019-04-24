<?php

declare(strict_types=1);

namespace App\Database;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = ['title'];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'roles_permissions');
    }
}
