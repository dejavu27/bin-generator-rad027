<html>
	<title>CC Bin Generator by Ph.Dejavu</title>
<head>
	<meta name=description content="CC Bin Generator by Ph.Dejavu. This app is free to use and build to generator a VALID Credit Card from bins." />
	<meta name=author content="Ph.Dejavu(RSG Release Team)" />
	<meta property=og:url content=https://ccbingen.moe/ />
	<meta property=og:type content=website />
	<meta property=og:title content="CC Bin Generator by Ph.Dejavu" />
	<meta property=og:image content="phdejavu.png" />
	<meta property=og:description content="CC Bin Generator by Ph.Dejavu. This app is free to use and build to generator a VALID Credit Card from bins." />
	<meta property=profile:first_name content="Ph.Dejavu(RSG Release Team)" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="./bootstrap.css">
	<script type="text/javascript">
		if (window.location.protocol != "https:")
		    window.location.href = "https:" + window.location.href.substring(window.location.protocol.length);
	</script>
	<style type="text/css">
		body{
			font-family: 'Lato';
			margin: 0px;
			padding: 0px;
			background: url(bg.jpg) top center no-repeat;
			background-size : cover;
		}
		h1 {
			font-size: 45px;
			text-align: center;
			color: #eee;
			text-shadow : 0 0 5px #222;
			padding: 0px;
			line-height: 45px;
			margin-bottom: 0px
		}
		h2 {
			font-size: 25px;
			text-align: center;
			color: #eee;
			text-shadow : 0 0 5px #222;
			line-height: 10px;
			margin-top: 0px;
		}
		h3 {
			font-size: 25px;
			text-align: center;
			color: #eee;
			text-shadow : 0 0 5px #222;
			line-height: 10px;
			margin-top: 0px;
		}
		button{
			transition: 1s;
		}
	</style>
</head>
<body>
<div class="col-md-6 col-md-offset-3" style="margin-bottom: 20px">
	<h1>CC BIN GENERATOR</h1>
	<h2>BY</h2>
	<h3>Ph.Dejavu</h3>
