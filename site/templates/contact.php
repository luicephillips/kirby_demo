<?php snippet('header') ?>

  
    
  
    
    <!-- getin-touch section start Here -->
      <section class="getin-touch" id="getin-touch">
          <div class="row">
                   <header class="wrap">
                          <h1><?= $page->title()->html() ?></h1>      
                            
                            
                        </header>
              
                <form method="post">

					 
                
                      <div class="field">
                        <label for="name">Name <abbr title="required">*</abbr></label>
                        <input type="text" id="name" name="name">
                      </div>
                
                      <div class="field">
                        <label for="email">Email <abbr title="required">*</abbr></label>
                        <input type="email" id="email" name="email" required>
                      </div>
                
                      <div class="field">
                        <label for="text">Text <abbr title="required">*</abbr></label>
                        <textarea id="text" name="text" required></textarea>
                      </div>
                
                      <input type="submit" name="submit" value="Submit">
                
                </form>
                
                
          </div>
      </section>
      <!-- getin-touch section End Here -->

<?php snippet('footer') ?>