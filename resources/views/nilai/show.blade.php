@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Nilai
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Kode Mata Pelajaran</label>
                            <input type="text" class="form-control " name="kode_mapel" value="{{ $nilai->kode_mapel }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nilai</label>
                            <input type="text" class="form-control " name="nilai" value="{{ $nilai->nilai }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Grade</label>
                            <textarea class="form-control" name="grade" readonly>{{ $nilai->grade }}</textarea>

                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('nilai.index') }}" class="btn btn-success" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection