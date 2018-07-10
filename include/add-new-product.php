<div layout="row" layout-xs="column">
   <div flex class="md-flex-bg">
      <md-content layout-padding class='md-flex-bg'>
         <div class="md-dialog-content">
            <!--        <form name = "loginForms" ng-controller="myCntrl">
               <md-input-container class = "md-block">
                  <label>tituuli i produktit</label>
                  <input required type = "text" name = "title"
                     ng-model = "form.title"
                     minlength = "2" maxlength = "200"/>
                  <div ng-messages = "loginForms.title.$error" role = "alert">
                     <div ng-message-exp = "['required', 'minlength', 'maxlength']">
                        Ju lutem shenoni titullin.
                     </div>
                  </div>
               </md-input-container>
               <md-input-container class = "md-block">
                  <label>Pershkrimi</label>
                  <textarea required name = "description"
                     ng-model = "form.description"/></md-input-container>
                  <div ng-messages = "loginForms.description.$error" role = "alert">
                     <div ng-message-exp = "['required']">
                        Pershkrimi eshte i detyruar.
                     </div>
                  </div>
               </md-input-container>  
               <md-input-container>
                  <label></label>
                  <input type="file" id="file1" name="file" multiple ng-files="getTheFiles($files)" required /> 
                  <h1 ng-bind="msg"></h1>
               </md-input-container>
               <md-button class = "md-raised md-primary" type='submit' ng-click="uploadFiles()">Shto</md-button>
               </form> -->
            <div ng-controller="ChangeController">
               <md-select ng-model="selection" aria-label="selection">
                  <md-option ng-repeat="item in items" ng-value="item">
                     {{item}}
                  </md-option>
               </md-select>
               <div ng-controller="Map">
                  <center>
                     <div id="map_div"></div>
                  </center>
               </div>
               <div ng-switch on="selection">
                  <div  ng-switch-when="Shtepi me qera">
                     <div layout="row" layout-xs="column" class="md-flex-bg">
                        <div flex>
                           
                        </div>
                        <div flex>
                           <form name = "projectForm" ng-controller="shtepi" ng-submit="shtepimeqera()">
                              <md-input-container class = "md-block">
                                 <label>Titull:</label>
                                 <md-icon md-svg-src="include/img/twotone-subtitles-24px.svg" aria-label=""></md-icon>
                                 <input required name = "titull" ng-model = "form.titull">
                                 <div ng-messages = "projectForm.titull.$error">
                                    <div ng-message = "required">Kjo eshte fushe e detyruar.</div>
                                 </div>
                              </md-input-container>
                              <md-input-container class = "md-block">
                                 <label>Pershkrimi:</label>
                                 <md-icon md-svg-src="include/img/twotone-description-24px.svg" aria-label=""></md-icon>
                                 <textarea required rows="5" name = "pershkrim" ng-model = "form.pershkrim"></textarea>
                                 <div ng-messages = "projectForm.pershkrim.$error">
                                    <div ng-message = "required">Kjo eshte fushe e detyruar.</div>
                                 </div>
                              </md-input-container>
                              <md-input-container class = "md-block">
                                 <label>Cmimi:</label>
                                 <md-icon md-svg-src="include/img/twotone-monetization_on-24px.svg" aria-label=""></md-icon>
                                 <input required type="number" name = "cmim" ng-model = "form.cmim">
                                 <div ng-messages = "projectForm.cmim.$error">
                                    <div ng-message = "required">Kjo eshte fushe e detyruar.</div>
                                 </div>
                              </md-input-container>
                              <md-input-container class = "md-block">
                                 <label>Adresa:</label>
                                 <md-icon md-svg-src="include/img/twotone-location_on-24px.svg" aria-label=""></md-icon>
                                 <input required name = "adrese" ng-model = "form.adrese">
                                 <div ng-messages = "projectForm.adrese.$error">
                                    <div ng-message = "required">Kjo eshte fushe e detyruar.</div>
                                 </div>
                              </md-input-container>
                              <md-input-container class = "md-block">
                                 <label>Lat</label>
                                 <input type="text" name = "lat" id="latitude" ng-model='form.lat'/>
                              </md-input-container>
                              <input type="text" name = "lng" id="longitude" ng-model = "form.lng">
                              <md-button class = "md-raised md-primary" type='submit' ng-click="Submit">
                                 <md-icon md-svg-src="include/img/twotone-save-24px.svg" aria-label=""></md-icon>
                                 Save 
                              </md-button>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div  ng-switch-when="Shtepi ne shitje">
                     <div layout="row" layout-xs="column" class="md-flex-bg">
                        <div flex>
                           
                        </div>
                        <div flex>
                           <form name = "projectForm" ng-controller="shtepishitje" ng-submit="shtepineshitje()">
                              <md-input-container class = "md-block">
                                 <label>Titull:</label>
                                 <md-icon md-svg-src="include/img/twotone-subtitles-24px.svg" aria-label=""></md-icon>
                                 <input required name = "titull" ng-model = "form.titull">
                                 <div ng-messages = "projectForm.titull.$error">
                                    <div ng-message = "required">Kjo eshte fushe e detyruar.</div>
                                 </div>
                              </md-input-container>
                              <md-input-container class = "md-block">
                                 <label>Pershkrimi:</label>
                                 <md-icon md-svg-src="include/img/twotone-description-24px.svg" aria-label=""></md-icon>
                                 <textarea required rows="5" name = "pershkrim" ng-model = "form.pershkrim"></textarea>
                                 <div ng-messages = "projectForm.pershkrim.$error">
                                    <div ng-message = "required">Kjo eshte fushe e detyruar.</div>
                                 </div>
                              </md-input-container>
                              <md-input-container class = "md-block">
                                 <label>Cmimi:</label>
                                 <md-icon md-svg-src="include/img/twotone-monetization_on-24px.svg" aria-label=""></md-icon>
                                 <input required type="number" name = "cmim" ng-model = "form.cmim">
                                 <div ng-messages = "projectForm.cmim.$error">
                                    <div ng-message = "required">Kjo eshte fushe e detyruar.</div>
                                 </div>
                              </md-input-container>
                              <md-input-container class = "md-block">
                                 <label>Adresa:</label>
                                 <md-icon md-svg-src="include/img/twotone-location_on-24px.svg" aria-label=""></md-icon>
                                 <input required name = "adrese" ng-model = "form.adrese">
                                 <div ng-messages = "projectForm.adrese.$error">
                                    <div ng-message = "required">Kjo eshte fushe e detyruar.</div>
                                 </div>
                              </md-input-container>
                              <md-input-container class = "md-block">
                                 <label>Lat</label>
                                 <input type="text" name = "lat" id="latitude" ng-model='form.lat'/>
                              </md-input-container>
                              <input type="text" name = "lng" id="longitude" ng-model = "form.lng">
                              <md-button class = "md-raised md-primary" type='submit' ng-click="Submit">
                                 <md-icon md-svg-src="include/img/twotone-save-24px.svg" aria-label=""></md-icon>
                                 Save 
                              </md-button>
                           </form>
                        </div>
                     </div>                     
                  </div>
                  <div  ng-switch-when="Elektronike">
                     <div layout="row" layout-xs="column" class="md-flex-bg">
                        <div flex>
                           
                        </div>
                        <div flex>
                           <form name = "projectForm" ng-controller="elektronike" ng-submit="elektronike_()">
                              <md-input-container class = "md-block">
                                 <label>Titull:</label>
                                 <md-icon md-svg-src="include/img/twotone-subtitles-24px.svg" aria-label=""></md-icon>
                                 <input required name = "titull" ng-model = "form.titull">
                                 <div ng-messages = "projectForm.titull.$error">
                                    <div ng-message = "required">Kjo eshte fushe e detyruar.</div>
                                 </div>
                              </md-input-container>
                              <md-input-container class = "md-block">
                                 <label>Pershkrimi:</label>
                                 <md-icon md-svg-src="include/img/twotone-description-24px.svg" aria-label=""></md-icon>
                                 <textarea required rows="5" name = "pershkrim" ng-model = "form.pershkrim"></textarea>
                                 <div ng-messages = "projectForm.pershkrim.$error">
                                    <div ng-message = "required">Kjo eshte fushe e detyruar.</div>
                                 </div>
                              </md-input-container>
                              <md-input-container class = "md-block">
                                 <label>Cmimi:</label>
                                 <md-icon md-svg-src="include/img/twotone-monetization_on-24px.svg" aria-label=""></md-icon>
                                 <input required type="number" name = "cmim" ng-model = "form.cmim">
                                 <div ng-messages = "projectForm.cmim.$error">
                                    <div ng-message = "required">Kjo eshte fushe e detyruar.</div>
                                 </div>
                              </md-input-container>
                              <md-input-container class = "md-block">
                                 <label>Adresa:</label>
                                 <md-icon md-svg-src="include/img/twotone-location_on-24px.svg" aria-label=""></md-icon>
                                 <input required name = "adrese" ng-model = "form.adrese">
                                 <div ng-messages = "projectForm.adrese.$error">
                                    <div ng-message = "required">Kjo eshte fushe e detyruar.</div>
                                 </div>
                              </md-input-container>
                              <md-input-container class = "md-block">
                                 <label>Sasia:</label>
                                 <md-icon md-svg-src="include/img/twotone-location_on-24px.svg" aria-label=""></md-icon>
                                 <input required name = "sasia" ng-model = "form.sasia">
                                 <div ng-messages = "projectForm.sasia.$error">
                                    <div ng-message = "required">Kjo eshte fushe e detyruar.</div>
                                 </div>
                              </md-input-container>
                              <md-input-container class = "md-block">
                                 <label>Lat</label>
                                 <input type="text" name = "lat" id="latitude" ng-model='form.lat'/>
                              </md-input-container>
                              <input type="text" name = "lng" id="longitude" ng-model = "form.lng">
                              <md-button class = "md-raised md-primary" type='submit' ng-click="Submit">
                                 <md-icon md-svg-src="include/img/twotone-save-24px.svg" aria-label=""></md-icon>
                                 Save 
                              </md-button>
                           </form>
                        </div>
                     </div>                     
                  </div>
                  <div  ng-switch-when="Restornate">
                  </div>
                  <div  ng-switch-when="Punesim">
                  </div>
                  <div  ng-switch-when="Makina">
                  </div>
                  <div  ng-switch-default>Zgjidhni nje kategori per produktin qe do te shtoni</div>
               </div>
            </div>
         </div>
      </md-content>
   </div>
</div>