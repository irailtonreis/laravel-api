<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RealState;
use App\Repository\RealStateRepository;

class RealStateSearchController extends Controller
{

    private $realState;

    public function __construct(RealState $realState){
        $this->realState = $realState;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $repository = new RealStateRepository($this->realState);

        $repository->selectCoditions($request->get('coditions'));
    

    if($request->has('fields')) {
        $repository->selectFilter($request->get('fields'));
    }

        return response()->json($repository->getResult()->paginate(10), 200);

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

}
