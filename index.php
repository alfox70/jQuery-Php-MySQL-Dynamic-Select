<!DOCTYPE html>
<html lang="it">
   <head>
      <meta charset="UTF-8">
      <title>Dynamic Dropdown List Country State City</title>
      <!-- Fonts -->
      <link href='https://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
      <!-- Styles -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <style>
         html, body {
         background-color: #fff;
         color: #636b6f;
         font-family: 'Architects Daughter', sans-serif;
         font-weight: 200;
         height: 100vh;
         margin: 0;
         }
         .full-height {
         height: 100vh;
         }
         .flex-center {
         align-items: center;
         display: flex;
         justify-content: center;
         }
         .position-ref {
         position: relative;
         }
         .top-right {
         position: absolute;
         right: 10px;
         top: 18px;
         }
         .content {
         text-align: center;
         }
         .title {
         font-size: 84px;
         }
         .links > a {
         color: #636b6f;
         padding: 0 25px;
         font-size: 13px;
         font-weight: 600;
         letter-spacing: .1rem;
         text-decoration: none;
         text-transform: uppercase;
         }
         .m-b-md {
         margin-bottom: 30px;
         }
      </style>
   </head>
   <body>
      <div class="container mt-5">
         <div class="row">
            <div class="card">
               <div class="card-header">
                  <h2 class="text-alert">Dynamic and Dependent Select Box jQuery PHP MySQL(one table)</h2>
               </div>
               <?php
                           require_once "db_conn.php";
                          // select region
                           $sql = "SELECT * FROM example_data order by region,province,city ";
                          $result = $conn->query($sql);

                           while($row = $result->fetch_assoc())
                              {
                                 $resultSet[] = $row;

                              }
                           $region = array_unique(array_column($resultSet, 'region'));

                            // select province from array
                          $province = array();
                          foreach ($resultSet as $value) {
                                  
                                   $pos = array_search($value['province'], array_column($province, "province") );
                                    if ($pos === false)
                                        {
                                        $province[] = $value;
                                         }
                                         }
                          // select city    
                          $city = array();
                          foreach ($resultSet as $value) {
                                  
                                   $pos = array_search($value['city'], array_column($city, "city") );
                                    if ($pos === false)
                                        {
                                        $city[] = $value;
                                         }
                                         }               
                         
                           ?>
               <div class="card-body">
                  <form>
                  <div class="form-group">
                     <label for="country">Region</label>
                     <select class="form-control" id="region" onchange="makeSubProvince(this.value);">
                        <option value="">Select Region</option>
                        <?php
                              foreach ($region as $row ) {
                           ?>
                        <option value="<?php echo $row;?>"><?php echo $row;?></option>
                        <?php
                           }
                           ?>
                     </select>
                  </div>
                  <div class="form-group">
                     <label for="state">Province</label>
                     <select class="form-control" id="province" onchange="makeSubCity(this.value);" readonly>
                     </select>
                  </div>
                  <div class="form-group">
                     <label for="city">City</label>
                     <select class="form-control" id="city" readonly>
                     </select>
                  </div>
                </form>
               </div>
                <div class="card-footer">
                  <h4 class="text-center">Greetings from Italy</h4>
               </div>
            </div>
         </div>
      </div>
     

      


<script type="text/javascript">
function makeSubProvince(value) { 
      if (value != "") {
        
      $('#province').attr('readonly', false);
      }
      var province = <?php echo json_encode($province) ;?>;    
       var provinceOptions = "";

          
          provinceOptions+="<option value='' selected disabled >Select Province</option>"
          provinceOptions+="<option value='' disabled ></option>"


      var x;
      for (x in province) {
      if (province[x]['region'] == value ) {
        
        provinceOptions+="<option>"+province[x]['province']+"</option>";
      }
      }
      document.getElementById("province").innerHTML = provinceOptions;
      }

function makeSubCity(value) { 
      if (value != "") {
        
      $('#city').attr('readonly', false);
      }
      var city = <?php echo json_encode($city) ;?>;    
       var cityOptions = "";

          
          cityOptions+="<option value='' selected disabled >Select City</option>"
          cityOptions+="<option value='' disabled ></option>"


      var x;
      for (x in city) {
      if (city[x]['province'] == value ) {
        
        cityOptions+="<option>"+city[x]['city']+"</option>";
      }
      }
      document.getElementById("city").innerHTML = cityOptions;
      }      

</script>      
   </body>
</html>