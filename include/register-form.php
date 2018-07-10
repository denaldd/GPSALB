<div layout="row" layout-xs="column" class="md-flex-bg">
   <div flex>

   </div>
   <div flex class="md-flex-bg">
      <md-content layout-padding class='md-flex-bg'>
         <form name = "projectForm" ng-controller="FormCtrl" ng-submit="submitForm()">
            <md-input-container class = "md-block">
               <label>Emri:</label>
               <md-icon md-svg-src="include/img/outline-face-24px.svg" aria-label=""></md-icon>
               <input required name = "firstName" ng-model = "form.firstName">
               <div ng-messages = "projectForm.firstName.$error">
                  <div ng-message = "required">Kjo eshte fushe e detyruar.</div>
               </div>
            </md-input-container>
            <md-input-container class = "md-block">
               <label>Mbiemri:</label>
               <md-icon md-svg-src="include/img/outline-face-24px.svg" aria-label=""></md-icon>
               <input required name = "lastName" ng-model = "form.lastName">
               <div ng-messages = "projectForm.lastName.$error">
                  <div ng-message = "required">Kjo eshte fushe e detyruar.</div>
               </div>
            </md-input-container>
            <md-input-container class = "md-block">
               <label>Email</label>
               <md-icon md-svg-src="include/img/twotone-email-24px.svg" aria-label=""></md-icon>
               <input required type = "email" name = "userEmail"
                  ng-model = "form.userEmail"
                  minlength = "8" maxlength = "100" ng-pattern = "/^.+@.+\..+$/" />
               <div ng-messages = "projectForm.userEmail.$error" role = "alert">
                  <div ng-message-exp = "['required', 'minlength', 'maxlength',
                     'pattern']">
                     Ju lutem shenoni nje adrese emaili te sakte.
                  </div>
               </div>
            </md-input-container>
            <md-input-container class = "md-block">
               <label>Fjalekalimi:</label>
               <md-icon md-svg-src="include/img/outline-lock-24px.svg" aria-label=""></md-icon>
               <input type= "password" required name = "userPassword" ng-model = "form.userPassword">
               <div ng-messages = "projectForm.userPassword.$error">
                  <div ng-message = "required">Kjo eshte fushe e detyruar.</div>
               </div>
            </md-input-container>
            <md-input-container class = "md-block">
               <label>Adresa</label>
               <md-icon md-svg-src="include/img/outline-location_city-24px.svg" aria-label=""></md-icon>
               <input required name = "userAddres"
                  ng-model = "form.userAddres"
                  minlength = "10" maxlength = "100" />
               <div ng-messages = "projectForm.userAddres.$error" role = "alert">
                  <div ng-message-exp = "['required', 'minlength', 'maxlength']">
                     Adresa nuk duhet lene bosh.
                  </div>
               </div>
            </md-input-container>
            <md-button class = "md-raised md-primary" type='submit' ng-click="Submit">
               <md-icon md-svg-src="include/img/outline-open_in_browser-24px.svg" aria-label=""></md-icon>
               Regjistrohu
            </md-button>
         </form>
         <div ng-controller="Login" ng-cloak md-theme="{{theme}}" class="container">
            <md-button class=" md-primary md-raised" ng-click="showAdvanced($event)">
               <md-icon md-svg-src="include/img/outline-open_in_browser-24px.svg" aria-label=""></md-icon>
               Login
            </md-button>
      </div>
      </md-content>
   </div>
</div>