		<?php $now=$this->uri->segment(2);?>
		<div id="sidebar">
					<ul>
						<li>
							<div id="search" >
								<form method="get" action="#">
									<div>
										<input type="text" name="s" id="search-text" value="" />
										<input type="submit" id="search-submit" value="GO" />
									</div>
								</form>
							</div>
							<div style="clear: both;">&nbsp;</div>
						</li>
						<li>
						   <?php 
						   if ($now == ""){
						   $this->load->view("sidebar/home");
						   } else $this->load->view("sidebar/$now");
						   ?>
						</li>
						
					</ul>
				</div>
