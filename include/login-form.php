<md-dialog aria-label="Mango (Fruit)">
   <md-toolbar class='site-sidenav'>
      <div class="md-toolbar-tools site-sidenav">
         <h2>Login GPS</h2>
         <span flex></span>
         <md-button class="md-icon-button" ng-click="cancel()">
            <md-icon md-svg-src="include/img/round-close-24px.svg" aria-label="Close dialog"></md-icon>
         </md-button>
      </div>
   </md-toolbar>
   <div layout="row" layout-xs="column">
      <div flex class="md-flex-bg">
         <md-content layout-padding class='md-flex-bg'>
            <div class="md-dialog-content">
               <form name = "loginForms" ng-controller="LoginForm" ng-submit="submitsForm()">
                  <md-input-container class = "md-block">
                     <label>Email</label>
                     <input required type = "email" name = "userMail"
                        ng-model = "form.userMail"
                        minlength = "8" maxlength = "100" ng-pattern = "/^.+@.+\..+$/" />
                     <div ng-messages = "loginForms.userMail.$error" role = "alert">
                        <div ng-message-exp = "['required', 'minlength', 'maxlength',
                           'pattern']">
                           Ju lutem shenoni nje adrese emaili te sakte.
                        </div>
                     </div>
                  </md-input-container>
                  <md-input-container class = "md-block">
                     <label>Fjalekalimi:</label>
                     <input type= "password" required name = "userPass" ng-model = "form.userPass">
                     <div ng-messages = "loginForms.userPass.$error">
                        <div ng-message = "required">Kjo eshte fushe e detyruar.</div>
                     </div>
                  </md-input-container>
                  <md-button class = "md-raised md-primary" type='submit' ng-click="Submit">Login</md-button>
               </form>
            </div>
         </md-content>
      </div>
   </div>
   <md-dialog-actions layout="row">
      <span flex></span>
   </md-dialog-actions>
</md-dialog>