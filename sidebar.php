<?php require_once('header.php'); ?>

    	<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
					<!--
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                    -->
				</li>
				<?php
				
				foreach ($sidebar as $key => $value) {
					if($value['sub']){

						echo count($value['sub']['linkName']);
						echo '<li>';
						echo '<a href="#"><i class="'.$value['icon'].'"></i> '.$key.'<span class="fa arrow"></span></a>';
						echo '	<ul class="nav nav-second-level">';
						echo '		<li><a href="#">'.$value['sub']['linkName'].'</a></li>';
						echo '	</ul>';
						echo '</li>';
					} else {
						echo "<li>";
						echo '<a href="'.$value['url'].'"><i class="'.$value['icon'].'"></i> '.$key.'</a>';
						echo "</li>";						
					}
				}

				?>
					<!--
					                   
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>
                               
                            </li>
                        </ul>
                      </li>  
                    -->
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->