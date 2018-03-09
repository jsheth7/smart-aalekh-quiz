@extends ('layouts/main')

@section ('content')

    <div class="col-6">
    <h3>Quiz</h3>
    </div>

    <div class="col-6">

        <form class="bd-example" method="POST" action="{{ route('quiz.take') }}">

        {{ csrf_field() }}

        @foreach ($questions as $question)
                <h4>{{ $question->title }}</h4>
                    @foreach ($question->answers as $answer)
                        <div>
                            <input type="radio" name="questions[{{ $question->id }}]" value="{{ $answer->id }}" /> {{ $answer->title }}
                        </div>
                    @endforeach
            <br />
        @endforeach

            <p>
                <input type="submit" value="Submit Results" name="submit">
            </p>
        </form>
    </div>

@endsection