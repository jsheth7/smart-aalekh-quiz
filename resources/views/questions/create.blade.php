@extends ('layouts/main')

@section ('content')

    <div class="col-6">

        <form class="bd-example" method="POST" action="{{ route('questions.store') }}">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Create a question</label>
                <textarea class="form-control" id="title" name="title" rows="3"></textarea>
            </div>

            <p>
                <input type="submit" value="Submit" name="submit">
            </p>

        </form>

    </div>

    <div class="col">

    </div>

@endsection