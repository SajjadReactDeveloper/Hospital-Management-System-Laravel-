<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shaukat Khanum Hospital</title>
    <link rel="stylesheet" href="{{ url('Css/Doctor.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
        integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <x-sidebar />
    <div class="doctorsPage">
        <h4 class="heading">Appointments</h4>
    </div>
    <div class="container mt-5">
        <h3>Edit Appointments</h3>
        <form action="/editAppointments" method="POST">
            @csrf
            <div class="row">
                <input type="hidden" name="id" value="{{ $data['id'] }}" id="">
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Appointment ID</label>
                        <input type="text" name="id" value="{{ $data['id'] }}" id="" class="form-control" disabled>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Patient Name</label>
                        <input type="text" name="pName" id="" value="{{ $data['pName'] }}" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Patient Email</label>
                        <input type="email" name="email" value="{{ $data['email'] }}" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Phone No.</label>
                        <input type="text" name="phone" value="{{ $data['phone'] }}" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="date" class="form-label">Doctor Name</label>
                        <select class="form-select" name="dName" aria-label="Default select example">
                            @foreach ($data1 as $doctor)
                                <option selected>{{ $doctor['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="date" class="form-label">Department</label>
                        <select class="form-select" name="department" aria-label="Default select example">
                            @foreach ($data2 as $department)
                            <option selected>{{ $department['name'] }}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="" class="form-label">Age</label>
                            <input type="text" name="age" value="{{ $data['age'] }}" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" name="date" value="{{ $data['date'] }}" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="" class="form-label">Time</label><br>
                            <input type="time" name="time" value="{{ $data['time'] }}" id="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="">Message</label>
                            <textarea name="message" value="{{ $data['message'] }}" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Appointment Staus</label><br>
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
                        <button href="" type="submit" class="button1" style="text-decoration: none; width: 200px">Save Changes</button>
                        <button href="" class="button"
                            style="text-decoration: none; width: 200px; margin-left: 20px">Cancel</button>
                    </div>
                </div>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"
        integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(function() {
            $('#datepicker').datepicker();
        });
    </script>
</body>

</html>
