@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-14">
        <div class="card">
            <div class="card-title">
                <h4>Entrance/Stairs</h4>

            </div>
            <div class="card-body">
                <div class="basic-form">
  <form>
  <div class="form-row">
  </div>
</div>
    	<div class="input-group control-group after-add-more">
  <div class="form-row">
    <div class="col form-group">
      <input type="text" class="form-control" placeholder="Category">
      <select class="form-control">
<option>Walls</option>
<option>Doors</option>
<option>Ceiling</option>
<option>Floor</option>
<option>Fixed Lighting</option>
<option>Sockets & Switches</option>
</select>
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Description">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Condition">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Cleanliness">
    </div>
    <div class="input-group-btn">
    <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
    </div>
  </div>
</div>
<div class="copy-fields hide">
  <div class="control-group input-group" style="margin-top:10px">
    <div class="form-row">
      <div class="col">
        <input type="text" class="form-control" placeholder="Category">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Description">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Condition">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Cleanliness">
      </div>
    <div class="input-group-btn">
      <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
    </div>
  </div>
</div>
  </div>
</form>
</div>
</div>
</div>
</div>

<div class="row">
    <div class="col-lg-14">
        <div class="card">
            <div class="card-title">
                <h4>Living Room</h4>

            </div>
            <div class="card-body">
                <div class="basic-form">
  <form>
  <div class="form-row">
  </div>
</div>
    	<div class="dropdown input-group control-group after-add-more">
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Category">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Description">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Condition">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Cleanliness">
    </div>
    <div class="input-group-btn">
    <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
    </div>
  </div>
</div>
<div class="copy-fields hide">
  <div class="control-group input-group" style="margin-top:10px">
    <div class="form-row">
      <div class="col">
        <input type="text" class="form-control" placeholder="Category">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Description">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Condition">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Cleanliness">
      </div>
    <div class="input-group-btn">
      <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
    </div>
  </div>
</div>
  </div>
</form>
</div>
</div>
</div>
</div>

<div class="row">
    <div class="col-lg-14">
        <div class="card">
            <div class="card-title">
                <h4>Room1</h4>

            </div>
            <div class="card-body">
                <div class="basic-form">
  <form>
  <div class="form-row">
  </div>
</div>
    	<div class="dropdown input-group control-group after-add-more">
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Category">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Description">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Condition">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Cleanliness">
    </div>
    <div class="input-group-btn">
    <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
    </div>
  </div>
</div>
<div class="copy-fields hide">
  <div class="control-group input-group" style="margin-top:10px">
    <div class="form-row">
      <div class="col">
        <input type="text" class="form-control" placeholder="Category">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Description">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Condition">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Cleanliness">
      </div>
    <div class="input-group-btn">
      <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
    </div>
  </div>
</div>
  </div>
</form>
</div>
</div>
</div>
</div>

<div class="row">
    <div class="col-lg-14">
        <div class="card">
            <div class="card-title">
                <h4>Kitchen</h4>

            </div>
            <div class="card-body">
                <div class="basic-form">
  <form>
  <div class="form-row">
  </div>
</div>
    	<div class="dropdown input-group control-group after-add-more">
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Category">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Description">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Condition">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Cleanliness">
    </div>
    <div class="input-group-btn">
    <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
    </div>
  </div>
</div>
<div class="copy-fields hide">
  <div class="control-group input-group" style="margin-top:10px">
    <div class="form-row">
      <div class="col">
        <input type="text" class="form-control" placeholder="Category">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Description">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Condition">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Cleanliness">
      </div>
    <div class="input-group-btn">
      <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
    </div>
  </div>
</div>
  </div>
</form>
</div>
</div>
</div>
</div>

<div class="row">
    <div class="col-lg-14">
        <div class="card">
            <div class="card-title">
                <h4>Bathroom</h4>

            </div>
            <div class="card-body">
                <div class="basic-form">
  <form>
  <div class="form-row">
  </div>
</div>
    	<div class="dropdown input-group control-group after-add-more">
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Category">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Description">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Condition">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Cleanliness">
    </div>
    <div class="input-group-btn">
    <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
    </div>
  </div>
</div>
<div class="copy-fields hide">
  <div class="control-group input-group" style="margin-top:10px">
    <div class="form-row">
      <div class="col">
        <input type="text" class="form-control" placeholder="Category">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Description">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Condition">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Cleanliness">
      </div>
    <div class="input-group-btn">
      <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
    </div>
  </div>
</div>
  </div>
</form>
</div>
</div>
</div>
</div>


<script type="text/javascript">

    $(document).ready(function() {

	//here first get the contents of the div with name class copy-fields and add it to after "after-add-more" div class.
      $(".add-more").click(function(){
          var html = $(".copy-fields").html();
          $(".after-add-more").after(html);
      });
//here it will remove the current value of the remove button which has been pressed
      $("body").on("click",".remove",function(){
          $(this).parents(".control-group").remove();
      });

    });

</script>

@endsection
