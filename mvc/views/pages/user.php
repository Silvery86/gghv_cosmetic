<div id="content" class="main-content-wrapper">
            
            <!-- Start of My Account Wrapper -->
            <div class="my-account-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <main id="primary" class="site-main">
                                <div class="user-dashboard">
                                    <div class="user-info">
                                        <div class="row align-items-center no-gutters">
                                           <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                                               <div class="single-info">
                                                <?php
                                                
                                                ?>
                                                   <p class="user-name">Hello <span><?=$_SESSION['email']?></span></p>
                                               </div>
                                           </div>
                                           <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                                               <div class="single-info">
                                                   <p>Need Assistance? Customer service at <a href="#">gghv_cosmestic@gmail.com</a></p>
                                               </div>
                                           </div>
                                           <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                                               <div class="single-info">
                                                   <p>E-mail them at <a href="#">support@example.com</a></p>
                                               </div>
                                           </div>
                                           <div class="col-12 col-sm-12 col-md-6 col-lg-2 col-xl-3">
                                               <div class="single-info justify-content-lg-center">
                                                   <a class="btn btn-secondary" href="viewcart">View Cart</a>
                                               </div>
                                           </div>
                                       </div> <!-- end of row -->
                                    </div> <!-- end of user-info -->

                                    <div class="main-dashboard">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-2">
                                                <ul class="nav flex-column dashboard-list" role="tablist">
                                                    
                                                    <li> <a class="nav-link" data-bs-toggle="tab" href="#orders">Orders</a></li>
                                                    
                                                    <!-- <li><a class="nav-link" data-bs-toggle="tab" href="#address">Addresses</a></li>
                                                    <li><a class="nav-link" data-bs-toggle="tab" href="#account-details">Account details</a></li> -->
                                                    <li><a class="nav-link" href="logout">logout</a></li>
                                                </ul> <!-- end of dashboard-list -->
                                            </div>

                                            <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                                                <!-- Tab panes -->
                                                <div class="tab-content dashboard-content">
                                                    

                                                    <div id="orders" class="tab-pane fade">
                                                        <h3>Orders</h3>
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Order No.</th>
                                                                        <th>Customer name</th>
                                                                        <th>Address</th>
                                                                        <th>Note</th>
                                                                        <th>Total</th>
                                                                        <th>Action</th>                 
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php
                                                                
                                                                if(!$data["order"][0]["order_id"]){
                                                                ?>
                                                                <h1>Bạn không có đơn hàng nào! <a href="products">Đặt hàng tại đây</a></h1>
                                                                <?php    
                                                                }else{
                                                                
                                                                    

                                                                    foreach($data["order"] as $order){
                                                                    
                                                                
                                                                ?>
                                                                    <tr>
                                                                        <td><?=$order["order_id"]?></td>
                                                                        <td><?=$order["customer_name"]?></td>
                                                                        <td><?=$order["customer_address"]?></td>
                                                                        <td><?=$order["note"]?></td>
                                                                        <td><?=number_format($order["total_money"])?></td>
                                                                        <td><a class="btn btn-secondary" href="user/showorder/<?=$order["order_id"]?>">show</a></td>
                                                                    </tr>
                                                                <?php
                                                                    }
                                                                
                                                            }
                                                                ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div> <!-- end of tab-pane -->

                                                   

                                                                                        
                                                </div>
                                            </div>
                                        </div> <!-- end of row -->
                                    </div> <!-- end of main-dashboard -->
                                </div> <!-- end of user-dashboard -->
                            </main> <!-- end of #primary -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div>
            <!-- End of My Account Wrapper -->
        </div>