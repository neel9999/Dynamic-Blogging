<?php

@$admin_id=$_REQUEST['id'];
$sel="select * from `admin` where admin_id = '".$admin_id."'";
$qry=mysqli_query($con,$sel);
$row=mysqli_fetch_assoc($qry);

if (isset($_REQUEST['id'])) 
{
    $action="update";
}
else
{
    $action="insert";
}

?>


    <div id="content">

        <div class="container">

            <div id="page-title" class="clearfix">

                <ul class="breadcrumb">
                    <li>
                        <a href="default.htm">Home</a> <span class="divider">/</span>
                    </li>
                    <li>
                        <a href="#">Components</a> <span class="divider">/</span>
                    </li>
                    <li class="active">Form Styles</li>
                </ul>

            </div>
            <!-- /.page-title -->

            <div class="row">

                <div class="span12">

                    <div id="horizontal" class="widget widget-form">

                        <div class="widget-header">
                            <h3>
                                <i class="icon-pencil"></i>
                                Horizontal Layout	      					
                            </h3>
                        </div>
                        <!-- /widget-header -->

                        <div class="widget-content">

                            <form class="form-horizontal" method="post" action="index.php?page=admin_action" enctype="multipart/form-data">
                                <fieldset>
                                    <input type="hidden" name="action" value="<?php echo $action?>">
                                    <input type="hidden" name="admin_id" value="<?php echo $row['admin_id']?>">

                                    <div class="control-group">
                                        <label class="control-label" for="input01">Name</label>
                                        <div class="controls">
                                            <input type="text" name="name" value="<?php echo $row['name']?>" class="input-large" placeholder="Enter Your Name..." id="input01">
                                        </div>
                                    </div>


                                      <div class="control-group">
                                        <label class="control-label" for="input01">Email</label>
                                        <div class="controls">
                                            <input type="email" name="email" class="input-large" value="<?php echo $row['email']?>" placeholder="Enter Your Email..." id="input01">
                                        </div>
                                    </div>


                                      <div class="control-group">
                                        <label class="control-label" for="input01">Password</label>
                                        <div class="controls">
                                            <input type="password" name="password" value="<?php echo $row['password']?>" class="input-large" placeholder="Enter Your Password..." id="input01">
                                        </div>
                                    </div>


                                    <div class="control-group">
                                        <label class="control-label">Gender</label>
                                        <div class="controls">
                                            <label class="radio">
                                                <input type="radio" name="gender" id="optionsRadios1" value="male" checked="">
                                                Male
                                            </label>
                                            <label class="radio">
                                                <input type="radio" name="gender" id="optionsRadios2" value="female">
                                               Female
                                            </label>
                                        </div>
                                    </div>


                                    <div class="control-group">
                                        <label class="control-label" for="input01">Contact</label>
                                        <div class="controls">
                                            <input type="text" name="contact" class="input-large" placeholder="Enter Your Contact..." id="input01">
                                        </div>
                                    </div>

                                    

                                    <div class="control-group">
                                        <label class="control-label" for="fileInput">Profile</label>
                                        <div class="controls">
                                            <input class="input-file" name="profile" id="fileInput" type="file">
                                        </div>
                                    </div>

                                        
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-primary btn-large">Save changes</button>
                                        <button class="btn btn-large">Cancel</button>
                                    </div>
                                </fieldset>
                            </form>
            <?php

                    echo "Today is " . date("Y/m/d");

            ?>

                        </div>
                        <!-- /widget-content -->

                    </div>


                </div>
                <!-- /span8 -->

            </div>
            <!-- /row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /#content -->


</body>
</html>
