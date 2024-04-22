<?php

namespace App\Http\Controllers\Backend;

use App\Models\Courrier;

/**
 * Class DashboardController.
 */
class DashboardController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $courriers = Courrier::all();

        return view('backend.dashboard', compact('courriers'));
    }
}
