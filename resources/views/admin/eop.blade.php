@extends('adminlte::page')

@section('title', 'OPENLOOK-MNI')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="dataids">
                <h3 class="data-title"
                    style="text-align:center; padding-top:20px; text-decoration:underline; font-size:25px">EOP</h3>
                <div class="row">
                    <div class="col-xs-12 col-md-12 col-lg-12 col-xl-12">
                        <select class="form-control d-none" id="excess" name="excess">
                            <option value="excessvalue">EOP</option>
                        </select>
                        <div class="data-search-query">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-2">
                                        <h2>CAMPAIGN ID</h2>
                                    </div>
                                    <div class="col-md-4">
                                        <select id="campaign_id" name="campaign_id" class="form-control">
                                            <option></option>
                                        </select></div>
                                    <div class="col-md-2">
                                        <h2>DELIVERY STATUS</h2>
                                    </div>
                                    <div class="col-md-2"><select id="dilivery_status" name="dilivery_status"
                                            class="form-control">
                                            <option></option>
                                            <option value="eop">EOP</option>
                                            <option value="delivered">Delivered</option>
                                            <option value="pending">Pending</option>
                                        </select></div>
                                    <div class="col-md-2">
                                        <div class="data-loader"><button id="changestatus"
                                                class="btn btn-success">STATUS SUBMIT</button></div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="status-count">
                                            <div id="eop"></div>
                                            <h3>EOP</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="status-count">
                                            <div id="pending"></div>
                                            <h3>Pending</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="status-count">
                                            <div id="delivered"></div>
                                            <h3>Delivered</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <hr>
                                    </div>
                                    <div class="col-md-2">
                                        <h2>DISPOSITION</h2>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-control" id="fdisp" name="fdisp">
                                            <option></option>
                                            <option value="01">01-Good Update</option>
                                            <option value="03">03-Incomplete Update</option>
                                            <option value="04">04-Refusal/Hang Up</option>
                                            <option value="05">05-Already Answered</option>
                                            <option value="06">06-No Manufacturing</option>
                                            <option value="07">07-Out of Business</option>
                                            <option value="08">08-Send Information</option>
                                            <option value="09">09-Refusal/Unworkable</option>
                                            <option value="10">10-Wrong Number</option>
                                            <option value="11">11-Answering Machine</option>
                                            <option value="12">12-Callback</option>
                                            <option value="13">13-Other</option>
                                            <option value="17">17-No Answer</option>
                                            <option value="18">18-Busy</option>
                                            <option value="22">22-Do Not Call</option>
                                            <option value="96">96-1st Pass Unworkable</option>
                                            <option value="97">97-Callback requested</option>
                                            <option value="98">98-2x No Answer (priority 7/8/9)</option>
                                            <option value="99">99-AM 3x</option>
                                            <option value="excessvalue">EOP</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <div class=" date-filters">
                                            <h4 class="dispotext">INDIVIDUAL DISPO/ EOP</h4>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                </div>
                <div class="dt-buttons"><button class="dt-button buttons-csv buttons-html5" tabindex="0"
                        aria-controls="eop-extraction" type="button"><span>CSV</span></button> </div>

                <div id="eop-extraction_filter" class="dataTables_filter"><label>Search:<input type="search" class=""
                            placeholder="" aria-controls="eop-extraction"></label></div>
                <div class="table-container">
                    <table id="eop-extraction" class="table table-striped table-bordered eop-extraction"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>compname</th>
                                <th>compname_d</th>
                                <th>akadba</th>
                                <th>physaddr</th>
                                <th>physaddr_d</th>
                                <th>physcity</th>
                                <th>physcity_d</th>
                                <th>physstate</th>
                                <th>physstat_d</th>
                                <th>physzip</th>
                                <th>physzip_d</th>
                                <th>vnumber</th>
                                <th>vnumber_d</th>
                                <th>loccount</th>
                                <th>loccount_d</th>
                                <th>products</th>
                                <th>products_d</th>
                                <th>exec1</th>
                                <th>exec1_d</th>
                                <th>gender1</th>
                                <th>gender1_d</th>
                                <th>officermail1</th>
                                <th>title1</th>
                                <th>title1_d</th>
                                <th>exec2</th>
                                <th>exec2_d</th>
                                <th>gender2</th>
                                <th>gender2_d</th>
                                <th>officermail2</th>
                                <th>title2</th>
                                <th>title2_d</th>
                                <th>fnumber</th>
                                <th>fnumber_d</th>
                                <th>nnumber</th>
                                <th>nnumber_d</th>
                                <th>web</th>
                                <th>web_d</th>
                                <th>email</th>
                                <th>mailaddr</th>
                                <th>mailaddr_d</th>
                                <th>mailcity</th>
                                <th>mailcity_d</th>
                                <th>mailstate</th>
                                <th>mailstat_d</th>
                                <th>mailzip</th>
                                <th>mailzip_d</th>
                                <th>yearestab</th>
                                <th>yearesta_d</th>
                                <th>distribtyp</th>
                                <th>distribty_d</th>
                                <th>ownertype</th>
                                <th>ownertyp_d</th>
                                <th>sales</th>
                                <th>sales_d</th>
                                <th>squarefeet</th>
                                <th>squarefe_d</th>
                                <th>imports</th>
                                <th>imports_d</th>
                                <th>exec3</th>
                                <th>exec3_d</th>
                                <th>gender3</th>
                                <th>gender3_d</th>
                                <th>officermail3</th>
                                <th>title3</th>
                                <th>title3_d</th>
                                <th>exec4</th>
                                <th>exec4_d</th>
                                <th>gender4</th>
                                <th>gender4_d</th>
                                <th>officermail4</th>
                                <th>title4</th>
                                <th>title4_d</th>
                                <th>exec5</th>
                                <th>exec5_d</th>
                                <th>gender5</th>
                                <th>gender5_d</th>
                                <th>officermail5</th>
                                <th>title5</th>
                                <th>title5_d</th>
                                <th>exec6</th>
                                <th>exec6_d</th>
                                <th>gender6</th>
                                <th>gender6_d</th>
                                <th>officermail6</th>
                                <th>title6</th>
                                <th>title6_d</th>
                                <th>exec7</th>
                                <th>exec7_d</th>
                                <th>gender7</th>
                                <th>gender7_d</th>
                                <th>officermail7</th>
                                <th>title7</th>
                                <th>title7_d</th>
                                <th>exec8</th>
                                <th>exec8_d</th>
                                <th>gender8</th>
                                <th>gender8_d</th>
                                <th>officermail8</th>
                                <th>title8</th>
                                <th>title8_d</th>
                                <th>exec9</th>
                                <th>exec9_d</th>
                                <th>gender9</th>
                                <th>gender9_d</th>
                                <th>officermail9</th>
                                <th>title9</th>
                                <th>title9_d</th>
                                <th>exec10</th>
                                <th>exec10_d</th>
                                <th>gender10</th>
                                <th>gender10_d</th>
                                <th>officermail10</th>
                                <th>title10</th>
                                <th>title10_d</th>
                                <th>parentname</th>
                                <th>parentna_d</th>
                                <th>parentcity</th>
                                <th>parentci_d</th>
                                <th>parentstat</th>
                                <th>parentst_d</th>
                                <th>onumber</th>
                                <th>onumber_d</th>
                                <th>header</th>
                                <th>advertiser</th>
                                <th>primarysic</th>
                                <th>sic2</th>
                                <th>companyid</th>
                                <th>datasource</th>
                                <th>contact</th>
                                <th>odatetime</th>
                                <th>ocommetns</th>
                                <th>tdatetime</th>
                                <th>tcomments</th>
                                <th>fcomments</th>
                                <th>fdatetime</th>
                                <th>operator</th>
                                <th>fdisp</th>
                                <th>confdate</th>
                                <th>bookid</th>
                                <th>newinyear</th>
                                <th>listnum</th>
                                <th>pdatetime</th>
                                <th>pcomments</th>
                                <th>email_d</th>
                                <th>akadba_d</th>
                                <th>qeflag</th>
                                <th>oagent</th>
                                <th>tagent</th>
                                <th>fagent</th>
                                <th>4datetime</th>
                                <th>4comments</th>
                                <th>4agent</th>
                                <th>5datetime</th>
                                <th>5comments</th>
                                <th>5agent</th>
                                <th>sysgencomments</th>
                                <th>priority</th>
                                <th>addresserror</th>
                                <th>dpvfootnote</th>
                                <th>altphone</th>
                                <th>altphone_d</th>
                                <th>paddress</th>
                                <th>paddress_d</th>
                                <th>pzip5</th>
                                <th>pzip5_d</th>
                                <th>addrchgreason</th>
                                <th>empchgreason</th>
                                <th>exec11</th>
                                <th>exec11_d</th>
                                <th>gender11</th>
                                <th>gender11_d</th>
                                <th>officermail11</th>
                                <th>title11</th>
                                <th>title11_d</th>
                                <th>exec12</th>
                                <th>exec12_d</th>
                                <th>gender12</th>
                                <th>gender12_d</th>
                                <th>officermail12</th>
                                <th>title12</th>
                                <th>title12_d</th>
                                <th>exec13</th>
                                <th>exec13_d</th>
                                <th>gender13</th>
                                <th>gender13_d</th>
                                <th>officermail13</th>
                                <th>title13</th>
                                <th>title13_d</th>
                                <th>exec14</th>
                                <th>exec14_d</th>
                                <th>gender14</th>
                                <th>gender14_d</th>
                                <th>officermail14</th>
                                <th>title14</th>
                                <th>title14_d</th>
                                <th>exec15</th>
                                <th>exec15_d</th>
                                <th>gender15</th>
                                <th>gender15_d</th>
                                <th>officermail15</th>
                                <th>title15</th>
                                <th>title15_d</th>
                                <th>cutdate</th>
                                <th>StartCall</th>
                                <th>EndCall</th>
                                <th>DataId</th>
                                <th>DateCall</th>
                                <th>Group ID</th>
                                <th>Notes</th>
                                <th>Status</th>
                                <th>uploadID</th>

                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                </div>
            </div>
        </div>
    </div>
