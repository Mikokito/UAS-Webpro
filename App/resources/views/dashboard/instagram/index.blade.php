@extends('dashboard.layouts.utama')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Media Manager Instagram</h1> 
</div>

<div class="table-responsive small">
  <a href="/dashboard/instagram/create" class="btn btn-primary">Create New Media</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Link</th>
          {{-- <th scope="col">Image</th> --}}
        </tr>
      </thead>
      <tbody>
        @foreach($instagram as $singleMedia)
    <tr>
        <td>{{ $singleMedia->id }}</td>
        <td>{{ $singleMedia->name }}</td>
        <td><a href="{{ $singleMedia->link }}">{{ $singleMedia->link }}</a></td>
        <td>
          <a href="/dashboard/instagram/{{ $singleMedia->id }}/edit" class="badge bg-warning"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wrench-adjustable" viewBox="0 0 16 16">
            <path d="M16 4.5a4.492 4.492 0 0 1-1.703 3.526L13 5l2.959-1.11c.027.2.041.403.041.61"/>
            <path d="M11.5 9c.653 0 1.273-.139 1.833-.39L12 5.5 11 3l3.826-1.53A4.5 4.5 0 0 0 7.29 6.092l-6.116 5.096a2.583 2.583 0 1 0 3.638 3.638L9.908 8.71A4.49 4.49 0 0 0 11.5 9m-1.292-4.361-.596.893.809-.27a.25.25 0 0 1 .287.377l-.596.893.809-.27.158.475-1.5.5a.25.25 0 0 1-.287-.376l.596-.893-.809.27a.25.25 0 0 1-.287-.377l.596-.893-.809.27-.158-.475 1.5-.5a.25.25 0 0 1 .287.376M3 14a1 1 0 1 1 0-2 1 1 0 0 1 0 2"/>
          </svg></span></a>
          <form action="/dashboard/instagram/{{ $singleMedia->id }}" method="post" class="d-inline">
          @method('delete')
        @csrf
      <button class="badge bg-danger border-0" onclick="return confirm('Are you sure want to delete this?')"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
      </svg></span></button>
    </form>
        </td>
    </tr>
@endforeach
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
      </tbody>
    </table>
  </div>
  
@endsection