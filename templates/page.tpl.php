

    <!-- Off Canvas Menu -->
    <nav class="left-off-canvas-menux">
        
    </nav>

    <nav id="main-navigation" class ="">
      <div id="main-navigation-content">
<!--        <a class="icon-cancel" id="menu-close" href="#close">X</a>-->
        <nav id="header-nav">
          <?php print render($page['offcanvas_meny']); ?>
        </nav>
      </div>
    </nav>

    <!-- main content goes here -->
    

<!--.page -->
<div role="document" class="page">
  <div class="navigation-top-bar">
      <div class="inner">
          <div class="menu-ball">
            <div class="c-hamburger c-hamburger--htx">
                <a href="#" ><span></span></a>
            </div>
          </div>
        <div class="logo"><?php print $linked_logo;?></div>
        <div class="sidtitel"><a href="/"><?php print $site_name; ?></a></div>
      </div>
  </div>
  <!--.l-header -->
  <header role="banner" class="l-header">

    <!-- Title, slogan and menu -->
    
    <!-- End title, slogan and menu -->

    <?php if (!empty($page['header'])): ?>
      <!--.l-header-region -->
      <section class="l-header-region row">
        <div class="columns">
          <?php print render($page['header']); ?>
        </div>
      </section>
      <!--/.l-header-region -->
    <?php endif; ?>

  </header>
  <!--/.l-header -->

  <?php if (!empty($page['featured'])): ?>
    <!--.l-featured -->
    <section class="l-featured">
      <div class="x">
        <?php print render($page['featured']); ?>
      </div>
    </section>
    <!--/.l-featured -->
  <?php endif; ?>

  <?php if ($messages && !$zurb_foundation_messages_modal): ?>
    <!--.l-messages -->
    <section class="l-messages row">
      <div class="columns">
        <?php if ($messages): print $messages; endif; ?>
      </div>
    </section>
    <!--/.l-messages -->
  <?php endif; ?>

  <?php if (!empty($page['help'])): ?>
    <!--.l-help -->
    <section class="l-help row">
      <div class="columns">
        <?php print render($page['help']); ?>
      </div>
    </section>
    <!--/.l-help -->
  <?php endif; ?>

  <!--.l-main -->
  <main role="main" class="row l-main">
    <!-- .l-main region -->
    <?php 
      $bredd = "small-12";
      if ( !empty($node)) {
        
        if($node->type == "page"){
          $bredd = "large-8 medium-12 small-12";  
        }
        
      } elseif($is_front == 1){
        $bredd = "large-8 medium-12 small-12";
      }

    ?>
    <div class="<?php print $main_grid; ?> main columns <?php print $bredd; ?>">
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlight panel callout">
          <?php print render($page['highlighted']); ?>
        </div>
      <?php endif; ?>

      <a id="main-content"></a>

      <?php //if ($breadcrumb): print $breadcrumb; endif; ?>

      <?php if ($title): ?>
        <?php if ($title =="Skapa Arter"): ?>
          <?php print render($title_prefix); ?>
            <h1 id="page-title" class="title"><?php print "Rapportera Arter"; ?></h1>
          <?php print render($title_suffix); ?>
        <?php else: ?>
          <?php print render($title_prefix); ?>
            <h1 id="page-title" class="title"><?php print $title; ?></h1>
          <?php print render($title_suffix); ?>
        <?php endif; ?>
      <?php endif; ?>
      
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
        <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
      <?php endif; ?>

      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      
      <?php endif; ?>

      <?php print render($page['content']); ?>
    </div>
    <!--/.l-main region -->

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside role="complementary" class="<?php print $sidebar_first_grid; ?> sidebar-first columns sidebar">
        <?php print render($page['sidebar_first']); ?>
      </aside>
    <?php endif; ?>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> sidebar-second columns sidebar">
        <?php print render($page['sidebar_second']); ?>
      </aside>
    <?php endif; ?>
  </main>
  <!--/.l-main -->

  <?php if (!empty($page['triptych_first']) || !empty($page['triptych_middle']) || !empty($page['triptych_last'])): ?>
    <!--.triptych-->
    <section class="l-triptych row">
      <div class="triptych-first medium-4 columns">
        <?php print render($page['triptych_first']); ?>
      </div>
      <div class="triptych-middle medium-4 columns">
        <?php print render($page['triptych_middle']); ?>
      </div>
      <div class="triptych-last medium-4 columns">
        <?php print render($page['triptych_last']); ?>
      </div>
    </section>
    <!--/.triptych -->
  <?php endif; ?>

  <?php if (!empty($page['footer_firstcolumn']) || !empty($page['footer_secondcolumn']) || !empty($page['footer_thirdcolumn']) || !empty($page['footer_fourthcolumn'])): ?>
    <!--.footer-columns -->
    
    <section class="l-footer">
      <div class="row l-footer-columns">
      <?php if (!empty($page['footer_firstcolumn'])): ?>
        <div class="footer-first medium-4 columns">
          <?php print render($page['footer_firstcolumn']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_secondcolumn'])): ?>
        <div class="footer-second medium-4 columns">
          <?php print render($page['footer_secondcolumn']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_thirdcolumn'])): ?>
        <div class="footer-third medium-4 columns">
          <?php print render($page['footer_thirdcolumn']); ?>
        </div>
      <?php endif; ?>
      

      </div>
    </section>
    <!--/.footer-columns-->
  <?php endif; ?>

  <!--.l-footer -->
  <footer class="l-footer bottom" role="contentinfo">
    <div class="row l-footer-columns">
    <?php if (!empty($page['footer'])): ?>
      <div class="footer columns small-centered">
        <?php print render($page['footer']); ?>
      </div>
    <?php endif; ?>

    </div>
  </footer>
  <!--/.l-footer -->
    <a href="#0" class="scroll-top" style="display: inline;">
        <i class="fi-arrow-up"></i>
    </a>
  <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>
<!--/.page -->
