function validate_date($parameter, $bound = ""){
	$parameter = $parameter.split("-");
	if ($bound == "") {
		$now = new Date();
		$date = [$now.getFullYear(), $now.getMonth()+1, $now.getDate()];
	}else{
		$date = $bound.split("-");
	}
		
	for (var i = 0; i <= 2; i++) {
		if ($parameter[i] > $date[i]) {
			return 0;
		}else if($parameter[i] < $date[i]){
			return 1;
		}else if(i == 2 && $parameter[i] == $date[i]){
			return 1;
		}
	}
}
