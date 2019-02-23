<?php  if(count($errors)>0): ?>
		<tr class="error">
			<td colspan="2" class="error">
				<?php foreach ($errors as $error): ?>
					<p><?php echo $error; ?></p>
				<?php endforeach ?>
			</td>
		</tr>
 <?php endif ?>