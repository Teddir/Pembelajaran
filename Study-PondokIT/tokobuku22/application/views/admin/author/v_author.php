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
                       <h3> Author </h3>

                        <?php $this->load->view("admin/_partials/breadcrumb.php") ?>

                        <div class="card mb-4">
                        
                        <div class="card-header"><i class="fas fa-table mr-1"></i>List Author
                            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#addAuthor">Add (+)</a>
                        </div>

                        <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th widht="10%">ID</th>
                                                <th widht="35%">Fullname</th>
                                                <th widht="35%">Email</th>
                                                <th widht="20%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                           $x=1;
                                           foreach ($author->result_array() as $i) :
                                                $id = $i['author_id'];
                                                $fullname = $i['full_name'];
                                                $email = $i['email'];
                                                ?>
                                                <tr>
                                                    <td> <?php echo $x; ?> </td>
                                                    <td> <?php echo $fullname; ?> </td>
                                                    <td> <?php echo $email; ?> </td>
                                                    <td>
                                                        <a class="btn btn-primary" data-toggle="modal" data-target="#editAuthor<?php echo $id; ?>">Edit </a>
                                                        <a type="button" data-toggle="modal" data-target="#deleteAuthor<?php echo $id; ?>" class="btn btn-danger">Delete </a>
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

         <?php $this->load->view("admin/author/modal_author.php"); ?>
        

        

    </body>

    <?php $this->load->view("admin/_partials/modal.php") ?>

        <?php $this->load->view("admin/_partials/js.php") ?>
</html>
