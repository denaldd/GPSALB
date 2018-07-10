  <md-content class="md-padding" style='background: #f8f8f8;'>
  <div layout="row" layout-xs="column" class="md-flex-bg">
     <div flex> 
      <md-card ng-controller="numberofposts" style='background: #eeeeee'>
        <md-card-content>
          <h3>
            <md-icon md-svg-src="../include/img/twotone-local_grocery_store-24px.svg" aria-label=""></md-icon>
            Number of posts
          </h3>
          <p >{{nums}}</p>
        </md-card-content>
        <md-card-footer>
  
        </md-card-footer>
      </md-card>
    </div>
    <div flex>
      <md-card ng-controller="online" style='background: #eeeeee'>
        <md-card-content>
          <h3>
            <md-icon md-svg-src="../include/img/twotone-portrait-24px.svg" aria-label=""></md-icon>
            Last login
          </h3>
          <p ng-bind-html="photo"></p>
        </md-card-content>
        <md-card-footer>
  
        </md-card-footer>
      </md-card>
    </div>
  <div flex>
      <md-card ng-controller="online" style='background: #eeeeee'>
        <md-card-content>
          <h3>
            <md-icon md-svg-src="../include/img/twotone-visibility-24px.svg" aria-label=""></md-icon>
            All views
          </h3>
        </md-card-content>
        <md-card-footer>
  
        </md-card-footer>
      </md-card>
    </div>
    <div flex>
      <md-card ng-controller="date_registered" style='background: #eeeeee'>
        <md-card-content>
          <h3>
            <md-icon md-svg-src="../include/img/twotone-calendar_today-24px.svg" aria-label=""></md-icon>
            Registered date
          </h3>
          <p>{{date_registered}}</p>
        </md-card-content>
        <md-card-footer>
  
        </md-card-footer>
      </md-card>
    </div>
  </div>
  </md-content>