</div>
<div class="col-md-6 col-md-offset-3">
	<div class="btn-group btn-group-justified" role="group" aria-label="...">
	  <div class="btn-group" role="group">
	    <a href="#first" class="btn btn-primary" aria-controls="first" role="tab" data-toggle="tab">CC BIN GENERATOR</a>
	  </div>
	  <div class="btn-group" role="group">
	    <a href="#second" class="btn btn-primary" aria-controls="second" role="tab" data-toggle="tab">GENERATED CREDIT CARD</a>
	  </div>
	  <div class="btn-group" role="group">
	    <a href="#third" class="btn btn-primary" aria-controls="third" role="tab" data-toggle="tab">CREDIT CARD VALIDATOR</a>
	  </div>
	</div>
	<div class="btn-group btn-group-justified" role="group" aria-label="...">
	  <div class="btn-group" role="group">
	    <a href="#" class="btn btn-warning" aria-controls="first" role="tab" data-toggle="tab">COMING SOON</a>
	  </div>
	  <div class="btn-group" role="group">
	    <a href="#fifth" class="btn btn-primary" aria-controls="first" role="tab" data-toggle="tab">BIN LIST</a>
	  </div>
	  <div class="btn-group" role="group">
	    <a href="#" class="btn btn-warning" aria-controls="first" role="tab" data-toggle="tab">COMING SOON</a>
	  </div>
	</div>
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active fade in" id="first">
			<div class="panel panel-default" style="margin-top: 0px">
				<div class="panel-heading">
					CC Bin generator
				</div>
				<div class="panel-body">
				  <div class="alert alert-warning">
				  	This feature is use to generate a valid Credit(and possibly live cc) from Credit Card BIN(Bank Identification Number).
				  </div>
				  <form class="formal">
					  <div class="form-group">
					    <label for="exampleInputEmail1">CC BIN : </label>
					    <input type="text" maxlength="16" class="form-control" name="ccbin" id="ccbin" placeholder="E.g 5442892xxx23xxxx" required>
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Generated CC Number Counts : </label>
					    <input type="number" max="50" class="form-control" name="cccount" id="cccount" placeholder="E.g 20" required>
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">OPTIONS : </label>
					  </div>
					  <div class="checkbox">
					    <label>
					      <input type="checkbox" name="expd" id="expd"> Expiration Date
					    </label>
					  </div>
					  <div class="checkbox">
					    <label>
					      <input type="checkbox" name="cvv" id="cvv"> CVV/CVV2
					    </label>
					  </div>
					  <center>
					  		<button type="submit" class="btn btn-lg btn-success">GENERATE</button>
					  </center>
					  <div class="results" style="padding:0px;margin:0px;height: 250px;max-height:250px;overflow:auto;overflow-x:hidden">
						  <div class="form-group divresults" style="display: none">
						    <label for="exampleInputEmail1">RESULTS : </label><br>
						    <div></div>
						  </div>
					  </div>
				  </form>
				</div>
			</div>
		</div>
		<div role="tabpanel" class="tab-pane fade" id="second">
			<div class="panel panel-default" style="margin-top: 0px">
				<div class="panel-heading">
					GENERATED CREDIT CARD
				</div>
				<div class="panel-body">
				  <div class="alert alert-warning">
				  	This feature is a tool that gives you an already generated Credit Card from bin stored in my list. Some of it are working and live with low balance.
				  </div>
					<form class="cardgenform">
						<div class="col-md-12" style="text-align: center">
							<center><input type="checkbox" name="tc"><br>With Expiry Date & CVV</input></center>
						</div>
						<div class="col-md-6">
							<center><button type="button" name="master" value="master" class="btn btn-info">Master Card</button></center>
						</div>
						<div class="col-md-6">
							<center><button type="button" name="master" value="visa" class="btn btn-info">Visa Card</button></center>
						</div>
					</form>
					<div class="proresults" style="height: 350px;text-align: center;">
						
					</div>
				</div>
			</div>
		</div>
		<div role="tabpanel" class="tab-pane fade" id="third">
			<div class="panel panel-default" style="margin-top: 0px">
				<div class="panel-heading">
					CREDIT CARD VALIDATOR
				</div>
				<div class="panel-body">
				  <div class="alert alert-warning">
				  	This feature is a tool to confirm if your credit card number is valid or passed in bank`s algorithm.
				  </div>
					<div class="col-md-6">
						<center><a href="#singlevalid" class="btn btn-primary" aria-controls="singlevalid" role="tab" data-toggle="tab">SINGLE VALIDATION</a></center>
					</div>
					<div class="col-md-6">
						<center><a href="#bulkvalid" class="btn btn-primary" aria-controls="bulkvalid" role="tab" data-toggle="tab">BULK VALIDATION</a></center>
					</div>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active fade in" id="singlevalid">
							<center><span style="font-size: 25px">SINGLE VALIDATION</span></center>
							<form class="singleform">
						  		<div class="form-group">
									<label for="exampleInputEmail1">Credit Card number : </label>
									<div class="input-group col-md-12">
										<input type="text" maxlength="16" class="form-control" name="ccnumber" id="ccnumber" required>
										<span class="input-group-addon singlebadge" style="display: none"></span>
									</div>
							    </div>
							    <div class="form-group">
							    	<button type="submit" class="btn btn-success pull-right">VALIDATE</button>
							    	<button type="reset" class="btn btn-warning pull-right">CLEAR</button>
							    	<div style="clear:both"></div>
							    </div>
							</form> 
						</div>
						<div role="tabpanel" class="tab-pane fade" id="bulkvalid">
							<center><span style="font-size: 25px">BULK VALIDATION</span></center>
							<form class="bulkform">
						  		<div class="form-group">
									<label for="exampleInputEmail1">Credit Card numbers(1 CC per line) : </label>
								    <textarea class="form-control" name="ccnumbers" style="width:100%;resize: none" rows="10"></textarea>
							    </div>
							    <div class="form-group">
							    	<button type="submit" class="btn btn-success pull-right">VALIDATE</button>
							    	<button type="reset" class="btn btn-warning pull-right">CLEAR</button>
							    	<div style="clear:both"></div>
							    </div>
							</form> 
							<div class="bulkresult" style="display: none;">
								<table class="table table-striped bulk-body" style="font-size: 14px">
									<thead>
										<tr>
											<th>NO.</th>
											<th>CC Numbers</th>
											<th>STATUS</th>
										</tr>
									</thead> 
									<tbody></tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div role="tabpanel" class="tab-pane fade" id="forth">
			<div class="panel panel-default" style="margin-top: 0px">
				<div class="panel-heading">
					CREDIT CARD VALIDATOR
				</div>
				<div class="panel-body">
				  <form class="formal">
					  <div class="form-group">
					    <label for="exampleInputEmail1">Credit Card number : </label>
					    <input type="text" maxlength="16" class="form-control" name="ccnum" id="ccnum" required>
					  </div>
				  </form>
				</div>
			</div>
		</div>
		<div role="tabpanel" class="tab-pane fade" id="fifth">
			<div class="panel panel-default" style="margin-top: 0px">
				<div class="panel-heading">
					BIN LIST
				</div>
				<div class="panel-body">
				  <div class="alert alert-warning">
				  	This bin could be not work because some it are already dead but there is still more chance once you trie generating it on CC Bin Generator.If you`d like to donate a bin, PM mo on my <a href="https://www.facebook.com/roldhan27" target="_blank">Facebook</a>. Thank you :)
				  </div>
				  <h2 style="color:222;text-shadow:0px 0px 0px">BIN WITH INFO</h2><br>
				  <div class="alert alert-danger">generate this using cc bin generator this is not included to auto generated cc</div>
				  <table class="table table-striped" style="font-size: 14px">
				  		<thead>
				  			<tr>
				  				<th>Bin Number</th>
				  				<th>Exp Date(mm/yy)</th>
				  				<th>CVV</th>
				  				<th>IP(optional)</th>
				  			</tr>
				  		</thead>
						<tbody class="bin-body">
							<!-- Divider para iwas lito -->
							<tr>
								<td>4766870052xxxxxx</td>
								<td>04/18</td>
								<td>524</td>
								<td>Any</td>
							</tr>
							<!-- Divider para iwas lito -->
							<tr>
								<td>4147215463xxxxxx</td>
								<td>07/16</td>
								<td>Any</td>
								<td>Any</td>
							</tr>
							<!-- Divider para iwas lito -->
							<tr>
								<td>4147215xxxxxxxxx</td>
								<td>07/16</td>
								<td>Any</td>
								<td>Any</td>
							</tr>
							<!-- Divider para iwas lito -->
							<tr>
								<td>414720211xxxxxxx</td>
								<td>07/16</td>
								<td>Any</td>
								<td>Any</td>
							</tr>
							<!-- Divider para iwas lito -->
							<tr>
								<td>414720211xxxxxxx</td>
								<td>07/16</td>
								<td>Any</td>
								<td>Any</td>
							</tr>
							<!-- Divider para iwas lito -->
							<tr>
								<td>42136440xxxxxxxx</td>
								<td>03/17</td>
								<td>172</td>
								<td>Any</td>
							</tr>
							<!-- Divider para iwas lito -->
							<tr>
								<td>533609701544xxxx</td>
								<td>12/16</td>
								<td>377</td>
								<td>Any</td>
							</tr>
							<!-- Divider para iwas lito -->
							<tr>
								<td>47668700xxxxxxxx</td>
								<td>10/17</td>
								<td>047</td>
								<td>Any</td>
							</tr>
							<!-- Divider para iwas lito -->
							<tr>
								<td>411215xxxxxxxxxx</td>
								<td>06/17</td>
								<td>217</td>
								<td>Any</td>
							</tr>
							<!-- Divider para iwas lito -->
							<tr>
								<td>421364xxxxxxxxxx</td>
								<td>05/17</td>
								<td>154</td>
								<td>Any</td>
							</tr>
							<!-- Divider para iwas lito -->
							<tr>
								<td>42136440xxxxxxxx</td>
								<td>05/17</td>
								<td>154</td>
								<td>Any</td>
							</tr>
							<!-- Divider para iwas lito -->
							<tr>
								<td>41472021xxxxxxxx</td>
								<td>02/17</td>
								<td>047</td>
								<td>USA</td>
							</tr>
							<!-- Divider para iwas lito -->
							<tr>
								<td>5256780414xxxxxx</td>
								<td>07/17</td>
								<td>328</td>
								<td>SPAIN</td>
							</tr>
							<!-- Divider para iwas lito -->
							<tr>
								<td>448559000255xxxx</td>
								<td>01/18</td>
								<td>ANY</td>
								<td>USA</td>
							</tr>
							<!-- Divider para iwas lito -->
							<tr>
								<td>41472021xxxxxxxx</td>
								<td>06/16</td>
								<td>254</td>
								<td>USA</td>
							</tr>
							<!-- Divider para iwas lito -->
							<tr>
								<td>5401683109x5xxxx</td>
								<td>11/17</td>
								<td>366</td>
								<td>USA</td>
							</tr>
							<!-- Divider para iwas lito -->
							<tr>
								<td>4037840064xxxx8x</td>
								<td>03/17</td>
								<td>261</td>
								<td>USA</td>
							</tr>
						</tbody>
				  </table>
				  <h2 style="color:222;text-shadow:0px 0px 0px">OTHER BIN</h2><br>
				  <div class="alert alert-danger">All Bin listed below are used in Auto Generated Bin. You dont have to use it on CC Bin Generator manually.</div>
				  <table class="table table-striped" style="font-size: 14px">
						<tbody class="bin-body">
							<tr>
								<td>40034490755xxxxx</td>
								<td>4213644087xxxxxx</td>
								<td>41213831035xxxxx</td>
							</tr>
							<tr>
								<td>513625xxxxxxxxxx</td>
								<td>5478540010xxxxxx</td>
								<td>5424181139xxxxxx</td>
							</tr>
							<tr>
								<td>4147202148xxxxxx</td>
								<td>42136440477xxxxx</td>
								<td>4213644047744xxx</td>
							</tr>
							<tr>
								<td>4366182268xxxxxx</td>
								<td>4213644046xxxxxx</td>
								<td>421364404119xxxx</td>
							</tr>
							<tr>
								<td>498404000657xxxx</td>
								<td>4147202150xxxxxx</td>
								<td>414720214xxxxxxx</td>
							</tr>
							<tr>
								<td>4766870023xxxxxx</td>
								<td>414720214xxxxxxx</td>
								<td>426245200080xxxx</td>
							</tr>
							<tr>
								<td>4262452000xxxxxx</td>
								<td>486895133085xxxx</td>
								<td>498404000647xxxx</td>
							</tr>
							<tr>
								<td>414720215359xxxx</td>
								<td>4147202153xxxxxx</td>
								<td>476687002xxxxxxx</td>
							</tr>
							<tr>
								<td>42136440xxxxxxxx</td>
								<td>41472021xxxxxxxx</td>
								<td>42136440473xxxxx</td>
							</tr>
							<tr>
								<td>421364xxxxxxxxxx</td>
								<td>414700127754xxxx</td>
								<td>421364404742xxxx</td>
							</tr>
							<tr>
								<td>4147202215463xxxx</td>
								<td>4147292148201xxxx</td>
								<td>476684002xxxxxxxx</td>
							</tr>
							<tr>
								<td>476684386xxxxxxxx</td>
								<td>4147202148xxxxxxx</td>
								<td>414772021xxxxxxxx</td>
							</tr>
							<tr>
								<td>4213644047746xxxx</td>
								<td>557949xxxxxxxxxxx</td>
								<td>407707xxxxxxxxxxx</td>
							</tr>
							<tr>
								<td>4766840020xxxxxxx</td>
								<td>5512380448xxxxxxx</td>
								<td>47668400239xxxxxx</td>
							</tr>
							<tr>
								<td>47668700xxxxxxxxx</td>
								<td>47668400xxxxxxxxx</td>
								<td>5512380448xxxxxxx</td>
							</tr>
							<tr>
								<td>5512380455xxxxxxx</td>
								<td>5256786026xxxxxxx</td>
								<td>421364404637xxxxx</td>
							</tr>
						</tbody>
				  </table>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type="text/javascript">
	var vll,dat;
	$('form.singleform').submit(function(){
		$('.singlebadge').fadeOut();
		$.ajax({
			type : 'POST',
			url : 'maingen.php',
			data : 'typer=single&ccnumber='+$('input[name="ccnumber"]').val(),
			success : function(res){
				if(res == 1){
					$('.singlebadge').fadeIn().css({'background':'#27ae60','color':'#fff'}).html('VALID');
				}else{
					$('.singlebadge').fadeIn().css({'background':'#c0392b','color':'#fff'}).html('INVALID');
				}
			}
		});
		return false;
	});
	$('form.bulkform').submit(function(){
		$('div.bulkresult').slideUp();
		$('table.bulk-body tbody').html("");
		$.ajax({
			type : 'POST',
			url : 'maingen.php',
			dataType : 'json',
			data : 'typer=bulk&ccnumbers='+$('textarea').val(),
			success : function(res){
				for(var i=0; i<res.msg.length; i++){
					var x = "<tr>";
						x = x + "<td>"+(parseInt(i)+1)+"</td>";
						x = x + "<td>"+res.msg[i].ccnumber+"</td>";
						if(res.msg[i].status==1){
							x = x+"<td style='color:#27ae60'>VALID</td>";
						}
						else{
							x = x+"<td style='color:#c0392b'>INVALID</td>";
						}
						x = x + "</tr>";
					$('table.bulk-body tbody').append(x);
				}
			}
		});
		setTimeout(function(){
			$('div.bulkresult').slideDown();
		},2000);
		return false;
	});
	$('button[type="reset"]').click(function(){
		$('.singlebadge').fadeOut().css({'display':'none'});
		$('div.bulkresult').slideUp();
		$('tbody').html("");
	});
	$('a[role="tab"]').click(function (e) {
	  e.preventDefault();
	  if($(this).attr('href') == "#"){
	  	alert("Coming Soon");
	  }
	  else{
	  	$($(this).attr('href')).tab('show');
	  }
	});
	$('button[name="master"]').click(function(){
		vll = $(this).attr('value');
		$('form.cardgenform').submit();
	});
	$('form.cardgenform').submit(function(e){
		if($('input[name="tc"]').prop('checked')){
			dat = "tc=1&type="+vll;
		}
		else{
			dat = "tc=0&type="+vll;
		}
		$.ajax({
			type : 'POST',
			url : 'ccgen.php',
			data : dat,
			success : function(res){
				$('div.proresults').html(res);
			}
		});
		return false;
	});
	$('form.formal').submit(function(){
		var bin = $('input[name="ccbin"]').val(),
			count = $('input[name="cccount"]').val();
		$('div.divresults').slideUp();
		$('div.divresults  div').html("");
		$('button[type="submit"]').removeClass('btn-success').addClass('btn-warning').html('LOADING....');
		setTimeout(function(){
			if($('input[name="expd"]').prop('checked') && $('input[name="cvv"]').prop('checked')){
				gen(bin,count,"both");
			}
			else if($('input[name="cvv"]').prop('checked')){
				gen(bin,count,"cvv");
			}
			else if($('input[name="expd"]').prop('checked')){
				gen(bin,count,"expd");
			}
			else{
				gen(bin,count,"x");
			}
		},1000);
		return false;
	});
    function gen(a,b,c){
    	if(c=="expd"){
    		$('div.divresults div ').append('<b>FORMAT : CC Number, Date</b><br><br>');
		    	$.ajax({
		    		type : "POST",
		    		url : 'maingen.php',
		    		data : 'ccnum='+a,
		    		success : function(res){
		    			for(var i = 0; i < b; i++ ){
				        	var date = Math.floor(Math.random() * 12) + 1;
				        	var year = Math.floor(Math.random() * (25 - 16)) + 16;
	            			$('div.divresults div ').append(JSON.parse(res)[i]+", "+date+"/"+year+"<br>");
		    			}
		    		},
		    		error : function(e){
		    			console.log(e);
		    		}
		    	});
	        setTimeout(function(){
	        	$('div.divresults').slideDown();
				$('button[type="submit"]').removeClass('btn-warning').addClass('btn-success').html('GENERATE');
	        },3000);
    	}
    	else if(c=="cvv"){
    		$('div.divresults div ').append('<b>FORMAT : CC Number, CVV/CVV2</b><br><br>');
		    	$.ajax({
		    		type : "POST",
		    		url : 'maingen.php',
		    		data : 'ccnum='+a,
		    		success : function(res){
		    			for(var i = 0; i < b; i++ ){
				        	var cvv1 = Math.floor(Math.random() * 9) + 0;
				        	var cvv2 = Math.floor(Math.random() * 9) + 0;
				        	var cvv3 = Math.floor(Math.random() * 9) + 0;
	            			$('div.divresults div ').append(JSON.parse(res)[i]+", "+cvv1+cvv2+cvv3+"<br>");
		    			}
		    		},
		    		error : function(e){
		    			console.log(e);
		    		}
		    	});
	        setTimeout(function(){
	        	$('div.divresults').slideDown();
				$('button[type="submit"]').removeClass('btn-warning').addClass('btn-success').html('GENERATE');
	        },3000);
    	}
    	else if(c=="both"){
    		$('div.divresults div ').append('<b>FORMAT : CC Number, Date, CVV/CVV2</b><br><br>');
		    	$.ajax({
		    		type : "POST",
		    		url : 'maingen.php',
		    		data : 'ccnum='+a,
		    		success : function(res){
		    			for(var i = 0; i < b; i++ ){
				        	var cvv1 = Math.floor(Math.random() * 9) + 0;
				        	var cvv2 = Math.floor(Math.random() * 9) + 0;
				        	var cvv3 = Math.floor(Math.random() * 9) + 0;
				        	var date = Math.floor(Math.random() * 12) + 1;
				        	var year = Math.floor(Math.random() * (25 - 16)) + 16;
	            			$('div.divresults div ').append(JSON.parse(res)[i]+", "+date+"/"+year+", "+cvv1+cvv2+cvv3+"<br>");
		    			}
		    		},
		    		error : function(e){
		    			console.log(e);
		    		}
		    	});
	        setTimeout(function(){
	        	$('div.divresults').slideDown();
				$('button[type="submit"]').removeClass('btn-warning').addClass('btn-success').html('GENERATE');
	        },3000);
    	}else{
    		$('div.divresults div ').append('<b>FORMAT : CC Number</b><br><br>');
	    	$.ajax({
	    		type : "POST",
	    		url : 'maingen.php',
	    		data : 'ccnum='+a,
	    		success : function(res){
	    			for(var i = 0; i < b; i++ ){
		        		$('div.divresults div ').append(JSON.parse(res)[i]+"<br>");
	    			}
	    		},
	    		error : function(e){
	    			console.log(e);
	    		}
	    	});
	        setTimeout(function(){
	        	$('div.divresults').slideDown();
				$('button[type="submit"]').removeClass('btn-warning').addClass('btn-success').html('GENERATE');
	        },3000);
	        return false;
    	}
    }
</script>
</body>
</html>