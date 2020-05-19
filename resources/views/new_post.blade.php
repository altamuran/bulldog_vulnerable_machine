@extends('layouts.app1')
@section('content')
<div class="container">
        @if ($message = Session::get('success'))

        <div class="alert alert-success alert-block">

            <button type="button" class="close" data-dismiss="alert">×</button>

                <strong>{{ $message }}</strong>

        </div>
        @endif
	<div class="row">
	    
	    <div class="col-md-8 col-md-offset-2">
	        
    		<h1>Create post</h1>
    		
    		<form action="/store_post" method="POST" enctype="multipart/form-data">
    		    {{ csrf_field() }}
    		    <div class="form-group has-error">
    		        <label for="autor">Autor <span class="require">*</span> <small>(This field use in url path.)</small></label>
    		        <input type="text" class="form-control" name="autor" />
    		        <span class="help-block">Field not entered!</span>
    		    </div>
    		    
    		    <div class="form-group">
    		        <label for="title">Title <span class="require">*</span></label>
    		        <input type="text" class="form-control" name="title" />
    		    </div>
    		    
    		    <div class="form-group">
    		        <label for="content">Content</label>
    		        <textarea rows="5" class="form-control" name="content" ></textarea>
    		    </div>
    		    
    		    <div class="form-group">
    		        <p><span class="require">*</span> - required fields</p>
    		    </div>
    		    
    		    <div class="form-group">
    		        <button type="submit" class="btn btn-primary">
    		            Create
    		        </button>
    		        <button class="btn btn-default">
    		            Cancel
    		        </button>
    		    </div>

    		    <div class="form-group">
            		<label>Image Upload</label>
                	<input type="file" name="image"/>
			 	</div> 
    		</form>
		</div>
		
	</div>
</div>

@endsection