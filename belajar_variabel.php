<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Latihan Manggil data</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="wrapper">
  <div id="header">
        
           <div class="container">
           		<img id="logo" src="images/logo.png">
                <div id="menu">
                	<ul>
                    	<li class="nav1"><a href="index.html">HOME</a></li>
                        <li class="nav2"><a href="news.html">NEWS</a></li>
                        <li class="nav3"><a href="products.html">PRODUCTS</a></li>
                        <li class="nav4"><a href="contact.html">CONTACT</a></li> 
                        <li class="nav5"><a href="gallery.html">GALLERY</a></li>
                    </ul>
                </div>
           </div>
            
     </div>
   <!---------------------------------------- END HEADER -------------------------------->
   <div id="greenLine"></div>
   		<div id="content">
			
			<?php
			$koneksi = new mysqli("localhost","root","","my_first_db_ridho");
			$sql ="SELECT * FROM member_tbl";
			$querynews = $koneksi->query($sql);
			$rownews = $querynews->fetch_assoc();
			
			do{
			?>	
				id member : <?php echo $rownews['id_member']; ?>
				member name : <?php echo $rownews['member_name']; ?>
				member email : <?php echo $rownews['member_email']; ?>
				member joindate : <?php echo $rownews['joindate']; ?>
			


			<?php } while ($rownews = $querynews->fetch_assoc()); ?>
        	
            <!--- END CONTENT Container -->
            
        </div>
<!---------------------------------------- END CONTENT ------------------------------->
		<div id="footer">
        
        	<div class="container">
            	<p> Copyright &copy; Your Company All Right Reserved</p>
            </div>
        
        </div>
<!---------------------------------------- END FOOTER -------------------------------->  
</div>
</body>
</html>
