<nav class="navbar navbar-expand-lg navbar-light bg-light container">
  <a href="#"><img src="dist/image/messenger.png?v=0001" class="icon_banner"> Banner</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<style type="text/css">
	.t_c{
		display: inline-block;
	}
	.type_category{

	}
	.type_category li.item_category{
		margin-left: 2rem;
	}
		.slidecontainer {
	  width: 100%;
	}

	.slider {
	  -webkit-appearance: none;
	  width: 100%;
	  height: 25px;
	  background: #d3d3d3;
	  outline: none;
	  opacity: 0.7;
	  -webkit-transition: .2s;
	  transition: opacity .2s;
	}

	.slider:hover {
	  opacity: 1;
	}

	.slider::-webkit-slider-thumb {
	  -webkit-appearance: none;
	  appearance: none;
	  width: 25px;
	  height: 25px;
	  background: #4CAF50;
	  cursor: pointer;
	  border-radius:20px;
	}

	.slider::-moz-range-thumb {
	  width: 25px;
	  height: 25px;
	  background: #4CAF50;
	  cursor: pointer;
	  border-radius:20px;
	}
	.valspan,.pinline{
		display: inline-block;
	}
</style>
<div class="container">
	<div class="row">
		<div class="card-body col-md-3">
			<ul class="list-unstyled type_category components" style="max-width: 13.5rem;">
				<li>
					<h3>ประเภทสินค้า</h3>
				</li>
				<li class="item_category">
			        <a href="#">หน้าแรก</a>
			    </li>
			    <li class="item_category">
			        <a href="#">สินค้า</a>
			    </li>
			    <li class="item_category">
			        <a href="#">ตะกร้าสินค้าของฉัน</a>
			    </li>
			    <li class="item_category">
			        <a href="#">เกี่ยวกับเรา</a>
			    </li>
			    <li class="item_category">
			        <a href="#">ติดต่อ</a>
			    </li>
			</ul>
			<ul class="list-unstyled type_category components" style="max-width: 13.5rem;">
				<li>
					<div class="slidecontainer">
					  <p>ราคา:</p>
					  เริ่มต้น
					  <input type="text" class="valuespanFirst" name="">
					  <input type="range" min="50" max="5000" value="800" class="slider" id="firstPrice">
					  สูงสุด
					  <input type="text" class="valuespanLimit" name="">
					  <input type="range" min="50" max="5000" value="3000" class="slider" id="endPrice">
					</div>
				</li>
				<script type="text/javascript">
					const firstvalue = $("#firstPrice");
					const firstspan = $(".valuespanFirst");
					firstspan.val(firstvalue.val());
					firstvalue.on('input change',function(){
						firstspan.val(this.value);
					});
					firstspan.keyup(function(){
						firstvalue.val(this.value);
					});
					const endvalue = $("#endPrice");
					const endspan = $(".valuespanLimit");
					endspan.val(endvalue.val());
					endvalue.on('input change',function(){
						endspan.val(this.value);
					});
					endspan.keyup(function(){
						endvalue.val(this.value);
					});
				</script>
			</ul>
		</div>
		<div class="card-body col-md-9 border">
			<div class="text">
				<p class="pinline">Date time</p>
				<p class="pinline float-right">Count Search Count Page</p>
			</div>
		</div>
	</div>
	
</div>