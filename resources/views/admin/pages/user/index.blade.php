@extends('admin.layouts.scaffold')
@push('title')
User
@endpush
@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
@endpush
@section('content')
<div style="margin-left: 15%; padding: 3%;">
   <div class="container mt-5">
      <h2>User</h2>

      <div class=" card ">
         <div class="card-body p-5">
            <table class="table table-striped mt-2 table-hover" id="table">
               <thead class="table-condensed">
                  <tr>
                     <th>ID</th>
                     <th>Profile Pic</th>
                     <th>Name</th>
                     <th>Facebook</th>
                     <th>Google</th>
                     <th>Twitter</th>
                     <th>Linkedin</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($users as $user)
                  <tr>
                     <td>{{ $user->id }}</td>
                     <td>@if(!empty($user->thumbnail))
                     <img width="80px" height="40px" src="{{asset('upload/profile/'.$user->thumbnail)}}" class="img-thumbnail">
                     @else
                     <img width="80px" height="40px" class="avatar" src="{{asset('assets/admin/images/avatar.jpg')}}" alt="">
                     @endif</td>
                     <td>{{ $user->name }}</td>
                     <td>{{ $user->facebook }}</td>
                     <td>{{ $user->google }}</td>
                     <td>{{ $user->twitter }}</td>
                     <td>{{ $user->linkedin }}</td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection
