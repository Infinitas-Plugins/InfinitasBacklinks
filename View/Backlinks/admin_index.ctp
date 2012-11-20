<?php
	/**
	 * Backlinks to the site
	 *
	 * Shows a list of backlinks to the site
	 *
	 * Copyright (c) 2010 Carl Sutton ( dogmatic69 )
	 *
	 * @filesource
	 * @copyright Copyright (c) 2010 Carl Sutton ( dogmatic69 )
	 * @link http://www.infinitas-cms.org
	 * @package blog
	 * @subpackage blog.category.views.admin_index
	 * @license http://www.opensource.org/licenses/mit-license.php The MIT License
	 * @since 0.7a
	 *
	 * @author Carl Sutton ( dogmatic69 )
	 *
	 * Licensed under The MIT License
	 * Redistributions of files must retain the above copyright notice.
	 */

    //echo $this->Form->create( 'Category', array( 'url' => array( 'controller' => 'categories', 'action' => 'mass', 'admin' => 'true' ) ) );
	echo $this->Infinitas->adminIndexHead(null, false);
?>
<table class="listing">
	<?php
		echo $this->Infinitas->adminTableHeader(array(
			__('Publishe') => array(
				'style' => 'width:100px;'
			),
			__('Title') => array(
				'style' => 'width:150px;'
			),
			__('Description'),
			__('Creator') => array(
				'style' => 'width:100px;'
			),
			__('Date') => array(
				'class' => 'date'
			)
		));

		foreach($data as $link) { ?>
			<tr>
				<td><?php echo $link['Backlink']['publisher']; ?>&nbsp;</td>
				<td><?php echo $this->Html->link($link['Backlink']['title'], $link['Backlink']['link']); ?>&nbsp;</td>
				<td><?php echo $link['Backlink']['description']; ?>&nbsp;</td>
				<td><?php echo $link['Backlink']['creator']; ?>&nbsp;</td>
				<td><?php echo $this->Infinitas->date($link['Backlink']['date']); ?>&nbsp;</td>
			</tr> <?php
		}
	?>
</table>
<?php
	//echo $this->Form->end();