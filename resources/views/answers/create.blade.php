@extends ('layouts/main')

@section ('content')

    <div class="col-6">

        <h1>{{ $question->title }}</h1>


        <form class="bd-example" method="POST" action="/answers">

            <input type="hidden" name="question" value="{{ $question->id }}" />

            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Create an answer</label>
                <textarea class="form-control" id="title" name="title" rows="1"></textarea>
            </div>


            <p>
                <input type="submit" value="Submit" name="submit">
            </p>

        </form>

    </div>

    <div class="col">

    </div>

@endsection