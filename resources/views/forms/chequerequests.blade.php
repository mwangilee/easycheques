@extends('layouts.master2')

@section('content')

<div class="page page-forms-wizard">

    <div class="pageheader">

        <h2>Printing Wizard <span>Print cheques</span></h2>

        <div class="page-bar">

            <ul class="page-breadcrumb">
                <li>
                    <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i> Easy Cheques</a>
                </li>
                
            </ul>

        </div>

    </div>

    <!-- page content -->
    <div class="pagecontent">

        <div id="rootwizard" class="tab-container tab-wizard">
            <ul class="nav nav-tabs nav-justified">
                <li><a href="#tab1" data-toggle="tab">Cheque Details <span class="badge badge-default pull-right wizard-step">1</span></a></li>
                <li><a href="#tab2" data-toggle="tab">Other Information<span class="badge badge-default pull-right wizard-step">2</span></a></li>
                <li><a href="#tab4" data-toggle="tab">Complete Request<span class="badge badge-default pull-right wizard-step">3</span></a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane" id="tab1">
                    
                  
                    <form action="{{url('/chequerequest')}}"name="step1" role="form" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="requestid">Account No: </label>
                                <input type="text" name="accountno" id="requestid" class="form-control required">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="branch">Customer Name: </label>
                                <input type="text" name="customername" id="branchname" class="form-control "
                                       required>
                            </div>
                        </div>

                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for="noofbooks">No of books: </label>
                                <div class="col-sm-15">
                                    <select tabindex="3" class="chosen-select" required style="width: 240px;">
                                        <optgroup label="Paper Size">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="2">3</option>
                                            <option value="2">4</option>
                                            <option value="2">5</option>
                                        </optgroup>

                                    </select>
                                </div>
                            </div>

                           <div class="form-group col-md-6">
                                <label for="noofleaves">No of leaves: </label>
                                <div class="col-sm-15">
                                    <select tabindex="3" class="chosen-select" required style="width: 240px;">
                                        <optgroup label="Paper Size">
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </optgroup>

                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for="branch">Originating Branch: </label>
                                <div class="col-sm-15">
                                    <select tabindex="3" class="chosen-select" required style="width: 240px;">
                                        <optgroup label="Paper Size">
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </optgroup>

                                    </select>
                                </div>
                            </div>
                            
                           <div class="form-group col-md-6">
                                <label for="collectionbranch">Collection Branch: </label>
                                <div class="col-sm-15">
                                    <select tabindex="3" class="chosen-select" required style="width: 240px;">
                                        <optgroup label="Paper Size">
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </optgroup>

                                    </select>
                                </div>
                            </div>

                        </div>
               <?php echo csrf_field(); ?>
                     <!--<button type="submit" class="btn btn-rounded btn-primary btn-sm">submit</button>-->
                    </form>

                </div>
                <div class="tab-pane" id="tab2">

                    <form name="step2" role="form">

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="collectionbranch">Currency: </label>
                                <div class="col-sm-15">
                                    <select tabindex="3" class="chosen-select" required style="width: 240px;">
                                        <optgroup label="Paper Size">
                                            <option value="GMD">GMD</option>
                                            <option value="USD">USD</option>
                                            <option value="EUR">EUR</option>
                                            <option value="GPB">GPB</option>
                                        </optgroup>

                                    </select>
                                </div>
                            </div>
 
                        </div>

                         <div class="form-group">
                              <label for="comments">comments: </label>
                              <textarea class="form-control" rows="5" name="comments" id="message" placeholder="Input any customer comments..."></textarea>
                          </div>
                        
                    </form>

                </div>
                
                <div class="tab-pane" id="tab4">

                    <p class="well">Please confirm the customer information before processing the request. Thank you...</p>

                    <form name="step5" role="form" method="post" novalidate>
                        

                        <div class="checkbox">
                            <label class="checkbox checkbox-custom">
                                       <input type="checkbox" name="agree" id="agree"><i></i> I have confirmed all customer details
                            </label>
                        </div>

                    </form>
                
          
                </div>
                <ul class="pager wizard">
                    <li class="previous"><button class="btn btn-default">Previous</button></li>
                    <li class="next"><button type="submit" class="btn btn-default">Next</button></li>
                    <li class="next finish" style="display:none;"><button type="submit" class="btn btn-success">Submit</button></li>
                    
                </ul>
            </div>
        </div>

    </div>
    <!-- /page content -->

</div>

<script>
    $(window).load(function () {

        $('#rootwizard').bootstrapWizard({
            onTabShow: function (tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index + 1;

                // If it's the last tab then hide the last button and show the finish instead
                if ($current >= $total) {
                    $('#rootwizard').find('.pager .next').hide();
                    $('#rootwizard').find('.pager .finish').show();
                    $('#rootwizard').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }

            },
            onNext: function (tab, navigation, index) {

                var form = $('form[name="step' + index + '"]');

                form.parsley().validate();

                if (!form.parsley().isValid()) {
                    return false;
                }
                var formData = {
                    'accountno'              : $('input[name=customername]').val(),
                    'customername'    : $('input[name=customername]').val()
                };
                document.location.href = "/chequerequest?data=" + formData;    
                

            },
            onTabClick: function (tab, navigation, index) {

                var form = $('form[name="step' + (index + 1) + '"]');
                form.parsley().validate();

                if (!form.parsley().isValid()) {
                    return false;
                }

            }
           

        });

    });
</script>
@endsection

