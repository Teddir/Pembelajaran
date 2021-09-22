<!DOCTYPE html>
<html lang="en">
    <head>
     <?php $this->load->view("admin/_partials/head.php") ?>   
    </head>

    <body class="sb-nav-fixed">
      <?php $this->load->view("admin/_partials/navbar.php") ?>  
        
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php $this->load->view("admin/_partials/sidebar.php") ?> 

            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                       <h3> Book Category </h3>

                        <?php $this->load->view("admin/_partials/breadcrumb.php") ?>

                        <div class="card mb-4">
                        
                        <div class="card-header"><i class="fas fa-table mr-1"></i>List Book Category
                            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#addBook_Category">Add (+)</a>
                        </div>

                        <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th widht="10%">Book Category ID</th>
                                                <th widht="35%">Name</th>
                                                <th widht="20%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                           $x=1;
                                           foreach ($book_category->result_array() as $i) :
                                                $bookcategoryid = $i['book_category_id'];
                                                $name = $i['name'];
                                                ?>
                                                <tr>
                                                    <td> <?php echo $x; ?> </td>
                                                    <td> <?php echo $name; ?> </td>
                                                    
                                                    <td>
                                                        <a class="btn btn-primary" data-toggle="modal" data-target="#editBook_Category<?php echo $bookcategoryid; ?>">Edit </a>
                                                        <a class="btn btn-danger" data-toggle="modal" data-target="#deleteBook_Category<?php echo $bookcategoryid; ?>">Delete </a>
                                                    
                                                    </td>
                                                </tr>
                                                <?php
                                                $x++;
                                            endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                    </div>
                </main>
                
                

            </div>
        </div>
        <?php $this->load->view("admin/_partials/footer.php"); ?>

        <?php $this->load->view("admin/book_category/modal_book_category.php"); ?>

    </body>

    <?php $this->load->view("admin/_partials/modal.php") ?>
        <?php $this->load->view("admin/_partials/js.php") ?>
</html>
