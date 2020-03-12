<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Note Page</title>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<!--Style for Nav and Body-->
<link href="stype/project.css" rel="stylesheet" type="text/css" />

	
  <script type="text/javascript" src="script/project.js"></script>	
  <script type="text/javascript" src="script/share.js"></script>
</head>
<body id="idbody" class="bodyIntro">

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
        <?php 
            include 'php/query.php';
            $statement = selectCate();
            while ($r = $statement->fetch()): 
        ?>
            <div class="divMyImageName" id ="idMyImageName">
		<div class="divMyImageDesc2">       
                    <ul><?php echo $r['category_id'] ?></ul>
                    <li><?php echo $r['category_name'] ?></li>
		</div>
		<div class="divMyImage">
			<!--Image goes here-->
		</div>
            </div>
        <?php endwhile; ?>        

</body>
</html>