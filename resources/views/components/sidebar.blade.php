<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ url('Css/sidebar.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="{{ url('JS/sidebar.js') }}"></script>
</head>

<body>

    <body id="body-pd">
        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            <x-navbar />
        </header>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <img src="{{ url('a.svg') }}" alt="" style="width: 200px; padding-left: 20px; margin-bottom: 20px; margin-top: 20px">
                    <div class="nav_list">
                        <a href="/admin-panel" class="nav_link active">
                            <i class='bx bx-grid-alt nav_icon'></i>
                            <span class="nav_name">Dashboard</span>
                        </a>
                        <a href="/admin/specialists" class="nav_link">
                            <i class="fa fa-users nav_icon"></i>
                            <span class="nav_name">Specialists</span>
                        </a>
                        <a href="/admin/doctor" class="nav_link">
                            <i class="fa fa-user-md" nav_icon></i>
                            <span class="nav_name">Doctors</span>
                        </a>
                        <a href="/admin/patient" class="nav_link">
                            <i class='fa fa-wheelchair nav_icon'></i>
                            <span class="nav_name">Patients</span>
                        </a>
                        <a href="/admin/appointment" class="nav_link">
                            <i class='fa fa-calendar nav_icon'></i>
                            <span class="nav_name">Appointments</span>
                        </a>
                        <a href="/admin/doctor/schedule" class="nav_link">
                            <i class='fa fa-calendar-check-o nav_icon'></i>
                            <span class="nav_name">Doctor Schedule</span>
                        </a>
                        <a href="/admin/department" class="nav_link">
                            <i class='fa fa-building-o nav_icon'></i>
                            <span class="nav_name">Departments</span>
                        </a>
                        <a href="/admin/ambulance" class="nav_link">
                            <i class='fa fa-ambulance nav_icon'></i>
                            <span class="nav_name">Ambulance</span>
                        </a>
                        <a href="/admin/medicine" class="nav_link">
                            <i class='fa fa-medkit nav_icon'></i>
                            <span class="nav_name">Medicine / Drug</span>
                        </a>
                        <a href="#" class="nav_link">
                            <i class='fa fa-bed nav_icon'></i>
                            <span class="nav_name">Operation</span>
                        </a>
                        <a href="/admin/employee" class="nav_link">
                            <i class='fa fa-user nav_icon'></i>
                            <span class="nav_name">Employees</span>
                        </a>
                        <a href="#" class="nav_link">
                            <div class="" style="display: flex; align-items: center">
                                <i class='fa fa-share-alt nav_icon' style="margin-right: 15px"></i>
                                <span class="nav_name">Inventory</span>
                                <i class="fa fa-angle-down inventory" id="inventory" style="margin-left: 60px; font-size: 24px; cursor: pointer;" aria-hidden="true"></i>
                            </div>
                            <div id = "inven" class="inven" style="margin-left: 30px;">
                                <a href="/admin/inventory/stock"  class="nav_link invenClass"><i class='fa fa-share-alt nav_icon' style="margin-right: 15px"></i><span class="nav_name">Stocks</span></a>
                                <a href="/admin/inventory/bed"  class="nav_link invenClass "><i class='fa fa-bed nav_icon' style="margin-right: 15px"></i><span class="nav_name">Beds</span></a>
                                <a href=""  class="nav_link invenClass ">
                                    <i class='fa fa-ambulance nav_icon' style="margin-right: 15px"></i>
                                    <span class="nav_name">Ambulance</span>
                                </a>
                            </div>
                        </a>
                        <a href="/admin/officer" class="nav_link">
                            <i class='fa fa-user nav_icon'></i>
                            <span class="nav_name">Marketing Officers</span>
                        </a>
                        <a href="/admin/pharmacy" class="nav_link">
                            <i class='fa fa-hospital-o nav_icon'></i>
                            <span class="nav_name">Pharmacies</span>
                        </a>
                        <a href="#" class="nav_link">
                            <i class='fa fa-money nav_icon'></i>
                            <span class="nav_name">Accounts</span>
                        </a>
                        <a href="#" class="nav_link">
                            <i class='fa fa-flag nav_icon'></i>
                            <span class="nav_name">Reports</span>
                        </a>
                        <a href="#" class="nav_link">
                            <i class='fa fa-credit-card nav_icon'></i>
                            <span class="nav_name">Invoice</span>
                        </a>
                    </div>
                </div>
                <a href="#" class="nav_link">
                    <i class='bx bx-log-out nav_icon'></i>
                    <span class="nav_name">SignOut</span>
                </a>
            </nav>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>
    </body>

</html>
