@extends('layout.front-form-layout')

@section('content')


	<section class="login">
		<div class="container">
			<h3> {{ $label }} </h3>
			<div class="row pt20 col-sm-6">
	    <div class="col-sm-10">
	      <input type="email" placeholder="Input">

	    </div>
	    <div class="col-sm-10">
	      <div class="custom-select-box">
	        <select name="name" id="selectbox">
	          <option value="0">Dropdown</option>
	          <option value="1">Dropdown1</option>
	          <option value="2">Dropdown2</option>
	        </select>
	      </div>

	    </div>

	  </div>
		</div>

	</section>
	 
@stop