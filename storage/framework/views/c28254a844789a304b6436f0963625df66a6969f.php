            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-sm-7 hidden-xs">
                        <div style="margin-top:10px; color:white;">
                        <marquee>
                        โรงเรียนอนุบาลนานาชาติตากสินระยอง (Anuban International School Taksin Rayong)
                        </marquee>
                        </div>
                        <!--
                            <div class="header-top-info"> 
                                <span>Open hours: 8.00-16.00 Mon-Fri </span>
                                <div class="social-links" style="margin-top:10px;">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a> 
                                </div>
                            </div>
                        --> 
                        </div>
                        <div class="col-md-5 col-sm-5">
                            <div class="header-login-register">
                                <ul class="login">
                                    <li>
                                        <a href="#"><i class="fa fa-language"></i>Language</a> 
                                        <div class="login-form"> 
                                            <h4><?php echo e(__('menu.selectlanguage')); ?></h4>  
                                            <div class="row">
                                                <div class="col-sm-6" style="text-align:center;"> 
                                                    <a href="<?php echo e(url('lang/th')); ?>">
                                                    <img src="<?php echo e(asset('img/th.png')); ?>" width="50">
                                                    </a> 
                                                    <?php echo e(__('menu.thailang')); ?>

                                                </div>
                                                <div class="col-sm-6" style="text-align:center;">
                                                    <a href="<?php echo e(url('lang/en')); ?>">
                                                    <img src="<?php echo e(asset('img/en.png')); ?>" width="50">
                                                    </a> 
                                                    <?php echo e(__('menu.englang')); ?>

                                                </div>  
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="register">
                                    <li>
                                        <a href="#"><i class="fa fa-lock"></i><?php echo e(__('menu.administrator')); ?></a>
                                        <div class="register-form">
                                            <h4><?php echo e(__('menu.login')); ?></h4>
                                            <span>Please login.</span> 
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  