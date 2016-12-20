<?php
/*
  Template Name: Home Page
 */



get_header(); ?>

<div class="container">
<div class="row row-offcanvas row-offcanvas-right">
  <div class="col-xs-12 col-sm-8">
    <div class="row">
      <div class="col-xs-12 col-sm-12">
        <div id="carousel_articles" class="carousel slide carousel-fade" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active"><a href="featured.php"><img src="<?php bloginfo('template_directory');?>/images/featured.jpg" alt="..."></a>
              <div class="carousel-caption">
                <h3>2016 Program Director Summit Award Winners</h3>

                                  <p>Congratulations to all the award winners! <a href="././featured/" class="white"><i class="fa fa-hand-o-right"></i></a></p>
              </div>
            </div><!--end of item-->

            <?php
                $catquery = new WP_Query( 'cat=4&posts_per_page=1' );
                while($catquery->have_posts()) : $catquery->the_post();
                ?>
                <div class="item"><a href="<?php the_permalink();?>"><?php the_post_thumbnail('feature-image');?></a>
                  <div class="carousel-caption">
                    <h3><?php the_title();?></h3>
                    <h5 class="subheading">Peter Thompson, MD - Chief of Clinical Operations</h5>
                                      <p class="white_excerpt"><?php echo get_the_excerpt();?></p>
                  </div>
                </div><!--end of item-->
            <?php endwhile; ?>

            <div class="item"><a href="compliance.php"><img src="<?php bloginfo('template_directory');?>/images/compliance.jpg" alt="..."></a>
              <div class="carousel-caption">
                <h3>Billing Reconciliation Report</h3>
                <h5 class="subheading">Amy Maverick, MD - Chief Compliance Officer</h5>
                                  <p>Human error is defined as the making of an error as the result of being human.In medicine, we work every day to minimize human errors and keep our patients safe, but... <a href="././compliance/" class="white"><i class="fa fa-hand-o-right"></i></a></p>
              </div>
            </div><!--end of item-->
            <div class="item"><a href="critical-care.php"><img src="<?php bloginfo('template_directory');?>/images/criticalcare.jpg" alt="..."></a>
              <div class="carousel-caption">
                <h3>Being Amazing</h3>
                <h5 class="subheading">Esteban Mery-Fernandez, MD - Fayetteville, NC</h5>
                                  <p>About a year and a half ago, The Society of Critical Care Medicine created a nationwide initiative, called ABCDEF Bundle, to promote mobility of critically ill patients... <a href="././critical-care/" class="white"><i class="fa fa-hand-o-right"></i></a></p>
              </div>
            </div><!--end of item-->
                          <div class="item"><a href="alertsandtips.php"><img src="<?php bloginfo('template_directory');?>/images/alertsandtips_home.jpg" alt="..."></a>
              <div class="carousel-caption">
                <h3>IT &mdash; Alerts and Tips</h3>
                <h5 class="subheading">Roger Maxwell - Director of Information Systems</h5>
                                  <p>We have something on the radar today that is a threat but might not be obvious. That makes this alert even more important! <a href="././alertsandtips/" class="white"><i class="fa fa-hand-o-right"></i></a></p>
              </div>
            </div><!--end of item-->
          </div><!--end of carousel-inner-->
                      <ol class="carousel-indicators">
      <li data-target="#carousel_articles" data-slide-to="0" class="active"></li>
      <li data-target="#carousel_articles" data-slide-to="1"></li>
      <li data-target="#carousel_articles" data-slide-to="2"></li>
      <li data-target="#carousel_articles" data-slide-to="3"></li>
      <li data-target="#carousel_articles" data-slide-to="4"></li>
  </ol>
        </div><!--end of carousel-->
      </div>
    </div><!-- end of row-->

          <hr class="gray">
    <div class="row">
              <div class="col-xs-12 col-lg-12">
              <h2>Best of the Best</h2>
              </div>
      <div class="col-xs-6 col-lg-4">
                  <a href="./bestofthebest/"><img src="<?php bloginfo('template_directory');?>/images/botb/pdotm1.jpg" alt="" class="img-thumbnail"></a>
      </div>
      <!--/.col-xs-6.col-lg-4-->
      <div class="col-xs-6 col-lg-4">
                  <a href="./bestofthebest/"><img src="<?php bloginfo('template_directory');?>/images/botb/npotm.jpg" alt="" class="img-thumbnail"></a>
      </div>
      <!--/.col-xs-6.col-lg-4-->
              <div class="col-xs-6 col-lg-4">
                  <a href="./bestofthebest/"><img src="<?php bloginfo('template_directory');?>/images/botb/picotm1.jpg" alt="" class="img-thumbnail"></a>
      </div>
      <!--/.col-xs-6.col-lg-4-->

      <h4 class="subheading" style="clear:both;"><a class="alignright" target="_self" href="./bestofthebest/">View all nominees <i class="fa fa-hand-o-right"></i></a></h4>
    </div>
    <!--/row-->

          <hr class="gray">
          <div class="row">
            <?php
                $catquery = new WP_Query( 'cat=9&posts_per_page=1' );
                while($catquery->have_posts()) : $catquery->the_post();
                ?>
                <div class="col-xs-12 col-lg-12">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php echo get_the_excerpt();?></p>
                </div>
            <?php endwhile; ?>

              <?php
                  $catquery = new WP_Query( 'cat=8&posts_per_page=1' );
                  while($catquery->have_posts()) : $catquery->the_post();
                  ?>
                  <div class="col-xs-12 col-lg-12">
                      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                      <p><?php echo get_the_excerpt();?></p>
                  </div>
              <?php endwhile; ?>

              <?php
                  $catquery = new WP_Query( 'cat=10&posts_per_page=1' );
                  while($catquery->have_posts()) : $catquery->the_post();
                  ?>
                  <div class="col-xs-12 col-lg-12">
                      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                      <p><?php echo get_the_excerpt();?></p>
                  </div>
              <?php endwhile; ?>

          </div><!--end of row-->

          <hr class="gray">
           <div class="row">
          <div class="col-xs-12 col-lg-12">
              <h3>Upcoming Programs</h3>
              <ul style="font-size:1.125em;">
              <li><strong>Bay City, MI</strong> &mdash; McLaren Bay Region</li>
              </ul>
              </div>
          </div><!-- end of row-->
  </div>
  <!--/.col-xs-12.col-sm-9-->

  <div class="col-xs-12 col-sm-4 sidebar-offcanvas" id="sidebar">
    <!--<div class="placeholder kidscorner">
    <div class="kidscorner-heading">
    <h3>Kids Corner</h3>
    </div>
    </div>
    <hr class="gray">-->
    <div class="spotlight">
            <span class="open glyphicon glyphicon-plus-sign alignright" data-toggle="modal" data-target=".spotlight-modal" aria-hidden="true"></span>
          <div class="spotlight-heading">
          <h3>Gabe Le</h3>
          <h5 class="subheading">Physician Resource Specialist</h5>
          </div>
              <div class="modal fade spotlight-modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-header"><button type="button" class="close alignright" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h3>Spotlight of the Month</h3></div> <div class="modal-body"> <div class="row">
                 <div class="col-xs-12 col-lg-5"><img src="<?php bloginfo('template_directory');?>/images/spotlight.png" alt="" class="img-thumbnail img-responsive"></div>
                  <div class="col-xs-12 col-lg-7">
                      <h4>Gabe Le<br/><span style="font-size: 0.9em; font-family: Helvetica,sans-serif; color: #8f8f8f">Physician Resource Specialist</span></h4>
