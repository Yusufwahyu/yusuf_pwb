@extends('layout.main')

@section('title','Hotels | Wisata Bali')

@section('slider')
<div class="jumbotron align-items-center d-flex">
	<div class="col-4 offset-4 text-center banner-title"> 
		<h1 class="luna font-weight-bold text-light slider-title">Kuliner</h1>
	</div>
</div>
@endsection

@section('container')

<div class="container position-relative" >
	<div class="row position-relative">
		<div class="col-md-4 p-2 mb-5 pb-3" style="top: -100px;">
	        <div class="w-100 bg-white form-search p-4 pb-5 position-relative">
	          <h4 class="poppins font-weight-bold mb-1">Search Box</h4>
	          <p class="montserrat" style="font-size: .85rem;">Search the hotel in Bali </p>
	          <div class="row ">
	            <div class="col-12">
	               <div class="form-group">
	                  <input type="text" name="key" id="key" class="form-control" placeholder="Hotel Name">
	               </div>
	            </div> 
	            <div class="col-12">
	              <label>Range Price</label>
	            </div>
	            <div class="col-6">
	              <div class="form-group">
	                <input type="text" class="form-control" name="tglm" value="" placeholder="Rp.">
	              </div>
	            </div>
	            <div class="col-6">
	              <div class="form-group">
	                <input type="text" class="form-control" name="tglm" value="" placeholder="Rp.">
	              </div>
	            </div>
	          </div>
	          <div class="position-absolute text-center" id="button-submit-search">
	            <button class="btn btn-primary shadow-primary rounded-pill px-5 py-2 montserrat"><i
	                class="fas fa-search"></i> Search</button>
	          </div>
	        </div>
	    </div>
	    <div class="col-md-8 pl-3">
	    	<div class="row">
	    		<div class="col-md-6 mb-5 "> 
	              	<div class="card-destination card ">
	                  	<div class="thumb">
	                      	<img src="{{url('img/tahu_campur.png')}}" alt="" class="img-destination w-100">
	                      	<span class="price montserrats">Rp.25.000</span>
	                  	</div>
	                  <div class="place_info col-12 bg-light py-4 px-3">
	                      <a href="#" class="text-decoration-none">
	                        <h3 class="poppins font-weight-bold place-name mb-0">Tahu Campur</h3>
	                      </a>
	                      <div class="rating_destination d-block justify-content-between">
	                          <span class="d-flex mb-2 align-items-center">
	                               <i class="fa fa-star text-warning"></i> 
	                               <i class="fa fa-star text-warning"></i> 
	                               <i class="fa fa-star text-warning"></i> 
	                               <i class="fa fa-star text-warning"></i> 
	                               <i class="fa fa-star text-dark"></i>
	                          </span>
	                      </div>
	                  </div>
	              </div> 
            	</div>
	            <div class="col-md-6 mb-5 "> 
	              <div class="card-destination card ">
	                  <div class="thumb">
	                      <img src="{{url('img/wingko_babat_LMG.png')}}" alt="" class="img-destination w-100">
	                      <span class="price montserrats">Rp.10.000</span>
	                  </div>
	                  <div class="place_info col-12 bg-light py-4 px-3">
	                      <a href="#" class="text-decoration-none">
	                        <h3 class="poppins font-weight-bold place-name">Wingko Babat</h3>
	                      </a>
	                      <div class="rating_destination d-block justify-content-between">
	                          <span class="d-flex mb-2 align-items-center">
	                               <i class="fa fa-star text-warning"></i> 
	                               <i class="fa fa-star text-warning"></i> 
	                               <i class="fa fa-star text-warning"></i> 
	                               <i class="fa fa-star text-dark"></i> 
	                               <i class="fa fa-star text-dark"></i>
	                          </span>
	                      </div>
	                  </div>
	              </div> 
	            </div>
	            <div class="col-md-6 mb-5 "> 
	              <div class="card-destination card ">
	                  <div class="thumb">
	                      <img src="{{url('img/soto_lamongan.png')}}" alt="" class="img-destination w-100">
	                      <span class="price montserrats">Rp.20.000</span>
	                  </div>
	                  <div class="place_info col-12 bg-light py-4 px-3">
	                      <a href="#" class="text-decoration-none">
	                        <h3 class="poppins font-weight-bold place-name">Soto Lamongan</h3>
	                      </a>
	                      <div class="rating_destination d-block justify-content-between">
	                          <span class="d-flex mb-2 align-items-center">
	                               <i class="fa fa-star text-warning"></i> 
	                               <i class="fa fa-star text-warning"></i> 
	                               <i class="fa fa-star text-warning"></i> 
	                               <i class="fa fa-star text-dark"></i> 
	                               <i class="fa fa-star text-dark"></i>
	                          </span>
	                      </div>
	                  </div>
	              </div> 
	            </div>
	            <div class="col-md-6 mb-5 "> 
	              <div class="card-destination card ">
	                  <div class="thumb">
	                      <img src="{{url('img/jumbrek.png')}}" alt="" class="img-destination w-100">
	                      <span class="price montserrats">Rp.10.000</span>
	                  </div>
	                  <div class="place_info col-12 bg-light py-4 px-3">
	                      <a href="#" class="text-decoration-none">
	                        <h3 class="poppins font-weight-bold place-name">Jumbrek</h3>
	                      </a>
	                      <div class="rating_destination d-block justify-content-between">
	                          <span class="d-flex mb-2 align-items-center">
	                               <i class="fa fa-star text-warning"></i> 
	                               <i class="fa fa-star text-warning"></i> 
	                               <i class="fa fa-star text-warning"></i> 
	                               <i class="fa fa-star text-warning"></i> 
	                               <i class="fa fa-star text-warning"></i>
	                          </span>
	                      </div>
	                  </div>
	              </div> 
	            </div>
	            <div class="col-md-12">
	            	<div class="btn-group " style="float: right;">
	                  <button class="btn btn-sm btn-primary"><i class="fas fa-caret-left"></i></button>
	                  <button class="btn btn-sm btn-primary active">1</button>
	                  <button class="btn btn-sm btn-primary">2</button>
	                  <button class="btn btn-sm btn-primary"><i class="fas fa-caret-right"></i></button>
	                </div>
	            </div>
		    </div>
	    </div>
	</div>
</div>
<script type="text/javascript">
  $('.hotels').addClass('nav-active');
</script>
@endsection
