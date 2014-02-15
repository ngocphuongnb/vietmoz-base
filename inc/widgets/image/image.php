<?php 
    //Register Widget
    add_action('widgets_init', 'widget_image');
    function widget_image()
    {
        register_widget('class_widget_image');
    }
    //End Register Widget
    
    
    
    //Create Widget Class
    class class_widget_image extends WP_widget
    {
        //Description Widget
        function class_widget_image()
        {
            
            $widget_ops=array('class' => 'class_widget_image', 'description'=>'AA Image');
            $control_ops=array('width' =>200, 'height'=>350, 'id-base'=>'id-widget-image');
            $this->WP_widget('class_widget_image',__('AA Image','thietkeweb.vietmoz.com'),$widget_ops,$control_ops);
        }
        //End Description Widget
         
         
		 function widget($args,$instance)
		 {
			extract($args);
			//echo $this->id; 
		?>
            
			<div id="<?php echo $this->id; ?>" class="wrap-widget-image">
				<div class="widget-title"><?php echo $instance['title']; ?></div>
				<div class="widget-content">
					<a href="<?php echo $instance['link'] ?>"><img style="<?php if(!empty($instance['height'])) echo 'width:'.$instance['width'].';'; ?><?php if(!empty($instance['height'])) echo 'height:'.$instance['height']; ?>" src="<?php echo $instance['image']; ?>" /></a>
				</div>
			</div>
		<?php
		 }
         
         
        function update($new_instance,$old_instance)
        {
            $instance=$old_instance;
            $instance['title'] = $new_instance['title'];
            $instance['image'] = $new_instance['image'];
            $instance['link'] = $new_instance['link'];
            $instance['width'] = $new_instance['width'];
            $instance['height'] = $new_instance['height'];
            return $instance;
        }
        
        
		function form($instance)
        {
            $defaults = array('title' => __( '' , 'thietkeweb.vietmoz.com' ),'image' => __( '' , 'thietkeweb.vietmoz.com' ),'link' => __( '' , 'thietkeweb.vietmoz.com' ),'width' => __( '' , 'thietkeweb.vietmoz.com' ),'height' => __( '' , 'thietkeweb.vietmoz.com' ));
            $instance = wp_parse_args((array) $instance, $defaults); 
			?>
            <div class="widget-item">
                <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Tiêu đề : ','thietkeweb.vietmoz.com'); ?></label>
                <input class="widefat" type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" /><br /><br />
			</div>            
            
			<div class="widget-item">
                <label for="<?php echo $this->get_field_id('link'); ?>"><?php _e('Link : ','thietkeweb.vietmoz.com'); ?></label>
                <input class="widefat" type="text" id="<?php echo $this->get_field_id('link'); ?>" name="<?php echo $this->get_field_name('link'); ?>" value="<?php echo $instance['link']; ?>" /><br /><br />
			</div>	
			
           <div class="widget-item">
       			<label class="image">Hình ảnh : </label><br />
    			<input class="url" type="text" name="<?php echo $this->get_field_name('image'); ?>" id="url-<?php echo $this->id ?>" value="<?php echo $instance['image'] ?>"  />
    			<input type="button"  class="button-upload pointer" particular="<?php echo $this->id; ?>" value="Upload" />
    			<input type="button" class="button-remove pointer" particular="<?php echo $this->id; ?>" value="Remove" /><br /><br />
                
                <label class="image">Rộng : </label><br />
                <input type="text" id="<?php echo $this->get_field_id('width'); ?>" name="<?php echo $this->get_field_name('width');  ?>"  value="<?php echo $instance['width'] ?>" /><br /><br />
                
                <label class="image">Cao : </label><br />
                <input type="text" id="<?php echo $this->get_field_id('height'); ?>" name="<?php echo $this->get_field_name('height');  ?>"  value="<?php echo $instance['height'] ?>" /><br />
                <img style="max-width:100%" class="display" id="display-<?php echo $this->id ?>" src="<?php echo $instance['image'] ?>"/><br />
            </div>

			
			
			<?php
        }
    }
	//END Create Widget Class
?>