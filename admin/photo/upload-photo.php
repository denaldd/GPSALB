<div layout="row" layout-xs="column">
   <div flex class="md-flex-bg">
      <md-content layout-padding class='md-flex-bg'>
         <div class="md-dialog-content">
            <form name = "loginForms" ng-controller="myCntrl"> 
               <md-input-container>
                  <label></label>
                  <input type="file" id="file1" name="file" multiple ng-files="getTheFiles($files)" required /> 
                  <h1 ng-bind="msg"></h1>
               </md-input-container>
               <md-button class = "md-raised md-primary" type='submit' ng-click="uploadFiles()">Shto</md-button>
               </form>
         </div>
      </md-content>
   </div>
</div>