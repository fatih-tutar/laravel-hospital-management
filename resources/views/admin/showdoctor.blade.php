<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css');
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      
      @include('admin.sidebar')

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        @include('admin.navbar')

        <div class="container-fluid page-body-wrapper">
            <div align="center">
                <table>
                    <tr style="background-color:black;">
                        <th style="padding: 10px;">Name</th>
                        <th style="padding: 10px;">Phone</th>
                        <th style="padding: 10px;">Speciality</th>
                        <th style="padding: 10px;">Room</th>
                        <th style="padding: 10px;">Image</th>
                        <th style="padding: 10px;">Delete</th>
                        <th style="padding: 10px;">Update</th>
                    </tr>
                    @foreach($data as $doctor)
                    <tr style="color:black; text-align:center; background-color:skyblue;">
                        <td style="padding: 10px;" align="center">
                            <img src="doctorimage/{{$doctor->image}}" alt="" style="height: 50px;">
                        </td>
                        <td style="padding: 10px;">{{$doctor->name}}</td>
                        <td style="padding: 10px;">{{$doctor->phone}}</td>
                        <td style="padding: 10px;">{{$doctor->speciality}}</td>
                        <td style="padding: 10px;">{{$doctor->room}}</td>
                        <td><a href="{{url('deletedoctor',$doctor->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this doctor?')">Delete</a></td>
                        <td><a href="{{url('updatedoctor',$doctor->id)}}" class="btn btn-primary">Update</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>