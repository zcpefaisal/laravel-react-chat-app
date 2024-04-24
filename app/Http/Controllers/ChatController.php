<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Inertia\Inertia;

class ChatController extends Controller
{
    /**
     * Chat view.
     */
    public function index()
    {
        return Inertia::render('Chat/Chat');
    }

}