<h4>Joined Apogee - <span style="font-size: 0.9em; font-family: Helvetica,sans-serif; color: #8f8f8f;">July 2016</span></h4>
                      <h4>Birthday - <span style="font-size: 0.9em; font-family: Helvetica,sans-serif; color: #8f8f8f">September 13th<sup>th</sup></span></h4>
    <p>TV show(s): <strong>Vikings / Walking dead</strong><br>
Movie(s): <strong>Wedding Crashers</strong><br/>
                      Color: <strong>Blue</strong></p>
                  </div>
                  <div class="col-xs-12 col-lg-12">
                      <p>Vac. Destination: <strong>Whitefish/Glacier, Montana </strong><br/>
                      Food: <strong>Sushi</strong><br/>
                      Ice Cream: <strong>Frozen Yogurt </strong><br/>
                      Sports Team: <strong>Minnesota Vikings</strong><br/>
                      Activity: <strong>Hunting/Fishing </strong><br/>
                      If you could have lunch with anyone from history, who would it be? <br/><strong>John Henry “Doc” Holliday. It would be interesting to hear firsthand about his memories and stories of the Old West. Being an American gambler and gunfighter, Tombstone, AZ, the O.K. Corral shootout. I’m sure it would be a very entertaining lunch.
                      </strong><br/>
                      What new skill would you want to learn? <strong>Boxing</strong><br/>
                      What’s the weirdest food that you’ve tried? <strong>Alligator</strong><br/>
                      If you could have any exotic pet, what would it be? <strong>Tufted Capuchin Monkey
                      </strong><br/>
                      What was your first car? <strong>Toyota Pickup</strong><br/>
                      Is it called pop, soda, soda-pop, or coke? Or do you call it something else? <strong>Soda</strong><br/>
                      What’s your favorite holiday pie?<strong>Pumpkin</strong></p>
              </div></div><!--end of row--> </div></div></div></div><!--end of spotlight modal-->
    </div>
    <hr class="gray">
    <div class="anniversary">
      <h3 class="aligncenter">Happy Anniversary</h3>
        <div>
            <?php dynamic_sidebar('anni');?>
        </div>
          <hr class="gray">
          <div class="col-xs-12 col-lg-12 busdev">
          <h3>Business Development</h3>
          <div class="col-xs-6 col-lg-6">
          <div class="busdevimg">
              <img src="<?php bloginfo('template_directory');?>/images/global-images/Bell_Michael_optomized.jpg" alt=" "/>
              <span class="open glyphicon glyphicon-plus-sign alignright" data-toggle="modal" data-target=".bell-modal" aria-hidden="true"></span>
              </div>
              <h4>Michael Bell</h4>
              <h5 class="subheading">Chief of Business Development</h5>
              <!-- Small modal --><div class="modal fade bell-modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-header"><button type="button" class="close alignright" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div> <div class="modal-body"> <div class="row"> <div class="col-xs-12 col-lg-6"> <div class="busdev_modalimg"><img src="<?php bloginfo('template_directory');?>/images/global-images/Bell_Michael_optomized.jpg" alt=" "/></div> </div> <div class="col-xs-12 col-lg-6"> <h3>Michael Bell</h3> <h4>Chief of Business Development</h4> <h6 class="subheading">(678) 209-3068<br/>michael.bell@apogeephysicians.com</h6> </div> <div class="col-xs-12 col-lg-3"> <button type="button" class="btn btn-primary"><a href="mailto:michael.bell@apogeephysicians.com" class="white" style="padding:0;">Contact Michael</a></button> </div> </div><!--end of row--> </div></div></div></div><!--end of bell modal-->
          </div>
          <div class="col-xs-6 col-lg-6">
          <div class="busdevimg">
              <img src="<?php bloginfo('template_directory');?>/images/global-images/scarle_david_optomized.jpg" alt=" "/>
              <span class="open glyphicon glyphicon-plus-sign alignright" data-toggle="modal" data-target=".scarle-modal" aria-hidden="true"></span>
              </div>
              <h4>David Scarle</h4>
              <h5 class="subheading">Director of Business Development</h5>
              <!-- Small modal --><div class="modal fade scarle-modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-header"><button type="button" class="close alignright" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div> <div class="modal-body"> <div class="row"> <div class="col-xs-12 col-lg-6"> <div class="busdev_modalimg"><img src="<?php bloginfo('template_directory');?>/images/global-images/scarle_david_optomized.jpg" alt=" "/></div> </div> <div class="col-xs-12 col-lg-6"> <h3>David Scarle</h3> <h4>Director of Business Development</h4> <h6 class="subheading">(602) 501-8904<br/>david.scarle@apogeephysicians.com</h6> </div> <div class="col-xs-12 col-lg-3"> <button type="button" class="btn btn-primary"><a href="mailto:david.scarle@apogeephysicians.com" class="white" style="padding:0;">Contact David</a></button> </div> </div><!--end of row--> </div></div></div></div><!--end of scarle modal-->
          </div>
          <div class="col-xs-6 col-lg-6">
          <div class="busdevimg">
              <img src="<?php bloginfo('template_directory');?>/images/global-images/billiot_erica_optomized.jpg" alt=" "/>
              <span class="open glyphicon glyphicon-plus-sign alignright" data-toggle="modal" data-target=".billiot-modal" aria-hidden="true"></span>
              </div>
              <h4>Erica Billiot</h4>
              <h5 class="subheading">Business Development</h5>
              <!-- Small modal --><div class="modal fade billiot-modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-header"><button type="button" class="close alignright" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div> <div class="modal-body"> <div class="row"> <div class="col-xs-12 col-lg-6"> <div class="busdev_modalimg"><img src="<?php bloginfo('template_directory');?>/images/global-images/billiot_erica_optomized.jpg" alt=" "/></div> </div> <div class="col-xs-12 col-lg-6"> <h3>Erica Billiot</h3> <h4>Business Development</h4> <h6 class="subheading">(678) 699-9156<br/>erica.billiot@apogeephysicians.com</h6> </div> <div class="col-xs-12 col-lg-3"> <button type="button" class="btn btn-primary"><a href="mailto:erica.billiot@apogeephysicians.com" class="white" style="padding:0;">Contact Erica</a></button> </div> </div><!--end of row--> </div></div></div></div><!--end of billiot modal-->
          </div>
          <div class="col-xs-6 col-lg-6">
          <div class="busdevimg">
              <img src="<?php bloginfo('template_directory');?>/images/global-images/salter_christy_optomized.jpg" alt=" "/>
              <span class="open glyphicon glyphicon-plus-sign alignright" data-toggle="modal" data-target=".salter-modal" aria-hidden="true"></span>
              </div>
              <h4>Christy Salter</h4>
              <h5 class="subheading">Business Development</h5>
              <!-- Small modal --><div class="modal fade salter-modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-header"><button type="button" class="close alignright" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div> <div class="modal-body"> <div class="row"> <div class="col-xs-12 col-lg-6"> <div class="busdev_modalimg"><img src="<?php bloginfo('template_directory');?>/images/global-images/salter_christy_optomized.jpg" alt=" "/></div> </div> <div class="col-xs-12 col-lg-6"> <h3>Christy Salter</h3> <h4>Business Development</h4> <h6 class="subheading">(850) 712-1398<br/>christy.salter@apogeephysicians.com</h6> </div> <div class="col-xs-12 col-lg-3"> <button type="button" class="btn btn-primary"><a href="mailto:michael.bell@apogeephysicians.com" class="white" style="padding:0;">Contact Christy</a></button> </div> </div><!--end of row--> </div></div></div></div><!--end of salter modal-->
          </div>
              <div class="col-xs-12 col-lg-12"><br></div>
          </div><!--end of busdev-->
  </div>
  <!--/.sidebar-offcanvas-->
