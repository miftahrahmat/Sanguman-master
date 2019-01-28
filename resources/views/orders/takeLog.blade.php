@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               
                <div class="card-header">
                Daftar pesanan hari ini
                </div>
                 @if ($errors->any())
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Yeeeeey !!!</strong> Sepertinya ada yang salah terhadap apa yang anda masukan :D<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Jika tombol mulai masak di klik-->
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                        </div>
                    @endif

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                        </div>
                    @endif

                    <form action="{{ route('order.log') }}" method="POST">
                        @csrf

                       <table class="table table-hover table table-striped">
                                <thead>
                                    <tr>
                                         <th>No</th>
                                         <th>Name</th>
                                         <th>Portions</th>
                                         <th>Take</th>
                                         <th>Created</th>
                                    </tr>
                                </thead>
                                @foreach($portions as $portion)
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
                        
                        <button type="submit"
                                    class="btn btn-outline-primary" style="width: 20%; margin-left: 550px;"> Lanjut
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection