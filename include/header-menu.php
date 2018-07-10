<div id = "sideNavContainer" class="site-sidenav" ng-controller = "sideNavController as ctrl"
   layout = "row" ng-cloak>
   <md-sidenav md-component-id = "left" class = "md-sidenav-left site-sidenav">
      <img src="images/logo.png">
      <menu-link section="page" class="ng-isolate-scope">
         <a class="md-button md-ink-ripple" ng-href="api/directive/mdSwipeRight">
         Faqja Kryesore  
         </a>
      </menu-link>
      <br>
      <menu-link section="page" class="ng-isolate-scope">
         <a class="md-button md-ink-ripple" ng-href="api/directive/mdSwipeRight">
         Login  
         </a>
      </menu-link>
      <br>
      <menu-link section="page" class="ng-isolate-scope">
         <a class="md-button md-ink-ripple" ng-href="api/directive/mdSwipeRight">
         Regjistrohu  
         </a>
      </menu-link>
      <br>
      <menu-link section="page" class="ng-isolate-scope">
         <a class="md-button md-ink-ripple" ng-href="api/directive/mdSwipeRight">
         Kontakt  
         </a>
      </menu-link>
   </md-sidenav>
   <md-content class='site-sidenav'>
      <md-button ng-click = "openLeftMenu()">Menu</md-button>
   </md-content>
</div>