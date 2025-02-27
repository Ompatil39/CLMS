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
                <li class="active">
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
                    <span>Add Devices </span>
                </div>
                <div class="user-info">
                    <!-- <img alt="User Avatar" src="https://placehold.co/30x30" /> -->
                    <i class="fa-solid fa-circle-user"></i><span class="font-rale"> Administrator
                    </span>
                </div>
            </div>
            <!-- CONTENT START of BELOW HEADER -->
            <div class="lab-management-container">
                <div class="form-wrapper">
                    <!--  Details Section -->
                    <div class="form-section" id="lab-details">

                        <div class="section-header">
                            <h2 class="section-title">Register New Devices</h2>
                            <div class="copy-btn">
                                <button type="button" class="btn1 btn-secondary1" id="addLabBtn">
                                    <i class="fa-solid fa-file-import"></i> Copy Last Entry
                                </button>
                            </div>
                        </div>


                        <div class="selectLabDevice">
                            <div class="input-group">
                                <label class="input-label">Select Lab <span>*</span></label>
                                <select class="form-input" required>
                                    <option value="">Select Lab</option>
                                    <option>COA101</option>
                                    <option>COB102</option>
                                </select>
                            </div>
                            <div class="input-group" style="margin-bottom: 0rem !important;">
                                <label class="input-label">Select Device <span>*</span></label>
                                <select class="form-input" required>
                                    <option value="">Select Device</option>
                                    <option onclick="showPC()">PC</option>
                                    <option onclick="showPrinter()">Printer</option>
                                </select>
                            </div>

                        </div>

                        <!-- BELOW ARE INPUT BASED ON SELECTED OPTION -->
                        <!-- 1. FIRST INPUTS FOR PC OPTION -->
                        <div class="pcInput" id="pcInput" style="display: none;">
                            <div class="stepper">
                                <div class="stepper-item active">1. PC Details</div>
                                <div class="stepper-item">2. Monitor</div>
                                <div class="stepper-item">3. Keyboard</div>
                                <div class="stepper-item">4. Mouse</div>
                                <div class="stepper-item">5. CPU</div>
                                <div class="stepper-item">6. Connectivity</div>
                            </div>
                            <!--  PC Details -->
                            <div class="step-content" id="step-1">
                                <!-- PC DETAILS -->
                                <div class="grid-3col">
                                    <div class="input-group">
                                        <label class="input-label">PC Name <span>*</span></label>
                                        <input type="text" class="form-input" placeholder="Enter name (e.g., HP PC)"
                                            required>
                                    </div>
                                    <div class="input-group">
                                        <label class="input-label">PC Quantity <span>*</span></label>
                                        <input type="number" class="form-input"
                                            placeholder="Total PCs to add (e.g., 10)" required>
                                    </div>
                                    <div class="input-group">
                                        <label class="input-label">PC Code </label>
                                        <input type="text" id="labCode" name="labCode" class="no-hover form-input "
                                            value="Device Code will be Auto-Generated" disabled>
                                    </div>
                                    <div class="input-group">
                                        <label class="input-label">Serial Number </label>
                                        <input type="number" class="form-input" placeholder="Enter Serial Number">
                                    </div>
                                    <div class="input-group">
                                        <label class="input-label">Processor <span>*</span></label>
                                        <input type="text" class="form-input"
                                            placeholder="Enter processor (e.g. Intel Core i7)" required>
                                    </div>
                                    <div class="input-group">
                                        <label class="input-label">RAM <span>*</span></label>
                                        <input type="text" class="form-input" placeholder="Enter RAM (e.g. 4GB DDR4)"
                                            required>
                                    </div>
                                    <div class="input-group">
                                        <label class="input-label">Storage (HDD/SSD) <span>*</span></label>
                                        <input type="text" class="form-input" placeholder="Enter Storage (e.g. 1TB HDD)"
                                            required>
                                    </div>
                                    <div class="input-group">
                                        <label class="input-label">Operating System </label>
                                        <input type="text" class="form-input"
                                            placeholder="Enter Operating System (e.g. Windows 10)" required>
                                    </div>
                                    <div class="input-group">
                                        <label class="input-label">PC Status <span>*</span></label>
                                        <select class="form-input" required>
                                            <option value="">Status</option>
                                            <option>Active</option>
                                            <option>In-Active</option>
                                            <option>Under Repair</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Monitor -->
                            <div class="step-content" id="step-2" style="display: none;">
                                <div class="grid-3col">
                                    <!-- Monitor -->
                                    <div class="input-group">
                                        <label class="input-label">Monitor Brand & Model <span>*</span></label>
                                        <input type="text" class="form-input"
                                            placeholder="Enter Monitor Brand & Model (e.g., Dell 22-inch LED)" required>
                                    </div>
                                    <div class="input-group">
                                        <label class="input-label">Monitor Resolution <span>*</span></label>
                                        <input type="text" class="form-input"
                                            placeholder="Enter Resolution (e.g., 1920x1080)" required>
                                    </div>
                                    <div class="input-group">
                                        <label class="input-label">Monitor Serial Number</label>
                                        <input type="text" class="form-input" placeholder="Enter Serial Number">
                                    </div>
                                    <div class="input-group">
                                        <label class="input-label">Monitor Status <span>*</span></label>
                                        <select class="form-input" required>
                                            <option value="">Select Status</option>
                                            <option>Working</option>
                                            <option>Needs Repair</option>
                                            <option>Replaced</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!--Keyboard -->
                            <div class="step-content" id="step-3" style="display: none;">
                                <div class="grid-3col">
                                    <!-- Keyboard -->
                                    <div class="input-group">
                                        <label class="input-label">Keyboard Name</label>
                                        <input type="text" class="form-input" placeholder="Enter Keyboard Name">
                                    </div>
                                    <div class="input-group">
                                        <label class="input-label">Keyboard Type <span>*</span></label>
                                        <select class="form-input" required>
                                            <option value="">Select Type</option>
                                            <option>Wired</option>
                                            <option>Wireless</option>
                                            <option>Mechanical</option>
                                            <option>Membrane</option>
                                        </select>
                                    </div>
                                    <div class="input-group">
                                        <label class="input-label">Keyboard Serial Number</label>
                                        <input type="text" class="form-input" placeholder="Enter Serial Number">
                                    </div>
                                    <div class="input-group">
                                        <label class="input-label">Keyboard Status <span>*</span></label>
                                        <select class="form-input" required>
                                            <option value="">Select Status</option>
                                            <option>Working</option>
                                            <option>Needs Repair</option>
                                            <option>Replaced</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- MOUSE -->
                            <div class="step-content" id="step-4" style="display: none;">
                                <div class="grid-3col">
                                    <!-- Mouse -->
                                    <div class="input-group">
                                        <label class="input-label">Mouse Name</label>
                                        <input type="text" class="form-input" placeholder="Enter Mouse Name">
                                    </div>
                                    <div class="input-group">
                                        <label class="input-label">Mouse Type <span>*</span></label>
                                        <select class="form-input" required>
                                            <option value="">Select Type</option>
                                            <option>Wired</option>
                                            <option>Wireless</option>
                                        </select>
                                    </div>
                                    <div class="input-group">
                                        <label class="input-label">Mouse Serial Number</label>
                                        <input type="text" class="form-input" placeholder="Enter Serial Number">
                                    </div>
                                    <div class="input-group">
                                        <label class="input-label">Mouse Status <span>*</span></label>
                                        <select class="form-input" required>
                                            <option value="">Select Status</option>
                                            <option>Working</option>
                                            <option>Needs Repair</option>
                                            <option>Replaced</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- CPU -->
                            <div class="step-content" id="step-5" style="display: none;">
                                <div class="grid-3col">
                                    <!-- CPU Cabinet -->
                                    <div class="input-group">
                                        <label class="input-label">CPU Case Model</label>
                                        <input type="text" class="form-input"
                                            placeholder="Enter Case Model (e.g., Cooler Master Mid-Tower)">
                                    </div>
                                    <div class="input-group">
                                        <label class="input-label">CPU Serial Number</label>
                                        <input type="text" class="form-input" placeholder="Enter Serial Number">
                                    </div>
                                    <div class="input-group">
                                        <label class="input-label">Power Supply Unit (PSU) <span>*</span></label>
                                        <input type="text" class="form-input" placeholder="Enter PSU (e.g., 450W)"
                                            required>
                                    </div>
                                    <div class="input-group">
                                        <label class="input-label">CPU Status <span>*</span></label>
                                        <select class="form-input" required>
                                            <option value="">Select Status</option>
                                            <option>Working</option>
                                            <option>Needs Repair</option>
                                            <option>Replaced</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Connectivity -->
                            <div class="step-content" id="step-6" style="display: none;">
                                <div class="grid-3col">
                                    <!-- Connectivity -->
                                    <div class="input-group">
                                        <label class="input-label">Ethernet MAC Address</label>
                                        <input type="text" class="form-input" placeholder="Enter MAC Address">
                                    </div>
                                    <div class="input-group">
                                        <label class="input-label">WiFi Adapter</label>
                                        <input type="text" class="form-input"
                                            placeholder="Enter WiFi Adapter Model (if any)">
                                    </div>
                                    <div class="input-group">
                                        <label class="input-label">IP Address</label>
                                        <input type="text" class="form-input"
                                            placeholder="Enter IP Address (if static)">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 2. SECOND INPUTS FOR PRINTER OPTION -->
                        <div class="printerInput" id="printerInput" style="display: none;">
                            <div class="tab-header" style="color: #7f8c8d !important; font-weight: 500 !important;">
                                <h4>Printer</h4>
                            </div>
                            <div class="grid-2col">
                                <div class="input-group">
                                    <label class="input-label">Printer Model <span>*</span></label>
                                    <input type="text" class="form-input"
                                        placeholder="Enter Printer Model (e.g. HP LaserJet Pro)" required>
                                </div>
                                <div class="input-group">
                                    <label class="input-label">Printer Quantity </label>
                                    <input type="number" class="form-input" placeholder="Enter Printer Quantity ">
                                </div>
                                <div class="input-group">
                                    <label class="input-label">Printer Type <span>*</span></label>
                                    <select class="form-input" required>
                                        <option value="">Select Printer Type</option>
                                        <option>Inkjet</option>
                                        <option>Laser</option>
                                        <option>Dot Matrix</option>
                                    </select>
                                </div>
                                <div class="input-group">
                                    <label class="input-label">Color Capability <span>*</span></label>
                                    <select class="form-input" required>
                                        <option value="">Select Option</option>
                                        <option>Color</option>
                                        <option>Black & White</option>
                                    </select>
                                </div>
                                <div class="input-group">
                                    <label class="input-label">Connectivity <span>*</span></label>
                                    <select class="form-input" required>
                                        <option value="">Select Connectivity</option>
                                        <option>USB</option>
                                        <option>Network</option>
                                        <option>Wireless</option>
                                    </select>
                                </div>
                                <div class="input-group">
                                    <label class="input-label">Printer Serial Number </label>
                                    <input type="text" class="form-input" placeholder="Enter Printer Serial Number">
                                </div>
                                <div class="input-group">
                                    <label class="input-label">Printer Status <span>*</span></label>
                                    <select class="form-input" required>
                                        <option value="">Status</option>
                                        <option>Active</option>
                                        <option>In-Active</option>
                                        <option>Under Repair</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- SAVE DEVICE BUTTON AT LAST OF INPUTS -->
                    <div class="form-actions">
                        <button type="button" class="btn btn-primary" id="device-added-trigger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-circle-plus">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M8 12h8" />
                                <path d="M12 8v8" />
                            </svg> Add Device
                        </button>
                    </div>
                </div>

            </div>
        </div>
        <!-- CONTENT END of BELOW HEADER  -->
    </div>
    <!-- CONTENT END  -->

    <!-- pop up -->
    <div id="device-added-modal" class="modal-overlay">
        <div class="modal">
            <div class="modal-header">
                <div class="modal-icon icon-green">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        width="20" height="20">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <h2 class="modal-title">Device Added Successfully</h2>
            </div>

            <div class="modal-body">
                <p class="success-text">The device has been successfully added to the inventory system.</p>

                <div class="item-details">
                    <div class="detail-row">
                        <div class="detail-label-new">Device Name:</div>
                        <div class="detail-value" id="device-name">HP PC</div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-label-new">Device ID:</div>
                        <div class="detail-value" id="device-id">PC-2025-101</div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-label-new">Category:</div>
                        <div class="detail-value" id="device-category">PC</div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-label-new">Location:</div>
                        <div class="detail-value" id="device-location">CO-2025-101</div>
                    </div>
                </div>

                <p class="next-steps">You can view and manage this device in the inventory management system. Use the
                    device ID for future reference.</p>
            </div>

            <div class="modal-footer">
                <button class="btnModal btnModal-primary btnModal-green" id="device-done-btnModal">Done</button>
            </div>
        </div>
    </div>
    </div>
    <script>
        document.querySelectorAll('.stepper-item').forEach((item, index) => {
            item.addEventListener('click', () => {
                document.querySelectorAll('.step-content').forEach(content => {
                    content.style.display = 'none';
                });

                document.querySelectorAll('.stepper-item').forEach(step => {
                    step.classList.remove('active');
                });

                const contentId = `step-${index + 1}`;
                const activeContent = document.getElementById(contentId);
                if (activeContent) {
                    activeContent.style.display = 'block';
                    item.classList.add('active');
                }
            });
        });
        document.querySelector('.stepper-item').click();


        function showPC() {
            document.getElementById("pcInput").style.display = "block";
            document.getElementById("printerInput").style.display = "none";
        }
        function showPrinter() {
            document.getElementById("printerInput").style.display = "block";
            document.getElementById("pcInput").style.display = "none";
        }

        // pop up js
        const deviceAddedTrigger = document.getElementById('device-added-trigger');
        const deviceAddedModal = document.getElementById('device-added-modal');
        const deviceAddedCloseBtns = document.querySelectorAll('.device-added-close');
        const deviceAddedDoneBtn = document.getElementById('device-done-btnModal');

        deviceAddedDoneBtn.addEventListener('click', function () {
            deviceAddedModal.style.display = 'none';
        })
        deviceAddedTrigger.addEventListener('click', function () {
            deviceAddedModal.style.display = 'flex';
        });

        deviceAddedCloseBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                deviceAddedModal.style.display = 'none';
            });
        });

        deviceAddedModal.addEventListener('click', function (e) {
            if (e.target === deviceAddedModal) {
                deviceAddedModal.style.display = 'none';
            }
        });
    </script>
</body>

</html>