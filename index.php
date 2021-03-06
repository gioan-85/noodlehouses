<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="google-site-verification" content=" v0_GZZh8xovyJiMB4IRgsMatfolff6scK422CshbbLs">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Noodlehouses.ca</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<meta name="keywords" content="noodle house, pho house, PRAIRIE AVENUE, PORT COQUITLAM, BC V3B 5M8, Thai dishes, Pad Thai,Thai red green curry, Pho, chicken rice noodle soup, rare beef rice noodle soup, NOODLE HOUSE, PHO HOUSE, LAKESHORE, MISSISSAUGA, ON L5E 1E3, THAI DISHES, PAB THAI, THAI RED GREEN CURRY, PHO, CHICKEN RICE NOODLE SOUP, RARE BEEF RICE NOODLE SOUP">

<meta name="description" content="noodle house, pho house, Prairie Avenue, Port Coquitlam, BC V3B 5M8, Thai dishes, Pad Thai,Thai red green curry, Pho, chicken rice noodle soup, rare beef rice noodle soup, NOODLE HOUSE, PHO HOUSE, LAKESHORE, MISSISSAUGA, ON L5E 1E3, THAI DISHES, PAB THAI, THAI RED GREEN CURRY, PHO, CHICKEN RICE NOODLE SOUP, RARE BEEF RICE NOODLE SOUP">

<!--<meta name="description" content="caterer catering celebration chef corporate catering corporate event corportate catering dining dining at Twin Fish entree entrees event giveaways green mango healthy healthy choices love mango salad mississauga catering mississauga corporate catering parties popular entrees prizes red snapper red snapper with basil sauce special occassion staff starter thai dish thai dishes thai food thai food catering twin fish anniversary valentines day vitamin c">-->

<link rel="stylesheet" type="text/css" href="css/font.css">
<link rel="stylesheet" type="text/css" href="css/loading.css">
<link rel="stylesheet" type="text/css" href="css/global.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="fontawesome.5.9/css/all.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link id="favicon" rel="shortcut icon" type="image/png" href="images/favicon.png" />

