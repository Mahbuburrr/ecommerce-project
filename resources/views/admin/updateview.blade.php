
<!DOCTYPE html>
<html lang="en">
  <head>

  <style>
  .title{
    font-size:25px;padding-top:25px;color:white;
  }
  label{

    display:inline-block;
    width:200px;
  }
</style>
      <base href="/public">
    @include('admin.css')
  </head>
  <body>
    
      <!-- partial:partials/_sidebar.html --> 
@include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">
          <div class="container" align="center">
          <h1 class="title">Add product</h1>
          @if(session()->has('message'))

          <div clas="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">x</button>
          {{session()->get('message')}}
          </div>

          @endif

<form action="{{url('updateproduct',$data->id)}}" method="post" enctype="multipart/form-data">
@csrf
          <div style="padding: 15px;">

          <label for="title">title</label>
          <input style="color:black;" type="text" name="title" 
          value="{{$data->title}}" required="">
          </div>

          <div style="padding: 15px;">

          <label for="price">price</label>
          <input style="color:black;" type="number" name="price" 
          value="{{$data->price}}" required="">
          </div>

          <div style="padding: 15px;">

          <label for="description">description</label>
          <input style="color:black;" type="text" name="description"
          value="{{$data->description}}" required="">
          </div>

          <div style="padding: 15px;">

          <label for="quantity">quantity</label>
          <input style="color:black;" type="number" name="quantity" 
          value="{{$data->quantity}}" required="">
          </div>

          <div style="padding: 15px;">

<label for="quantity">Old image</label>
<img height="100" width="100" src="/productimage/{{$data->image}}" alt="">
</div>

          <div style="padding: 15px;">
          <label for="">Change the image</label>
            <input type="file" name="file">
          </div>
          <div style="padding: 15px;">
            <input class="btn btn-success" type="submit">
          </div>

</form>

          </div>
      
      <div>
        
          <!-- partial -->
       @include('admin.script')
  </body>
</html>
