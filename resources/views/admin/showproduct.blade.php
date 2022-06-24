
<!DOCTYPE html>
<html lang="en">
  <head>
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
         @if(session()->has('message'))

<div clas="alert alert-success">
<button type="button" class="close" data-dismiss="alert">x</button>
{{session()->get('message')}}
</div>

@endif
             <table>
                 <tr style="background-color:gray">

                 <td style="padding:20px;">title</td>
                 <td style="padding:20px;">description</td>
                 <td style="padding:20px;">quantity</td>
                 <td style="padding:20px;">price</td>
                 <td style="padding:20px;">image</td>
                 <td style="padding:20px;">update</td>
                 <td style="padding:20px;">delete</td>

                 </tr>
@foreach($data as $product)
                 <tr align="center" style="background-color:black">
                     <td>{{$product->title}}</td>
                     <td>{{$product->description}}</td>
                     <td>{{$product->quantity}}</td>
                     <td>{{$product->price}}</td>
                     <td>
                         <img height="100" width="100" src="/productimage/{{$product->image}}" alt="">
                     </td>
                     
                     <td>
                       <a class="btn btn-primary" href="{{url('updateview',$product->id)}}">update</a>
                     </td>

                     <td>
                       <a class="btn btn-danger" href="{{url('deleteproduct',$product->id)}}">delete</a>
                     </td>
                 </tr>

                

                 
                     
                 </tr>
 
 
                 @endforeach
             </table>

         </div>   
        
        <div>
          <!-- partial -->
       @include('admin.script')
  </body>
</html>
