@extends('layouts.app')


@section('content')
<div class="alert alert-danger print-error-msg" style="display:none">
           <ul></ul>
           </div>


           <div class="alert alert-success print-success-msg" style="display:none">
           <ul></ul>
           </div>
  <div class="panel-body">Panel Content</div>


    <form action="{{ route('inventory.store')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input id="reporting" type="text" value="salman" name="reporting[]">
    <input id="reporting" type="text" value="ankur" name="reporting[]">
    <button type ="submit"> Send </button>
  </form>
   <form name="add_name" id="add_name">
    	<div class="input-group control-group after-add-more">
  <div class="form-row">
    <div class="col">
      <input id="inventory" type="text" name="inventory[]"class="form-control" placeholder="Category">
    </div>
    <div class="col">
      <input id="inventory" type="text" name="inventory[]"class="form-control" placeholder="Description">

    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Condition">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Cleanliness">
    </div>
    <div class="input-group-btn">
    <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> + </button>
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
      <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> - </button>
    </div>
  </div>
</div>
  </div>

</form>

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
