<div class="container">
    <div class="modal fade" id="popUpWindow">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title" style="text-align: center; color: blue;"><b>Welcome to the website.</b></h3>
                </div>
                <!-- body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="panel panel-default" id="home3">
                            <div class="panel-heading" style="background-color:#337AB7; color:white;">
                                <h2 style="margin-top:0px; margin-bottom:0px; text-align: center;">Thông tin cá nhân</h2>
                            </div>
                            <div class="panel-body">
                            <?php
                                if(isset(($_SESSION['user_name']))){
                                ?>
                                    <div class="panel-body">
                                    <h3><span class="glyphicon glyphicon-user"></span> <?=$_SESSION['user_name']?></h3>
                                    <div class="break"></div>
                                    
                                    <?php
                                        if($_SESSION['per'] == 'sv'){
                                            ?>
                                            <h4><span class= "glyphicon glyphicon-copyright-mark"></span> MSSV : <?=$_SESSION['mssv']?></h4>
                                            <?php
                                        }
                                        if($_SESSION['per'] == 'gv'){
                                            ?>
                                            <h4><span class= "glyphicon glyphicon-copyright-mark"></span> Mã GV : <?=$_SESSION['magv']?></h4>
                                            <?php
                                        }
                                    ?>
                                    
                                    <h4><span class="glyphicon glyphicon-envelope"></span> Email : <?=$_SESSION['email']?></h4>
                                    <h4><span class="glyphicon glyphicon-phone-alt"></span> Điện thoại : 0969696969</h4>                                  
                                    </div>
                                <?php
                            }
                            ?>
                            <p style="margin-top: 70px;">...</p>
                            <a href="change_info.php" class="btn btn-success" role="button"  style="padding: 0 28px 0 28px; margin-top: -22px;">Đổi thông tin</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>