<!DOCTYPE html>
<html>
<head>
    <!-- Page Title -->
    <title>Paws Heaven Product Description Latest</title>

    <!-- Common Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Import CSS Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="product-description-latest.css" rel="stylesheet">
    <link href="manager-adminacc-management.css" rel="stylesheet">

    <!-- Import jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- Display Header & Footer -->
    <script>
        $(function(){ 
            $("#header").load("common/header.php");
            $("#footer").load("common/footer.php");
        });
    </script>

</head>
<body>

<!-- Header -->
<div id="header"></div>

<!-- Main Content Area -->
<div class="content-area">

    <div class="taskbarHolder">
        <!-- manager taskbar -->
        <div class="managerTaskbar">
            <!-- taskbar title -->
            <div class="taskbarTitle">
                Task Manager
            </div>
            
            <!-- taskbar -->
            <div class="taskbar">
                <!-- signout button -->
                <a href="#">
                    <button class="signoutBTN">
                        Sign Out
                    </button>
                </a>
            </div>
        </div>

        <!-- admin account management -->
        <div class="accountManagement">
            <!-- title -->
            <div class="accountTitle">
                Admin Accounts
            </div>

            <!-- search bar -->
            <div class="searchbarContainer">
                <input type="text" class="searchbar" placeholder="Search...">
                <button class="searchBTN">🔎</button>
            </div>

            <!-- accounts -->
            <div class="accountContainer">
                <div class="profilePictureContainer">
                    <img src="image/mr.KingKong.png" alt="mr.KingKong" width="130px" height="130px">
                </div>
                
                <!-- profile info -->
                <div class="profileInfo">
                    <!-- staff name -->
                    <div class="profileName">
                        KingKong
                    </div>
                </div>
                <!-- profile company info -->
                <div class="companyInfo">
                    <!-- staff ID -->
                    <div class="profileID">
                        W003
                    </div>
                    <!-- staff position -->
                    <div class="profilePosition">
                        STAFF
                    </div>
                </div>

                <!-- profile manage button -->
                <div class="profileManage">
                    <!-- edit button -->
                    <a href="#">
                        <button class="editBTN">
                            Edit ✏️
                        </button>
                    </a>

                    <!-- delete button -->
                    <a href="#">
                        <button class="deleteBTN">
                            Delete 🗑️
                        </button>
                    </a>

                </div>
            </div>
        </div>
    </div>

</div>
<!-- //Main Content Area -->

<!-- Javascript -->
<script>

</script>

</body>

<!-- Footer -->
<div id="footer"></div>
</html>