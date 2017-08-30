@extends('cca_admin.layout.adminlayout')
@section('content')
<div class="wrapper">
  <!-- Left side column. contains the logo and sidebar -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <ol class="breadcrumb">
        <li><a href="{{ url('/company/cca-admin/dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
		 <li><a href="{{ url('/company/cca-induction-history')}}"><i class="fa fa-dashboard"></i> Induction History</a></li>
		   @if($user != "")
			<li class="active">{{$user[0]->name}}</li>
			@endif
		<li class="active">Test Report</li>
      </ol>
      <section class="content-header">
                <h1>
                    Induction Registration
                </h1>
        </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
         
        <!-- /.col -->
        <div class="col-md-12">
          

          <div class="box">
           
            <!-- /.box-header -->
            <div class="box-body no-padding">
		
              <table class="table table-striped">
               @if($user != "")
				<tr>
					<th>First Name</th>
					<td class="">{{$user[0]->name}}</td>
				 
					<th>Last Name</th>
					<td class="">{{$user[0]->l_name}}</td>
				</tr>
				@endif
				<tr>
				@if($company != "")
				
                  <th>Company Name</th>
                  <td class="">{{$company[0]->name}}</td>
				@endif
				 @if($site != "")
                  <th>Start Date</th>
                  <td class="">{{$site[0]->start_date}}</td>
				
				@endif
				</tr>
				<tr>
				@if($user != "")
				<th>Email</th>
				<td class="ng-binding">{{$user[0]->email}}</td>
				
                <th>Phone Number</th>
				<td class="ng-binding">{{$user[0]->mobile}}</td>
				@endif
				</tr>
				<tr>
					<th>CSCS Number</th>
					<td class="ng-binding"></td>
					<th>Trade On Card</th>
					<td class="ng-binding"></td>
				</tr>
				<tr>
					@if($site != "")
					<th>Expiry Date</th>
					<td class="ng-binding">{{$site[0]->end_date}}</td>
					@endif
					@if($user != "")
					
					<th>Qualification</th>
					<td class="ng-binding">{{$user[0]->certificate_details}}</td>
				</tr>
					<tr ng-repeat="row in rowCollectionPage" class="ng-scope">
						<th>Next Of Kin</th>
						<td class="ng-binding">{{$user[0]->em_name}}</td>
					
						<th>Relationship</th>
						<td class="ng-binding">{{$user[0]->em_relation}}</td>
					</tr>
					@endif
					@if($induction != "")
					<tr ng-repeat="row in rowCollectionPage" class="ng-scope">
						<th>Unique Induction Number</th>
						<td class="ng-binding">{{$induction[0]->random_number}}</td>
					</tr>
				@endif
				
                 
              </table>
			
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
</div>
  

  @endsection