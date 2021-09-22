<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav <?php echo $this->uri->segment(2) == ''? 'active': ''?>">
                            <div class="sb-sidenav-menu-heading text-success">Core</div>
                            <a class="nav-link" href="<?php echo base_url ("/admin")?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="<?php echo base_url ("welcome/about")?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-home "></i></div>
                                 About Us
                            </a>
                            <a class="nav-link" href="<?php echo base_url ("welcome/contact")?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-phone"></i></div>
                                 Contact Us
                            </a>
                            
                            <a class="nav-link" href="<?php echo site_url ('admin/author')?>"> 
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                             Author
                            </a>

                            <a class="nav-link" href="<?php echo base_url ("admin/book_category")?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                 Book Category 
                             </a>
                            

                            <div class="sb-sidenav-menu-heading text-success">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Kumpulan Tugas
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?php echo base_url ("welcome/datadiri")?>"> Data Diri </a>
                                    <a class="nav-link" href="pengalaman">Pengalaman Organisasi</a>
                                    <a class="nav-link" href="container">Tugas Container</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            
                            <div class = "sb-sidenav-menu-heading text-success"> Grocery CRUD </div>
                            <a class = "nav-link" h-ref="charts.html">
                                <div class = "sb-nav-link-icon"><i class = "fas fa-chart-area"></i></div>
                                Customers
                            </a>
                            <a class = "nav-link" h-ref="charts.html">
                                <div class = "sb-nav-link-icon"><i class = "fas fa-chart-area"></i></div>
                                Orders 
                            </a>
                            <a class = "nav-link" h-ref="charts.html">
                                <div class = "sb-nav-link-icon"><i class = "fas fa-chart-area"></i></div>
                                Products
                            </a>
                            <a class = "nav-link" h-ref="charts.html">
                                <div class = "sb-nav-link-icon"><i class = "fas fa-chart-area"></i></div>
                                Office 
                            </a>
                            <a class = "nav-link" h-ref="charts.html">
                                <div class = "sb-nav-link-icon"><i class = "fas fa-chart-area"></i></div>
                                Employees 
                            </a>
                            <a class = "nav-link" h-ref="charts.html">
                                <div class = "sb-nav-link-icon"><i class = "fas fa-chart-area"></i></div>
                                Film 
                            </a>
                            <a class = "nav-link" h-ref="charts.html">
                                <div class = "sb-nav-link-icon"><i class = "fas fa-chart-area"></i></div>
                                Multigrid [BETA]
                            </a>

                            

                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading text-success">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>