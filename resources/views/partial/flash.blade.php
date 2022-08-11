@if(Session::has('message'))          
            <div class="alert alert-success alert-dismissible fade show mt-1" role="alert">
              {{Session::get('message')}}
          </div>
          @endif
@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show mt-1" role="alert">
  <strong>{{ $message }}</strong>
  {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
</div>
@endif 
    
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-dismissible fade show mt-1" role="alert">
  <strong>{{ $message }}</strong>
</div>
@endif
     
@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-dismissible fade show mt-1" role="alert">
  <strong>{{ $message }}</strong>
</div>
@endif
     
@if ($message = Session::get('info'))
<div class="alert alert-info alert-dismissible fade show mt-1" role="alert">
  <strong>{{ $message }}</strong>
</div>
@endif
    
{{-- @if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Please check the form below for errors</strong>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
@endif --}}

{{-- <script>
 $(document).ready(function() {
    // show the alert
    setTimeout(function() {
        $(".alert").alert('close');
    }, 2000);
});
</script> --}}