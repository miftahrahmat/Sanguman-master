@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               
                <div class="card-header">
                 Data Anggota Sanguman
                </div>
                 
                <div class="card-body">
                    
                    <table class="table table-hover table table-striped">
                        <thead>
                            <tr>
                                 <th>No</th>
                                 <th>Name</th>
                                 <th>Email</th>
                                 <th>Avatar</th>
                                 <td>Status</td>
                            </tr>
                        </thead>
                          @foreach ($users as $user)
                        <tbody>
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $user->name }}</td>

                                <td>{{ $user->email }}</td>

                                <td>
                                    <img src="{{ url('uploads/avatars') }}/{{ $user->avatar }}" class="rounded-circle" width="70px;">
                                </td>

                                <td>
                                    @if($user->isOnline())
                                       <i style="font-size: 15px;color:green">Online</i>
                                    @endif
                                </td>

                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    {!! $users->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection