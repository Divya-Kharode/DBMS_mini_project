<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> User Management
        <small>Add, Edit, Delete</small>
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>User/addCustomer"><i class="fa fa-plus"></i> Add New</a>
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>addNew"><i class="fa fa-download"></i>&nbsp&nbsp Export </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Customers List</h3>
                    <div class="box-tools">
                        <form action="<?php echo base_url() ?>userListing" method="POST" id="searchList">
                            <div class="input-group">
                              <input type="text" name="searchText" value="<?php echo $searchText; ?>" class="form-control input-sm pull-right" style="width: 150px;;height:40px;" placeholder="Search"/>
                              <div class="input-group-btn">
                                <button class="btn btn-sm btn-default searchList"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                        <th>Id</th>
                        <th>Customer_email</th>
                        <th>Register_Timestamp</th>
                        <th>Last_login_Timestamp</th>
                        <th>Session_count</th>
                        <th>Account_status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    <?php
                    if(!empty($userRecords))
                    {
                        foreach($userRecords as $record)
                        {
                    ?>
                    <tr>
                        <td><?php echo $record->Id  ?></td>
                        <td><?php echo $record->Customer_email ?></td>
                        <td><?php echo date("d-m-Y", strtotime($record->Register_Timestamp)) ?></td>
                        <td><?php echo date("d-m-Y", strtotime($record->Last_login_Timestamp)) ?></td>
                        <td><?php echo $record->Session_count ?></td>
                        <td><?php echo $record->Account_status ?></td>

                        <!--<td><?php //echo date("d-m-Y", strtotime($record->createdDtm)) ?></td>-->
                       <td class="text-center">
                            <a class="btn btn-sm btn-info" href="<?php echo base_url().'User/editOldCustomer/'.$record->Id; ?>"> <i class="fa fa-pencil"></i></a>
                            <a class="btn btn-sm btn-danger deleteUser" href="<?php echo base_url().'User/deleteCustomer/'.$record->Id; ?>" title="Delete"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                  </table>
                  
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
              </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common3.js" charset="utf-8"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();            
            var link = jQuery(this).get(0).href;            
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "userListing/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
