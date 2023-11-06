@extends('pegawai.dashboard')


@section('data_pendidikan')
<?php
$row = 1;
?>
<table class="table table-hover shadow mt-3">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">NIP</th>
            <th scope="col">nama_pendidikan</th>
            <th scope="col">gelar</th>
            <th scope="col">program</th>
            <th scope="col">tahun_lulus</th>
            <th scope="col">#</th>

        </tr>
    </thead>
    <tbody>
        {{-- @foreach ($user as $item) --}}
            <tr>
                <th scope="row">{{ $row }}</th>
                <td>{{ $user->nip }}</td>
                <td>{{ $user->nama_pendidikan }}</td>
                <td>{{ $user->gelar }}</td>
                <td>{{ $user->program }}</td>
                <td>{{ $user->tahun_lulus }}</td>
                <td>
                    <div class="">
                        <a href="/petugas/updatePendidikan/{{ $user->id }}" class="btn btn-outline-primary btn-sm me-1 mb-1">Ubah</a>
                        {{-- <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                            data-bs-target="#confirmDeleteModal-{{ $item->nik }}">Delete</button> --}}
                    </div>
                </td>
            </tr>
            <?php
            $row++;
            ?>
            {{-- <div class="modal fade" id="confirmDeleteModal-{{ $item->nik }}" tabindex="-1"
                aria-labelledby="confirmDeleteModalLabel-{{ $item->nik }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="confirmDeleteModalLabel-{{ $item->nik }}">Confirm Deletion
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to delete this record?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                            <form action="{{ route('biodata.delete', $item->nik) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Confirm Delete</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div> --}}
        {{-- @endforeach --}}
    </tbody>
</table>
@endsection




