@extends('admin.layout')

@section('content')

<div class="card">

    <h1>Create Exam</h1>

    <form
        method="POST"
        action="{{ route('admin.exams.store') }}"
    >

        @csrf

        <label>Exam Title</label>

        <input
            type="text"
            name="title"
            value="{{ old('title') }}"
            placeholder="PHP Laravel Assessment"
            required
        >

        <label>Duration (Minutes)</label>

        <input
            type="number"
            name="duration"
            value="{{ old('duration', 40) }}"
            min="1"
            required
        >

        <label>Total Questions</label>

        <input
            type="number"
            name="total_questions"
            value="{{ old('total_questions', 40) }}"
            min="1"
            required
        >

        <label>
            <input
                type="checkbox"
                name="status"
                value="1"
                checked
            >

            Active
        </label>

        <br>

        <button type="submit">
            Create Exam
        </button>

    </form>

</div>

@endsection