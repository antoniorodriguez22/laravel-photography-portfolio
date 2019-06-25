@extends('layout')

@section('title', 'Portfolio')


@section('content')

<div class='container-fluid py-5 mt-5 text-center'>
{{-- <div class=row>
</div> --}}

  <div class='row'>

      <div  class='col-md-4 col-lg-4 col-xl-4 py-3  text-white text-center'>
          <img  data-aos="zoom-in-left" data-aos-duration="500" src="{{URL::asset('img/1.jpg')}}" alt="Pic" class=' img img-responsive img-fluid w3-container' height=600 width=450 id='pic1'>
      </div>

      <div  class='col-md-4 col-lg-4 col-xl-4 py-3 text-white text-center'>
        <img  data-aos="zoom-out" data-aos-duration="500" src="{{URL::asset('img/2.jpg')}}" alt="Pic" class=' img img-responsive w3-container  img-fluid' height=600 width=450 id='pic2'>
      </div>

      <div  class='col-md-4 col-lg-4 col-xl-4 py-3 text-white text-center'>
        <img  data-aos="zoom-in-right" data-aos-duration="500" src="{{URL::asset('img/3.jpg')}}" alt="Pic" class=' img img-responsive w3-container  img-fluid' height=600 width=450 id='pic3'>
      </div>

  </div>

<div class='row'>

  <div  class='col-md-4 col-lg-4 col-xl-4 py-3 0 text-white text-center'>
    <img  data-aos="zoom-in-left" data-aos-duration="500" src="{{URL::asset('img/4.jpg')}}" alt="Pic" class=' img img-responsive w3-container  img-fluid' height=600 width=450 id='pic4'>
  </div>

    <div  class='col-md-4 col-lg-4 col-xl-4 py-3  text-white text-center'>
      <img  data-aos="zoom-out" data-aos-duration="500" src="{{URL::asset('img/6.jpg')}}" alt="Pic" class=' img img-responsive w3-container  img-fluid' height=600 width=450 id='pic6'>
    </div>

    <div  class='col-md-4 col-lg-4 col-xl-4 py-3 text-white text-center'>
      <img  data-aos="zoom-in-right" data-aos-duration="500" src="{{URL::asset('img/7.jpg')}}" alt="Pic" class=' img img-responsive w3-container  img-fluid' height=600 width=450 id='pic7'>
    </div>

</div>

<div class='row'>

  <div  class='col-md-4 col-lg-4 col-xl-4 py-3  text-white text-center'>
    <img  data-aos="zoom-in-left" data-aos-duration="500" src="{{URL::asset('img/8.jpg')}}" alt="Pic" class=' img img-responsive w3-container  img-fluid' height=600 width=450 id='pic8'>
  </div>

  <div  class='col-md-4 col-lg-4 col-xl-4 py-3  text-white text-center'>
    <img  data-aos="zoom-out" data-aos-duration="500" src="{{URL::asset('img/9.jpg')}}" alt="Pic" class=' img img-responsive w3-container  img-fluid' height=600 width=450 id='pic9'>
  </div>

  <div  class='col-md-4 col-lg-4 col-xl-4 py-3  text-white text-center'>
    <img  data-aos="zoom-in-right" data-aos-duration="500" src="{{URL::asset('img/10.jpg')}}" alt="Pic" class=' img img-responsive w3-container  img-fluid' height=600 width=450 id='pic10'>
  </div>

</div>

<div class='row'>

  <div  class='col-md-4 col-lg-4 col-xl-4 py-3  text-white text-center'>
    <img  data-aos="zoom-in-left" data-aos-duration="500" src="{{URL::asset('img/11.jpg')}}" alt="Pic" class=' img img-responsive w3-container  img-fluid' height=600 width=450 id='pic11'>
  </div>

  <div  class='col-md-4 col-lg-4 col-xl-4 py-3  text-white text-center'>
    <img  data-aos="zoom-out" data-aos-duration="500" src="{{URL::asset('img/13.jpg')}}" alt="Pic" class=' img img-responsive w3-container  img-fluid' height=600 width=450 id='pic13'>
  </div>

  <div  class='col-md-4 col-lg-4 col-xl-4 py-3  text-white text-center'>
    <img  data-aos="zoom-in-right" data-aos-duration="500" src="{{URL::asset('img/14.jpg')}}" alt="Pic" class='img img-responsive w3-container  img-fluid' height=600 width=450 id='pic14'>
  </div>

</div>
<div class='row'>

  <div  class='col-md-4 col-lg-4 col-xl-4 py-3  text-white text-center'>
    <img  data-aos="zoom-in-left" data-aos-duration="500"src="{{URL::asset('img/15.jpg')}}" alt="Pic" class=' img img-responsive w3-container  img-fluid' height=600 width=450 id='pic15'>
  </div>

  <div  class='col-md-4 col-lg-4 col-xl-4 py-3  text-white text-center'>
    <img data-aos="zoom-out" data-aos-duration="500" src="{{URL::asset('img/16.jpg')}}" alt="Pic" class=' img img-responsive w3-container  img-fluid' height=600 width=450 id='pic16'>
  </div>

   <div  class='col-md-4 col-lg-4 col-xl-4 py-3  text-white text-center'>
    <img data-aos="zoom-in-right" data-aos-duration="500" src="{{URL::asset('img/19.jpg')}}" alt="Pic" class=' img img-responsive w3-container  img-fluid' height=600 width=450 id='pic19'>
  </div>

</div>

<div class='row'>

  <div  class='col-md-4 col-lg-4 col-xl-4 py-3 text-white text-center'>
    <img  data-aos="zoom-in-left" data-aos-duration="500" src="{{URL::asset('img/20.jpg')}}" alt="Pic" class=' img img-responsive w3-container  img-fluid' height=600 width=450 id='pic21'>
  </div>

  <div  class='col-md-4 col-lg-4 col-xl-4 py-3  text-white text-center'>
    <img  data-aos="zoom-out" data-aos-duration="500" src="{{URL::asset('img/21.jpg')}}" alt="Pic" class=' img img-responsive w3-container  img-fluid' height=600 width=450 id='pic22'>
  </div>

  <div  class='col-md-4 col-lg-4 col-xl-4 py-3   text-center'>
    <img  data-aos="zoom-in-right" data-aos-duration="500" src="{{URL::asset('img/22.jpg')}}" alt="Pic" class=' img img-responsive w3-container  img-fluid' height=600 width=450 id='pic22'>
  </div>

</div>




</div>

@endsection
