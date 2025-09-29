<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InstallationRequest;
use Illuminate\Http\Request;

class InstallationRequestController extends Controller
{
    public function index(Request $request)
    {
        $requests = InstallationRequest::with(['user', 'barang'])
            ->latest()
            ->paginate(15);

        return view('admin.installations.index', compact('requests'));
    }

    public function updateStatus(Request $request, InstallationRequest $installation)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,scheduled,completed,cancelled',
        ]);

        $installation->update(['status' => $validated['status']]);

        return redirect()
            ->route('admin.installations.index')
            ->with('success', 'Status pemasangan diperbarui.');
    }
}


