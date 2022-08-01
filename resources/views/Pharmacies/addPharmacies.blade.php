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
        <h4 class="heading">Pharmacy</h4>
    </div>
    <div class="container mt-5 align-self-center" style="">
        <h3>Add Pharmacy</h3>
        <form action="/addPharmacy" method="POST">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Pharmacy Holder Name</label>
                        <input type="text" name="holder" class="form-control" id="exampleFormControlInput1" placeholder="">
                      </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Pharmacy Name</label>
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="">
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Pharmacy Address</label>
                        <input type="text" name="address" class="form-control" id="exampleFormControlInput1" placeholder="">
                      </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Pharmacy Mobile No.</label>
                        <input type="text" name="phone" id="" class="form-control">
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Marketing Officer</label>
                        <select name="officer" class="form-select" aria-label="Default select example">
                            @foreach ($data1 as $officer)
                                <option selected>{{ $officer['name'] }}</option>
                            @endforeach
                          </select>
                      </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="" class="form-label mt-2">Pharmacy Status</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="Active" checked>
                            <label class="form-check-label" for="inlineRadio1">Active</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="Inactive">
                            <label class="form-check-label" for="inlineRadio2">Inactive</label>
                          </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 mb-5">
                <div class="col-6 text-center">
                    <button href="" type="submit" class="button1" style="text-decoration: none; width: 200px">Add Pharmacy</button>
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
