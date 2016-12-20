<?php
/*
  Template Name: Best of the Best
 */

 // Advanced Custom Fields
 $name = get_field('name');
 $location = get_field('location');
 $recommender = get_field('recommender');

 get_header();
 ?>

 <div class="container botb-padding">
     <br class="clearfix">
     <div class="row">
         <div class="col-xs-12 col-sm-12 col-lg-12">
             <h2>Best of the Best</h2>
             <hr class="dash">
         </div>
     </div><!--/row-->
 </div><!--/.container-->

 <div class="container botb-padding">
     <br class="clearfix">
     <div class="row">
       <!-- <div class="col-xs-12 col-sm-6 col-lg-6">
           <img src="<?php bloginfo('stylesheet_directory');?>/images/botb/potm1.jpg" alt="" class="img-responsive">
       </div>
       <div class="col-xs-12 col-sm-6 col-lg-6">
           <h3>Program of the Month<span class="location">Cape Fear Valley, NC</span></h3>
           <br>
           <p>Awards and recognition for excellence, now at a national level are a true reflection of a shifting culture. Impact on patients’ lives and outcomes are the result of hard work, dedication and relentless search for excellence. Through difficult challenges, both political and structural you have made our practice shine. Thank you for being part of this family.</p><h6 class="alignright subheading">&mdash; Jaime Upegui | President, Division 2</h6>
           <br class="clearfix"><br>
           <p>Last week during a national meeting of the Society of critical care medicine held in Chicago, our team obtained 6 (six) recognitions for outstanding performance in decreasing LOS, ventilator days, early mobilization of critically ill patients, and family engagement among others. Pictured left are the certificates. This is what we do; because we are AMAZING.</p>
           <h6 class="alignright subheading">&mdash; Esteban Mery-Fernandez, MD | Fayetteville, NC </h6>
       </div> -->
     </div><!--/row-->
 <br><br>

 <!--  ==============================   -->

 <!-- <hr class="gray"> -->
 <h3 class="aligncenter db-blue" style="margin-left:auto; margin-right: auto;">Employees of the Month</h3>
 <br>
     <div class="row">
         <div class="col-xs-12 col-sm-4 col-lg-3">
             <img src="<?php bloginfo('stylesheet_directory');?>/images/botb/pdotm1.jpg" alt="" class="img-responsive img-thumbnail open" data-toggle="modal" data-target=".pd1-modal" aria-hidden="true">
             <div class="botb-caption img-responsive img-thumbnail open" data-toggle="modal" data-target=".pd1-modal" aria-hidden="true"><h4><?php the_title(); ?></h4><hr class="gray"><h5><?php echo $name;?></h5><h6 class="subheading"><?php echo $location;?></h6></div>
               <!-- PD Modal -->
               <div class="modal fade pd1-modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-header"><button type="button" class="close alignright" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
             </button><h3><?php the_title();?></h3></div> <div class="modal-body"> <div class="row"> <div class="col-xs-12 col-lg-6"> <img src="<?php bloginfo('stylesheet_directory');?>/images/botb/pdotm1.jpg" alt="" class="img-responsive img-thumbnail left"> </div> <div class="col-xs-12 col-lg-6"><h4><?php echo $name;?></h4> <h5 class="subheading"><?php echo $location; ?></h5>
               <p><?php the_content();?></p><h6 class="alignright subheading">&mdash; <?php echo $recommender;?></h6></div></div><!--end of row--> </div></div></div></div><!--end of pd modal-->
         </div>

         <div class="col-xs-12 col-sm-4 col-lg-3">
             <img src="<?php bloginfo('stylesheet_directory');?>/images/botb/pdotm2.jpg" alt="" class="img-responsive img-thumbnail open" data-toggle="modal" data-target=".pd2-modal" aria-hidden="true">
             <div class="botb-caption img-responsive img-thumbnail open" data-toggle="modal" data-target=".pd2-modal" aria-hidden="true"><h4>PD of the Month</h4><hr class="gray"><h5>Michael Windland, MD</h5><h6 class="subheading">Pulaski, TN</h6></div>
             <!-- PD Modal --><div class="modal fade pd2-modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-header"><button type="button" class="close alignright" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
             </button><h3>Program Director of the Month</h3></div> <div class="modal-body"> <div class="row"><div class="col-xs-12 col-lg-6"><img src="<?php bloginfo('stylesheet_directory');?>/images/botb/pdotm2.jpg" alt="" class="img-responsive img-thumbnail alignleft"> </div> <div class="col-xs-12 col-lg-6"><h4>Michael Windland, MD</h4> <h5 class="subheading">Pulaski, TN</h5>
             <p>This letter will serve to nominate Dr. John Michael (Mike) Windland for LifePoint Health’s Physician Leader of the Year award.  Dr. Windland serves as Southern Tennessee Regional Health System-Pulaski’s (STRHS-Pulaski) Chief of Staff and heads up the hospitalist service.</p></div>

             <div class="col-lg-12">
             <p>Dr. Windland has been on staff at the hospital since April 2011.There are a number of reasons why I believe Dr. Windland should be considered for this prestigious honor but I would first go to the LifePoint’s 2015 physician satisfaction survey.  STRHS-Pulaski’s hospitalist program was one of the highest ranked for that category across LifePoint.  Nationally, the hospitalist program at STRHS-Pulaski ranks in the 76th percentile.  Curiously, at the time of the survey, we were understaffed by one physician provider or by 50%.  Even with a variety of locum tenens coverage, Dr. Windland’s leadership and oversight produced stellar results on a national basis.</p>

             <P>My second reference comes from Jess Judy who has commented to me before what a model for the company our hospitalist program has become.  With over 7,000 RVU’s produced yearly, Dr. Windland is the highest producing hospitalist within LifePoint albeit in one of LifePoint’s smallest hospitals.  I have come to discover that across many hospitals nationally, the hospitalist program is often a source of negative perception by the Medical Staff.  For us, it is a Strength worthy of putting on our strategic plan’s SWOT analysis.</p>

             <p>Dr. Windland’s superior relationship with the ER physicians and ER medical director is vital to our success with throughput.  Modeled by Dr. Windland, this is the expectation that all of our hospitalists are expected to conform to as they rarely argue with the ER physicians about an admission.  This creates goodwill across the roster of our ER physicians and maximizes ER throughput while enhancing patient/physician/employee satisfaction.</p>

             <p>This relationship with the ER and our area providers has led to the confidence in our hospital capabilities since Dr. Windland took over.  We now see much sicker patients as testified by our nearly .10 increase in case mix.  And while I know increases in case mix are not popular to talk about, it is noteworthy that in STRHS-Pulaski’s 2016 CDI review, the physician reviewer asked to speak to our Board about how incredibly thorough and accurate was our hospitalists’ documentation.  Robert Klein was actually visiting that day and can attest to this.</p>

             <p>Dr. Windland has served over two years as Chief of Staff, served as Chief of Medicine, and Vice Chief and represented the Medical Staff on the Board.  I have a very broad and long perspective on the Medical Staff here locally and I can personally attest that the Medical Executive Committees’ commitment in time and focus towards peer review and credentialing has never been higher.  As part of that focus on peer review, we have had some physicians who have required greater scrutiny.  Such matters are always delicate and uncomfortable in any hospital but in a small hospital like ours, everyone knows each other and matters of peer review become more personal.  Dr. Windland’s approach has always been fair, firm and forthright but his personality contributes gentleness, caring and reassurance.  Those qualities are not always present in the physician community and with him and in such situations, those qualities cannot not be appreciated more.</p>

             <p>There are some other things about Dr. Windland that I believe elevates him above most physician leaders.  For instance, when our system made the decision to embrace a LEAN culture, we invested in more extensive education for 3-4 key leaders which consisted of a 4-day, off-site class in Birmingham, Alabama.  Dr. Windland wanted to be part of that cultural change and personally invested his own money for course fees and time off to attend all 4 days of the training.  He is an active member of our Physician Engagement Group and active in recruiting.  He volunteered to give up some of his compensation so that a peer could receive additional compensation he felt they deserved.</p>

             <p>In closing, I will say that if there is one area that Dr. Windland might fall short in, it is community involvement simply because he lives in Nashville and works 7-on and 7-off so location is the biggest obstacle.  Even still, he has come back on his days off for hospital related work.  You should understand what a champion he is for our hospital and that I can confidently say he has no critics.  That’s because not only is he the best hospitalist in the company, among the best with documentation, active beyond expectations and respected by peers, he is also loved by all of our employees.  His humbleness and willingness to connect with every employee from housekeeper to nurse is a worthy substitute to community involvement.</p><h6 class="alignright subheading">&mdash;	James H. Edmondson, CEO | Southern Tennessee Regional Health System-Pulaski</h6></div> </div><!--end of row--> </div></div></div></div><!--end of pd modal-->
         </div>

         <div class="col-xs-12 col-sm-4 col-lg-3">
            <img src="<?php bloginfo('stylesheet_directory');?>/images/botb/phyotm1.jpg" alt="" class="img-responsive img-thumbnail open" data-toggle="modal" data-target=".phy1-modal" aria-hidden="true">
            <div class="botb-caption img-responsive img-thumbnail open" data-toggle="modal" data-target=".phy1-modal" aria-hidden="true"><h4>Hospitalist Physician of the Month</h4><hr class="gray"><h5>Jinaya O’Neal, MD</h5><h6 class="subheading">Petoskey, MI</h6></div>
           <!-- phy1 modal --><div class="modal fade phy1-modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-header"><button type="button" class="close alignright" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           <h3>Hospitalist Physician of the Month</h3></div> <div class="modal-body"> <div class="row"> <div class="col-xs-12 col-lg-6"> <img src="<?php bloginfo('stylesheet_directory');?>/images/botb/phyotm1.jpg" alt="" class="img-responsive img-thumbnail alignleft"></div><div class="col-xs-12 col-lg-6"><h4>Jinaya O’Neal, MD </h4> <h5 class="subheading">Petoskey, MI
             </h5><p>I wanted to let you know how much I enjoy you being a part of the team here at Petoskey. You have been a great help during this transition time. Thank you for being the first one to reach out to me or the admit doc with offers to help with afternoon admits and then keep offering.</p>
           </div>
           <div class="col-lg-12">
           <p>
             I also appreciate you embracing the regional rounding and take what feels like more than your share of patients while we are short an NP to help off load patients from the high census units. And not only do you embrace the regional rounding, you start your OWN mini interdisciplinary meetings in the mornings on your unit! You rock!!
           </p>
           <h6 class="alignright subheading">&mdash;	Nicole Gill, NP, PD | Petoskey, MI
           </h6></div></div><!--end of row--> </div></div></div></div><!--end of phy1 modal-->
         </div>

         <div class="col-xs-12 col-sm-4 col-lg-3">
            <img src="<?php bloginfo('stylesheet_directory');?>/images/botb/phyotm2.jpg" alt="" class="img-responsive img-thumbnail open" data-toggle="modal" data-target=".phy2-modal" aria-hidden="true">
            <div class="botb-caption img-responsive img-thumbnail open" data-toggle="modal" data-target=".phy2-modal" aria-hidden="true"><h4>Hospitalist Physician of the Month</h4><hr class="gray"><h5>Philip Walker, DO</h5><h6 class="subheading">Las Cruces, NM</h6></div>
           <!-- phy1 modal --><div class="modal fade phy2-modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-header"><button type="button" class="close alignright" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           <h3>Hospitalist Physician of the Month</h3></div> <div class="modal-body"><div class="row"> <div class="col-xs-12 col-lg-12"> <img src="<?php bloginfo('stylesheet_directory');?>/images/botb/phyotm2.jpg" alt="" class="img-responsive img-thumbnail aligncenter"></div><div class="col-xs-12 col-lg-12 aligncenter"><h4>Philip Walker, DO </h4> <h5 class="subheading">Las Cruces, NM</h5>
           </div></div><!--end of row--><img src="<?php bloginfo('stylesheet_directory');?>/images/botb/walker_letter.jpg" class="img-responsive" style="padding:20px;"><h6 class="alignright subheading" style="float:none;">&mdash;	A letter Dr. Walker received from a patient he cared for
           </h6></div></div></div></div><!--end of phy1 modal-->
         </div>

         <div class="col-xs-12 col-sm-4 col-lg-3">
             <img src="<?php bloginfo('stylesheet_directory');?>/images/botb/npotm.jpg" alt="" class="img-responsive img-thumbnail open" data-toggle="modal" data-target=".np-modal" aria-hidden="true">
             <div class="botb-caption img-responsive img-thumbnail open" data-toggle="modal" data-target=".np-modal" aria-hidden="true"><h4>Hospitalist NP of the Month</h4><hr class="gray"><h5>Mark Graves, NP </h5><h6 class="subheading">Lawrenceburg, TN</h6></div>
               <!-- PD Modal -->
               <div class="modal fade np-modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-header"><button type="button" class="close alignright" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
             </button><h3>Hospitalist NP of the Month</h3></div> <div class="modal-body"> <div class="row"> <div class="col-xs-12 col-lg-6"> <img src="<?php bloginfo('stylesheet_directory');?>/images/botb/npotm.jpg" alt="" class="img-responsive img-thumbnail left"> </div> <div class="col-xs-12 col-lg-6"><h4>Mark Graves, NP</h4> <h5 class="subheading">Lawrenceburg, TN</h5>
               <p>We recently opened our Valdosta, GA program, and prior to the opening we had two of those PICs training in Lawrenceburg, TN.</p>

               <p>The Valdosta HR department was being very difficult in terms of the health requirements needed from the PICs before they could start</p></div>
               <div class="col-lg-12">
               <p>working. Mark was kind enough to help our newly hired Valdosta PICs get their required screenings completed.  He worked directly with the PICs and the employee health nurse at the Lawrenceburg site to help me get the information I needed.Because of Mark, I was able to get all PICs started the same day, he went above and beyond.</p>

               <p>Thank you, Mark, for all of your help.  It did not go unnoticed and I appreciate you fulfilling the Apogee Promise!</p><h6 class="alignright subheading">&mdash; Mayra Mendez, HR Specialist | Scottsdale, AZ</h6></div> </div><!--end of row--> </div></div></div></div><!--end of pd modal-->
         </div>

         <div class="col-xs-12 col-sm-4 col-lg-3">
             <img src="<?php bloginfo('stylesheet_directory');?>/images/botb/paotm.jpg" alt="" class="img-responsive img-thumbnail open" data-toggle="modal" data-target=".pa-modal" aria-hidden="true">
             <div class="botb-caption img-responsive img-thumbnail open" data-toggle="modal" data-target=".pa-modal" aria-hidden="true"><h4>Hospitalist PA of the Month</h4><hr class="gray"><h5>Maureen Cephas, PA </h5><h6 class="subheading">Erie, PA</h6></div>
               <!-- PD Modal -->
               <div class="modal fade pa-modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-header"><button type="button" class="close alignright" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
             </button><h3>Hospitalist PA of the Month</h3></div> <div class="modal-body"> <div class="row"> <div class="col-xs-12 col-lg-6"> <img src="<?php bloginfo('stylesheet_directory');?>/images/botb/paotm.jpg" alt="" class="img-responsive img-thumbnail left"> </div> <div class="col-xs-12 col-lg-6"><h4>Maureen Cephas, PA </h4> <h5 class="subheading">Erie, PA</h5>
               <p>Maureen is a PA in Erie.  Maureen does a great job not only partnering with the hospitalists with whom she works and is well liked by her team.  Maureen has been instrumental in teaching and on-boarding the new NPs in Erie. Maureen always has a positive attitude and seems to motivate those around her. </p><h6 class="alignright subheading">&mdash; Joshua Rosenberg, DO | Vice President of Clinical Operations</h6></div> </div><!--end of row--> </div></div></div></div><!--end of pd modal-->
         </div>

         <div class="col-xs-12 col-sm-4 col-lg-3">
             <img src="<?php bloginfo('stylesheet_directory');?>/images/botb/picotm1.jpg" alt="" class="img-responsive img-thumbnail open" data-toggle="modal" data-target=".pic1-modal" aria-hidden="true">
             <div class="botb-caption img-responsive img-thumbnail open" data-toggle="modal" data-target=".pic1-modal" aria-hidden="true"><h4>PIC of the Month</h4><hr class="gray"><h5>Rachael Dobreznski</h5><h6 class="subheading">Lake Havasu City, AZ</h6></div>
               <!-- PD Modal -->
               <div class="modal fade pic1-modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-header"><button type="button" class="close alignright" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
             </button><h3>PIC of the Month</h3></div> <div class="modal-body"> <div class="row"> <div class="col-xs-12 col-lg-6"> <img src="<?php bloginfo('stylesheet_directory');?>/images/botb/picotm1.jpg" alt="" class="img-responsive img-thumbnail left"> </div> <div class="col-xs-12 col-lg-6"><h4>Rachael Dobreznski</h4> <h5 class="subheading">Lake Havasu City, AZ</h5>
               <p>I can’t say enough good things about Rachael.  She has been with Apogee for several years at Havasu, and she knows all the hospital employees personally.  She is a stickler for details, to make sure her clinicians don’t have to be concerned with non-</p></div>
               <div class="col-lg-12">
               <p>clinical obligations.  She is proactive and works well with everyone.When her two co-workers left she stepped up to the plate and has been hitting home runs ever since.  She has trained our two new PICs,l came up with original ideas on process improvement, and is constantly running interference for the team.  When I tell her we need something done, I don’t worry, because I know that if it humanly possible she will do it. Thank you Rachael, for living the Apogee Promise.</p>
               <h6 class="alignright subheading">&mdash; Lawrence Young, MD | Director of Clinical Operations</h6></div> </div><!--end of row--> </div></div></div></div><!--end of pd modal-->
         </div>

         <div class="col-xs-12 col-sm-4 col-lg-3">
             <img src="/newsletter/global-images/avatar_f.jpg" alt="" class="img-responsive img-thumbnail open" data-toggle="modal" data-target=".pic2-modal" aria-hidden="true">
             <div class="botb-caption img-responsive img-thumbnail open" data-toggle="modal" data-target=".pic2-modal" aria-hidden="true"><h4>PIC of the Month</h4><hr class="gray"><h5>Erica Caswell</h5><h6 class="subheading">Davenport, IA</h6></div>
               <!-- PD Modal -->
               <div class="modal fade pic2-modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-header"><button type="button" class="close alignright" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
             </button><h3>PIC of the Month</h3></div> <div class="modal-body"> <div class="row"> <div class="col-xs-12 col-lg-6"> <img src="/newsletter/global-images/avatar_f.jpg" alt="" class="img-responsive img-thumbnail left"> </div> <div class="col-xs-12 col-lg-6"><h4>Erica Caswell</h4> <h5 class="subheading">Davenport, IA</h5>
               <p>Erica is professional, courteous, respectful, and her dedication to work is commendable. The attitude of a person tells a lot about their character, and she sets a wonderful example every time. Thank you for your hard work.</p>
               <h6 class="alignright subheading">&mdash; Deepak M. Goyal, MD, PD | Davenport, IA & Silvis, IL
               </h6></div> </div><!--end of row--> </div></div></div></div><!--end of pd modal-->
         </div>

     </div><!--/row-->
     <br class="clearfix">
 </div><!--/.container-->

 <?php get_footer();?>
