@extends('layouts.app')
@section('title', 'My Profile')
@section('profile', 'profile')
@section('main')



<div class="container vh-200 gradient-custom emp-profile breadcumps">
            
            	
                <div class="row a">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="{{ url('/img/user/'.$user->gambar_profil) }}" alt=""/>
                            <div class="s">
                                
                                
                            </div>
                        </div>
                    </div>
               
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        {{ $user->nama }}
                                    </h5>
                                    <h6>
                                       {{ $user->jurusan }}
                                    </h6>
                                    
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Tentang</a>
                                </li>
                            </ul>
                            <div class="row">
                    <div class="col-md-8 tabprofile">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nama </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $user->nama }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nim</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $user->nim }}</p>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-6">
                                                <label>Kelas</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $user->kelas }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Jurusan</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $user->jurusan }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Angkatan</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $user->angkatan }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Bio</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user->bio_profil  ?? '. . .'}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $user->email }}</p>
                                            </div>
                                        </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('mahasiswa.edit', ['mahasiswa' => $user->id]) }}"><input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/></a>
                    </div>

                </div>
                
                   
        </div>
@endsection