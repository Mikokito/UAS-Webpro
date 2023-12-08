@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-registration w-100 m-auto">
            <form action="/register" method="post">
              @csrf
              <h1 class="h3 mb-3 fw-normal">Registration</h1>
          
              <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top" @error('name') is-invalid     
                @enderror id="name" placeholder="Username" required value="{{ old('name') }}">
                <label for="name">Username</label>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>   
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control"  @error('password') is-invalid  
                @enderror id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>   
                @enderror
              </div>
              <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
            </form>
            <small class="d-block text-center mt-3"><a href="/login">Register</a></small>
  </main>
    </div>
</div>
@endsection