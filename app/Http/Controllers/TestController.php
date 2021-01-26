<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/users",
     *      operationId="getProjectsList [From operationId]",
     *      tags={"All Users [From tags]"},
     *      summary="Get list of projects [From summary]",
     *      description="Returns list of projects",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *     )
     */
    public function index()
    {
        $data = [
            ['id'=>1,'name'=>'Abdulrahman0','age'=>21],
            ['id'=>2,'name'=>'Abdulrahman1','age'=>21],
            ['id'=>3,'name'=>'Abdulrahman2','age'=>21],
            ['id'=>4,'name'=>'Abdulrahman3','age'=>21],
            ['id'=>5,'name'=>'Abdulrahman4','age'=>21],
            ['id'=>6,'name'=>'Abdulrahman5','age'=>21]
        ];

        return response()->json([
            'status'=> true,
            'data'=>$data[0]['id']
        ]);
    }

     /**
     * @OA\Post(
     *      path="/api/add-user",
     *      operationId="storeProject",
     *      tags={"All Users [From tags]"},
     *      summary="Store new project",
     *      description="Returns project data",
     *  security={ {"bearer": {} }},
     * @OA\RequestBody(
     *    required=true,
     *    description="Adde User Data",
     *    @OA\JsonContent(
     *       required={"id","name","age"},
     *       @OA\Property(property="id", type="number", format="id", example="1"),
     *       @OA\Property(property="name", type="string", format="name", example="Abdulrahman"),
     *       @OA\Property(property="age", type="number", format="age", example="21"),
     *    ),
     * ),
     * 
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request"
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Success Request"
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     * )
     */
    public function store(Request $request)
    {
        $data = [
            'id' => $request->id,
            'name' => $request->name,
            'age' => $request->age,
        ];

        return response()->json([
            'status'=>true,
            'data' => $data
        ]);
    }


    /**
     * @OA\Get(
     *      path="/api/get-user/{id}",
     *      operationId="getProjectById",
     *      tags={"All Users [From tags]"},
     *      summary="Get project information",
     *      description="Returns project data",
     *      @OA\Parameter(
     *          name="id",
     *          description="user id",
     *          required=true,
     *          in="path",
     *          example="1",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request"
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     * )
     */
    public function show( $id)
    {
        $data = [
            ['id'=>1,'name'=>'Abdulrahman0','age'=>21],
            ['id'=>2,'name'=>'Abdulrahman1','age'=>21],
            ['id'=>3,'name'=>'Abdulrahman2','age'=>21],
            ['id'=>4,'name'=>'Abdulrahman3','age'=>21],
            ['id'=>5,'name'=>'Abdulrahman4','age'=>21],
            ['id'=>6,'name'=>'Abdulrahman5','age'=>21]
        ];

        $data[$id] = ['id'=>10,'name'=>'Abdulrahman10','age'=>201];

        return response()->json([
            'status'=> true,
            'data'=>$data[$id]
        ]);
    }


    /**
     * @OA\Put(
     *      path="/api/update/{id}",
     *      operationId="updateProject",
     *      tags={"All Users [From tags]"},
     *      summary="Update existing project",
     *      description="Returns updated project data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Project id",
     *          required=true,
     *          in="path",
     *          example="1",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *   @OA\RequestBody(
     *    required=true,
     *    description="Edit User Data",
      *    @OA\JsonContent(
     *       required={"name","age"},
     *       @OA\Property(property="name", type="string", format="name", example="Abdulrahman"),
     *       @OA\Property(property="age", type="number", format="age", example="21"),
     *    ),
     * ),
     *      @OA\Response(
     *          response=202,
     *          description="Successful operation",
     *         
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request"
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found"
     *      )
     * )
     */
    public function update(Request $request,$id)
    {
        $data = [
            ['id'=>1,'name'=>'Abdulrahman0','age'=>21],
            ['id'=>2,'name'=>'Abdulrahman1','age'=>21],
            ['id'=>3,'name'=>'Abdulrahman2','age'=>21],
            ['id'=>4,'name'=>'Abdulrahman3','age'=>21],
            ['id'=>5,'name'=>'Abdulrahman4','age'=>21],
            ['id'=>6,'name'=>'Abdulrahman5','age'=>21]
        ];

        $data[$id] =['name'=>$request->name,'age'=>$request->age];

        return response()->json([
            'status'=> true,
            'data'=>$data[$id]
        ]);
    }


     /**
     * @OA\Delete(
     *      path="/api/delete-user/{id}",
     *      operationId="deleteProject",
     *      tags={"All Users [From tags]"},
     *      summary="Delete existing project",
     *      description="Deletes a record and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description="User id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=204,
     *          description="Successful operation",
     *       
     *       ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found"
     *      )
     * )
     */
    public function destroy($id)
    {
        return response()->json([
            'status'=> true,
            'msg'=>'Deleted Done'
        ]);
    }
}
