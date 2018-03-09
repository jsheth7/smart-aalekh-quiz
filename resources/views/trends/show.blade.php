@extends ('layouts/main')

@section ('inline-js')
    @include('trends/questionsjs')
@endsection

@section ('content')

    <h4>Trends</h4>

    @include('trends/questions', ['questions' => $questions, 'selectedq' => $selectedq])

    <br />

    <div id="chart_div"></div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script>
        google.charts.load('current', {packages: ['corechart', 'bar']});
        google.charts.setOnLoadCallback(drawMultSeries);

        function drawMultSeries() {
            var data = google.visualization.arrayToDataTable([
                ['Answer', 'All-time',],
                @foreach ($answers as $answer)
                ['{{ $answer->answer }}', {{ $answer->num }}],
                @endforeach

            ]);

            var options = {
                title: '{{ $selectedq->title }}',
                chartArea: {width: '50%'},
                hAxis: {
                    title: 'Number of answers',
                    minValue: 0
                },
                vAxis: {
                    title: 'Answers'
                }
            };

            var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>


@endsection