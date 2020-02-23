<?php
function BarCodeForm(){
	echo <<<MKM
			<div>
				<form action="endereço" method="POST">
					<p>Digite o código de barras: <input type="text" name="barras" value="" required autofocus="autofocus"> <input type="submit" name="submeter" value="Consultar"></p>
				</form>
			</div>
	MKM;
}
