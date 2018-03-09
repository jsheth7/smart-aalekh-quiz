@extends ('layouts/main')

@section ('content')

    <h2>Thanks for your response.</h2>

    {{-- @foreach($attempts as $attempt) --}}
        {{--  <h3> {{ $attempt->id }} - {{ Carbon\Carbon::parse($attempt->created_on)->format('d-m-Y H:i:s') }} </h3> --}}
        @foreach($attempt->selections as $selection)

            <h5>{{ $selection->question->title }}</h5>
            <h5>{{ $selection->answer->title }}</h5>
        @endforeach
    {{-- @endforeach --}}

    <div><a href="{{ route('trends.index') }}">See answer trends</a></div>
@endsection