<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Intro Page</title>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<link href="../stype/intro.css" rel="stylesheet" type="text/css" />

	
<script type="text/javascript" src="../script/intro.js"></script>	
<script type="text/javascript" src="../script/share.js"></script>
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

	<div class="divMyImageName" id ="idMyImageName">
		<div class="divMyImage">
			<img class="imgMyImage" src="https://raw.githubusercontent.com/ndduc/myweb/master/resourse/myavater.png">
		</div>
		<div class="divMyImageDesc">
				<p><font size="8px">Duc D Nguyen</font></p>
				<p>(Programming enthusiast, Problem solving, Open-mindedness,<br>
					 , Team-player, self-motivated, and self-educated.)</p>
		</div>
		<div class="divMyImageDesc2">
			<h3>Greeting Wanderers</h3>
			<p>You have reached my introduction page.
				<br>What you can find in this page are my projects, equipments I use in software developing, and my interests and hobbies.
			</p>
		</div>
	</div>



	<div class="cntDummy" id="idDummy1">
	</div>


	<div class="divMyImageName2" id ="idMyImageName2">
		<div class="divMyImage">
			<img class="imgMyImage" src="https://raw.githubusercontent.com/ndduc/myweb/master/resourse/myavater.png">
		</div>
		<div class="divMyImageDesc">
				<p>My Name HERE 2</p>
		</div>
		<div class="divMyImageDesc2">
			<p>My brief introduction<br>can be whatever bullshit here, the more bullshit the better</p>
		</div>
	</div>
    
    <table>
            <tr>
                <th>Category ID</th>
                <th>Category Name</th>
            </tr>
            
            <?php 
                include '../php_archive/query.php';
                $statement = selectCate();
                while ($r = $statement->fetch()): 
            ?>
                <tr>
                    <td><?php echo $r['category_id'] ?></td>
                    <td><?php echo $r['category_name'] ?>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
	

</body>
</html>