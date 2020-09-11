@extends('layout.main')

@section('title','Index | Wisata Bahari Lamongan')

@section('slider')
<div id="carousel-Id" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-Id" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-Id" data-slide-to="1"></li>
    <li data-target="#carousel-Id" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active carousel-1 ">
      <div class="container">
      	<div class="carousel-content">
		 	<h1 class="text-light text-center luna slider-title">Bajak laut</h1>
		</div>
      </div>
    </div>
    <div class="carousel-item carousel-2 ">
      <div class="container">
      	<div class="carousel-content">
		 	<h1 class="text-light text-center luna slider-title">Jet Coaster</h1>
		</div>
      </div>
    </div>
    <div class="carousel-item carousel-3 ">
      <div class="container">
      	<div class="carousel-content">
		 	<h1 class="text-light text-center luna slider-title">Banana Boat</h1>
		</div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carousel-Id" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-Id" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@endsection

@section('search')
<div class="container-fluid ">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="form-group bg-light shadow px-3 rounded-pill search-box">
        <div class="input-group ">
          <input type="text" name="key" id="key-search" placeholder="Cari sesuatu" class="form-control input-search-desktop border-0 p-3" placeholder="" aria-describedby="helpId">
          <div class="input-group-append border-0">
            <span class="input-group-text border-0 bg-white icon-search-desktop"><i class="fas fa-search mr-3 text-secondary"></i></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('container')
    <div class="container ">
      <div class="row new-section wahana-section">
        <div class="col-md-12">
          <div class="col-6 offset-3 text-center">
            <h1 class="poppins font-weight-bold">Wahana</h1>
            <p class="montserrats section-text text-secondary ">Wahana Populer yang ada di wisata Bahari Lamongan</p>
          </div>
        </div>
        <div class="col-md-12 mt-5 ">
          <div class="row">
            <div class="col-md-4 col-6 mb-5 list-destination"> 
              <div class="card-destination card ">
                  <div class="thumb">
                      <img src="{{url('img/3D art.png')}}" alt="" class="img-destination w-100">
                      <span class="price">Rp 20.000</span>
                  </div>
                  <div class="place_info col-12 bg-light py-4 px-3">
                      <a href="#" class="text-decoration-none">
                        <h3 class="poppins font-weight-bold place-name">3D Art</h3>
                      </a>
                     
                      <div class="rating_destination d-flex justify-content-between">
                          <span class="d-flex justify-content-center align-items-center">
                               <i class="fa fa-star text-warning"></i> 
                               <i class="fa fa-star text-warning"></i> 
                               <i class="fa fa-star text-warning"></i> 
                               <i class="fa fa-star text-dark"></i> 
                               <i class="fa fa-star text-dark"></i>
                               <span class=" montserrats">(20 Review)</span>
                          </span>
                          <div class="days">
                              <i class="far fa-clock time-destination"></i>
                              <span>07:00-19:00 WITA</span>
                          </div>
                      </div>
                  </div>
              </div> 
            </div>
            <div class="col-md-4 col-6 mb-5 list-destination"> 
              <div class="card-destination card ">
                  <div class="thumb">
                      <img src="{{url('img/bajak-laut.jpg')}}" alt="" class="img-destination w-100">
                      <span class="price">Rp 8.000</span>
                  </div>
                  <div class="place_info col-12 bg-light py-4 px-3">
                      <a href="#" class="text-decoration-none">
                        <h3 class="poppins font-weight-bold place-name">Rumah Bajak Laut</h3>
                      </a>
                      <div class="rating_destination d-flex justify-content-between">
                          <span class="d-flex justify-content-center align-items-center">
                               <i class="fa fa-star text-warning"></i> 
                               <i class="fa fa-star text-warning"></i> 
                               <i class="fa fa-star text-warning"></i> 
                               <i class="fa fa-star text-dark"></i> 
                               <i class="fa fa-star text-dark"></i>
                               <span class=" montserrats">(20 Review)</span>
                          </span>
                          <div class="days">
                              <i class="far fa-clock time-destination"></i>
                              <span>08:00-17:00 WITA</span>
                          </div>
                      </div>
                  </div>
              </div> 
            </div>
            <div class="col-md-4 col-6 mb-5 list-destination"> 
              <div class="card-destination card ">
                  <div class="thumb">
                      <img src="{{url('img/jet-coaster.png')}}" alt="" class="img-destination w-100">
                      <span class="price">30.000</span>
                  </div>
                  <div class="place_info col-12 bg-light py-4 px-3">
                      <a href="#" class="text-decoration-none">
                        <h3 class="poppins font-weight-bold place-name">Jet Coaster</h3>
                      </a>
                      <div class="rating_destination d-flex justify-content-between">
                          <span class="d-flex justify-content-center align-items-center">
                               <i class="fa fa-star text-warning"></i> 
                               <i class="fa fa-star text-warning"></i> 
                               <i class="fa fa-star text-warning"></i> 
                               <i class="fa fa-star text-dark"></i> 
                               <i class="fa fa-star text-dark"></i>
                               <span class=" montserrats">(20 Review)</span>
                          </span>
                          <div class="days">
                              <i class="far fa-clock time-destination"></i>
                              <span>08:00-17:00 WITA</span>
                          </div>
                      </div>
                  </div>
              </div> 
            </div>
            <div class="col-md-4 col-6 mb-5 list-destination"> 
              <div class="card-destination card ">
                  <div class="thumb">
                      <img src="{{url('img/balok-apung.png')}}" alt="" class="img-destination w-100">
                      <span class="price">Rp 15.000</span>
                  </div>
                  <div class="place_info col-12 bg-light py-4 px-3">
                      <a href="#" class="text-decoration-none">
                        <h3 class="poppins font-weight-bold place-name">Balok Apung</h3>
                      </a>
                      <div class="rating_destination d-flex justify-content-between">
                          <span class="d-flex justify-content-center align-items-center">
                               <i class="fa fa-star text-warning"></i> 
                               <i class="fa fa-star text-warning"></i> 
                               <i class="fa fa-star text-warning"></i> 
                               <i class="fa fa-star text-dark"></i> 
                               <i class="fa fa-star text-dark"></i>
                               <span class=" montserrats">(20 Review)</span>
                          </span>
                          <div class="days">
                              <i class="far fa-clock time-destination"></i>
                              <span>08:00-17:00 WITA</span>
                          </div>
                      </div>
                  </div>
              </div> 
            </div>
            <div class="col-md-4 col-6 mb-5 list-destination"> 
              <div class="card-destination card ">
                  <div class="thumb">
                      <img src="{{url('img/banana-boat.jpg')}}" alt="" class="img-destination w-100">
                      <span class="price">Free</span>
                  </div>
                  <div class="place_info col-12 bg-light py-4 px-3">
                      <a href="#" class="text-decoration-none">
                        <h3 class="poppins font-weight-bold place-name">Banana Boat</h3>
                      </a>
                      <div class="rating_destination d-flex justify-content-between">
                          <span class="d-flex justify-content-center align-items-center">
                               <i class="fa fa-star text-warning"></i> 
                               <i class="fa fa-star text-warning"></i> 
                               <i class="fa fa-star text-warning"></i> 
                               <i class="fa fa-star text-dark"></i> 
                               <i class="fa fa-star text-dark"></i>
                               <span class=" montserrats">(20 Review)</span>
                          </span>
                          <div class="days">
                              <i class="far fa-clock time-destination"></i>
                              <span>24 hours</span>
                          </div>
                      </div>
                  </div>
              </div> 
            </div>
            <div class="col-md-4 col-6 mb-5 list-destination"> 
              <div class="card-destination card ">
                  <div class="thumb">
                      <img src="{{url('img/kolam-renang.jpg')}}" alt="" class="img-destination w-100">
                      <span class="price">Rp 30.000</span>
                  </div>
                  <div class="place_info col-12 bg-light py-4 px-3">
                      <a href="#" class="text-decoration-none">
                        <h3 class="poppins font-weight-bold place-name">Swimming pool</h3>
                      </a>
                      <div class="rating_destination d-flex justify-content-between">
                          <span class="d-flex justify-content-center align-items-center">
                               <i class="fa fa-star text-warning"></i> 
                               <i class="fa fa-star text-warning"></i> 
                               <i class="fa fa-star text-warning"></i> 
                               <i class="fa fa-star text-dark"></i> 
                               <i class="fa fa-star text-dark"></i>
                               <span class=" montserrats">(20 Review)</span>
                          </span>
                          <div class="days">
                              <i class="far fa-clock time-destination"></i>
                              <span>08:00-18:00 WITA</span>
                          </div>
                      </div>
                  </div>
              </div> 
            </div>
          </div>  
        </div>
      </div>
    </div>
    <div class="newslatter pt-5 container-fluid new-section">
      <div class="container ">
        <div class="row" >
          <div class="col-md-5 col-12 mt-4">
            <h3 class="poppins m3-5 font-weight-bold text-light">Subscribe Our Newsletter</h3>
            <p class="t-18px montserrats text-secondary">Subscribe newsletter to get offers and about new places to discover.</p>
          </div>
          <div class="col-md-6 offset-1 py-5 "> 
            <form>
              <div class="row">
                <div class="col-md-12  d-flex form-group">
                  <input type="email" name="" class="form-control form-control-lg" placeholder="Your Email">
                  <button type="submit" class="ml-3 px-5 btn btn-primary shadow-primary "><i class="fas fa-2x fa-paper-plane"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="container new-section">
     <div class="row">
       <div class="col-md-7 mb-4" style="left: -150px;">
          <div id="carousel-img" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel-img" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-img" data-slide-to="1"></li>
              <li data-target="#carousel-img" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner rounded" role="listbox">
              <div class="carousel-item active">
                <img src="{{url('img/soto_lamongan.png')}}" class="img-hotels w-100">
              </div>
              <div class="carousel-item">
                <img src="{{url('img/wingko_babat_LMG.png')}}" class="img-hotels w-100">
              </div>
              <div class="carousel-item">
                <img src="{{url('img/tahu_campur.png')}}" class="img-hotels w-100">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-img" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-img" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
       </div>
       <div class="col-md-5">
         <h1 class="poppins font-weight-bold">Kuliner</h1>
         <div class="row mt-5">
            <div class="col-md-6 mb-5 col-6 "> 
              <div class="card card-hotel w-100">
                <div class="thumb-hotel">
                  <img class="card-img-top hotels-img" src="{{url('img/tahu_campur.png')}}" alt="Card image cap">
                  <span class="hotel-price montserrats">Rp.25.000</span>
                </div>
                <div class="card-body  ">
                  <h6 class="font-weight-bold poppins t-16px name-hotel">Tahu Campur</h6>
                  <div class="d-inline">
                     <i class="fa fa-star text-warning"></i> 
                     <i class="fa fa-star text-warning"></i> 
                     <i class="fa fa-star text-warning"></i> 
                     <i class="fa fa-star text-dark"></i> 
                     <i class="fa fa-star text-dark"></i>
                  </div>
                </div>
              </div> 
            </div>
            <div class="col-md-6 mb-5 col-6 "> 
              <div class="card card-hotel w-100">
                <div class="thumb-hotel">
                  <img class="card-img-top hotels-img" src="{{url('img/wingko_babat_LMG.png')}}" alt="Card image cap">
                  <span class="hotel-price montserrats">RP.10.000</span>
                </div>
                <div class="card-body  ">
                  <h6 class="font-weight-bold poppins t-16px name-hotel">Wingko babat</h6>
                  <div class="d-inline">
                     <i class="fa fa-star text-warning"></i> 
                     <i class="fa fa-star text-warning"></i> 
                     <i class="fa fa-star text-warning"></i> 
                     <i class="fa fa-star text-dark"></i> 
                     <i class="fa fa-star text-dark"></i>
                  </div>
                </div>
              </div> 
            </div>
            <div class="col-md-6 mb-5 col-6 "> 
              <div class="card card-hotel w-100">
                <div class="thumb-hotel">
                  <img class="card-img-top hotels-img" src="{{url('img/jumbrek.png')}}" alt="Card image cap">
                  <span class="hotel-price montserrats">Rp.10.000</span>
                </div>
                <div class="card-body  ">
                  <h6 class="font-weight-bold poppins t-16px name-hotel">Jumbrek </h6>
                  <div class="d-inline">
                     <i class="fa fa-star text-warning"></i> 
                     <i class="fa fa-star text-warning"></i> 
                     <i class="fa fa-star text-warning"></i> 
                     <i class="fa fa-star text-dark"></i> 
                     <i class="fa fa-star text-dark"></i>
                  </div>
                </div>
              </div> 
            </div>
            <div class="col-md-6 mb-5 col-6 "> 
              <div class="card card-hotel w-100">
                <div class="thumb-hotel">
                  <img class="card-img-top hotels-img" src="{{url('img/soto_lamongan.png')}}" alt="Card image cap">
                  <span class="hotel-price montserrats">Rp.20.000</span>
                </div>
                <div class="card-body  ">
                  <h6 class="font-weight-bold poppins t-16px name-hotel">Soto Lamongan</h6>
                  <div class="d-inline">
                     <i class="fa fa-star text-warning"></i> 
                     <i class="fa fa-star text-warning"></i> 
                     <i class="fa fa-star text-warning"></i> 
                     <i class="fa fa-star text-dark"></i> 
                     <i class="fa fa-star text-dark"></i>
                  </div>
                </div>
              </div> 
            </div>
          </div>  
       </div>
     </div>
    </div>
<script type="text/javascript">
  $('.home').addClass('nav-active');
  $(window).scroll(function(){
    var wScroll = $(this).scrollTop();
    // console.log(wScroll);
    
    if (wScroll > 200) {
      $('.carousel-content').css({
        'transform' :'translateX(-1000px)'
      })
    }else{
      $('.carousel-content').css({
        'transform' :'translateX(0px)'
      })
    }
    // navbar
    if(wScroll > 10){
      $('nav').css({
        'padding' : '10px',
        'box-shadow': '5px 0px 10px'
      });
      $('nav').addClass('bg-dark d-block');
      $('nav').addClass('nav-show')
    }else{
      $('nav').css({
        'padding':'15px',
        'box-shadow' :'none'
      });
      $('nav').removeClass('bg-dark');
    }
    // card-destination
    if (wScroll > $('.wahana-section').offset().top - 150) {
      $('.list-destination').each(function(i){
        setTimeout(function(){
          $('.list-destination').eq(i).addClass('show-destination');
        },300 * (1+i));
      });
    }else{
      $('.list-destination').removeClass('show-destination');
    }

  });

</script>
@endsection

