<h3 class="ctitle">Subjects</h3>
		 		<div class="hline"></div>
									<?php
									$c2=new cat();
									$r2=$c2->catfornewsfeed();
									$obj=new cat();
									?>
											<?php
											while($row2=$r2->fetch_assoc())
											{

												$result=$obj->showcount($row2["pk_cart_id"]);
												$count=$result->num_rows;
												echo '<p><a href="onecat.php?id='.$row2["pk_cart_id"].'"><i class="fa fa-angle-right"></i>'. 
												$row2["cat_name"].
												'</a> <span class="badge badge-theme pull-right">'.$count.'</span></p>';
											}
											?>