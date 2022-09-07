<!-- Facilities Start -->
<style>
    .qstitle {
        white-space: pre;
        overflow: hidden;
        text-overflow: ellipsis;

    }
</style>

<div class="container-fluid pt-2">
    <div class="container pb-1">
        <div class="row">
            @foreach ($quizset as $qset)
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="card d-flex bg-light shadow-sm border rounded mb-3" title="{{ $qset->name }}"
                        style="padding: 30px">
                        <div class="pl-1">
                            <h3 class="qstitle">{{$qset->name}}</h3>
                            <p class="m-0">
                                {{ $qset->title }}
                            </p>
                            <p class="m-0">
                                {{ $qset->category->name}}
                            </p>
                            <p class="m-0">
                                {{ $qset->subcategory->name}}
                            </p>
                            <p class="m-0">
                                {{ $qset->stime}}
                            </p>
                            <p class="m-0">
                                {{$qset->entime}}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Facilities End -->
