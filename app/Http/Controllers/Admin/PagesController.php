<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use App\Models\Page;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;

class PagesController extends Controller
{

    public function __construct(Page $page)
    {
        $this->page = $page;
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
        $pages = $this->page->all();

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

        $pages = $this->page->whereParentId(0)->lists('name', 'id')->all();

        return view('admin.pages.create', compact('fields', 'pages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(PageRequest $request)
    {
        $this->page->create($request->all());

        flash('Your page has been created!');

        return redirect($this->url);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return Response
     */
    public function show($slug)
    {
        return redirect(Request::url().'/edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($slug)
    {
        $fields = $this->fields  + [ 'submit' => 'submit' ];

        $page = $this->page->where('slug', '=', $slug)->firstOrFail();

        $pages = $this->page->whereParentId(0)->where('id', '<>', $page->id)->lists('name', 'id')->all();

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
        $page = $this->page->findOrFail($id);

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
