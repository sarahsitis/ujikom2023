@extends('templates.header')

@push('style')
    
@endpush

@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg p-5 position-relative">
              <h6 class="text-white text-capitalize ps-3 position-absolute top-50 start-0 translate-middle-y">Tabel Jenis</h6>
              <!-- Button trigger modal -->
                <button type="button" class="btn btn-icon btn-2 btn-warning position-absolute top-50 end-0 translate-middle-y me-3" data-bs-toggle="modal" data-bs-target="#formModal">
                  <span class="btn-inner--icon"><i class="fas fa-plus-square"></i> Tambah</span>
                </button>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive px-5 py-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                @if ($jenis->count())                    
                
                  @foreach ($jenis as $j)                   
                  <tr>
                    <td>{{ $no = isset($no)?++$no:$no=1; }}</td>
                    <td>{{ $j->nama_jenis}}</td>                    
                    <td class="align-middle">
                      <a href="javascript:;" class="text-secondary font-weight-bold text-xs"  data-bs-toggle="modal" data-bs-target="#formModal" 
                      data-mode="edit" data-id="{{ $j->id }}" data-nama="{{ $j->nama_jenis}}" data-original-title="Edit Jenis">
                        Edit
                      </a>
                    </td>
                  </tr>
                  @endforeach
                @else
                  <tr class="text-center">
                    <td colspan="3"> No Record Found.</td>
                  </tr>
                @endif
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('jenis.modal')

    <footer class="footer py-4  ">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start">
              © <script>
                document.write(new Date().getFullYear())
              </script>,
              made with <i class="fa fa-heart"></i> by
              <a href="h" class="font-weight-bold" target="_blank">RPL</a>
            </div>
          </div>
          
        </div>
      </div>
    </footer>
  </div>
@endsection

@push('script')
<script>
  $('#formModal').on('show.bs.modal', function(e){
  console.log('jenis')
  const btn = $(e.relatedTarget)
  const mode = btn.data('mode')
  const id = btn.data('id')
  const nama = btn.data('nama')
  const modal = $(this)
    if(mode=='edit'){
      console.log(nama)
      modal.find('.modal-title').text('Edit Data Jenis')
      modal.find('#nama_jenis').val(nama)
      modal.find('.modal-body form').attr('action','{{ url("jenis") }}/'+id)
      modal.find('#method').html('@method("PATCH")')
    }else{
      modal.find('.modal-title').text('Input Data Jenis')
      modal.find('#nama').val('');
      modal.find('#method').html('')
      modal.find('.modal-body form').attr('action','{{ url("jenis")}}')
    }
});
</script>
@endpush