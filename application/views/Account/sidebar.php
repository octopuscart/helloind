<style>
    .blockcontainer {
        margin-bottom: 10px;
        border: 1px solid #000;
        border: 1px solid #ddd;
        background: #f1f1f1;
        border-radius: 10px;
        margin-top: 20px;
    }
</style>

<div class="col-md-3">
    <div class="side-bar shop-sidbar" style="margin-top: 20px">
        <nav class="">
            <ul class="list-group">
                <li class="list-group-item  "><a href="<?php echo site_url("Account/profile"); ?>" >Profile</a></li>
                <li class="list-group-item "><a href="<?php echo site_url("Account/address"); ?>" >Addresses</a></li>
                <li class="list-group-item "><a href="<?php echo site_url("Account/orderList"); ?>" >My Orders</a></li>
                <li class="list-group-item "><a href="<?php echo site_url("Account/newsletter"); ?>" >Newsletter</a></li>
                <br/>
                <li class="list-group-item logout_page"><a href="<?php echo site_url("Account/logout"); ?>" >Logout</a></li>
            </ul>
        </nav>
    </div>
</div>

