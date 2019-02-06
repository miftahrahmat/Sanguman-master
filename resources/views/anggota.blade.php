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
                                 <th>Avatar</th>
                                 <th>Nama</th>
                                 <th>Status</th>
                                 {{-- <td>Action</td> --}}
                            </tr>
                        </thead>
                          @foreach ($users as $user)
                        <tbody>
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td><img src="{{ url('uploads/avatars') }}/{{ $user->avatar }}" class="rounded-circle" width="70px;" height="70px;"></td>

                                <td>{{ $user->name }}</td>

                                <td>
                                    @if($user->isOnline())
                                       <i class="fa fa-circle" style="font-size:15px;color:green"></i> Online
                                       @else
                                      <i class="fa fa-circle" style="font-size:15px;color:silver"></i> Ofline
                                    @endif
                                </td>

                                {{-- <td>
                                   <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"> Kirim Pesan</i></btn>
                                </td> --}}

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