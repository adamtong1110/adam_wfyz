<?php
//最新活动区块
//[field_image_logo] == Field: 行政部门封面图
//[title] == Content: Title
//[field_single_date] == Content: 活动日期和时间
//[field_single_date-value] == Raw value
//[field_single_date-value2] == Raw value2

//$fields: an array of $field objects. Each one contains:
//$field->content: The output of the field.
//$field->raw: The raw data for the field, if it exists. This is NOT output safe.
//$field->class: The safe class id to use.
//$field->handler: The Views field handler object controlling this field. Do not use var_export to dump this object, as it can't handle the recursion.
//$field->inline: Whether or not the field should be inline.
//$field->inline_html: either div or span based on the above flag.
//$field->wrapper_prefix: A complete wrapper containing the inline_html to use.
//$field->wrapper_suffix: The closing tag for the wrapper.
//$field->separator: an optional separator that may appear before a field.
//$field->label: The wrap label text to use.
//$field->label_html: The full HTML of the label to use including configured element type.
?>










<div class="row right-block">
          	<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="list-box-image news">
				<?php print $fields['field_image_logo']->content; ?>
				</div>

			  	<div class="right-block-bottom news">                
			        <p><?php print $fields['title']->content; ?></p>
			        <div><?php print $fields['field_single_date']->content; ?></div>
			    </div>
			</div>
		</div>












