<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = DB::table('feedback')
            ->select('feedback.feedbackId', 'feedback.feedbackId', 'feedback.orderId', 'feedbacktitle.title', 'feedback.score', 'employee.userName', 'employee.firstName', 'employee.lastName', 'saleteam.teamName')
            ->leftJoin('feedbacktitle', 'feedback.feedbacktitleId', '=', 'feedbacktitle.feedbacktitleId')
            ->leftJoin('orders', 'orders.orderID', '=', 'feedback.orderId')
            ->leftJoin('employee', 'employee.empID', '=', 'orders.empID')
            ->leftJoin('saleteam', 'saleteam.saleTeamID', '=', 'employee.saleTeamID')
            ->get();

        return view('feedback.index', ['feedbacks' => $feedbacks]);
    }

    public function create()
    {
        return view('feedback.create');
    }
    public function listofname(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|String',
            'orderId' => 'required|Integer',
            'score' => 'required|String',

        ]);

        $newFeedback = Feedback::create($data);

        return redirect(route('feedback.index'));
    }
    public function edit(Feedback $feedback)
    {

        return view('feedback.edit', ['feedback' => $feedback]);
    }
    public function update(Feedback $feedback, Request $request)
    {
        $data = $request->validate([
            'title' => 'required|String',
            'orderId' => 'required|Integer',
            'score' => 'required|String',
        ]);

        $feedback->update($data);

        return redirect(route('feedback.index'))->with('success', 'feedback updated successfully');
    }

    public function destroy(Feedback $feedback)
    {
        $feedback->delete();
        return redirect(route('feedback.index'))->with('success', 'feedback delete successfully');
    }
}
