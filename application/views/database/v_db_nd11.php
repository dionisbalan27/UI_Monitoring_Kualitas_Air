
		<div class="content">
	    	<div class="m-b-md">
	    	    &nbsp; &nbsp; &nbsp;
			<h4>History Data Kualitas Air</h4>

     
  <!-- Favicons -->
  <link href="<?= base_url('assets/img/favicon.png');?>" rel="icon">
  <link href="<?= base_url('assets/img/apple-touch-icon.png');?>" rel="apple-touch-icon">

  <link href="<?= base_url('assets/vendor/simple-datatables/style.css');?>" rel="stylesheet">

  
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
            <div class="dropdown">
  <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  NODE 11
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
  <a class="dropdown-item" href="<?= site_url('c_database');?>">NODE 1</a>
    <a class="dropdown-item" href="<?= site_url('c_database/node2');?>">NODE 2</a>
    <a class="dropdown-item" href="<?= site_url('c_database/node3');?>">NODE 3</a>
    <a class="dropdown-item" href="<?= site_url('c_database/node4');?>">NODE 4</a>
    <a class="dropdown-item" href="<?= site_url('c_database/node5');?>">NODE 5</a>
    <a class="dropdown-item" href="<?= site_url('c_database/node6');?>">NODE 6</a>
    <a class="dropdown-item" href="<?= site_url('c_database/node7');?>">NODE 7</a>
    <a class="dropdown-item" href="<?= site_url('c_database/node8');?>">NODE 8</a>
    <a class="dropdown-item" href="<?= site_url('c_database/node9');?>">NODE 9</a>
    <a class="dropdown-item" href="<?= site_url('c_database/node10');?>">NODE 10</a>
    <a class="dropdown-item" href="<?= site_url('c_database/node12');?>">NODE 12</a>
  </div>
</div>

              <h5 class="card-title"><center>Data Kualitas Air</center></h5>
              <br/> 
              <br/> 
              
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Oksigen</th>
                    <th scope="col">Suhu</th>
                    <th scope="col">Ph </th>
                  </tr>
                </thead>
                <tbody>
                <?php
                $no=1;
                foreach ($data_nd11 as $dat) {?>
                  <tr>
                    <th scope="row"><?= $no; ?></th>
                    <td><?php echo $dat->date; ?></td>
                    <td><?php echo $dat->time; ?></td>
                    <td><?php echo $dat->SENT_NUMBER_1; ?></td>
                    <td><?php echo $dat->SENT_NUMBER_2; ?></td>
                    <td><?php echo $dat->SENT_NUMBER_3; ?></td>
                  </tr>
                  <?php $no=$no+1;
                  } ?> 
                 
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
 

  <!--   Core JS Files   -->
  <script src="<?= base_url('assets/js/core/jquery.min.js');?>"></script>
  <script src="<?= base_url('assets/js/core/popper.min.js');?>"></script>
  <script src="<?= base_url('assets/js/core/bootstrap.min.js');?>"></script>
  <script src="<?= base_url('assets/js/plugins/perfect-scrollbar.jquery.min.js');?>"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="<?= base_url('assets/js/plugins/chartjs.min.js');?>"></script>
  <!--  Notifications Plugin    -->
  <script src="<?= base_url('assets/js/plugins/bootstrap-notify.js');?>"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url('assets/js/now-ui-dashboard.min.js?v=1.5.0');?>" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?= base_url('assets/demo/demo.js');?>"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="<?= base_url('assets/vendor/tinymce/tinymce.min.js');?>"></script>
  <script src="<?= base_url('assets/vendor/simple-datatables/simple-datatables.js');?>"></script>


  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/vendor/js/main.js');?>"></script>

</body>

</html>