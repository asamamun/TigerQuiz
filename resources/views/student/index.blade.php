@extends('layouts.admin')
@section('title', 'Student Dashborad')

@section('sidebar')
    @include('inc.admin.stsidebar')
@endsection

@section('navbar')
    @include('inc.admin.navbar')
@endsection


@section('content')
        @include('partial.flash')
        @include('partial.error')
    <div class="container-fluid px-4">
        <h2 class="mt-4">Hello, {{ Auth::user()->name }}</h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Welcome Dashboard</li>
        </ol>

{{-- ========for new user==== --}}
@if (!$marks->count()== 0)

        <div class="row">
            <div class="col-xl-6 col-md-6">
                <div class="card text-white mb-4">
                    <div class="card-header border-bottom bg-info"><h5>Latest Quizset Status</h5></div>
                    <div class="card-body bg-info">
                        
                       
                        <h6 class="mt-1"> Quizset's Name: {{ $qsid ?? 'Random Quizzes' }}</h6>
                        <h6>Marks obtained: {{ $mks?? "0"}}</h6>
                        <h6>Your Posision: {{count($marks)}}</h6>
                        <h6>Total Questions: {{$tq ??'0'}}</h6>
                       
                        
                    </div>
                    <div class="card-footer bg-info d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">Success </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">Archive Quiz</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="text-info"><i class="fas fa-chart-area me-1"></i>Latest Quiz Compitions and Results</h4>
                    </div>
                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar me-1"></i>
                        Bar Chart Example
                    </div>
                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Previous Quiz Results
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Quizset name</th>
                            <th>Marks</th>
                            <th>Quizzes</th>
                            {{-- <th>Type</th> --}}
                            <th>By</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Quizset name</th>
                            <th>Marks</th>
                            <th>Quizzes</th>
                            {{-- <th>Type</th> --}}
                            <th>By</th>
                            <th>Time</th>
                        </tr>
                    </tfoot>
                    @foreach ($marks as $mark)
                    <tbody>
                        <tr>
                            <td>{{ $mark->id }}.</td>
                            <td>{{ $mark->user->name }}</td>
                            <td><a href="{{ url('/quiz/qz/qshow') }}">{{ $mark->Quizset->name ?? 'Random Quizzes' }}</a></td>
                            <td>{{ $mark->marks}}</td>
                            <td>{{ $mark->tquiz}}</td>
                            {{-- <td>{{ $mark->type}}</td> --}}
                            <td>{{ $mark->Quizset->user->name ?? 'Null' }}</td>
                            <td>{{ $mark->created_at}}</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
          
    @else
        <h4 class="text-danger text-bold text-center">No Data Available!</h4>
    @endif
{{-- =================== --}}
    </div>
@endsection

@section('footer')
    @include('inc.admin.footer')
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="assets/js/datatables-simple-demo.js"></script>
@endsection
