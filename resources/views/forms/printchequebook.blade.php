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
                <li><a href="#tab1" data-toggle="tab">Account Information <span class="badge badge-default pull-right wizard-step">1</span></a></li>
                <li><a href="#tab2" data-toggle="tab">Cheque Information<span class="badge badge-default pull-right wizard-step">2</span></a></li>
                <li><a href="#tab3" data-toggle="tab">Other Information<span class="badge badge-default pull-right wizard-step">3</span></a></li>
                <li><a href="#tab4" data-toggle="tab">Complete<span class="badge badge-default pull-right wizard-step">4</span></a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane" id="tab1">

                    <form name="step1" role="form">

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="requestid">Request no: </label>
                                <input type="text" disabled=""name="requestid" id="requestid" class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="branch">Originating branch: </label>
                                <input type="text" name="branchname" id="branchname" class="form-control"
                                       required>
                            </div>
                        </div>

                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for="accountnumber">Account No: </label>
                                <input type="text" name="accountnumber" id="accountnumber" class="form-control"
                                       required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="accountname">Account Title: </label>
                                <input type="text" name="accountname" id="accountname" class="form-control"
                                       required>
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for="accountnumber">Account on Cheque: </label>
                                <input type="text" name="accountoncheque" id="accountoncheque" class="form-control"
                                       required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="accountnumber">Account Type: </label>
                                <div class="col-sm-15">
                                    <select tabindex="3" class="chosen-select" style="width: 240px;">
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>

                                    </select>
                                </div>
                            </div>

                        </div>

                    </form>

                </div>
                <div class="tab-pane" id="tab2">

                    <form name="step2" role="form">

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="noofleaves">No of Leaves: </label>
                                <input type="text" name="noofleaves" id="noofleaves" class="form-control" placeholder="Enter no of leaves">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="noofbooks">No of Books: </label>
                                <input type="text" name="noofbooks" id="noofbooks" class="form-control" placeholder="Enter no of books"required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="chequetitle">Title on Cheque: </label>
                                <input type="text" name="chequetitle" id="chequetitle" class="form-control" placeholder="Enter the tile on cheque">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="chequedigit">Account Cheque Digit: </label>
                                <input type="text" name="chequedigit" id="chequetitle" class="form-control" placeholder="Enter account cheque digit">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="fromrange">Cheque From Range: </label>
                                <input type="text" name="fromrange" id="fromrange" class="form-control" placeholder="Enter the cheque from range">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="torange">Cheque To Range: </label>
                                <input type="text" name="torange" id="torange" class="form-control" placeholder="Enter the cheque to range">
                            </div>
                        </div>

                    </form>

                </div>
                <div class="tab-pane" id="tab3">

                    <form name="step3" role="form" novalidate>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="currencycode">Currency: </label>
                                <input type="text" name="currencycode" id="currencycode" class="form-control" placeholder="Enter the currency code">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="bankcode">Bank Code: </label>
                                <input type="text" name="bankcode" id="bankcode" class="form-control" placeholder="Enter the bank code"
                                       required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="countrycode">Country Code: </label>
                                <input type="text" name="countrycode" id="countrycode" class="form-control" placeholder="Enter the country code"
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="collectionpoint">Collection Point: </label>
                                <input type="text" name="collectionpoint" id="collectionpoint" class="form-control" placeholder="Enter the collection point">
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="micrchequedigit">Micr Cheque Digit: </label>
                                <input type="text" name="micrchequedigit" id="micrchequedigit" class="form-control" placeholder="Enter the micr cheque digit"
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="accountnumber">Paper  Size: </label>
                                <div class="col-sm-15">
                                    <select tabindex="3" class="chosen-select" style="width: 240px;">
                                        <optgroup label="Paper Size">
                                            <option value="1">Big</option>
                                            <option value="2">Small</option>
                                        </optgroup>

                                    </select>
                                </div>
                            </div>
                            
                        </div>

                    </form>

                </div>
                <div class="tab-pane" id="tab4">

                    <p class="well">Please ensure the information entered is correct before printing the cheque.Thank you.</p>

                    <form name="step5" role="form" novalidate>

                        <div class="checkbox">
                            <label class="checkbox checkbox-custom">
                                       <input type="checkbox" name="agree" id="agree"><i></i> I have confirmed all cheque details
                            </label>
                        </div>

                    </form>

                </div>
                <ul class="pager wizard">
                    <li class="previous"><button class="btn btn-default">Previous</button></li>
                    <li class="next"><button class="btn btn-default">Next</button></li>
                    <li class="next finish" style="display:none;"><button class="btn btn-success">Print</button></li>
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

