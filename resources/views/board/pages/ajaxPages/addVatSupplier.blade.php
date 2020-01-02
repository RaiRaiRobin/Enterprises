<form id="PurchaseVatAddSupplier" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label class="bmd-label-floating">Supplier Name</label>
            <input type="text" id="SupplierName" name="SupplierName" class="form-control" required>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label class="bmd-label-floating">PAN no.</label>
            <input type="Number" id="SupplierPanNo" name="SupplierPanNo" class="form-control" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label class="bmd-label-floating">Phone no.</label>
            <input type="text" id="SupplierPhone" name="SupplierPhone" class="form-control">
          </div>
        </div>
        <div class="col-md-5">
          <div class="form-group">
            <label class="bmd-label-floating">Email</label>
            <input type="Email" id="SupplierEmail" name="SupplierEmail" class="form-control">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label class="bmd-label-floating">Address</label>
            <input type="text" id="SupplierAddress" name="SupplierAddress" class="form-control">
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary pull-right">Submit</button>
      <div class="clearfix"></div>
</form>