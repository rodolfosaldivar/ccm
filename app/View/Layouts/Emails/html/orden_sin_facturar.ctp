<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts.Email.html
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
	<title><?php echo $this->fetch('title'); ?></title>
</head>
<body>

	<p>
		La Orden de Compra <b><u><?php echo $orden_id; ?></u></b> no pudo ser facturada.
		<br><br>
		Pertenece al Colegio:
		<br>
		<b><?php echo $colegio_id ?>: <?php echo $colegio_nombre ?></b>
		<br><br>
		Fue porque el Web Service de facturación tiene un problema.
	</p>

	<?php if ($error): ?>
		<p>
			Error:
			<br>
			<?php echo $error ?>
		</p>
	<?php endif ?>

	<?php echo $this->fetch('content'); ?>

</body>
</html>