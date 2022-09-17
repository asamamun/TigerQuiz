<!-- Facilities Start -->
<style>
    .qstitle {
        white-space: pre;
        overflow: hidden;
        text-overflow: ellipsis;

    }
    .qstitle:hover a {
    color: #FFF;
}
.tex-tleft{
    text-align: left!important;
}
</style>

<div class="container-fluid">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5">
              <span class="px-2">Active Quizsets</span>
            </p>
            <h1 class="mb-4">Quizzes for Your Skills</h1>
          </div>
        <div class="row">
            @foreach ($quizset as $qset)
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="card header d-flex bg-light shadow-sm border p-4 rounded mb-3" title="Name : {{ $qset->name }}">
                        {{-- style="padding: 15px" --}}
                        <div class="pl-1">
                            <h3 style="padding: 3px;" class="qstitle tex-tleft ps-3 m-0 link-primary fw-bold mb-1 btn-block btn-lg btn btn-outline-primary"><a href="{{ url('playquiz/qset/' . $qset->id) }}">{{$qset->name}}</a></h3>
                            <h3 title="Quizset Title" class="tex-tleft ps-3 m-0 fw-bold mb-1 btn-block btn btn-sm btn-outline-primary">
                                {{ $qset->title }} 
                            </h3>
                            <span title="Category" class="tex-tleft ps-3 m-0 fw-bold mb-1 btn-block btn btn-sm btn-outline-primary">
                                {{ $qset->category?->name}}
                            </span>
                            <span title="Subcategory" class="tex-tleft ps-3 m-0 fw-bold mb-1 btn-block btn btn-sm btn-outline-primary">
                                {{ $qset->subcategory?->name}}
                            </span>
                            {{-- <p class="m-0">
                                {{ $qset->quizzes}}
                            </p> --}}
                            <span title="Start Time" class="tex-tleft ps-3 m-0 text-dark fw-bold mb-1 btn-block btn btn-sm btn-outline-primary">
                                {{ $qset->stime}}
                            </span>
                            <span title="End Time" class="tex-tleft ps-3 m-0 text-dark fw-bold mb-1 btn-block btn btn-sm btn-outline-primary">
                                {{$qset->entime}}
                            </span>
                           
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
         {{-- Pagination --}}
         <div class="d-flex justify-content-center">
            {!! $quizset->links() !!}
        </div>
    </div>
</div>

{{-- <button type="button" class="btn btn-primary"
        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
  Custom button
</button> --}}
<!-- Facilities End -->
