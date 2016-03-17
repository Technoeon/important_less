<div class="row">
    <div class="col-md-3 col-md-offset-1">

    </div>
    <div class="col-md-4 col-md-offset-1">
        <hr class="separator">
        <div class="form-group">
            <form action="<?php echo base_url().'te_admin/do_accept/'.$invoice->order_id; ?>" method="post"><button type="submit" class="btn bg-success" >Accept</button></form>
        </div>
        <div class="form-group">
            <form action="<?php echo base_url().'te_admin/do_reject/'.$invoice->order_id; ?>" method="post"><button type="submit" class="btn bg-danger" >Reject</button></form>
        </div>
    </div>
    <div class="col-md-2 col-md-offset-1">
        <hr class="separator">
        <div class="form-group">
            <a class="btn bg-info" href="<?php echo base_url() . 'te_admin/generate_bill/' . $invoice->order_id; ?>" target="blank"><i class="fa fa-print icon-only" title="Print"></i> Print</a>
        </div>                
    </div>
</div>