@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="font-family: times new roman">

                </div>

                <div class="card-body">

                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                        </div>
                    @endif

                    <h3 style="font-family: algerian"><i>Pilih Porsi</i> :</h3>
                    <h4 style="font-family: times new roman">Tanggal <?php
                        echo date(' d F Y ', strtotime('now') );
                    ?></h4>
                    @if(empty($myportion))
                    <!-- STAR FORM CREATE -->
                    <form action="{{ route('order.store') }}" method="POST">
                      @csrf

                        <div class="porsi" style="margin-left: 45px; padding: 5px; margin-top: 15px;">

                                <input type="radio" id="a" name="total_portion" value="1">
                                <label for="a" class="btn btn-outline-secondary">1 Porsi</label>

                                <input type="radio" id="b" name="total_portion" value="2">
                                <label for="b" class="btn btn-outline-secondary">2 Porsi</label>

                                <input type="radio" id="c" name="total_portion" value="3">
                                <label for="c" class="btn btn-outline-secondary">3 Porsi</label>

                                <input type="radio" id="d" name="total_portion" value="4">
                                <label for="d" class="btn btn-outline-secondary">4 Porsi</label>


                                @foreach($orders as $order)
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                                <input type="hidden" name="order_id" value="{{ $order->order_id }}">

                                <input type="hidden" name="portion" value="{{ $order->total_portion }}">
                                @endforeach


                        </div>
                        @if (empty($log))
                        <div style="padding: 5px; margin-left: 50px; width: 150%;">
                             <button type="submit" name="pesan" id="Btn" class="btn btn-outline-primary" style="margin-left: 10px; width: 58%">Pesan Sekarang</button>
                        </div>
                        @endif

                        @if (!empty($log))
                            <div style="padding: 5px; margin-left: 50px; width: 150%;">
                                 <button disabled class="btn btn-outline-danger" style="margin-left: 10px; width: 58%">Update pesanan ditutup</button>
                            </div>
                        @endif

                    </form>
                    @endif
                    <!-- END FORM  CREATE-->

                    @if(!empty($myportion))
                    <!-- START FORM UPDATE -->
                       @foreach($orders as $order)
                    <form action="{{ route('order.update',$order->id) }}" method="POST">
                       @endforeach
                       @csrf
                        <div class="porsi" style="margin-left: 45px; padding: 5px; margin-top: 15px;">

                             <input type="radio" id="a" name="total_portion"  value="1" {{ ($myportion->portion == 1) ? "checked" : "" }}>
                                <label for="a" class="btn btn-outline-secondary">1 Porsi</label>

                            <input type="radio" id="b" name="total_portion"  value="2" {{ ($myportion->portion == 2) ? "checked" : "" }}>
                               <label for="b" class="btn btn-outline-secondary">2 Porsi</label>

                            <input type="radio" id="c" name="total_portion"  value="3" {{ ($myportion->portion == 3) ? "checked" : "" }}>
                               <label for="c" class="btn btn-outline-secondary">3 Porsi</label>

                            <input type="radio" id="d" name="total_portion"  value="4" {{ ($myportion->portion == 4) ? "checked" : "" }}>
                                <label for="d" class="btn btn-outline-secondary">4 Porsi</label>


                            @foreach($portions as $portion)
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                            <input type="hidden" name="order_id" value="{{ $portion->order_id }}">

                            <input type="hidden" name="portion" value="{{ $portion->portion }}">
                            @endforeach


                        </div>

                        <!-- jika koki belum mulai masak masih bisa update -->
                        @if (empty($log))
                            <div style="padding: 5px; margin-left: 50px; width: 150%;">
                                 <button type="submit" id="Btn" class="btn btn-outline-primary" style="margin-left: 10px; width: 58%">Update Pesanan</button>
                            </div>
                        @endif
                         <!-- jika koki sudah mulai masak maka users tidak bisa update pesanan -->
                        @if (!empty($log))
                            <div style="padding: 5px; margin-left: 50px; width: 150%;">
                                 <button disabled class="btn btn-outline-danger" style="margin-left: 10px; width: 58%">Update pesanan ditutup</button>
                            </div>
                        @endif
                    </form>
                    <!-- END FORM UPDATE -->
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div style="margin-left: 50%; margin-top: -247px; width: 700px;">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" style="font-family: times new roman">
                    <!-- START TRUE KOKI -->
                    @if($chef !==null)
                        <h6 class="alert alert-info">
                            <center>Koki sekarang adalah <strong>{{ $chef }}</strong></center>
                        </h6>
                    @endif
                    <!-- END TRUE KOKI -->
                </div>

                <div class="card-body">
                    @if (session('Selamat'))
                        <div class="alert alert-success" role="alert">
                            {{ session('Selamat') }}

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                        </div>
                    @endif

                    <!-- START FORM JADI KOKI -->
                    @if (empty($mychef))

                        <!-- START FALSE KOKI -->
                        @if($chef ==null)
                            @if(!empty($portion))
                                <h4 style="font-family: times new roman">
                                    Click Tombol Jadi Koki jika anda siap untuk menjadi koki
                                </h4>

                                <div class="porsi" style="margin-left: 50px; padding: 5px; margin-top: 5px;">

                                    <form action="{{ route('order.becomeChef') }}" method="POST">
                                        @csrf

                                        @foreach ($orders as $order)
                                        <input type="hidden" name="order_id" value="{{ $order->id }}">
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        @endforeach

                                        <button type="submit"
                                        class="btn btn-outline-primary" style="width: 100%;" onclick="myFunction()">Jadi Koki
                                        </button>
                            @endif
                        @endif
                         <!-- END FALSE KOKI -->
                        </form>
                        {{-- NOTOFICATION KETIKA KOKI SEDANG MASAK --}}
                        {{-- @if (!empty($log)) --}}
                        {{-- <h6 style="font-family: times new roman" class="alert alert-info">

                        </h6>
                        @endif --}}
                        {{-- END NOTIFICATION --}}
                        <hr>

                        {{-- CEK USER APAKAH SUDAH ORDERS HARI INI ATAU BELUM --}}
                        @if($mychef ==true)
                        @if(!empty($portion))
                        <strong>Data pesanan yang di masak untuk
                            <?php
                                echo date(' d F Y H:i');
                            ?>
                        </strong>
                        <table class="table table-hover ">
                            <thead>
                                <tr>
                                     <th>No</th>
                                     <th>Name</th>
                                     <th>Portions</th>
                                     <th>Waktu</th>
                                </tr>
                            </thead>

                            @foreach ($portions as $portion)
                            <tbody>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>

                                    <td>{{ $portion->user->name }}</td>

                                    <td>{{ $portion->portion }} Porsi</td>

                                    <td>{{ $portion->created_at }}</td>

                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                        {!! $portions->links() !!}
                        @endif
                        @endif

                        {{-- Tampilan pemesan --}}

                        @if($mychef ==null)
                        @if(!empty($portion))
                        @if (session('lap'))
                            <div class="alert alert-success" role="alert">
                                {{ session('lap') }}

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>

                            </div>
                        @endif
                        <strong>Data pesanan anda tanggal
                            <?php
                                echo date(' d F Y H:i');
                            ?>
                        </strong>
                        <form action="{{ route('order.laporan') }}" method="POST">
                            @csrf
                            <table class="table table-hover table">
                                    <thead>
                                        <tr>
                                             <th>No</th>
                                             <th>Name</th>
                                             <th>Portions</th>
                                             <th>Take</th>
                                             <th>Option</th>
                                        </tr>
                                    </thead>
                                    @foreach ($port as $my)
                                        <tbody>
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $my->user->name }}</td>
                                                <td>{{ $my->portion }}</td>
                                                <td>
                                                    <select name="portion">
                                                         <option value="0">0</option>
                                                         <option value="1">1</option>
                                                         <option value="2">2</option>
                                                         <option value="3">3</option>
                                                         <option value="4">4</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    @if($log==true)<button type="submit" class="btn btn-primary"> Kirim </button>@endif
                                                    @if($log ==null)
                                                    <button disabled class="btn btn-primary"> Kirim </button>
                                                    @endif
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                            </table>

                            {!! $portions->links() !!}
                        </form>
                        @endif
                        @endif

                        {{--  --}}

                        @if(empty($portion))
                            <h6 class="alert alert-info">
                                <center><strong>Anda belum memiliki pesanan hari ini</strong></center>
                            </h6>
                        @endif

                    </div>

                </div>

                <!-- END FORM JADI KOKI -->
                @endif
                <!-- START FORM KOKI -->
                @if (!empty($mychef))
                    <!-- START CHECK MULAI MASAK -->

                    <div class="porsi" style="margin-left: 50px; padding: 5px; margin-top: 5px;">

                        <form action="{{ route('order.masak') }}" method="POST">
                            @csrf
                            @foreach($portions as $portion)
                            <input type="hidden" name="portion_id" value="{{ $portion->id }}">
                            <input type="hidden" name="portion" value="{{ $portion->portion }}">
                            @endforeach

                            @if (empty($log))
                            <button type="submit" class="btn btn-outline-primary" onclick="myFunction()"
                                style="width: 100%;">Mulai Masak
                            </button>
                            @endif

                            @if(!empty($lapo))
                        <div class="alert alert-info">
                            <strong>Data orang yang sudah mengambil pesanan</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            @foreach ($lapo as $lap)
                                <ul>
                                    <li>{{ $lap->user->name }} {{ $lap->portion }} porsi</li>
                                </ul>
                            @endforeach

                        </div>
                        @endif

                        </form>
                        <hr>
                        @if(empty($log))
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                     <th>No</th>
                                     <th>Name</th>
                                     <th>Portions</th>
                                     <th>Waktu</th>
                                </tr>
                            </thead>

                            @foreach ($portions as $portion)
                            <tbody>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>

                                    <td>{{ $portion->user->name }}</td>

                                    <td>{{ $portion->portion }} Porsi</td>

                                    <td>{{ $portion->created_at }}</td>

                                </tr>
                            </tbody>
                            @endforeach

                        </table>

                        {!! $portions->links() !!}
                    </div>
                    @endif
                    <!-- END CHECK MULAI MASAK JIKA BELUM DI KLIK -->


                    <!-- START CHECK MULAI MASAK JIKA SUDAH DI KLIK -->
                    @if(!empty($log))
                    <!-- Jika tombol mulai masak di klik-->
                        @if (session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message') }}

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>

                            </div>
                        @endif
                        <!--  -->
                        <!--  -->
                        @if (session('log'))
                            <div class="alert alert-success" role="alert">
                                {{ session('log') }}

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>

                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>

                            </div>
                        @endif

                        <form action="{{ route('order.log') }}" method="POST">
                            @csrf
                            <dtrong>Data Pesanan yang harus di siapkan</dtrong>
                            <table class="table table-hover table">
                                    <thead>
                                        <tr>
                                             <th>No</th>
                                             <th>Name</th>
                                             <th>Portions</th>
                                             <th>Take</th>
                                             <th>Created</th>
                                        </tr>
                                    </thead>
                                    @foreach($portionss as $portion)
                                    <tbody>
                                        <tr>
                                             <td>{{ $loop->iteration }}</td>
                                             <td>{{ $portion->user->name }}</td>
                                             <td>{{ $portion->portion }} Porsi</td>
                                             <td>
                                                 <select name="portion[]">
                                                     <option value="0">0</option>
                                                     <option value="1">1</option>
                                                     <option value="2">2</option>
                                                     <option value="3">3</option>
                                                     <option value="4">4</option>
                                                 </select>
                                             </td>
                                             <td>{{ $portion->created_at }}</td>

                                             <input type="hidden" name="portion_id[]" value="{{ $portion->id}}">
                                             <input type="hidden" name="taked_at" value="{{ $portion->taked_at }}">

                                        </tr>
                                    </tbody>
                                    @endforeach

                            </table>
                            {!! $portionss->links() !!}
                                    <button type="submit"
                                        class="btn btn-outline-primary" style="width: 20%; margin-left: 370px;">Lanjut
                                    </button>
                        </form>
                        <!-- END CHECK MULAI MASAK -->
                    @endif
                @endif
                <!-- END FORM KOKI -->
            </div>
        </div>
    </div>
</div>
@endsection
