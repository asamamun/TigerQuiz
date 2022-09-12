<!-- Facilities Start -->
@extends('layouts.admin')

@section('title', 'Show Result')
@section('head')

@endsection
@section('sidebar')
    <!-- sidebar as user role -->
    @if (Auth::check() && Auth::user()->role == '1')
        @include('dashboard.sidebar')
    @elseif (Auth::check() &&  Auth::user()->role == '2')
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
    @include('partial.flash')
    @include('partial.error')
    <style>
        /* @import url('https://fonts.googleapis.com/css?family=McLaren'); */

        /* body {
      background: #423539;
      font-size: 18px;
      font-family: 'McLaren', cursive;
      padding: 20px;
      display: flex;
      display: -webkit-flex;
      justify-content: center;
    } */

        .quiz {
            cursor: pointer;
            position: relative;
            width: 200px;
            letter-spacing: 2px;
            -webkit-font-smoothing: antialiased;
            float: left;
            margin: 40px;
            height: 400px;
            perspective: 600px;
        }

        .quiz__question,
        .quiz__answer {
            padding-bottom: 40px;
            border-radius: 10px;
            overflow: hidden;
            width: 100%;
            transition: transform .6s;
            backface-visibility: hidden;
            background: url() no-repeat;
            background-size: cover;
            background-position: center;
            background-color: #1a1a1a;
            border: 5px solid #2c2c2c;
            box-shadow: -4px 2px 10px black;
            text-align: center;
            border-bottom: 10px solid #af2b35;
            transform: rotateY(25deg);
            height: 310px;
            transform-style: preserve-3d;
        }

        .quiz__question img {
            width: 200px;
        }

        .quiz__answer img {
            width: 200px;
        }

        .quiz__answer h1 {
            font-size: 1.2em;
        }

        .quiz__answer h1 span {
            font-size: 1.15em;
        }

        h1 {
            font-size: .75em;
            line-height: 2.5em;
            padding: 10px;
            color: #dadada;
            text-align: left;
            margin: 0;
            display: block;
        }

        small {
            margin: 0;
            padding: 0px;
            position: relative;
            bottom: 10px;
        }

        h1 span {
            font-size: 1.4em;
            display: block;
            font-weight: bold;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        h1 span i {
            position: relative;
            background: #af2b35;
            padding: 5px 18px;
            position: relative;
            left: -10px;
            color: white;
        }

        .quiz__answer {
            padding-bottom: 50px;
            border-radius: 10px;
            box-sizing: border-box;
            top: 0;
            height: 370px;
            line-height: 2em;
            position: absolute;
            left: 0;
            margin: 0;
            transition: transform .6s;
            width: 100%;
            z-index: -1;
            transform: rotateY(-180deg);
        }

        .quiz:hover .quiz__question {
            transform: rotateY(180deg);
        }

        .quiz:hover .quiz__answer {
            transform: rotateY(25deg);
        }

        .blue i {
            background: #3f51b5;
        }

        .green i {
            background: #009b3a;
        }

        .blue .quiz__question,
        .blue .quiz__answer {
            border-bottom-color: #3f51b5;
        }

        .green .quiz__question,
        .green .quiz__answer {
            border-bottom-color: #009b3a;
        }

        small {
            display: block;
            font-size: .6em;
        }

        .qstitle {
            white-space: pre;
            overflow: hidden;
            text-overflow: ellipsis;

        }
    </style>


    <div class="quiz green">
        <div class="quiz__question">
            <img src="https://s-media-cache-ak0.pinimg.com/originals/99/92/3a/99923ac775bd118ff9636ffe1e5f3793.png"
                alt="" />
            <h1><span><i class="fa fa-question-circle" aria-hidden="true"></i>
                </span>What is the Capital of Jamaica?</h1>
        </div>
        <div class="quiz__answer">
            <img src="https://userscontent2.emaze.com/images/029c3caf-415f-49dc-87c7-25784c9a3dd5/069a41887f72559753ef04f69ff54995.jpg"
                alt="" />
            <h1><span><i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                </span>Kingston</h1>
        </div>
    </div>

    <div class="quiz blue">
        <div class="quiz__question">
            <img src="http://i2.cdn.cnn.com/cnnnext/dam/assets/160119125640-oscars-tease-full-169.jpg" alt="" />
            <h1><span><i class="fa fa-question-circle" aria-hidden="true"></i>
                </span>Who won Best Actor in 2000?</h1>
        </div>
        <div class="quiz__answer">
            <img src="http://knownpeople.net/wp-content/uploads/k/kevin-spacey-wallpaper.jpg" alt="" />
            <h1><span><i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                </span>Kevin Spacey <small>In American Beauty</small></h1>
        </div>
    </div>

    <div class="quiz">
        <div class="quiz__question">
            <img src="http://i.huffpost.com/gen/2628314/images/o-YOUTUBE-facebook.jpg" alt="" />
            <h1><span><i class="fa fa-question-circle" aria-hidden="true"></i>
                </span>What's the most viewed Youtube video?</h1>
        </div>
        <div class="quiz__answer">
            <img src="http://i.huffpost.com/gen/2347824/images/o-GANGNAM-STYLE-facebook.jpg" alt="" />
            <h1><span><i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                </span>Gangnam Style <small>2.7 Billion Views</small></h1>
        </div>
    </div>
    <div class="quiz">
        <div class="quiz__question">
            <img src="http://i.huffpost.com/gen/2628314/images/o-YOUTUBE-facebook.jpg" alt="" />
            <h1><span><i class="fa fa-question-circle" aria-hidden="true"></i>
                </span>What's the most viewed Youtube video?</h1>
        </div>
        <div class="quiz__answer">
            <img src="http://i.huffpost.com/gen/2347824/images/o-GANGNAM-STYLE-facebook.jpg" alt="" />
            <h1><span><i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                </span>Gangnam Style <small>2.7 Billion Views</small></h1>
        </div>
    </div>

    {{-- Pagination --}}
    {{-- <div class="d-flex justify-content-center">
            {!! $quizset->links() !!}
        </div> --}}


    <!-- Facilities End -->
@endsection
{{-- @section('footer')
        @include('inc.admin.footer')
    @endsection --}}
@section('scripts')

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.navbar-toggler-icon').trigger('click');
        $(document).ready(function() {

            // alert(5)
            $(".ansshow").hide();
            $(document).on("click", '.ansbtn', function() {

                $t = $(this);
                $answer = $t.data('answer');
                // console.log($answer);
                $t.next('span').toggle();
                $t.closest('.quizcontainer').find('.' + $answer).toggleClass('bg-warning rounded');
                // console.log($t.closest('.quizcontainer').find('.'+$answer));
            });

            // =======================

            // =======================

            //   $(document).ready(function(){ $("p").toggle(
            //   function(){$("p").css({"color": "red"});},
            //   function(){$("p").css({"color": "blue"});},
            //   function(){$("p").css({"color": "green"});
            //  });
        });
    </script>
@endsection