<script src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript" src="js/jscript_jquery-1.js"></script>
<script type="text/javascript" src="js/js-image-slider.js"></script>
<script type="text/javascript" src="js/iscroll.js"></script>
<script type="text/javascript" src="js/global.js"></script>
<script type="text/javascript" src="js/order.js"></script>
<script>
  (function(i,s,o,g,r,a,m)
  {i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53869868-1', 'auto');
  ga('send', 'pageview');
  
  var mobile_browser = false;
  
  function detectmob() { 
	 if( navigator.userAgent.match(/Android/i)
	 || navigator.userAgent.match(/webOS/i)
	 || navigator.userAgent.match(/iPhone/i)
	 || navigator.userAgent.match(/iPad/i)
	 || navigator.userAgent.match(/iPod/i)
	 || navigator.userAgent.match(/BlackBerry/i)
	 || navigator.userAgent.match(/Windows Phone/i)
	 ){
		mobile_browser = true;
		
	 }
	 else {
		mobile_browser = false;
		 
	 }
}

	detectmob();

</script>


</head>

<?php 
	require_once("includes/application_top.php");
	require_once("get_location_time.php");
    function isMobile() {
        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
    }
?>

<body>
<div style="display:none">
	<img src="images/menu_bg.jpg" width="1428" height="1469" />
    <img src="images/order_bg.jpg" width="1607" height="1004" />
    <?php
		$address = '1466 Prairie Avenue, Port Coquitlam, BC V3B 5M8';
		$phone_number = '(604)-945-9597';
		$open_time  = 'MONDAY-THURSDAY 11AM-9PM<br>';
		$open_time .= 'FRIDAY-SATURDAY 11AM-10PM<br>';
		$open_time .= 'SUNDAY 12AM-9PM';
		echo '<div id="time_now">' . get_timee("Canada","Coquitlam") . '</div>';
	?>
</div>
<div class="loading_page align_mid">
	<div class="icon_loading">
    	<div class="text_loading Hel_bold">Noodle House</div>
        <div class="loading_bar">
        	<div id="fountainG">
            	<div id="fountainG_1" class="fountainG"></div>
                <div id="fountainG_2" class="fountainG"></div>
                <div id="fountainG_3" class="fountainG"></div>
                <div id="fountainG_4" class="fountainG"></div>
                <div id="fountainG_5" class="fountainG"></div>
                <div id="fountainG_6" class="fountainG"></div>
                <div id="fountainG_7" class="fountainG"></div>
                <div id="fountainG_8" class="fountainG"></div>
                <div id="fountainG_9" class="fountainG"></div>
			</div>
        </div>
    </div>
</div>
    <!--top bar-->
    <div class="top_bar Hel_Con">
        <div class="cover align_mid">
            <div class="menu_toggle_icon">
                <a class="fas fa-bars"></a>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-8 col-xs-10">
                <div class="top_logo"></div>
                    <ul class="align_mid">
                        <li class="align_mid">
                            <a href="javascript:void(0)" id="top_home" class="top_menu active" rel=".home_screen" po='top'>HOME
                                <div class="top_line"></div>
                                <div class="left_line"></div>
                                <div class="bot_line"></div>
                                <div class="right_line"></div>
                            </a>
                        </li>
                        <li class="align_mid">
                            <a href="javascript:void(0)" id="top_menu" class="top_menu" rel=".menu_screen" po='top'>MENU
                                <div class="top_line"></div>
                                <div class="left_line"></div>
                                <div class="bot_line"></div>
                                <div class="right_line"></div>
                            </a>
                        </li>
                        <li class="align_mid">
                            <a href="javascript:void(0)" id="top_contact" class="top_menu" rel=".contact_screen" po='top'>CONTACT US
                                <div class="top_line"></div>
                                <div class="left_line"></div>
                                <div class="bot_line"></div>
                                <div class="right_line"></div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="social_block">
                <a href="javascript:void(0)" class="social_icon facebook fab fa-facebook-f"></a>
                <a href="javascript:void(0)" class="social_icon twitter  fab fa-twitter"></a>
            </p>
            
        </div>
    </div>
    <!--home screen-->
    <div class="home_screen _screen">
        <div class="cover">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="home_text">
                        <div class="text_3">
                            <span class="PALSCRI">Experience</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <img class="home_bg" src="images/home_bg_1.jpg"/>
                </div>
            </div>
            
            <div id="address_bar">
                <div class="row address_bar">
                    <div class="col-lg-2 col-md-2 hidden-sm hidden-xs left_text align_mid">
                        <p>OUR<br>
                        <b>DELICIOUS<br>
                        FOOD</b> AT<br>
                        YOUR<br>
                        DOORSTEP</p>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-6 hidden-xs phone_numb align_mid white">
                        <p><span class="Hel_Light">Call us</span><br>
                        <b class="Hel_bold">(604)-945-9597</b></p>
                        <div class="OR Hel_Light align_mid">Or</div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 Order align_mid">
                        <a href="https://www.clover.com/online-ordering/noodle-house-ptcoquitlam" target="_blank" class="order_btn align_mid">Order now</a>
                    </div>
                </div>    
            </div>
        </div>
    </div>
    <!--menu screen-->
    <div class="menu_screen _screen">
        <div class="cover">
            <!--menu-list-->
            <div  id="menu_list" class="row">
                <div class="top_title col-lg-12 col-md-12 col-sm-12 col-xs-12"><b>EXPERIENCE THE BEST FOOD</b></div>
                <?php 
                    $count = 0;
                    $menu = tep_db_query('select * from menu where menu.STATUS = 1 ORDER BY RATE');
                    echo '<div class="menu_list align_mid desktop col-lg-12 col-md-12 col-sm-12 hidden-xs">';
                    while ( $element = tep_db_fetch_array($menu))
                    {
                        echo '<div class="menu_item" rel="'.$element["NAME"].'">';
                        echo '<div class="menu_name Hel_Con_Bold">' . $element["NAME"] . '</div>';
                        echo '<img src="images/menu/' . str_replace(' ','',$element["NAME"]) . '_menu.png">';
                        echo '</div>';
                        if( $count == 5)
                            echo '</div><div class="menu_list align_mid desktop  col-lg-12 col-md-12 col-sm-12 hidden-xs">';
                        $count++;
                    }
                    echo '</div>';
                ?>
                <?php
                    $menu = tep_db_query('select * from menu where menu.STATUS = 1 ORDER BY RATE'); 
                    echo '<div class="hidden-lg hidden-md hidden-sm col-xs-12 menu_block">';
                        while ( $item = tep_db_fetch_array($menu))
                        {
                            echo '<div class="menu_title" rel="'.$item["ID"].'">'.$item["NAME"].'</div>';
                            $menu_list = tep_db_query("select foods.KEY, foods.NAME, foods.PRICE, foods.MENU, foods.ID, foods.DESCRIPTION from foods, menu where foods.MENU = menu.ID and menu.NAME = '" . $item["NAME"] . "' ORDER BY foods.ID");
                            echo '<div class="toggle_menu ani_speed toggle_'.$item["ID"].'">';
                            echo '<div class="toggle_menu_wrapper">';
                            echo '<div class="toggle_menu_close" data-toggle_menu="toggle_'.$item["ID"].'"></div>';
                            echo '<div class="toggle_menu_cover">';
                            echo '<div class="toggle_menu_scroller">';
                            
                            while( $item_list = tep_db_fetch_array($menu_list)){
                                $key_ = explode('_',$item_list['KEY']);

                                if(!$key_[1])
                                    $key = $key_[0];
                                else
                                    $key = $key_[1].')';
                                

                                if($item_list['PRICE'] == '0.00')
                                    $item_list['PRICE'] = '';

                                echo '<div class="menuItem">';
                                echo '<div class="menuItemName">'. $key . '. '. $item_list["NAME"] . '<br>' . $item_list["DESCRIPTION"] . '</div>';
                                echo '<div class="menuItemPrice">'.$item_list["PRICE"] .'</div>';
                                echo '<div class="menuItemButton">';
                                    if($item_list['PRICE'] !== '')
                                        // echo '<div class="btn_add" onclick="add_to_bill(\''.$item_list["ID"].'\',\''.$item_list["KEY"].$item_list["NAME"].'\',\''.$item_list["PRICE"].'\')" onmousedown="$(this).addClass(\'actived\')" onmouseup="$(this).removeClass(\'actived\')"></div>';
                                        echo '<a href="https://www.clover.com/online-ordering/noodle-house-ptcoquitlam" target="_blank" class="btn_add"></a>';
                                echo '</div>';
                                echo '</div>';
                            }
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    echo '</div>';
                ?>
                <div id="menu_item_list" class=" col-lg-12 col-md-12 col-sm-12 hidden-xs">
                    <div class="menu_list_content" id="">
                        <div class="navi col-lg-12 col-md-12 col-sm-4 col-xs-4">
                            <ul>
                            <?php
                                $menu = tep_db_query('select * from menu where menu.STATUS = 1 ORDER BY RATE');
                                while ( $ele = tep_db_fetch_array($menu))
                                {
                                    echo '<li rel="'.$ele["NAME"].'"><a href="javascript:void(0)" class="align_mid">'.$ele["NAME"].'</a></li>';
                                }
                            ?>
                            </ul>
                        </div>    
                        <div class="left_block col-lg-4 col-md-4 hidden-sm hidden-xs">
                            <div class="menu_name Hel_Con_Bold green">Thai Dishes</div>
                            <div class="menu_img">
                                
                            </div>
                        </div>
                        <div class="right_block col-lg-8 col-md-8 col-sm-8 col-xs-8">
                            <!-- <div class="menu_list_scroll">
                                <div id="scroller">
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!---->
            
            <div class="shopping_cart">
                <a class="align_mid checkout" id="shopping_cart_check_out" href="javascript:void(0)" onclick=""><b>Check out</b></a>
                <div class="item_count align_mid">Item(s) <b>0</b></div>
            </div>
            <div id="Del_Pick_bar">
                <div class="Del_Pick_bar">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs Del_Pick_block align_mid">
                            <p></p> Most popular.<br /><span>(Our food may contain or contact with allergens. <br />Please let us know if you have any food allergies.)</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 cold-xs-12 address_block align_mid">
                            <?php 
                                echo $address . '<br>';
								echo $phone_number . '<br>';
                                echo $open_time; 
                            ?>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!--order screen-->
    <div class="order_screen _screen">
        <div class="cover">
            <div class="order_content">
                <div class="row">
                    <div class="left_content col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="title red Hel_Con_Bold">Your Information</div>
                        <div class="title_bar active" status='pickup'>
                            <a href="javascript:void(0)">Pick up</a>
                            <div class="pick_info">
                                <div class="radio_button active" id='30_minutes'><span></span><a href='javascript:void(0)'>Pick up after 30 minutes from now</a></div>
                                <div class="radio_button" id='pickup_time'><span></span><a href='javascript:void(0)'>Pick up today at this time</a></div>
                                <div class="pick_time">
                                    <span>Hours</span>
                                    <select class='hours' id="pick_hour">
                                        <option>09</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14</option>
                                        <option>15</option>
                                        <option>16</option>
                                        <option>17</option>
                                        <option>18</option>
                                        <option>19</option>
                                        <option>20</option>
                                        <option>21</option>
                                    </select>
                                    <span>Minutes</span>
                                    <select class='minute' id="pick_minute">
                                        <option>00</option>
                                        <option>10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>40</option>
                                        <option>50</option>
                                    </select>
                                </div><br /><br />
                                <input class="text_field Hel_Thin" id="order_name" type="text" value="Name..." onClick=" if(document.getElementById('order_name').value == 'Name...') document.getElementById('order_name').value = ''; " onBlur=" if(document.getElementById('order_name').value == '') document.getElementById('order_name').value = 'Name...'; " >
                                <input class="text_field Hel_Thin" id="order_phone_number" type="text" value="Phone..." onClick=" if(document.getElementById('order_phone_number').value == 'Phone...') document.getElementById('order_phone_number').value = ''; " onBlur=" if(document.getElementById('order_phone_number').value == '') document.getElementById('order_phone_number').value = 'Phone...'; ">
                                <input class="text_field Hel_Thin deactive" id="order_address" type="text" value="Address..." onClick=" if(document.getElementById('order_address').value == 'Address...') document.getElementById('order_address').value = ''; " onBlur=" if(document.getElementById('order_address').value == '') document.getElementById('order_address').value = 'Address...'; ">
                                <textarea class="text_field Hel_Thin" id="order_note" type="text" rows="5" onClick=" if(document.getElementById('order_note').value == 'Note...') document.getElementById('order_note').value = ''; " onBlur=" if(document.getElementById('order_note').value == '') document.getElementById('order_note').value = 'Note...'; ">Note...</textarea>
                            </div>
                        </div>
                        <div class="title_bar" status='delivery' onclick="messagebox('coming soon...');">
                            <a href="javascript:void(0)">Delivery</a>
                            <div class="delivery_info">
                                
                            </div>
                        </div>
                    </div>
                    <div class="right_content col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="receipt_content">
                            <div class="title">
                                NOODLEHOUSES.CA<br>
                                <span>
                                    <?php 
                                        echo $address . '<br>';
										echo $phone_number . '<br>';
										echo $open_time; 
                                    ?>
                                </span>
                            </div>
                            <div class="receipt_scroller">
                                <div id="scroller">
                                <table cellpadding="0" cellspacing="0" class="bill_list">
                                    
                                </table>
                                </div>
                            </div>
                            <table cellspacing="0" cellspacing="0">
                                <tr class="tax_ship">
                                    <td>GST</td>
                                    <td><span id="bill_tax">5</span>%</td>
                                </tr>
                                <!-- <tr class="tax_ship">
                                    <td>Ship</td>
                                    <td>123</td>
                                </tr> -->
                                <tr class="total">
                                    <td>Total</td>
                                    <td><span id="bill_cost">0</span>$</td>
                                </tr>
                            </table>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 align_mid"><a href="javascript:void(0)" class="btn_submit Hel_Thin" id="order_submit">Submit</a></div>
                </div>
            </div>
            
        </div>
    </div>
    <!--contact screen-->
    <div class="contact_screen _screen">
        <div class="cover">
            <div class="contact_icon"><span></span></div>
            <div class="mid_text align_mid">
                <b class="red Hel_Con_Bold">CONTACT US</b>
            </div>
            <div class="mid_text align_mid">We love to hear form you</div>
            <div class="contact_field row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 left_field">
                    <input type="text" class="text_field Hel_Thin" id="contact_name" value="Your name..." 
                    onClick=" if(document.getElementById('contact_name').value == 'Your name...') document.getElementById('contact_name').value = ''; " 
                    onBlur=" if(document.getElementById('contact_name').value == '') document.getElementById('contact_name').value = 'Your name...'; ">
                    <input type="text" class="text_field Hel_Thin" id="contact_phone" value="Your phone number..."
                    onClick=" if(document.getElementById('contact_phone').value == 'Your phone number...') document.getElementById('contact_phone').value = ''; " 
                    onBlur=" if(document.getElementById('contact_phone').value == '') document.getElementById('contact_phone').value = 'Your phone number...'; ">
                    <input type="text" class="text_field Hel_Thin" id="contact_email" value="Your email..."
                    onClick=" if(document.getElementById('contact_email').value == 'Your email...') document.getElementById('contact_email').value = ''; " 
                    onBlur=" if(document.getElementById('contact_email').value == '') document.getElementById('contact_email').value = 'Your email...'; ">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                    <textarea class="text_field Hel_Thin" id="contact_note" type="text" rows="7" 
                    onClick=" if(document.getElementById('contact_note').value == 'Your message...') document.getElementById('contact_note').value = ''; " 
                    onBlur=" if(document.getElementById('contact_note').value == '') document.getElementById('contact_note').value = 'Your message...'; ">Your message...</textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 align_mid">
                    <a href="javascript:void(0)" class="btn_submit Hel_Thin" id="contact_submit">Submit</a>
                </div>
            </div>
        </div>
        <div id="map">
            <div id="map_canvas"></div>
            <script language="javascript" src="js/map.js"></script>
        </div>
    </div>
    <!--footer-->
    <div class="footer">
        <div class="cover">
            <div class="row">
                <div class="left_info col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    (604)-945-9597<br>
                    1466 Prairie Avenue, Port Coquitlam, BC V3B 5M8
                </div>
                <div class="right_info col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    &copy; Copyright 2010 NooldeHouse.ca. All right reserved<br>
                    Design by NoodleHouses.ca
                </div>
            </div>
        </div>
    </div>
    <!-- event -->
    <!-- <div class="event show" id="onScreenEvent">
        <div class="cover">
            <div class="Special_time speed">
                <div class="Special_content">
                    <!-- <div class="Special_header">Merry Christmas and a Happy New Year!</div> -->
                    <p>
                        We will close on January 5<sup>th</sup> and 6<sup>th</sup> for kitchen upgrades.<br>
                        We apologize for any inconvenience.
                    </p>
                    <div class="Special_footer">
                        HP Noodle House
                    </div>                
                </div>
                <div class="Special_close"></div>
            </div>
            <div class="Special_icon"></div>
        </div>
    </div>	 -->
</body>



