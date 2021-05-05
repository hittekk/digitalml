<section class="actions resources-actions section">

    <div class="actions__container container">
    
        <div class="actions__main">
		
				<div class="filters">

					<div id="topic-filter" class="filter-dropdown dropdown">
						<?php
							$topics = get_terms( array(
								'taxonomy' => 'resource_topic',
								'hide_empty' => false
							) );
							
						?>
						<button id="topic-menu" class="filter-dropdown__trigger dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							Topic <span class="count"></span> <span class="icon glyphicon glyphicon-menu-down" aria-hidden="true"></span>
						</button>
						<?php if ($topics):?>
							<ul class="filter-dropdown__menu dropdown-menu dropdown-menu--topics" aria-labelledby="topic-menu">
							<?php foreach( $topics as $topic) :?>
								<li class="dropdown-menu__item">
									<label class="dropdown-menu__item--label" for="input-<?php echo $topic->slug; ?>"><?php echo $topic->name; ?></label>
									<input class="dropdown-menu__item--checkbox" type="checkbox" id="input-<?php echo $topic->slug; ?>" name="topics[]" value="<?php echo $topic->name; ?>">
								</li>
							<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</div><!-- #topic-filter -->

					<div id="type-filter" class="filter-dropdown dropdown">
						<?php
							$types = get_terms( array(
								'taxonomy' => 'resource_type',
								'hide_empty' => false
							) );
							
						?>
						<button id="type-menu" class="filter-dropdown__trigger dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							Type <span class="count"></span> <span class="icon glyphicon glyphicon-menu-down" aria-hidden="true"></span>
						</button>
						<?php if ($types):?>
							<ul class="filter-dropdown__menu dropdown-menu dropdown-menu--types" aria-labelledby="type-menu">
							<?php foreach( $types as $type) :?>
							<?php 
							$resources_types       = get_field('resources_types', $type);
							$color                 = $resources_types['label_color'] ? $resources_types['label_color']  : '' ;
							?>
								<li class="dropdown-menu__item">
									<label class="dropdown-menu__item--label" for="input-<?php echo $type->slug; ?>"><?php echo $type->name; ?></label>
									<input class="dropdown-menu__item--checkbox" type="checkbox" id="input-<?php echo $type->slug; ?>" name="types[]" value="<?php echo $type->name; ?>"<?php echo $color ? ' data-color="'.$color .'"':'';?>>
								</li>
							<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</div><!-- #type-filter -->

				</div><!-- .filters -->

				<div class="search">

				   	<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" autocomplete="off">
	  
						<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ); ?></span>
						<input type="search" class="search-form__field search-field--resources search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder' ); ?>" value="" name="s">
						<input type="hidden" value="resource" name="post_type">
						<button class="search-form__button" type=”button” id=”searchsubmit” value="Search">Search</button>

					</form>

				</div><!-- .search -->

        </div><!-- .actions__main -->

        <!-- only show when Topic or Type filters have been applied -->
        <div class="actions__tags">

        </div><!-- .actions__tags -->

        <div class="actions__secondary">

            <div class="pagination">
                <!-- pagination here but not a priority -->
            </div>

            <div class="sorting">

                <div id="sorting-filter" class="sorting-dropdown dropdown">
                    <button id="sorting-menu" class="sorting-dropdown__trigger dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"  data-sort="date" data-dir="DESC">
                        Newest <span class="icon glyphicon glyphicon-collapse-up" aria-hidden="true"></span>
                    </button>

                    <ul class="sorting-dropdown__menu dropdown-menu dropdown-menu--topics" aria-labelledby="topic-menu">
                        <li class="dropdown-menu__item" data-sort="post_id" data-dir="DESC">
                            <span class="dropdown-menu__item--label">Newest</span>
                            <span class="dropdown-menu__item--icon glyphicon glyphicon-collapse-up" aria-hidden="true"></span>
                        </li>
                        <li class="dropdown-menu__item" data-sort="post_id" data-dir="ASC">
                            <span class="dropdown-menu__item--label">Oldest</span>
                            <span class="dropdown-menu__item--icon glyphicon glyphicon-collapse-down" aria-hidden="true"></span>
                        </li>
                        <li class="dropdown-menu__item" data-sort="title" data-dir="ASC">
                            <span class="dropdown-menu__item--label">Title A to Z</span>
                            <span class="dropdown-menu__item--icon glyphicon glyphicon-collapse-up" aria-hidden="true"></span>
                        </li>
                        <li class="dropdown-menu__item" data-sort="title" data-dir="DESC">
                            <span class="dropdown-menu__item--label">Title Z to A</span>
                            <span class="dropdown-menu__item--icon glyphicon glyphicon-collapse-down" aria-hidden="true"></span>
                        </li>
                    </ul>
                </div><!-- #topic-filter -->

            </div><!-- .sorting -->

        </div><!-- .actions__secondary -->

    </div><!-- .actions__container -->

