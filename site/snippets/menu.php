 <div class="row">
                <div class="large-1 medium-1 small-12 columns logo">
                <?php
				//print_r($site);
				 if($image = $site->image('logo.png')): ?>
                
                <a href="index.html" title="Logo"><img src="<?php echo $image->url() ?>" title="Logo" alt="Logo"></a>  
                <?php endif; ?>
                    
                </div>
                  <div class="large-11 medium-11 small-12 columns right-menu cf">
                    <nav id="nav">
                          <ul class="enumenu_ul menu">
                            <?php foreach($pages->visible() as $item): ?>
                                    <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
                                      <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
                                    </li>
                                  <?php endforeach ?>
                            
                          </ul>
                        </nav>
                  </div>
              </div>