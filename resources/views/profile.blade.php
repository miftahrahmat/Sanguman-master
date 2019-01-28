
@extends('layouts.app')

@section('title')
    Profile | Sanguan.com
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form enctype="multipart/form-data" action="/profile" method="POST">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="/uploads/avatars/{{ $user->avatar }}" style="border-radius:50%; width:170px; height:170px; position:relative; top:15px; left:0px;">
                        </div>
                        <div class="flip-card-back">
                            <!-- jika ingin menampilkan nama file nya -->
                            {{-- onchange="document.getElementById('filename').value=this.value" --}}
                            <hr>
                            <p style="margin-top: 70px;"><input type="file" id="pic" name="avatar" style="display:none"></p>

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <input type="button" value="Uploaad Gambar" 
                            onclick="document.getElementById('pic').click()" >
                            <input type="submit">

                        </div>
                    </div>
                </div>
                    <div class="cardprofil">
                        <h1>{{ Auth::user()->name }}</h1>
                          <p class="title">CEO & Founder, Example</p>
                          <p>Harvard University</p>
                        <div class="b" style="margin: 24px 0;">
                            <a href="#"><i class="fa fa-dribbble"></i></a> 
                            <a href="#"><i class="fa fa-twitter"></i></a>  
                            <a href="#"><i class="fa fa-linkedin"></i></a>  
                            <a href="#"><i class="fa fa-facebook"></i></a> 
                        </div>
                        <p><button class="btun">Contact</button></p>
                    </div>
            </form>
            <div class="card-body" align="center">
               
              
            </div>
        </div>
    </div>
</div>

@endsection
