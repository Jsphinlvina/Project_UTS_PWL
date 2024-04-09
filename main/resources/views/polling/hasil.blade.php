@extends('dashboard.master')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h3 class="h2">Hasil Polling</h3>
        </div>

        @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
        @endif

        <div class="table-responsive small col-lg-10">
            <a href="/dashboard/mata-kuliah/create" class="text-decoration-none badge bg-success ms-1">Create Mata
                Kuliah Baru</a>
            <table class="table table-striped table-sm mt-2">
                <thead>
                <tr>
                    <th scope="col">Periode Polling</th>
                    <th scope="col">Nomor Polling</th>
                    <th scope="col">Kode Mata Kuliah - Nama Mata Kuliah</th>
                    <th scope="col">Kode - Nama Program Studi</th>
                    <th scope="col">Total Mahasiswa yang memilih</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($datas as $pol)
                    <tr>
                        <td>{{$pol->start_at}} - {{$pol->end_at}}</td>
                        <td>{{$pol->id_polling}}</td>
                        <td>{{$pol->id_mataKuliah}} - {{$pol->pollingDetail
                              ->mataKuliah->nama_mataKuliah}}</td>
                        <td>{{$pol->pollingDetail->mataKuliah->id_program_studi}}
                            - {{$pol->pollingDetail->mataKuliah
                            ->programStudi->nama_program_studi}}</td>
                        <td>
                            {{$pol->id_user}}
                        </td>
                        <td>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <canvas class="my-4 w-100" id="myChart" width="900" height="500"></canvas>
    </main>
@endsection

