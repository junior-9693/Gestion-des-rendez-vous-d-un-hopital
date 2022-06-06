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

        <div>
            <table  style="table-layout:fixed; margin-top:200px" >
                <tr style="background-color: black" align="center">
                    <th >Customer Name</th>
                    <th >Email</th>
                    <th style="padding: 10px">Phone</th>
                    <th >Doctor</th>
                    <th >Date</th>
                    <th >Message</th>
                    <th >Status</th>
                    <th >Approved</th>
                    <th >Canceled</th>
                </tr>

                @foreach ($data as $appoint)

                <tr align="center" style="background-color: skyblue">
                    
                        
                    <td>{{$appoint->name}}</td>
                    <td>{{$appoint->email}}</td>
                    <td>{{$appoint->phone}}</td>
                    <td>{{$appoint->doctor}}</td>
                    <td>{{$appoint->date}}</td>
                    <td>{{$appoint->message}}</td>
                    <td>{{$appoint->status}}</td>
                    <td>
                        <a href="{{url('approved',$appoint->id)}}" class="btn btn-success" > Approved</a>

                    </td>
                    <td>
                        <a href="{{url('canceled',$appoint->id)}}" class="btn btn-danger" > Canceled</a>

                    </td>
                    
                </tr>
                @endforeach

            </table>
       

        </div>
      </div>
        
     
   
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
 
    <!-- End custom js for this page -->
  </body>
</html>