</div>


@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<style>
    .extractfiles-new {
        background: #fff;
        padding: 20px 15px 20px 15px;
    }

    .table-container {
        width: 100%;
        overflow-x: auto;
    }

    .eop-extraction {
        width: 100%;
        white-space: nowrap;
    }


    .data-search-query {
        background: #43475a;
        margin-top: 15px;
        border-radius: 8px;
        color: #fff;
        padding: 15px 15px 15px 15px;
    }

    .data-search-query h2 {
        font-size: 20px;
        padding-top: 13px;
    }

    .status-count h3 {
        text-align: center;
        font-size: 23px;
    }

    .status-count {
        text-align: center;
        padding-top: 35px;
    }

    .date-filters {
        text-align: center;
        padding-top: 10px;
    }

    .dataTables_wrapper {
        padding: 15px;
        border-radius: 13px;
        text-align: center;
    }

    button.dt-button.buttons-csv.buttons-html5 {
        background: #43475a;
        border: 1px;
        color: #fff;
        width: 150px;
        padding-top: 11px;
        padding-bottom: 11px;
        border: 1px solid;
    }

    .dt-buttons {
        text-align: right;
        padding-top: 20px;
    }

    .dataTables_filter {
        float: right;
        text-align: right;
        padding-top: 20px;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0, 0, 0, .05);
    }

    button#changestatus {
        margin-top: 0px
    }

    .content-wrapper {
        background-image: url('/img/internet-technology-computer-display-360591.jpg');
        background-size: cover;
        background-position: center;
    }

    div#dataids {
        background: #fff;
        padding: 0px 15px 30px 15px;
        margin-top: 2em;
        border-radius: 10px;
        margin-bottom: 2em;
        height: auto;
    }

</style>
@stop
