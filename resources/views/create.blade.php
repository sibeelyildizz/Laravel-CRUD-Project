@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Book
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('notices.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Duyuru:</label>
              <input type="text" class="form-control" name="duyuru"/>
          </div>
         
          
          <button type="submit" class="btn btn-primary">Duyuruyu Kaydet</button>
      </form>
  </div>
</div>
@endsection