<div class="sidebar">            
                                <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <?php  if(($dataAdmin->idlevel)=='2'){ ?>
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-user">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Master User</a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="other-login.html"><i class="icon-user"></i>Administrator </a></li>
                                        <li><a href="other-user-profile.html"><i class="icon-user"></i>Author </a></li>
                                        <li><a href="other-user-listing.html"><i class="icon-user"></i>Supervisor</a></li>
                                    </ul>
                                </li> 
                                <?php } ?> 
                                 <?php  if((($dataAdmin->idlevel)=='2')||(($dataAdmin->idlevel)=='3')){ ?>
                                 <li><a class="collapsed" data-toggle="collapse" href="#togglePages2"><i class="menu-icon icon-book">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Transaksi</a>
                                    <ul id="togglePages2" class="collapse unstyled">
                                        <li><a href="#"><i class="icon-user"></i>Penjualan </a></li>
                                        <li><a href="#"><i class="icon-user"></i>Pembelian</a></li>
                                    
                                    </ul>
                                </li>
                                <?php } ?>  
                                  <?php  if(($dataAdmin->idlevel)=='2'){ ?> 
                                <li><a href="#"><i class="menu-icon icon-cog"></i>Pengaturan </a></li>
                                <?php } ?>
                                <li><a href="#"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                            
                        </div>
                        <br><br><br><br><br><br><br><br><br>