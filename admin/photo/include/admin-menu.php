<div id = "sideNavContainer" class="site-sidenav" ng-controller = "sideNavController as ctrl"
   layout = "row" ng-cloak>
   <md-sidenav md-component-id = "left" class = "md-sidenav-left site-sidenav" style='height: 100%; position: fixed;'>
      <menu-link section="page" class="ng-isolate-scope">
         <a class="md-button md-ink-ripple" ng-href="api/directive/mdSwipeRight">
         <md-icon md-svg-src="include/img/twotone-add_box-24px.svg" aria-label=""></md-icon>
            Add New Product
         </a>
      </menu-link>
      <br>
      <menu-link section="page" class="ng-isolate-scope">
         <a class="md-button md-ink-ripple" ng-href="api/directive/mdSwipeRight">
         <md-icon md-svg-src="include/img/twotone-view_list-24px.svg" aria-label=""></md-icon>
            My Products  
         </a>
      </menu-link>
      <br>
      <menu-link section="page" class="ng-isolate-scope">
         <a class="md-button md-ink-ripple" ng-href="api/directive/mdSwipeRight">
         <md-icon md-svg-src="include/img/twotone-visibility-24px.svg" aria-label=""></md-icon>
            Views  
         </a>
      </menu-link>
      <br>
      <menu-link section="page" class="ng-isolate-scope">
         <a class="md-button md-ink-ripple" ng-href="api/directive/mdSwipeRight">
         <md-icon md-svg-src="include/img/twotone-monetization_on-24px.svg" aria-label=""></md-icon>
            Sales  
         </a>
      </menu-link>
      <br>
      <menu-link section="page" class="ng-isolate-scope">
         <a class="md-button md-ink-ripple" ng-href="api/directive/mdSwipeRight">
         <md-icon md-svg-src="include/img/twotone-settings-24px.svg" aria-label=""></md-icon>
            Account Settings  
         </a>
      </menu-link>
      <br>
      <menu-link section="page" class="ng-isolate-scope">
         <a class="md-button md-ink-ripple" ng-href="api/directive/mdSwipeRight">
         <md-icon md-svg-src="include/img/twotone-payment-24px.svg" aria-label=""></md-icon>
            Payments  
         </a>
      </menu-link>
      <br>
      <menu-link section="page" class="ng-isolate-scope">
         <a class="md-button md-ink-ripple" ng-href="api/directive/mdSwipeRight">
         <md-icon md-svg-src="include/img/twotone-forward-24px.svg" aria-label=""></md-icon>
            Logout  
         </a>
      </menu-link>
   </md-sidenav>
   <md-content class='site-sidenav'>
      <md-button ng-click = "openLeftMenu()">
         <md-icon md-svg-src="include/img/twotone-menu-24px.svg" aria-label=""></md-icon>
         Menu
      </md-button>
   </md-content>
   <md-content class='site-sidenav'>
      <md-button>
         <md-icon md-svg-src="include/img/twotone-verified_user-24px.svg" aria-label=""></md-icon>
         <?php echo $firstname.' '.$lastname; ?>
      </md-button>
   </md-content>
</div>