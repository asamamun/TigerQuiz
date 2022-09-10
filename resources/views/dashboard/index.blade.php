@extends('layouts.admin')
@section('title', 'Admin Dashborad')

@section('sidebar')
    @include('dashboard.sidebar')
@endsection

@section('navbar')
    @include('inc.admin.navbar')
@endsection

@section('content')

    <div class="page-title">
        <h3>Hello, {{ Auth::user()->name }}</h3>
        <h4 class="text-subtitle text-muted">Welcome to Dashboard</h4>
    </div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                    <div class="card-body bg-info rounded py-0 px-0 px-sm-3">
                        <div class="row align-items-center">
                            <div class="col-4 col-sm-3 col-xl-2">
                                <h4 class=" mb-sm-0 text-light">Add Quiz Set</h4>
                                {{-- <img src="assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt=""> --}}
                            </div>
                            <div class="col-5 col-sm-7 col-xl-8 p-0">

                                <p class="mb-0 font-weight-normal d-none d-sm-block"></p>
                            </div>
                            <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                                <span>
                                    <a href="#" target="_blank" class="btn text-warning">Add here</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-statistic bg-info">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">{{ $quizzes = DB::table('quizzes')->count() }}</h3>
                                    <p class="text-light ml-2 mb-0 font-weight-medium">&nbsp; 35%</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-success ">
                                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-light font-weight-normal">Total Quizzes</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card bg-warning card-statistic">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">{{ $quizsets = DB::table('quizsets')->count() }}</h3>
                                    <p class="text-light ml-2 mb-0 font-weight-medium">&nbsp; 11%</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-success">
                                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-light font-weight-normal">Total Quizset</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-statistic bg-success">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">{{ DB::table('users')->where('role', '=', '3')->count() }}</h3>
                                    <p class="text-light ml-2 mb-0 font-weight-medium">&nbsp;24%</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-danger">
                                    <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-light font-weight-normal">Total Students</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-statistic bg-primary">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">
                                        {{ $teachers = DB::table('users')->where('role', '=', '2')->count() }}
                                    </h3>
                                    <p class="text-light ml-2 mb-0 font-weight-medium">&nbsp;35%</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-success ">
                                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-light font-weight-normal">Total Techer</h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4 grid-margin">
                <div class="card bg-primary">
                    <div class="card-body">
                        <h5>Classes</h5>
                        <div class="row">
                            <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <h2 class="mb-0">{{ $cats = DB::table('categories')->count() }}</h2>
                                    <p class="text-light ml-2 mb-0 font-weight-medium">+3.5%</p>
                                </div>
                                <h6 class="text-muted font-weight-normal">11.38% </h6>
                            </div>
                            <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 grid-margin">
                <div class="card bg-info">
                    <div class="card-body">
                        <h5>Subjects</h5>
                        <div class="row">
                            <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <h2 class="mb-0">{{ $subcats = DB::table('subcategories')->count() }}</h2>
                                    <p class="text-light ml-2 mb-0 font-weight-medium">+8.3%</p>
                                </div>
                                <h6 class="text-info font-weight-normal"> 9.61%</h6>
                            </div>
                            <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 grid-margin">
                <div class="card bg-warning">
                    <div class="card-body">
                        <h5>Chapters</h5>
                        <div class="row">
                            <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <h2 class="mb-0">{{ $topics = DB::table('topics')->count() }}</h2>
                                    <p class="text-danger ml-2 mb-0 font-weight-medium">-2.1% </p>
                                </div>
                                <h6 class="text-muted font-weight-normal">2.27%</h6>
                            </div>
                            <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                <i class="icon-lg mdi mdi-monitor text-light ml-auto"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- ============================== --}}
        <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Last Month History</h4>

                    </div>
                </div>
            </div>
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row justify-content-between">
                            <h4 class="card-title mb-1">Top teachers</h4>
                            <p class="text-muted mb-1">Status</p>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="preview-list">
                                    <div class="preview-item border-bottom">
                                        <div class="preview-thumbnail">
                                            <div class="preview-item-content">
                                                <h6 class="preview-subject font-weight-medium">
                                                    <a href="#">
                                                        <span class="text-dark">John Doe</span>
                                                    </a>
                                                </h6>
                                                <p class="font-weight-light small-text">
                                                    <span class="text-muted">
                                                        <i class="mdi mdi-clock-outline"></i>
                                                        just now
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- =================================== --}}
            <div class="row ">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Quiz Test Status</h4>
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
                                            <th>Type</th>
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
                                                <td><a href="{{ url('/quiz/qz/qshow') }}">{{ $ans->Quizset->name ?? 'Random Quizzes' }}</a>
                                                </td>
                                                <td>{{ $ans->marks }}</td>
                                                <td>{{ $ans->tquiz }}</td>
                                                <td>{{ $ans->type}}</td>
                                                <td>{{ $ans->Quizset->user->name ?? 'User' }}</td>
                                                <td>{{ $ans->created_at }}</td>
                                                </td>
                                            </tr>

                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Visitors</h4>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div id="audience-map" class="vector-map"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('footer')
        @include('inc.admin.footer')
    @endsection
