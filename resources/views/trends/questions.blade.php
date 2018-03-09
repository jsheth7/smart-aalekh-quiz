<div>
    <form method="get" action="" id="trends-sel-q">
        <select>
            <option>Please select a question</option>

            @foreach ($questions as $question)
                <option @if ($question->id == $selectedq->id) {{ 'selected' }} @endif value="{{ route('trends.show', ['question' => $question->id]) }}">{{ $question->title }}</option>
            @endforeach

        </select>
    </form>
</div>