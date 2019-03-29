
@extends('layouts.ap')

@section('title')
    Profile | Sanguan.com
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="/uploads/avatars/{{ $user->avatar }}" style="border-radius:50%; width:70px; height:70px; position:relative; top:75px; left:-20px"/>
                             <h2 style="margin-left: 70px; margin-bottom: -9px; margin-top: 20px;">
                                Catatan {{ Auth::user()->name }}
                                @if($chef >= 10)
                                    <strong class="cc">The Master of Chef</strong>
                                @endif

                                @if($chef >= 20)
                                    <strong class="cc">The Power of Chef</strong>
                                @endif
                            </h2>
                           <hr>
                        </div>
                    </div>
                </div>
                @if($chef >= 20)
                    <h5 class="dd"><marquee>Prestasi {{ Auth::user()->name }} : {{ $chef }}x Menjadi Chef</marquee></h5>
                @endif
                <div class="cardprofil">
                         <table class="table table-hover table-striped table-border">
                            <thead>
                                <tr align="center">
                                    <th>No</th>
                                    <td>Riwayat Pesana makanan</td>
                                    <td>Riwayat Makanan Tersisa</td>
                                </tr>
                            </thead>
                            @foreach ($portions as  $portion)
                            <tbody>
                                <tr align="center">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $portion->created_at }} / {{ $portion->order->total_portion }} Porsi</td>
                                    <td>{{ $portion->created_at }} / {{ $portion->portion }} Porsi</td>
                                </tr>

                            </tbody>
                            @endforeach
                        </table>
                        <p><button class="btun" type="button" data-toggle="modal" data-target="#myModal">Ubah Photo Profile</button></p>
                    <form enctype="multipart/form-data" action="/profile" method="POST">
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">


                                    </div>
                                    <div class="modal-body" align="center">

                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="file" id="pic" name="avatar" accept="image/*"  onchange="tampilkanPreview(this,'preview')" />
                                        <input type="submit" value="Upload"/>
                                        <br>
                                        <br>
                                        <img id="preview"  alt="" width="300px"/>


                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            <div class="card-body" align="center">
                @if (session('name'))
                    <div class="alert alert-success" role="alert">
                        {{ session('name') }}

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                @endif
               <div class="con">
                    <form method="POST" action="{{ route('changeName') }}">
                      {{ csrf_field() }}
                      <div class="row">
                        <div class="col-25">
                          <label for="fname">Nama Lengkap</label>
                        </div>
                        <div class="col-75">
                          <input type="text" id="fname" name="name" placeholder="{{ Auth::user()->name }}">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-25">
                          <label for="lname">Email</label>
                        </div>
                        <div class="col-75">
                          <input type="text" id="lname" name="lastname" readonly value="{{ Auth::user()->email }}">
                        </div>
                      </div>
                      <div class="row">
                        <input style="margin-left: 750px; margin-top: 20px" type="submit" value="Submit">
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
