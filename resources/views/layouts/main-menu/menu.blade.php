@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
          <!-- 7. Stats card -->
          <div
            class="d-flex border-bottom title-part-padding px-0 mb-3 align-items-center"
          >
          {{-- back button --}}
            <a href="{{ route('home') }}" class="me-2 btn btn-outline-secondary">
              <i class="ti ti-arrow-left"></i> Back
            </a>
            <h3 class="mb-0 fs-5">Menu Utama</h3>
          </div>
        </div>
        <div
          class="col-md-6 d-flex align-items-stretch card-container animate__animated animate__fadeInRight"
        >
          <a
            href="{{ route('kb-method') }}"
            class="card text-bg-success text-white w-100 card-hover"
          >
            <div class="card-body">
              <div class="d-flex align-items-center">
                {{-- <i class="ti ti-basket display-6"></i> --}}
                <img src="{{ asset('assets/icons/1.gif') }}" alt="" style="max-width: 80px">
                <div class="ms-auto">
                  <i class="ti ti-arrow-right fs-8"></i>
                </div>
              </div>
              <div class="mt-3">
                <h4 class="card-title mb-1 text-white">
                    KLIEN BARU MEMILIH METODE KB
                </h4>
              </div>
            </div>
          </a>
        </div>
        <div
          class="col-md-6 d-flex align-items-stretch card-container animate__animated animate__fadeInRight"
        >
          <a
            href="{{ route('change-method') }}"
            class="card text-bg-warning text-white w-100 card-hover"
          >
            <div class="card-body">
              <div class="d-flex align-items-center">
                {{-- <i class="ti ti-basket display-6"></i> --}}
                <img src="{{ asset('assets/icons/2.gif') }}" alt="" style="max-width: 80px; margin-top: -10px">
                <div class="ms-auto">
                  <i class="ti ti-arrow-right fs-8"></i>
                </div>
              </div>
              <div class="mt-4">
                <h4 class="card-title mb-1 text-white">
                    KLIEN GANTI CARA METODE KB
                </h4>
              </div>
            </div>
          </a>
        </div>
        <div
          class="col-md-6 d-flex align-items-stretch card-container animate__animated animate__fadeInLeft"
        >
          <a
            href="{{ route('post-abortion') }}"
            class="card text-bg-primary text-white w-100 card-hover"
          >
            <div class="card-body">
              <div class="d-flex align-items-center">
                <img src="{{ asset('assets/icons/4.gif') }}" alt="" class="mt-2" style="max-width: 60px; background-color:white; border-radius:20px;">
                <div class="ms-auto">
                  <i class="ti ti-arrow-right fs-8"></i>
                </div>
              </div>
              <div class="mt-4">
                <h4 class="card-title mb-1 text-white">
                    KLIEN PASCA ABORSI
                </h4>
              </div>
            </div>
          </a>
        </div>
        <div
          class="col-md-6 d-flex align-items-stretch card-container animate__animated animate__fadeInLeft"
        >
          <a
            href="{{ route('post-partum') }}"
            class="card text-bg-info text-white w-100 card-hover"
          >
            <div class="card-body">
              <div class="d-flex align-items-center">
                <img src="{{ asset('assets/icons/5.gif') }}" alt="" class="mt-2" style="max-width: 60px; background-color:white; border-radius:20px;">
                <div class="ms-auto">
                  <i class="ti ti-arrow-right fs-8"></i>
                </div>
              </div>
              <div class="mt-4">
                <h4 class="card-title mb-1 text-white">KLIEN PASCA BERSALIN/MENYUSUI</h4>
              </div>
            </div>
          </a>
        </div>
        {{-- <div
          class="col-md-6 d-flex align-items-stretch card-container animate__animated animate__fadeInLeft"
        >
          <a
            href="javascript:void(0)"
            class="card text-bg-danger text-white w-100 card-hover"
          >
            <div class="card-body">
              <div class="d-flex align-items-center">
                <img src="{{ asset('assets/icons/3.gif') }}" alt="" class="mt-2" style="max-width: 60px; background-color:white; border-radius:20px;">

                <div class="ms-auto">
                  <i class="ti ti-arrow-right fs-8"></i>
                </div>
              </div>
              <div class="mt-4">
                <h4 class="card-title mb-1 text-white">
                    KLIEN MENUNDA KEHAMILAN
                </h4>
              </div>
            </div>
          </a>
        </div> --}}
        <div
          class="col-md-12 d-flex align-items-stretch card-container animate__animated animate__fadeInLeft"
        >
          <a
           href="{{ route('menu-kesehatan') }}"
            class="card text-bg-secondary text-white w-100 card-hover"
          >
            <div class="card-body">
              <div class="d-flex align-items-center">
                <img src="{{ asset('assets/icons/6.gif') }}" alt="" class="mt-2" style="max-width: 60px; background-color:white; border-radius:20px;">
                <div class="ms-auto">
                  <i class="ti ti-arrow-right fs-8"></i>
                </div>
              </div>
              <div class="mt-4">
                <h4 class="card-title mb-1 text-white">
                    KLIEN MENJAGA KESEHATAN REPRODUKSI
                </h4>
              </div>
            </div>
          </a>
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

<script>
    document.querySelectorAll('.card-hover').forEach((card) => {
      card.addEventListener('click', function (e) {
        e.preventDefault(); // Mencegah aksi default jika diperlukan

        // Ambil nama kartu dari elemen h4 dengan class .card-title
        const cardTitleElement = this.querySelector('.card-title');
        const cardName = cardTitleElement ? cardTitleElement.textContent.trim() : 'Unknown';

        console.log('Selected card:', cardName);

        // Kirim data ke server menggunakan fetch
        fetch('{{ route("section-card") }}', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}', // Token CSRF untuk keamanan
          },
          body: JSON.stringify({ selected_card: cardName }), // Data yang dikirim
        })
          .then((response) => response.json())
          .then((data) => {
            console.log(data.message); // Berikan feedback ke user jika diperlukan

            // Lakukan navigasi jika diperlukan
            const selectedValue = this.getAttribute('href');
            if (selectedValue !== 'javascript:void(0)') {
              window.location.href = selectedValue;
            }
          })
          .catch((error) => {
            console.error('Error:', error);
          });
      });
    });
  </script>



  @endsection
