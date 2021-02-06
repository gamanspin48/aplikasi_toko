@extends('partials.template')
@section('main')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 mt-5">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <form class="form-signin">
                        <h1 class="h3 mb-3 font-weight-normal text-dark text-center">Aplikasi Toko</h1>
                        <label for="inputEmail" class="sr-only">Nama Toko</label>
                        <input type="email" id="inputEmail" class="form-control mb-2" placeholder="Email address" required autofocus>
                        <label for="inputPassword" class="sr-only">Saldo</label>
                        <input type="password" id="inputPassword" class="form-control mb-2" placeholder="Password" required>
                        
                        <a class="btn btn-lg btn-dark btn-block" type="submit" href="/barang_masuk">Sign in</a>
                        {{-- <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p> --}}
                    </form>
                </div>
                <div class="col-sm-2"></div>
            </div>
           
        </div>
        <div class="col-md-3"></div>
    </div>
   
</div>
@endsection