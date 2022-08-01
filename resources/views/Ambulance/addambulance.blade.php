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
        <h4 class="heading">Ambulance</h4>
    </div>
    <div class="container mt-5">
        <h3>Add Ambulance</h3>
        <form action="/addAmbulance" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Ambulance ID</label>
                        <input type="text" name="id" class="form-control" id="exampleFormControlInput1" placeholder="">
                      </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Ambulance Name</label>
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="">
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Ambulance Number</label>
                        <input type="text" name="number" class="form-control" id="exampleFormControlInput1" placeholder="">
                      </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Ambulance Type</label>
                        <select class="form-select" aria-label="Default select example" name="type">
                            <option selected>Emergency Ambulance</option>
                            <option>Individual Ambulance</option>
                            <option>Mobile ICU Ambulance</option>
                            <option>Medical and Nursing Care Ambulance</option>
                          </select>
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="date" class="form-label">Ambulance Image</label>
                        <input type="file" id="" class="form-control" name="image">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Staus</label><br>
                        <div class="form-check form-check-inline mt-2">
                            <input class="form-check-input" type="radio" name="status" id="inlineRadio3" value="Active" checked>
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
                    <button href="" class="button1" type="submit" style="text-decoration: none; width: 200px">Add Ambulance</button>
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
