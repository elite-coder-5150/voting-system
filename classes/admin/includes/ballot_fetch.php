<?php

	include 'session.php';
	include 'slugify.php';
	include '../Database.php';

	$db = new Database();
	
	$sql = "SELECT * from positions";
	
	$query = $db->prepare($sql);

	$output = '';
	$candidate = '';

	$sql = "SELECT *
			from candidates
			order by priority ";

	$query = $db->prepare($sql);
	$num = 1;

	while ($row = $query->fetch(\PDO::FETCH_OBJ)) {
		$input = ($row->max_votes > 1) ? '<input type="checkbox" class="flat-red" '.slugify($row->description).'" name="'.slugify($row->name).'" value="' : null;

		$sql = "
			SELECT *
			from candidates where positions_id=?
		";

		$query = $db->prepare($sql);
		$query->execute([
			':position_id' => $id
		]);

		while ($row = $query->fetch(\PDO::FETCH_OBJ)) {
			$img = (!empty($row->avatar)) ? '../img/'.$row->avatar : '../img/profile.jpg';
		}
	}

