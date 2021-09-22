<div class = "modal fade" id = "addAuthor" role = "dialog">
    <div class = "modal-dialog">
        <form class = "form" action = "<?php echo base_url ('/admin/author/add'); ?> "method = "post">
            <div class = "modal-content">

            <div class = "modal-header">
                <h5 class = "modal-title"> Add Author </h5>
                <button type = "button" class = "Close" data-dismiss = "modal"> &times; </button>
        </div>

        <div class = "modal-body">
            <div class = "form-group">
                <div class = "row">
                    <label for = "title" class = "col-sm-2 col-form-label"> Author's Fullname </label>
                    <div class = "col-sm-10">
                        <input type = "text" class = "form-control" name = "i_fullname" placeholder = "Mark Zurkerburg" required>
        </div>
        </div>
        </div>

        <div class = "form-group">
            <div class = "row">
                <label for ="title" class = "con-sm-2 col-form-label"> Author's Email </label>
                <div class = "col-sm-10">
                    <input type = "email" class = "form-control" name = "i_email" placeholder= "markzukerburg@gmail.com" required>
        </div>
        </div>
        </div>
        </div>

        <div class ="modal-footer">
            <button type = "button" class = "btn btn-danger" data-dismiss = "modal"> Cancel </button>
            <button type = "submit" class = "btn btn-primary"> Add </button>
        </div>
        </div>
        </form>
        </div>
        </div>

<?php
foreach ($author -> result_array () as $i) :
    $id = $i ['author_id'];
    $fullname = $i['full_name'];
    $email = $i ['email'];
    ?>


    <div class = "modal fade" id = "editAuthor <?php echo $id; ?>" role = "dialog">
    <div class = "modal-dialog">
        <form class = "form-horisontal" action = "<?php echo base_url ('admin/author/edit/'); ?>" method = "post">
         <div class = "modal-content">
             <div class = "modal-header">
                 <h5 class = "modal-title"> Edit Author </h5>
                 <button type = "button" class = "Close" datta-dismiss = "modal"> &times; </button>
</div>

<div class="modal-body">
    <div class = "form-group">
        <div class = "row">
            <label for = "title" class = "col-sm-2 col-form-label"> Author's Fullname </label>
            <div class = "col-sm-10">
                <input type = "text" class ="form-control" name = "i_fullname" placeholder ="Mark Zugerburg"> value = " <?php echo $fullname ; ?>"
</div>
</div>
<div class = "form-group">
    <div class = "row">
        <label for = "title" class = "col-sm-2 col-form-label"> Email </label>
        <div class = "col-sm-10">
            <input type = "email" class = "form-control" name = "i_email" placeholder = "markzukerburg@gmail.com"> value = " <?php echo $email ; ?>"
</div>
</div>
</div>
</div>

<div class = "modal-footer">
    <button type = "button" class = "btn btn-danger" data-dismiss = "modal"> Cancel </button>
    <button type = "submit" class = "btn btn-primary" > Edit </button>>
</div>
</div>
</form>
</div>
<?php endforeach ; ?>

<?php
foreach ($author->result_array () as $i):
    $id = $i ['author_id'];
    $b = $i ['full_name'];
    $c = $i ['email'];
    ?>


    <div class ="modal fade" id = "deleteAuthor" <?php echo $id; ?> role = "dialog">
    <div clas = "modal-dialog">
        <form class = "form-horizontal" action = "<?php echo base_url ('/admin/author/delete' . $id); ?>" method = "post">
        <div class = "modal-content">
            <div class = "modal-header">
                <h5 class = "modal-title" id = "exampleModalLabel"> Ready to Delete </h5>
                <button class = "close" type = "button" data-dismiss = "modal" arial-label = "Close">
                    <span aria-hidden = "true"> > x </span>
</button>
</div>
    <div class = "modal-body" > Pilih "Delete" untuk menghapus author dengan nama <?php echo $b ; ?> </div>
    <div class = "modal-footer">
        <button class = "btn btn-secondary" type = "button" data-dismiss = "modal" > Cancel </button>
        <button type = "submit" class = "btn btn-danger"> Delete </button>
</div>
</div>
</form>
</div>
</div>
<?php endforeach ; ?>