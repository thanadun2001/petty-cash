<html>
<?php
function ThaiBahtConversion($amount_number)
{
    $amount_number = number_format($amount_number, 2, '.', '');
    //echo "<br/>amount = " . $amount_number . "<br/>";
    $pt = strpos($amount_number, '.');
    $number = $fraction = '';
    if ($pt === false) {
        $number = $amount_number;
    } else {
        $number = substr($amount_number, 0, $pt);
        $fraction = substr($amount_number, $pt + 1);
    }

    //list($number, $fraction) = explode(".", $number);
    $ret = '';
    $baht = ReadNumber($number);
    if ($baht != '') {
        $ret .= $baht . 'บาท';
    }

    $satang = ReadNumber($fraction);
    if ($satang != '') {
        $ret .= $satang . 'สตางค์';
    } else {
        $ret .= 'ถ้วน';
    }
    //return iconv("UTF-8", "TIS-620", $ret);
    return $ret;
}

function ReadNumber($number)
{
    $position_call = ['แสน', 'หมื่น', 'พัน', 'ร้อย', 'สิบ', ''];
    $number_call = ['', 'หนึ่ง', 'สอง', 'สาม', 'สี่', 'ห้า', 'หก', 'เจ็ด', 'แปด', 'เก้า'];
    $number = $number + 0;
    $ret = '';
    if ($number == 0) {
        return $ret;
    }
    if ($number > 1000000) {
        $ret .= ReadNumber(intval($number / 1000000)) . 'ล้าน';
        $number = intval(fmod($number, 1000000));
    }

    $divider = 100000;
    $pos = 0;
    while ($number > 0) {
        $d = intval($number / $divider);
        $ret .= $divider == 10 && $d == 2 ? 'ยี่' : ($divider == 10 && $d == 1 ? '' : ($divider == 1 && $d == 1 && $ret != '' ? 'เอ็ด' : $number_call[$d]));
        $ret .= $d ? $position_call[$pos] : '';
        $number = $number % $divider;
        $divider = $divider / 10;
        $pos++;
    }
    return $ret;
}
$QDKey = parameter('QDKey', '');
$pu = parameter('pu', '10');

$sqltxt = ' SELECT *  FROM `cashdescription`  ' . " WHERE QDKey='$QDKey' ";
$result = @mysqli_query($connect, $sqltxt);
$rs = @mysqli_fetch_array($result);

$CustomerID = $rs['CustomerID'];

$sqltxtm = ' SELECT * ' . '  FROM cashdetails ' . " WHERE  QDKey='$QDKey'   group by QTDKey order by QTDKey asc ";
$resultm = @mysqli_query($connect, $sqltxtm);
$numrm = @mysqli_num_rows($resultm);

$Monetary = 'บาท';

?>

<style>
    /*
table,tr,td,div{font-family:'Angsana New';font-size:18px;}
*/
</style>

<body>
    <center>


        <?php
