<br><br><br><br> 
 <!-- Sticky Footer -->
 <footer class="sticky-footer">
     <div class="container my-auto">
         <div class="copyright text-center my-auto">
             <span>Musthafa Zaki Pasha & Mujamu Premio</span>
         </div>
     </div>
 </footer>

 </div>
 <!-- /.content-wrapper -->

 </div>
 <!-- /#wrapper -->

 <!-- Scroll to Top Button-->
 <a class="scroll-to-top rounded" href="#page-top">
     <i class="fas fa-angle-up"></i>
 </a>

 <!-- Logout Modal-->
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin keluar?</h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <div class="modal-body">Pilih "Logout" untuk mengakhiri session ini .</div>
             <div class="modal-footer">
                 <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                 <a class="btn btn-primary logout" href="index.php">Logout</a>
             </div>
         </div>
     </div>
 </div>

 <!-- Bootstrap core JavaScript-->
 <script src="../assets/vendor/jquery/jquery.min.js"></script>
 <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Core plugin JavaScript-->
 <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

 <!-- Page level plugin JavaScript-->
 <script src="../assets/vendor/datatables/jquery.dataTables.js"></script>
 <script src="../assets/vendor/datatables/dataTables.bootstrap4.js"></script>

 <!-- Custom scripts for all pages-->
 <script src="../assets/js/sb-admin.min.js"></script>

 <!-- Demo scripts for this page-->
 <script src="../assets/js/demo/datatables-demo.js"></script>


 <?php if (isset($_SESSION['edit']) && $_SESSION['edit'] == 1) { ?>
     <script>
         swal({
             title: 'Edit data!',
             text: 'Data berhasil di edit..',
             type: 'success',
             confirmButtonText: 'OK'
         })
     </script>
 <?php
        $_SESSION['edit'] = 0;
    } ?>

 </body>

 </html>