<?php
namespace App\Services;
use App\Models\SuperAdmin\Tenants;

class TenantService
{
    public function addTenant($data)
    {
        $newTenanData =  [
            'name'=> $data->name,
            'domain'=>$data->domain,
            'ApiKey'=>$data->ApiKey
        ];
        Tenants::create($newTenanData);
    }
    

   
    
}
