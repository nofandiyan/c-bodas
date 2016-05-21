@extends('templates\master')

@section('konten')

<!-- ==========================
        BREADCRUMB - START 
    =========================== -->
    <section class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <h2>C-Bodas</h2>
                    <p>Daftar</p>
                </div>
                <div class="col-xs-6">
                    <ol class="breadcrumb">
                        <li><a href="homepage.html">Halaman Utama</a></li>
                        <li class="active">Daftar Admin</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========================
        BREADCRUMB - END 
    =========================== -->
    
    <!-- ==========================
        ACCOUNT - START 
    =========================== -->
    <section class="content account">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
                    <div class="login-form-wrapper">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <input type="hidden" name="status" value="0">
                        <input type="hidden" name="confirmation_code" value="0">
                        <input type="hidden" name="role" value="2">


                        <h3>Form Pendaftaran Penjual</h3>

                            <br>
                            <h4><label>Informasi Akun</label></h4>

                            <!-- <div class="form-group{{ $errors->has('prof_pic') ? ' has-error' : '' }}" align="center">
                                <label>Foto Profil</label>
                                <input type="file" name="prof_pic" id="prof_pic">
                                 @if ($errors->has('prof_pic'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prof_pic') }}</strong>
                                    </span>
                                @endif
                            </div> -->

                            <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" name="email" placeholder="Email..." value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input type="password" class="form-control" name="password" placeholder="Kata Sandi...">
                                 @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Ulangi Kata Sandi...">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <br>
                            <h4><label>Informasi Data Diri</label></h4>
                            
                            <div class="{{ $errors->has('type_id') ? ' has-error' : '' }}">
                                <select class="form-control" name="type_id">
                                    <option>--Jenis Identitas--</option>
                                    <option value="KTP">KTP</option>
                                    <option value="SIM">SIM</option>
                                </select>

                                @if ($errors->has('type_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type_id') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="{{ $errors->has('no_id') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" name="no_id" placeholder="Nomor Identitas..." value="{{ old('no_id') }}">

                                @if ($errors->has('no_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('no_id') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="{ $errors->has('name') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" name="name" placeholder="Nama Lengkap..." value="{{ old('name') }}">
                                 @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                            
                            <div>
                                <input type="text" class="form-control" name="phone" maxlength="12" placeholder="Nomor Telepon..." value="{{ old('phone') }}">

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="{{ $errors->has('gender') ? ' has-error' : '' }}">
                                <select class="form-control" name="gender">
                                    <option>--Jenis Kelamin--</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <br>
                            <h4><label>Informasi Alamat</label></h4>

                            <div class="{{ $errors->has('street') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" name="street" placeholder="Nama Jalan dan Nomor..." value="{{ old('street') }}">
                                @if ($errors->has('street'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('street') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="{{ $errors->has('city') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" name="city" placeholder="Kota..." value="{{ old('street') }}">
                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="{{ $errors->has('province') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" name="province" placeholder="Propinsi..." value="{{ old('province') }}">
                                @if ($errors->has('province'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('province') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="{{ $errors->has('zip_code') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" name="zip_code" placeholder="Kode Pos..." value="{{ old('zip_code') }}">
                                @if ($errors->has('zip_code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('zip_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                            <br>

                        <br>
                        <h4><label>Informasi Rekening</label></h4>

                        <div class="{{ $errors->has('bank_name') ? ' has-error' : '' }}">
                            
                                <input type="text" class="form-control" name="bank_name" placeholder="Nama Bank..." value="{{ old('bank_name') }}">

                                @if ($errors->has('bank_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bank_name') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="{{ $errors->has('bank_account') ? ' has-error' : '' }}">
                                
                                <input type="text" class="form-control" name="bank_account" placeholder="Nama Dalam Buku Rekening..." value="{{ old('bank_account') }}">

                                @if ($errors->has('bank_account'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bank_account') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="{{ $errors->has('account_number') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" name="account_number" placeholder="Nomor Rekening..." value="{{ old('account_number') }}">

                                @if ($errors->has('account_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('account_number') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <br>
                        <div class="{{ $errors->has('myCheck') ? ' has-error' : '' }}">
                            <div class="col-md-1">
                                <input type="checkbox" id="myCheck" name="test" required>
                            </div>
                            <div class="col-md-offset-1" align="justify">
                                Data tersebut saya isi dengan jujur dan apa adanya, apabila terdapat kesalahan pada saat pengisian formulir adalah murni dari kesalahan saya dan pihak C-Bodas tidak ikut menanggung kesalahan yang telah saya perbuat.
                            </div>
                        </div>
                         <br>
                        <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="Register">Submit</button>
                        <!-- <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>
                            </div>
                        </div> -->
                    </form>
                </div>
                    <p class="form-text">Sudah memiliki akun? <a href="{{ url('/login') }}">Masuk</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========================
        ACCOUNT - END 
    =========================== -->

@stop