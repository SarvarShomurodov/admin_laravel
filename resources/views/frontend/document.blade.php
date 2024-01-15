@extends('layouts.app')
@section('title','Hujjatlar')
@section('content')
    <div class="row">
        <div class="col-2">
        </div>
        <div id="document3" style="margin-top: 12px;" class="col-2">
            <div class="container-xxl py-1">
                <div class="col-lg-3 col-md-6">
                    <div style="margin-top: 100px;margin-right: -200px;" class="team-item bg-light">
                        <div class=" p-4 ">
                            <h5  class="mb-0 rounded-top">Interaktiv xizmatlar</h5>
                            <hr>
                            <small><a href=""><i class="fa-solid fa-droplet"></i> Reyestr</a></small><br><br>
                            <small><a href="{{url('tariffn')}}"><i class="fa-solid fa-droplet"></i> Me'yorlar</a></small><br><br>
                            <small><a href=""><i class="fa-solid fa-droplet"></i> So‘rovnomalar</a></small><br><br>
                            <small><a href=""><i class="fa-solid fa-droplet"></i> Tariflar</a></small><br><br>
                            <small><a href=""><i class="fa-solid fa-droplet"></i> savollar</a></small><br><br>
                            <small><a href=""><i class="fa-solid fa-droplet"></i> Davlat xizmatlari</a></small><br><br>
                            <small><a href=""><i class="fa-solid fa-droplet"></i> Shartnomalar</a></small><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="document2" class="col-6">
            <div class="container-xxl py-1">
                <div class="container">
                    <div>
                        <h2 class="mb-2">Me'yorlar bo'yicha to'lovlar</h2>
                        <h6  style="color:#3e4d63" class="mb-5">O`zbek tilidagi hujjatlar</h6>
                        <h5 class="mb-5">Biriktirilgan hujjatlar</h5>
                    </div>
                    <div id="document1" class="row g-4">
                        @foreach($documents as $document)
                            <div class="col-lg-3 wow fadeInUp">
                                <div class="team-item bg-light" style="width: 100%; height: 100%">
                                    <div class="col-sm">
                                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                            <i style="font-size: 45px;color: #473974;" class="fa-regular fa-file-lines"></i>
                                        </div>
                                        <div class="text-center p-4">
                                            <h6 style="color:#3e4d63" class="mb-0">{{$document->name}}</h6>
                                            <small><a href="{{url('/download/'.$document->id)}}">Yuklab Olish <i class="fa-solid fa-download"></i></a></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
