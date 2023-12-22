@extends('layouts.give')

@section('content')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GBI NLC</title>
    @vite(['resources/css/app.css','resources/js/app.js', 'resources/css/navbar.css'])
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
  <div style="margin-top: 72px;"></div>
      <section>
          <div class="align-middle my-[72px] items-center justify-end tablet:flex bg-[#313131] font-semibold">
              <div id="page1" class="tablet:bg-brand ml-0 cursor-pointer px-5 py-2 text-center text-xs uppercase text-white tablet:ml-5 desktop:text-sm" onclick="showContent('page1')">Persepuluhan</div>
              <div id="page2" class="ml-0 cursor-pointer px-5 py-2 text-center text-xs uppercase text-white tablet:ml-5 desktop:text-sm" onclick="showContent('page2')">Pembangunan</div>
          </div>
      </section>
      
  <div class="container">
      <section id="page1-content" class="px-5">
        <div class="px-3 mb-20 md:mx-20">
          <div class="box box1" style="margin-bottom: 2rem;">
            <h1 class="text-4xl my-4">BCA <b>0353 121 453</b></h1>
          </div>
          <p class="p text-3xl mb-2">Transfer melalui Rekening BCA a/n GBI NEW LIFE COMMUNITY</p> <p style="color: white; text-align:justify;">
          Hai saudara-saudari yang dikasihi dalam Tuhan, Kita senantiasa bersyukur atas kasih dan berkat Tuhan yang melimpah kepada kita. Saat ini, kami ingin mengajak Anda untuk bersama-sama berpartisipasi dalam mendukung karya ibadah gereja melalui persembahan sukarela. Sebagai keluarga iman, kita memiliki tanggung jawab bersama untuk menjaga keberlanjutan dan keberlanjutan misi gereja. Persembahan yang kita berikan tidak hanya untuk memelihara tempat ibadah kita, tetapi juga untuk mendukung pelayanan dan proyek sosial yang melibatkan komunitas kita. Dengan sukacita dan niat tulus, mari kita berikan persembahan kita sebagai tanda syukur kita kepada Tuhan. Setiap donasi, sekecil apapun, memiliki dampak yang besar dalam membangun dan menguatkan gereja kita. Anda dapat memberikan persembahan melalui sarana yang telah disediakan di gereja atau melalui transfer bank dengan mencantumkan keterangan "Persembahan Persepuluhan" pada kolom berita. Terima kasih atas kepedulian dan dukungan Anda. Semoga Tuhan memberkati setiap tindakan baik yang kita lakukan untuk kemuliaan-Nya.</p>
        </div>
      </section>

      <section id="page2-content" class="px-5">
        <div class="px-3 mb-20 md:mx-20">
          <div class="box box2" style="margin-bottom: 2rem;">
            <h1 class="text-4xl my-4">BCA <b>0353 121 496</b></h1>
          </div>
          <p class="pq text-3xl mb-2">Transfer melalui Rekening BCA a/n GBI NEW LIFE COMMUNITY</p><p style="color: white; text-align:justify;">
          Hai saudara-saudari yang terkasih dalam Tuhan, Dengan sukacita, kami ingin mengajak Anda untuk menjadi bagian dari proyek pembangunan gereja kita yang bertujuan untuk memperkuat dan memperluas tempat ibadah kita. Sebagai komunitas iman, kita memiliki visi bersama untuk menciptakan tempat yang nyaman dan ramah bagi setiap jiwa yang mencari Tuhan. Pembangunan gereja bukan hanya tentang bahan bangunan, tetapi juga tentang membangun fondasi iman kita. Setiap sumbangan yang Anda berikan akan membantu mewujudkan impian kita untuk memiliki ruang ibadah yang memadai, ruang pertemuan komunitas, serta fasilitas yang mendukung pelayanan dan kegiatan sosial. Mari kita bersama-sama membangun rumah Tuhan dengan hati sukarela dan sukacita. Setiap donasi, sekecil apapun, akan menjadi batu bata yang membangun masa depan gereja kita. Anda dapat menyumbangkan dana untuk pembangunan gereja melalui sarana yang telah disediakan di gereja atau dengan melakukan transfer bank dengan mencantumkan keterangan "Donasi Pembangunan Gereja" pada kolom berita. Terima kasih atas partisipasi dan dukungan Anda. Semoga Tuhan memberkati setiap langkah kita dalam merespon panggilan-Nya untuk membangun dan memuliakan nama-Nya.</p>
        </div>      
      </section>
  </div>
  <!-- partial -->
  <script>
          // Hide Instagram and Schedule content initially
          document.getElementById('page2-content').style.display = 'none';

          function showContent(contentType) {
              document.getElementById('page1-content').style.display = 'none';
              document.getElementById('page2-content').style.display = 'none';

              document.getElementById('page1').classList.remove('tablet:bg-brand');
              document.getElementById('page2').classList.remove('tablet:bg-brand');

              document.getElementById(`${contentType}-content`).style.display = 'block';

              document.getElementById(contentType).classList.add('tablet:bg-brand');
          }
      </script>
  </main>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
@endsection