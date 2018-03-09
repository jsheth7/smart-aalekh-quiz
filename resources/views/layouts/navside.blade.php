<!-- Side Navigation -->

<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">

        <ul class="nav flex-column">

            <li class="nav-item">
                <a class="nav-link @if(Route::current()->getName() == 'quiz.index') active @endif" href="{{ route('quiz.index') }}">
                    <i class="fa fa-question-circle"></i>
                    Take Quiz
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link @if(Route::current()->getName() == 'trends.show') active @endif" href="{{ route('trends.index') }}">
                    <i class="fa fa-align-justify"></i>
                    See Trends
                </a>
            </li>

            <li class="nav-item">

                <a class="nav-link @if(Route::current()->getName() == 'questions.index') active @endif" href="{{ route('questions.index') }}">
                    <i class="fa fa-edit"></i>
                    Edit Questions
                </a>
            </li>

        </ul>

    </div>
</nav>
