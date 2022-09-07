<h1>You got {{$result}} out of {{$total}} </h1>
<hr>
@foreach($quizzes as $q)
<h3>{{$q->question}}</h3>
<p>Correct answer : {{$q->ans}}</p>
@endforeach