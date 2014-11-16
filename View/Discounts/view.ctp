<div class="discounts view">
<h2><?php echo __('Discount'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($discount['Discount']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($discount['Discount']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discount Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($discount['DiscountType']['name'], array('controller' => 'discount_types', 'action' => 'view', $discount['DiscountType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Percent'); ?></dt>
		<dd>
			<?php echo h($discount['Discount']['percent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Interval'); ?></dt>
		<dd>
			<?php echo h($discount['Discount']['interval']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($discount['Discount']['amount']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Discount'), array('action' => 'edit', $discount['Discount']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Discount'), array('action' => 'delete', $discount['Discount']['id']), array(), __('Are you sure you want to delete # %s?', $discount['Discount']['id'])); ?> </li>
	</ul>
</div>
<?php echo $this->element('sidebar'); ?>
<div class="related">
	<h3><?php echo __('Related Admins'); ?></h3>
	<?php if (!empty($discount['Admin'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Group Id'); ?></th>
		<th><?php echo __('Discount Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Barcode'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Salt'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Email Verified'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('Ip Address'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($discount['Admin'] as $admin): ?>
		<tr>
			<td><?php echo $admin['id']; ?></td>
			<td><?php echo $admin['user_group_id']; ?></td>
			<td><?php echo $admin['discount_id']; ?></td>
			<td><?php echo $admin['username']; ?></td>
			<td><?php echo $admin['barcode']; ?></td>
			<td><?php echo $admin['password']; ?></td>
			<td><?php echo $admin['salt']; ?></td>
			<td><?php echo $admin['email']; ?></td>
			<td><?php echo $admin['first_name']; ?></td>
			<td><?php echo $admin['last_name']; ?></td>
			<td><?php echo $admin['email_verified']; ?></td>
			<td><?php echo $admin['active']; ?></td>
			<td><?php echo $admin['ip_address']; ?></td>
			<td><?php echo $admin['created']; ?></td>
			<td><?php echo $admin['modified']; ?></td>
			<td><?php echo $admin['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'admins', 'action' => 'view', $admin['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'admins', 'action' => 'edit', $admin['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'admins', 'action' => 'delete', $admin['id']), array(), __('Are you sure you want to delete # %s?', $admin['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Admin'), array('controller' => 'admins', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Barmen'); ?></h3>
	<?php if (!empty($discount['Barman'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Group Id'); ?></th>
		<th><?php echo __('Discount Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Barcode'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Salt'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Email Verified'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('Ip Address'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($discount['Barman'] as $barman): ?>
		<tr>
			<td><?php echo $barman['id']; ?></td>
			<td><?php echo $barman['user_group_id']; ?></td>
			<td><?php echo $barman['discount_id']; ?></td>
			<td><?php echo $barman['username']; ?></td>
			<td><?php echo $barman['barcode']; ?></td>
			<td><?php echo $barman['password']; ?></td>
			<td><?php echo $barman['salt']; ?></td>
			<td><?php echo $barman['email']; ?></td>
			<td><?php echo $barman['first_name']; ?></td>
			<td><?php echo $barman['last_name']; ?></td>
			<td><?php echo $barman['email_verified']; ?></td>
			<td><?php echo $barman['active']; ?></td>
			<td><?php echo $barman['ip_address']; ?></td>
			<td><?php echo $barman['created']; ?></td>
			<td><?php echo $barman['modified']; ?></td>
			<td><?php echo $barman['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'barmen', 'action' => 'view', $barman['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'barmen', 'action' => 'edit', $barman['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'barmen', 'action' => 'delete', $barman['id']), array(), __('Are you sure you want to delete # %s?', $barman['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Barman'), array('controller' => 'barmen', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Customers'); ?></h3>
	<?php if (!empty($discount['Customer'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Group Id'); ?></th>
		<th><?php echo __('Discount Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Barcode'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Salt'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Email Verified'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('Ip Address'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($discount['Customer'] as $customer): ?>
		<tr>
			<td><?php echo $customer['id']; ?></td>
			<td><?php echo $customer['user_group_id']; ?></td>
			<td><?php echo $customer['discount_id']; ?></td>
			<td><?php echo $customer['username']; ?></td>
			<td><?php echo $customer['barcode']; ?></td>
			<td><?php echo $customer['password']; ?></td>
			<td><?php echo $customer['salt']; ?></td>
			<td><?php echo $customer['email']; ?></td>
			<td><?php echo $customer['first_name']; ?></td>
			<td><?php echo $customer['last_name']; ?></td>
			<td><?php echo $customer['email_verified']; ?></td>
			<td><?php echo $customer['active']; ?></td>
			<td><?php echo $customer['ip_address']; ?></td>
			<td><?php echo $customer['created']; ?></td>
			<td><?php echo $customer['modified']; ?></td>
			<td><?php echo $customer['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'customers', 'action' => 'view', $customer['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'customers', 'action' => 'edit', $customer['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'customers', 'action' => 'delete', $customer['id']), array(), __('Are you sure you want to delete # %s?', $customer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Employees'); ?></h3>
	<?php if (!empty($discount['Employee'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Group Id'); ?></th>
		<th><?php echo __('Discount Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Barcode'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Salt'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Email Verified'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('Ip Address'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($discount['Employee'] as $employee): ?>
		<tr>
			<td><?php echo $employee['id']; ?></td>
			<td><?php echo $employee['user_group_id']; ?></td>
			<td><?php echo $employee['discount_id']; ?></td>
			<td><?php echo $employee['username']; ?></td>
			<td><?php echo $employee['barcode']; ?></td>
			<td><?php echo $employee['password']; ?></td>
			<td><?php echo $employee['salt']; ?></td>
			<td><?php echo $employee['email']; ?></td>
			<td><?php echo $employee['first_name']; ?></td>
			<td><?php echo $employee['last_name']; ?></td>
			<td><?php echo $employee['email_verified']; ?></td>
			<td><?php echo $employee['active']; ?></td>
			<td><?php echo $employee['ip_address']; ?></td>
			<td><?php echo $employee['created']; ?></td>
			<td><?php echo $employee['modified']; ?></td>
			<td><?php echo $employee['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'employees', 'action' => 'view', $employee['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'employees', 'action' => 'edit', $employee['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'employees', 'action' => 'delete', $employee['id']), array(), __('Are you sure you want to delete # %s?', $employee['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Managers'); ?></h3>
	<?php if (!empty($discount['Manager'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Group Id'); ?></th>
		<th><?php echo __('Discount Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Barcode'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Salt'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Email Verified'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('Ip Address'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($discount['Manager'] as $manager): ?>
		<tr>
			<td><?php echo $manager['id']; ?></td>
			<td><?php echo $manager['user_group_id']; ?></td>
			<td><?php echo $manager['discount_id']; ?></td>
			<td><?php echo $manager['username']; ?></td>
			<td><?php echo $manager['barcode']; ?></td>
			<td><?php echo $manager['password']; ?></td>
			<td><?php echo $manager['salt']; ?></td>
			<td><?php echo $manager['email']; ?></td>
			<td><?php echo $manager['first_name']; ?></td>
			<td><?php echo $manager['last_name']; ?></td>
			<td><?php echo $manager['email_verified']; ?></td>
			<td><?php echo $manager['active']; ?></td>
			<td><?php echo $manager['ip_address']; ?></td>
			<td><?php echo $manager['created']; ?></td>
			<td><?php echo $manager['modified']; ?></td>
			<td><?php echo $manager['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'managers', 'action' => 'view', $manager['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'managers', 'action' => 'edit', $manager['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'managers', 'action' => 'delete', $manager['id']), array(), __('Are you sure you want to delete # %s?', $manager['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Manager'), array('controller' => 'managers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Privilegeds'); ?></h3>
	<?php if (!empty($discount['Privileged'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Group Id'); ?></th>
		<th><?php echo __('Discount Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Barcode'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Salt'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Email Verified'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('Ip Address'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($discount['Privileged'] as $privlaged): ?>
		<tr>
			<td><?php echo $privileged['id']; ?></td>
			<td><?php echo $privileged['user_group_id']; ?></td>
			<td><?php echo $privileged['discount_id']; ?></td>
			<td><?php echo $privileged['username']; ?></td>
			<td><?php echo $privileged['barcode']; ?></td>
			<td><?php echo $privileged['password']; ?></td>
			<td><?php echo $privileged['salt']; ?></td>
			<td><?php echo $privileged['email']; ?></td>
			<td><?php echo $privileged['first_name']; ?></td>
			<td><?php echo $privileged['last_name']; ?></td>
			<td><?php echo $privileged['email_verified']; ?></td>
			<td><?php echo $privileged['active']; ?></td>
			<td><?php echo $privileged['ip_address']; ?></td>
			<td><?php echo $privileged['created']; ?></td>
			<td><?php echo $privileged['modified']; ?></td>
			<td><?php echo $privileged['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'privilegeds', 'action' => 'view', $privlaged['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'privilegeds', 'action' => 'edit', $privlaged['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'privilegeds', 'action' => 'delete', $privlaged['id']), array(), __('Are you sure you want to delete # %s?', $privlaged['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Privileged'), array('controller' => 'privilegeds', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Promoters'); ?></h3>
	<?php if (!empty($discount['Promoter'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Group Id'); ?></th>
		<th><?php echo __('Discount Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Barcode'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Salt'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Email Verified'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('Ip Address'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($discount['Promoter'] as $promoter): ?>
		<tr>
			<td><?php echo $promoter['id']; ?></td>
			<td><?php echo $promoter['user_group_id']; ?></td>
			<td><?php echo $promoter['discount_id']; ?></td>
			<td><?php echo $promoter['username']; ?></td>
			<td><?php echo $promoter['barcode']; ?></td>
			<td><?php echo $promoter['password']; ?></td>
			<td><?php echo $promoter['salt']; ?></td>
			<td><?php echo $promoter['email']; ?></td>
			<td><?php echo $promoter['first_name']; ?></td>
			<td><?php echo $promoter['last_name']; ?></td>
			<td><?php echo $promoter['email_verified']; ?></td>
			<td><?php echo $promoter['active']; ?></td>
			<td><?php echo $promoter['ip_address']; ?></td>
			<td><?php echo $promoter['created']; ?></td>
			<td><?php echo $promoter['modified']; ?></td>
			<td><?php echo $promoter['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'promoters', 'action' => 'view', $promoter['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'promoters', 'action' => 'edit', $promoter['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'promoters', 'action' => 'delete', $promoter['id']), array(), __('Are you sure you want to delete # %s?', $promoter['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Promoter'), array('controller' => 'promoters', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Superemployees'); ?></h3>
	<?php if (!empty($discount['Superemployee'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Group Id'); ?></th>
		<th><?php echo __('Discount Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Barcode'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Salt'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Email Verified'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('Ip Address'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($discount['Superemployee'] as $superemployee): ?>
		<tr>
			<td><?php echo $superemployee['id']; ?></td>
			<td><?php echo $superemployee['user_group_id']; ?></td>
			<td><?php echo $superemployee['discount_id']; ?></td>
			<td><?php echo $superemployee['username']; ?></td>
			<td><?php echo $superemployee['barcode']; ?></td>
			<td><?php echo $superemployee['password']; ?></td>
			<td><?php echo $superemployee['salt']; ?></td>
			<td><?php echo $superemployee['email']; ?></td>
			<td><?php echo $superemployee['first_name']; ?></td>
			<td><?php echo $superemployee['last_name']; ?></td>
			<td><?php echo $superemployee['email_verified']; ?></td>
			<td><?php echo $superemployee['active']; ?></td>
			<td><?php echo $superemployee['ip_address']; ?></td>
			<td><?php echo $superemployee['created']; ?></td>
			<td><?php echo $superemployee['modified']; ?></td>
			<td><?php echo $superemployee['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'superemployees', 'action' => 'view', $superemployee['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'superemployees', 'action' => 'edit', $superemployee['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'superemployees', 'action' => 'delete', $superemployee['id']), array(), __('Are you sure you want to delete # %s?', $superemployee['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Superemployee'), array('controller' => 'superemployees', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($discount['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Group Id'); ?></th>
		<th><?php echo __('Discount Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Barcode'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Salt'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Email Verified'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('Ip Address'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($discount['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['user_group_id']; ?></td>
			<td><?php echo $user['discount_id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['barcode']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['salt']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><?php echo $user['first_name']; ?></td>
			<td><?php echo $user['last_name']; ?></td>
			<td><?php echo $user['email_verified']; ?></td>
			<td><?php echo $user['active']; ?></td>
			<td><?php echo $user['ip_address']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), array(), __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Waiters'); ?></h3>
	<?php if (!empty($discount['Waiter'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Group Id'); ?></th>
		<th><?php echo __('Discount Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Barcode'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Salt'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Email Verified'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('Ip Address'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($discount['Waiter'] as $waiter): ?>
		<tr>
			<td><?php echo $waiter['id']; ?></td>
			<td><?php echo $waiter['user_group_id']; ?></td>
			<td><?php echo $waiter['discount_id']; ?></td>
			<td><?php echo $waiter['username']; ?></td>
			<td><?php echo $waiter['barcode']; ?></td>
			<td><?php echo $waiter['password']; ?></td>
			<td><?php echo $waiter['salt']; ?></td>
			<td><?php echo $waiter['email']; ?></td>
			<td><?php echo $waiter['first_name']; ?></td>
			<td><?php echo $waiter['last_name']; ?></td>
			<td><?php echo $waiter['email_verified']; ?></td>
			<td><?php echo $waiter['active']; ?></td>
			<td><?php echo $waiter['ip_address']; ?></td>
			<td><?php echo $waiter['created']; ?></td>
			<td><?php echo $waiter['modified']; ?></td>
			<td><?php echo $waiter['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'waiters', 'action' => 'view', $waiter['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'waiters', 'action' => 'edit', $waiter['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'waiters', 'action' => 'delete', $waiter['id']), array(), __('Are you sure you want to delete # %s?', $waiter['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Waiter'), array('controller' => 'waiters', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
