@extends('adminlte::page')

@section('title', 'OPENLOOK-MNI')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="dataids">
                <div class="extractfiles-new container">
                    <div class="row">
                        <div class="col-md-12 completedetails">
                            <h3 style="text-decoration: underline">Complete Details with Header</h3>
                        </div>
                        <div class="col-md-6">
                            <label>Dates</label>
                            <table class="date-filters" border="0" cellspacing="5" cellpadding="5">
                                <tbody>
                                    <tr class="">
                                        <td>FROM DATE:</td>
                                        <td><input name="min" id="min" class="form-control" type="date"></td>
                                    </tr>
                                    <tr class="">
                                        <td>TO DATE:</td>
                                        <td><input name="max" id="max" class="form-control" type="date"></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="col-md-6">
                            <label>Filter</label>
                            <select class="form-control" id="filterdata">
                                <option value="">Clear</option>
                                <option value="Resolved">Resolved</option>
                            </select>
                        </div>
                    </div>

                    <div class="dt-buttons"><button class="dt-button buttons-csv buttons-html5" tabindex="0"
                      aria-controls="eop-extraction" type="button"><span>CSV</span></button> </div>

              <div id="eop-extraction_filter" class="dataTables_filter"><label>Search:<input type="search" class=""
                          placeholder="" aria-controls="eop-extraction"></label></div>
                    <div class="table-container">
                      <table id="pending-complete" class="table table-striped table-bordered pending-complete" style="width:100%">
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
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('plugins.Datatables', true)

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<style>
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

    .table-container {
        width: 100%;
        overflow-x: auto;
    }

    .pending-complete {
        width: 100%;
        white-space: nowrap;
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

</style>
@stop
