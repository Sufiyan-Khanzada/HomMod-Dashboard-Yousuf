<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <?php
  include 'header.php';
  ?>
  </head>

            <!-- Body: Body -->       
            <div class="body d-flex py-lg-3 py-md-2">
                <div class="container-xxl">
                    <div class="row align-items-center">
                        <div class="border-0 mb-4">
                            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                <h3 class="fw-bold mb-0">Suppliers Information</h3>
                                <div class="col-auto d-flex w-sm-100">
                                    <button type="button" class="btn btn-primary btn-set-task w-sm-100" data-bs-toggle="modal" data-bs-target="#expadd"><i class="icofont-plus-circle me-2 fs-6"></i>Add Suppliers</button>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row end  -->
                    <div class="row clearfix g-3">
                    <div class="col-sm-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Items</th>
                                            <th>Suppliers</th> 
                                            <th>Suppliers Regdate</th>
                                            <th>Mail</th> 
                                            <th>Phone</th> 
                                            <th>Address</th>
                                            <th>Tax No</th>
                                            <th>Actions</th>  
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>#SP-00002</strong></td>
                                            <td>Cloth </td>
                                            <td>
                                                <img class="avatar rounded" src="assets/images/xs/avatar1.svg" alt="">
                                                <span class="fw-bold ms-1">Joan Dyer</span>
                                            </td>
                                            <td>
                                                    12/03/2021
                                            </td>
                                            <td>JoanDyer@gmail.com</td>
                                            <td>202-555-0983</td>
                                            <td>70 Bowman St. South Windsor, CT 06074</td>
                                            <td>5869</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                    <button type="button" class="btn btn-outline-secondary"  data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button>
                                                    <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>#SP-00006</strong></td>
                                            <td>Shoes</td>
                                            <td>
                                                <img class="avatar rounded" src="assets/images/xs/avatar2.svg" alt="">
                                                <span class="fw-bold ms-1">Ryan	Randall</span>
                                            </td>
                                            <td>
                                                12/03/2021
                                            </td>
                                            <td>RyanRandall@gmail.com</td>
                                            <td>303-555-0151</td>
                                            <td>123 6th St. Melbourne, FL 32904</td>
                                            <td>4568</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button>
                                                    <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>#SP-00004</strong></td>
                                            <td>Cycle</td>
                                            <td>
                                                <img class="avatar rounded" src="assets/images/xs/avatar3.svg" alt="">
                                                <span class="fw-bold ms-1">Phil	Glover</span>
                                            </td>
                                            <td>
                                                16/03/2021
                                            </td>
                                            <td>PhilGlover@gmail.com</td>
                                            <td>843-555-0175</td>
                                            <td>4 Shirley Ave. West Chicago, IL 60185</td>
                                            <td>4659</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button>
                                                    <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>#SP-00011</strong></td>
                                            <td>Oil</td>
                                            <td>
                                                <img class="avatar rounded" src="assets/images/xs/avatar4.svg" alt="">
                                                <span class="fw-bold ms-1">Victor Rampling</span>
                                            </td>
                                            <td>
                                                25/02/2021
                                            </td>
                                            <td>VictorRampling@gmail.com</td>
                                            <td>404-555-0100</td>
                                            <td>123 6th St. Melbourne, FL 32904</td>
                                            <td>2567</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button>
                                                    <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>#SP-00018</strong></td>
                                            <td>Watch</td>
                                            <td>
                                                <img class="avatar rounded" src="assets/images/xs/avatar5.svg" alt="">
                                                <span class="fw-bold ms-1">Sally Graham</span>
                                            </td>
                                            <td>
                                                16/02/2021
                                            </td>
                                            <td>SallyGraham@gmail.com</td>
                                            <td>502-555-0118</td>
                                            <td>4 Shirley Ave. West Chicago, IL 60185</td>
                                            <td>7586</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button>
                                                    <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>#SP-00014</strong></td>
                                            <td>Sunglasses</td>
                                            <td>
                                                <img class="avatar rounded" src="assets/images/xs/avatar6.svg" alt="">
                                                <span class="fw-bold ms-1">Robert Anderson</span>
                                            </td>
                                            <td>
                                            18/01/2021
                                            </td>
                                            <td>RobertAnderson@gmail.com</td>
                                            <td>502-555-0133</td>
                                            <td>123 6th St. Melbourne, FL 32904</td>
                                            <td>6584</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button>
                                                    <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div><!-- Row End -->
                </div>
            </div>
            
            <?php
  include 'footer.php';
  ?>