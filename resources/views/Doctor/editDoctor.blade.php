<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shaukat Khanum Hospital</title>
    <link rel="stylesheet" href="{{ url('Css/Doctor.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <x-sidebar />
    <div class="doctorsPage">
        <h4 class="heading">Doctor</h4>
    </div>
    <div class="container mt-5">
        <h3>Edit Doctor</h3>
        <form action="/editDoctors" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <input type="hidden" name="ID" value="{{ $data['ID'] }}" id="">
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" value="{{ $data['name'] }}" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Name">
                      </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Degree</label>
                        <input type="text" value="{{ $data['degree'] }}" name="degree" class="form-control" id="exampleFormControlInput1" placeholder="Degree">
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                        <input type="text" name="username" value="{{ $data['username'] }}" class="form-control" id="exampleFormControlInput1" placeholder="Username">
                      </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" name="email" value="{{ $data['email'] }}" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="date" class="col-1 col-form-label">Date</label>
                        <input type="date" class="form-control" value="{{ $data['date'] }}" name="date">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="" class="form-label mt-2">Gender</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                          </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Specialist</label>
                        <select class="form-select" aria-label="Default select example" name="specialist">
                        @foreach ($data1 as $specialist)
                            <option selected>{{ $specialist['name'] }}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="col-2">
                    <label for="" class="form-label">Charges</label>
                    <input type="number" value="{{ $data['charges'] }}" name="charges" id="" class="form-control">
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="" class="form-label">Department</label>
                        <select class="form-select" aria-label="Default select example" name="department">
                            @foreach ($data2 as $department)
                            <option selected>{{ $department['name'] }}</option>
                        @endforeach
                          </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Country</label>
                        <input type="text" value="{{ $data['country'] }}" name="country" id="" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Address</label>
                        <input type="text" name="address" value="{{ $data['address'] }}" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Phone</label>
                        <input type="text" name="phone" value="{{ $data['phone'] }}" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Avatar</label><br>
                        <div class="d-flex align-content-center justify-center">
                            <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" style="width: 40px; margin-right: 10px" alt="Avatar" />
                            <input type="file" name="image" id="" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="" class="form-label">Short Biography</label>
                        <textarea name="biography" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $data['biography'] }}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="" class="form-label">Staus</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="inlineRadio3" value="Active">
                            <label class="form-check-label" for="inlineRadio4">Active</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="inlineRadio4" value="Inactive">
                            <label class="form-check-label" for="inlineRadio4">Inactive</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 mb-5">
                <div class="col-12 text-center">
                    <button type="submit" href="" class="button1" style="text-decoration: none; width: 200px">Save Changes</button>
                    <button href="" class="button" style="text-decoration: none; width: 200px; margin-left: 20px">Cancel</button>
                </div>
            </div>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(function(){
            $('#datepicker').datepicker();
        });
    </script>
</body>
</html>
