@extends('admin.layouts.scaffold')
@push('title')
Queries
@endpush
@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
@endpush
@section('content')
<div class="mt-5"style="margin-left: 15%; padding: 3%;">
   <div class="container">
      <h2>Queries</h2>

      <div class="mt-3 card card-bordered card-preview">
   <div class="card-inner p-5">
      <table id="table mt-2" class="table table-hover table-striped">
               <thead>
                  <tr>
                     <th scope="col">ID</th>
                     <th scope="col">Name</th>
                     <th scope="col">Email</th>
                     <th scope="col">message</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($messages as $message)
                  <tr>
                     <td>{{ $message->id }}</td>
                     <td>{{ $message->name }}</td>
                     <td>{{ $message->email }}</td>
                     <td>{{ $message->message }}</td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection
