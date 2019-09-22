<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SearchController extends Controller
{
    public function BlogSearch(Request $request)
    {
        $query = $request->input('query');
        $search_blog = DB::table('blog')->where('blog_title', 'LIKE', "%$query%")->where('publication_status', 1)->get();
        return view('blog_search', compact('search_blog'));
    }
}
