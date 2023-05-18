<?php
if (!(isset($_SESSION['user_id']))) {
    header("location:index.php");
    exit;
}
?>
<aside class="main-sidebar sidebar-dark-primary bg-black elevation-4">
    <a href="./" class="brand-link logo-switch bg-black">
        <h4 class="brand-image-xl logo-xs mb-0 text-center"><b>VCIS</b></h4>
        <h4 class="brand-image-xl logo-xl mb-0 text-center">VET Clinic's <b>CIS</b></h4>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="user_images/<?php echo $_SESSION['profile_picture']; ?>" class="img-circle elevation-2" alt="User Image" />
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo $_SESSION['display_name']; ?></a>
            </div>
        </div>


        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item" id="mnu_dashboard">
                    <a href="dashboard.php" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>






                <li class="nav-item" id="mi_new_schedule">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>
                            <i class="fas "></i>
                            Scheduling
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="home.php" class="nav-link" id="mi_new_prescription">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Set Schedule</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="addfaculty.php" class="nav-link" id="mi_patients">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Staff</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="addtime.php" class="nav-link" id="mi_patient_history">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Time</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="list.php" class="nav-link" id="mi_patient_history">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="tablelist.php" class="nav-link" id="mi_patient_history">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Schedule</p>
                            </a>
                        </li>
                    </ul>
                </li>







                <li class="nav-item">
                <li class="nav-item" id="mnu_patients">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-injured"></i>
                        <p>
                            <i class="fas "></i>
                            Patients
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="new_prescription.php" class="nav-link" id="mi_new_prescription">
                                <i class="far fa-circle nav-icon"></i>
                                <p>New Prescription</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="patients.php" class="nav-link" id="mi_patients">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Patients</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="patient_history.php" class="nav-link" id="mi_patient_history">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Patient History</p>
                            </a>
                        </li>

                    </ul>
                </li>



                <li class="nav-item" id="mnu_medicines">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-pills"></i>
                        <p>
                            Treatment
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="medicines.php" class="nav-link" id="mi_medicines">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Treatment</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="medicine_details.php" class="nav-link" id="mi_medicine_details">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Treatment Details</p>
                            </a>
                        </li>

                    </ul>
                </li>





                <li class="nav-item" id="mnu_reports">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Reports
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="reports.php" class="nav-link" id="mi_reports">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Reports</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item" id="mnu_users">
                    <a href="users.php" class="nav-link">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            Create Users
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="logout.php" class="nav-link">
                        <i class="nav-icon fa fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>