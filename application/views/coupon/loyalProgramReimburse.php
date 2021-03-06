
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Woodlands Hong Kong</title>
    </head>

    <body style="margin:0px; background: #f8f8f8; ">
        <div width="100%" style="background: #f8f8f8; padding: 0px 0px; font-family:arial; line-height:28px; height:100%;  width: 100%; color: #514d6a;">
            <div style="max-width: 700px; padding:50px 0;  margin: 0px auto; font-size: 14px">
                <table border="0" cellpadding="0" cellspacing="0" style="width: 100%; background: #FBB316">
                    <tbody>
                        <tr>
                            <td style="vertical-align: top; padding-bottom:30px;" align="center">
                                <a href="<?php echo site_url("/"); ?>" target="_blank">
                                    <img src="<?php echo site_mail_logo; ?>" alt="Woodlands Hong Kong" style="border:none;height:100px;"/></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div style="padding: 40px; background: #fff;">
                    <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                        <tbody>
                            <tr>

                                <td>

                                    <b>Hello <?php echo $memberdata->name; ?>,</b>
                                    <p>Thank you for visiting our restaurants. 
                                        You have rewarded from our loyalty program membership, below you can view your rewarded reimbursement. 
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="    text-align: center;font-size: 12px;" colspan="2">
                                    <hr/>
                                    <table>
                                        <tr>
                                            <td class="leftaling">Order No.</td>
                                            <td class="leftaling"><?php echo $reimbursement->order_no; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="leftaling">Order Amount</td>
                                            <td class="leftaling"><?php echo globle_currency . number_format($reimbursement->order_amount_act, 2, '.', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="leftaling">Reimbursement</td>
                                            <td class="leftaling"><b><?php echo globle_currency . number_format($reimbursement->amount, 2, '.', '') ?></b></td>
                                        </tr>
                                        <?php
                                        if ($reimbursement->order_amount > (-1)) {
                                            ?>
                                            <tr>
                                                <td class="leftaling">Paid Amount</td>
                                                <td class="leftaling"><?php echo globle_currency . number_format($reimbursement->order_amount, 2, '.', ''); ?></td>
                                            </tr>
                                            <?php
                                        } else {
                                            ?>
                                            <tr>
                                                <td class="leftaling">Remaining Discount</td>
                                                <td class="leftaling"><?php echo globle_currency . number_format(($reimbursement->order_amount * (-1)), 2, '.', ''); ?></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>

                                    </table>

                                    <hr/>

                                </td>
                            </tr>
                            <tr>
                                <td style="    text-align: center;font-size: 18px;" colspan="2">
                                    <hr/>
                                    <p>   <img src="<?php echo $image; ?>" style="height: 300px;"/></p>

                                    <hr/>

                                </td>
                            </tr>
                            <tr>
                                <td style="" colspan="2">
                                    <?php echo EMAIL_FOOTER; ?>
                                </td>

                            </tr>

                        </tbody>
                    </table>
                </div>
                <div style="    text-align: center;
                     font-size: 12px;
                     background: #8CC646;
                     color: antiquewhite;
                     padding: 10px;">
                    <b>- Thanks -</b> 
                    <br/>
                    <img src="<?php echo site_mail_logo; ?>" style="margin: 10px; height: 50px;   width: auto;"/>

                </div>
            </div>
        </div>
    </body>

</html>
