@extends ('layouts/main')

@section ('content')

    <h3>Questions</h3>

    <h6>[<a href="{{ route('questions.create') }}">Add Question</a>]</h6>

    <ul>
        @foreach ($questions as $question)
            <li><a href="{{ route('questions.show', ['question' => $question->id]) }}">{{ $question->title }}</a></li>
        @endforeach
    </ul>

@endsection