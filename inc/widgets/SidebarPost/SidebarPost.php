<?php 
    //Register Widget
    add_action('widgets_init', 'widget_cat_sidebar');
    function widget_cat_sidebar()
    {
        register_widget('class_widget_cat_sidebar');
    }
    //End Register Widget
    
    
    
    //Create Widget Class
    class class_widget_cat_sidebar extends WP_widget
    {
        //Description Widget
        function class_widget_cat_sidebar()
        {
            
            $widget_ops=array('class' => 'class_widget_cat_sidebar', 'description'=>'AA Cat Sidebar');
            $control_ops=array('width' =>200, 'height'=>350, 'id-base'=>'id-widget-cat-sidebar');
            $this->WP_widget('class_widget_cat_sidebar',__('AA VMZ Cat Sidebar','thietkeweb.vietmoz.com'),$widget_ops,$control_ops);
        }
        //End Description Widget
         
         
		 function widget($args,$instance)
		 {
			extract($args);
            $cat = $instance['cat_id'];
		?>
			<div class="wrap-sidebar-post" id="<?php echo $this->id ?>">
            <a style="color:#fff" href="<?php echo get_category_link($cat); ?>"><div  class="title"><?php echo $instance['title'] ?></div></a>
            <div class="content">
                <?php
                    
                	$moment = array(
                		'cat'            => $cat,
                		'posts_per_page' => $instance['posts_per_page'],
                        'order'          => $instance['order'],
                        'orderby'        => $instance['orderby']
                	);
                	$posts = new WP_Query( $moment );
                 ?>
                 <ul class="left-cat-box">
                 <?php
                      	while( $posts -> have_posts() ) : $posts -> the_post();
                ?>                	
                        <?php 
                            
                        ?>
                        <li>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title() ?>"><img class="floatl" alt="<?php the_title() ?>" src="<?php echo bloginfo('template_directory').'/timthumb.php?src='.wp_get_attachment_url(get_post_thumbnail_id()).'&w=70&h=70'; ?>" /></a>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title() ?>"><?php the_title() ?></a>
                            <br /><span class="date"> - <?php echo get_the_date() ?></span>
                        </li>
                        <div class="clear"></div>
                    
        		<?php endwhile; ?>	
                </ul>
				
            </div>			
        </div>
		<?php
		 }
         
         
        function update($new_instance,$old_instance)
        {
            $instance=$old_instance;
            $instance['title'] = $new_instance['title'];
            $instance['cat_id'] = $new_instance['cat_id'];
            $instance['posts_per_page'] = $new_instance['posts_per_page'];
            $instance['order'] = $new_instance['order'];
            $instance['orderby'] = $new_instance['orderby'];
            return $instance;
        }
        
        
		function form($instance)
        {
            $defaults = array('title' => __( 'Default title' , 'thietkeweb.vietmoz.com' ),'posts_per_page' => __( '5' , 'thietkeweb.vietmoz.com' ),'cat_id' => __( '17' , 'thietkeweb.vietmoz.com' ));
            $instance = wp_parse_args((array) $instance, $defaults); 
			?>
            <div>
                <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Tiêu đề : ','thietkeweb.vietmoz.com'); ?></label>
                <input class="widefat" type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" />
			</div><br />
            
            
            
            <div>
            <label>Chuyên mục</label>
           <?php 
            $categories = get_categories('hide_empty=0');
           ?>   
            <select name="<?php echo $this->get_field_name('cat_id'); ?>">
            <option <?php if('' == $instance['cat_id']) echo 'selected' ?> value="">Tất cả</option>
           <?php 
            foreach($categories as $s_categories)
            {
            ?>
                <option <?php if($s_categories->term_id == $instance['cat_id']) echo 'selected' ?>  value="<?php echo $s_categories->term_id ?>"><?php echo $s_categories->name; ?></option>
            <?php
            }
            ?>
            </select>
            </div><br />
			
            <div>
                <label for="<?php echo $this->get_field_id('posts_per_page'); ?>"><?php _e('Số bài viết : ','thietkeweb.vietmoz.com'); ?></label>
                <input class="widefat" type="text" id="<?php echo $this->get_field_id('posts_per_page'); ?>" name="<?php echo $this->get_field_name('posts_per_page'); ?>" value="<?php echo $instance['posts_per_page']; ?>" />
			</div><br />
			
            
            <div>
            <label>Sắp xếp theo</label>
           <?php 
            $orderby = array('none', 'date', 'title', 'rand', 'comment_count');
           ?>   
            <select name="<?php echo $this->get_field_name('orderby'); ?>">
           <?php 
            foreach($orderby as $s_orderby=>$value)
            {
            ?>
                <option <?php if($value == $instance['orderby']) echo 'selected' ?>  value="<?php echo $value ?>"><?php echo $value ?></option>
            <?php
            }
            ?>
            </select>
            </div><br />
            
            
            <div>
            <label>Sắp thứ tự theo</label>
        
            <select name="<?php echo $this->get_field_name('order'); ?>">
            <option <?php if('ASC' == $instance['order']) echo 'selected' ?> value="ASC">ASC</option>
            <option <?php if('DESC' == $instance['order']) echo 'selected' ?> value="DESC">DESC</option>
            </select>
            </div><br />
			
			<?php
        }
    }
	//END Create Widget Class
?>