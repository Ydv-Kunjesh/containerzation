@extends('layouts.app')

@section('content')
<!-- @include('wms/header')


    <div class="fixed-top">

    @include('wms/topHeader')
    </div> -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 usert">
            <div class="card">
                <div class="card-header">
                <h1 class='text-center'>Doner's Detail</h1>
                </div>
                <!-- <main>
<div class="container">
    <div class="row">
      <div class="col-10">
        
    <table style='width:100% ' class='table table-striped'>
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created_at</th>
                <th>Delete</th>
                <th>Update</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($data as $a)
    <tr>
    <td>{{$a['id']}} </td>

        <td>{{$a['name']}} </td>
        <td>{{$a['email']}}</td> -->
        <!-- <td>{{$a['donation']}}</td>
        <td>{{$a['address']}}</td> -->
        <!-- <td>{{$a['created_at']}} </td>

        <td><a href={{"delete/".$a['id']}} style='background-color:red;color:black;font-weight:bold; border-radius:30px;padding:3px 6px;' onclick='myFunction()'>delete</a></td>
        <td><a href={{"edit/".$a['id']}} style='background-color:gray;color:black;font-weight:bold; border-radius:30px;padding:3px 6px;' onclick='mFunction()'>Update</a></td>


    </tr>
    @endforeach
    </table>
    </div></div>
</div>
  </main> -->


  <main class='table-sec'>
<div class="container">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-10">
       
</svg>

    <table style='width:100% ' class='table table-striped'>
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Mobile no</th>
                <th>Donation</th>
                <th>Address</th>
                <th>Donated at</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($data as $a)
    <tr>
    <td>{{$a['id']}} </td>

        <td>{{$a['name']}} </td>
        <td>{{$a['mobile']}}</td>
        <td>{{$a['donation']}}</td>
        <td>{{$a['address']}}</td>
        <td>{{$a['created_at']}} </td>

        <!-- <td><a href={{"delete/".$a['id']}} class="shadow-lg " style='font-weight:bold; color:red; border-radius:30px;' onclick='myFunction()'>
        <svg  class='custom-icon' xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
</svg>
</a></td>
        <td><a href={{"edit/".$a['id']}} class='orange' style=' border-radius:30px; ' onclick='mFunction()'>
        <svg class='custom-icon' xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
</svg>

    </a></td> -->


    </tr>
    @endforeach
    </table>
    </div></div>
</div>
  </main>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>


<!-- @include('wms/footer') -->
@endsection

