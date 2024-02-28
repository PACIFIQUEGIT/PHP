@extends('layouts.app')

@section('content')

<div class="container-fluid ms-0 ps-0">
        <div id="aside" class="column mx-0">
            <div class="container p-4 pb-5 mb-4">
                <div class="row text-white border-top py-3 ">
                    <h6><i class='bx bxs-dashboard'></i> DASHBOARD</h6>
                </div>
                <div class="row text-white border-top py-3">
                    <p><b>INTERFACE</b></p>
                    <p><a style="color:white" href="registeredstudents.php">Registered students</a> <span class="float-end"><i class='bx bx-chevron-right'></i></span> </p>
                    <p><a style="color:white" href="adminpage.php">Admin Page</a> <span class="float-end"><i class='bx bx-chevron-right'></i></span> </p>
                    <p><a style="color:white" href="services.php">Services</a> <span class="float-end"><i class='bx bx-chevron-right'></i></span> </p>
                    <p><a style="color:white" href="aboutus.php">About Us</a> <span class="float-end"><i class='bx bx-chevron-right'></i></span> </p>
                    <p><a style="color:white" href="courses1.php">Courses</a> <span class="float-end"><i class='bx bx-chevron-right'></i></span> </p>
                    <p><a style="color:white" href="blog.php">Blog</a> <span class="float-end"><i class='bx bx-chevron-right'></i></span> </p>
                    <p><a style="color:white" href="instructors.php">Instructors</a> <span class="float-end"><i class='bx bx-chevron-right'></i></span> </p>
                    <p><a style="color:white" href="students.php">Students</a> <span class="float-end"><i class='bx bx-chevron-right'></i></span> </p>
                </div>
                <div class="row text-white border-top py-3">
                    <p><b>ADDONS</b></p>
                    <p><i class='bx bxs-folder'></i> Pages <span class="float-end"><i class='bx bx-chevron-right'></i></span></p>
                    <p><i class='bx bx-line-chart'></i> Charts</p>
                    <p><i class='bx bx-table' ></i> Tables</p>
                </div>
                <div class="row text-white border-top py-3 pb-5 mb-5">
                <button id="btn" class="btn rounded-circle p-0"><i class='bx bx-chevron-left'></i></button>
                </div>
            </div>
        </div>
</div>
         
            

@endsection