</section><!-- .actions -->
<script>
jQuery(document).ready(function($){
    $(".sorting-dropdown__menu li").click(function(){

      $("#sorting-filter button").text($(this).text());
	  $("#sorting-filter button").data('sort',$(this).data('sort'));
	  $("#sorting-filter button").data('dir',$(this).data('dir'));
      $("#sorting-filter button").append($('.dropdown-menu__item--icon',this).clone().addClass('icon').removeClass('dropdown-menu__item--icon'));
	filter();
   });
   
   $('#topic-filter input').change(function(){
	  if ( $('#topic-filter  input:checked').length ) {
		$('#topic-filter button .count').text('('+$('#topic-filter  input:checked').length+')');
	  }
	  else {
		  $('#topic-filter  button .count').text('');
	  }
	  if ( $(this).prop('checked') ){
		$('.actions__tags').prepend('<div class="alert alert--topic alert-dismissible alert--'+$(this).attr('id')+'" role="alert"><span class="alert__label">'+$(this).val()+'</span><button type="button" class="alert__close close" data-dismiss="alert" aria-label="Close"  data-input="'+$(this).attr('id')+'"><span class="alert__close--icon" aria-hidden="true">&times;</span></button></div>');
	  }
	  else{
		  $('.actions__tags .alert--'+$(this).attr('id')).remove();
	  }
	  filter();
   });
   $('#type-filter input').change(function(){
	  if ( $('#type-filter input:checked').length ) {
		  $('#type-filter  button .count').text('('+$('#type-filter input:checked').length+')');
	  }
	  else  {
		  $('#type-filter  button .count').text('');
	  }
	  if ( $(this).prop('checked') ){
		  $('.actions__tags').append('<div class="alert alert--type  alert-dismissible alert--'+$(this).attr('id')+'" role="alert"'+($(this).data('color') ? ' style="background:'+$(this).data('color')+';"' : '')+'><span class="alert__label">'+$(this).val()+'</span><button type="button" class="alert__close close" data-dismiss="alert" aria-label="Close" data-input="'+$(this).attr('id')+'"><span class="alert__close--icon" aria-hidden="true">&times;</span></button></div>');
	  }
	  else{
		  $('.actions__tags .alert--'+$(this).attr('id')).remove();
	  }
	  filter();
   });

    $(document).on("click",".actions__tags .alert button",function(){
      $("#"+$(this).data('input')).prop('checked',false);
	  $("#"+$(this).data('input')).trigger('change');
		filter();
   });
   
   $('.search-form').submit(function(){
	   filter();
	   return false;
   });
   
   function filter(){
	   var topics = $('#topic-filter input:checkbox:checked').map( function() {
			return this.value;
		}).get().join(",");
		
		var types = $('#type-filter input:checkbox:checked').map( function() {
			return this.value;
		}).get().join(",");
	   var search = $('.search-form__field').val();
	   var slideOffInterval = 100;
	   $('.resources__container .card').each(function () {
			 $(this).fadeOut(100, 'linear');
		  });
	   $.ajax({
		  url: "<?php echo get_the_permalink();?>",
		  type: "get", //send it through get method
		  data: { 
			topics: topics, 
			types: types, 
			search: search,
			sort: $('#sorting-menu').data('sort'),
			dir: $('#sorting-menu').data('dir')
		  },
		  success: function(response) {
			 $('.resources__container').html($(response).find('.resources__container section'));
		  },
		  error: function(xhr) {
			//Do Something to handle error
		  }
		});
   }

	
});
</script>