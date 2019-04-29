<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="../../assets/js/prototype.js" language="javascript" type="text/javascript"></script>
        <script language="javascript">
            // ฟังก์ชั่นแสดงรายการสินค้า
            function Product(Div){
                var url_index = "<?php echo base_url(); ?>";
                var url = url_index + "ListProduct/list_porduct"; // ชื่อไฟล์ที่กำหนดให้ทำการประมวลผลเพื่อแสดง
                                             // รายการสินค้า
                var Addnew = new Ajax.Updater(Div, url,
                {method: "get"});
            }

            

            // ฟังก์ชั่นลบรายการสินค้าออกจากตะกร้า
            function removeBasket(productID, Div){
                
                var url_index = "<?php echo base_url(); ?>";
                var params = "productID="+productID;                  
                var url = url_index + "ListProduct/removeBasket";                 
                var Addnew = new Ajax.Updater(Div, url,
                {method: "get", parameters: params});

            }

            // ฟังก์ชั่นเพิ่มรายการสินค้าลงตะกร้า
            function DisplayBasket(productID, Div){

                var url_index = "<?php echo base_url(); ?>";
                var params = "productID="+productID;
                var url = url_index + "ListProduct/addBasket";
                var Addnew = new Ajax.Updater(Div, url,
                {method: "get", parameters: params});
                
            }
        </script>
    </head>
    <body onLoad="Product('product')">
    <!-- เรียกใช้ฟังก์ชั่น Product เพื่อให้แสดงรายการสินค้าเมื่อโหลดหน้านี้ขึ้นมา -->

    <table width="884" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <!-- ตำแหน่งแสดงรายการสินค้า -->
            <td align="center"><b>รายการสินค้า</b><br><div id="product"></div></td>
        </tr>

        <tr>
            <!-- ตำแหน่งแสดงสินค้าในตะกร้า -->
            <td align="center">
                <div id="orders">*** No item in the basket *** <div>
            </td>
        </tr>

    </body>
</html>