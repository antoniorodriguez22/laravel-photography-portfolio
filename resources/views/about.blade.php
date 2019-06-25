@extends('layout')

@section('title', 'Acerca De Mi')


@section('content')
        {{-- <div class='text-center ' --}}
        <div class='row'>
          <div class='col text-center text-white pt-3 mt-5'>
            <h1 id='about' class='w3-container w3-animate-top'> Acerca De Mi</h1>
          </div>
        </div>


        <div class='row '>

          <div class='col-md-6 col-lg-6 col-xl-6 mt-2 py-5  text-white text-justify'>
            <div  class='w3-container'>
              <p  data-aos="zoom-in-left" data-aos-duration="500" id='p1' class=''>Mi nombre es Keyler Ruiz, fotógrafo profesional y productor de vídeos en crecimiento viviendo en Margarita, Venezuela. </p>
              <p  data-aos="zoom-in-left" data-aos-duration="500" id='p2' class="">La fotografía para mi comenzó como un hobby, haciéndole fotos a amigos mientras patinábamos, desde ese momento me enganchó; y luego de estudiarla, más que mi profesión se convirtió en mi pasión.</p>
          </div>
        </div>


        <div  class='col-md-6 col-lg-6 col-xl-6 py-3  text-white text-center '>

          <img  data-aos="zoom-in-right" data-aos-duration="500" src="{{URL::asset('img/Keyler.jpg')}}" alt="Pic" class='img img-responsive img-fluid w3-container' id='keylerpic1'  >
        </div>

      </div>


      <div class='row '>

        <div  class='col-md-6 col-lg-6 col-xl-6 py-3  text-white text-center'>

          <img  data-aos="zoom-in-left" data-aos-duration="500" src="{{URL::asset('img/Keyler2.jpg')}}" alt="Pic" class='img img-responsive img-fluid w3-container' id='keylerpic2'  >
      </div>

        <div class='col-md-6 col-lg-6 col-xl-6 mt-2 py-5  text-white text-justify'>

          <p  data-aos="zoom-in-left" data-aos-duration="500" id='p3' class='w3-container'>Hoy en día, me gusta fotografiar modelos principalmente; la moda me atrapó en un 100%, me inspira el estilo de la calle pero también un lado más sublime, más artístico, trato de plasmarlo en mis trabajos, hacer mi propio estilo a base de ángulos, temas y colores y hacer mi sello fotográfico, que al verlo, inmediatamente la gente sepa que es mío ese trabajo y me distinga del resto. </p>
        </div>
    </div>
  </div>
@endsection
