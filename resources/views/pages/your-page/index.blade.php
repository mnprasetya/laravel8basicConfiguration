{{-- sample pages blade --}}
{{-- folder can rename with yours --}}
@extends('layouts.app')
@section('title','Hey Congratulation this is your Index')

@section('content')    
{{-- content here --}}

<div class="container ">

  <div class="position-relative m-4 ">
    <div class="progress" style="height: 1px;">
      <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-danger rounded-pill" style="width: 2rem; height:2rem;">1</button>
    <button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-warning rounded-pill" style="width: 2rem; height:2rem;">2</button>
    <button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-outline-danger rounded-pill" style="width: 2rem; height:2rem;">3</button>
  </div>
  <div class="row">
    <div class="col-12 mt-5">
      <div class="card card-body bg-white rounded-lg shadow p-5">
        <span class="text-capitalize text-dark text-center">
          <img class="text-center" src="https://panel-instagram.mplabs.xyz/icon.png" alt="" srcset="">
          <h1>Hey Look at this! You can Do IT!!!</h1>
          <span class="text-danger">- Median Prasetya</span>
        </span>
      </div>
    </div>
  </div>
</div>

@endsection

{{-- ============================================================= --}}
{{-- optional if you will custom seo per-page--}}
@push('seo')
@endpush

{{-- optional if you will add custom style for this page | remove one--}}
@push('before-style')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
@endpush
@push('after-style')
@endpush


{{-- optional if you will add custom script for this page | remove one--}}
@push('before-script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
@endpush
@push('after-script')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
@endpush