<?php
function LegsAndFeet($produto=''){
	if($produto === ''){
		echo <<<MKM
			<div>
				

			</div>
			
		</body>
	</html>
	MKM;
	}
	else{
		$p = xml_parser_create();
		xml_parse_into_struct($p, $produto, $vals, $index);
		
		echo "<div>";

		if($vals[1]['value'] != 'OK'){
			echo "<p>NÃO ENCONTRADO.</p>";
		}
		else{		
			echo "<table>";
			foreach($vals as $key=>$item){
				if($key>1 && isset($item['value']) ){
					echo "<tr>";
					echo "<td>{$vals[$key]['tag']}</td>";
					echo "<td>{$vals[$key]['value']}</td>";
					echo "</tr>";
				}
			}
			echo "</table>";
		}
		echo <<<MKM
				</div>
					
				</body>
			</html>
		MKM;
	}
}