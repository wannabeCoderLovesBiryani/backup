<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

/*

    Request
    _____________________________

    // input variables from form
    $name = request->input('name');

    // file
    $fileX = request->file('fileX');

    Response
    _____________________________

    // HTML Page/ view
    return response()->view('index')'

    // json
    return response()->json([], 200)

    // download file
    return response()->download($pathToFile);

    Response content
    _____________________________

    1. success or failure message
    2. data 
    3. links to relared ideas


    */

class MeetingController extends Controller
{
    public function __construct()
    {
        // $this->middleware('name'}

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meeting = [
            'title' => 'Title',
            'description' => 'Description',
            'time' => 'Time',
            'userId' => 'UserId',
            'view_meeting' => [
                'href' => 'api/v1/meeting/1',
                'method' => 'GET'
            ]
        ];

        $response = [
            'msg' => 'List of all meetings',
            'meeting' => [
                $meeting,
                $meeting
            ]
        ];

        return response()->json($response, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'time' => 'required|date_format:YmdHie',
            'userId' => 'required'
        ]);

        // get json

        $title = $request->input('title');
        $description = $request->input('description');
        $time = $request->input('time');
        $userId = $request->input('userId');


        $meeting = [
            'title' => $title,
            'description' => $description,
            'time' => $time,
            'userId' => $userId,
            'view_meeting' => [
                'href' => 'api/v1/meeting/1',
                // '1' is dummy meetinf id
                'method' => 'GET'
            ]
        ];

        $response = [
            'msg' => 'Meeting created',
            'meeting' => $meeting
        ];

        /*  
        201 vs 200
        Successful. The 200 status code is by far the most common 
        returned. It means, simply, that the request was received 
        and understood and is being processed. A 201 status code 
        indicates that a request was successful and as a result, 
        a resource has been created (for example a new page).
        
        */
        return response()->json($response, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'It wurks';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    // notice we got the id route parameter
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'time' => 'required|date_format:YmdHie',
            'userId' => 'required'
        ]);

        $title = $request->input('title');
        $description = $request->input('description');
        $time = $request->input('time');
        $userId = $request->input('userId');
        return 'It wurks';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = [
            'msg' => 'Meeting deleted',
            'create' => [
                'href' => 'api/v1/meeting',
                'method' => 'POST',
                'params' => 'title, description, time'
            ]
        ];

        return response()->json($response, 200);
    }
}
