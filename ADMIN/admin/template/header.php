 <div id="header">

        <div class="container">

            <h1><a href="default.htm">Project</a></h1>

            <div id="info">

                <a href="javascript:;" id="info-trigger">
                    <i class="icon-cog"></i>
                </a>

                <div id="info-menu">

                    <div class="info-details">
                        <?php
                      
                      $sel="select * from `admin` where admin_id='".$_SESSION['admin_id']."'";
                      $qry=mysqli_query($con,$sel);
                      $row=mysqli_fetch_assoc($qry);

                        ?>

                        <h4>Welcome back,<?php echo $row['name'];?> </h4>

                        <p>
                            Logged in as Admin.
						<br>
                            You have <a href="javascript:;">5 messages.</a>
                        </p>

                    </div>
                    <!-- /.info-details -->

                    <div class="info-avatar">

                        <img src="<?php echo 'upload/admin/'.$row['profile']?>" alt="avatar">
                    </div>
                    <!-- /.info-avatar -->

                </div>
                <!-- /#info-menu -->

            </div>
            <!-- /#info -->

        </div>
        <!-- /.container -->

    </div>