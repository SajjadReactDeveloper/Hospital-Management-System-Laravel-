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
        <h4 class="heading">Patients</h4>
    </div>
    <div class="container mt-5">
        <h3>Edit Patient</h3>
        <form action="/editPatients" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <input type="hidden" value="{{ $data['ID'] }}" name="ID">
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Date</label>
                        <input type="date" name="date" value="{{ $data['date'] }}" class="form-control" id="">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Patient Type</label>
                        <select class="form-select" name="type" aria-label="Default select example">
                            <option selected>General</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Patient Name</label>
                        <input type="text" name="name" value="{{ $data['name'] }}" class="form-control" id="exampleFormControlInput1" placeholder="">
                      </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Gender</label><br>
                        <div class="form-check form-check-inline mt-2">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Male" checked>
                            <label class="form-check-label" for="inlineRadio4">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio4" value="Female">
                            <label class="form-check-label" for="inlineRadio4">Female</label>
                        </div>
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="date" class="form-label">Date of Birth</label>
                        <input type="date" name="dob" value="{{ $data['dob'] }}" id="" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Occupation</label><br>
                        <input type="text" name="occupation" value="{{ $data['occupation'] }}" id="" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="date" class="form-label">Patient Mobile</label>
                        <input type="text" name="phone" id="" value="{{ $data['phone'] }}" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Home Mobile Number</label><br>
                        <input type="text" name="home" id="" value="{{ $data['home'] }}" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="date" class="form-label">Blood Group</label>
                        <select class="form-select" name="bloodGroup" aria-label="Default select example">
                            <option selected>O+</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="date" class="form-label">Religion</label>
                        <select class="form-select" name="religion" aria-label="Default select example">
                            <option selected>Islam</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="date" class="form-label">Current Address</label>
                            <input type="text" name="address" id="" value="{{ $data['address'] }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Permanent Address</label><br>
                            <input type="text" name="pAddress" id="" value="{{ $data['pAddress'] }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="date" class="form-label">Visiting Doctor</label>
                            <select class="form-select" name="dName" aria-label="Default select example">
                                @foreach ($data1 as $doctor)
                                    <option selected>{{ $doctor['name'] }}</option>
                                @endforeach
                              </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="date" class="form-label">Floor</label>
                            <select class="form-select" name="floor" aria-label="Default select example">
                                <option selected>1st Floor</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="date" class="form-label">Avatar</label>
                        <input type="file" name="image" id="" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="date" class="form-label">Email</label>
                        <input type="email" name="email" value="{{ $data['email'] }}" id="" class="form-control">
                    </div>
                </div>
        </div>
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="">Symptoms</label>
                        <textarea class="form-control" name="symptoms" id="exampleFormControlTextarea1" rows="3">{{ $data['symptoms'] }}</textarea>
                    </div>
                </div>
            </div>
            <div class="row mt-5 mb-5">
                <div class="col-12 text-center">
                    <button href="" type="submit" class="button1" style="text-decoration: none; width: 200px">Save Changes</button>
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
