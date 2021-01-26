<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

 /**
     * @OA\Info(
     *      version="1.0.0",
     *      title="Users And Posts Api  Documentation ",
     *      description="L5 Swagger OpenApi Doing this By Abdulrahman Masoud ",
     *      @OA\Contact(
     *          email="abdulrahman@gmail.com"
     *      ),
     *      @OA\License(
     *          name="Apache 2.0",
     *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
     *      )
     * )
     *
     * @OA\Server(
     *      url=L5_SWAGGER_CONST_HOST,
     *      description="This Api For CMS Project"
     * )
     * @OA\PathItem(
     *   path="api/documentation",
     * )
     *
     * @OA\Tag(
     *     name="Users",
     *     description="API Endpoints of Projects"
     * )
     
 
 */

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
