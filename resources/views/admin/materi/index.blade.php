@extends('layouts.admin.base')
@section('content')
  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tabel /</span> Tabel Materi</h4>
    <!-- Bootstrap Table with Header - Light -->
    <div class="card">
      <div class="card-header">
        <div class="d-flex justify-content-between w-100">
            <h4>
                Data Materi
            </h4>

            <a href="{{ route('materi.create') }}"
                class="btn btn-success d-flex align-items-center ">
                <i class="fa fa-plus pr-2"></i>
                Tambah
            </a>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive text-nowrap">
          <table id="myTable" class="table" style="width: 100%" >
            <thead class="table-light">
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Link</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @forelse ($materi as $item)
                <tr>
                  <td style="width: 20px">
                      {{$loop->iteration}}
                  </td>
                  <td>
                      {{$item->title}}
                  </td>
                  <td>
                      <a href="{{$item->link}}" target="_blank">Link Drive</a>
                  </td>
                  <td style="width: 10px">
                    <div class="dropdown">
                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('materi.edit', $item->id) }}"
                          ><i class="bx bx-edit-alt me-1"></i> Edit</a
                        >
                        <a class="dropdown-item" href="javascript:void(0);"
                          ><i class="bx bx-trash me-1"></i> Delete</a
                        >
                      </div>
                    </div>
                  </td>
                </tr>
              @empty
                <tr>
                    <td colspan="4" class="text-center">
                        <p>Belum Ada Data!</p>
                    </td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- Bootstrap Table with Header - Light -->
    <!--/ Responsive Table -->
  </div>    
@endsection