$j=0;
$SumDis=0;
$SumAm=0;
$p=0;
while($rsm=@mysqli_fetch_array($resultm))
{
	if($p==0)
	{
		?>

        <table width="659" border="0" bordercolor="#000000" cellpadding="2" cellspacing="0"
            style="border-collapse:collapse;">
            <tr>

                <td style="font-size:19px;"><?php echo $rs['CompanyName']; ?>
                    <br /><br />
                    ใบขอเบิกค่าใช้จ่าย / ใบเบิกเงินสดย่อย
                </td>
            </tr>
        </table>

        <table width="659" border="0" bordercolor="#000000" cellpadding="2" cellspacing="0"
            style="border-collapse:collapse;">
            <tr>
                <td width="60%" valign="top">
                    <div
                        style="padding: 1px 5px;border-radius: 15px;border: 2px solid #bebebe; margin-left: auto; margin-right: auto;height:129px;">
                        <table width="100%" border="0" bordercolor="#000000" cellpadding="2" cellspacing="0"
                            style="border-collapse:collapse;">
                            <tr>
                                <td valign="top">
                                    <font color="#000000" size="2">จ่ายให้แก่
                                </td>
                                <td>
                                    <font size="2" color="#000000"><?php echo $rs['EmpID'] . ' : ' . $rs['Name']; ?>
                                </td>
                            </tr>

                            <tr>
                                <td valign="top">
                                    <font size="2" color="#000000">หน่วย
                                </td>
                                <td>
                                    <font size="2" color="#000000"><?php echo $rs['Section']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top">
                                    <font size="2" color="#000000">ส่วน
                                </td>
                                <td>
                                    <font size="2" color="#000000"><?php echo $rs['Division']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" width="99">
                                    <font size="2" color="#000000">ฝ่าย
                                </td>
                                <td>
                                    <font size="2" color="#000000"><?php echo $rs['Department']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" width="99">
                                    <font size="2" color="#000000">บริษัท
                                </td>
                                <td>
                                    <font size="2" color="#000000"><?php echo $rs['CompanyEmp']; ?>
                                </td>
                            </tr>
                        </table>
                    </div>

                </td>

                <td width="40%" valign="top">
                    <div
                        style="padding: 1px 5px;border-radius: 15px;border: 2px solid #bebebe; margin-left: auto; margin-right: auto;height:129px;">

                        <table width="100%" border="0" bordercolor="#000000" cellpadding="2" cellspacing="0"
                            style="border-collapse:collapse;">
                            <tr>
                                <td valign="top" width="99">
                                    <font color="#000000" size="2">Date
                                </td>
                                <td>
                                    <font size="2" color="#000000"><?php echo $rs['OrderDate']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top">
                                    <font size="2" color="#000000">CASH ID :
                                </td>
                                <td>
                                    <font size="2" color="#000000"><?php echo $rs['OrderNo']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top">
                                    <font size="2" color="#000000">ผู้ขอเบิก
                                </td>
                                <td>
                                    <font size="2" color="#000000"><?php echo $rs['Updater']; ?>
                                </td>
                            </tr>

                        </table>
                    </div>
                </td>
            </tr>
        </table>

        <?php
								if($rs['Step']=="cancel")
								{
								?><img src="{{ asset('/./img/cancel.png') }}"
            style="float:left;margin:-15px 0px 0px 50px;position:absolute;opacity: 0.3;" />
        <?php
								}
				?>

        <table width="659" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000"
            style="border-collapse:collapse;" height="420">
            <tr height="30">
                <td align="center">
                    <font size="2" color="#000000">No.<br />ลำดับ
                </td>
                <td align="center">
                    <font size="2" color="#000000">DESCRIPTION<br />รายละเอียดสินค้า
                </td>
                <td align="center">
                    <font size="2" color="#000000">Invoice<br />เลขกำกับภาษี
                </td>
                <td align="center">
                    <font size="2" color="#000000">VAT %
                </td>
                <td align="center">
                    <font size="2" color="#000000">AMOUNT<br />จำนวนเงิน
                </td>
            </tr>

            <?php
	}
	$p++;	
	
$j++;

$QP=$QP+$rsm['Price'];
$Disc=0;
$DisPrice=0;



$SumAm=$SumAm+$QP;

$TDP=$TDP+$QP-$Disc;

$SumDis=$SumDis+$Disc;


?>

            <tr height="45">
                <td width="39" align="center"
                    style="border:none;border-right:1px dashed #8c8b8b;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                    <font size="2" color="#000000"><?php echo $j; ?>
                </td>
                <td width="255"
                    style="font-size:12px;border:none;border-right:1px dashed #8c8b8b;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                    <?php echo $rs['CompanyID'] . '-' . $rsm['ItemNo'] . '<br />' . $rsm['PaymentName'] . ' : ' . @nl2br($rsm['Description']); ?>
                </td>


                <td align="center" width="80"
                    style="border:none;border-right:1px dashed #8c8b8b;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                    <font size="2" color="#000000"><?php echo $rsm['Invoice']; ?>
                        <?php echo $rsm['VAT'] > 0 ? '<br />' . $rsm['InvoiceDate'] : ''; ?> &nbsp;
                </td>

                <td align="right" width="80"
                    style="border:none;border-right:1px dashed #8c8b8b;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                    <font size="2" color="#000000"><?php echo @number_format($rsm['VAT'], 2); ?> &nbsp;
                </td>



                <td align="right" width="80"
                    style="border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                    <font size="2" color="#000000"><?php echo number_format($rsm['Price'], 2); ?> &nbsp;
                </td>
            </tr>
            <tr height="9">
                <td colspan="5" style="border:none;">
                    <hr width="95%" style="border:none;border-top: 1px dashed #8c8b8b;  " />
                </td>
            </tr>


            <?php
 if(($p==$pu)||($j==$numrm))
	{
		$p=0;
		?>


            <tr>

                <td valign="top"
                    style="border:none;border-right:1px dashed #8c8b8b;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                    <font size="2"> &nbsp;
                </td>
                <td valign="bottom"
                    style="border:none;border-right:1px dashed #8c8b8b;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                    <font size="2"><?php echo $j == $numrm ? $j . ' รายการ ' : ''; ?>
                </td>


                <td align="right" valign="top"
                    style="border:none;border-right:1px dashed #8c8b8b;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                    <font size="2"> &nbsp;
                </td>
                <td align="center" valign="top"
                    style="border:none;border-right:1px dashed #8c8b8b;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                    <font size="2"> &nbsp;
                </td>

                <td align="center" valign="top"
                    style="border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                    <font size="2"> &nbsp;
                </td>
            </tr>
        </table>
        <?php
if ($j<$numrm)
{
	?>
        <div style="padding: 1px 5px;border-radius: 15px; margin-left: auto; margin-right: auto;height:155px;">
            &nbsp;
        </div>
        <?php
}
	} 
	?>
        <?php
}  /* end while */

