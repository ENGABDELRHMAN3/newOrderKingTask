<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\SuperAdmin\Tenants;
use App\Services\TenantService;
use Illuminate\Http\Request;
use Inertia\Inertia;


class SuperAdminController extends Controller
{
    protected $tenantService;
    public function __construct(TenantService $tenantService)
    {
        $this->tenantService = $tenantService;
    }

    function index() {
        // dd('dasd');
      $tenants =   Tenants::all();


    //  dd($tenants);
        return inertia::render('SuperAdmin/Dashboard',[
            'tenants' => $tenants,
            
        ]);

        
    }

    function newTenant(Request $request) {
        $newTenantData= [
            'name'=> $request->name,
            'domain'=>$request->domain,
            'ApiKey'=>$request->ApiKey
        ];
        $this->tenantService->addTenant($newTenantData);

    }
    
}
