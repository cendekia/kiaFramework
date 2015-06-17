<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\PageRequest;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PagesController extends Controller
{

    public function __construct()
    {
        $this->url = 'admin/pages';
        // 'field' => 'type <required>|label <optional>|variable <optional>'
        $this->fields = [
            'name' => 'text',
            'slug' => 'text',
            'parent_id' => 'select|Parent :|pages',
            'description' => 'textarea|Description (optional) :',
            'order' => 'text',
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $pages = Page::all();

        return view('admin.pages.index', compact('pages'))->with('fields', $this->fields + ['action' => null]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $fields = $this->fields + [ 'submit' => 'submit' ];

        $pages = Page::whereParentId(0)->lists('name', 'id')->all();

        return view('admin.pages.create', compact('fields', 'pages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(PageRequest $request)
    {
        Page::create($request->all());

        flash('Your page has been created!');

        return redirect($this->url);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $fields = $this->fields  + [ 'submit' => 'submit' ];

        $page = Page::findOrFail($id);

        $pages = Page::whereParentId(0)->where('id', '<>', $id)->lists('name', 'id')->all();

        return view('admin.pages.edit', compact('fields', 'page', 'pages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(PageRequest $request, $id)
    {
        $page = Page::findOrFail($id);

        $page->update($request->all());

        return redirect($this->url);
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
