<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController
{
    /**
     *
     */
    public function index()
    {
        return view('pages.menus.index');
    }

    /**
     * @param \App\Models\Menu $menu
     */
    public function show(Menu $menu)
    {
        return view('pages.menus.show', $menu);
    }

    /**
     *
     */
    public function store()
    {

    }

    /**
     *
     */
    public function create(Request $request)
    {
        return view('pages.menus.create', $request->all());
    }

    /**
     * @param \App\Models\Menu $menu
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function update(Menu $menu)
    {
        return view('pages.menus.show', $menu);
    }

    /**
     * @param \App\Models\Menu $menu
     * @throws \Exception
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
    }
}