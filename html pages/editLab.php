<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lab Monitoring System</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js"
        integrity="sha512-L0Shl7nXXzIlBSUUPpxrokqq4ojqgZFQczTYlGjzONGTDAcLremjwaWv5A+EDLnxhQzY5xUZPWLOLqYRkY0Cbw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Include Sparkline Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>

    <link rel="stylesheet" href="../public/css/style.css" />
    <script src="https://kit.fontawesome.com/0319a73572.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,200,0,200&icon_names=dns" />
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
</head>

<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="logo">
                <span><i class="fa-brands fa-watchman-monitoring colour"></i>LabTrack</span>
            </div>
            <hr class="solid" />
            <ul class="menu">
                <li class="menu-title">Menu</li>
                <!-- Dashboard Link -->
                <li>
                    <a href="index.php">
                        <i class="fa-solid fa-chart-pie"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="labs.php">
                        <i class="fa-solid fa-network-wired"></i>
                        Labs
                    </a>
                </li>
            <li>
                <a href="addLab.php">
                    <i class="fa-solid fa-plus"></i></i><span>Add Lab</span>
                </a>
            </li>
                <li>
                    <a href="addDevice.php">
                        <i class="fa-solid fa-plus"></i></i><span>Add Devices</span>
                    </a>
                </li>
                <li>
                    <a href="inventory.php">
                        <i class="fa-solid fa-warehouse"></i> Inventory
                    </a>
                </li>
                <li>
                    <a href="grievance.php">
                        <i class="fa-solid fa-paper-plane"></i> Grievance
                    </a>
                </li>
            </ul>
        </div>

        <!-- Main Content Area -->
        <div class="main-content">
            <!-- Header -->
            <div class="header">
                <!-- User Info Section -->
                <div class="sub-heading">
                    <span>Edit Lab</span> <!-- Changed from "Add Lab" -->
                </div>
                <div class="user-info">
                    <i class="fa-solid fa-circle-user"></i><span class="font-rale"> Administrator</span>
                </div>
            </div>

            <!-- CONTENT START of BELOW HEADER -->
            <div class="lab-management-container">
                <div class="form-wrapper">
                    <!-- Lab Details Section -->
                    <div class="form-section" id="lab-details">
                        <div class="section-header">
                            <h2 class="section-title">Edit Lab Details</h2> <!-- Changed title -->
                        </div>

                        <div class="grid-2col">
                            <div class="input-group">
                                <label class="input-label">Lab Name <span>*</span></label>
                                <input type="text" class="form-input" value="Computer Lab A" required>
                                
                            </div>

                            <div class="input-group">
                                <label class="input-label">Lab Code <span>*</span></label>
                                <input type="text" id="labCode" class="no-hover form-input" value="CO-2025-101" disabled>
                                
                            </div>

                            <div class="input-group">
                                <label class="input-label">Department <span>*</span></label>
                                <select class="form-input" required>
                                    <option value="">Select Department</option>
                                    <option selected>CO - Computer Science</option> 
                                    <option>AI - Artificial Intelligence</option>
                                    <option>IT - Information Technology</option>
                                    <option>EE - Electronics Engineering</option>
                                </select>
                            </div>

                            <div class="input-group">
                                <label class="input-label">Lab In-Charge <span>*</span></label>
                                <select class="form-input" required>
                                    <option value="">Select Lab In-Charge</option>
                                    <option selected>Admin 1</option> 
                                    <option>Admin 2</option>
                                </select>
                            </div>

                            <div class="input-group">
                                <label class="input-label">Establishment Date <span>*</span></label>
                                <input type="date" class="form-input" value="2020-01-15" required> 
                            </div>

                            <div class="input-group">
                                <label class="input-label">Room Capacity <span>*</span></label>
                                <input type="number" class="form-input" value="30" required> 
                            </div>

                            <div class="input-group">
                                <label class="input-label">Building <span>*</span></label>
                                <input type="text" class="form-input" value="Building A" required> 
                            </div>

                            <div class="input-group">
                                <label class="input-label">Room <span>*</span></label>
                                <input type="text" class="form-input" value="B101" required> 
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="button" class="btn btn-primary" id="addLabBtn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-save">
                                    <path d="M15.2 3a2 2 0 0 1 1.4.6l3.8 3.8a2 2 0 0 1 .6 1.4V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z" />
                                    <path d="M17 21v-7a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v7" />
                                    <path d="M7 3v4a1 1 0 0 0 1 1h7" />
                                </svg>
                                 Save Details
                                <!-- Changed icon and text -->
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CONTENT END of BELOW HEADER  -->
        </div>
        <!-- CONTENT END  -->
    </div>
</body>

</html>