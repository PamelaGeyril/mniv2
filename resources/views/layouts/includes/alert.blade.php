@if($message = session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
      <strong> {{session('success')}} </strong>
      <button type="button" class="close" aria-label="Close" data-dismiss="alert">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
@endif

@if (session()->has('errors'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
      @if ($errors->any())
        @foreach ($errors->all() as $error)
          <strong> {{$error}} </strong>
          <br>
        @endforeach
      @endif
  </div>
@endif

@if ($message = session()->has('error'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong> {{session('error')}} </strong>
    <button type="button" class="close" aria-label="Close" data-dismiss="alert">
        <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

