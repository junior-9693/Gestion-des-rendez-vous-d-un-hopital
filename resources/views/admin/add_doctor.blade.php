<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
    label{
      display: inlibe-block;
      width:200px;

    }

    </style>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">

        
          <div class="container" align="center" style="padding-top: 100px">

            @if (session()->has('message'))
            <div class="alert alert-success">
              <button type="button"  class="close" data-dissmiss="alert"></button>
              
              {{session()->get('message')}}
  
            </div>
            @endif

            <form class="row g-3" action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
              @csrf

              <div style="padding: 15px" >
                <label > Doctor Name</label>
                <input type="text" style="color:black" name="name" placeholder="Write the name " required="">
              </div>
              
              <div style="padding: 15px" >
                <label> Phone</label>
                <input type="text" style="color:black" name="number" placeholder="Write the number " required="">
              </div>


              <div style="padding: 15px" >
                <label> Speciality</label>
                <select name="speciality"  required=""  style="color: black; width: 200px";>
                  <option value="skin">--select--</option>
                  <option value="skin">skin</option>
                  <option value="heart">heart</option>
                  <option value="eye">eye</option>
                  <option value="nose">nose</option>
                </select>

              
              </div>

              <div style="padding: 15px" >
                <label> Room N°</label>
                <input type="text" style="color:black" name="room" placeholder="Write the room number "  required="">
              </div>

              <div style="padding: 15px" >
                <label> Doctor Image</label>
                <input type="file" name="file">
              </div>


              <div style="padding: 15px" >
                
                <input type="submit" class="btn btn-success"  name="file"  >
              </div>

              


            </form>
            
   
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    
    <!-- End custom js for this page -->
  </body>
</html>