<br>
<br>
<form method="post" action="<?php echo base_url('productsCreate');?>">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Products Name</label>
                <div class="col-md-9">
                    <input type="text" name="productname" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Product_Info</label>
                <div class="col-md-9">
                    <textarea name="product_info" class="form-control"></textarea>
                </div>
            </div>
        </div>
		<div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Price</label>
                <div class="col-md-9">
                    <input type="number" name="Price" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2 pull-right">
            <input type="submit" name="Save" class="btn">
        </div>
    </div>
    
</form>