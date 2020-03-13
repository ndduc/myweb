<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Note Page</title>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<!--Style for Nav and Body-->
<link href="../stype/project.css" rel="stylesheet" type="text/css" />

	
  <script type="text/javascript" src="../script/project.js"></script>	
  <script type="text/javascript" src="../script/share.js"></script>
</head>
<body id="idbody" class="bodyIntro">
    <?php 
        include '../php_archive/query.php';
        $statement = selectCate();     
        $statement2 = selectTitle();
    ?>
    
	<div class="divNav">
		<nav class="nav1"> 
				<div class="cntNav0"><span id="idNav0"></span></div>
				<div class="cntNav1"><span id="idNav1"></span></div>
				<div class="cntNav2"><span id="idNav2"></span></div>
				<div class="cntNav3"><span id="idNav3"></span></div>
				<div class="cntNav4"><span id="idNav4"></span></div>
				<div class="cntNav5"><span id="idNav5"></span></div>
		</nav>

	</div>
    
    <div class="divInfo_Left">
        <div class="divInfo_Left_nested_1">
            <ul id="myUL">
                <?php 
                    while ($r = $statement->fetch()): 
                ?>
                <li><span class="caret"><?php echo $r['desc_1'] ?></b></span>
               
                    <ul class="nested">
                        <li>Water</li>
                        <li>Coffee</li>
                        <li><span class="caret">Tea</span>
                            <ul class="nested">
                                <li>Black Tea</li>
                                <li>White Tea</li>
                                <li><span class="caret">Green Tea</span>
                                <ul class="nested">
                                    <li>1</li>
                                    <li>2</li>
                                    <li>3</li>
                                    <li>3</li>
                                    <li>3</li>
                                </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <?php endwhile; ?>  
                 
            </ul>
        </div>
    </div>
    <div class="divMainCnt"> 
        <div class="divInfo">
            <?php 
               while ($c = $statement2->fetch()): 
            ?>
                <div class="divMyImageName_Note" id ="idMyImageName">
                    <div class="divMyImageDesc2_Note">       
                        <ul><b><?php echo $c['brief'] ?></b></ul>
                        <li><?php echo $c['desc_1'] ?></li>
                        <li><?php echo $c['desc_2'] ?></li>
                    </div>
                    <div class="divMyImage">
                            <!--Image goes here-->
                    </div>
                </div>
            <?php endwhile; ?>     
        </div>
    </div>
    
</body>
</html>