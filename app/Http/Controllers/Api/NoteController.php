<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Notes\Notes\Actions\Contracts\CreateNotesActionInterface;
use Notes\Notes\Actions\Contracts\SearchNotesActionInterface;


class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param SearchNotesActionInterface $searchNotesAction
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(SearchNotesActionInterface $searchNotesAction)
    {
        return response()->json($searchNotesAction->make());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param CreateNotesActionInterface $createNotesAction
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request, CreateNotesActionInterface $createNotesAction)
    {
        $result = $createNotesAction->make($request->all());
        return response()->json($result);
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param SearchNotesActionInterface $searchNotesAction
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Request $request, SearchNotesActionInterface $searchNotesAction)
    {
        $result = $searchNotesAction->make(
            $request->get('column'),
            $request->get('value')
        );

        return response()->json($result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
