<style>
    .tree-list{list-style: none;cursor: pointer;line-height: 25px;}
    ul.tree, ul.tree ul {
        list-style: none;
        margin: 0 0 0 50px;
        padding: 0;
    } 
    ul.tree ul {
        margin-left: 10px;
    }
    ul.tree li {
        margin: 0;
        padding: 0 7px;
        line-height: 25px;
        color: #369;
        font-weight: bold;
        border-left:1px solid rgb(100,100,100);

    }
    ul.tree li:last-child {
        border-left:none;
    }
    ul.tree li:before {
        position:relative;
        top:-0.3em;
        height:25px;
        width:12px;
        color:white;
        border-bottom:1px solid rgb(100,100,100);
        content:"";
        display:inline-block;
        left:-7px;
    }
    ul.tree li:last-child:before {
        border-left:1px solid rgb(100,100,100);   
    }
</style>
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
                                <ul class="tree">
                                    <?php foreach ($allUser as $value) { ?>
                                        <li class='tree-list' has-dataload='0' onclick="showChildList(this);" id="<?php echo $value->id; ?>" > <span class="icon"> +  </span> <?php echo $value->name; ?></li><div id="ssssssssss"></div>   
                                        <?php } ?>
                                </ul>
                            </div>
                        </div>
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
    function showChildList(obj) {
        var id = $(obj).attr('id');
        var hasDataLoad = $(obj).attr('has-dataload');
        if (hasDataLoad == '0') {
            $.ajax({
                url: "tree/" + id,
                type: "GET",
                success: function (result) {
                    var response = JSON.parse(result);
                    var attachHtml = '<ul>';
                    if (response.status == 100) {
                        $.each(response.data, function (index, data) {
                            attachHtml += '<li class="tree-list" has-dataload="0" onclick="showChildList(this);" id="' + data.id + '" > <span class="icon"> + </span>' + data.name + '</li><div></div>';
                        })
                        attachHtml += '</ul>';
                        $(obj).next('div').addClass('show').html(attachHtml);
                        $(obj).attr('has-dataload', '1');
                        $(obj).find('.icon').html(' - ');
                    }
                }
            });
        } else {
            if ($(obj).next('div').hasClass('show')) {
                $(obj).next('div').removeClass('show').addClass('hide').hide();
                $(obj).find('.icon').html(' + ');
            } else {
                $(obj).next('div').removeClass('hide').addClass('show').hide();
                $(obj).find('.icon').html(' - ');
            }
        }

    }
</script>
@stop