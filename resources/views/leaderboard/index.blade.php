@extends('layouts.admin')

@section('title', 'Show Chapters')
@section('head')

@endsection
@section('sidebar')
    <!-- sidebar as user role -->
    @if (Auth::check() && Auth::user()->role == '1')
        @include('dashboard.sidebar')
    @elseif (Auth::check() && Auth::user()->role == '2')
        @include('inc.admin.trsidebar')
    @else
        @include('inc.admin.stsidebar')
    @endif
@stop
<!-- end sidebar -->
@section('navbar')
    @include('inc.admin.navbar')
@stop


@section('content')
    <div class="container-fluid px-0">
        <h2 class="mt-1 ms-2">Hello, {{ Auth::user()->name ?? 'Guest' }}</h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item ms-2 active">Welcome to Leaderboard</li>
        </ol>
        <div class="row">

            <main class="c-main" id="app">

                <div class="container-fluid">
                    <div class="content">
                        <div class="row ">
                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-header py-3 mb-1 d-flex justify-content-between">
                                        <h3 class="m-0 font-weight-bold text-info">Participants' Positions</h3>
                                        <a href="{{ url('quiz/qz/qshow') }}" class="btn btn-info btn-sm"
                                            title="Back to Quizset">
                                            <i class="fas fa-arrow-left"></i>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            @foreach ($answers as $ans)
                                                <div class="col-3">
                                                    <div class="card text-white">
                                                  {{-- profile pics load with defult if not exists --}}
                                                        @if ($ans->user->profile?->image == null || $ans->user->profile?->image == '')
                                                            <img class="ms-0"
                                                                src="{{ url(Storage::url('public/profiles/default2.png')) }}"
                                                                alt="{{ $user?->name }}" width='90px'
                                                                class="rounded d-block float-start me-4 mt-2 mb-2">
                                                        @else
                                                            <img class="ms-0"
                                                                src="{{ url(Storage::url('public/profiles/' . $ans->user->profile->image)) }}"
                                                                alt="{{ $user?->name }}" width='90px'
                                                                class="rounded d-block float-start me-4 mt-2 mb-2">
                                                        @endif
                                                        <div class="card-body bg-info">
                                                            <h6 class="mt-1"> {{ $ans->user->name }}</h6>
                                                            <h6>Marks obtained: {{ $ans->marks }}</h6>
                                                            <h6>Percentage:
                                                                {{ ceil(($ans->marks * 100) / count($answers)) }}%
                                                            </h6>
                                                            <h6>Total Questions: {{ count($answers) }}</h6>


                                                        </div>
                                                        <div
                                                            class="card-footer bg-info d-flex align-items-center justify-content-between">
                                                            <a class="small text-white stretched-link" href="#">View
                                                                Details</a>

                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="table-responsive">
                                            <div class="form-group">
                                                <select name="quiz_id"
                                                    onchange="javascript: window.open('/leaderboard?quiz_id=' + this.value, '_self')"
                                                    class="form-control">
                                                    <option value="0">All Quizzes</option>
                                                    <option value="1">Quiz: Rational Numbers</option>
                                                    <option value="1">Quiz: Bootstrap MCQ</option>
                                                    <option value="3">Quiz: General Knowledge Bangladesh</option>
                                                    <option value="3">Quiz: General Knowledge International</option>
                                                </select>
                                            </div>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <div class="form-check form-check-muted m-0">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input">
                                                                </label>
                                                            </div>
                                                        </th>
                                                        {{-- <th>ID</th> --}}
                                                        <th>User</th>
                                                        <th>Quizset name</th>
                                                        <th>Marks</th>
                                                        <th>Quizzes</th>
                                                        {{-- <th>Type</th> --}}
                                                        <th>By</th>
                                                        <th>Time</th>
                                                    </tr>
                                                </thead>
                                                @foreach ($answers as $ans)
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check form-check-muted m-0">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            {{-- <td>{{ $ans->id }}.</td> --}}
                                                            <td>
                                                                {{-- <img src="assets/images/faces/face1.jpg" alt="image" /> --}}
                                                                <span class="pl-2">{{ $ans->user->name }}</span>
                                                            </td>
                                                            <td><a
                                                                    href="{{ url('/quiz/qz/qshow') }}">{{ $ans->Quizset->name ?? 'Random Quizzes' }}</a>
                                                            </td>
                                                            <td>{{ $ans->marks }}</td>
                                                            <td>{{ $ans->tquiz }}</td>
                                                            {{-- <td>{{ $ans->type}}</td> --}}
                                                            <td>{{ $ans->Quizset->user->name ?? 'User' }}</td>
                                                            <td>{{ $ans->created_at }}</td>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                @endforeach
                                            </table>
                                            {{-- Pagination --}}
                                            <div class="d-flex justify-content-center">
                                                {!! $answers->links() !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </main>
            <form id="logoutform" action="https://laraquiz.com/logout" method="POST" style="display: none;">
                <input type="hidden" name="_token" value="WfSdaSJYG419Cor2qEZPsTjLaNOAzukV6miDyOd3">
            </form>
        </div>
    </div>
    </div>
@endsection



@section('scripts')

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.navbar-toggler-icon').trigger('click');
        $(document).ready(function() {

        });
    </script>
@endsection
