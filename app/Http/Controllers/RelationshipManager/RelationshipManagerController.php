<?php

namespace App\Http\Controllers\RelationshipManager;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class RelationshipManagerController extends BaseController
{
    use DispatchesJobs, ValidatesRequests;

    use AuthorizesRequests {
        authorize as protected baseAuthorize;
    }

    public function authorize($ability, $arguments = []){
        if(\Auth::guard('relationshipmanager')->check()){
            \Auth::shouldUse('relationshipmanager');
        }

        $this->baseAuthorize($ability, $arguments);
    }
}
