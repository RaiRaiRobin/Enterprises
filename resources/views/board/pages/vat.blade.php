@include('board.header-board')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('css/NepaliDate.css')}}">

<div class="content">
	<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary" id="SearchHeader">
            <h4 class="card-title">VAT</h4>
          </div>
          <div id="modalLoading" hidden>
         <!-- data comes from js -->
          </div>
<div class="card-body">
 <!-- contents -->
<form id="PurchaseVat" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Supplier name</label>
                    <select id="SupplierSelect" class="form-control">
                      <option value="" hidden>Select Supplier</option>
                      <option value="AddNewSupplier">Add new suppier</option>
                      <option>asd</option>
                      <option>iop</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <label class="bmd-label-floating">Date</label>
                <input type="text" id="nepaliDate2" class="nepali-calendar form-control" placeholder="yyy-mm-dd" />
                </div>
                <div class="col-md-4">
                  <label class="bmd-label-floating">Invoice Number</label>
                  <input type="text" class="form-control" placeholder="Enter Invoice Number" name="">
                </div>
                <div class="col-md-4">
                  <label class="bmd-label-floating">Pan Number</label>
                  <input type="text" class="form-control" placeholder="7894556123" disabled>
                </div>
              </div>
              <div style="border: 1px solid black; width: 100%; margin-top: 1.5%;"></div>
              <span id="PurchaseItems">
              <div class="row" style="margin-top: 1%;">
                <div class="col-sm-1 text-right" style="padding-top: 1.5%;">
                  <label class="bmd-label-floating" data-id="1" id="d1">1.</label>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Description</label>
                    <input type="text" id="Description1" name="Description" class="form-control r1 r" data-id="1">
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label class="bmd-label-floating">Qty</label>
                    <input type="Number" id="Quantity1" name="Quantity" class="form-control r1">
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label class="bmd-label-floating">Rate</label>
                    <input type="Number" id="Rate1" name="Rate" class="form-control r1">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label class="bmd-label-floating">Amount</label>
                    <input type="Number" id="Amount1" name="Amount" class="form-control r1">
                  </div>
                </div>
              </div>
              </span>
              <div class="row">
                <div class="col-sm-4">
                  <label class="bmd-label-floating">Asset Type</label>
                  <select class="form-control">
                    <option hidden>Select Type of asset</option>
                    <option>Current Asset</option>
                    <option>Fixed Asset</option>
                    <option>Tangible Asset</option>
                    <option>Inangible Asset</option>
                    <option>Financial Asset</option>
                  </select>
                </div>
                <div class="col-sm-4"></div>
                <div class="col-sm-4"></div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group bmd-form-group is-filled">
                      <label class="bmd-label-floating">Date of establishment</label>
                      <input id="DealerDateOfEstablishment" name="DealerDateOfEstablishment" type="text" class="form-control no-border" onfocus="(this.type='date')" onblur="(this.type='text')">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Address</label>
                    <input type="text" id="DealerAddress" name="DealerAddress" class="form-control">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">PAN no.</label>
                    <input type="Number" id="DealerPanNo" name="DealerPanNo" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Phone no.</label>
                    <input type="text" id="DealerPhone" name="DealerPhone" class="form-control">
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label class="bmd-label-floating">Email</label>
                    <input type="Email" id="DealerEmail" name="DealerEmail" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Owner</label>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary pull-right">Submit</button>
              <div class="clearfix"></div>
            </form>
</div>
</div>



@include('board.footer-board')

<script type="text/javascript" src="{{asset('js/boardPurchaseVat.js')}}"></script>
<script type="text/javascript" src="{{asset('js/NepaliDate.js')}}"></script>