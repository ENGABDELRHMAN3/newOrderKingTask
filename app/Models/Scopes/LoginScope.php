<?php

namespace App\Models\Scopes;

use App\Models\SuperAdmin\Tenants;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class LoginScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     */
    public function apply(Builder $builder, Model $model): void
    {
        $host= request()->getHost();
        $tanant = Tenants::where('domain' ,$host)->firstOrFail();


        $builder->where(function ($query) use ($tanant) {
            $query->where(function ($subquery) {
                $subquery->where('ApiKey', null)
                    ->where('role', 1);
            })->orWhere('ApiKey', $tanant->ApiKey);
        });
    }
}
