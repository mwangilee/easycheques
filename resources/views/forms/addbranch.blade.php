@extends('layouts.master')

@section('content')


<div class="page page-forms-common">


    <!-- row -->
    <div class="row">


        <div class="col-md-6">

            <!-- tile -->
            <section class="tile">

                <!-- tile header -->
                <div class="tile-header dvd dvd-btm">
                    <h1 class="custom-font"><strong>Add </strong>Branch</h1>
                    <ul class="controls">
                        <li class="dropdown">

                            <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                                <i class="fa fa-spinner fa-spin"></i>
                            </a>

                            <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                <li>
                                    <a role="button" tabindex="0" class="tile-toggle">
                                        <span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                        <span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                    </a>
                                </li>
                                <li>
                                    <a role="button" tabindex="0" class="tile-refresh">
                                        <i class="fa fa-refresh"></i> Refresh
                                    </a>
                                </li>
                                <li>
                                    <a role="button" tabindex="0" class="tile-fullscreen">
                                        <i class="fa fa-expand"></i> Fullscreen
                                    </a>
                                </li>
                            </ul>

                        </li>
                        <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                    </ul>
                </div>
                <!-- /tile header -->
                <!-- tile body -->
                <div class="tile-body">
                    <form action="{{url('/addbranch')}}" method="post">
                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="name">Branch Code</label>
                            <input type="text" name="branchcode" value="" class="form-control" id="exampleInputEmail1" placeholder="Please enter the branch code">
                        </div>
                        <div class="form-group">
                            <label for="email">Branch Name</label>
                            <input type="text" name="branchname" value="" class="form-control" id="exampleInputEmail1" placeholder="Please enter the branch name">
                        </div>
                         <div class="form-group">
                            <label for="email">Address</label>
                            <input type="text" name="address" value="" class="form-control" id="exampleInputEmail1" placeholder="Please enter the branch location">
                        </div>
                         <div class="form-group">
                            <label for="status">Status</label>
                             <select name="status" class="form-control mb-5">
                                <option>ACTIVE</option>
                                <option>INACTIVE</option>
                            </select>
                        </div>
                        <input type="submit" name="" value="Submit" class="btn btn-rounded btn-success btn-sm">
                        <?php echo csrf_field(); ?>
                    </form>

                </div>
                <!-- /tile body -->

            </section>
            <!-- /tile -->
            <!-- /tile -->

        </div>
        <!-- /col -->



    </div>
    <!-- /row -->


</div>



@endsection

