<div class="callout callout-info">
    <div class="row">
        <div class="col-xs-2 col-sm-1 text-center">
            <h4 style="font-size: 45px; margin-bottom:0px;"><span class="fa fa-flag"></span></h4>
        </div>
        <div class="col-xs-6 col-sm-9">
            <h4>Thank you for trying Bevager!</h4>

            <p>When you're ready to begin using Bevager to manage your bar, let us know how you'd like to finish setting
                up your Account.</p>
        </div>
        <div class="col-xs-3 col-sm-2">
            <a class="btn btn-success finish-setup" data-toggle="modal" data-target="#finishSetupModal">Finish Setup</a>
        </div>
    </div>
</div>
<div class="modal fade" id="finishSetupModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Finish Your Bevager Account Setup</h4>
            </div>

            <div class="modal-body trial-welcome">
                To input your items into Bevager, we created a loader that accepts your inventory sheet. Please download
                the Excel template, fill it out, and email it to us for an automatic load. Alternatively, we can create
                an empty account for you to load items manually.
                <br/><br/>
                What would you like to do? <br/><br/>

                <div class="row">
                    <div class="col-xs-12 text-right">
                        <a href="#" id="setUpExcel" class="btn btn-success">Load Items via Excel</a>
                        <a href="#" id="setUpManually" class="btn btn-primary">Load Items Manually</a>
                    </div>
                </div>
            </div>

            <div class="modal-body mzhidden load-manually">
                Great! If you're ready to reset your account, you'll need to manually add Items, invite Distributors,
                and create Orders.

                <br/><br/>

                <div class="callout callout-danger">
                    <h4>Warning!</h4>

                    <p>By clicking below, we'll completely erase your demo account and any data you've entered will be
                        lost</p>
                </div>
                <div class="text-right">
                    <a href class="btn btn-default" data-dismiss="modal"><span class="fa fa-mail-reply"></span> Return
                        to demo</a>
                    <a href class="btn btn-danger trial-complete">I agree, reset Account</a>
                </div>
            </div>

            <div class="modal-body mzhidden load-excel">
                Great! Please download the following Excel template and fill out the information for all of your Items.
                When completed, email us at <a href="mailto:support@bevager.com">support@bevager.com</a> and we'll have
                your Account ready within 24 hrs.

                <br/><br/>


                <div class="alert alert-warning">
                    <i class="fa fa-warning"></i>
                    <span id="flashMessage"><strong>Warning!</strong> Please note that your Account will be reset completely and you will lose all modifications when your spreadsheet is loaded</span>
                </div>

                <div style="margin: 0 auto">
                    <a href="/assets/Bevager_Import_Template.xlsx" class="text-green"><span
                            class="fa fa-file-excel-o"></span> Download Excel Template</a>
                </div>

                <div class="text-right">
                    <a href class="btn btn-default" data-dismiss="modal"><span class="fa fa-mail-reply"></span> Return
                        to demo</a>
                </div>

            </div>

        </div>
    </div>
</div>