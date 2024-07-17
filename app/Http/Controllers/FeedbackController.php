<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedback = Feedback::all();
        return view('feedback.index', compact('feedback'));
    }

    public function create()
    {
        return view('feedback.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Feedback::create($request->all());

        return redirect()->back()
            ->with('success', 'Feedback created successfully.');
    }

    public function show(Feedback $feedback)
    {
       //
    }

    public function edit(Feedback $feedback)
    {
        //
    }

    public function update(Request $request, Feedback $feedback)
    {
       //
    }

    public function destroy($id)
    {
        $feedback = Feedback::FindOrFail($id);
        $feedback->delete();
        Alert::success('success','Data berhasil di hapus')->autoClose(5000);
        return redirect()->back();
    }
}