<md-content class="md-padding" style='background: #f8f8f8;'>
  <div layout="row" layout-xs="column" class="md-flex-bg">
     <div flex> 
      <md-card ng-controller="viewpost" style='background: #eeeeee'>
        <md-card-content>
            <?php  
                foreach($values as $key){
                    echo $key;
                }
            ?> 
        </md-card-content>
        <md-card-footer>
  
        </md-card-footer>
      </md-card>
    </div>
    <div flex>
    <div id="gallery" style="display:none;">
    <?PHP 
        foreach ($photos as $value) {   
            echo '<img
                 src="../../photo/fileUpload/'.$value.'"
                 data-image="../../photo/fileUpload/'.$value.'"
                 >';
        }
    ?>             
</div>

<script type="text/javascript">

    jQuery(document).ready(function(){

        jQuery("#gallery").unitegallery();

    });
    
</script>


    </div>
  </div>
  </md-content>


  