<head>
	<link rel="stylesheet" href="sBStyle.css">
	<script src="https://kit.fontawesome.com/abfa77da96.js" crossorigin="anonymous"></script>
</head>





<form action="products.php" method="GET" style="display: flex; width:100%;">
	<div class="filtering"> 
		<div id="btns">
			<div id="sortOfContainer">
				<div class="button" id="SortBtn">
				<p>Sort By</p>
				<div class="arrow-down"></div>
			</div>

			<div style="display:flex; justify-content:center;">
				<div class="PriceSrt"> 
					<p>Price</p>
					<div class="PriceSrtBtn">
						<select name="" id="" style="display: none;" >
							<option value="">hello</option>
						</select>
						<button name="price" value="ASC"  ><div class="arrow-top FilteringBtn"></div></button>
						<button name="price" value="DESC" ><div class="arrow-down FilteringBtn"></div></i></button>
					</div>
				</div>
			</div>
		</div>

		
		<div id="filter">
			<div class="button" id="FilterBtn">
				<p>Filter</p>
				<div class="arrow-down"></div>
			</div>

			<div  style="display: flex;justify-content: center;">
				<div class="filterContainer">
					<div class="priceFilter">
						<div class="PFBtn">
							<p>Price</p>
							<div class="arrow-down"></div>
						</div>
						<hr>

						<div class="PFProperties">
							<input type="checkbox" name="" id="" >Under 3000DH
							<input type="checkbox" name="" id="" >Under 3000DH
							<input type="checkbox" name="" id="" >Under 3000DH
						</div>
					</div>
					<div class="category">
						<div class="PFBtn">
							<p>Specification</p>
							<div class="arrow-down"></div>
						</div>
						<hr>
						<div class="PFProperties Sp">
							<button name="sp1" id="sp1" class="categoryBtn">Gaming</button>
							<button name="sp2" id="sp2" class="categoryBtn">Work</button>
							<button name="sp3" id="sp3" class="categoryBtn">School</button>
							<button name="sp4" id="sp4" class="categoryBtn">Montage</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="sb">

		<div class="searchBar">
			<input type="search" id="site-search" name="q"  placeholder="Search... " value="<?php echo !empty($_GET['q'])?$_GET['q']:''; ?>"/>
			<button><i class="fa-solid fa-magnifying-glass"></i></button>
			</div></div>
		</div>
	</div>
</form>

<script>
	document.getElementById("SortBtn").addEventListener("click", function() {
		document.querySelector(".PriceSrt").classList.toggle("clicked");
	});
		
	document.getElementById("FilterBtn").addEventListener("click", function() {
		document.querySelector(".filterContainer").classList.toggle("clicked");
	});
		
	document.getElementById("sp1").addEventListener("click", function() {
		this.classList.toggle("clicked");
	});

	document.getElementById("sp2").addEventListener("click", function() {
		this.classList.toggle("clicked");
	});

	document.getElementById("sp3").addEventListener("click", function() {
		this.classList.toggle("clicked");
	});

	document.getElementById("sp4").addEventListener("click", function() {
		this.classList.toggle("clicked");
	});
</script>