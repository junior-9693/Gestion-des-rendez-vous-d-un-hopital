<!DOCTYPE html>
<html lang="en">
  <head>
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
            <div align="center" style="padding-top: 100px" >
                <table  style="table-layout:fixed">
                    <tr style="background-color: black" align="center">
                        <th style="padding: 10px">Doctor Name</th>
                        <th style="padding: 10px">Pone</th>
                        <th style="padding: 10px">Speciality</th>
                        <th style="padding: 10px">Room N°</th>
                        <th style="padding: 10px">Image</th>
                        <th style="padding: 10px">DELETE</th>
                        <th style="padding: 10px">UPDATE</th>

                       
                    </tr>

                    @foreach ($data as $doctor)

                    <tr align="center" style="background-color: skyblue">
                        
                            
                        <td>{{$doctor->name}}</td>
                       <td>{{$doctor->phone}}</td>
                        <td>{{$doctor->speciality}}</td>
                        <td>{{$doctor->room}}</td>
                        <td><img height="100" width="100" src="doctorimage/{{$doctor->image}}"> </td>
                        
                      
                        <td>
                            <a  href="{{url('deletedoctor',$doctor->id)}}" onclick="return('Are you sure you want to delete data doctor')" class="btn btn-danger" > DELETE</a>
    
                        </td>
                        <td>
                            <a href="{{url('updatedoctor',$doctor->id)}}" class="btn btn-primary" > UPDATE</a>
    
                        </td>
                        
                    </tr>
                    @endforeach
                  
            </div>

        </div>
        
   
   
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    
    <!-- End custom js for this page -->
  </body>
</html>