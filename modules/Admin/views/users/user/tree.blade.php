@extends('packages::layouts.master')
  @section('title', 'Dashboard')
    @section('header')
    <h1>Dashboard</h1>
    @stop
    @section('content') 
      @include('packages::partials.navigation')
      <!-- Left side column. contains the logo and sidebar -->
      @include('packages::partials.sidebar')

            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
             <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                     @include('packages::partials.breadcrumb')
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light portlet-fit bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-settings font-red"></i>
                                        <span class="caption-subject font-red sbold uppercase">{{$heading or ''}}</span>
                                    </div>
                                     
                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <form action="{{route('user')}}" method="get" id="filter_data">
                                            <div class="col-md-3">
                                                <select name="status" class="form-control" onChange="SortByStatus('filter_data')">
                                                    <option value="">Sort by Status</option>
                                                    <option value="active" @if($status==='active') selected  @endif>Active</option>
                                                    <option value="inActive" @if($status==='inActive') selected  @endif>Inactive</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <input value="{{ (isset($_REQUEST['search']))?$_REQUEST['search']:''}}" placeholder="search by Name/Email" type="text" name="search" id="search" class="form-control" >
                                            </div>
                                            <div class="col-md-2">
                                                <input type="submit" value="Search" class="btn btn-primary form-control">
                                            </div>
                                           
                                        </form>
                                         <div class="col-md-2">
                                             <a href="{{ route('user') }}">   <input type="submit" value="Reset" class="btn btn-default form-control"> </a>
                                        </div>
                                       <div class="col-md-2 pull-right">
                                            <div style="width: 150px;" class="input-group"> 
                                                <a href="{{ route('user.create')}}">
                                                    <button class="btn  btn-primary"><i class="fa fa-user-plus"></i> Add New User</button> 
                                                </a>
                                            </div>
                                        </div> 
                                        </div>
                                    </div>
                                     
                                    <table class="table table-striped table-hover table-bordered" id="">
                                        <thead>
                                            <tr>
                                             <th> Sno. </th>
                                                <th> Name </th>
                                                <th> Referal Email </th>
                                                <th> Phone </th>
                                                <th>Sponsor Code</th>
                                                <th>Joining Date</th>
                                                <th>Status</th> 
                                                <th>Action</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $key => $result)
                                            <tr>
                                                 
                                               
                                            </tr>
                                           @endforeach
                                            
                                        </tbody>
                                    </table>
                                     <div class="center" align="center">  {!! $users->appends(['search' => isset($_GET['search'])?$_GET['search']:''])->render() !!}</div>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            
            
            <!-- END QUICK SIDEBAR -->
        </div>

        <script type="text/javascript">
            
            function SortByStatus(filter_data) {
                $('#filter_data').submit();
            }
        </script>
        
@stop