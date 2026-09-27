<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(Exam $exam)
    {
        $questions = $exam->questions()
            ->orderBy('id')
            ->paginate(20);

        return view(
            'admin.questions.index',
            compact('exam', 'questions')
        );
    }

    public function create(Exam $exam)
    {
        return view('admin.questions.create', compact('exam'));
    }

    public function store(Request $request, Exam $exam)
    {
        $validated = $request->validate([
            'question' => ['required', 'string'],

            'option_a' => ['required', 'string', 'max:255'],
            'option_b' => ['required', 'string', 'max:255'],
            'option_c' => ['required', 'string', 'max:255'],
            'option_d' => ['required', 'string', 'max:255'],

            'correct_answer' => [
                'required',
                'in:A,B,C,D'
            ],
        ]);

        $exam->questions()->create($validated);

        return redirect()
            ->route('admin.questions.index', $exam)
            ->with('success', 'Question added successfully.');
    }

    public function edit(Question $question)
    {
        $exam = $question->exam;

        return view(
            'admin.questions.edit',
            compact('question', 'exam')
        );
    }

    public function update(
        Request $request,
        Question $question
    ) {
        $validated = $request->validate([
            'question' => ['required', 'string'],

            'option_a' => ['required', 'string', 'max:255'],
            'option_b' => ['required', 'string', 'max:255'],
            'option_c' => ['required', 'string', 'max:255'],
            'option_d' => ['required', 'string', 'max:255'],

            'correct_answer' => [
                'required',
                'in:A,B,C,D'
            ],
        ]);

        $question->update($validated);

        return redirect()
            ->route(
                'admin.questions.index',
                $question->exam
            )
            ->with('success', 'Question updated successfully.');
    }

    public function destroy(Question $question)
    {
        $exam = $question->exam;

        $question->delete();

        return redirect()
            ->route('admin.questions.index', $exam)
            ->with('success', 'Question deleted successfully.');
    }
}