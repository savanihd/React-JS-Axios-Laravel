<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class PostController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function formSubmit(Request $request)
    {
    	return response()->json([$request->all()]);
    }
}