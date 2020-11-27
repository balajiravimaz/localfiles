<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="sass/main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>

<body>
    <section id="sidemenu">
        <div class="vitap-logo">
            <img src="img/l1.jpg" />
        </div>
        <nav>
            <a href="#" class="active"><i class="fa fa-dashboard"></i><span class="menu-close">Dashboard</span>
            </a>
            <a href="#"><i class="fa fa-users"></i>
                <span class="menu-close">Faculty</span></a>
            <a href="add.html"><i class="fa fa-plus"></i> <span class="menu-close">Add</span>
            </a>
            <a href="edit.html"><i class="fa fa-edit"></i> <span class="menu-close">Edit</span></a>
            <a href="#"><i class="fa fa-trash-o"></i>
                <span class="menu-close"> Delete</span></a>
            <a href="#"><i class="fa fa-sign-out"></i><span class="menu-close">Logout</span></a>
        </nav>
    </section>
    <div class="side-head">
        <header id="header">
            <div class="search">
                <i class="fa fa-bars" id="bars"> </i>
                <!-- <i class="fa fa-search"> </i>
            <input type="text" name="search" placeholder="Search here..." /> -->
            </div>
            <div class="user-info">
                <a href="#" class="add">+ Add</a>
                <a href="#" class="noti">
                    <i class="fa fa-bell-o"> </i> <span class="circle">3</span></a>
                <a href="#">
                    <div class="user-img"></div>
                    <i class="fa fa-caret-down"></i>
                </a>
            </div>
        </header>

        <section id="area-content">
            <div class="heading">
                <h1>Remove Faculty</h1>
                <p></p>
            </div>
            <div class="container">
                <form method="post" enctype="multipart/form-data" class="delete">
                    <div class="col-md-3">
                        <input type="text" id="search" name="search" placeholder="Enter Faculty name">
                    </div>
                    <div class="col-md-3">
                        <button type="submit" name="btn" id="btn">Find</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
    <script src="js/script.js"></script>
</body>

</html>