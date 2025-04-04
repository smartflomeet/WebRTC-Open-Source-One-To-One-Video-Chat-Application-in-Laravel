<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sample App: 1-To-1 Conference using Laravel</title>
    <link rel="shortcut icon" type="image/png" href="img/logo-black.svg"/>
    <link rel="stylesheet" href="css/jquery.toast.css">
    <link rel="stylesheet" href="css/style.min.css">
</head>

<body>
<body>
<div class="container">
    <section id="content">
        <div class="loading">Loading....</div>
        <div class="login_join_div" style="display: block;padding-bottom: 25px;">
            <form action="" id="login_form">
                <h1><img src="img/logo.png" style="max-width:140px;"></h1>
                <div>
                    <input type="text" placeholder="Enter Name" id="nameText" name="nameText">
                </div>
                <div>
                    <input type="text" placeholder="Enter Room ID" id="roomName" name="roomName">
                </div>
                <div class="row col-md-12" style="margin-top: 10px;text-align: left;margin-left: 9px;font-size:13px">

                    <input type="checkbox" name="agree" style="height: 15px;width:15px;" checked>
                    <label>I agree to <a target="_blank" href="#">Terms of Use</a> and
                        <a target="_blank" href="#">Privacy Policy</a>
                    </label>

                </div>
                <div class="row col-md-12" style="margin-top: 20px;">

                    <div class="col-md-6" style="">
                        <input type="submit" value="Join" class="login_buttons" id="joinRoom">
                    </div>
                    <div id="create_room_div" class="col-md-12" style="margin-top: 10px;">
                        <span style="font-size: 12px;color: #777;margin-top: 32px;">Don't have a Room ID? <a
                                href="javascript:void(0)" id="create_room" class="">Create here</a></span>
                    </div>
                </div>
                <span id="message" style="color: red"></span>
                <br><br><br>
            </form><!-- form -->
        </div>
    </section>
    <div class="footer" style="position: relative;margin-top:30px;text-align:center;color:white">
        &copy; 2025 Tata Teleservices Ltd.
    </div>
    <!-- content -->
</div><!-- container -->
</body>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/jquery.toast.js"></script>
<script src="js/index.js"></script>
<script src="js/room.js"></script>
</body>
</html>
