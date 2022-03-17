
<?php  //inisialisasi variabel 
    $oksigen= new ArrayObject(array());//node1
    $suhu=new ArrayObject(array());
    $ph=new ArrayObject(array());
     ?>
     
     <div class="content">
	    	<div class="m-b-md">
        <h3></h3>
			<h3>Monitoring Kualitas Air</h3>
      		</div>
        <div class="row">
        <!---div col-lg-6---->
          <div class="col-lg-6">
            
            <div class="card card-chart">
            <div class="card-header">
            Perubahan Oksigen | PH | Suhu |
            <div class="dropdown">
  <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  NODE 4
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <a class="dropdown-item" href="<?= site_url('c_monitoring');?>">NODE 1</a>
    <a class="dropdown-item" href="<?= site_url('c_monitoring/node2');?>">NODE 2</a>
    <a class="dropdown-item" href="<?= site_url('c_monitoring/node3');?>">NODE 3</a>
    <a class="dropdown-item" href="<?= site_url('c_monitoring/node5');?>">NODE 5</a>
    <a class="dropdown-item" href="<?= site_url('c_monitoring/node6');?>">NODE 6</a>
    <a class="dropdown-item" href="<?= site_url('c_monitoring/node7');?>">NODE 7</a>
    <a class="dropdown-item" href="<?= site_url('c_monitoring/node8');?>">NODE 8</a>
    <a class="dropdown-item" href="<?= site_url('c_monitoring/node9');?>">NODE 9</a>
    <a class="dropdown-item" href="<?= site_url('c_monitoring/node10');?>">NODE 10</a>
    <a class="dropdown-item" href="<?= site_url('c_monitoring/node11');?>">NODE 11</a>
    <a class="dropdown-item" href="<?= site_url('c_monitoring/node12');?>">NODE 12</a>
  </div>
</div>
              </br>     </br>   </br>  
             </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="lineChart"></canvas>
                </div>
                </div>
                  
              <div class="card-footer">
                <div class="stats">
                  &nbsp;
                </div>
              </div>
                </div>
             </div>
          <!----div col-lg-6--->
              <div class="col-lg-6">
                 <table class='table table-light table-striped'>
	<thead class='text-primary'>
  <th><b>
                       Tanggal</b>
                      </th>
                      <th><b>
                       Waktu</b>
                      </th>
                      <th><b>
                       Kadar Oksigen</b>
                      </th>
                      <th><b>
                        PH</b>
                      </th>
                      <th><b>
                       Suhu</b>
                      </th>
                    </thead>
                    <tbody>
    <tr class='info'>
	<?php
$data=$data_nd4;
foreach ($data as $dat) {?>
<td><?php echo $dat->date; ?></td>
<td><?php echo $dat->time; ?></td>
	<td><?php echo $dat->SENT_NUMBER_1; ?></td>
	<td><?php echo $dat->SENT_NUMBER_2; ?></td>
  <td><?php echo $dat->SENT_NUMBER_3; ?></td>
    </tr>
<?php
$oksigen->append($dat->SENT_NUMBER_1);
$suhu->append($dat->SENT_NUMBER_2);
$ph->append($dat->SENT_NUMBER_3);}

?>
	</tbody>
</table>
<br>
                  </div>
             </div>
       
         </div>
         <!--div content --->
       </div>
        <!--div main panel --->
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
  <script>
          var ctxL = document.getElementById("lineChart").getContext('2d');
    var myLineChart = new Chart(ctxL, {
      type: 'line',
      data: {
        labels: [0, 2, 4, 6, 8, 10],
        datasets: [{
          label: "Oksigen",
          data: [<?php echo $oksigen[0]; ?>, <?php echo $oksigen[1]; ?>, <?php echo $oksigen[2]; ?>],
          backgroundColor: [
            'rgba(200, 99, 132, 7)',
          ],
          borderColor: [
            'rgba(200, 99, 132, 7)',
          ],
          fill: false,
          borderWidth: 2,
          stepped: false
        },
        {
          label: "Suhu",
          data: [<?php echo $suhu[0]; ?>, <?php echo $suhu[1]; ?>, <?php echo $suhu[2]; ?>],
          backgroundColor: [
            'rgba(0, 10, 130, .7)',
          ],
          borderColor: [
            'rgba(0, 10, 130, .7)',
          ],
          fill: false,
          borderWidth: 2
        },
         {
          label: "ph",
          data: [<?php echo $ph[0]; ?>, <?php echo $ph[1]; ?>, <?php echo $ph[2]; ?>],
          backgroundColor: [
            'rgba(0, 0, 255, .3)',
          ],
          borderColor: [
            'rgba(0, 0, 255, .3)',
          ],
          fill: false,
          borderWidth: 2
        }
        ]

      },
      options: {
        responsive: true,
        scales: {
          yAxes: [{
            type: 'linear', 
            display: true,
            position: 'left',
            id: 'y-axis-1',
          }, {
            type: 'linear', 
            display: false,
            position: 'right',
            id: 'y-axis-2',

            
            gridLines: {
              drawOnChartArea: false, 
            },
          }],
        }
      }
    });
    </script>
</body>
      
</html>

    