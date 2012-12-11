<?php
class Chat extends Core {
	public function fetchMessages() {
		$this->query("
			SELECT  	`chat`.`message`,
						`users`.`username`,
						`users`.`user_id`
			FROM 		`chat`
			JOIN 		`users`
			ON 			`chat`.`user_id` = `users`.`users_id`
			ORDER BY 	`chat`.`timestamp`
			DESC
			");

		return $this->rows();
	}

	public function throwMessage($user_id, $message) {

	}
}
