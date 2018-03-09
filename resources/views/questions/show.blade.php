@extends ('layouts/main')

@section ('content')

    <div class="row">

        <div class="col-lg-12">

            <h3>{{ $question->title }}</h3>

            <ul>
                @foreach ($question->answers as $answer)
                    <li>{{ $answer->title }} {{-- <a href="">[Edit]</a> <a href="">[Del]</a> --}} </li>
                @endforeach
            </ul>

            <h5><a href="/answers/create/{{ $question->id }}">Add Answer</a></h5>

        </div>

    </div>

@endsection