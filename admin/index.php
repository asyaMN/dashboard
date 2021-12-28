<?php
require "templete/header.php";
require "templete/sidebar.php";
require "templete/navbar.php";
require "config.php";
require "includes/function/function.php";
?>

 <!-- partial -->
 <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Basic Tables </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Bordered table</h4>
                    <p class="card-description"> Add class <code>.table-bordered</code>
                    </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> #ID </th>
                          <th> Category Name </th>
                          <th> Action </th>
                          <!-- <th> Amount </th>
                          <th> Deadline </th> -->
                        </tr>
                      </thead>
                      <tbody>
                          <?php 
                            $row = fetch_data();
                     for($i= 0;$i<count($row);$i++){
                     echo' <tr>

                          <td>'.$row[$i]['id'].' </td>
                          <td> '.$row[$i]['name'].' </td>
                          <td>
                          <button type="button" class="btn btn-danger">update</button>
                          <button type="button" class="btn btn-danger">delete</button>
                          </td>
                        </tr>' ;}
                       
                        ?>
                       
        
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            
             
            </div>
          </div>
          <!-- content-wrapper ends -->
  <?php

require "templete/footer.php";


?>