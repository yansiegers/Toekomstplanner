<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * Show the page.
     *
     * @param int $id
     * @return Application|View
     */
    public function show(int $id)
    {
        $page = Page::findOrFail($id);

        return view('pages.'.$page->view, [
            'page' => $page,
            'page_texts' => $page->texts
        ]);
    }
}

