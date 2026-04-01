<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\ProfileDeleteRequest;
use App\Http\Requests\Settings\ProfileUpdateRequest;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;

class BookmarkController extends Controller
{
    /**
     * Show the bookmark page.
     */
    public function add(Request $request): Response
    {
        return Inertia::render('Anclas', []);
    }

    /**
     * Delete the bookmark
     */
    public function destroy(BookmarkDeleteRequest $request): RedirectResponse
    {
        $bookmark = $request->bookmark();

        $bookmark->delete();

        return redirect('/anclas');
    }
}
