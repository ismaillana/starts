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
          <table id="myTable" class="table" style="width: 100%">
            <thead class="table-light">
              <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Usia</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @foreach ($pengunjung as $item)
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
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- Bootstrap Table with Header - Light -->
    <!--/ Responsive Table -->
  </div>    
@endsection