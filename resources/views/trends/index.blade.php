@extends ('layouts/main')

@section ('inline-js')
    @include('trends/questionsjs')
@endsection

@section ('content')

    <h4>Trends</h4>

    @include('trends/questions', ['questions' => $questions, 'latestq' => $latestq])

@endsection