<?php

class SurlController extends BaseController {

    protected $layout = 'master';

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {   
        //dd('hi');
        $this->layout->content =View::make('surl.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        $this->layout->content =View::make('surl.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $row = Surl::where_surl($url)->first();

    //if not found, redirect home
    if( is_null($row) ) return Redirect::to($url);
    //if it is found, redirect to that url
    else return Redirect::to($row->url);

        $this->layout->content =View::make('surl.store');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
                $row = Surl::where_surl($surl)->first();

    //if not found, redirect home
    if( is_null($row) ) return Redirect::to($surl);
    //if it is found, redirect to that url
    else return Redirect::to($row->url);

        $this->layout->content =View::make('surl.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //fetch result
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}