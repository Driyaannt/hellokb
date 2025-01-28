@extends('layouts.app')

@section('content')
<div class="page-wrapper" id="main-wrapper" data-layout="horizontal" data-navbarbg="skin6" data-sidebartype="full">
<div class="body-wrapper">
    <div class="container-fluid">
      <div class="card shadow-none position-relative overflow-hidden mb-4 card-container animate__animated animate__fadeInUp" style="background-color: #fff0f3;">
        <div class="card-body px-4 py-3">
          <div class="row align-items-center">
            <div class="col-9">
              <h4 class="fw-semibold mb-8">Silahkan isi Biodata Anda!</h4>
              {{-- <div class="row gap-2 mt-2">
                <div class="col-md-5">
                  <button type="button" class="btn d-flex bg-primary-subtle w-100 d-block text-primary">
                    <span class="badge text-bg-primary me-2">1</span>MENDAPATKAN INFORMASI YANG TEPAT
                  </button>
                </div>
                <div class="col-md-5">
                  <button type="button" class="btn d-flex bg-success-subtle w-100 d-block text-success">
                    <span class="badge text-bg-success me-2">2</span> MEMILIH DAN MEMAKAI METODE KB
                  </button>
                </div>
                <div class="col-md-5">
                  <button type="button" class="btn d-flex bg-warning-subtle w-100 d-block text-warning">
                    <span class="badge text-bg-warning me-2">3</span>MENGATASI KELUHAN
                  </button>
                </div>
              </div> --}}
            </div>
            <div class="col-3">
              <div class="text-center mb-n5">
                <img src="{{ asset('assets/images/bidan.png') }}" alt="modernize-img" class="img-fluid mb-n4" />
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card card-container animate__animated animate__fadeInUp">
        <div class="card-body">
          <h5 class="mb-3">Ceritakan tentang diri anda!</h5>
          <form action="{{ route('save-form-data') }}" method="POST">
            @csrf <!-- CSRF Token untuk menghindari serangan CSRF -->

            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('nama_akseptor') is-invalid @enderror"
                               name="nama_akseptor" value="{{ old('nama_akseptor') }}" placeholder="Nama Akseptor" />
                        <label for="nama_akseptor">Nama Akseptor</label>
                        @error('nama_akseptor')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('nama_suami') is-invalid @enderror"
                               name="nama_suami" value="{{ old('nama_suami') }}" placeholder="Nama Suami" />
                        <label for="nama_suami">Nama Suami</label>
                        @error('nama_suami')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('pendidikan_terakhir') is-invalid @enderror"
                               name="pendidikan_terakhir" value="{{ old('pendidikan_terakhir') }}" placeholder="Pendidikan Terakhir" />
                        <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                        @error('pendidikan_terakhir')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('tujuan_kb') is-invalid @enderror"
                               name="tujuan_kb" value="{{ old('tujuan_kb') }}" placeholder="Tujuan Mengikuti Program KB" />
                        <label for="tujuan_kb">Tujuan Mengikuti Program KB</label>
                        @error('tujuan_kb')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="tel" class="form-control @error('no_hp') is-invalid @enderror"
                               name="no_hp" value="{{ old('no_hp') }}" placeholder="No Hp" />
                        <label for="no_hp">No Hp</label>
                        @error('no_hp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                               name="alamat" value="{{ old('alamat') }}" placeholder="Alamat" />
                        <label for="alamat">Alamat</label>
                        @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-12">
                    <div class="d-md-flex align-items-center mt-3">
                        <div class="ms-auto mt-3 mt-md-0">
                            <button type="submit" class="btn btn-info font-medium rounded-pill px-4">
                                <div class="d-flex align-items-center">
                                    <i class="ti ti-send me-2 fs-4"></i>
                                    Submit
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>

<!-- Button -->
<button class="btn btn-primary p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn"
        type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-controls="exampleModal">
    <img src="{{asset('assets/icon-rekomendasi/ai-chatbot.gif')}}" width="40px" alt="">
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered"> <!-- Tambahkan kelas untuk ukuran besar dan posisi tengah -->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Chat AI</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="position-relative overflow-hidden d-flex">
            <div class="position-relative d-flex flex-grow-1 flex-column">
              <div class="chat-box p-9" style="height: calc(100vh - 442px)" data-simplebar>
                <div class="chat-list chat active-chat" data-user-id="1">
                  <div class="hstack gap-3 align-items-start mb-7 justify-content-end">
                    <div class="text-end">
                      <h6 class="fs-2 text-muted">Anda, 2 Minute ago</h6>
                      <div class="p-2 bg-light-info text-dark rounded-1 d-inline-block fs-3"> Apa itu KB? </div>
                    </div>
                  </div>
                  <div class="hstack gap-3 align-items-start mb-7 justify-content-start">
                    <img src="../../dist/images/profile/user-8.jpg" alt="user8" width="40" height="40" class="rounded-circle" />
                    <div>
                      <h6 class="fs-2 text-muted">AI, 2 Minute ago</h6>
                      <div class="p-2 bg-light rounded-1 d-inline-block text-dark fs-3"> KB (Keluarga Berencana) adalah program untuk mengatur jumlah dan jarak kelahiran anak guna meningkatkan kesehatan, kesejahteraan keluarga, dan kualitas hidup masyarakat. </div>
                    </div>
                  </div>
                  <div class="hstack gap-3 align-items-start mb-7 justify-content-end">
                    <div class="text-end">
                      <h6 class="fs-2 text-muted">Anda, Now</h6>
                      <div class="p-2 bg-light-info text-dark mb-1 d-inline-block rounded-1  fs-3"> apakah kita memerlukan kb? </div>
                      <div class="p-2 bg-light-info text-dark rounded-1 fs-3"> dan apa saja jenis kb? </div>
                    </div>
                  </div>
                  <div class="hstack gap-3 align-items-start mb-7 justify-content-start">
                    <img src="../../dist/images/profile/user-8.jpg" alt="user8" width="40" height="40" class="rounded-circle" />
                    <div>
                      <div>
                        <h6 class="fs-2 text-muted">AI, 2 Minute ago</h6>
                        <div class="p-2 bg-light rounded-1 d-inline-block text-dark fs-3"> KB diperlukan untuk menjaga kesehatan ibu dan anak, merencanakan jumlah anak sesuai kemampuan, meningkatkan kesejahteraan keluarga, dan mengendalikan pertumbuhan penduduk. </div>
                        <div class="p-2 bg-light rounded-1 d-inline-block text-dark fs-3"> Jenis KB terdiri dari beberapa metode, yaitu metode hormonal seperti pil, suntik, dan implan; metode alat kontrasepsi seperti IUD (spiral) dan kondom; metode permanen seperti sterilisasi yang mencakup tubektomi untuk wanita dan vasektomi untuk pria; serta metode alami seperti menggunakan kalender atau metode amenorea laktasi (LAM) saat menyusui. </div>
                    </div>
                      <div class="rounded-2 overflow-hidden mt-2">
                        <img src="../../dist/images/products/product-1.jpg" alt="" class="w-100">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="px-9 py-6 border-top chat-send-message-footer">
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center gap-2 w-85">
                    <a class="position-relative nav-icon-hover z-index-5" href="javascript:void(0)"> <i class="ti ti-mood-smile text-dark bg-hover-primary fs-7"></i></a>
                    <input type="text" class="form-control message-type-box text-muted border-0 p-0 ms-2" placeholder="Type a Message" />
                  </div>
                  <ul class="list-unstyledn mb-0 d-flex align-items-center">
                    <li><a class="text-dark px-2 fs-7 bg-hover-primary nav-icon-hover position-relative z-index-5 " href="javascript:void(0)"><i class="ti ti-photo-plus"></i></a></li>
                    <li><a class="text-dark px-2 fs-7 bg-hover-primary nav-icon-hover position-relative z-index-5 " href="javascript:void(0)"><i class="ti ti-paperclip"></i></a></li>
                    <li><a class="text-dark px-2 fs-7 bg-hover-primary nav-icon-hover position-relative z-index-5 " href="javascript:void(0)"><i class="ti ti-microphone"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>

@endsection
