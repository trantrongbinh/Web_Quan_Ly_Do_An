<link rel="stylesheet" type="text/css" href="public/menu/ddsmoothmenu.css" />
<link rel="stylesheet" type="text/css" href="public/menu/ddsmoothmenu-v.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="public/menu/ddsmoothmenu.js"></script>
<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "smoothmenu1", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

ddsmoothmenu.init({
	mainmenuid: "smoothmenu2", //Menu DIV id
	orientation: 'v', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu-v', //class added to menu's outer DIV
	method: 'toggle', // set to 'hover' (default) or 'toggle'
	arrowswap: true, // enable rollover effect on menu arrow images?
	//customtheme: ["#804000", "#482400"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<!-- Markup for mobile menu toggler. Hidden by default, only shown when in mobile menu mode -->
<a class="animateddrawer" id="ddsmoothmenu-mobiletoggle" href="#">
<span></span>
</a>

<div id="smoothmenu1" class="ddsmoothmenu">
<ul>
<li><a href="index.php">Trang chủ</a></li>

<?php
  foreach ($menu as $mn) {
    ?>
    <li><a href="#"><?=$mn['TenBM']?></a>
    <ul>
    <?php
        $loai = explode(',',$mn['Loai']);//phan cach mang thanh cac mang con boi dau ','
        foreach ($loai as $l) {
          list($id, $ten, $tenkhongdau) = explode(':', $l);
          ?>
          <li><a href="index.php?id_loai=<?=$id?>&id_bomon=<?=$mn['idBM']?>&p=loai"><?=$ten?></a></li>
          <?php
        }
    ?>
    </ul>
    </li>
    <?php
  }
?>

<!-- <li><a href="#">cap 1</a>
  <ul>
  <li><a href="#">cap 2</a></li>
  <li><a href="#">cap 2</a></li>
  </ul>
</li> -->

<!-- <li><a href="#">cap 1</a>
  <ul>
  <li><a href="#">cap 2</a></li>
  <li><a href="#">cap 2</a>
    <ul>
    <li><a href="#">cap 3</a></li>
    <li><a href="#">cap 3</a></li>
    <li><a href="#">cap 3</a>
		<ul>
    		<li><a href="#">cap 4</a></li>
    		<li><a href="#">cap 4</a></li>
    		<li><a href="#">cap 4</a></li>
    		<li><a href="#">cap 4</a></li>
    		<li><a href="#">cap 4</a></li>
		</ul>
    </li>
    <li><a href="#">cap 3</a></li>
    </ul>
  </li>
  </ul>
</li> -->

</ul>
<br style="clear: left" />
</div>


