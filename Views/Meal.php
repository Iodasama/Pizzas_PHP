<?php




class Meal {
	protected $price;   // si en private irrecuperable pour enfant

	protected $status;

	protected $orderAt;

	protected $size;


	public function pay() {

		if ($this->status === "en cours de commande") {
			$this->status = "payé";
		}

	}


	public function ship() {

		if ($this->status === "payé") {
			$this->status = "livré";
		}
	}
}