$Amount=$SumAm-$SumDis;
$VAT=$rs['VAT']*$Amount/100;
$Net=$Amount+$VAT;


?>





        <table width="659">
            <tr>
                <td width="380" valign="top">
                    <table width="100%" border="1" bordercolor="#000000" cellpadding="2" cellspacing="0"
                        style="border-collapse:collapse;">
                        <tr>
                            <td align="center">
                                <font size="2" color="#000000"><?php echo @ThaiBahtConversion(@round($QP, 2)); ?>
                            </td>
                        </tr>
                    </table>
                </td>

                <td width="270" valign="top">
                    <table width="100%">
                        <tr>
                            <td>
                                <font size="2"><b>TOTAL &nbsp;
                            </td>
                            <td align="right" width="50%">
                                <font size="2"><b><?php
                                echo @number_format($QP, 2) . '</b> &nbsp;' . $Monetary; ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2"><br />
                    <div style="font-size:14px;"><input type="checkbox" <?php echo $rs['CashType'] == 'IN' ? 'checked=true' : ''; ?>> ในวงเงินงบประมาณ
                        &nbsp; &nbsp; <input type="checkbox" <?php echo $rs['CashType'] == 'OUT' ? 'checked=true' : ''; ?>> นอกงบประมาณ
                        &nbsp; &nbsp; <input type="checkbox" <?php echo $rs['CashType'] == 'OVER' ? 'checked=true' : ''; ?>> เกินงบประมาณ
                    </div><br />
                    <div style="font-size:14px;">หมายเหตุ : <?php echo @nl2br($rs['Comment']); ?>
                    </div>
                </td>
            </tr>
        </table>

        <table width="659" border="0" bordercolor="#000000" cellpadding="2" cellspacing="0"
            style="border-collapse:collapse;">
            <tr>
                <td width="25%" align="center">
                    ผู้ขอเบิก
                    <div
                        style="padding: 1px 5px;border-radius: 15px;border: 2px solid #bebebe; margin-left: auto; margin-right: auto;">
                        <br /><br /><br />
                        วันที่ ......./......./............
                    </div>
                </td>


                <td width="25%" align="center">
                    ผู้อนุมัติ
                    <div
                        style="padding: 1px 5px;border-radius: 15px;border: 2px solid #bebebe; margin-left: auto; margin-right: auto;">

                        <br /><br /><br />
                        วันที่ ......./......./............

                    </div>
                </td>

                <td width="25%" align="center">
                    ผู้รับเงิน
                    <div
                        style="padding: 1px 5px;border-radius: 15px;border: 2px solid #bebebe; margin-left: auto; margin-right: auto;">

                        <br /><br /><br />
                        วันที่ ......./......./............

                    </div>
                </td>

                <td width="25%" align="center">
                    ผู้จ่ายเงิน
                    <div
                        style="padding: 1px 5px;border-radius: 15px;border: 2px solid #bebebe; margin-left: auto; margin-right: auto;">

                        <br /><br /><br />
                        วันที่ ......./......./............

                    </div>
                </td>


            </tr>
        </table><br />
        <div style="font-size:12px;"><?php echo $rs['SHIPFROM']; ?></div><br />

        <div style="height:69px;">&nbsp; </div>
        <?php
 if(!empty($rs['Attach']))
 {
	 ?>
        <a href="{{ url('./upimg/cash/<?php echo $rs['Attach']; ?>') }}" target="_blank"><u>ไฟล์แนบ</u></a>
        <div style="height:99px;">&nbsp; </div>
        <?php
 }
 ?>
        <!--
 <table>
 <tr><td>
 <table width="659" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000" style="border-collapse:collapse;" height="420">
