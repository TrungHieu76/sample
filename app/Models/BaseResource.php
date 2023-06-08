<?php
 
namespace App\Models;

use Illuminate\Http\Resources\Json\JsonResource;
 
class BaseResource extends JsonResource
{

    /**
     * The "data" wrapper that should be applied.
     *
     * @var string|null
     */
    public static $wrap = null;
}