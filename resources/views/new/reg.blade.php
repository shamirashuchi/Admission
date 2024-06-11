@extends('new.master')
@section('body')
<form action="{{ route('customer.register') }}" method="POST" class="mx-auto mt-5  w-50 bg-secondary text-white mb-5">
    @csrf
    <div class="d-flex justify-content-center pt-5">Home</div>
    <p class="text-danger text-center">{{session('message')}}</p>
    <div class="mb-3 bg-secondary mx-5 mt-5">
        <label for="exampleInputEmail1" class="form-label">Course Name</label>
        <input type="email" class="form-control" name="course_name" value="Web Design and Development with Laravel and Vuejs"   id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
    </div>
    <div class="mb-3 bg-secondary mx-5 mt-5">
        <label for="exampleInputEmail1" class="form-label">Teacher</label>
        <input type="text" class="form-control" name="teacher" id="exampleInputEmail1" value="Habibur Rahman" aria-describedby="emailHelp" readonly>
    </div>
    <div class="mb-3 bg-secondary mx-5 mt-5">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email"  name="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3 bg-secondary mx-5 mt-5">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" class="form-control " name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3 bg-secondary mx-5 mt-5">
        <label for="exampleInputEmail1" class="form-label">Mobile</label>
        <input type="number" class="form-control " name="mobile" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3 mx-5">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
    </div>
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn w-100 btn-danger mx-5 mb-3">Submit</button>
    </div>
</form>
@endsection
