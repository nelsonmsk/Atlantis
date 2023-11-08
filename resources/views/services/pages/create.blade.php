@extends('services.Index')

@section('body')

  <div class="col-lg-8 col-md-10 col-md-offset-2">
    <div class="card">
	   
	<div class="card-header header-danger">
    <h2><span class="card-category">{{ __('Add Service') }} </span> 
	<a href="{{config('app.url')}}/services" class="btn btn-secondary pull-right">View All</a></h2>
    </div>
	
<div class="card-body">	
    <form class="form-horizontal singleForm" id="services-form1" method="post" action="services" data-parsley-validate>
      <div class="form-group">  
     <input type="hidden" value="{{csrf_token()}}" name="_token" />      
      <label for="name" class="col-sm-2 control-label">Name:</label>
	<div class="col-sm-10">
      <input id="name" type="text"  class="form-control" name="name" required />
	</div>
      </div>
      <div class="form-group">
      <label for="description" class="col-sm-2 control-label">Description:</label>
	<div class="col-sm-10">
      <input id="description" type="text"  class="form-control" name="description" required />
	</div>
      </div>
    <div class="form-group">      
      <label for="icon" class="col-sm-2 control-label">Icon:}</label>
		<div class="col-sm-10">
		  <input id="icon" type="text"  class="form-control" name="icon" required />
		</div>
    </div>		  
      <div class="form-group">
      <label for="pageId" class="col-sm-2 control-label">Page Id:</label>
	<div class="col-sm-10">
      <input id="pageId" type="text"  class="form-control" name="pageId" required />
	</div>
      </div>  
      <div id="b-element" class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success btn-lg col-sm-5" id="save-btn" name="Save">Save <div class="fa fa-save text-white"></div></button>
      <a href="{{url()->previous()}}" class="btn btn-danger btn-lg col-sm-5 col-sm-offset-1" id="cancel" name="cancel">Cancel <div class="fa fa-close text-white"></div></a>
	</div>
      </div>
  </form> 
</div> 
</div>
</div>
@endsection
