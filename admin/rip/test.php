 <?php 
require_once('include/head.php');
session_start();
require_once('include/footer.php');
 ?>
 
 
<script src="//unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

 

 <a id="delete" href="delete.php?>" class="btn btn-sm btn-success">Delete</a>

 
<script>  
         $(document).on("click", "#delete", function(e){e.preventDefault();
             var link = $(this).attr("href");
                swal({
                  title: "Are you Want to delete?",
                  text: "Once Delete, This will be Permanently Delete!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                       window.location.href = link;
                  } else {
                    swal("Safe Data!");
                  }
                });
            });
    </script>