<tr height="30">
<td  align="center"><font size="2" color="#000000">No.<br />ลำดับ</td>
<td  align="center"><font size="2" color="#000000">DESCRIPTION<br />รายละเอียดสินค้า</td>
<td  align="center"><font size="2" color="#000000">QUANTITY<br />จำนวน</td>
<td  align="center"><font size="2" color="#000000">COST<br />ราคา/หน่วย</td>
<td  align="center"><font size="2" color="#000000">MH</td>
<td  align="center"><font size="2" color="#000000">DM</td>
<td  align="center"><font size="2" color="#000000">DL</td>
<td  align="center"><font size="2" color="#000000">OH</td>
<td  align="center"><font size="2" color="#000000">COGS</td>

</tr>

<?php
$j=0;
$SumDis=0;
$SumAm=0;
@mysqli_data_seek($resultm,0) ;
while($rsm=@mysqli_fetch_array($resultm))
{
$j++;

?>

<tr height="39">
  <td  width="39" align="center"   style="border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
<font size="2" color="#000000"><?php echo $j; ?></td>
  <td   width="255" style="font-size:12px;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
<?php echo $rsm['Description']; ?>
  </td>

  <td  align="right" width="80"  style="border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
<font size="2" color="#000000"><?php echo $rsm['Quantity'] . ' ' . $rsm['UnitName']; ?> &nbsp; </td>

  <td align="right" width="80" style="border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
<font size="2" color="#000000"><?php echo @round($rsm['Cost'], 2); ?> &nbsp; </td>

  <td align="right" width="80" style="border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
<font size="2" color="#000000"><?php echo $rsm['MH']; ?> &nbsp; </td>


  <td align="right" width="80" style="border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
<font size="2" color="#000000"><?php echo $rsm['DM']; ?> &nbsp; </td>

  <td align="right" width="80" style="border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
<font size="2" color="#000000"><?php echo $rsm['DL']; ?> &nbsp; </td>

  <td align="right" width="80" style="border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
<font size="2" color="#000000"><?php echo $rsm['OH']; ?> &nbsp; </td>

  <td align="right" width="80" style="border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
<font size="2" color="#000000"><?php echo $rsm['COGS']; ?> &nbsp; </td>
 </tr>


<?php
}

?>
<tr>

  <td  valign="top" style="border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
<font size="2"> &nbsp;
  </td>
  <td  valign="bottom" style="border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
<font size="2">
  </td>

  <td align="right" valign="top" style="border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
<font size="2"> &nbsp;
  </td>
  <td  align="center" valign="top" style="border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
<font size="2"> &nbsp;
  </td>
    <td  align="center" valign="top" style="border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
<font size="2"> &nbsp;
  </td>
    <td  align="center" valign="top" style="border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
<font size="2"> &nbsp;
  </td>
    <td  align="center" valign="top" style="border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
<font size="2"> &nbsp;
  </td>
    <td  align="center" valign="top" style="border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
<font size="2"> &nbsp;
  </td>
    <td  align="center" valign="top" style="border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
<font size="2"> &nbsp;
  </td>
 </tr></table>
 </td></tr>
 </table> -->

    </center>
    <script>
        /* window.print(); */
    </script>
</body>

</html>
