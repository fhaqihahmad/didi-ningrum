<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    {{-- Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ningrum Didi</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <!-- Reset Bootsrap -->
    <link rel="stylesheet" href="{{asset('reset.css')}}" />
    <!-- My CSS -->
    <link rel="stylesheet" href="{{asset('style.css')}}" />
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Allura&family=Italiana&family=Roboto+Slab&display=swap" rel="stylesheet" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- Swipper.js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- Aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- Animate -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  </head>
  <body>
    <section class="cover container-wide">
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
          <div class="modal-content cover">
            <div class="center-100">
              <div class="box my-3 animate__animated animate__fadeInUp">
                <h2>ND</h2>
              </div>
              <h2 class="z-0 animate__animated animate__fadeInUp animate__delay-1s my-2 mb-4" style="font-size: 35px">Ningrum <span style="font-family: 'Allura', cursive; font-size: 30px">&</span> Didi</h2>
              <h1 class="mb-2 animate__animated animate__fadeInUp animate__delay-1s" style="color: #546f82; font-size:20px;">Dear</h1>
              <h1 class="mb-4 animate__animated animate__fadeInUp animate__delay-2s" style="color: #546f82; font-size:24px;">{{ $dear }}</h1>
              <button type="button" style="color: #546f82; border-color: #546f82;" class="btn btn-sm btn-outline-primary animate__animated --animate-duration animate__heartBeat animate__infinite" data-bs-dismiss="modal" onclick="audio.play();">Buka Undangan</button>
            </div>
          </div>
        </div>
      </div>

      <script>
        document.documentElement.style.setProperty('--animate-duration', '.5s');
      </script>

      <script>
        window.addEventListener('load', () => {
          $('#exampleModal').modal('show');
        });
      </script>
    </section>

    <!-- Musik -->
    <div class="container-wide">
      <div class="position-fixed bottom-0 end-0">
        <button id="mp3"
          class="bg-transparent border-0"
          onclick="if (audio.paused) audio.play();
      else audio.pause();"
        >
          <img id="mySpin" src="{{asset('assets/img/music/music.png')}}" alt="musik" class="music spin" />
        </button>
      </div>
    </div>

    <script>
      const audio = new Audio();
      audio.src = '{{asset('./assets/music/musik.mp3')}}';
    </script>

    <!-- End Musik -->

    <section class="home container-wide">
      <div class="center-85">
        <!-- Kotak Singkatan -->
        <div class="box my-3" data-aos="fade-up" data-aos-duration="1500" >
          <h2>ND</h2>
        </div>
        <!-- Text -->
        <h1 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100"  class="my-2" style="letter-spacing: 8px">THE WEDDING OF</h1>
        <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200"  class="text-center mb-4 mx-5" style="font-size: 11px">My love for you is a journey, starting at forever and ending at never</p>
        <h2 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300"  class="my-2" style="font-size: 35px">Ningrum <span style="font-family: 'Allura', cursive; font-size: 30px">&</span> Didi</h2>
        <h1 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400" class="mt-3">12 · 05 · 23</h1>
      </div>
    </section>

    <!-- Hi -->
    <h1 class="text-center py-3 text-white container-wide" style="background-color: #546f82">Hi, {{ $dear }}</h1>

    <!-- Profile Mempelai -->
    <section class="mempelai container-wide">
      <div class="center-85">
        <h2 class="mb-3" style="color: #546f82; font-size: 5rem">ND</h2>
        <p class="text-center mx-5 lh-sm" style="font-size: 11px">
          Assalamualaikum <br />
          Maha Suci Allah SWT yang telah menciptakan makhluk-Nya berpasang-pasangan Ya Allah perkenankan kami untuk melaksanakan pernikahan kami :
        </p>
        <h2 data-aos="fade-up" data-aos-duration="1500" class="my-4" style="font-size: 2rem">Apriliyana Janatu Ningrum</h2>
        <p class="text-center lh-sm mb-4" style="font-size: 12px">
          Putri dari <br />
          Bpk. H. Muhammad Ismail Santoso & <br />
          Ibu Hj. Sulastik
        </p>
        <!-- Instagram -->
        {{-- <div class="d-flex align-items-center">
          <span class="p-1 rounded rounded-2" style="background-color: #546f82">
            <i class="fab fa-instagram text-white" aria-hidden="true"></i>
          </span>
          <p class="mx-1 fst-italic" style="font-size: 11px">@ahmadfhaqiih</p>
        </div> --}}

        <h3 class="my-4" style="font-size: 3rem; color: #546f82">and</h3>

        <h2 data-aos="fade-up" data-aos-duration="1500" class="my-4" style="font-size: 2rem">Akhmadi Widya Wicaksono</h2>
        <p class="text-center lh-sm mb-4" style="font-size: 12px">
          Putra dari <br />
          Bpk. H Semi Slamet Widagdo (Alm) & <br />
          Ibu Banjanjiah Handayani
        </p>
        <!-- Instagram -->
        <div class="d-flex align-items-center">
            <span class="p-1 rounded rounded-2" style="background-color: #546f82">
                <i class="fab fa-instagram text-white" aria-hidden="true"></i>
            </span>
                <p class="mx-1 fst-italic" style="font-size: 11px"><a class="text-decoration-none text-black" href="https://www.instagram.com/akhmadiwicaksono/" target="_blank" rel="noopener noreferrer">@akhmadiwicaksono</a></p>
        </div>
      </div>
      <hr width="50%" color="#546f82" size="4%" />
    </section>

    <section class="the-day container-wide">
      <div class="center-50">
        <img data-aos="flip-up" data-aos-duration="1500" src="{{asset('assets/img/bunga/Bunga (4).png')}}" alt="Image" />
        <h2 data-aos="zoom-in-up" data-aos-duration="1500" class="my-2">HARI PERNIKAHAN</h2>
        <table data-aos="zoom-in-up" data-aos-duration="1500" data-aos-delay="400" class="table text-center">
          <thead style="font-family: 'Italiana', serif; font-size: 23px">
            <tr>
              <th id="days">00</th>
              <th id="hours">00</th>
              <th id="minutes">00</th>
              <th id="seconds">00</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Hari</td>
              <td>Jam</td>
              <td>Menit</td>
              <td>Detik</td>
            </tr>
          </tbody>
        </table>
      </div>
      <hr width="50%" color="#546f82" size="4%" style="margin-left: 50%" />
    </section>

    <section class="akad-resepsi container-wide">
      <div class="container px-4">
        <div class="row gx-3">
          <div class="col-8" data-aos-duration="1600" data-aos="fade-up-right">
            <div class="p-3">
              <h1 class="my-3" style="font-size: 20px">Akad Nikah</h1>
              <p class="my-2 lh-base" style="font-size: 14px">
                Jumat, 12 Mei 2023
                <br />
                Pukul 20.00 WIB - Selesai
              </p>
              <img class="my-1" src="{{asset('assets/img/icon/lokasi.png')}}" alt="icons" style="height: 30px" />
              <p class="my-2">Tugu Harum ( Murnioso ) RT 03 RW 01, Belitang Madang Raya</p>
              <a href="https://goo.gl/maps/N5xSaXG3qwb84yGC6" target="_blank" rel="noopener noreferrer"><button type="button" class="btn btn-outline-dark my-2">Menuju Lokasi</button></a>
            </div>
          </div>
          <div class="col-4" data-aos-duration="1600" data-aos="fade-up-left">
            <div class="h-100 center">
              <h2 style="font-size: 60px; color: #546f82">
                20 <br />
                01 <br />
                23
              </h2>
            </div>
          </div>
        </div>
      </div>

      <!-- Resepsi -->
      <div class="container px-4">
        <div class="row gx-3">
          <div class="col-4" data-aos-duration="1600" data-aos-delay="400"  data-aos="fade-up-right">
            <div class="h-100 center">
              <h2 style="font-size: 60px; color: #546f82">
                20 <br />
                01 <br />
                23
              </h2>
            </div>
          </div>
          <div class="col-8" data-aos-duration="1600" data-aos-delay="400" data-aos="fade-up-left">
            <div class="p-3 text-end">
              <h1 class="my-3" style="font-size: 20px">Resepsi</h1>
              <p class="my-2 lh-base" style="font-size: 14px">
                Sabtu, 13 Mei 2023
                <br />
                Pukul 08.00 WIB - Selesai
              </p>
              <img class="my-1" src="{{asset('assets/img/icon/lokasi.png')}}" alt="icons" style="height: 30px" />
              <p class="my-2">Tugu Harum ( Murnioso ) RT 03 RW 01, Belitang Madang Raya</p>
              <a href="https://goo.gl/maps/N5xSaXG3qwb84yGC6" target="_blank" rel="noopener noreferrer"><button type="button" class="btn btn-outline-dark my-2">Menuju Lokasi</button></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="story container-wide">
      <div class="center-65">
        <hr width="50%" color="white" size="4%" />
        <!-- Kisah Cinta -->
        {{-- <h2 class="text-white my-3" style="font-size: 35px">KISAH CINTA</h2>
        <swiper-container class="mySwiper px-3 lh-base" pagination="true" pagination-clickable="true" keyboard="true" mousewheel="true" space-between="18" slides-per-view="2">
          <swiper-slide class="kotak overflow-y-scroll center"
            >Menikah
            <br />
            ipsum dolor sit amet consectetur adipisicing elit. Libero possimus, id odit mollitia odio harum voluptatum sapiente quae voluptatem, at labore est quasi dolorum minima?</swiper-slide
          >
          <swiper-slide class="kotak overflow-y-scroll center"
            >Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero possimus, id odit mollitia odio harum voluptatum sapiente quae voluptatem, at labore est quasi dolorum minima?</swiper-slide
          >
          <swiper-slide class="kotak overflow-y-scroll center"
            >Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero possimus, id odit mollitia odio harum voluptatum sapiente quae voluptatem, at labore est quasi dolorum minima?</swiper-slide
          >
          <swiper-slide class="kotak overflow-y-scroll center"
            >Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero possimus, id odit mollitia odio harum voluptatum sapiente quae voluptatem, at labore est quasi dolorum minima?</swiper-slide
          >
          <swiper-slide class="kotak overflow-y-scroll center"
            >Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero possimus, id odit mollitia odio harum voluptatum sapiente quae voluptatem, at labore est quasi dolorum minima?</swiper-slide
          >
        </swiper-container>
        <hr width="50%" color="white" size="4%" class="mt-4" />

        <br /> --}}
        <!-- Terima Kasih -->
        <h2 class="text-white" style="font-size: 2rem">Tanda Terima Kasih</h2>
        <p class="text-center text-white m-2" style="font-size: 12px">Doa restu anda merupakan karunia yang sangat berarti bagi kami dan jika membeberi adalah ungkapan tanda terima kasih anda, anda dapat memberi kado secara cashless</p>
        <div data-aos="zoom-out" data-aos-duration="1500" class="card text-center mt-3" style="width: 18rem">
          <div class="card-body">
            <img src="{{asset('assets/img/Cashless/logo-bsi.png')}}" class="card-img-top img-fluid" alt="BCA" style="height: 50%; width: 50%" />
            <p class="card-text lh-base">
              a/n Akhmadi Widya Wicaksono <br />
              <span class="norek1">7203347377</span>
            </p>
            <a id="paste1" class="btn btn-success btn-sm my-3">Salin</a>
          </div>
        </div>
        <hr width="50%" color="white" size="4%" />
      </div>
    </section>

    <section class="ucapan container-wide">
      <div class="center-100">
        <p class="text-center m-3" style="font-size: 12px">
          "Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang. Sesungguhnya
          pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir."
        </p>
        <h1 class="mb-4" style="font-size: 16px">- QS. Ar Rum Ayat 21 -</h1>
        <h2 class="my-2" style="font-size: 35px">Doa & Ucapan</h2>
        <div>
          <div class="mb-3">
            <input type="text" id="nama" class="form-control" placeholder="Nama" />
            <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-nama"></div>
          </div>
          <div class="mb-3">
            <textarea class="form-control" id="ucapan" rows="3" placeholder="Ketik Ucapan & Doa"></textarea>
            <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-ucapan"></div>
          </div>
          <div class="mb-3">
            <select id="kehadiran" class="form-select" aria-label="Default select example">
              <option value="">Konfirmasi Kehadiran</option>
              <option value="Hadir">Hadir</option>
              <option value="Tidak Hadir">Tidak Hadir</option>
            </select>
            <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-kehadiran"></div>
          </div>
          <button id="submit" class="btn btn-outline-secondary btn-sm rounded-2 d-flex m-auto">Kirim</button>
        </div>


            <div id="list-ucapan" style="height: 400px; width: 70%" class="overflow-y-scroll mt-4">
                <div style="text-align: justify; text-justify: inter-word">
                    @foreach ($ucapan as $item)

                    <div class="mb-3 mx-1">
                        <h1 class="fw-bold my-2" style="font-size: 12px">{{$item->nama}}<span class="bg-secondary text-white rounded-2 mx-1 p-1" style="font-size: 0.6rem">{{ $item->kehadiran }}</span></h1>

                        <h4 class="my-1" style="font-size: 0.8rem">{{$item->created_at}}</h4>
                        <h1 class="fw-bold my-1 lh-sm" style="font-size: 12px">
                            {{$item->ucapan}}
                        </h1>
                    </div>

                    @endforeach
                </div>
            </div>

      </div>
      <br>
    </section>

    <section class="penutup container-wide">
      <div class="center-65">
        <img src="{{asset('assets/img/bunga/Bunga (4).png')}}" alt="Bunga" />
        <div class="text-white text-center">
          <p class="my-4 mx-4 mb-3" style="font-size: 11px">Merupakan kehormatan dan kebahagiaan bagi kami, Apabila Bapak/Ibu/Saudara/i berkenan hadir untuk memberikan doa restu kepada kedua mempelai</p>
          <h2 class="mb-3" style="font-size: 12px">Kami Yang berbahagia</h2>
        </div>
        <h2 class="my-2 text-white" style="font-size: 2.2rem">Ningrum <span style="font-family: 'Allura', cursive; font-size: 16px">and</span> Didi</h2>
        <br />
        <span style="margin-bottom: 65px"></span>
        <h4 class="text-white my-1" style="font-size: 9px">Made by:</h4>
        <h1 class="text-white animate__animated animate__heartBeat animate__infinite" style="letter-spacing: 10px">WeMate</h1>
      </div>
    </section>

    {{-- Jquary Ajax --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    {{-- Sweet Alert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- Swipper.js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
    <!-- Salin -->
    <script>
      $('#paste1').click(function () {
        var temp = $('<input>');
        $('body').append(temp);
        temp.val($('.norek1').text()).select();
        document.execCommand('copy');
        temp.remove();
        $('#paste1').text('Tersalin').css('color', 'white');
        $('#paste2').text('Salin').css('color', 'white');
      });
      $('#paste2').click(function () {
        var temp = $('<input>');
        $('body').append(temp);
        temp.val($('.norek2').text()).select();
        document.execCommand('copy');
        temp.remove();
        $('#paste2').text('Tersalin').css('color', 'white');
        $('#paste1').text('Salin').css('color', 'white');
      });
    </script>

    <!-- Count Down -->
    <script>
      // Set the date we're counting down to
      var countDownDate = new Date('May 12, 2023 20:00:00').getTime();

      // Update the count down every 1 second
      var x = setInterval(function () {
        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById('days').innerHTML = days;
        document.getElementById('hours').innerHTML = hours;
        document.getElementById('minutes').innerHTML = minutes;
        document.getElementById('seconds').innerHTML = seconds;

        // If the count down is over, write some text
        // if (distance < 0) {
        //   clearInterval(x);
        //   document.getElementById("demo").innerHTML = "EXPIRED";
        // }
      }, 1000);
    </script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init({
        disable: false,
        once: true,
        easing: 'ease-in-out',
      });
    </script>

<script>
    $('#mp3').click(function(e) {
        var mySpin = $('#mySpin');
        if (mySpin.hasClass('spin')) {
            mySpin.removeClass('spin');
        } else {
            mySpin.addClass('spin');
        }
    });

    $('#nama').keyup(function(e) {
        $('#alert-nama').removeClass('d-block');
        $('#alert-nama').addClass('d-none');
    });
    $('#ucapan').keyup(function(e) {
        $('#alert-ucapan').removeClass('d-block');
        $('#alert-ucapan').addClass('d-none');
    });

    $('#kehadiran').click(function() {
        $('#alert-kehadiran').removeClass('d-block');
        $('#alert-kehadiran').addClass('d-none');
    });

    //action create post
    $('#submit').click(function(e) {
        e.preventDefault();

        //define variable
        let nama = $('#nama').val();
        let ucapan = $('#ucapan').val();
        let kehadiran = $('#kehadiran').val();
        let token = $("meta[name='csrf-token']").attr("content");

        //ajax

        $.ajax({
            url: `/ucapan`,
            type: "POST",
            cache: false,
            data: {
                "nama": nama,
                "ucapan": ucapan,
                "kehadiran": kehadiran,
                "_token": token
            },
            success: function(response) {

                //show success message
                Swal.fire({
                    type: 'success',
                    icon: 'success',
                    title: `${response.message}`,
                    showConfirmButton: false,
                    timer: 3000
                });

                //data post
                let post = `
                    <div class="mb-3 mx-1">
                        <h1 class="fw-bold my-2" style="font-size: 12px">${response.data.nama}<span class="bg-secondary text-white rounded-2 mx-1 p-1" style="font-size: 0.6rem">${response.data.kehadiran}</span></h1>

                        <h4 class="my-1" style="font-size: 0.8rem">${response.data.created_at}</h4>
                        <h1 class="fw-bold my-1 lh-sm" style="font-size: 12px">
                            ${response.data.ucapan}
                        </h1>
                    </div>
                `;

                //append to table
                $('#list-ucapan').append(post);

                //clear form
                $('#nama').val('');
                $('#ucapan').val('');
                $('#kehadiran').val('');


            },
            error: function(error) {
                if (error.responseJSON.nama[0]) {
                    console.log(error.responseJSON.nama[0]);

                    //show alert
                    $('#alert-nama').removeClass('d-none');
                    $('#alert-nama').addClass('d-block');

                    //add message to alert
                    $('#alert-nama').html(error.responseJSON.nama[0]);
                }



                if (error.responseJSON.ucapan[0]) {
                    console.log(error.responseJSON.ucapan[0]);

                    //show alert
                    $('#alert-ucapan').removeClass('d-none');
                    $('#alert-ucapan').addClass('d-block');

                    //add message to alert
                    $('#alert-ucapan').html(error.responseJSON.ucapan[0]);
                }
                if (error.responseJSON.kehadiran[0]) {
                    console.log(error.responseJSON.kehadiran[0]);

                    //show alert
                    $('#alert-kehadiran').removeClass('d-none');
                    $('#alert-kehadiran').addClass('d-block');

                    //add message to alert
                    $('#alert-kehadiran').html(error.responseJSON.kehadiran[0]);
                }
            }

        });

    });
</script>
  </body>
</html>