</div>
<!--/row-->

  <div class="row">
  <hr class="dash">
      <div class="col-xs-12 col-lg-12">
      <h4>Missed last month's highlights?</h4>
      </div>
      <div class="col-xs-6 col-lg-3">
          <a href="../../2016/october/featured/" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/highlights/featured.jpg" alt="" class="img-thumbnail">
              <h5 class="subheading">Who Are We Following?</h5></a>
      </div>
      <div class="col-xs-6 col-lg-3">
          <a href="../../2016/october/" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/highlights/spotlight.png" alt="" class="img-thumbnail">
              <h5 class="subheading">Spotlight - Jennifer Yeager</h5></a>
      </div>
      <div class="col-xs-6 col-lg-3">
          <a href="../../2016/october/alertsandtips/" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/highlights/alert.jpg" alt="" class="img-thumbnail">
              <h5 class="subheading">Alerts &amp; Tips</h5></a>
      </div>
      <div class="col-xs-6 col-lg-3">
          <a href="../../2016/october/bestofthebest/" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/highlights/botb.jpg" alt="" class="img-thumbnail">
              <h5 class="subheading">Best of the Best</h5></a>
      </div>
  </div><!--end of row-->

</div>
</div>
<!--/.container-->

<script>$('#carousel_articles').carousel({interval:4000,pause: "hover"});</script>
<?php
get_footer();
