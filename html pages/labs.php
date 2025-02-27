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
        <li class="active">
          <a href="labs.php">
            <i class="fa-solid fa-network-wired"></i>
            <span>Labs</span>
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
          <a href="inventory.php"> <i class="fa-solid fa-warehouse"></i> Inventory </a>
        </li>
        <li>
          <a href="grievance.php"> <i class="fa-solid fa-paper-plane"></i> Grievance </a>
        </li>
      </ul>
    </div>

    <!-- Main Content Area -->
    <div class="main-content">
      <!-- Header -->
      <div class="header">
        <!-- User Info Section -->
        <div class="sub-heading">
          <span>Lab Management</span>
        </div>
        <div class="user-info">
          <!-- <img alt="User Avatar" src="https://placehold.co/30x30" /> -->
          <i class="fa-solid fa-circle-user"></i><span class="font-rale"> Administrator
          </span>
        </div>
      </div>
      <!-- LABS -->
      <div class="lab-container">
        <!-- Lab Card 1 -->
        <a href="lab-details.php" class="lab-card none">
          <div class="lab-header">
            <h4>CO-A-101</h4>
            <div class="status-chip">
              <span class="highlight1">
                <i class="fas fa-check-circle"></i> Active
              </span>
            </div>
          </div>
          <div class="lab-stats">
            <div class="stat">
              <span class="stat-value">40</span>
              <span class="stat-label">Devices</span>
              <i class="fas fa-users"></i>
            </div>
            <div class="stat">
              <span class="stat-value">8</span>
              <span class="stat-label">Under Maintenance</span>
              <i class="fa-solid fa-screwdriver-wrench"></i>
            </div>
          </div>
          <button class="view-lab-button font-number">View Lab &nbsp;<i class="fa-solid fa-angles-right"></i></button>
        </a>
      
        <!-- Lab Card 2 -->
        <a href="lab-details.php" class="lab-card none">
          <div class="lab-header">
            <h4>CO-B-102</h4>
            <div class="status-chip">
              <span class="highlight1">
                <i class="fas fa-check-circle"></i> Active
              </span>
            </div>
          </div>
          <div class="lab-stats">
            <div class="stat">
              <span class="stat-value">50</span>
              <span class="stat-label">Devices</span>
              <i class="fas fa-users"></i>
            </div>
            <div class="stat">
              <span class="stat-value">12</span>
              <span class="stat-label">Under Maintenance</span>
              <i class="fa-solid fa-screwdriver-wrench"></i>
            </div>
          </div>
          <button class="view-lab-button">View Lab &nbsp;<i class="fa-solid fa-angles-right"></i></button>
        </a>
      
        <!-- Lab Card 3 -->
        <a href="lab-details.php" class="lab-card none">
          <div class="lab-header">
            <h4>CO-C-103</h4>
            <div class="status-chip">
              <span class="highlight1-red">
                <i class="fas fa-times-circle"></i> In Repair
              </span>
            </div>
          </div>
          <div class="lab-stats">
            <div class="stat">
              <span class="stat-value">30</span>
              <span class="stat-label">Devices</span>
              <i class="fas fa-users"></i>
            </div>
            <div class="stat">
              <span class="stat-value">5</span>
              <span class="stat-label">Under Maintenance</span>
              <i class="fa-solid fa-screwdriver-wrench"></i>
            </div>
          </div>
          <button class="view-lab-button">View Lab &nbsp;<i class="fa-solid fa-angles-right"></i></button>
        </a>
      
        <!-- Lab Card 4 -->
        <a href="lab-details.php" class="lab-card none">
          <div class="lab-header">
            <h4>ME-A-101</h4>
            <div class="status-chip">
              <span class="highlight1">
                <i class="fas fa-check-circle"></i> Active
              </span>
            </div>
          </div>
          <div class="lab-stats">
            <div class="stat">
              <span class="stat-value">45</span>
              <span class="stat-label">Devices</span>
              <i class="fas fa-users"></i>
            </div>
            <div class="stat">
              <span class="stat-value">3</span>
              <span class="stat-label">Under Maintenance</span>
              <i class="fa-solid fa-screwdriver-wrench"></i>
            </div>
          </div>
          <button class="view-lab-button">View Lab &nbsp;<i class="fa-solid fa-angles-right"></i></button>
        </a>
      
        <!-- Lab Card 5 -->
        <a href="lab-details.php" class="lab-card none">
          <div class="lab-header">
            <h4>EE-B-102</h4>
            <div class="status-chip">
              <span class="highlight1">
                <i class="fas fa-check-circle"></i> Active
              </span>
            </div>
          </div>
          <div class="lab-stats">
            <div class="stat">
              <span class="stat-value">25</span>
              <span class="stat-label">Devices</span>
              <i class="fas fa-users"></i>
            </div>
            <div class="stat">
              <span class="stat-value">6</span>
              <span class="stat-label">Under Maintenance</span>
              <i class="fa-solid fa-screwdriver-wrench"></i>
            </div>
          </div>
          <button class="view-lab-button">View Lab &nbsp;<i class="fa-solid fa-angles-right"></i></button>
        </a>
      
        <!-- Lab Card 6 -->
        <a href="lab-details.php" class="lab-card none">
          <div class="lab-header">
            <h4>CS-C-103</h4>
            <div class="status-chip">
              <span class="highlight1">
                <i class="fas fa-check-circle"></i> Active
              </span>
            </div>
          </div>
          <div class="lab-stats">
            <div class="stat">
              <span class="stat-value">60</span>
              <span class="stat-label">Devices</span>
              <i class="fas fa-users"></i>
            </div>
            <div class="stat">
              <span class="stat-value">10</span>
              <span class="stat-label">Under Maintenance</span>
              <i class="fa-solid fa-screwdriver-wrench"></i>
            </div>
          </div>
          <button class="view-lab-button">View Lab &nbsp;<i class="fa-solid fa-angles-right"></i></button>
        </a>
      
        <!-- Lab Card 7 -->
        <a href="lab-details.php" class="lab-card none">
          <div class="lab-header">
            <h4>IT-D-104</h4>
            <div class="status-chip">
              <span class="highlight1-red">
                <i class="fas fa-times-circle"></i> In Repair
              </span>
            </div>
          </div>
          <div class="lab-stats">
            <div class="stat">
              <span class="stat-value">35</span>
              <span class="stat-label">Devices</span>
              <i class="fas fa-users"></i>
            </div>
            <div class="stat">
              <span class="stat-value">7</span>
              <span class="stat-label">Under Maintenance</span>
              <i class="fa-solid fa-screwdriver-wrench"></i>
            </div>
          </div>
          <button class="view-lab-button">View Lab &nbsp;<i class="fa-solid fa-angles-right"></i></button>
        </a>
      
        <!-- Lab Card 8 -->
        <a href="lab-details.php" class="lab-card none">
          <div class="lab-header">
            <h4>EC-E-105</h4>
            <div class="status-chip">
              <span class="highlight1">
                <i class="fas fa-check-circle"></i> Active
              </span>
            </div>
          </div>
          <div class="lab-stats">
            <div class="stat">
              <span class="stat-value">55</span>
              <span class="stat-label">Devices</span>
              <i class="fas fa-users"></i>
            </div>
            <div class="stat">
              <span class="stat-value">4</span>
              <span class="stat-label">Under Maintenance</span>
              <i class="fa-solid fa-screwdriver-wrench"></i>
            </div>
          </div>
          <button class="view-lab-button">View Lab &nbsp;<i class="fa-solid fa-angles-right"></i></button>
        </a>
      </div>
      <!-- Lab container end -->
      <!-- Floating Action Button -->
      <a href="addLab.php" class="fab font-number">
        <i class="fas fa-plus"></i> Add New Lab
      </a>
    </div>
  </div>
</body>

</html>