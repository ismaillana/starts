@extends('layouts.admin.base')
@section('content')
  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tabel /</span> Tabel Pengunjung</h4>
    <!-- Bootstrap Table with Header - Light -->
    <div class="card">
      <div class="card-header">
        <div class="d-flex justify-content-between w-100">
            <h4>
                Data Pengunjung
            </h4>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead class="table-light">
              <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Usia</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @forelse ($pengunjung as $item)
                <tr>
                  <td>
                      {{$loop->iteration}}
                  </td>
                  <td>
                      {{$item->name}}
                  </td>
                  <td>
                      {{$item->email}}
                  </td>
                  <td>
                      {{$item->gender}}
                  </td>
                  <td>
                      {{$item->age}}
                  </td>
                  <td>
                    <div class="dropdown">
                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('pengunjung.edit', $item->id) }}"
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
                    <td colspan="6" class="text-center">
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