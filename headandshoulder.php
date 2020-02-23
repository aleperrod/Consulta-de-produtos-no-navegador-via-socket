<?php
function HeadAndSoulder(){
	echo <<<MKM
	
	<!doctype html>
	<html>
	<head>
		<title>Consulta de Produto</title>
		<meta charset="utf-8">
		<style>
			table, th, td {
				border: 1px solid black;
				border-collapse: collapse;
			}
		</style>
	</head>
	<body>
		<header>
			<div>
				<img style="width: 298px; height: 163px;" alt="" src="enderecodaimagem">
			</div>
			<div>
				CONSULTA DE PRODUTOS NO BANCO MKM
			</div>
		</header>
	MKM;
}
