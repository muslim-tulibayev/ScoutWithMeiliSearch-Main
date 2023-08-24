<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $results = null;

        if ($query = $request->get('query'))
            $results = Post::search($query)->get();

        return response()->json([
            "data" => $results
        ]);
    }
}
