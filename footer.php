        <div class="col-md-12">
	 <div class="panel panel-white-dark text-center">
	  <div class="panel-heading">
	   <h3 class="panel-title">Empfehle Blue Engineering deinen Freundinnen und Freunden</h3>
	  </div>
	  <div class="panel-body">
	   <!--div class="buttons-whitespace-social"-->
            <a href="http://www.twitter.com/share?url=http://blue-eng.km.tu-berlin.de/&amp;text=Blue Engineering%20-%20Ingenieurinnen%20und%20Ingenieure%20mit%20sozialer%20und%20ökologischer%20Verantwortung" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');return false;"><button type="button" class="btn btn-cyanide btn-social"><i class="fa fa-twitter-square"></i></button></a>
	
            <a href="https://www.facebook.com/sharer/sharer.php?u=http://blue-eng.km.tu-berlin.de/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');return false;"><button type="button" class="btn btn-info btn-social"><i class="fa fa-facebook-square"></i></button></a>
	
	    <a href="https://plus.google.com/share?url=http://blue-eng.km.tu-berlin.de/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');return false;"><button type="button" class="btn btn-berry btn-social"><i class="fa fa-google-plus-square"></i></button></a>
	
            <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://blue-eng.km.tu-berlin.de/&amp;title=Blue%20Engineering%20-%20Ingenieurinnen%20und%20Ingenieure%20mit%20sozialer%20und%20ökologischer%20Verantwortung&amp;summary=Blue%20Engineering%20-%20Ingenieurinnen%20und%20Ingenieure%20mit%20sozialer%20und%20ökologischer%20Verantwortung&amp;source=http://blue-eng.km.tu-berlin.de/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');return false;"><button type="button" class="btn btn-cyanide btn-social"><i class="fa fa-linkedin-square"></i></button></a>
	
            <a href="http://www.tumblr.com/share?v=3&amp;u=http%3A//blue-eng.km.tu-berlin.de/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');return false;"><button type="button" class="btn btn-info btn-social"><i class="fa fa-tumblr-square"></i></button></a>	
          <!--/div-->
	 </div>
	</div>

	<div class="col-md-12">
	 <div class="panel panel-white-darker text-center">
	  <div class="panel-heading">
	   <h3 class="panel-title">Folge uns</h3>
	  </div>
	  <div class="panel-body">
	   <!-- Link zur Facebookseite -->
  	   <a href="https://www.facebook.com/BlueEngineeringGermany" target="_blank"><button type="button" class="btn btn-info btn-social"><i class="fa fa-facebook"></i></button></a>

	   <!-- Link zur Twitteseite -->
	   <!--a href="" target="_blank"><button class="btn btn-cyanide btn-social"><i class="fa fa-twitter"></i></button></a-->
	  </div>
	 </div>
	<div>
	
	<!-- Footer Links -->
	<div id="footer" class="footer container-fluid"<?php $this->html( 'userlangattributes' ) ?>>
         <div class="row">
 	  <?php
	   $footerLinks = $this->getFooterLinks();

      if (is_array($footerLinks)) {
        foreach($footerLinks as $category => $links ):
          if ($category === 'info') { continue; } ?>

            <ul id="footer-<?php echo $category ?>">
              <?php foreach( $links as $link ): ?>
                <li id="footer-<?php echo $category ?>-<?php echo $link ?>"><?php $this->html( $link ) ?></li>
              <?php endforeach; ?>
              <?php
                if ($category === 'places') {

                  # Show sign in link, if not signed in
                  if ($wgBootstrapSkinLoginLocation == 'footer' && !$this->data['loggedin']) {
                    $personalTemp = $this->getPersonalTools();

                    if (isset($personalTemp['login'])) {
                      $loginType = 'login';
                    } else {
                      $loginType = 'anonlogin';
                    }

                    ?><li id="pt-login"><a href="<?php echo $personalTemp[$loginType]['links'][0]['href'] ?>"><?php echo $personalTemp[$loginType]['links'][0]['text']; ?></a></li><?php
                  }

                  # Show the search in footer to all
                  if ($wgSearchPlacement['footer']) {
                    echo '<li>';
                    $this->renderNavigation( array( 'SEARCHFOOTER' ) ); 
                    echo '</li>';
                  }
                }
              ?>
            </ul>
          <?php 
              endforeach; 
            }
          ?>
	</div>
	</div>	

<!--div class="going-top">[[#top|TOP]] <i class="fa fa-level-up fa-fw"></i></div-->
	
    <footer>
      <!--ul id="footer-icons" class="noprint text-center">
        <li id="footer-poweredbyico">
        <a href="//www.mediawiki.org/">
          <img src="http://www.mediawikibootstrapskin.co.uk//skins/common/images/poweredby_mediawiki_88x31.png"
          alt="Powered by MediaWiki" height="31" width="88" />
        </a> 
        <a href="http://www.mediawikibootstrapskin.co.uk/">
          <img src="http://www.mediawikibootstrapskin.co.uk/images/BootStrapSkin_mediawiki_88x31.png"
          alt="Powered by BootStrapSkin" height="31" width="88" />
        </a>
      </ul-->
      <p class="text-center no-margins push-up">
      <a href="#" class="color-hover-white">Blue Engineering</a> &copy; All Rights Reserved</p>
    </footer>
