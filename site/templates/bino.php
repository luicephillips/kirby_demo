<?php snippet('header') ?>

<!-- Service section start Here -->
      <section class="services" id="services">
          <div class="row">
               <?= $page->text()->kirbytext() ?>
                
                <!-- service-list Start -->
                <div class="service-list">
                    <?php foreach($page->contactoptions()->toStructure() as $item): ?>
                    
                        <div class="large-3 medium-6 small-12 columns">
                        <?php $icon = $page->image($item->icon()); ?>
                            <img src="<?= $icon->url() ?>" alt="<?= $item->title()->html() ?>" title="<?= $item->title()->html() ?>">
                            <h4><a href="<?= $item->url()->html() ?>" title="<?= $item->linktext()->html() ?>"><?= $item->linktext()->html() ?></a> </h4>
                            <p><?= $item->text()->html() ?></p>
                        </div>
                    
                    <?php  endforeach; ?>
                    
                </div>
              <!-- service-list Ends -->
          </div>
      </section>
      <!-- Service section End Here -->
      
      
      <!-- team section start Here -->
      <section class="team" id="team">
          <div class="row">
              <?= $page->text2()->kirbytext() ?>
                
                <!-- service-list Start -->
                
                <div class="team-list">
                
                	<?php foreach($page->teamoption()->toStructure() as $item): ?>
                    		<?php $icon = $page->image($item->icon()); ?>
                  			   <div class="large-3 medium-6 small-12 columns">
                                    <img src="<?= $icon->url() ?>" alt="<?= $item->title()->html() ?>" title="<?= $item->title()->html() ?>">
                                    <h4><a href="<?= $item->url()->html() ?>" title="ANNE HATHAWAY"> <?= $item->title()->html() ?> </a></h4>
                                    <span><?= $item->linktext()->html() ?></span>
                                    <p><?= $item->text()->html() ?></p>
                                    
                                    <ul class="social-media">
                                        <li><a href="#" title="Facebook" target="_blank"><i class="fa-facebook facebook"></i> </a></li>
                                        <li><a href="#" title="Twitter" target="_blank"><i class="fa-twitter twitter"></i> </a></li>
                                        <li><a href="#" title="Linkedin" target="_blank"><i class="fa-linkedin linkedin"></i> </a></li>
                                        <li><a href="#" title="mail" target="_blank"><i class="fa-envelope mail"></i> </a></li>
                                    </ul>
                                </div>
                    
                    	<?php endforeach; ?>
                        
                        
                    
                    
                   
                    
                </div>
              <!-- team-list Ends -->
          </div>
      </section>
      <!-- team section End Here -->

      
     
      
      <!-- getin-touch section start Here -->
      <section class="getin-touch" id="getin-touch">
          <div class="row">
                 <?= $page->text3()->kirbytext() ?>
              
                <form action="" method="post" > 
                    <div class="small-12 columns">
                        <div class="medium-10 small-12 small-centered columns form cf">
                            <div class="large-6 medium-12 small-12 columns"><input type="text" name="namef" placeholder="Your Name*"></div>
                            <div class="large-6 medium-12 small-12 columns"><input type="text" name="emailf" placeholder="Your Email*"></div>
                            <div class="small-12 columns"><textarea placeholder="Your Message*" name="messagef" rows="5"></textarea></div>
                            <div class="small-12 columns"><input type="submit" value="Send Message" class="big-btn"></div>
                        </div>
                    </div>
                </form>
                
                
          </div>
      </section>
      <!-- getin-touch section End Here -->

<?php snippet('footer') ?>