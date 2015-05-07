<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">

  <title>Bracket Responsive Bootstrap3 Admin</title>

  <link href="assets/css/style.default.css" rel="stylesheet">

  <body>

  <section>
      
  <div class="contentpanel">

  
      <div class="row">
        <div class="col-md-15">
          <h3>List Inventory <input type="submit" value="tambah" size="10px"></h3> 
          <div class="table-responsive">
          <table class="table mb30">
              <thead>
                 <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jumlah</th>
                    <th>Status</th>
                    <th>Kepemilikan</th>
                    <th>Aksi</th>
                 </tr>
              </thead>
              <tbody>
                <tr>
                    <td>1</td>
                    <td>Kursi</td>
                    <td>10</td>
                    <td>Baik</td>
                    <td>Kantor</td>
                    <td></td>
                </tr>
                <tr>
                  <td>2</td>
                    <td>Meja</td>
                    <td>2</td>
                    <td>Baik</td>
                    <td>Kantor</td>
                    <td></td>
                </tr>

              </tbody>
           </table>
          </div><!-- table-responsive -->
        </div><!-- col-md-6 -->
  </section>

<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/jquery.sparkline.min.js"></script>
<script src="assets/js/toggles.min.js"></script>
<script src="assets/js/retina.min.js"></script>
<script src="assets/js/jquery.cookies.js"></script>

<script src="assets/js/jquery.datatables.min.js"></script>
<script src="assets/js/select2.min.js"></script>

<script src="js/custom.js"></script>
<script>
  jQuery(document).ready(function() {
    
    "use strict";
    
    jQuery('#table1').dataTable();
    
    jQuery('#table2').dataTable({
      "sPaginationType": "full_numbers"
    });
    
    // Select2
    jQuery('select').select2({
        minimumResultsForSearch: -1
    });
    
    jQuery('select').removeClass('form-control');
    
    // Delete row in a table
    jQuery('.delete-row').click(function(){
      var c = confirm("Continue delete?");
      if(c)
        jQuery(this).closest('tr').fadeOut(function(){
          jQuery(this).remove();
        });
        
        return false;
    });
    
    // Show aciton upon row hover
    jQuery('.table-hidaction tbody tr').hover(function(){
      jQuery(this).find('.table-action-hide a').animate({opacity: 1});
    },function(){
      jQuery(this).find('.table-action-hide a').animate({opacity: 0});
    });
  
  
  });
</script>

  @yield('container')

</body>
</html>