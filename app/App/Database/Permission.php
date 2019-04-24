<?php

declare(strict_types=1);

namespace App\Database;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';

    protected $fillable = ['name'];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'roles_permissions');
    }
}
